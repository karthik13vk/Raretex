<?php 
if(isset($_REQUEST["ref"]))
{
  $k = $_REQUEST["ref"];
//  echo "data", $k;
//   exit();
}

?>

<?php 
$title = 'RareTex Fashions | Thank You';
include 'include/header.php';
?>



<body style="padding-right: 0px !important;">

    <!-- Main  Section-->
    <div class="wrapper">
        <main>
            <!-- header section -->
            <?php include 'header.php';?>
            <!-- header section -->
            <!-- thankyou section -->
            <section class="thankyou_pages">
                <div class="container">
                    <div class="row">
                        <div class="thankyou_content">
                            <img src="assets/images/new/thankyou.png" alt="Thank You">
                            <h1>Thank You</h1>
                            <p>Thank you for the  Subscribtion, You will receive our latest updates through mail</p>
                            <h4><img src="assets/images/new/footer-logo.png" alt="Thank You" class="thank_you lazyload">
                            </h4>
                            <a href="./" title="Back Home">
                                <button></i> Home</button>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- thankyou section -->

            <style>
            .thankyou_pages {
                width: 100%;
                display: inline-block;
                margin: 80px 0 40px 0;
            }

            .thankyou_pages .thankyou_content {
                width: 100%;
                display: inline-block;
                position: relative;
                text-align: center;
                background: #da251c30;
                padding: 60px 50px;
            }

            .thankyou_pages .thankyou_content img {
                height: 100px;
                margin: auto auto 25px;
            }

            .thankyou_pages .thankyou_content h4 img {
                height: 145px;
                margin: auto auto 25px;
            }

            .thankyou_pages .thankyou_content h1 {
                font-size: 40px;
                color: #DA251C;
                font-weight: 700;
                margin: 0 0 15px;
            }

            .thankyou_pages .thankyou_content p {
                color: #000;
                font-size: 15px;
                line-height: 26px;
                text-align: center;
                max-width: 80%;
                margin: auto;
            }

            .thankyou_pages .thankyou_content h4 {
                font-size: 25px;
                color: var(--bg_full);
                line-height: 1.5;
                margin: 30px 0 0 10px;
                font-family: 'f_bold';
            }

            .thankyou_pages .thankyou_content button {
                background: #000;
                font-size: 14px;
                text-transform: uppercase;
                font-family: var(--medium);
                width: auto;
                text-align: center;
                padding: 12px 20px;
                border: 0;
                display: flex;
                border-radius: 5px;
                transition: all .4s ease-in-out;
                margin: 15px auto 0 auto;
                display: flex;
                align-items: center;
                gap: 10px;
                color: #fff;
            }

            @media screen and (max-width:480px) {
                .thankyou_pages .thankyou_content {
                    padding: 30px 15px;
                }

                .thankyou_pages .thankyou_content img {
                    object-fit: contain;
                }

                .thankyou_pages {
                    display: block;
                    width: 90%;
                    margin: 80px auto 0px;
                }
            }
            </style>

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
</body>

</html>