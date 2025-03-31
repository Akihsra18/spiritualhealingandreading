@extends('layouts.app')

@section('title', 'Home')

@section('content')
        
        <div class="container-fluid bg_perso g-0">
            <div class="row row-cols-2 col-11 mx-auto g-0">
                <div class="card col-lg-6 col-12 mx-auto">
                    <img class="card-img-top" src="{{ asset('assets/images/Page_AKR/parallax.png') }}" height="100%">
                    <div class="card-img-overlay col-xl-10 col-lg-11 col-12 mx-auto">
                        <div class="transbox_3 col-12">
                            <div class="ribbon-2 fw-bold fs-5 pt-2 pb-3">PROMO</div>
                            <div class="row col-xl-10 col-lg-11 col-12 mx-auto align-content-center text-center text-wrap h-100"> 
                                <p class="h_texte fw-bold mt-2 mb-1">Akashic Records Reading</p> 
                                <p class="p_texte fw-bold mt-2 mb-1">Learn About Your Soul's Path, Purpose, Past Lives, and Gifts</p>
                                <p class="h_texte fw-bold mt-1 mb-2">
                                    <span class="text-decoration-line-through">$299</span> $199
                                </p>
                                <a href="/akashic-records-reading" class="btn btn-perso mt-1 mb-2 mx-auto" role="button">MORE DETAILS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-lg-6 col-12 mx-auto">
                    <img class="card-img-top" src="{{ asset('assets/images/Page_SH/parallax.png') }}" height="100%">
                    <div class="card-img-overlay col-xl-10 col-lg-11 col-12 mx-auto">
                        <div class="transbox_3 col-12">
                            <div class="ribbon-2 fw-bold fs-5 pt-2 pb-3">PROMO</div>
                            <div class="row col-xl-10 col-lg-11 col-12 mx-auto align-content-center text-center text-wrap h-100">
                                <p class="h_texte fw-bold mt-2 mb-1">Space Healing</p>
                                <p class="p_texte fw-bold mt-2 mb-2">Make Your House Feel Lighter, Brighter, and More Loving</p>
                                <p class="h_texte fw-bold mt-1 mb-2">
                                    <span class="text-decoration-line-through">$199</span> $99
                                </p>
                                <a href="/space-healing" class="btn btn-perso mt-1 mb-2 mx-auto" role="button">MORE DETAILS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-lg-6 col-12 mx-auto">
                    <img class="card-img-top" src="{{ asset('assets/images/Page_HSR/parallax.png') }}" height="100%">
                    <div class="card-img-overlay col-xl-10 col-lg-11 col-12 mx-auto">
                        <div class="transbox_3 col-12">
                            <div class="ribbon-2 fw-bold fs-5 pt-2 pb-3">PROMO</div>
                            <div class="row col-xl-10 col-lg-11 col-12 mx-auto align-content-center text-center text-wrap h-100">
                                <p class="h_texte fw-bold mt-2 mb-1">Higher Self Reading</p>
                                <p class="p_texte fw-bold mt-2 mb-2">Seek Insight, Clarity and Guidance From Your Higher Self</p>
                                <p class="h_texte fw-bold mt-1 mb-2">
                                    <span class="text-decoration-line-through">$59</span> $39
                                </p>
                                <a href="/higher-self-reading" class="btn btn-perso mt-1 mb-2 mx-auto" role="button">MORE DETAILS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-lg-6 col-12 mx-auto">
                    <img class="card-img-top" src="{{ asset('assets/images/Page_TCR/parallax.jpg') }}" height="100%">
                    <div class="card-img-overlay col-xl-10 col-lg-11 col-12 mx-auto">
                        <div class="transbox_3 col-12">
                            <div class="ribbon-2 fw-bold fs-5 pt-2 pb-3">PROMO</div>
                            <div class="row col-xl-10 col-lg-11 col-12 mx-auto align-content-center text-center text-wrap h-100">
                                <p class="h_texte fw-bold mt-2 mb-1">Tarot Card Reading</p>
                                <p class="p_texte fw-bold mt-2 mb-2">Gain Clarity or Get Answers About Your Question or Situation</p>
                                <p class="h_texte fw-bold mt-1 mb-2">
                                    <span class="text-decoration-line-through">$49</span> $29
                                </p>
                                <a href="/tarot-card-reading" class="btn btn-perso mt-1 mb-2 mx-auto" role="button">MORE DETAILS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-lg-6 col-12 mx-auto">
                    <img class="card-img-top" src="{{ asset('assets/images/Page_SR/parallax.jpg') }}" height="100%">
                    <div class="card-img-overlay col-xl-10 col-lg-11 col-12 mx-auto">
                        <div class="transbox_3 col-12">
                            <div class="ribbon-2 fw-bold fs-5 pt-2 pb-3">PROMO</div>
                            <div class="row col-xl-10 col-lg-11 col-12 mx-auto align-content-center text-center text-wrap h-100">
                                <p class="h_texte fw-bold mt-2 mb-1">Shamanic Reading</p>
                                <p class="p_texte fw-bold mt-2 mb-2">Live a Life of Spiritual Clarity, Energetic Oneness, and Personal Empowerment</p>
                                <p class="h_texte fw-bold mt-1 mb-2">
                                    <span class="text-decoration-line-through">$59</span> $39
                                </p>
                                <a href="/shamanic-reading" class="btn btn-perso mt-1 mb-2 mx-auto" role="button">MORE DETAILS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-lg-6 col-12 mx-auto">
                    <img class="card-img-top" src="{{ asset('assets/images/Page_SECR/parallax.png') }}" height="100%">
                    <div class="card-img-overlay col-xl-10 col-lg-11 col-12 mx-auto">
                        <div class="transbox_3 col-12">
                            <div class="ribbon-2 fw-bold fs-5 pt-2 pb-3">PROMO</div>
                            <div class="row col-xl-10 col-lg-11 col-12 mx-auto align-content-center text-center text-wrap h-100">
                                <p class="h_texte fw-bold mt-2 mb-1">Seven Energy Crescent Reading</p>
                                <p class="p_texte fw-bold mt-2 mb-2">Know About the Flow-Through of Your Situation</p>
                                <p class="h_texte fw-bold mt-1 mb-2">
                                    <span class="text-decoration-line-through">$79</span> $59
                                </p>
                                <a href="/seven-energy-crescent-reading" class="btn btn-perso mt-1 mb-2 mx-auto" role="button">MORE DETAILS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-lg-6 col-12 mx-auto">
                    <img class="card-img-top" src="{{ asset('assets/images/Page_CRAH/parallax.jpg') }}" height="100%">
                    <div class="card-img-overlay col-xl-10 col-lg-11 col-12 mx-auto">
                        <div class="transbox_3 col-12">
                            <div class="ribbon-2 fw-bold fs-5 pt-2 pb-3">PROMO</div>
                            <div class="row col-xl-10 col-lg-11 col-12 mx-auto align-content-center text-center text-wrap h-100">
                                <p class="h_texte fw-bold mt-2 mb-1">Chakra Reading and Healing</p>
                                <p class="p_texte fw-bold mt-2 mb-2">Improve Your Physical, Emotional and Mental Health</p>
                                <p class="h_texte fw-bold mt-1 mb-2">
                                    <span class="text-decoration-line-through">$59</span> $39
                                </p>
                                <a href="/chakra-reading-and-healing" class="btn btn-perso mt-1 mb-2 mx-auto" role="button">MORE DETAILS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection