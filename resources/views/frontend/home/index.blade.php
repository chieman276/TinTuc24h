@extends('frontend.layouts.master')
@section('content')

<div class="cat-news">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4 style="color: red"> <b>Tin Tức HOT <sub><img src="https://d3.violet.vn/uploads/previews/document/0/39/67/Movie1.gif" style="width:50px; vertical-align:sub"></sub></b></h4>
                <div class="row cn-slider">

                    @foreach($newHots as $newHot)
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img src="{{ $newHot->image }}" style="width:670px; height:440px" alt />
                            <div class="cn-content">
                                <div class="cn-content-inner">
                                    <a class="cn-date" href=""><i class="far fa-clock"></i>{{
                                        $newHot->puplish_date}}</a>
                                    <a class="cn-title" href="{{ route('website.detailNews',$newHot->id )}}">{{ $newHot->title }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Top News End-->

<!-- Category News Start-->

<div>
    <div class="container">
        <h4> <b><i class="fas fa-align-justify"></i> Tin Tức Đáng Chú Ý</b></h4>
        @foreach($News as $new)
        <div class="row">
            <div class="col-lg-3">
                <div class="product-img">
                    <a href="{{ route('website.detailNews',$new->id )}}">
                        <img class="default-img" src="{{$new->image}}" alt="#" style='width:100%; height: 200px'>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cn-content-inner">
                    <div>
                        <h5> <b><a class="cn-title" href="{{ route('website.detailNews',$new->id )}}">{{
                                    $new->title}}
                                </a></b></h5>
                    </div>
                    <div>
                        <p class="cn-date"><i class="far fa-clock"></i>{{ $new->puplish_date}}</p>
                    </div>
                    <div>
                        <b class="cn-date">{{ $new->description}}</b>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <img src="https://stockdep.net/files/images/21244338.jpg" style="height:250px">
            </div>
        </div>

        @endforeach

    </div>
</div>
</div>
</div>
<!-- Category News End-->

<!-- Category News Start-->
<!-- Category News End-->

<!-- Main News Start-->

<!-- Main News End-->

@endsection