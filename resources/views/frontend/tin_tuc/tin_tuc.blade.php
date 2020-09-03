@extends('layouts.app_master_frontend')
@section('base')
<base href="{{ asset('')}}">
@endsection
@section('content')
<div class="tin_tuc_lk">
    <div class="row">
        
        @foreach($list_tin_tuc as $tin_tuc)
        <div class=" col-md-6 col-md-4 " style="padding-bottom: 15px;">

            <div class="tt_sk_3 tt_lk_wrp">
                <div class="tt_sk_31">
                    <a href="{{URL('frontend/tin_tuc/ct_tin_tin_tuc').'/'.$tin_tuc->id}}"><img src="public/hinh_tin_tuc/{{$tin_tuc -> image}}" alt="" class="img-fluid"></a>
                </div>
                <div class="tt_sk_32">
                    <a href="{{URL('frontend/tin_tuc/ct_tin_tin_tuc').'/'.$tin_tuc->id}}">
                        <h4 class="cn mau_cd c_dam">
                            {{$tin_tuc -> name}}
                        </h4>
                    </a>
                    <p class="cnn mau_cd">
                        <!-- <i class="far fa-eye">2000 view</i> -->
                        <!-- <i class="far fa-calendar-alt"></i> -->
                    </p>
                    <p class="cn mau_cd vien_mota">
                        {{$tin_tuc -> short_description}}
                    </p>
                </div>
            </div>
        </div>
        @endforeach

        <!-- <div class="row row_sxttt">
            <div class="col-md-12 canh_giua add_xttt">
                <button>Xem thêm</button>
            </div>
        </div> -->
    </div>
    @stop