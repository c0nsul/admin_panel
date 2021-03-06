@extends('layouts.admin_layout')

@section('title', 'Add article')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" area-hidden="true">x</button>
                    <h4><i class="icon fas fa-check"></i>{{session('success')}} </h4>
                </div>
            @endif
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add new article</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="col-lg-12">
                <div class="card card-primary">

                    <!-- form start -->
                    <form action="{{ route('post.store') }}" method="post">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="exampleInput">Name</label>
                                <input name="title" required type="text" class="form-control" id="exampleInput" placeholder="Enter article name">
                            </div>

                            <div class="form-group">
                                <label>Select category</label>
                                <select class="form-control" name="cat_id" required>
                                    @foreach($categories as $category)
                                        <option value="{{$category['id']}}">{{$category['title']}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <textarea name="text" class="editor">
                                    Welcome to TinyMCE!
                                </textarea>
                            </div>

                            <div class="form-group">
                                <label for="img">Article image</label>
                                <img src="" alt="" class="img-uploaded" style="display: block; max-width: 300px">
                                <input class="form-control" type="text" id="img" name="img" value="" readonly>
                                <a href="" class="popup_selector btn btn-primary mt-1" data-inputid="img">Select Image</a>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
