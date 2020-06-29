@extends('layouts.admin')
@section('title', 'Danh sach brand')

@section('content')



<div class="col-sm-10">
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading" style="font-size: 30px;">Danh sách Brands</div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <div class="table-responsive">
                                <div style="margin-top:30px; margin-bottom:10px">
                                    <a href="{{ route('brands.create') }}" class="btn btn-primary">Thêm Brands</a>
                                </div>
                                <!-- add modal -->

                            </div>
                            <table class="table table-bordered" style="margin-top:25px;">
                                <thead>
                                <tr style="font-weight: bold">
            <td>ID</td>
            <td>Brands Name</td>
            @foreach($brands as $brand)
            <tr>
                <td> {{$brand->id}}</td>
                <td> {{$brand->name}}</td>
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





    <!-- <table border="1">
        <tbody>
        @foreach($brands as $brand)
            <tr>
                <td> {{$brand->id}}</td>
                <td> {{$brand->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection -->