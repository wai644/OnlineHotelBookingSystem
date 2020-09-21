@extends('frontendtemplate')

@section('content')

<main>
    
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
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-3 ">


              


              <label for="inputPassword5">Adult</label>
              <input type="number" id="inputPassword5" class="form-control adult" aria-describedby="passwordHelpBlock">
              </div>

               <div class="col-md-3">


              <label for="inputPassword5">Children</label>
              <input type="number" id="inputPassword5" class="form-control child" aria-describedby="passwordHelpBlock">
              </div>

          </div>


           <div class="row mt-3 shoppingcart_div">
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th> No </th>
                            <th> Name </th>
                            <th> Photo </th>
                            <th> Price </th>
                            <th> Stay </th>
                            <th> Total</th>
                            <th> Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        

                    </tbody>
                    <tfoot id="shoppingcart_tfoot" class="text-right">

                   
                       
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="row">
                                <h3 class="">Total :&nbsp;</h3>
                                <h3 class="total"></h3>
                                <h3>&nbsp;Ks</h3>
                                </div>
                            </td>
                        </tr>
                        <tr>
                        
                            <td colspan="5">
                                <textarea class="form-control notes" placeholder="Please write your requests..." ></textarea>
                                
                            </td>
                            
                            <td colspan="3">
                                @role('Customer')
                                <button class="btn btn-secondary btn-block mainfullbtncolor checkoutbtn book_now"> 
                                    Book 
                                </button>
                                @else
                                <a  href="{{ route('login') }}" class="btn btn-secondary btn-block mainfullbtncolor checkoutbtn book_now">
                                    Please Login
                                </a>
                                @endrole
                    
                            </td>
                        
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
         </div>
       
    
        <!-- Gallery img End-->
</main>
        @endsection
    
    