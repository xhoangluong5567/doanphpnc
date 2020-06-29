@extends('layouts.admin')
@section('title', 'Edit Product')

@section('content')

<div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Sửa sản phẩm</div>
                <div class="panel-body">
                    <form action="{{ route('products.update', $product->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" value="{{ $product->name }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input required type="nuuber" name="price" value="{{ $product->price }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Desc</label>
                                    <input required type="desc" name="desc" value="{{ $product->desc }}" class="form-control">
                                </div>
                                    <!-- <label>Desc</label><br>

                                    <textarea required name="desc" style="width: 700px; height: 200px" >{{ $product->desc}}</textarea> -->

                                <div class="form-group">
                                    <label>Brand</label><br>
                                    <?php $brands = App\Models\Brand::all() ?>
    <select name="brand_id"><br />

        @foreach($brands as $brand)
        <option value="{{$brand->id}}">{{ $brand->name }}</option>
        @endforeach
    </select>
									<!-- <textarea required name="desc" style="width: 700px; height: 200px"></textarea> -->
                                </div>
                            </div>
                        </div>
                                <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                <a href="{{ route('products.index')}}" class="btn btn-danger">Hủy bỏ</a>
                            </div>
                        </div>
                        </>
                        <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>

<!-- <form action="{{ route('products.update', $product->id) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT') }}

    <h2>Edit Product</h2>

    Name Product: <input type="text" name="name" value="{{$product->name}}"><br><br>
    Price: <input type="number" name="price" id="" value="{{$product->price}}"><br><br>
    Description: <input type="text" name="description" value="{{ $product->desc }}"><br><br>
   
    Brand:
    <select name="brand_id"><br/>
        @foreach(App\Models\Brand::all() as $brand)
        <option value="{{$brand->id}}">{{ $brand->name }}</option>
        @endforeach
    </select>


    <input class="btn btn-info" type="submit" value="UPDATE">
</form> -->

@endsection