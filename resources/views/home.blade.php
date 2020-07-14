@extends('layouts.master')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner mb-3">
                <div class="carousel-item active">
                  <img src="{{ asset ('images/ERD.png')}}" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5 class="display-4 text-dark">Third slide label</h5>
                    <hr class=my-4>
                    <p class="lead text-info">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    <a class="btn btn-primary btn-lg font-weight-bold" href="/artikel" role="button">KUNJUNGI</a>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{ asset ('images/ERD.png')}}" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{ asset ('images/ERD.png')}}" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

@endsection