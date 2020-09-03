@extends('admin/layouts-admin/index')
@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm Slider
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{{URL::to('/admin/slider/insert-slider')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <!-- <div class="form-group">
                                <label>ID Sản Phẩm</label>
                                <input class="form-control" name="txtProductid" required/>
                                <div class="alert-danger" role="alert">
                                    <strong>{{ session('PidMessage') ?? '' }}</strong>
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label>Tên Slider</label>
                                <input class="form-control" name="Slidername"/>
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input type="file" name="Sliderimage" required>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <input type="checkbox" class="form-control" name="Sliderstatus" value="1"></input>
                            </div>
                            <button type="submit" class="btn btn-default">Thêm Slider</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection