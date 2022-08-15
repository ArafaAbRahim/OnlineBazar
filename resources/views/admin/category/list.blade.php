@extends('admin.master')
@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Category List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Category List</li>
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
                    <h3 class="card-title">Category List</h3>
                </div>

                <div class="card-body">
                    <table id="example2" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="width: 5%;">SL</th>
                                <th style="width: 20%;">Name</th>
                                <th style="width: 35%;">Description</th>
                                <th style="width: 10%;">Image</th>
                                <th style="width: 10%;">Status</th>
                                <th style="width: 20%;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)

                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{!!$category->description!!}</td>
                                <td class="center">
                                    <img src="{{asset('/storage/'.$category->image)}}" style="height: 60px; width: 60px;">
                                </td>
                                <td>
                                    @if($category->status == 1)
                                    <span class="badge bg-success">Active</span>
                                    @else
                                    <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="row">                                        
                                        <div class="col-md-2">
                                            @if($category->status == 1)
                                            <a class="btn btn-success" href="{{url('/cat-status'.$category->id)}}">
                                                <i class="far fa-thumbs-down"></i>
                                            </a>
                                            @else
                                            <a class="btn btn-danger" href="{{url('/cat-status'.$category->id)}}">
                                                <i class="far fa-thumbs-up"></i>
                                            </a>
                                            @endif
                                        </div>
                                        <div class="col-md-2">
                                            <a class="btn btn-info" href="{{url('/categories/'.$category->id.'/edit')}}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                            <form action="{{url('/categories/'.$category->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</section>

@endsection