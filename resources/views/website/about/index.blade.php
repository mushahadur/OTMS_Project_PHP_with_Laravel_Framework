@extends('website.master')

@section('title')
    ABOUT US
@endsection


@section('body')
<section class="">
        
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
            <img src="{{asset('/')}}website/img/s5.jpg" class="d-block w-100" style="height: 500px;" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
            <img src="{{asset('/')}}website/img/s4.jpg" class="d-block w-100" style="height: 500px;"  alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="{{asset('/')}}website/img/s1.jpg" class="d-block w-100" style="height: 500px;"  alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-body border-0 shadow">
                    <div class="row">
                        <div class="col-md-6"><h3 class="mt-3">Our Mission</h3></div>
                        <div class="col-md-6">
                            <img src="{{asset('/')}}website/img/5.png" alt="" style="height: 80px; width: 90px;" class=""/>
                        </div>
                    </div>
                    
                    <hr/>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis delectus dignissimos provident sed sequi.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci expedita fugiat. Aspernatur at aut, consectetur cupiditate earum est eum rerum voluptatem!</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-body border-0 shadow">
                <div class="row">
                        <div class="col-md-6"><h3 class="mt-3">Our Vision</h3></div>
                        <div class="col-md-6">
                            <img src="{{asset('/')}}website/img/v.png" alt="" style="height: 80px; width: 90px;" class=""/>
                        </div>
                    </div>
                    <hr/>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis delectus dignissimos provident sed sequi.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci expedita fugiat. Aspernatur at aut, consectetur cupiditate earum est eum rerum voluptatem!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row bg-danger">
            <div class="col">
                <div class="card card-body border-0 text-center">
                    <h1>Our Instructor</h1>
                </div>
            </div>
        </div>
        <div class="row mt-3">
        @foreach($teachers as $teacher)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset($teacher->image)}}" alt="" class=""/>
                    <div class="card-body">
                        <h4>Instructor Name: {{$teacher->name}}</h4>
                        <p>Instructor Phone: {{$teacher->mobile}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>
@endsection
