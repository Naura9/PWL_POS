<?php
namespace App\Http\Controllers;

use App\Models\KategoriModel;
use App\Models\BarangModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class BarangController extends Controller
{
    // Menampilkan halaman awal barang
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Daftar Barang',
            'list' => ['Home', 'Barang']
        ];

        $page = (object) [
            'title' => 'Daftar barang yang terdaftar dalam sistem'
        ];

        $activeMenu = 'barang'; // set menu yang sedang aktif

        $kategori = KategoriModel::all(); // ambil data kategori untuk filter kategori

        return view('barang.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'kategori' => $kategori, 'activeMenu' => $activeMenu]);
    }

    // Ambil data barang dalam bentuk json untuk datatables
    public function list(Request $request)
    {
        $barang = BarangModel::select('barang_id', 'barang_kode', 'barang_nama', 'harga_beli', 'harga_jual', 'kategori_id')
            ->with('kategori');

        // Filter data barang berdasarkan kategori id
        if ($request->kategori_id) {
            $barang->where('kategori_id', $request->kategori_id);
        }
        
        return DataTables::of($barang)
            // menambahkan kolom index / no urut (default nama kolom: DT_RowIndex)
            ->addIndexColumn()
            ->addColumn('aksi', function ($barang) { // menambahkan kolom aksi
                $btn = '<a href="'.url('/barang/' . $barang->barang_id).'" class="btn btn-info btn-sm">Detail</a> ';
                $btn .= '<a href="'.url('/barang/' . $barang->barang_id . '/edit').'" class="btn btn-warning btn-sm">Edit</a> ';
                $btn .= '<form class="d-inline-block" method="POST" action="'.url('/barang/'.$barang->barang_id).'">'
                    . csrf_field() . method_field('DELETE') .
                    '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakin menghapus data ini?\');">Hapus</button></form>';
                
                return $btn;
            })
            ->rawColumns(['aksi']) // memberitahu bahwa kolom aksi adalah html
            ->make(true);
    }

    // Menampilkan halaman form tambah barang
    public function create()
    {
        $breadcrumb = (object) [
            'title' => 'Tambah Barang',
            'list' => ['Home', 'Barang', 'Tambah']
        ];

        $page = (object) [
            'title' => 'Tambah barang baru'
        ];

        $kategori = KategoriModel::all(); // Ambil data kategori untuk ditampilkan di form
        $activeMenu = 'barang'; // Set menu yang sedang aktif

        return view('barang.create', [
            'breadcrumb' => $breadcrumb,
            'page' => $page,
            'kategori' => $kategori,
            'activeMenu' => $activeMenu
        ]);
    }

    // Menyimpan data barang baru
    public function store(Request $request)
    {
        $request->validate([
            // barang_kode harus diisi, berupa string, minimal 3 karakter, dan bernilai unik di tabel m_barang kolom barang_kode
            'barang_kode' => 'required|string|min:3|unique:m_barang,barang_kode',
            
            // barang_nama harus diisi, berupa string, dan maksimal 100 karakter
            'barang_nama' => 'required|string|max:100',
            
            // harga_beli harus diisi dan berupa angka (untuk harga, lebih cocok menggunakan tipe integer atau numeric)
            'harga_beli' => 'required|numeric',
            
            // harga_jual harus diisi dan berupa angka
            'harga_jual' => 'required|numeric',
            
            // kategori_id harus diisi dan berupa angka
            'kategori_id' => 'required|integer',
        ]);

        // Membuat data barang berdasarkan input yang diberikan
        BarangModel::create([
            'barang_kode' => $request->barang_kode,
            'barang_nama' => $request->barang_nama,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'kategori_id' => $request->kategori_id,
        ]);

        // Redirect kembali ke halaman daftar barang dengan pesan sukses
        return redirect('/barang')->with('success', 'Data barang berhasil disimpan');
    }


    // Menampilkan detail barang
    public function show(string $id)
    {
        $barang = BarangModel::with('kategori')->find($id);
        
        $breadcrumb = (object) [
            'title' => 'Detail Barang',
            'list' => ['Home', 'Barang', 'Detail']
        ];
        
        $page = (object) [
            'title' => 'Detail Barang'
        ];
        
        $activeMenu = 'barang'; // set menu yang sedang aktif

        return view('barang.show', [
            'breadcrumb' => $breadcrumb,
            'page' => $page,
            'barang' => $barang,
            'activeMenu' => $activeMenu
        ]);
    }

        //menampilkan halaman form edit barang
        public function edit (string $id){
            $barang = BarangModel::find($id);
            $kategori = KategoriModel::all();

            $breadcrumb = (object)[
                'title' => 'Edit Barang',
                'list' => ['Home', 'Barang', 'Edit']
            ];

            $page = (object)[
                'title' => 'Edit Barang'
            ];

            $activeMenu = 'barang'; //set menu sedang aktif

            return view('barang.edit', ['breadcrumb' => $breadcrumb, 'page' => $page, 'barang' => $barang, 'kategori' => $kategori, 'activeMenu' => $activeMenu]);
        } 

        // menyimpan data barang 
        public function update(Request $request, string $id)
        {
            $request->validate([
                // barang_nama harus diisi, berupa string, min 3 karakter, bernilai unik di tabel m_barang kolom barang_nama kecuali untuk barang dengan id yang sedang diedit
                'barang_nama' => 'required|string|min:3|unique:m_barang,barang_nama,' . $id . ',barang_id',
                'barang_kode' => 'required|string|max:50', // kode barang harus diisi, berupa string, dan max 50 karakter
                'harga_beli' => 'required|numeric|min:0', 
                'harga_jual' => 'required|numeric|min:0', 
                'kategori_id' => 'required|integer' // kategori_id harus diisi dan berupa angka
            ]);

            // Mencari barang berdasarkan ID
            $barang = BarangModel::find($id);

            // Update data barang
            $barang->update([
                'barang_nama' => $request->barang_nama,
                'barang_kode' => $request->barang_kode,
                'harga_beli' => $request->harga_beli,
                'harga_jual' => $request->harga_jual,
                'kategori_id' => $request->kategori_id
            ]);

            // Redirect setelah berhasil
            return redirect('/barang')->with('success', 'Data barang berhasil diubah');
        }


        // Menghapus data barang
        public function destroy(string $id)
        {
            // Cek apakah data barang dengan ID yang dimaksud ada atau tidak
            $check = BarangModel::find($id);
            
            if (!$check) {
                return redirect('/barang')->with('error', 'Data barang tidak ditemukan');
            }

            try {
                // Hapus data barang
                BarangModel::destroy($id);
                return redirect('/barang')->with('success', 'Data barang berhasil dihapus');
            } catch (\Illuminate\Database\QueryException $e) {
                // Jika terjadi error ketika menghapus data, redirect kembali ke halaman dengan membawa pesan error
                return redirect('/barang')->with('error', 'Data barang gagal dihapus karena masih terdapat tabel lain yang terkait dengan data ini');
            }
        }
}