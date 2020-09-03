@extends('admin/layouts-admin/index')
@section('content')
<div class="container">
    <div class="row"> 

        <div class="col-md-12">
            @if(count($errors)>0)
            @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}<br>
            </div>
            @endforeach 
            @endif
        </div>

        <div class="col-md-12">
            @if(session('alert'))
            <div class="alert alert-success" role="alert">
                {{session('alert')}}<br>
            </div>
            @endif
        </div>

        <div class="col-md-12">
            <form method="post" action="" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Tiêu đề</label>
                    <input type="text" class="form-control" name="tieu_de" value="{{old('name')}}" aria-describedby="emailHelp" placeholder="Nhập tiêu đề">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Hinh</label>
                    <input type="file" class="form-control" name="hinh" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tóm tắt</label>
                    <textarea name="tom_tat" rows="3" style="width: 100%;">{{old('short_description')}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Chi tiết</label>
                    <textarea name="chi_tiet" id="bodys">{{old('detail')}}</textarea>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="trang_thai" value="1" @if(old('trang_thai') == 1 ) checked="checked" @endif>
                    <label class="form-check-label" for="exampleCheck1">Trang Thai</label>
                </div>

                <button type="submit" name="sb" class="btn btn-primary">Thêm Tin Tức</button>
            </form>
        </div>
    </div>
</div>
@endsection