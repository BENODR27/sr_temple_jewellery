
    <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="ur-product-card position-relative card-sm-small">
            {{-- <a class="position-absolute ur-badge coupon-badge" href="https://api.whatsapp.com/send?phone=918122937639&text=Hi%20I%20want%20{{$image->imageTitle}}%20{{ asset('storage/product/images/' . $image->imageName) }}"  target="_blank" style="color:green !important">
                Enquiry Via <i class="fab fa-whatsapp"></i>
            </a> --}}
           
            <div class="feature-image d-flex align-items-cneter justify-content-center light-bg position-relative">
                <a href="{{route('product',['product_id'=>$image->id])}}">
                <img src="{{ asset('storage/product/images/' . $image->imageName) }}" alt="{{$image->imageTitle}}" alt="rings" class="img-fluid">
                </a>
            </div>
            <div class="mt-4">
                <div  class="secondary-text-color text-uppercase" style="margin-left:20px !important">{{$image->imageTitle}}</div>
            </div>
        </div>
    </div>
