@extends('components.template')

@section('title', 'Halaman Blog')

@section('head')
    <style>
        .img-container {
            height: 250px;
            overflow: hidden;
        }

        .blog-footer {
            padding: 2.5rem 0;
            color: #727272;
            text-align: center;
            background-color: #f9f9f9;
            border-top: .05rem solid #e5e5e5;
        }

        .blog-footer p:last-child {
            margin-bottom: 0;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide mt-4 rounded-5 overflow-hidden">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://placeimg.com/640/248/any" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://placeimg.com/640/248/any" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://placeimg.com/640/248/any" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="mt-5">
            <p class="text-success font-monospace m-0 ">Recommendation Post</p>
            <h2 class="fw-semibold mt-n1">Our popular post</h2>
        </div>

        <div class="row mb-2 mt-4">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded-5 overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h3 class="mb-0">Featured post</h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
                            lead-in to additional content.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="https://placeimg.com/200/250/any" class="bd-placeholder-img" width="200" height="250"
                             alt=""/>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded-5 overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Design</strong>
                        <h3 class="mb-0">Post title</h3>
                        <div class="mb-1 text-muted">Nov 11</div>
                        <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to
                            additional content.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="https://placeimg.com/200/250/any" class="bd-placeholder-img" width="200" height="250"
                             alt=""/>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <p class="text-success font-monospace m-0 ">For you</p>
            <h2 class="fw-semibold mt-n1">Explore post</h2>
        </div>

        <div class="row mt-4">
            @for($i = 0; $i < 9; $i++)
                <div class="col-md-4 mb-4">
                    <div class="card rounded-5 overflow-hidden">
                        <div class="img-container">
                            <img src="https://placeimg.com/200/250/any" height="250" class="card-img-top img-fluid"
                                 alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="stretched-link">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
