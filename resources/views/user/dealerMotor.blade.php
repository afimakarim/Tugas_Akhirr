@extends('templateUsers')
@section('main')

    <section class="blog_part padding_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                </div><div class="section_tittle">
                    <h2>Daftar Dealer Sepeda Motor Di Kota Tegal</h2>
                </div>
            </div>
        </div>
    </section>



    @foreach($data as $key => $dealers)
    <!-- blog part start-->
    <section class="blog_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section_tittle">
                        <h2 style="color: #0b97c4">{{ $key }}</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($dealers as $dealer)
                <div class="col-lg-4 col-sm-6">
                    <div class="single_blog_part">
                        <img src="{{ asset("storage/".$dealer->gambar) }}" style="height: 200px; height: 200px" alt="">
                        <div class="blog_text">
                            <h2>{{ $dealer->name }}</h2>
                            <p>{{ $dealer->alamat }} <a href="{{ route('user.detailDealer', $dealer) }}" style="color: #0b97c4">Detail</a></p>
                        </div>
                    </div>
                </div>
                @endforeach
{{--                <div class="col-lg-4 col-sm-6">--}}
{{--                    <div class="single_blog_part">--}}
{{--                        <img src="template/img/dealerHonda2.jpg" style="height: 200px; height: 200px" alt="">--}}
{{--                        <div class="blog_text">--}}
{{--                            <h2>Langgan Motor</h2>--}}
{{--                            <p>Jalan AR.Hakim No.18 Kel Randugunting--}}
{{--                                Kecamatan Tegal Selatan...<a href="" style="color: #0b97c4">Detail</a></p>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-sm-6">--}}
{{--                    <div class="single_blog_part">--}}
{{--                        <img src="template/img/dealerHonda2.jpg" style="height: 200px; height: 200px" alt="">--}}
{{--                        <div class="blog_text">--}}
{{--                            <h2>Astra Motor</h2>--}}
{{--                            <p>Jalan AR.Hakim No.18 Kel Randugunting--}}
{{--                                Kecamatan Tegal Selatan...<a href="" style="color: #0b97c4">Detail</a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
    @endforeach
{{--    <section class="blog_part padding_top" style="padding-top: 50px">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-8">--}}
{{--                    <div class="section_tittle">--}}
{{--                        <br>--}}
{{--                        <h2 style="color: #0b97c4">Yamaha</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row">--}}
{{--                <div class="col-lg-4 col-sm-6">--}}
{{--                    <div class="single_blog_part">--}}
{{--                        <img src="template/img/dealerHonda.jpg" style="height: 200px; height: 200px" alt="">--}}
{{--                        <div class="blog_text">--}}
{{--                            <h2>Naga Mas Motor</h2>--}}
{{--                            <p>Jalan AR.Hakim No.18 Kel Randugunting--}}
{{--                                Kecamatan Tegal Selatan...<a href="{{ route('user.detailDealer') }}" style="color: #0b97c4">Detail</a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-sm-6">--}}
{{--                    <div class="single_blog_part">--}}
{{--                        <img src="template/img/dealerHonda2.jpg" style="height: 200px; height: 200px" alt="">--}}
{{--                        <div class="blog_text">--}}
{{--                            <h2>Langgan Motor</h2>--}}
{{--                            <p>Jalan AR.Hakim No.18 Kel Randugunting--}}
{{--                                Kecamatan Tegal Selatan...<a href="" style="color: #0b97c4">Detail</a></p>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-sm-6">--}}
{{--                    <div class="single_blog_part">--}}
{{--                        <img src="template/img/dealerHonda2.jpg" style="height: 200px; height: 200px" alt="">--}}
{{--                        <div class="blog_text">--}}
{{--                            <h2>Astra Motor</h2>--}}
{{--                            <p>Jalan AR.Hakim No.18 Kel Randugunting--}}
{{--                                Kecamatan Tegal Selatan...<a href="" style="color: #0b97c4">Detail</a></p>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <section class="blog_part padding_top" style="padding-top: 50px">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-8">--}}
{{--                    <div class="section_tittle">--}}
{{--                        <br>--}}
{{--                        <h2 style="color: #0b97c4">Suzuki</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row">--}}
{{--                <div class="col-lg-4 col-sm-6">--}}
{{--                    <div class="single_blog_part">--}}
{{--                        <img src="template/img/dealerHonda.jpg" style="height: 200px; height: 200px" alt="">--}}
{{--                        <div class="blog_text">--}}
{{--                            <h2>Naga Mas Motor</h2>--}}
{{--                            <p>Jalan AR.Hakim No.18 Kel Randugunting--}}
{{--                                Kecamatan Tegal Selatan...<a href="{{ route('user.detailDealer') }}" style="color: #0b97c4">Detail</a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <section class="blog_part padding_top" style="padding-top: 50px">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-8">--}}
{{--                    <div class="section_tittle">--}}
{{--                        <br>--}}
{{--                        <h2 style="color: #0b97c4">Kawasaki</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row">--}}
{{--                <div class="col-lg-4 col-sm-6">--}}
{{--                    <div class="single_blog_part">--}}
{{--                        <img src="template/img/dealerHonda.jpg" style="height: 200px; height: 200px" alt="">--}}
{{--                        <div class="blog_text">--}}
{{--                            <h2>Naga Mas Motor</h2>--}}
{{--                            <p>Jalan AR.Hakim No.18 Kel Randugunting--}}
{{--                                Kecamatan Tegal Selatan...<a href="{{ route('user.detailDealer') }}" style="color: #0b97c4">Detail</a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <br>
    <br>
    <br>
    <br>
    <!-- blog part end-->
    <section>
        <div class="row justify-content-center">
            <div class="card-deck">
                <div class="card">
                    <img src="{{asset('img/honda.png')}}" class="card-img-top"
                         style="height: 200px; width: auto" alt="...">
                    <div class="card-footer">
                        <a href="www.google.com"><h5 class="text-center">HONDA</h5></a>
                    </div>
                </div>
                <div class="card">
                    <img src="{{asset('img/yamaha.png')}}" class="card-img-top"
                         style="height: 200px; width: auto" alt="...">
                    <div class="card-footer">
                        <a href="www.google.com"><h5 class="text-center">YAMAHA</h5></a>
                    </div>
                </div>
                <div class="card">
                    <img src="{{asset('img/suzuki.png')}}" class="card-img-top"
                         style="height: 200px; width: auto" alt="...">
                    <div class="card-footer">
                        <a href="www.google.com"><h5 class="text-center">SUZUKI</h5></a>
                    </div>
                </div>
                <div class="card">
                    <img src="{{asset('img/kawasaki.png')}}" class="card-img-top"
                         style="height: 200px; width: auto" alt="...">
                    <div class="card-footer">
                        <a href="www.google.com"><h5 class="text-center">KAWASAKI</h5></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
@section('footerUser')
@stop

