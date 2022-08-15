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
                <h1>Colors Form</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Colors Form</li>
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
                    <h3 class="card-title">Edit Colors</h3>
                </div>

                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{url('/colors/'.$color->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Colors *</label>
                                        <input type="text" name="color" value="{{implode(',', Json_decode($color->color))}}" class="form-control" id="input" data-role="tagsinput" placeholder="Enter Colors" required>
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