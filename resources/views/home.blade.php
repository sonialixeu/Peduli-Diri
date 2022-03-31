{{-- Selamat datang {{ Auth::user()->name ?? ""}}
 <br>
<a href="{{ route('logout') }}"> Logout </a> --}}
@extends('layouts.app') 
@section('content') 
<div class="pagetitle">

      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
 
    <div class="pagetitle">
    <h1 class="text-md-right">Selamat Datang {{ Auth::user()->name ?? ""}} <i class="bi bi-check-circle-fill"></i></h1>
    </div>
    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            

            <!-- Revenue Card -->
            <!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">
                <div class="filter">
                  
                </div>

                <div class="card-body">
                @if (Auth()->user()->role == 'user')
                  <h5 class="card-title">Jumlah Perjalanan <span>| This Year</span></h5>
                @endif

                @if (Auth()->user()->role == 'admin')
                  <h5 class="card-title">Jumlah User <span>| This Year</span></h5>
                @endif

                @if (Auth()->user()->role == 'admin')
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="ri-empathize-line"></i>
                    </div>
                @endif

                @if (Auth()->user()->role == 'user')
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi-signpost-2"></i>
                    </div>
                @endif

                    <div class="ps-3">
                      @if (Auth()->user()->role == 'user')
                      <span class="text-danger small pt-1 fw-bold">{{$hitungPerjalanan}}</span> <span class="text-muted small pt-2 ps-1">incredible journey</span>
                      @endif

                      @if (Auth()->user()->role == 'admin')
                      <span class="text-danger small pt-1 fw-bold">{{$hitungUser}}</span> <span class="text-muted small pt-2 ps-1">User</span>
                      @endif
                    </div>

                  </div>

                </div>
              </div>

              <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Save Your Journey with Peduli Diri</h5>
              <!-- Slides with captions -->
              <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{asset('img/view-2.jpg')}}" class="d-block w-100" alt="..." >
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Mulailah bersama kami</h5>
                      <p>Catatlah setiap perjalanan anda, kami akan mencatatnya untukmu</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('img/view-3.jpg')}}" class="d-block w-100" alt="..." >
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Ingat kesehatanmu</h5>
                      <p>Disini kami akan mengingat setiap kesehatanmu dengan jurnal yang mengesankan</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('img/view-4.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Lakukan Perjalananmu yang berharga</h5>
                      <p>Eksplor dunia dengan tetap peduli bersama Peduli Diri</p>
                    </div>
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>

              </div><!-- End Slides with captions -->

            </div><!-- End Customers Card -->

          </div>
        </div><!-- End Left side columns -->
      </div>
    </section>

    <!-- <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
           
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{asset('img/view-4.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                </div>
              </div>
            </div>
          </div> -->
@endsection