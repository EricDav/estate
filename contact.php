<?php
  $name = isset($_POST['name']) ? $_POST['name'] : null;
  $userEmail = isset($_POST['email']) ? $_POST['email'] : null;
  $subject = isset($_POST['subject']) ? $_POST['subject'] : null;
  $phone = isset($_POST['phone']) ? $_POST['phone'] : null;
  $message = isset($_POST['message']) ? $_POST['message'] : null;

  if ($name && $email && $subject && $message) {
    $msg = "Name: " . $name . "\n";
    $msg .= "Email: " . $userEmail . "\n";
    $msg .= "Message: " . $message . "\n";
    $msg .= "Phone: " . $phone . "\n";
    $msg = wordwrap($msg,70);

    mail($email, $subject, $msg);
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
<meta name="robots" content="noindex">
    <?php include_once 'header.php'; ?>
    <section class="w3l-contacts-9-main" id="contact">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d53004.94287423889!2d151.1742759959253!3d-33.86881474784238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m5!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney%2C%20New%20South%20Wales%2C%20Australia!3m2!1d-33.868819699999996!2d151.2092955!4m0!5e0!3m2!1sen!2sin!4v1576050374677!5m2!1sen!2sin" allowfullscreen=""></iframe>
        </div>
    <div class="contacts-9 py-5">
		<div class="container py-md-3">
            <h4>Contact Us</h4>
                <div class="top-map row">
               
                    <div class="map-content-9 col-md-8">
                          
                        <form action="/contact" method="post" _lpchecked="1">
                            <div class="twice-two">
                                <input type="text" name="name" id="w3lName" placeholder="Name" required="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAfBJREFUWAntVk1OwkAUZkoDKza4Utm61iP0AqyIDXahN2BjwiHYGU+gizap4QDuegWN7lyCbMSlCQjU7yO0TOlAi6GwgJc0fT/fzPfmzet0crmD7HsFBAvQbrcrw+Gw5fu+AfOYvgylJ4TwCoVCs1ardYTruqfj8fgV5OUMSVVT93VdP9dAzpVvm5wJHZFbg2LQ2pEYOlZ/oiDvwNcsFoseY4PBwMCrhaeCJyKWZU37KOJcYdi27QdhcuuBIb073BvTNL8ln4NeeR6NRi/wxZKQcGurQs5oNhqLshzVTMBewW/LMU3TTNlO0ieTiStjYhUIyi6DAp0xbEdgTt+LE0aCKQw24U4llsCs4ZRJrYopB6RwqnpA1YQ5NGFZ1YQ41Z5S8IQQdP5laEBRJcD4Vj5DEsW2gE6s6g3d/YP/g+BDnT7GNi2qCjTwGd6riBzHaaCEd3Js01vwCPIbmWBRx1nwAN/1ov+/drgFWIlfKpVukyYihtgkXNp4mABK+1GtVr+SBhJDbBIubVw+Cd/TDgKO2DPiN3YUo6y/nDCNEIsqTKH1en2tcwA9FKEItyDi3aIh8Gl1sRrVnSDzNFDJT1bAy5xpOYGn5fP5JuL95ZjMIn1ya7j5dPGfv0A5eAnpZUY3n5jXcoec5J67D9q+VuAPM47D3XaSeL4AAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                                <input type="email" name="email" id="w3lSender" placeholder="Email" required="">
                            </div>
                            <div class="twice-two">
                                <input type="text" name="phone" id="phone" placeholder="Phone">
                                <input type="text" name="subject" id="w3lSubject" placeholder="Subject" required="">
                            </div>
                        
                            <textarea name="message" id="w3lMessage" placeholder="message" required=""></textarea>
                            <button type="submit">Send Message</button>
                        </form>
                    </div>
                    <div class="cont-details col-md-4 pl-md-5 mt-md-0 mt-5">
                            
                            <div class="cont-top">
                                    <div class="cont-left">
                                        <span class="fa fa-home"></span>
                                    </div>
                                    <div class="cont-right">
                                       <h6>Address</h6>
                                        <p><?=$address?></p>
                                  </div>
                                </div>
                              <div class="cont-top mt-4 mb-4">
                                  <div class="cont-left">
                                      <span class="fa fa-phone"></span>
                                  </div>
                                  <div class="cont-right">
                                      <h6>Phone Us</h6>
                                      <p><a href="tel:+142 5897555"><?=$phoneNumber?></a></p>
                                      
                                </div>
                              </div>
                              <div class="cont-top">
                                    <div class="cont-left">
                                        <span class="fa fa-envelope-o"></span>
                                    </div>
                                    <div class="cont-right">
                                        <h6>Email Us</h6>
                                        
                                        <p><a href="mailto:example-mail@support.com" class="mail"><?=$email?></a></p>
                                  </div>
                                </div>
                             
                            </div>
            </div>
        </div>
    </div>
</section>

      <?php include_once 'footer.php'?>
    <script>
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
