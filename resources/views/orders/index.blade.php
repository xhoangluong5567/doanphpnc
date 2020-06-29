@extends('layouts.admin')
@section('title','Orders')
@section('content')


<div class="col-sm-10">
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading" style="font-size: 30px;">Danh sách sản phẩm</div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <div class="table-responsive">
                                <div style="margin-top:30px; margin-bottom:10px">
                                    <a href="{{ route('orders.create') }}" class="btn btn-primary">Thêm sản phẩm</a>
                                </div>

                            </div>
                            <table class="table table-bordered" style="margin-top:25px;">
                                <thead>
                                <tr style="font-weight: bold">
            <td>ID</td>
            <td>Order_id</td>
            
        @foreach($orders as $order)
        <tr>
            <td> {{$order->id}}</td>
            <td> {{$order->user_id}}</td>
            <td>
                <form action="{{ route('orders.destroy', $order->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>
@endsection
<!-- <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Danh sách sản phẩm</div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <div class="table-responsive">
                            <div class="col-lg-6 right">
                                <div style="margin-top:20px; margin-bottom:20px">
                                    <a href="{{ route('products.create') }}" class="btn btn-primary">Thêm sản phẩm</a>
                                </div>

                            </div>
                            <table class="table table-bordered" style="margin-top:20px;">
                                <thead>
        <tr>
            <td>ID</td>
            <td>Product Name</td>
            <td>Images</td>
            <td>Price</td>
            <td>Description</td>
            <td>Brand</td>
            <td> <a class="btn btn-danger" href="{{ route('products.create') }}">Create</a> </td>
        </tr>
        @foreach($errors as $product)
        <tr>
            <td> {{$product->id}}</td>
            <td> {{$product->name}}</td>
            <td> {{$product->images}}</td>
            <td> {{$product->price}}$</td>
            <td> {{ $product->desc }} </td>
            
            <?php $brand = App\Models\Brand::find($product->brand_id) ?>
            <td> {{ $brand->name }}</td>

            <td> <a class="btn btn-success" href="{{ route('products.edit', $product->id) }}">Edit</a> </td>
            <td>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="btn btn-primary">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
</tbody>

                                   

</html> -->


<!-- @extends('layouts.admin')
@section('title','Orders')
@section('content')


<div class="col-sm-10">
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading" style="font-size: 30px;">Danh sách sản phẩm</div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <div class="table-responsive">
                                <div style="margin-top:30px; margin-bottom:10px">
                                    <a href="{{ route('orders.create') }}" class="btn btn-primary">Thêm sản phẩm</a>
                                </div>

                            </div>
                            <table class="table table-bordered" style="margin-top:25px;">
                                <thead>
                                <tr style="font-weight: bold"> 
                                <td>ID</td>
            <td>Order_id</td>
        @foreach($orders as $order)
        <tr>
                <td> {{$order->id}}</td>
                <td> {{$order->user_id}}</td>
            <td> <a class="btn btn-success" href="{{ route('orders.edit', $order->id) }}">Edit</a> </td>
            <td>
                <form action="{{ route('orders.destroy', $order->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div> -->




<!-- @extends('layouts.admin')
@section('title', 'Danh sach product')
<body>
    <table>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td> {{$order->id}}</td>
                <td> {{$order->user_id}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
   
    @endsection -->
           