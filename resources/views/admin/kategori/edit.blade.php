@extends('admin.layouts.app')

@section('content')
<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Ubah Kategori</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Kategori</li>
                    </ol>
                </div>
            </div>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Kategori</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-elements">                                    
                                        <div class="row">
                                        	<form action="{{ url('kategori/update') }}" method="POST" class="col-12" enctype="multipart/form-data">
                                        	@csrf
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Kategori</label>
                                                    <input class="form-control" value="{{$edit->kategori}}" type="text" name="kategori" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                                </div>                                                                                
                                            </div>                                            
                                            &nbsp&nbsp&nbsp&nbsp
                                            <input type="hidden" name="id" value="{{$edit->id}}">
                                            <button type="submit" class="btn btn-primary">Ubah Data</button>
                                        </form>
                                        </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
@endsection