@extends('layouts.backend')

@section('css')
        <link rel="stylesheet" href="{{asset('assets/backendx-special/nautilus-clipboardcopyfile:///home/lab/Downloads/bootstrap-4.4.1-distvendor/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
@endsection

@section('js')
        <script src="{{asset('assets/backendx-special/nautilus-clipboardcopyfile:///home/lab/Downloads/bootstrap-4.4.1-distvendor/datatables.net/js/jquery.dataTables.js')}}"></script>
        <script src="{{asset('assets/backendx-special/nautilus-clipboardcopyfile:///home/lab/Downloads/bootstrap-4.4.1-distvendor/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
        <script src="{{asset('assets/backendx-special/nautilus-clipboardcopyfile:///home/lab/Downloads/bootstrap-4.4.1-distjs/components/datatables-init.js')}}"></script>
@endsection

@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Tables coffee</h5><br>
                <center>
                        <a href="{{ route('coffee.create') }}"
                            cla mss="la la-cloud-upload btn btn-info btn-rounded btn-floating btn-outline">&nbsp;Tambah Data
                        </a>
                </center>
                <div class="card-body">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Manfaat</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                            <tbody>
                                    @php $no = 1;  @endphp
                                @foreach ($coffee as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->nama_kopi}}</td>
                                    <td>{{$data->kategori->nama_kategori}}</td>
                                    <td>{{$data->manfaat}}</td>
                                    <td>{{$data->harga}}</td>
                                   <td><img src="{{asset('assets/img/coffee/'.$data->gambar)}}" alt=""height="200px"width="300px"></td>


                                    <td style="text-align: center;">
                                        <form action="{{route('coffee.destroy', $data->id)}}" method="post">
                                            {{csrf_field()}}
                                        <a href="{{route('coffee.edit', $data->id)}}"
                                            class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
                                        </a>
                                        <a href="{{route('coffee.show', $data->id)}}"
                                            class="zmdi zmdi-show btn btn-warning btn-rounded btn-floating btn-outline"> Show
                                        </a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="zmdi zmdi-delete btn-rounded btn-floating btn btn-dangerbtn btn-danger btn-outline"> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
