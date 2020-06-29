@extends('layouts.admin')
@section('title', 'Danh sach product')
@section('content')

<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">

			<div class="panel panel-primary">
				<div class="panel-heading">Thêm sản phẩm</div>
				<div class="panel-body">
					<form method="post" action="{{ route('products.index') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="row" style="margin-bottom:40px">
							<div class="col-xs-8">
								<div class="form-group">
									<label>Name</label>
									<input required="abc" type="text" name="name" class="form-control">
                                    @if ($errors->has('Name:'))
    <span class="help-block">
        <strong>{{ $errors->first('name') }}</strong><br />
    </span>
    @endif
								</div>
								<div class="form-group">
									<label>Price</label>
									<input required type="nuber" name="price" class="form-control">
								</div>
								<div class="form-group">
                                    <label>Description</label><br>
                                    
                                    <textarea required name="desc" style="width: 700px; height: 200px"></textarea>
                                    @if ($errors->has('desc'))
    <span class="help-block">
        <strong>{{ $errors->first('desc') }}</strong><br />
    </span>
    @endif
                                </div>
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
								<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
								<a href="{{ route('products.index')}}" class="btn btn-danger">Hủy bỏ</a>
							</div>
						</div>
					</form>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div>






<!-- <form method="post" action="{{ route('products.store') }}">
    {{ csrf_field() }}

    <label>{{ trans('name') }}</label><br />
    <input name="name"><br />

    @if ($errors->has('Name:'))
    <span class="help-block">
        <strong>{{ $errors->first('name') }}</strong><br />
    </span>
    @endif

    <label>{{ trans('Price:') }}</label><br />
    <input name="price"><br />

    <label>{{ trans('Description') }}</label><br />
    <input name="desc"><br />

    @if ($errors->has('desc'))
    <span class="help-block">
        <strong>{{ $errors->first('desc') }}</strong><br />
    </span>
    @endif

    <?php $brands = App\Models\Brand::all() ?>
    <select name="brand_id"><br />

        @foreach($brands as $brand)
        <option value="{{$brand->id}}">{{ $brand->name }}</option>
        @endforeach
    </select>


    <button>Submit</button>
</form>  -->
@endsection