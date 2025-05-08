@extends('front-office.layouts.main')

@section('body')

    <section class="wrapper bg-gray">
        <div class="container pt-10 pb-14 pb-md-16">
            <div class="swiper-container blog grid-view mb-16" data-margin="30" data-dots="true" data-items-lg="2" data-items-md="1" data-items-xs="1">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        @foreach ($biens as $bien)
                            @php
                                $image = $bien->images->first(); // Récupère la première image associée au bien
                            @endphp
                            <div class="swiper-slide">
                                <figure class="overlay caption caption-overlay rounded mb-0">
                                    <a href="#">
                                        <img src="{{ asset('storage/' . $image->chemin_image) }}" alt="Image du bien" style="width: 400px; height: auto;" />
                                    </a>
                                    <figcaption>
                                        <span class="badge badge-lg bg-white text-uppercase mb-3">{{ $bien->titre }}</span>
                                        <span class="post-title h3 mt-1 mb-3">{{ $bien->description }}</span>
                                        <span class="badge badge-lg bg-success text-uppercase me-5">{{ $bien->adresse }}</span>
                                        <span class="badge badge-lg bg-success text-uppercase">Disponible</span>

                                        <h2 class="post-title h3 mt-1 mb-3">Montant: <a href="#">{{ $bien->prix }} FCFA</a></h2>
                                        <ul class="post-meta text-white mb-0">
                                            <li class="post-date">
                                                <i class="uil uil-calendar-alt"></i>
                                                <span>{{ $bien->created_at->format('d M Y') }}</span>
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12 col-xl-10 col-xxl-8 mx-auto text-center">
                    <h2 class="display-5 text-center mt-4 mb-10">{{ __('message_accueil') }}</h2>
                </div>
            </div>

            <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0 text-center">
                @foreach ($biens as $bien)
                    <div class="col-md-6 col-lg-4 mx-auto">
                        <div class="card shadow-lg">
                            <figure class="card-img-top overlay overlay-1">
                                <img src="{{ asset('storage/' . $image->chemin_image) }}" alt="Image du bien" />

                                <figcaption>
                                    <h5 class="from-top mb-0">{{ __('detail_image') }}</h5>
                                </figcaption>
                            </figure>
                            <div class="card-body p-5">
                                <!-- Localisation -->
                                <div class="d-flex align-items-center mb-3">
                                    <i class="uil uil-map-marker-alt me-2 text-primary" style="font-size: 20px;"></i>
                                    <span class="text-muted">{{ $bien->adresse }}</span>
                                </div>

                                <!-- Prix -->
                                <div class="d-flex align-items-center">
                                    <i class="uil uil-money-bill me-2 text-success" style="font-size: 20px;"></i>
                                    <h4 class="mb-0">{{ $bien->prix }} FCFA / mois</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endsection
