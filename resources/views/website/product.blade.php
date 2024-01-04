@extends('layouts.websitelayout')

@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col-md-5">
            <div class="main-img">
                <img class="img-fluid" src="{{ asset('storage/product/images/' . $product->imageName) }}" alt="{{$product->imageTitle}}">
             
            </div>
        </div>
        <div class="col-md-7">
            <div class="main-description mt-5">
            
                <div class="product-title text-black my-3">
                    {{$product->imageTitle}}
                </div>

              
                    <div class="mt-4">
                        <a class="btn btn-outline-success" href="https://api.whatsapp.com/send?phone=918122937639&text=Hi%20I%20want%20{{$product->imageTitle}}%20{{ asset('storage/product/images/' . $product->imageName) }}"  target="_blank" style="color:green !important">
                            Enquiry Via <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>

                    <div class="product-details mt-4">
                        <p class="details-title text-color mb-1 text-black">Product Details</p>
                        <p class="description text-black">{{$product->description}} </p>
                    </div>


            </div>

           
          

       
            
         
        </div>
    </div>
</div>




</div>
<style>
            .text-bold {
            font-weight: 800;
        }

       

        /* Main image - left */
        .main-img img {
            width: 100%;
        }

        /* Preview images */
        .previews img {
            width: 100%;
            height: 140px;
        }

        .main-description .category {
            text-transform: uppercase;
            color: #0093c4;
        }

        .main-description .product-title {
            font-size: 2.5rem;
        }

        .old-price-discount {
            font-weight: 600;
        }

        .new-price {
            font-size: 2rem;
        }

        .details-title {
            text-transform: uppercase;
            font-weight: 600;
            font-size: 1.2rem;
            color: #757575;
        }

        .buttons .block {
            margin-right: 5px;
        }

        .quantity input {
            border-radius: 0;
            height: 40px;

        }


        .custom-btn {
            text-transform: capitalize;
            background-color: #0093c4;
            color: white;
            width: 150px;
            height: 40px;
            border-radius: 0;
        }

        .custom-btn:hover {
            background-color: #0093c4 !important;
            font-size: 18px;
            color: white !important;
        }

        .similar-product img {
            height: 400px;
        }

        .similar-product {
            text-align: left;
        }

        .similar-product .title {
            margin: 17px 0px 4px 0px;
        }

        .similar-product .price {
            font-weight: bold;
        }

        .questions .icon i {
            font-size: 2rem;
        }

        .questions-icon {
            font-size: 2rem;
            color: #0093c4;
        }


        /* Small devices (landscape phones, less than 768px) */
        @media (max-width: 767.98px) {

            /* Make preview images responsive  */
            .previews img {
                width: 100%;
                height: auto;
            }

        }
</style>
@endsection