@extends('layouts.app_master_frontend')
@section('content')
@foreach($details_product as $key => $dp)
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="col-md-12">
                <div id="product-tab">
                    <!-- product tab nav -->
                    <ul class="tab-nav">
                        <li class="active"><a data-toggle="tab" href="#tab1">Mô Tả</a></li>
                        <li><a data-toggle="tab" href="#tab3">Phản Hồi</a></li>
                    </ul>
                    <!-- /product tab nav -->
                    <!-- product tab content -->
                    <div class="tab-content">
                        <!-- tab1  -->
                        <div id="tab1" class="tab-pane fade in active" style="text-align:center">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>{{ $dp -> ProductDescription }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- /tab1  -->
                        <!-- tab3  -->
                        <div id="tab3" class="tab-pane fade in">
                            <div class="row">
                                <!-- Review Form -->
                                <div class="col-md-12" style="text-align:center;">
                                    @if(Session::has('khach_hang_dn'))
                                    <div id="review-form" >
                                        <form class="review-form" method="post" action="{{route('comment')}}">
                                        @csrf
                                            <input class="hidden" type="text" name="Customerid" value="{{Session::get('khach_hang_dn')->Customerid}}">
                                            <input class="hidden" type="text" name="Customername" value="{{Session::get('khach_hang_dn')->Customername}}">
                                            <input class="input" type="text" name="ndcomment" id="ndcomment" placeholder="Nội dung bình luận">
                                            <button class="primary-btn">Bình luận</button>
                                        </form>
                                    </div>
                                        @else
                                            @if(Session::has('khach_hang_dn') == null)
                                            <div id="review-form" >
                                                <!-- <form class="review-form" method="post" action="{{route('feedback')}}">
                                                @csrf
                                                    <input class="input" type="text" name="title" id="title" placeholder="Tiều Đề Đánh Giá"> 
                                                    <input class="input" type="text" name="comment" id="comment" placeholder="Review của bạn">
                                                    <button class="primary-btn">Xác Nhận</button>
                                                </form> -->
                                                <h2>Bạn muốn phản hồi thì bạn phải đăng nhập</h2>
                                                <br>
                                                <a href="{{route('getlogin')}}" class="cn c_white" style="color: red"><i class="fa fa-user cn c_white"></i> Đăng nhập tại đây</a>
                                            </div>
                                        @endif
                                    @endif
                                    <!------ Include the above in your HEAD tag ---------->
                                    @foreach($comment_fe as $key => $cmt)
                                    <div class="container">
                                            <div class="row">
                                            <div class="col-sm-1">
                                                <div class="thumbnail">
                                                    <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                                                </div><!-- /thumbnail -->
                                            </div><!-- /col-sm-1 -->

                                            <div class="col-sm-10">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <strong>{{$cmt -> Customername}}</strong> <span class="text-muted">commented 5 days ago</span>
                                                </div>
                                                
                                                <div class="panel-body">
                                                {{$cmt -> ndcomment}}
                                                </div>
                                                <!-- /panel-body -->
                                            </div><!-- /panel panel-default -->
                                        </div><!-- /col-sm-5 -->
                                    </div><!-- /container --> 
                                    @endforeach
                                </div>
                                <!-- /Review Form -->
                            </div>
                        </div>
                        <!-- /tab3  -->
                    </div>
                    <!-- /product tab content  -->
                </div>
            </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
@endforeach
            
<!-- /SECTION -->
@stop