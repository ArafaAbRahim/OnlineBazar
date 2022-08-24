@extends('admin.master')
@section('content')


@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Sub Category Form</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Sub Category</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="col-md-12">

            <p class="alert-success">
                <?php
                $message = Session::get('message');
                if ($message) {
                    echo $message;
                    Session::put('message', null);
                }
                ?>
            </p>
            <!-- general form elements -->
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Edit Sub Category</h3>
                    <div class="card-tools pull-right">
                        <a href="{{url('/sub-categories')}}" type="submit" class="btn bg-green btn-sm" style="color: white;"> <i class="fa fa-list"></i> Sub Category List </a>
                    </div>
                </div>
      
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{url('/sub-categories/'.$subCategory->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name *</label>
                                        <input type="text" name="name" value="{{$subCategory->name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Category</label>                                 
                                        <select name="category" class="form-control select2" style="width: 100%;">
                                            <option value="">Select Category</option>
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}" {{$subCategory->cat_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <textarea name="description" id="editor1">{{$subCategory->description}}</textarea>
                                </div>
                            </div>

                            
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <center><button type="submit" class="btn btn-primary">Update</button></center>

                        </div>
                </form>
            </div>
            <!-- /.card -->

        </div>
    </div>
</section>



@endsection