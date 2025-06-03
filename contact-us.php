<?php 
if(isset($_REQUEST["ref"]))
{
  $k = $_REQUEST["ref"];
//  echo "data", $k;
//   exit();
}

?>

<?php 
$title = 'RareTex Fashions | Contact Us';
include 'include/header.php';
?>



<body style="padding-right: 0px !important;">

    <!-- Main  Section-->
    <div class="wrapper">
        <main>
            <!-- header section -->
            <?php include 'header.php';?>
            <!-- header section -->
            <!-- breadcrumbs section -->
            <section class="breadcrumbs-section contactus-breadcrumbs">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumbs-content">
                                <h1 data-aos="fade-right" data-aos-duration="1500">
                                    Contact Us
                                </h1>
                                <ol class="breadcrumb mb-0 "data-aos="fade-left" data-aos-duration="2000">
                                    <li class="breadcrumb-item"><a href="index.php" title="Home">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumbs section -->
            <!-- about section -->
            <section class="contact-section bg-light-gray">
                <div class="container">
                    <div class="row  ">
                        <div class="col-lg-4 col-md-6">
                            <div class="contact-info"  data-aos="fade-right" data-aos-duration="1500">
                                <div class="address mt-2">
                                    <i class="fa fa-location-arrow"></i>
                                    <h4 class="mb-2">Location:</h4>
                                    <p>  <a href="javascript:void(0);">
                                        No.7/21, A-7, Vettuvapalayam, Mangalam Road, Tirupur - 641 604, Tamilnadu, India.
                                        </a>
                                    </p>
                                </div>

                                <div class="open-hours mt-4">
                                    <i class="fa fa-clock"></i>
                                    <h4 class="mb-2">Open Hours:</h4>
                                    <p><a href="javascript:void(0);">
                                        Sunday-Friday:<br>
                                        09:00 AM - 10:00 PM
                                        </a>
                                    </p>
                                </div>

                                <div class="email mt-4">
                                    <i class="fa fa-envelope"></i>
                                    <h4 class="mb-2">Email:</h4>
                                    <p><a href="mailto:sunil@raretexsource.com;">sunil@raretexsource.com </a></p>
                                </div>

                                <div class="phone mt-4">
                                    <i class="fa fa-phone-alt"></i>
                                    <h4 class="mb-2">Call:</h4>
                                    <p><a href="tel:+91 95970 81315;">+91 95970 81315</a></p>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6 "data-aos="fade-left" data-aos-duration="2000">
                            <form class="support-form" id="contactusForm" name="contactusForm" method="post">
                                <div class="row">
                                    <div class="col-6 mb-3">
                                        <input type="text" class="form-control" name="h_name" id="h_name"
                                            placeholder="Your Name">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <input type="email" class="form-control" name="h_email" id="h_email"
                                            placeholder="Your Email">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <input type="text" class="form-control" name="h_phone" id="h_phone"
                                            placeholder="Phone">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <input type="text" class="form-control" name="h_subject" id="h_subject"
                                            placeholder="Subject">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <input type="text" value="" class="form-control" id="h_productid" name="h_productid" placeholder="Product">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <input type="text" class="form-control" name="h_quantity" id="h_quantity"
                                            placeholder="Quantity">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <textarea cols="30" rows="7" name="h_message" id="h_message"
                                            class="form-control" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <input type="submit" id="h_submit" value="Send Message"
                                            class="outline-btn outline-btn2">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about section -->

            <!-- footer adv section -->
             <section class="foo-contact-area">
                        <div class="container">
                            <div class="row align-items-center text-center">
                                <div class="col-lg-12 col-md-6 col-12" data-aos="fade-right" data-aos-duration="2000">
                                    <div class="advs-left">
                                        <h5>
                                          Forged with Quality and Confidence
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
            <!-- footer adv section -->

            <!-- footer section -->
            <?php include 'footer.php';?>
            <!-- footer section -->
        </main>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/fontawesome-5.js"></script>
   <script src="assets/js/fancybox.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/aos.js"></script>

    <script>
        AOS.init();
    </script>

<script>
    function functiondata(data) {
                              // console.log(data,"value");
      $('#h_productid').val(data);
    }
  </script>
  <script>
    $( document ).ready(function() {
      var d = "<?php echo $_REQUEST["ref"]; ?>";
      $('#h_productid').val(d);
  
  });
  </script>
</body>

</html>