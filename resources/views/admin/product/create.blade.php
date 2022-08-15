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
                <h1>Product Form</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Product</li>
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
                    <h3 class="card-title">Add Product</h3>
                </div>
      
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{url('/products/')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product Code *</label>
                                        <input type="text" name="code" class="form-control" id="exampleInputEmail1" placeholder="Enter Code" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name *</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Category</label>                                 
                                        <select name="category" class="form-control select2" style="width: 100%;">
                                            <option value="">Select Category</option>
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Sub Category</label>                                 
                                        <select name="subcategory" class="form-control select2" style="width: 100%;">
                                            <option value="">Select Sub Category</option>
                                            @foreach($subcategories as $subcategory)
                                            <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Brand</label>                                 
                                        <select name="brand" class="form-control select2" style="width: 100%;">
                                            <option value="">Select Brand</option>
                                            @foreach($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Size</label>                                 
                                        <select name="size" class="form-control select2" style="width: 100%;">
                                            <option value="">Select Size</option>
                                            @foreach($sizes as $size)
                                            <option value="{{$size->id}}">{{implode(',',Json_decode($size->size))}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Unit</label>                                 
                                        <select name="unit" class="form-control select2" style="width: 100%;">
                                            <option value="">Select Unit</option>
                                            @foreach($units as $unit)
                                            <option value="{{$unit->id}}">{{$unit->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Color</label>                                 
                                        <select name="color" class="form-control select2" style="width: 100%;">
                                            <option value="">Select Color</option>
                                            @foreach($colors as $color)
                                            <option value="{{$color->id}}">{{implode(',', Json_decode($color->color))}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Price *</label>
                                        <input type="number" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter price" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Description</label>
                                        <textarea name="description" id="editor1"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputFile">File input</label>
                                        <div class="input-group">
                                            <div class="custom-file">                                                
                                                <input type="file" name="file[]" class="form-control" multiple required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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