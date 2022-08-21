@extends('admin.master')
@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Order Details</h1>
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
            <div class="row">

                <div class="col-md-5">
                    <div class="card card-purple">
                        <div class="card-header">
                            <h3 class="card-title">Customer Information</h3>
                        </div>

                        <div class="card-body">
                            <table id="example2" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th >Name</th>                                
                                        <th >email </th>
                                        <th >Phone</th>                                
                                
                                    </tr>
                                </thead>
                                <tbody>                                    
                                    <tr>
                                        <td>{{$orders->customer->name}}</td>
                                        <td>{{$orders->customer->email}}</td>                                                                       
                                        <td>{{$orders->customer->mobile}}</td>

                                    </tr>                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Shipping details</h3>
                        </div>

                        <div class="card-body">
                            <table id="example2" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>                                
                                        <th>Address</th>
                                        <th>Phone</th>   
                                        <th>Email</th>  
                                                                       
                                
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                        <td>{{$orders->shipping->name}}</td>
                                        <td>{{$orders->shipping->address}}</td>                             
                                        <td>{{$orders->shipping->mobile}}</td>  
                                        <td>{{$orders->shipping->email}}</td>
                                        
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
      
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Order details</h3>
                </div>

                <div class="card-body">
                    <table id="example2" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="width: 5%;">SL</th>                                
                                <th style="width: 10%;">Product Name</th>
                                <th style="width: 10%;">Product Price</th>
                                <th style="width: 10%;">Quantity</th>
                                <th style="width: 10%;">Sub Total</th>                                
                        
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order_details as $order_detail)
                                <tr>
                                    <td>{{$order_detail->order_id}}</td>
                                    <td>{{$order_detail->product_name}}</td>                                                             
                                    <td>{{$order_detail->product_price}}</td>
                                    <td>{{$order_detail->product_sales_quantity}}</td>   
                                    <td>&#2547; {{$order_detail->product_price * $order_detail->product_sales_quantity}}</td>                                                                            
                                </tr>                               
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4" style="font-size: 20px;font-weight: 521;text-align: right; color: red">Total</td>
                                <td><strong style="font-size: 20px; color: #007cff;">&#2547; {{$orders->total}}</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
             
        </div>
    </div>
</section>


@endsection