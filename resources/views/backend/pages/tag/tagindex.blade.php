@extends('backend.layouts.backend_master')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Tag Page</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('main')}}">Home</a></li>
                    <li class="breadcrumb-item active">Starter Page</li>
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
                    <!-- @include('includes.errors') -->
                    <div class="d-flex justify-content-between">

                        <h3 class="card-title">Tag List in Table</h3>
                        <div>
                        <a href="{{ route('tag.create')}}" class="btn btn-sm btn-primary">Create New Tag</a>
                        </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">Id</th>
                                    <th>Name</th>
                                    <th>slug</th>

                                    <th>Progress</th>
                                    <th style="width: 40px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($tags->count() > 0)


                                @foreach ($tags as $tag)
                                <tr>
                                    <td>{{$tag->id}}</td>
                                    <td>{{$tag->name}}</td>
                                    <td>{{$tag->slug}}</td>


                                    </td>
                                    <td>{{$tag->id}}</td>
                                    <td class="d-flex ">
                                        <!-- <a href="{{ route('tag.show', [$tag->id]) }}" class="btn btn-sm btn-success m-1"><i class="fas fa-eye"></i></a> -->
                                        <a href="{{ route('tag.edit', [$tag->id])}}" class="btn btn-sm btn-primary m-1"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('tag.destroy',[$tag->id])}}" method="post" class="mt-1">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-sm btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                                            <!-- <a class="btn btn-sm btn-danger" type="submit"><i class="fas fa-trash"></i></a> -->
                                        </form>
                                        <!-- <a href="{{ route('tag.destroy', [$tag->id])}}" class="btn btn-sm btn-danger m-1"><i class="fas fa-trash"></i></a> -->

                                    </td>
                                </tr>
                                @endforeach
                                @else
                                    <tr>
                                        <td colspan="4">
                                            <h5 class="text-center text-muted"><span class="text-red">Empty Data!</span> Data Not Found. Please, Insert Data.</h5>
                                        </td>
                                    </tr>


                                @endif


                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--/End-Main-Content -->

@endsection

