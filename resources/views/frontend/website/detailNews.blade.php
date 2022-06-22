@extends('frontend.layouts.master')
@section('content')
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">News</a></li>
                    <li class="breadcrumb-item active">News details</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->


        <!-- Single News Start-->
        <div class="single-news">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-7">
                        <p>
                            <h1  style="width:690px">{{ $new->title }}</h1>
                        </p>
                        <div>
                            <a>
                                <span style ="color: #28262c;-webkit-tap-highlight-color: transparent;">
                                     {{ $new->users->name}}
                                </span>
                            </a>
                        </div>
                        <div class ="dtepub" style="color: #89888b;font-size: .875rem; font-weight: 300;line-height: 20px;white-space: nowrap;">
                             <i class="far fa-clock">05-Feb-2020</i>
                        </div>
                        <div>
                            <h5 class="dark" style="color: #626165;font-size: 1.25rem;font-weight: 700;line-height: 1.6em;">
                                {{ $new->description }}
                            </h5>
                        </div>
                        <div class="sn-img">
                            <img src="{{$new->image}}" style="width: 700px; height: 500px" alt="">
                        </div>
                        <div class="sn-content" style="width:650px">

                            <p style ="text-align: justify;color: #28262c; font-size: 1.125rem; font-weight: normal;line-height: 1.6em;text-align: justify;">
                               {!!$new->content!!}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="sidebar">
                            <div class="sidebar-widget">
                                <h2><i class="fas fa-align-justify"></i>Loại Tin Tức</h2>
                                <div class="category">
                                    @foreach($categories as $category)
                                    <ul class="fa-ul">
                                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">{{ $category->name}}</a></li>
                                    </ul>
                                    @endforeach
                                </div>
                            </div>
                            <div class="sidebar-widget">
                                <h2><i class="fas fa-align-justify"></i>Ads 1 column</h2>
                                <div class="image">
                                    <a href=""><img src="{{asset('img/adds-1.jpg')}}" alt="Image"></a>
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <h2><i class="fas fa-align-justify"></i>Ads 2 column</h2>
                                <div class="image">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href=""><img src="{{asset('img/adds-1.jpg')}}" alt="Image"></a>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href=""><img src="{{asset('img/adds-1.jpg')}}" alt="Image"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style type="text/css">
                    .style_comment{
                        border:1px solid #ddd;
                        border-radius:10px;
                        background: #F0F0E9;
                    }
                    </style>
                    <div class="binhluan">
                        <div class="row">
                            <div class="col-md-6">
                                <form  action="#">
                                <h5>Bình Luận</h5>
                                <p><textarea rows="5" style="resize:none;" class="form-control comment" >
                                </textarea></p>
                                <p><input type="submit" class="btn btn-success sent-comment"  value="Gửi Bình luận"></p>
                                <div id="notyfi_comment"></div>
                            </form>
                            </div>
                        </div>
                    </div>
                 <form >
                    @csrf
                    <div id="comment_show"></div>
                    <input type="hidden" name="comment_new_id" class="comment_new_id" value="{{ $new->id }}">
                    {{-- <div class="row style_comment">
                        <div class="row col-md-2">

                            <img width="100%" src="{{asset('avatars/Comics-Batman-icon.png')}}" class="img img-responsive img-thumbnail">

                        </div>
                        <div class="col-md-4">
                            <p style="color:green">Văn Toàn</p>
                            Active. Điều bất ngờ là, Free Fire gần như biến mất trong BXH doanh thu game mobile toàn cầu tháng này.
                            Điều rất hiếm khi xảy ra, ít nhất là trong khoảng 1 năm trở lại đây.
                            Trong cả hai bảng doanh thu tổng lẫn iOS, Free Fire đều không hề xuất hiện.
                        </div>
                    </div> --}}
                </form>
            </div>
        </div>


        <script type="text/javascript">
            $(document).ready(function(){


                load_comments()

                function load_comments(){

                    var news_comment = $('.comment_new_id').val();
                    var token = $('input[name="_token"]').val();

                    // alert(token);
                    $.ajax({
                        url:"{{url('/load-comment')}}",
                        method:"POST",
                        data: {
                            news_comment:news_comment,
                            token:token,
                        },
                        success:function(status,data){
                            console.log(status,data);
                            $('#comment_show').html(status,data);
                        }
                    });
                }

                $('.sent-comment').click(function(){
                    var news_comment = $('.comment_new_id').val();
                    var comment = $('.comment').val();
                    var token = $('input[name="_token"]').val();

                    $.ajax({
                        url:"{{url('/send-comment')}}",
                        method:"POST",
                        data: {
                            token:token,
                            comment:comment,
                            news_comment:news_comment,
                        },
                        success:function(status,data){
                            console.log(status);
                            $('#notyfi_comment').html('<span class="text text-success">Bình Luận Đang chờ duyệt</span>')
                            load_comments();
                            $('#notyfi_comment').fadeOut(10000);
                            $('.comment').val('');
                        }
                    });

                });
            });



        </script>

@endsection
