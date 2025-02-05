@extends('template.navbar')
@section('content')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- start banner Area -->
    <section class="banner-area relative" id="home" data-parallax="scroll"
        data-image-src={{ asset('assets/img/Raja_Ampat,_Mutiara_Indah_di_Timur_Indonesia.jpg') }}>
        <div class="overlay-bg overlay"></div>
        <div class="container">
            <div class="row fullscreen">
                <div class="banner-content d-flex align-items-center col-lg-12 col-md-12">
                    <h1>
                        A Discount Toner Cartridge <br>
                        Is Better Than Ever.
                    </h1>
                </div>
                <div class="head-bottom-meta d-flex justify-content-between align-items-end col-lg-12">
                    <div class="col-lg-6 flex-row d-flex meta-left no-padding">

                    </div>
                    <div class="col-lg-6 flex-row d-flex meta-right no-padding justify-content-end">
                        <div class="user-meta">
                            <h4 class="text-white">Alex</h4>
                            <p>04 Feb, 2025 11:21 am</p>
                        </div>
                        <img class="img-fluid user-img" src="img/user.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->


    <!-- Start category Area -->
    <section class="category-area section-gap" id="news">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10" data-aos="fade-up" data-aos-delay="400">Latest News from all categories</h1>
                        <p data-aos="fade-up" data-aos-delay="500">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>

            {{-- Blog Wisata --}}
            <div class="active-cat-carusel text-center" data-aos="fade-up" data-aos-delay="600">
                @if ($blog->isEmpty())
                    <div class="d-flex justify-content-end align-items-end" style="height: 200px;">
                        <p class="text-muted fs-1" style="font-weight: bold;">Maaf, blog anda belum ada</p>
                    </div>
                @else
                    @foreach ($blog as $key => $item)
                        <div class="item single-cat">
                            <a href="/detail/{{ $item->id }}">
                                <img class="rounded"
                                    style="min-width: 150px; height: 180px; object-fit: cover; object-position: top"
                                    src="{{ asset('storage/foto/' . $item->foto) }}" alt="">
                                <h4 class="mt-3"><a href="#">{{ $item->title }}</a></h4>
                                <p class="location mt-1">{{ $item->location }}</p>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>

        </div>
    </section>
    <!-- End category Area -->

    <!-- Start travel Area -->
    <section class="travel-area section-gap" id="travel">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Hot topics from Travel Section</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($topic as $key => $item)
                    <div class="col-lg-6 travel-left">
                        <div class="single-travel media pb-70" data-aos="fade-up">
                            <img class="img-fluid d-flex  mr-3 rounded"
                                style="min-width: 150px; height: 200px; object-fit: cover; object-position: top"
                                src={{ asset('storage/foto/' . $item->foto) }} alt="">

                            <div class="media-body">
                                <div class="d-flex">
                                    <div class="col-md-6">
                                        <h4 class="mt-0 mb-1" style="margin-left: -13px"><a href="">{{ $item->title }}</a></h4>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="mt-1" style="font-size: 14px"><a href="">{{ \Carbon\Carbon::parse($item->date)->translatedFormat('d F Y') }}</a></h4>
                                    </div>
                                </div>
                                <p>{{ $item->desc }}</p>
                                <div class="meta-bottom d-flex justify-content-between">
                                    <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                                    <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
            {{-- <a href="#" class="primary-btn load-more pbtn-2 text-uppercase mx-auto mt-60">Load More </a> --}}
        </div>
        </div>
    </section>
    <!-- End travel Area -->

    <!-- Start fashion Area -->
    <section class="fashion-area section-gap" id="fashion">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Fashion News This Week</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 single-fashion">
                    <img class="img-fluid" src={{ asset('templates/img/t1.jpg') }} alt="">
                    <p class="date">10 Jan 2018</p>
                    <h4><a href="#">Addiction When Gambling
                            Becomes A Problem</a></h4>
                    <p>
                        inappropriate behavior ipsum dolor sit amet, consectetur.
                    </p>
                    <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                        <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-fashion">
                    <img class="img-fluid" src={{ asset('templates/img/t1.jpg') }} alt="">
                    <p class="date">10 Jan 2018</p>
                    <h4><a href="#">Addiction When Gambling
                            Becomes A Problem</a></h4>
                    <p>
                        inappropriate behavior ipsum dolor sit amet, consectetur.
                    </p>
                    <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                        <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-fashion">
                    <img class="img-fluid" src={{ asset('templates/img/t1.jpg') }} alt="">
                    <p class="date">10 Jan 2018</p>
                    <h4><a href="#">Addiction When Gambling
                            Becomes A Problem</a></h4>
                    <p>
                        inappropriate behavior ipsum dolor sit amet, consectetur.
                    </p>
                    <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                        <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-fashion">
                    <img class="img-fluid" src={{ asset('templates/img/t1.jpg') }} alt="">
                    <p class="date">10 Jan 2018</p>
                    <h4><a href="#">Addiction When Gambling
                            Becomes A Problem</a></h4>
                    <p>
                        inappropriate behavior ipsum dolor sit amet, consectetur.
                    </p>
                    <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                        <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
                    </div>
                </div>
                <a href="#" class="primary-btn load-more pbtn-2 text-uppercase mx-auto mt-60">Load More </a>
            </div>
        </div>
    </section>
    <!-- End fashion Area -->


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src={{ asset('templates/js/vendor/jquery-2.2.4.min.js') }}></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src={{ asset('templates/js/vendor/bootstrap.min.js') }}></script>
    <script src={{ asset('templates/js/jquery.ajaxchimp.min.js') }}></script>
    <script src={{ asset('templates/js/parallax.min.js') }}></script>
    <script src={{ asset('templates/js/owl.carousel.min.js') }}></script>
    <script src={{ asset('templates/js/jquery.magnific-popup.min.js') }}></script>
    <script src={{ asset('templates/js/jquery.sticky.js') }}></script>
    <script src={{ asset('templates/js/main.js') }}></script>
@endsection
