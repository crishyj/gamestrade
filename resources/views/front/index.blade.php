@extends('layouts.frontend')

@section('content')

    <div class="home_first mt-4 text-center py-5 container-fluid">
        <h2 class="mb-4">
            Access the Latest Games all year round for One Annual Subscription
        </h2>

        <div class="row">
            <div class="col-lg-2 col-md-6 col-6">
                <a href="">
                    <img src={{asset('img/game1.jpg')}} alt="" class="home_img">
                </a>
            </div>
            <div class="col-lg-2 col-md-6 col-6">
                <a href="">
                    <img src={{asset('img/game2.jpeg')}} alt="" class="home_img">
                </a>
            </div>
            <div class="col-lg-4 desktop">
                <iframe class="home_video" src="https://www.youtube.com/embed/JbpeY349JCc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-lg-2 col-md-6 col-6">
                <a href="">
                    <img src={{asset('img/game3.png')}} alt="" class="home_img">
                </a>
            </div>
            <div class="col-lg-2 col-md-6 col-6">
                <a href="">
                    <img src={{asset('img/game4.png')}} alt="" class="home_img">
                </a>
            </div>
            <div class="col-md-12 mr-auto ml-auto mt-2 mobile">
                <iframe class="home_video" src="https://www.youtube.com/embed/JbpeY349JCc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="home_second text-center py-5 container-fluid">
        <h4>
            Hold Tight guys! We’re Coming Before the End of 2021…
        </h4>

        <h4>
            Get to Know Us on Instagram!
        </h4>

        <h4>
            Follow Us on Insta & Win Great Prizes:
        </h4>

        <h5 class="mt-4">
            <a href="">
                <span class="instagram">
                    <span class="fa fa-instagram"></span>
                </span>
            </a>@gamestradeofficial
        </h5>
    </div>
    
@endsection