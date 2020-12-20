<?php
  $phoneNumber = '08109004502';
  $phoneNumber2 = '09095615398';
  $email = 'akintobiakinfolarinmichael47@gmail.com';
  $email2 = 'Oathenterprises1234@gmail.com';
  $address = '11, Mabinuori Street Ilasamaja Lagos';
  $url = explode('?', $_SERVER['REQUEST_URI'])[0];

	if ($url == '/about') {
		include 'about.php';
		exit;
	} else if ($url == '/contact') {
    include 'contact.php';
		exit;
	} else if ('/') {
    // pass
  } else {
		header("Location: /");
	}

?>


<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Estate Property a Real Estate Category | Home</title>
    <link href="//fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/Estate/css/style-freedom.css">
    <link rel="stylesheet" href="/Estate/css/font-awesome.css">
  </head>
  <body style="">
    <style>
      .banner-new1 {
        background: url(../images/akin1.jpeg) no-repeat center !important;
        background-size: cover !important;
      }

      @media (max-width: 800px) {
        .w3l-bootstrap-header a.navbar-brand {
          font-size: 26px;
        }
      }
    </style>
<meta name="robots" content="noindex">
<?php include_once 'header.php'; ?>
<section class="w3l-main-slider" id="home">
    <!-- main-slider -->
    <div class="companies20-content">
      <div class="companies-wrapper"></div>
        <div class="owl-one owl-carousel owl-theme owl-loaded owl-drag">
        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-7200px, 0px, 0px); transition: all 0.25s ease 0s; width: 11520px;">

        <div class="owl-item cloned" style="width: 1440px;"><div class="item">
            <li>
              <div class="slider-info banner-view banner-top2 bg bg2" data-selector=".bg.bg2">
              </div>
            </li>
          </div>
        </div>
        
        <!-- <div class="owl-item cloned" style="width: 1440px;"><div class="item">
          <li>
            <div class="slider-info banner-view banner-new1 bg bg2" data-selector=".bg.bg2">

            </div>
          </li>
        </div>
      </div> -->

        <div class="owl-item cloned" style="width: 1440px;"><div class="item">
            <li>
              <div class="slider-info banner-view banner-top3 bg bg2" data-selector=".bg.bg2">
              </div>
            </li>
          </div>
        </div>

        <div class="owl-item" style="width: 1440px;"><div class="item">
            <li>
              <div class="slider-info banner-view bg bg2" data-selector=".bg.bg2">
              </div>
            </li>
          </div>
        </div>

        <div class="owl-item" style="width: 1440px;"><div class="item">
            <li>
              <div class="slider-info  banner-view banner-top1 bg bg2" data-selector=".bg.bg2">
              </div>
            </li>
          </div>
        </div>

          <div class="owl-item" style="width: 1440px;"><div class="item">
            <li>
              <div class="slider-info banner-view banner-top2 bg bg2" data-selector=".bg.bg2">
              </div>
            </li>
          </div>
        </div>

        <div class="owl-item active" style="width: 1440px;"><div class="item">
            <li>
              <div class="slider-info banner-view banner-top3 bg bg2" data-selector=".bg.bg2">
              </div>
            </li>
          </div>
        </div>

        <div class="owl-item cloned" style="width: 1440px;"><div class="item">
            <li>
              <div class="slider-info banner-view bg bg2" data-selector=".bg.bg2">
              </div>
            </li>
          </div>
        </div>

        <div class="owl-item cloned" style="width: 1440px;"><div class="item">
            <li>
              <div class="slider-info  banner-view banner-top1 bg bg2" data-selector=".bg.bg2">
              </div>
            </li>
          </div>
        </div>

      </div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous"> <span class="fa fa-angle-left"></span> </span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next"> <span class="fa fa-angle-right"></span> </span></button></div><div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button></div></div>
      </div>
    
  
    <script src="/Estate/js/owl.carousel.js"></script>
  
    <!-- script for -->
    <script>
      $(document).ready(function () {
        $('.owl-one').owlCarousel({
          loop: true,
          margin: 0,
          nav: false,
          responsiveClass: true,
          autoplay: false,
          autoplayTimeout: 5000,
          autoplaySpeed: 1000,
          autoplayHoverPause: false,
          responsive: {
            0: {
              items: 1,
              nav: false
            },
            480: {
              items: 1,
              nav: false
            },
            667: {
              items: 1,
              nav: true
            },
            1000: {
              items: 1,
              nav: true
            }
          }
        })
      })
    </script>
    <!-- //script -->
    <!-- /main-slider -->
  </section>
<!-- index-block2 -->
<section class="w3l-index-block2 py-5">
  <div class="container py-md-3">
    <div class="heading text-center mx-auto">
      <h3 class="head">What We Do</h3>
      <p class="my-3 head">We help client who need consultation on any land and house properties which also includes companies, schools, churches, filling stations,  hotel and so on.</p>
      <b><p>For More information you can contact Akintobi Akinfolarin</p><b>
      <p style="color: #000">08109004502, 09095615398</p>
      <p style="color: #000">akintobiakinfolarinmichael47@gmail.com</p>
    </div>
    <div class="row bottom_grids mt-5 pt-3">
      <div class="col-lg-4 col-md-6">
        <div class="s-block p-4">
         
          <span class="fa fa-home icon-siz"></span>
            <h3 class="my-3">Land Agency</h3>
            <p class="">We are here, so we can help you invest your money in land and properties in the right way.</p>
            <!-- <a href="services.html">Read More <span class="fa fa-long-arrow-right"></span></a> -->
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-sm-0 mt-4">
        <div class="s-block p-4">
        
          <span class="fa fa-university icon-siz"></span>
            <h3 class="my-3">House Agency</h3>
            <p class="">We are here, so we can help you invest your money in house and properties in the right way.</p>
            <!-- <a href="services.html">Read More <span class="fa fa-long-arrow-right"></span></a> -->
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
        <div class="s-block p-4">
       
          <span class="fa fa-hourglass icon-siz"></span>
            <h3 class="my-3">Consultancy</h3>
            <p class="">We give consultancy on land and house  land and house properties which also includes companies, schools etc.</p>
            <!-- <a href="services.html">Read More <span class="fa fa-long-arrow-right"></span></a> -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /index-block2 -->
<!-- specifications -->
<section class="w3l-specifications-9">
    <div class="main-w3 py-5" id="stats">
        <div class="container text-center py-md-3 mt-4">
           <div class="main-cont-wthree-fea row">
                <div class="grids-speci1 col-lg-3 col-6">
                    <h3 class="title-spe">445</h3>
                    <p>PROPERTIES TO RENT</p>
                </div>
                <div class="grids-speci1 midd-eff-spe col-lg-3 col-6">
                    <h3 class="title-spe">350</h3>
                    <p>PROPERTIES FOR SALE</p>
                </div>
                <div class="grids-speci1 las-but col-lg-3 col-6  mt-lg-0 mt-4">
                    <h3 class="title-spe">530</h3>
                    <p>PROPERTIES UNDER OFFER</p>
                </div>
                <div class="grids-speci1 las-t col-lg-3 col-6  mt-lg-0 mt-4">
                        <h3 class="title-spe">25k </h3>
                        <p>SQARE. FT</p>
                    </div>
            </div>
            
        </div>
    </div>
    <!-- //specifications -->
</section>
<section class="grids-4">
    <div id="grids4-block" class="py-5">
       <div class="container py-md-3">
			<div class="heading text-center mx-auto">
      <h3 class="head">Recently Added Properties</h3>
      <p class="my-3 head"> </p>
    </div>
            <div class="row mt-5 pt-3">
                <div class="grids4-info  col-lg-4 col-md-6">
                    <iframe style="width: 100%;" width="953" height="524" src="https://www.youtube.com/embed/scq-WenvB60" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
                </div>
                <div class="grids4-info  col-lg-4 col-md-6">
                  <iframe style="width: 100%;" width="953" height="524" src="https://www.youtube.com/embed/ikksJKP4VSI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
              </div>
              <div class="grids4-info  col-lg-4 col-md-6">
                <iframe style="width: 100%;" width="953" height="524" src="https://www.youtube.com/embed/woEg5_6ZUmY"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
            </div>
            <div class="grids4-info  col-lg-4 col-md-6">
               <iframe style="width: 100%;" width="938" height="516" src="https://www.youtube.com/embed/tDbjJ102mJI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
            </div>
            </div>
      </div>
    </div>
</section>

<!-- forms -->
<section class="w3l-forms-9" id="subscribe">
    <div class="main-w3 py-5">
        <div class="container py-md-3">
            <div class="grids-forms row">
                <div class="main-midd col-lg-6">
                    <h4 class="title-head">Keep up to date — Get e-mail updates</h4>
                    <p>Stay tuned for the latest company news.</p>
                </div>
                <div class="main-midd-2 col-lg-6">
                    <form action="#" method="post" class="rightside-form" _lpchecked="1">
                        <input type="email" name="email" placeholder="Enter your email">
                        <button class="btn" type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //forms -->

   <!--customers-7-->
    <section class="w3l-customers-8" id="testimonials">
		<div class="customers_sur py-5">
            <div class="container py-md-3">
                <div class="heading text-center mx-auto">
                    <h3 class="head">Happy Clients</h3>
                    <p class="my-3 head"></p>
                  </div>
                <div class="customers-top_sur row mt-5 pt-3">
                    <div class="customers-left_sur col-md-6">
                        <div class="customers_grid">
                            <ul class="mb-3">
								<li class="rated"><ispan class="fa fa-star"></ispan></li>
                                <li class="rated"><ispan class="fa fa-star"></ispan></li>
                                <li class="rated"><ispan class="fa fa-star"></ispan></li>
                                <li class="rated"><ispan class="fa fa-star"></ispan></li>
                                <li class="rated"><ispan class="fa fa-star"></ispan></li>
							</ul>
                            <p class="sub-test">Are you looking for ways to invest your money? Contact Oath-Properties, they have great properties</p>
                            <div class="customers-bottom_sur row">
                                <div class="custo-img-res col-3">
                                    <img src="/Estate/images/male.png" alt=" " class="img-responsive">
                                </div>
                                <div class="custo_grid col-9">
                                    <h5>Mack David</h5>
                                    <span>Client</span>
                                </div>
							
                            </div>
                        </div>
                    </div>
                     <div class="customers-middle_sur col-md-6 mt-md-0 mt-4">
                        <div class="customers_grid">
                            <ul class="mb-3">
								<li class="rated"><ispan class="fa fa-star"></ispan></li>
                                <li class="rated"><ispan class="fa fa-star"></ispan></li>
                                <li class="rated"><ispan class="fa fa-star"></ispan></li>
                                <li class="rated"><ispan class="fa fa-star"></ispan></li>
                                <li class="rated"><ispan class="fa fa-star"></ispan></li>
							</ul>
                            <p class="sub-test">Tested and trusted, I highly recomend them for your properties. </p>
                            <div class="customers-bottom_sur row">
                                <div class="custo-img-res col-3">
                                     <img src="/Estate/images/male.png" alt=" " class="img-responsive">
                                </div>
                                <div class="custo_grid col-9">
                                    <h5>Jude Fidelis</h5>
                                    <span>Client</span>
                                </div>
								
                            </div>
                        </div>
                    </div>	
                </div>
            </div>
		</div>
    </section>
      <?php include_once 'footer.php'?>
    <script>
        var start = 0;
  setInterval(() => {
    $('.owl-next').click();
  }, 3000);

  $('.navbar-toggler').click(function() {
      console.log('Yes');
      if (start%2 == 0) {
        $('#navbarSupportedContent').show();
      } else {
        $('#navbarSupportedContent').hide();
      }
      start+=1;
    });
        $(function () {
          $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
          })
        });
      </script>
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->

      <!-- Smooth scrolling -->
      <!-- <script src="/js/smoothscroll.js"></script> -->
      <script src="/Estate/js/owl.carousel.js"></script>

      <!-- script for -->
      <script>
        $(document).ready(function () {
          $('.owl-one').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            responsiveClass: true,
            autoplay: false,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: false,
            responsive: {
              0: {
                items: 1,
                nav: false
              },
              480: {
                items: 1,
                nav: false
              },
              667: {
                items: 1,
                nav: true
              },
              1000: {
                items: 1,
                nav: true
              }
            }
          })
        })
      </script>
      <!-- //script -->
      </body>
  </html>
