@extends('layouts.admin')
@section('title', 'Thêm User')
@section('content')

<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">

			<div class="panel panel-primary">
				<div class="panel-heading">Thêm User</div>
				<div class="panel-body">
					<form method="post" action="{{ route('users.store') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="row" style="margin-bottom:40px">
							<div class="col-xs-8">
								<div class="form-group">
									<label>Username</label>
                                    <input required="abc" type="text" name="name" class="form-control">
                                    @if ($errors->has('username'))                
            <span class="help-block">
                <strong>{{ $errors->first('username') }}</strong><br/>
            </span>
        @endif
								</div>
								<div class="form-group">
									<label>Email</label>
                                    <input required type="text" name="email" class="form-control">
                                    @if ($errors->has('email'))                
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong><br/>
            </span>
        @endif
								</div>
								<div class="form-group">
                                    <label>Password</label><br>
                                    
                                    <input required name="password" name="password" class="form-control">
                                    @if ($errors->has('password'))                
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong><br/>
            </span>
        @endif
                                </div>
								<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
								<a href="{{ route('users.index')}}" class="btn btn-danger">Hủy bỏ</a>
							</div>
						</div>
					</form>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand</title>
</head>
<body>
<form method="post" action="{{ route('users.store') }}">
        {{ csrf_field() }}
        <label>{{ trans('user.label.username') }}</label><br/>
        <input name="name"><br/>
        @if ($errors->has('username'))                
            <span class="help-block">
                <strong>{{ $errors->first('username') }}</strong><br/>
            </span>
        @endif

        <label>{{ trans('user.label.email') }}</label><br/>
        <input name="email"><br/>
        @if ($errors->has('email'))                
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong><br/>
            </span>
        @endif


        <label>{{ trans('user.label.password') }}</label><br/>
        <input name="password"><br/>
        @if ($errors->has('password'))                
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong><br/>
            </span>
        @endif

       

        <button>Submit</button>
    </form>

</body>
</html> -->