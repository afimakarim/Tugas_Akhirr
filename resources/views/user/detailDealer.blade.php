@extends('templateUsers')
@section('main')
    <!-- Start Align Area -->
    <section class="feature_part padding_top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-7">
                    <div class="feature_img">
                        <img src="{{ asset('storage/' . $dealer->gambar) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="feature_part_text">
                        <img src="{{ ('img/company.png')}}" style="height: 50px;width: auto;" alt="#">
                        <h2>{{ $dealer->name }}</h2>
                        <span>Honda Naga Mas Motor adalah salah satu dealer Honda populer di Tegal.
                            Dealer ini terletak di Jl. A. Yani No. 19, Tegal dan Anda bisa mengunjunginya untuk test drive,
                            mendapatkan penawaran terbaik, membeli motor Honda.</span>
                        <span>Jam Buka : 07:00 - 16:00 WIB</span><br>
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <div class="feature_part_text_iner">
                                    <h4>Telephone</h4>
                                    <p>
                                        +62283350038
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-8">
                                <div class="feature_part_text_iner">
                                    <h4>Lokasi</h4>
                                    <p>
                                        Jalan AR.Hakim No.18 Kel Randugunting
                                        Kecamatan Tegal Selatan
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </div>
        </div>
    </section>

    <section class="blog_part ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section_tittle">
                        <h2>Promo dan Event</h2>
                        <br>
                        <br>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($promos as $promo)
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="single_blog_part">
                        <img src="{{ asset('storage/' . $promo->gambar) }}" style="height: 200px; height: 200px" alt="">
                        <div class="blog_text ">
                            <h2>{{ $promo->judul }}</h2>
                            <a href="{{ route('user.detailPromo', $promo) }}" class="genric-btn success-border circle">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
{{--                <div class="col-lg-4 col-sm-6 text-center">--}}
{{--                    <div class="single_blog_part">--}}
{{--                        <img src="img/promo.jpg" style="height: 200px; height: 200px" alt="">--}}
{{--                        <div class="blog_text ">--}}
{{--                            <h2>Hujan Promo Awal Tahun 2020 Naga Mas Tegal</h2>--}}
{{--                            <a href="#" class="genric-btn success-border circle">Lihat Detail</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-sm-6 text-center">--}}
{{--                    <div class="single_blog_part">--}}
{{--                        <img src="img/promo.jpg" style="height: 200px; height: 200px" alt="">--}}
{{--                        <div class="blog_text ">--}}
{{--                            <h2>Hujan Promo Awal Tahun 2020 Naga Mas Tegal</h2>--}}
{{--                            <a href="#" class="genric-btn success-border circle">Lihat Detail</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-sm-6 text-center">--}}
{{--                    <div class="single_blog_part">--}}
{{--                        <img src="img/promo.jpg" style="height: 200px; height: 200px" alt="">--}}
{{--                        <div class="blog_text ">--}}
{{--                            <h2>Hujan Promo Awal Tahun 2020 Naga Mas Tegal</h2>--}}
{{--                            <a href="#" class="genric-btn success-border circle">Lihat Detail</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-sm-6 text-center">--}}
{{--                    <div class="single_blog_part">--}}
{{--                        <img src="img/promo.jpg" style="height: 200px; height: 200px" alt="">--}}
{{--                        <div class="blog_text ">--}}
{{--                            <h2>Hujan Promo Awal Tahun 2020 Naga Mas Tegal</h2>--}}
{{--                            <a href="#" class="genric-btn success-border circle">Lihat Detail</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
        <div class="text-center">
            <a href="#" class="genric-btn success radius">Lihat Selengkapnya</a>
        </div>
    </section>

@stop
@section('footerUser')
@stop

