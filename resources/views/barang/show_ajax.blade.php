@empty($barang)
    <div id="modal-master" class="modal-dialog modal-lg" role="document">
        <div class="modal-content shadow-lg border-0">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="exampleModalLabel">Kesalahan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger">
                    <h5><i class="icon fas fa-ban"></i> Kesalahan!!!</h5>
                    Data yang Anda cari tidak ditemukan.
                </div>
                <a href="{{ url('/user') }}" class="btn btn-warning btn-sm">Kembali</a>
            </div>
        </div>
    </div>
@else
    <div id="modal-master" class="modal-dialog modal-lg" role="document">
        <div class="modal-content shadow-lg border-0">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="exampleModalLabel">Detail Barang</h5>
            </div>
            <div class="modal-body">
                <table class="table table-hover table-bordered">
                    <tr>
                        <th class="text-end col-3">ID :</th>
                        <td class="col-9">{{ $barang->barang_id }}</td>
                    </tr>
                    <tr>
                        <th class="text-end col-3">Kode Barang :</th>
                        <td class="col-9">{{ $barang->barang_kode }}</td>
                    </tr>
                    <tr>
                        <th class="text-end col-3">Kategori :</th>
                        <td class="col-9">{{ $barang->kategori->kategori_nama }}</td>
                    </tr>
                    <tr>
                        <th class="text-end col-3">Nama :</th>
                        <td class="col-9">{{ $barang->barang_nama }}</td>
                    </tr>
                    <tr>
                        <th class="text-end col-3">Harga Beli :</th>
                        <td class="col-9">{{ number_format($barang->harga_beli, 0, ',', '.') }} IDR</td>
                    </tr>
                    <tr>
                        <th class="text-end col-3">Harga Jual :</th>
                        <td class="col-9">{{ number_format($barang->harga_jual, 0, ',', '.') }} IDR</td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-secondary">Tutup</button>
            </div>
        </div>
    </div>
@endempty
