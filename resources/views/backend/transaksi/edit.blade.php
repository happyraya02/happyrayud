
@extends('layouts.backend')
@section('css')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/select2.min.js')}}"></script>
    <script src="{{ asset('backend/assets/js/components/select2-init.js')}}"></script>
    <script src="{{ asset('backend/assets/vendor/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('editorl');
    $(document).ready(function () {
        $('#select2').select2();
    })
</script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mengubah Data transaksi</div>
                <div class="card-body">
                    <form action="{{ route('transaksi.update', $transaksi->id) }}" method="post">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Nama </label>
                            <input class="form-control" value="{{ $transaksi->nama }}" type="text" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Coffee</label>
                            <input class="form-control" value="{{ $transaksi->id_coffee }}" type="text" name="id_coffee">
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah kopi</label>
                            <input class="form-control" value="{{ $transaksi->jumlah_kopi }}" type="text" name="jumlah_kopi">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-info">
                            Simpan Data
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
