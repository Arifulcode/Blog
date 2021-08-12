@extends('backend.layouts.backend_master')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Create Post</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('main')}}">Home</a></li>
                    <li class="breadcrumb-item "><a href="{{ route('post.index') }}">Post list</a> </li>
                    <li class="breadcrumb-item active">Create Post</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!--Main-Content -->
<div class="content">
    <div class="contianer-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">

                            <h3 class="card-title">Create Post </h3>
                            <div>
                                <a href="{{ route('post.index') }}" class="btn btn-sm btn-primary">Go Bacak to
                                    Post List</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">

                                <form action="{{ route('post.store') }}" method="post" enctype="multipart/form">
                                    @csrf
                                    <div class="card-body">
                                        <!-- @include('includes.errors') -->
                                        <div class="form-group">
                                            <label for="name">Post Title</label>
                                            <input type="title" name="title" value="{{ old('title') }}" class="form-control" id="title"
                                                placeholder="Post Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="category">Post Category</label>
                                            <select name="category" id="category" value="{{ old('category') }}" class="form-control">
                                                <option value="" style="display:none" selected>Select Category</option>
                                                @foreach ($categories as $c)
                                                <option value="{{$c->id}}">{{ $c->name}}</option>
                                                @endforeach

                                            </select>

                                        </div>

                                        <!-- <div class="form-group">
                                            <div class="custom-file">
                                                <label for="label" class="custom-file-label" id="image">Chose File</label> -->
                                                <!-- <label for="label" class="custom-file-label" id="image">Chose File</label>
                                                <input type="file" name="image" id="image" class="custom-file-label">
                                                <label for="image" class="custom-file-label">Chose File</label>
                                            </div>
                                        </div> -->
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input"
                                                    id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="description">Post Description</label>
                                            <textarea type="description" name="description" value="{{ old('title') }}" class="form-control"
                                                rows="4" id="description" placeholder="Post description"></textarea>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-md btn-primary">Submit</button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--/End-Main-Content -->

@endsection
