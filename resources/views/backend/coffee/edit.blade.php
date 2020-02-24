
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
                <div class="card-header">Mengubah Data coffee</div>
                <div class="card-body">
                    <form action="{{ route('coffee.update', $coffee->id) }}" method="post">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">nama_kopi</label>
                            <input class="form-control" value="{{ $coffee->nama_kopi }}" type="text" name="nama_kopi">
                        </div>
                        <div class="form-group">
                            <label for="">kategori</label>
                            <input class="form-control" value="{{ $coffee->id_kategori }}" type="text" name="id_kategori">
                        </div>
                        <div class="form-group">
                            <label for="">manfaat</label>
                            <input class="form-control" value="{{ $coffee->manfaat }}" type="text" name="manfaat">
                        </div>
                        <div class="form-group">
                            <label for="">harga</label>
                            <input class="form-control" value="{{ $coffee->harga }}" type="text" name="harga">
                        </div>
                        <div class="form-group">
                            <label for="">gambar</label><br>
                            <img src="{{ asset('assets/img/coffee/'.$coffee->gambar) }}" alt="" height="250px" width="250px">
                            <input type="file" class="form-control" name="gambar">
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
