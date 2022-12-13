@extends('layouts.master-without-nav')
@section('title') @lang('translation.Landing') @endsection
@section('css')
<!--Swiper slider css-->
<link href="{{ URL::asset('assets/libs/swiper/swiper.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('body')

<body data-bs-spy="scroll" data-bs-target="#navbar-example">
    @endsection
    @section('content')

    <!-- Begin page -->
    <div class="layout-wrapper landing">
        <nav class="navbar navbar-expand-lg navbar-landing navbar-light fixed-top" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="index">
                    <img src="{{URL::asset('assets/images/logo-dark.png')}}" class="card-logo card-logo-dark" alt="logo dark" height="27">
                    <img src="{{URL::asset('assets/images/logo-light.png')}}" class="card-logo card-logo-light" alt="logo light" height="27">
                </a>
                <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#jenis">Jenis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#asset">Asset</a>
                        </li>
                        <li class="nav-item">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#unit">Unit</a>
                        </li>
                    </ul>

                    <div class="">
                        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                    </div>
                </div>

            </div>
        </nav>
        <div class="bg-overlay bg-overlay-pattern"></div>
        <!-- end navbar -->

        <!-- start hero section -->
        <section class="section nft-hero" id="home">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-sm-10">
                        <div class="text-center">
                            <h1 class="display-4 fw-medium mb-4 lh-base text-white">Temukan Solusi Peminjaman <span class="text-primary">dan Jelajahi Asset Kami</span></h1>
                            <p class="lead text-white-50 lh-base mb-4 pb-2">kamu dapat melukan peminjaman dan pengurusan
                                administrasi secara mudah di sini, dengan partner unit yang sudah terdaftar</p>

                            <div class="hstack gap-2 justify-content-center">
                                <a href="apps-nft-create" class="btn btn-primary">Lakukan Peminjaman Sekarang <i class="ri-arrow-right-line align-middle ms-1"></i></a>
                                <a href="{{ route('eksplore') }}" class="btn btn-secondary">Jelajahi Terlebih Dahulu<i class="ri-arrow-right-line align-middle ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end hero section -->

        <!-- start wallet -->
        <section class="section" id="jenis">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h2 class="mb-3 fw-semibold lh-base">Jenis Asset</h2>
                            <p class="text-muted">Terdapat beberapa jenis fasilitas yang tersedia pada platform ini yang
                                mungkin anda butuhkan</p>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="card text-center border shadow-none">
                            <div class="card-body py-5 px-4">
                                <img src="{{URL::asset('assets/images/svg/crypto-icons/polis.svg')}}" alt="" height="55" class="mb-3 pb-2">
                                <h5>Bangunan/Ruang</h5>
                                <p class="text-muted pb-1">Fasilitas berupa gedung atau ruangan yang mungkin anda
                                    butuhkan.</p>
                            </div>
                        </div>
                    </div><!-- end col -->
                    <div class="col-lg-4">
                        <div class="card text-center border shadow-none">
                            <div class="card-body py-5 px-4">
                                <img src="{{URL::asset('assets/images/svg/crypto-icons/lun.svg')}}" alt="" height="55" class="mb-3 pb-2">
                                <h5>Barang</h5>
                                <p class="text-muted pb-1">Ketersedian barang yang mungkin anda perlukan untuk
                                    melengkapi kebutuhan.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="card text-center border shadow-none">
                            <div class="card-body py-5 px-4">
                                <img src="{{URL::asset('assets/images/svg/crypto-icons/husd.svg')}}" alt="" height="55" class="mb-3 pb-2">
                                <h5>Fasilitas/Jasa</h5>
                                <p class="text-muted pb-1">Jika anda membutuhkan dukungan fasilitas seperti layanan IT
                                    dan lain sebagainya.</p>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end wallet -->

        <!-- start marketplace -->
        <section class="section bg-light" id="asset">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h2 class="mb-3 fw-semibold lh-base">Jelajahi Asset</h2>
                            <p class="text-muted mb-4">Collection widgets specialize in displaying many elements of the
                                same type, such as a collection of pictures from a collection of articles.</p>
                            <ul class="nav nav-pills filter-btns justify-content-center" role="tablist">

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fw-medium active" type="button" data-filter="all">All
                                        Items</button>
                                </li>
                                @foreach ($kategori as $item)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fw-medium" type="button" data-filter="{{ $item->nama }}">{{
                                        $item->nama }}</button>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
                <div class="row">
                    <!-- TODO: data belum muncul sesuai data asset -->
                    @forelse ($asset as $item)
                    <div class="col-lg-4 product-item artwork crypto-card {{ $item->kategori->nama }}">
                        <div class="card explore-box card-animate">
                            <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                                <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                            </div>
                            <div class="explore-place-bid-img">
                                <img src="{{URL::asset('assets/images/nft/img-03.jpg')}}" alt="" class="card-img-top explore-img" />
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                    <a href="#!" class="btn btn-primary"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 19.29k </p>
                                <h5 class="mb-1"><a href="apps-nft-item-details">Creative Filtered Portrait</a></h5>
                                <p class="text-muted mb-0">Photography</p>
                            </div>
                            <div class="card-footer border-top border-top-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 fs-14">
                                        <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest:
                                        <span class="fw-medium">75.3ETH</span>
                                    </div>
                                    <h5 class="flex-shrink-0 fs-14 text-primary mb-0">67.36 ETH</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <!-- TODO: sementara menunggu data nampilin data dummy -->
                    <div class="col-lg-4 product-item artwork crypto-card 3d-style">
                        <div class="card explore-box card-animate">
                            <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                                <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                            </div>
                            <div class="explore-place-bid-img">
                                <img src="{{URL::asset('assets/images/nft/img-03.jpg')}}" alt="" class="card-img-top explore-img" />
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                    <a href="#!" class="btn btn-primary"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 19.29k </p>
                                <h5 class="mb-1"><a href="apps-nft-item-details">Creative Filtered Portrait</a></h5>
                                <p class="text-muted mb-0">Photography</p>
                            </div>
                            <div class="card-footer border-top border-top-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 fs-14">
                                        <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest:
                                        <span class="fw-medium">75.3ETH</span>
                                    </div>
                                    <h5 class="flex-shrink-0 fs-14 text-primary mb-0">67.36 ETH</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 product-item music crypto-card games">
                        <div class="card explore-box card-animate">
                            <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                                <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                            </div>
                            <div class="explore-place-bid-img">
                                <img src="{{URL::asset('assets/images/nft/img-02.jpg')}}" alt="" class="card-img-top explore-img" />
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                    <a href="#!" class="btn btn-primary"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 23.63k </p>
                                <h5 class="mb-1"><a href="apps-nft-item-details">The Chirstoper</a></h5>
                                <p class="text-muted mb-0">Music</p>
                            </div>
                            <div class="card-footer border-top border-top-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 fs-14">
                                        <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest:
                                        <span class="fw-medium">412.30ETH</span>
                                    </div>
                                    <h5 class="flex-shrink-0 fs-14 text-primary mb-0">394.7 ETH</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 product-item artwork music games">
                        <div class="card explore-box card-animate">
                            <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                                <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                            </div>
                            <div class="explore-place-bid-img">
                                <img src="{{URL::asset('assets/images/nft/gif/img-4.gif')}}" alt="" class="card-img-top explore-img" />
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                    <a href="#!" class="btn btn-primary"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 15.93k </p>
                                <h5 class="mb-1"><a href="apps-nft-item-details">Evolved Reality</a></h5>
                                <p class="text-muted mb-0">Video</p>
                            </div>
                            <div class="card-footer border-top border-top-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 fs-14">
                                        <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest:
                                        <span class="fw-medium">2.75ETH</span>
                                    </div>
                                    <h5 class="flex-shrink-0 fs-14 text-primary mb-0">3.167 ETH</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 product-item crypto-card 3d-style">
                        <div class="card explore-box card-animate">
                            <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                                <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                            </div>
                            <div class="explore-place-bid-img">
                                <img src="{{URL::asset('assets/images/nft/img-01.jpg')}}" alt="" class="card-img-top explore-img" />
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                    <a href="#!" class="btn btn-primary"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 14.85k </p>
                                <h5 class="mb-1"><a href="apps-nft-item-details">Abstract Face Painting</a></h5>
                                <p class="text-muted mb-0">Collectibles</p>
                            </div>
                            <div class="card-footer border-top border-top-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 fs-14">
                                        <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest:
                                        <span class="fw-medium">122.34ETH</span>
                                    </div>
                                    <h5 class="flex-shrink-0 fs-14 text-primary mb-0">97.8 ETH</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 product-item games music 3d-style">
                        <div class="card explore-box card-animate">
                            <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                                <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                            </div>
                            <div class="explore-place-bid-img">
                                <img src="{{URL::asset('assets/images/nft/img-05.jpg')}}" alt="" class="card-img-top explore-img" />
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                    <a href="#!" class="btn btn-primary"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 64.10k </p>
                                <h5 class="mb-1"><a href="apps-nft-item-details">Long-tailed Macaque</a></h5>
                                <p class="text-muted mb-0">Artwork</p>
                            </div>
                            <div class="card-footer border-top border-top-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 fs-14">
                                        <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest:
                                        <span class="fw-medium">874.01ETH</span>
                                    </div>
                                    <h5 class="flex-shrink-0 fs-14 text-primary mb-0">745.14 ETH</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 product-item artwork music crypto-card">
                        <div class="card explore-box card-animate">
                            <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                                <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                            </div>
                            <div class="explore-place-bid-img">
                                <img src="{{URL::asset('assets/images/nft/img-06.jpg')}}" alt="" class="card-img-top explore-img" />
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                    <a href="#!" class="btn btn-primary"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 36.42k </p>
                                <h5 class="mb-1"><a href="apps-nft-item-details">Robotic Body Art</a></h5>
                                <p class="text-muted mb-0">Artwork</p>
                            </div>
                            <div class="card-footer border-top border-top-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 fs-14">
                                        <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest:
                                        <span class="fw-medium">41.658 ETH</span>
                                    </div>
                                    <h5 class="flex-shrink-0 fs-14 text-primary mb-0">34.81 ETH</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforelse

                </div>
            </div><!-- end container -->
        </section>
        <!-- end marketplace -->

        <!-- start Discover Items-->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="d-flex align-items-center mb-5">
                            <h2 class="mb-0 fw-semibold lh-base flex-grow-1">Paling Banyak dicari</h2>
                            <!-- TODO: route ke data paling banyak dicari secara keseluruhan -->
                            <a href="" class="btn btn-primary">Lihat Semua
                                <i class="ri-arrow-right-line align-bottom"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- end row -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card explore-box card-animate border">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{URL::asset('assets/images/nft/img-05.jpg')}}" alt="" class="avatar-xs rounded-circle">
                                    <div class="ms-2 flex-grow-1">
                                        <a href="#!">
                                            <h6 class="mb-0 fs-15">Nama Barang</h6>
                                        </a>
                                        <p class="mb-0 text-muted fs-13">Nama Unit</p>
                                    </div>
                                </div>
                                <div class="explore-place-bid-img overflow-hidden rounded">
                                    <img src="{{URL::asset('assets/images/nft/img-05.jpg')}}" alt="" class="explore-img w-100">
                                    <div class="bg-overlay"></div>
                                </div>
                                <div class="mt-3">
                                    <p class="fw-medium mb-0 float-end">
                                        <span class="text-primary">12</span> Peminjaman
                                    </p>
                                    <h5 class="text-primary"> 12-02-2022 </h5>
                                    <h6 class="fs-16 mb-0"><a href="apps-nft-item-details">Terakhir digunakan</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card explore-box card-animate border">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{URL::asset('assets/images/nft/img-03.jpg')}}" alt="" class="avatar-xs rounded-circle">
                                    <div class="ms-2 flex-grow-1">
                                        <a href="#!">
                                            <h6 class="mb-0 fs-15">Nama Barang</h6>
                                        </a>
                                        <p class="mb-0 text-muted fs-13">Nama Unit</p>
                                    </div>
                                </div>
                                <div class="explore-place-bid-img overflow-hidden rounded">
                                    <img src="{{URL::asset('assets/images/nft/img-03.jpg')}}" alt="" class="explore-img w-100">
                                    <div class="bg-overlay"></div>
                                </div>
                                <div class="mt-3">
                                    <p class="fw-medium mb-0 float-end">
                                        <span class="text-primary">12</span> Peminjaman
                                    </p>
                                    <h5 class="text-primary"> 12-02-2022 </h5>
                                    <h6 class="fs-16 mb-0"><a href="apps-nft-item-details">Terakhir digunakan</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card explore-box card-animate border">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{URL::asset('assets/images/nft/gif/img-1.gif')}}" alt="" class="avatar-xs rounded-circle">
                                    <div class="ms-2 flex-grow-1">
                                        <a href="#!">
                                            <h6 class="mb-0 fs-15">Nama Barang</h6>
                                        </a>
                                        <p class="mb-0 text-muted fs-13">Nama Unit</p>
                                    </div>
                                </div>
                                <div class="explore-place-bid-img overflow-hidden rounded">
                                    <img src="{{URL::asset('assets/images/nft/gif/img-1.gif')}}" alt="" class="explore-img w-100">
                                    <div class="bg-overlay"></div>
                                </div>
                                <div class="mt-3">
                                    <p class="fw-medium mb-0 float-end">
                                        <span class="text-primary">12</span> Peminjaman
                                    </p>
                                    <h5 class="text-primary"> 12-02-2022 </h5>
                                    <h6 class="fs-16 mb-0"><a href="apps-nft-item-details">Terakhir digunakan</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!--end Discover Items-->

        <!-- start Work Process -->
        <section class="section bg-light" id="unit">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h2 class="mb-3 fw-semibold lh-base">Top Unit This Week</h2>
                            <p class="text-muted">Penyedia fasilitas / barang dan jasa yang paling banyak diminati .</p>
                        </div>
                    </div>
                </div><!-- end row -->
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-shink-0">
                                        <img src="{{URL::asset('assets/images/nft/img-01.jpg')}}" alt="" class="avatar-sm object-cover rounded" />
                                    </div>
                                    <div class="ms-3 flex-grow-1">
                                        <a href="pages-profile">
                                            <h5 class="mb-1">Nama Unit</h5>
                                        </a>
                                        <p class="text-muted mb-0">
                                            <span class="text-primary">12</span> Total Peminjaman
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- end container -->
        </section><!-- end Work Process -->

        <!-- start cta -->
        <section class="py-5 bg-primary position-relative bg-opacity-25">
            <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-sm">
                        <div>
                            <h4 class="text-white mb-0 fw-semibold">Lend-US</h4>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-auto">
                        <div>
                            <a href="apps-nft-create" class="btn bg-gradient btn-danger">Lakukan Peminjaman Sekarang</a>
                            <a href="apps-nft-explore" class="btn bg-gradient btn-primary">Jelajahi Terlebih Dahulu</a>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end cta -->

        <!-- Start footer -->
        <footer class="custom-footer bg-dark py-5 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mt-4">
                        <div>
                            <div>
                                <img src="{{URL::asset('assets/images/logo-light.png')}}" alt="logo light" height="47">
                            </div>
                            <div class="mt-4">
                                <p>Sistem Peminjaman Asset</p>
                                <p>Kamu dapat melakukan peminjaman asset uin suska riau dengan mudah melalui situs ini.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row text-center text-sm-start align-items-center mt-5">
                    <div class="col-sm-6">

                        <div>
                            <p class="copy-rights mb-0">
                                <script>
                                    document.write(new Date().getFullYear())

                                </script> © PTIPD - ErnoIrwandi
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->

        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-primary btn-icon landing-back-top" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

    </div>
    <!-- end layout wrapper -->

    @endsection
    @section('script')
    <!--Swiper slider js-->
    <script src="{{ URL::asset('assets/libs/swiper/swiper.min.js') }}"></script>

    <script src="{{ URL::asset('assets/js/pages/nft-landing.init.js') }}"></script>
    @endsection
