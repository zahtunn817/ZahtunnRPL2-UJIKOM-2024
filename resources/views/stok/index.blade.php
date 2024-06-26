@extends('templates.layout')
@push('style')
@endpush
@section('content')
@include('stok.form')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{ $page }}</h6>
    </div>
    <div class="card-body">
        @include('templates.alert')

        <a href="#" class="btn btn-danger btn-icon-split mb-3" data-toggle="modal" data-target="#stokExport">
            <span class="icon text-white-50">
                <i class="fas fa-file-export"></i>
            </span>
            <span class="text">Export</span>
        </a>
        <a href="#" class="btn btn-success btn-icon-split mb-3" data-toggle="modal" data-target="#stokImport">
            <span class="icon text-white-50">
                <i class="fas fa-file-import"></i>
            </span>
            <span class="text">Import</span>
        </a>
        @include('stok.data')
    </div>
</div>
@endsection
@push('script')
<script>
    console.log('stok')
    $('.alert-success').fadeTo(2000, 500).slideUp(500, function() {
        $('.alert-success').slideUp(500)
    });

    $('.delete-data').on('click', function(e) {
        e.preventDefault()
        let menu_id = $(this).closest('tr').find('td:eq(1)').text()
        Swal.fire({
            title: `Apakah data <span style="color:red"><b>stok ${menu_id}</b></span> akan dihapus?`,
            text: 'Data tidak bisa dikembalikan!',
            icon: 'error',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: 'd33',
            confirmButtonText: 'Ya, hapus data ini!'
        }).then((result) => {
            if (result.isConfirmed)
                $(e.target).closest('form').submit()
            else swal.close()
        })
    })

    $('#stok').on('show.bs.modal', function(e) {
        const btn = $(e.relatedTarget)
        const mode = btn.data('mode')
        const nama_menu = btn.data('nama_menu')
        const jumlah = btn.data('jumlah')
        const id = btn.data('id')
        const modal = $(this)
        if (mode === 'edit') {
            modal.find('.modal-title').text('Edit stok ' + nama_menu)
            modal.find('#jumlah').val(jumlah)
            modal.find('.modal-body form').attr('action', "{{ url('stok') }}/" + id)
            modal.find('#method').html('@method("PATCH")')
        } else {
            modal.find('.modal-title').text('Tambah stok ' + nama_menu)
            modal.find('#jumlah').val('')
            modal.find('.modal-body form').attr('action', "{{ url('add/stok') }}/" + id)
            modal.find('#method').html('@method("PATCH")')
        }
    })
</script>
@endpush