@extends('admin.layouts.app')

@section('content')
<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Tambah Blog</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Blog</li>
                    </ol>
                </div>
            </div>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Blog</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-elements">                                    
                                        <div class="row">
                                        	<form action="{{ url('blog/post') }}" method="POST" class="col-12" enctype="multipart/form-data">
                                        	@csrf
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Judul</label>
                                                    <input class="form-control" type="text" name="judul" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                                </div>
                                                <div class="form-group">
                                                    <label>Pembuat</label>
                                                    <input class="form-control" type="text" name="pembuat" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                                </div>
                                                <div class="form-group">
                                                    <label>Isi</label>
                                                    <textarea name="isi" class="textarea_editor form-control" rows="15" style="height:200px" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Kategori</label>
                                                    <select class="form-control" name="id_kategori">
                                                        @foreach($kategori as $data)
                                                            <option value =" {{$data->id}} ">{{$data->kategori}}</option>                                                            
                                                        @endforeach
                                                        </select>
                                                </div>                                    

                                            </div>                                            
                                            &nbsp&nbsp&nbsp&nbsp
                                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                                        </form>
                                        </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
@endsection