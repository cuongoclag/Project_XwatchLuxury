@extends('layouts.app_master_frontend')
@section('base')
<base href="{{ asset('')}}">
@endsection
@section('content')
<div class="tin_tuc_lk">
    <div class="row">

        <div class="col-md-8 tt_ct_left">
            <div class="row">
                <div class="col-md-12 title_news">
                    <h1 class="name_tieude cld mau_cd c_dam">
                        {{$tin_tuc_ct -> name}}
                    </h1> 
                </div>
            </div>
            <p>
                <img src="public/hinh_tin_tuc/{{$tin_tuc_ct -> image}}" class="img-fluid" style="width: 100%;" alt="">
            </p>
            <p>
                {!! $tin_tuc_ct -> detail !!}
            </p>
        </div>
        <div class="col-md-8">

            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <div class="addthis_inline_share_toolbox"></div>

        </div>
    </div>
</div>
@stop