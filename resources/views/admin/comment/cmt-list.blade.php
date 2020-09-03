@extends('admin/layouts-admin/index')
@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh Sách 
                            <small>Bình luận</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Mã bình luận</th>
                                <th>Mã Khách Hàng</th>
                                <th>Bình luận</th>
                                <th>Tên Khách hàng</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>  
                        <tbody> 
                            @foreach($comment as $cmt)
                            <tr>
                                <td>{{$cmt -> commentid}}</td>
                                <td>{{$cmt -> Customerid}}</td>
                                <td>{{$cmt -> ndcomment}}</td>
                                <td>{{$cmt -> Customername}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
                                    <a href="{{url("admin/comment/delete_Comment/{$cmt -> commentid}")}}"> Xóa</a>
                                </td>
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