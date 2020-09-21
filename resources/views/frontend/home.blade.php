@extends('frontendtemplate')

@section('content')

<main>

        <!-- slider Area Start-->
        <div class="slider-area mb-1">
            <!-- Mobile Menu -->
            <div class="slider-active dot-style">
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="{{ asset('frontend/assets/img/hero/h1_hero.jpg')}}" >
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">Welcome Our Hotel</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s">Hotel & Resourt</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="{{ asset('frontend/assets/img/hero/big_image_1.jpg')}}" >
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">Welcome Our Hotel</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s">Hotel & Resourt</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="{{ asset('frontend/assets/img/hero/servicespage_hero.jpg')}}">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">Welcome Our Hotel</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s">Hotel & Resourt</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Booking Room Start-->
        <!-- Booking Room End-->

        <!-- Make customer Start-->
        <section class="make-customer-area customar-padding fix">
            <div class="container-fluid p-0">
                <div class="row">
                   <div class="col-xl-5 col-lg-6">
                        <div class="customer-img mb-120">
                            <img src="{{ asset('frontend/assets/img/customer/customar1.png')}}" class="customar-img1" alt="">
                            <img src="{{ asset('frontend/assets/img/customer/customar2.png')}}" class="customar-img2" alt="">
                        </div>
                   </div>
                    <div class=" col-xl-6 col-lg-6">
                        <div class="customer-caption">
                            <h2 style="text-align: center">About our hotel</h2>
                            <p style="text-align: center;"><h4>Your welcoming sanctuary in the heart of Yangon</h4></p>
                            
                                <p><h4>Take time and make time…Feel relaxed, rejuvenated and entirely at home when you stay with us at the Novotel Yangon Max!</h4></p>
<p><h4>
Just 20 minutes from the Yangon International Airport (RGN) on Pyay Road, Accor’s five-star Novotel Yangon Max is ideally located within a 10-kilometre radius of most embassies and international organizations, only four kilometres from the sacred Shwedagon Pagoda, close to the historical city centre, and a mere stroll from Junction Square shopping centre.</h4></p>
<p><h4>
At Novotel Yangon Max we understand the importance of balancing your time to maximise your stay. Whether you’re travelling for business or leisure, our wide selection of recreational facilities, mouth-watering Asian and international cuisine, stylish and comfortable rooms and state-of-the-art business and conference services will ensure this peaceful oasis is your ideal choice for a relaxing, rewarding and energizing experience in the heart of Myanmar’s largest city.</h4>
 </p>
                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Make customer End-->

        <!-- Room Start -->
        <section class="room-area mt-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <!--font-back-tittle  -->
                        <div class="font-back-tittle mb-45">
                            <div class="archivment-front">
                                <h3>Our Rooms Type</h3>
                            </div>
                            <h3 class="archivment-back">Our Rooms</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                     @foreach($roomtypes as $roomtype)
 
                    <div class="col-xl-4 col-lg-6 col-md-6">
                       
                        <!-- Single Room -->
                        <div class="single-room mb-50">

                             <a href="{{route('roomfrontend',$roomtype->id)}}" style="text-decoration: none; color: gray">
                            <div class="room-img">

                                <img src="{{ asset($roomtype->photo)}}" class="img-fluid" width="150px" height="150px">
                                 
                            </div>
                             
                            <div class="room-caption">
                                {{$roomtype->name}}
                            </div>
                        </a>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>

        </section>
        <!-- Room End -->

        <!-- Testimonial Start -->
        <!-- Testimonial End -->

        <!-- Blog Start -->
        <!-- Blog End -->

        <!-- Gallery img Start-->
       
        <!-- Gallery img End-->
    </main>
    @endsection