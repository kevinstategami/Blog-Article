@extends('admin.layouts.app')
@section('content')
<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Blog</h4>                        
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print
                                    <a href="{{url('blog/create')}}" class="btn btn-primary">Tambah</a>
                                </h6>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Judul</th>
                                                <th>Isi</th>
                                                <th>Pembuat</th>
                                                <th>Kategori</th>                                                
                                                <th>Action</th>
                                            </tr>
                                        </thead>                                                                                    
                                        <tbody>
                                            @foreach($blog as $data)
                                            <tr>
                                                <td>{{$data->judul}}</td>
                                                <td>{{$data->isi}}</td>
                                                <td>{{$data->pembuat}}</td>                                                
                                                <td>{{$data->kategori['kategori']}}</td>                                                
                                                <td>
                                                    <a href="{{url('blog/edit', $data->id)}}" class="btn btn-primary">Edit</a>
                                                    <a href="{{url('blog/delete', $data->id)}}" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach                                                                                    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
@endsection