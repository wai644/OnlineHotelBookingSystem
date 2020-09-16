@extends('frontendtemplate')

@section('content')


    <div class="slider-area">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{ asset('frontend/assets/img/hero/roomspage_hero.jpg')}}">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                            <div class="hero-caption">
                                <span>Rooms</span>
                                <h2>Book Your Room</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                <table class="table text-center">
                    <thead>
                        <tr>
                            <th> No </th>
                            <th> Name </th>
                            <th> Photo </th>
                            <th> Price </th>
                            <th>Qty</th>
                            <th> Total</th>
                            <th> Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        

                    </tbody>
                    <tfoot id="shoppingcart_tfoot" class="text-right">
                        <tr>
                            <td colspan="6"><h3>Total</h3></td>
                            <td class=" text-center"> <h3 class="total"></h3></td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <textarea class="form-control notes" placeholder="Any Request..." ></textarea>
                            </td>
                            <td colspan="3">
                                @role('Customer')
                                <button class="btn btn-secondary btn-block mainfullbtncolor checkoutbtn book_now"> 
                                    Check Out 
                                </button>
                                @else
                                <a  href="" class="btn btn-secondary btn-block mainfullbtncolor checkoutbtn buy_now">
                                    Please Login
                                </a>
                                @endrole
                            </
                            </td>
                        </tr>
                    </tfoot>
                </table>
    
        <!-- Gallery img End-->
    </main>

        @endsection
    
    