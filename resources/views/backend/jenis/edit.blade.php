
@extends('layouts.app')
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
                <div class="card-header">Mengubah Data jenis</div>
                <div class="card-body">
                    <form action="{{ route('jenis.update', $jenis->id) }}" method="post">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">nama_kopi</label>
                            <input class="form-control" value="{{ $jenis->nama_kopi }}" type="text" name="nama_kopi">
                        </div>
                        <div class="form-group">
                            <label for="">manfaat</label>
                            <input class="form-control" value="{{ $jenis->manfaat }}" type="text" name="manfaat">
                        </div>
                        <div class="form-group">
                            <label for="">varian</label>
                            <input class="form-control" value="{{ $jenis->varian }}" type="text" name="varian">
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
