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
                <h1>Size Form</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Size Form</li>
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
                    <h3 class="card-title">Add Sizes</h3>
                    <div class="card-tools pull-right">
                        <a href="{{url('/sizes')}}" type="submit" class="btn bg-green btn-sm" style="color: white;"> <i class="fa fa-list"></i> Size List </a>
                    </div>
                </div>

                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{url('/sizes/')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Sizes *</label>
                                        <input type="text" name="size" class="form-control" id="input" data-role="tagsinput" placeholder="Enter sizes" required >
                                    </div>

                                </div>
                            
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <center><button type="submit" class="btn btn-primary">Submit</button></center>

                    </div>
                </form>
            </div>
            <!-- /.card -->

        </div>
    </div>
</section>




@endsection