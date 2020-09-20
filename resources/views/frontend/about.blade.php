@extends('frontendtemplate')

@section('content')
    <main>

        <!-- slider Area Start-->
        <div class="slider-area">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{ asset('frontend/assets/img/hero/aboutpage_hero.jpg')}}" >
                <div class="container">
                    <div class="row ">
                        <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                            <div class="hero-caption">
                                <span>About</span>
                                <h2>About</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

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


        <!-- Gallery img Start-->
        <!-- Gallery img End-->

        <!-- Dining Start -->
        <!-- Dining End -->

        <!-- Testimonial Start -->
       
        <!-- Testimonial End -->

    </main>
    @endsection