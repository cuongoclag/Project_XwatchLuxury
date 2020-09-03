@extends('admin/layouts-admin/index')
        @section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh Sách Slider
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID Slider</th>
                                <th>Tên Slider</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($all_slide as $key => $as)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $as -> Sliderid}}</td>
                                <td>{{ $as -> Slidername}}</td>
                                <td><img src="frontend/dist/img/Slider/{{ $as -> Sliderimage}}" height="100" width="450"></td>
                                <td>
                                    @if  ($as -> Sliderstatus == 1)
                                        <a href="{{URL::to('admin/slider/unactive-slide/'.$as->Sliderid)}}"><i class="fas fa-check-square"></i></a>
                                    @else
                                        <a href="{{URL::to('admin/slider/active-slide/'.$as->Sliderid)}}"><i class="far fa-times-circle"></i></a>
                                    @endif
                                </td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
                                    <a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="{{URL::to('admin/slider/delete-slide/'.$as->Sliderid)}}"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        @endsection
    