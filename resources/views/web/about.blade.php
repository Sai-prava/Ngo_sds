@extends('web.template.master')
@section('content')
    <!--Start Page Header-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('web/assets/img/ser-bg4.jpg') }})">
        </div>
        <div class="container">
            <div class="page-header__inner text-center">
                <h2>About us</h2>
                <ul class="thm-breadcrumb">
                    <li><a href="{{ route('web.index') }}">Home</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Header-->



    <!--Start About One -->
    <section class="about-one">
        <div class="shape5 float-bob-y"><img src="{{ asset('web/assets/images/shapes/about-v1-shape3.png') }}" alt="#">
        </div>
        <div class="container">
            <div class="row">
                <!--Start About One Content-->
                @php
                    use App\Models\AboutUs;
                    $about = AboutUs::first();
                @endphp

                <div class="col-xl-7">
                    <div class="about-one__content">
                        <div class="sec-title">
                            <h2 class="sec-title__title">{{ $about?->title ?? 'About Us' }}</h2>
                        </div>
                        <div class="about-one__content-text">
                            <p>{!! nl2br(e($about?->description ?? 'No about us content found.')) !!}</p>
                        </div>

                        <div class="about-one__content-bottom">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="about-one__content-bottom-left">
                                        <!-- Placeholder for future content -->
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="about-one__content-bottom-right">
                                        <div class="about-one__helped-fund text-center">
                                            <div class="img-box">
                                                <div class="inner">
                                                    <!-- Add image if needed -->
                                                    {{-- <img src="{{ asset($about->image) }}" width="70" alt="Image"> --}}
                                                </div>
                                            </div>
                                            <!-- Optional: Add dynamic stats here -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--End About One Content-->

                <!--Start About One Img-->
                <div class="col-xl-5">
                    <div class="about-one__img">
                        <div class="about-one__img-inner">
                            <!-- <div class="shape4"><img src="assets/images/shapes/about-v1-shape2.png" alt="#"></div> -->
                            <img src="{{ asset($about->image) }}" width="70" alt="Image">
                        </div>
                    </div>
                </div>
                <!--End About One Img-->
            </div>
    </section>



    <!-- mission and vision -->
    <section class="mission-vision">
        <h2 class="sec-title__about_mission-vision">Mission & Vision</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="mission">
                        <i class="fas fa-hand-holding-heart"></i>
                        <h2>Our Mission</h2>
                        <p>Our organization is dedicated to promoting sustainable development by providing innovative
                            solutions for the upliftment of society in the fields of forest and environment, art and
                            culture, rural development, science and technology, education, health and family welfare, women
                            and child development program, agriculture and animal husbandry, social welfare, sports and
                            youth welfare, tourism and archaeology, handloom and handicraft, skill development, and
                            ST/SC/OBC and minority development.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="vision">
                        <i class="far fa-lightbulb"></i>
                        <h2>Our Vision</h2>
                        <p>Our vision is to create a society where every individual has equal opportunities to grow and
                            prosper. We aim to achieve this by promoting sustainable development through the implementation
                            of various programs in the areas of forest and environment, art and culture, rural development,
                            science and technology, education, health and family welfare, women and child development
                            program, agriculture and animal husbandry, social welfare, sports and youth welfare, tourism and
                            archaeology etc.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="members-section">
        @php
            use App\Models\Team;
            $teamMembers = Team::all();
        @endphp

        <h2 class="sec-title__about_member">Our Trustee</h2>
        <div class="members-container">
            @foreach ($teamMembers as $member)
                <div class="member-card">
                    <img src="{{ asset($member->image) }}" alt="{{ $member->name }}">
                    <h3>{{ $member->name }}</h3>
                    <p>{{ $member->description }}</p>
                </div>
            @endforeach
        </div>
    </section>
@endsection
