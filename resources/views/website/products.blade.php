@extends('layouts.websitelayout')

@section('content')
        <section class="ur-latest-arrival ptb-120 bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-sm-12">
                        <div class="text-center">
                            <h2 class="h1 mb-50" style="color:black">{{$categoryName}}</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-4 justify-content-center">
                    @if(count($images)!=0)
                    @foreach ($images as $image)
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="ur-product-card position-relative card-sm-small">
                            <a class="position-absolute ur-badge coupon-badge" href="https://api.whatsapp.com/send?phone=918122937639&text=Hi%20I%20want%20{{$image->imageTitle}}%20{{ asset('storage/product/images/' . $image->imageName) }}"  target="_blank" style="color:green !important">
                                Enquiry Via <i class="fab fa-whatsapp"></i>
                            </a>
                           
                            <div class="feature-image d-flex align-items-cneter justify-content-center light-bg position-relative">
                                <img src="{{ asset('storage/product/images/' . $image->imageName) }}" alt="{{$image->imageTitle}}" alt="rings" class="img-fluid">
                            </div>
                            <div class="mt-4">
                                <div  class="secondary-text-color text-uppercase" style="margin-left:20px !important">{{$image->imageTitle}}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                        <h1 class="row g-4 justify-content-center p-5" style="color:black !important">
                            COMMING SOON
                        </h1>
                    @endif
                </div>
            </div>
        </section>

        <div style="position:absolute;right:30px;margin-top:-50px;">
            @if(count($images)!=0)
            {{ $images->appends(['id' => $images[0]->categoryId])->links('pagination::bootstrap-4') }}
            @endif
        </div>


<style>
    
</style>
    <button type="button" class="scroll-top-btn"><i class="fa-solid fa-hand-pointer"></i></button>
@endsection