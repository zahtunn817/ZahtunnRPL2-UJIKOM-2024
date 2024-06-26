<div class="modal fade" id="menu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Menu</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="menu" enctype="multipart/form-data">
                    @csrf
                    <div id="method"></div>
                    <input type="hidden" name="old_image" id="old_image">
                    <div class="form-group row">
                        <label for="nama_menu" class="col-sm-4 col-form-label">Nama menu</label>
                        <input type="text" class="form-control col-sm-8" id="nama_menu" name="nama_menu" placeholder="Nama menu">
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-4 col-form-label">Deskripsi</label>
                        <textarea class="form-control col-sm-8" name="deskripsi" id="deskripsi" cols="30" rows="3" placeholder="Deskripi"></textarea>
                    </div>
                    <div class="form-group row">
                        <label for="jenis_id" class="col-sm-4 col-form-label">Jenis</label>
                        <select class="form-control col-sm-8" name="jenis_id" id="jenis_id">
                            @foreach ($jenis as $item)
                            <option value="{{ $item->id }}">{{ $item->nama_jenis  }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-sm-4 col-form-label">Foto <sub>(opsional)</sub></label>
                        <input type="file" class="form-control col-sm-8" id="image" name="image" placeholder="Gambar" onchange="previewImage()" accept=".png, .jpeg, .jpg">
                    </div>
                    <img class="img-preview img-fluid mb-3" style="max-height: 200px">
                    <div class="form-group row">
                        <label for="harga" class="col-sm-4 col-form-label">Harga</label>
                        <input type="number" class="form-control col-sm-8" id="harga" name="harga" placeholder="Harga">
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="menuExport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Export data menu</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <a href="{{ route('cetakpdf-menu') }}" class="btn btn-danger btn-icon-split mr-3">
                    <span class="icon text-white-50">
                        <i class="fas fa-file-pdf"></i>
                    </span>
                    <span class="text">Pdf</span>
                </a>
                <a href="{{ route('export-menu') }}" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-file-excel"></i>
                    </span>
                    <span class="text">Excel</span>
                </a>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="menuImport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Import menu</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('import-menu') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="import" class="col-sm-4 col-form-label">File excel</label>
                        <input type="file" name="import" id="import" class="form-control col-sm-8">
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>