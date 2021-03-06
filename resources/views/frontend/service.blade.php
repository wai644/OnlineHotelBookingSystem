@extends('frontendtemplate')

@section('content')
    <main>

        <!-- slider Area Start-->
        <div class="slider-area">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{ asset('frontend/assets/img/hero/servicespage_hero.jpg')}}" >
                <div class="container">
                    <div class="row ">
                        <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                            <div class="hero-caption">
                                <span>Services</span>
                                <h2>Services</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Dining Start -->
       <section class="room-area mt-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <!--font-back-tittle  -->
                        <div class="font-back-tittle mb-45">
                            <div class="archivment-front">
                                <h3>Our Services</h3>
                            </div>
                            <h3 class="archivment-back">Our Service</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                     @foreach($services as $service)
 
                    <div class="col-xl-4 col-lg-6 col-md-6">
                       
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                             
                            <div class="room-img">

                                <img src="{{asset($service->photo)}}" class="img-fluid" width="150px" height="150px">
                                 
                            </div>
                             <a href="" style="text-decoration: none; color: gray">
                            <div class="room-caption">
                                {{$service->name}}
                            </div>
                        </a>
                        </div>
                    </div>
                   @endforeach
                    </div>
                </div>
            </div>

        </section>
                            <!-- Single Testimonial -->
        <!-- Testimonial End -->

        <!-- Gallery img Start-->
        <!-- Gallery img End-->
    </main>
@endsection