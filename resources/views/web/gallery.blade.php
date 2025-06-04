@extends('web.template.master')

<style>
    /* WHAT WE DO Section */
    .what-we-do-section {
        background-color: #fafafa !important;
        padding: 50px 0 !important;
    }

    .section-title {
        text-align: center !important;
        font-size: 32px !important;
        font-weight: bold !important;
        margin-bottom: 30px !important;
        color: #222 !important;
    }

    .what-we-do-grid {
        display: grid !important;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)) !important;
        gap: 20px !important;
        max-width: 1200px !important;
        margin: 0 auto !important;
        padding: 0 20px !important;
    }

    .card {
        position: relative !important;
        overflow: hidden !important;
        border-radius: 8px !important;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1) !important;
        cursor: pointer !important;
        transition: transform 0.3s ease !important;
    }

    .card:hover {
        transform: scale(1.03) !important;
    }

    .card img {
        width: 100% !important;
        height: 220px !important;
        object-fit: cover !important;
        display: block !important;
    }

    .card-title {
        position: absolute !important;
        bottom: 0 !important;
        left: 0 !important;
        right: 0 !important;
        background: rgba(0, 0, 0, 0.5) !important;
        color: #fff !important;
        padding: 15px !important;
        font-size: 18px !important;
        font-weight: 500 !important;
        text-align: center !important;
        transition: background 0.3s ease !important;
    }

    .card:hover .card-title {
        background: rgba(0, 0, 0, 0.7) !important;
    }
</style>
@section('content')
    <!--Start Page Header-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('web/assets/img/gallery.jpg') }})">
        </div>
        <div class="container">
            <div class="page-header__inner text-center">
                <h2>What We Do</h2>
                <ul class="thm-breadcrumb">
                    <li><a href="{{ route('web.index') }}">Home</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Header-->




    <!--Gallery Two Start-->

    @php
        use App\Models\WhatWeDo;
        $item = WhatWeDo::find($id); // Change 1 to the ID you want to display
    @endphp

    @if ($item)
        <section class="what-we-do-section py-5">
            <div class="container">
                <h2 class="section-title text-center mb-5">{{ $item->title }}</h2>

                <div class="row justify-content-center align-items-center">
                    <!-- Image Column -->
                    <div class="col-md-4 mb-4 mb-md-0">
                        <img src="{{ asset($item->image) }}" class="img-fluid rounded shadow" alt="{{ $item->title }}">
                    </div>
                    <!-- Text Column -->
                    <div class="col-md-6">
                        <h3 class="mb-3">{{ $item->title }}</h3>
                        <p class="text-muted">{{ $item->description }}</p>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section class="what-we-do-section py-5">
            <div class="container text-center">
                <h2 class="text-danger">No data found for this item.</h2>
            </div>
        </section>
    @endif

    <!--Gallery Two End-->
@endsection
