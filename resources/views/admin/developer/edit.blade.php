@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Developer</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('website') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('developer.index') }}">Developer list</a></li>
                    <li class="breadcrumb-item active">Edit Developer</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Edit Developer - {{ $developer->title }}</h3>
                            <a href="{{ route('developer.index') }}" class="btn btn-primary">Go Back to Developer List</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                <form action="{{ route('developer.update', [$developer->id]) }}" method="POST" enctype="multipart/form-data">
                                    @csrf 
                                    @method('PUT')
                                    <div class="card-body">
                                        @include('includes.errors')
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="heading_text">Title</label>
                                                    <input type="text" name="title" value="{{ $developer->title }}" class="form-control" placeholder="Enter Title Text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="developer_image">Developer Image</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="developer_image" class="custom-file-input" id="developer_image">
                                                        <label class="custom-file-label" for="developer_image">Choose file</label>
                                                    </div>
                                                    <div class="col-4 text-right">
                                                        <div style="max-width: 100px; max-height: 100px;overflow:hidden; margin-left: auto;">
                                                            <img src="{{ asset('images/developer_images/'.$developer->developer_image) }}" class="img-fluid" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-lg btn-primary">Update Developer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection