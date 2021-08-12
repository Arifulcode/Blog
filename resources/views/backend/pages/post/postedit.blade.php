@extends('backend.layouts.backend_master')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Post</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('main')}}">Home</a></li>
                    <li class="breadcrumb-item "><a href="{{ route('post.index') }}">Post list</a> </li>
                    <li class="breadcrumb-item active">Edit Post</li>
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

                            <h3 class="card-title">Create Post-{{ $post->name }}</h3>
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

                                <form action="{{ route('post.update', [$post->id]) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                    <!-- @include('includes.errors') -->
                                        <div class="form-group">
                                            <label for="name">Post Name</label>
                                            <input type="name" name="name" class="form-control" id="name"  value="{{$post->name}}"
                                                placeholder="Post Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Post Description</label>
                                            <textarea type="description" name="description" class="form-control" rows="4" id="description"
                                                placeholder="Post description">{{$post->description}}</textarea>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-md btn-primary">Update Post</button>
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
