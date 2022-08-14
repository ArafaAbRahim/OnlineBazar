@extends('admin.master')
@section('content')

<div class="row-fluid sortable">

    <div class="box span12">

        <p class="alert-success">
            <?php
            $message = Session::get('message');
            if ($message) {
                echo $message;
                Session::put('message', null);
            }
            ?>
        </p>
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>All Sub Category</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>


        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th style="width: 5%;">SL</th>
                        <th style="width: 15%;">Name</th>
                        <th style="width: 15%;">Category Name</th>
                        <th style="width: 35%;">Description</th> 
                        <th style="width: 10%;">Status</th>
                        <th style="width: 20%;">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($subcategories as $subcategory)

                    <tr>
                        <td>{{$subcategory->id}}</td>
                        <td>{{$subcategory->name}}</td>
                        <td>{{$subcategory->category->name}}</td>
                        <td>{!!$subcategory->description!!}</td>                       
                        <td>
                            @if($subcategory->status == 1)
                            <span class="label label-success">Active</span>
                            @else
                            <span class="label label-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <div class="row">
                                <div class="span3"></div>
                                <div class="span2">
                                    @if($subcategory->status == 1)
                                    <a class="btn btn-success" href="{{url('/subcat-status'.$subcategory->id)}}">
                                        <i class="halflings-icon white thumbs-down"></i>
                                    </a>
                                    @else
                                    <a class="btn btn-danger" href="{{url('/subcat-status'.$subcategory->id)}}">
                                        <i class="halflings-icon white thumbs-up"></i>
                                    </a>
                                    @endif
                                </div>
                                <div class="span2">
                                    <a class="btn btn-info" href="{{url('/sub-categories/'.$subcategory->id.'/edit')}}">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                </div>
                                <div class="span2">
                                    <form action="{{url('/sub-categories/'.$subcategory->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">
                                            <i class="halflings-icon white trash"></i>
                                        </button>
                                    </form>
                                </div>
                                <div class="span3"></div>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <!--/span-->

</div>

@endsection