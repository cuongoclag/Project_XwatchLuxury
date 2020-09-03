@extends('admin/layouts-admin/index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh Sách
                    <small>Tin Tức</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Id</th> 
                        <th>Tên bài viết</th>
                        <th>Ảnh</th>
                        <th>Chình sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tin_tuc as $tt)
                    <tr>
                        <td>{{$tt -> id}}</td>
                        <td>{{$tt -> name}}</td>
                        <td> <img src="public/hinh_tin_tuc/{{$tt -> image}}" alt="1234" style="width: 20%;"></td>
                        <td><a href="{{url("admin/tin_tuc/sua/{$tt -> id}")}}">Chỉnh sửa</a></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
                            <a href="{{url("admin/tin_tuc/delete_TinTuc/{$tt -> id}")}}"> Xóa</a>
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