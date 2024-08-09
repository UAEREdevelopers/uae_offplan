@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Create Property</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('website') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('property.index') }}">Property list</a></li>
                    <li class="breadcrumb-item active">Create Property</li>
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
                            <h3 class="card-title">Create Property</h3>
                            <a href="{{ route('property.index') }}" class="btn btn-primary">Go Back to Property List</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                                <form action="{{ route('property.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        @include('includes.errors')
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="title">Property title</label>
                                                    <input type="name" name="title" value="{{ old('title') }}" class="form-control" placeholder="Enter title">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="no_of_beds">No of Beds</label>
                                                    <input type="text" name="no_of_beds" value="{{ old('no_of_beds') }}" class="form-control" placeholder="Enter No of Beds">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="price">Property Start Price</label>
                                                    <input type="text" name="price" value="{{ old('price') }}" class="form-control" placeholder="Enter Property Start Price">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="link">Property Link Page</label>
                                                    <input type="text" name="link" value="{{ old('link') }}" class="form-control" placeholder="Enter Property Link Page">
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="developer_id">Developer</label>
                                                    <select name="developer_id" id="developer_id" class="form-control">
                                                        <option value="" style="display: none" selected>Select Developer</option>
                                                        @foreach($developers as $d)
                                                        <option value="{{ $d->id }}"> {{ $d->title }} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                           
                                            
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                               <div class="form-group">
                                                    <label for="thumbnail_image">Thumbnail Image</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="thumbnail_image" class="custom-file-input" id="thumbnail_image">
                                                        <label class="custom-file-label" for="thumbnail_image">Choose file</label>
                                                    </div>
                                                </div> 
                                            </div>
                                            
                                            

                                            

                                            

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="brochure_pdf">Brochure</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="brochure_pdf" class="custom-file-input" id="brochure_pdf">
                                                        <label class="custom-file-label" for="brochure_pdf">Choose file</label>
                                                    </div>
                                                </div>

                                            </div>
                                            

                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="short_description">Short Description</label>
                                                    <textarea name="short_description" id="short_description" rows="4" class="form-control" placeholder="Enter Short Description">{{ old('short_description') }}</textarea>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        
                                        

                                        
                                        
                                        
                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-lg btn-primary">Submit</button>
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

@section('style')
    <link rel="stylesheet" href="{{ asset('/admin/css/summernote-bs4.min.css') }}">
@endsection

@section('script')
    <script src="{{ asset('/admin/js/summernote-bs4.min.js') }}"></script>
    <script>
        $('#description').summernote({
            placeholder: 'Enter Description',
            tabsize: 2,
            height: 300
        });
    </script>
    
   
@endsection