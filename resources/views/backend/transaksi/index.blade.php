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
                <h5 class="card-header">Data Tables transaksi</h5><br>
                <center>
                        <a href="{{ route('transaksi.create') }}"
                            cla mss="la la-cloud-upload btn btn-info btn-rounded btn-floating btn-outline">&nbsp;Tambah Data
                        </a>
                </center>
                <div class="card-body">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama </th>
                                <th>Nama Kopi</th>
                                <th>Jumlah Kopi</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                            <tbody>
                                    @php $no = 1;  @endphp
                                @foreach ($transaksi as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->nama}}</td>
                                    <td>{{$data->coffee->nama_kopi}}</td>
                                    <td>{{$data->jumlah_kopi}}</td>


                                    <td style="text-align: center;">
                                        <form action="{{route('transaksi.destroy', $data->id)}}" method="post">
                                            {{csrf_field()}}
                                        <a href="{{route('transaksi.edit', $data->id)}}"
                                            class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
                                        </a>
                                        <a href="{{route('transaksi.show', $data->id)}}"
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
