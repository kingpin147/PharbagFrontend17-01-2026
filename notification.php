
<?php include 'sections/header.php' ?>
<?php include 'sections/header-top.php' ?>
<?php include 'sections/header-middle.php' ?>
<?php include 'sections/navbar.php' ?>
<?php include 'sections/sidebar-cat.php' ?>
<?php include 'sections/sidebar-cart.php' ?>
<?php include 'sections/sidebar-nav.php' ?>
<?php include 'sections/mobile-menu.php' ?>
<?php include 'sections/quick-view.php' ?>


<!-- Page title -->

<div class="container my-5">
    <div class="row">

        <div class="col-12 col-md-12 order-first order-md-last">
            <div class="container">
                <div class="row">
                    <div>
                        <!--        event item start-->
                        <div class="mb-3 col-12 col-md-6">
                            <div class="row">
                                <div class="col-12 alert-info">
                                    <div>
                                        <h5> Order Id: #00145 </h5>
                                        <hr>
                                        <div class="d-flex orders">
                                            <ul>
                                                <p><span>Product Name </span> <span> Calpol</span></p>
                                                <hr>
                                                <li>Milestone 1: </li>
                                                <li><span>Product Quantily: </span><span> 5000 </span></li>
                                                <li><span>Delivery Date: </span><span> 11-11-2022</span></li>
                                                <hr>
                                                <li>Milestone 2: </li>
                                                <li><span>Product Quantily: </span><span> 5000 </span></li>
                                                <li><span>Delivery Date: </span><span> 11-11-2022</span></li>
                                            </ul>
                                            <ul>
                                            </ul>
                                        </div>

                                        <div class="mt-3 orders">
                                            <a href="#" class="btn">Accept</a>
                                            <a href="#" class="btn bg-danger border-0 mx-3">Reject</a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="bottom-paginate">
                            <p class="page-info">Showing 12 of 600 Results</p>
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fas fa-long-arrow-alt-left"></i>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">...</li>
                                <li class="page-item"><a class="page-link" href="#">60</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>


<!-- Footer -->
<!--=====================================
                     FOOTER PART START
        =======================================-->
<?php include 'sections/footer.php' ?>

<!--=====================================
                      FOOTER PART END
        =======================================-->

<script src="vendor/bootstrap/jquery-1.12.4.min.js"></script>
<script src="vendor/bootstrap/popper.min.js"></script>
<script src="vendor/bootstrap/bootstrap.min.js"></script>
<script src="vendor/countdown/countdown.min.js"></script>
<script src="vendor/niceselect/nice-select.min.js"></script>
<script src="vendor/slickslider/slick.min.js"></script>
<script src="vendor/venobox/venobox.min.js"></script>

<!-- CUSTOM -->
<script src="js/nice-select.js"></script>
<script src="js/countdown.js"></script>
<script src="js/accordion.js"></script>
<script src="js/venobox.js"></script>
<script src="js/slick.js"></script>
<script src="js/main.js"></script>
<!--=====================================
                    JS LINK PART END
        =======================================-->

<script>

    $(document).ready(function() {
        $(".fa-heart").click(function() {
            // $("#wish-icon").css("font-weight", "900");
            $(".fa-heart").toggleClass("fa-heart2");
        });
    });

</script>

<script>
    
    $(".digit").keyup(function() {
        $(this).next('input').focus();
    });

    let inputs = document.getElementById('inputs');

    function otp() {
        inputs.style.display = "block";
    }

    let reg = document.getElementById('reg');

    function verify() {
        reg.style.display = "flex";
    }
    
    let inputs1 = document.getElementById('inputs1');

    function otp1() {
        inputs1.style.display = "block";
    }

    let reg1 = document.getElementById('reg1');

    function verify1() {
        reg1.style.display = "flex";
    }

</script>

</body>

</html>
