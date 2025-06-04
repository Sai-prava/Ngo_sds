@extends('web.template.master')
<style>
    .blog-section {
        padding: 60px 0 !important;
        background-color: #f9f9f9 !important;
    }

    .section-title__blog {
        font-size: 32px !important;
        font-weight: 700 !important;
        margin-bottom: 10px !important;
    }

    .blog-card {
        background: #fff !important;
        border-radius: 8px !important;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05) !important;
        overflow: hidden !important;
        margin-bottom: 30px !important;
        transition: transform 0.3s ease !important;
    }

    .blog-card:hover {
        transform: translateY(-5px) !important;
    }

    .blog-card img {
        width: 100% !important;
        height: 220px !important;
        object-fit: cover !important;
    }

    .blog-content {
        padding: 20px !important;
    }

    .blog-content h3 {
        font-size: 20px !important;
        margin-bottom: 10px !important;
        font-weight: 600 !important;
    }

    .blog-content p {
        font-size: 14px !important;
        color: #666 !important;
        margin-bottom: 15px !important;
    }

    .read-more {
        font-size: 14px !important;
        color: #e6007e !important;
        text-decoration: none !important;
        font-weight: 600 !important;
        transition: color 0.3s ease !important;
    }

    .read-more:hover {
        color: #c1006c !important;
    }
</style>
@php
    use App\Models\Blog;
    $blogs = Blog::latest()->get();
@endphp

@section('content')
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{ asset('web/assets/img/gallery.jpg') }})">
    </div>
    <div class="container">
        <div class="page-header__inner text-center">
            <h2>Blog</h2>
            <ul class="thm-breadcrumb">
                <li><a href="{{ route('web.index') }}">Home</a></li>
            </ul>
        </div>
    </div>
</section>

<section class="blog-section">
    <div class="container mb-3">
        <div class="section-title text-center">
            <h3 class="section-title__blog">Our Blog</h3>
        </div>

        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <img src="{{ asset($blog->image) }}" alt="Blog Image">
                        <div class="blog-content">
                            <h3><a href="#">{{ $blog->title }}</a></h3>
                            <p>{{ $blog->description }}</p>
                            {{-- <a href="#" class="read-more">Read More →</a> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
