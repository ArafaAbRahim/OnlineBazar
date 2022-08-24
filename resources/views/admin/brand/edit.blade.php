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
                <h1>Brand Form</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Brand Form</li>
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
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Brand</h3>
                    <div class="card-tools pull-right">
                        <a href="{{url('/brands')}}" type="submit" class="btn bg-green btn-sm" style="color: white;"> <i class="fa fa-list"></i> Brand List </a>
                    </div>
                </div>

                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{url('/brands/'.$brand->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name *</label>
                                        <input type="text" name="name" value="{{$brand->name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" required>
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Description</label>
                                        <textarea name="description" id="editor1">{{$brand->description}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
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