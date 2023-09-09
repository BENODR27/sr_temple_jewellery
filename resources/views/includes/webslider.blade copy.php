<!-- Bootstrap CSS -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> --}}
{{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" /> --}}
{{-- <link rel="stylesheet" href="style.css"> --}}
<!-- jQuery first then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> --}}
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

	<div class="hero" data-arrows="true" data-autoplay="true">
	  <!--.hero-slide-->
	
	
      @foreach ($slides as $slide)
	  <div class="hero-slide">
         <img alt="{{$slide->imageName}}" class="img-responsive cover" src="{{ asset('storage/slide/images/' . $slide->imageName) }}">
         <div class="header-content text-white position-absolute slide-content col-lg-4">
            <h1 class="mb-4">Be part of the <span class="d-block font-weight-bold">Lunar XPerience</span></h1>  
            <a class="btn btn-primary btn-lg w-max mt-2" href="#" tabindex="0">NEXT</a>
         </div>
	  </div>
      @endforeach
	</div><!--.hero-->

  <script>
    jQuery(document).ready(function ($) {
	  $('.hero').slick({
		dots: true,
        infinite: true,
        speed: 1000,
        fade: !0,
        cssEase: 'linear',
		slidesToShow: 1,
		slidesToScroll: 1,
        autoplay: true,
		autoplaySpeed: 1000,
        draggable: false,
		arrows: false,
		responsive: [
	    {
		breakpoint: 1024,
		settings: {
		slidesToShow: 1,
		slidesToScroll: 1,
        infinite: true
		          }
        },
        {
		breakpoint: 768,
		settings: {
        draggable: true,
		          }
		},
		{
		breakpoint: 600,
		settings: {
        slidesToShow: 1,
        draggable: true,
		slidesToScroll: 1
			      }
		},
		{
		breakpoint: 480,
		settings: {
        slidesToShow: 1,
        draggable: true,
		slidesToScroll: 1
		          }
		}
	
			      ]
                  });
        });
  </script>
  <style>
    /* Center the header text on all devices */
.slide-content {
  padding: 10px 20px;
  text-align: center; /* Center text horizontally */
  left: 0; /* Remove left offset for centering */
  transform: none; /* Remove horizontal centering transform */
}


.hero-text h2 {
  margin-bottom: 50px;
}

.hero-text .hero {
  position: relative;
}

.hero-text .hero .hero-slide a:hover span {
  color: #033a71;
}

.hero .hero-slide img {
  width: 100%;
  height: 864px;
  object-fit: cover;
  object-position: top center;
}

.hero .hero-slide .header-content {
  top: 20%;
  margin-left: 8rem;
  max-width: 550px;
  width: 100%;
  padding: 2rem;
}

.slide-content {
  padding: 10px 20px 10px 0;
}

.slide-content .h1 {
  font-size: 62px;
}

.btn-primary {
  background-color: #5302FE;
  border-radius: 0;
}

.slick-dots {
  position: absolute;
  bottom: 10px;
  display: block;
  width: 100%;
  padding: 0;
  list-style: none;
  text-align: center;
}

.slick-dots li {
  position: relative;
  display: inline-block;
  width: 20px;
  height: 20px;
  margin: 0 5px;
  padding: 0;
  cursor: pointer;
}

.slick-dots li button {
  font-size: 0;
  line-height: 0;
  display: block;
  width: 20px;
  height: 20px;
  padding: 5px;
  cursor: pointer;
  border-radius: 50%;
  border: 0;
  outline: none;
}

.slick-dots li button::before {
  font-size: 18px;
  color: #fff;
  opacity: 1;
}

.slick-active button {
  background: #d60e96;
}

/** Text Animation **/

@-webkit-keyframes fadeInUpSD {
  0% {
    opacity: 0;
    -webkit-transform: translateY(100px);
    transform: translateY(100px);
  }

  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInUpSD {
  0% {
    opacity: 0;
    -webkit-transform: translateY(100px);
    transform: translateY(100px);
  }

  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

.fadeInUpSD {
  -webkit-animation-name: fadeInUpSD;
  animation-name: fadeInUpSD;
}

.slick-active .slide-content {
  animation-name: fadeInUpSD;
  animation-duration: 1s;
  opacity: 1;
  width: 100%;
  padding: 10px 20px 30px 0;
}

/* Media Queries */

@media (max-width: 768px) {
  .hero-text .hero .hero-slide a {
    padding-top: 0.8rem;
  }

  .hero-text .hero .hero-slide a span {
    font-size: 20px;
    margin-top: 0.5rem;
  }

  .hero .hero-slide .header-content {
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    margin: 0 auto;
  }
}

@-webkit-keyframes fadeInUpSD {
  0% {
    opacity: 0;
    -webkit-transform: translateY(100px);
    transform: translateY(100px);
  }

  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInUpSD {
  0% {
    opacity: 0;
    -webkit-transform: translateY(100px);
    transform: translateY(100px);
  }

  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

.fadeInUpSD {
  -webkit-animation-name: fadeInUpSD;
  animation-name: fadeInUpSD;
}

.slick-active .slide-content {
  animation-name: fadeInUpSD;
  animation-duration: 1s;
  opacity: 1;
  width: 100%;
  padding: 10px 20px 30px 0;
}
  </style>