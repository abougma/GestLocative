@extends('front-office.layouts.main')

@section('body')
    <section class="wrapper bg-gray">
        <div class="container pt-10 pb-14 pb-md-16">
            <div class="swiper-container blog grid-view mb-16" data-margin="30" data-dots="true" data-items-lg="2" data-items-md="1" data-items-xs="1">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <figure class="overlay caption caption-overlay rounded mb-0"><a href="#"> <img src="./assets/img/photos/tb1.jpg" alt="" /></a>
                                <figcaption>
                                    <span class="badge badge-lg bg-white text-uppercase mb-3">{{ __('localisation') }}</span>
                                    <span class="badge badge-lg bg-success text-uppercase">Disponible</span>
                                    <h2 class="post-title h3 mt-1 mb-3"><a href="./blog-post.html">{{ __('quartier') }}</a></h2>
                                    <ul class="post-meta text-white mb-0">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>8 Aug 2022</span></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </figcaption>
                                <!-- /figcaption -->
                            </figure>
                            <!-- /figure -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="overlay caption caption-overlay rounded mb-0"><a href="#"> <img src="./assets/img/photos/tb2.jpg" alt="" /></a>
                                <figcaption>
                                    <span class="badge badge-lg bg-white text-uppercase mb-3">{{ __('localisation') }}</span>
                                    <span class="badge badge-lg bg-success text-uppercase">Disponible</span>
                                    <h2 class="post-title h3 mt-1 mb-3"><a href="./blog-post.html">{{ __('quartier') }}</a></h2>
                                    <ul class="post-meta text-white mb-0">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>5 Jul 2022</span></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </figcaption>
                                <!-- /figcaption -->
                            </figure>
                            <!-- /figure -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="overlay caption caption-overlay rounded mb-0"><a href="#"> <img src="./assets/img/photos/tb3.jpg" alt="" /></a>
                                <figcaption>
                                    <span class="badge badge-lg bg-white text-uppercase mb-3">{{ __('localisation') }}</span>
                                    <span class="badge badge-lg bg-success text-uppercase">Disponible</span>
                                    <h2 class="post-title h3 mt-1 mb-3"><a href="./blog-post.html">{{ __('quartier') }}</a></h2>
                                    <ul class="post-meta text-white mb-0">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23 Jun 2022</span></li>

                                    </ul>
                                    <!-- /.post-meta -->
                                </figcaption>
                                <!-- /figcaption -->
                            </figure>
                            <!-- /figure -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="overlay caption caption-overlay rounded mb-0"><a href="#"> <img src="./assets/img/photos/tb4.jpg" alt="" /></a>
                                <figcaption>
                                    <span class="badge badge-lg bg-white text-uppercase mb-3">{{ __('localisation') }}</span>
                                    <span class="badge badge-lg bg-success text-uppercase">Disponible</span>
                                    <h2 class="post-title h3 mt-1 mb-3"><a href="./blog-post.html">{{ __('quartier') }}</a></h2>
                                    <ul class="post-meta text-white mb-0">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15 Apr 2022</span></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </figcaption>
                                <!-- /figcaption -->
                            </figure>
                            <!-- /figure -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="overlay caption caption-overlay rounded mb-0"><a href="#"> <img src="./assets/img/photos/tb5.jpg" alt="" /></a>
                                <figcaption>
                                    <span class="badge badge-lg bg-white text-uppercase mb-3">{{ __('localisation') }}</span>
                                    <span class="badge badge-lg bg-success text-uppercase">Disponible</span>
                                    <h2 class="post-title h3 mt-1 mb-3"><a href="./blog-post.html">{{ __('quartier') }}</a></h2>
                                    <ul class="post-meta text-white mb-0">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Feb 2022</span></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </figcaption>
                                <!-- /figcaption -->
                            </figure>
                            <!-- /figure -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="overlay caption caption-overlay rounded mb-0"><a href="#"> <img src="./assets/img/photos/tb6.jpg" alt="" /></a>
                                <figcaption>
                                    <span class="badge badge-lg bg-white text-uppercase mb-3">{{ __('localisation') }}</span>
                                    <span class="badge badge-lg bg-success text-uppercase">Disponible</span>
                                    <h2 class="post-title h3 mt-1 mb-3"><a href="./blog-post.html">{{ __('quartier') }}</a></h2>
                                    <ul class="post-meta text-white mb-0">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22 Jan 2022</span></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </figcaption>
                                <!-- /figcaption -->
                            </figure>
                            <!-- /figure -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="overlay caption caption-overlay rounded mb-0"><a href="#"> <img src="./assets/img/photos/tb7.jpg" alt="" /></a>
                                <figcaption>
                                    <span class="badge badge-lg bg-white text-uppercase mb-3">{{ __('localisation') }}</span>
                                    <span class="badge badge-lg bg-success text-uppercase">Disponible</span>
                                    <h2 class="post-title h3 mt-1 mb-3"><a href="./blog-post.html">{{ __('quartier') }}</a></h2>
                                    <ul class="post-meta text-white mb-0">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>2 Jan 2022</span></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </figcaption>
                                <!-- /figcaption -->
                            </figure>
                            <!-- /figure -->
                        </div>
                        <!--/.swiper-slide -->
                    </div>
                    <!--/.swiper-wrapper -->
                </div>
                <!-- /.swiper -->
            </div>
            <!-- /.swiper-container -->
            <div class="row">
                <div class="col-lg-12 col-xl-10 col-xxl-8 mx-auto text-center">
                    <h2 class="display-5 text-center mt-4 mb-10">{{ __('message_accueil') }}</h2>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0 text-center">
                <div class="col-md-6 col-lg-4 mx-auto">
                    <div class="card shadow-lg">
                        <figure class="card-img-top overlay overlay-1">
                            <a href="#"><img class="img-fluid" src="./assets/img/photos/f1.jpg" alt="" /></a>
                            <figcaption>
                                <h5 class="from-top mb-0">{{ __('detail_image') }}</h5>
                            </figcaption>
                        </figure>
                        <div class="card-body p-5">
                            <!-- Localisation -->
                            <div class="d-flex align-items-center mb-3">
                                <i class="uil uil-map-marker-alt me-2 text-primary" style="font-size: 20px;"></i>
                                <span class="text-muted">{{ __('Abidjan, Cocody') }}</span>
                            </div>

                            <!-- Prix -->
                            <div class="d-flex align-items-center">
                                <i class="uil uil-money-bill me-2 text-success" style="font-size: 20px;"></i>
                                <h4 class="mb-0">{{ __('500 000 FCFA / mois') }}</h4> <!-- Tu peux remplacer par une variable aussi -->
                            </div>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

                <!--/column -->
                <div class="col-md-6 col-lg-4 mx-auto">
                    <div class="card shadow-lg">
                        <figure class="card-img-top overlay overlay-1">
                            <a href="#"><img class="img-fluid" src="./assets/img/photos/f2.jpg" alt="" /></a>
                            <figcaption>
                                <h5 class="from-top mb-0">{{ __('detail_image') }}</h5>
                            </figcaption>
                        </figure>
                        <div class="card-body p-5">
                            <!-- Localisation -->
                            <div class="d-flex align-items-center mb-3">
                                <i class="uil uil-map-marker-alt me-2 text-primary" style="font-size: 20px;"></i>
                                <span class="text-muted">Abidjan, Yopougon</span>
                            </div>

                            <!-- Prix -->
                            <div class="d-flex align-items-center">
                                <i class="uil uil-money-bill me-2 text-success" style="font-size: 20px;"></i>
                                <h4 class="mb-0">300 000 FCFA / mois</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/column-->

                <div class="col-md-6 col-lg-4 mx-auto">
                    <div class="card shadow-lg">
                        <figure class="card-img-top overlay overlay-1">
                            <a href="#"><img class="img-fluid" src="./assets/img/photos/f3.jpg" alt="" /></a>
                            <figcaption>
                                <h5 class="from-top mb-0">{{ __('detail_image') }}</h5>
                            </figcaption>
                        </figure>
                        <div class="card-body p-5">
                            <!-- Localisation -->
                            <div class="d-flex align-items-center mb-3">
                                <i class="uil uil-map-marker-alt me-2 text-primary" style="font-size: 20px;"></i>
                                <span class="text-muted">Abidjan, Marcory</span>
                            </div>

                            <!-- Prix -->
                            <div class="d-flex align-items-center">
                                <i class="uil uil-money-bill me-2 text-success" style="font-size: 20px;"></i>
                                <h4 class="mb-0">450 000 FCFA / mois</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!--/column -->
            </div>

        </div>
    </section>
@endsection
