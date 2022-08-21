@extends('admin.master')
@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Order List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Order</li>
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
                    <h3 class="card-title">Order List</h3>
                </div>

                <div class="card-body">
                    <table id="example2" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="width: 5%;">SL</th>                                
                                <th style="width: 10%;">Customer Name</th>
                                <th style="width: 10%;">Total</th>                                
                                <th style="width: 10%;">Date & time</th>
                                <th style="width: 10%;">Status</th>
                                <th style="width: 20%;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->customer->name}}</td>                             
                                <td>&#2547; {{$order->total}}</td>  
                                <td>{{\Carbon\Carbon::parse($order->created_at)->format('M d, Y, h:iA')}}</td>
                                                         
                                <td>
                                    @if($order->status == 'pending')
                                    <span class="badge bg-danger">Pending</span>
                                    @else
                                    <span class="badge bg-success">Complete</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="row">                                        
                                        <div class="col-md-2"> 
                                            @if($order->status == 'pending')
                                            <a class="btn btn-danger" href="{{url('/order-status'.$order->id)}}">
                                                <i class="far fa-thumbs-up"></i>
                                            </a>
                                            @else
                                            <a class="btn btn-success" href="{{url('/order-status'.$order->id)}}">
                                                <i class="far fa-thumbs-down"></i>
                                            </a>
                                            @endif
                                        </div>
                                        <div class="col-md-2">
                                            <a class="btn btn-info" href="{{url('/view-orders/'.$order->id)}}">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>                                        
                                        
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