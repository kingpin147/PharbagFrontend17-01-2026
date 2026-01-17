
<?php include 'sections/header.php' ?>
<?php include 'sections/header-top.php' ?>
<?php include 'sections/header-middle.php' ?>
<?php include 'sections/navbar.php' ?>
<?php include 'sections/sidebar-cat.php' ?>
<?php include 'sections/sidebar-cart.php' ?>
<?php include 'sections/sidebar-nav.php' ?>
<?php include 'sections/mobile-menu.php' ?>
<?php include 'sections/quick-view.php' ?>


<style>
    .single-banner {
        background-size: cover !important;
        padding: 100px 0px;
        text-align: center;
        position: relative;
        z-index: 1;
    }

    .single-banner::before {
        position: absolute;
        content: "";
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        background: -webkit-gradient(linear, right top, left top, from(rgba(84 103, 237, 0.6)), to(rgba(84, 103, 237, 0.3)));
        /*background: linear-gradient(to left, rgba(6, 23, 56, 0.6), rgba(17, 151, 68, 0.6));*/
        z-index: -1;
    }

    .single-banner h2 {
        font-size: 38px;
        margin-bottom: 15px;
        color: var(--white);
        text-transform: uppercase;
    }

    .contact-card {
        text-align: center;
        border-radius: 8px;
        margin: 0px 2.5px 30px;
        padding: 60px 15px 55px;
        background: var(--white);
        transition: all linear .3s;
        -webkit-transition: all linear .3s;
        -moz-transition: all linear .3s;
        -ms-transition: all linear .3s;
        -o-transition: all linear .3s;
    }

    .contact-card:hover {
        background: var(--primary);
    }

    .contact-card:hover i {
        color: var(--primary);
        background: var(--white);
    }

    .contact-card:hover h4,
    .contact-card:hover p,
    .contact-card:hover a {
        color: var(--white);
    }

    .contact-card i {
        width: 50px;
        height: 50px;
        font-size: 22px;
        line-height: 50px;
        border-radius: 50%;
        margin-bottom: 15px;
        text-align: center;
        display: inline-block;
        color: var(--white);
        background: var(--primary);
        text-shadow: var(--primary-tshadow);
        -webkit-box-shadow: var(--primary-bshadow);
        box-shadow: var(--primary-bshadow);
        transition: all linear .3s;
        -webkit-transition: all linear .3s;
        -moz-transition: all linear .3s;
        -ms-transition: all linear .3s;
        -o-transition: all linear .3s;
    }

    .contact-card h4 {
        margin-bottom: 18px;
        text-transform: capitalize;
        transition: all linear .3s;
        -webkit-transition: all linear .3s;
        -moz-transition: all linear .3s;
        -ms-transition: all linear .3s;
        -o-transition: all linear .3s;
    }

    .contact-card p {
        width: 250px;
        font-size: 18px;
        line-height: 30px;
        margin: 0 auto;
        transition: all linear .3s;
        -webkit-transition: all linear .3s;
        -moz-transition: all linear .3s;
        -ms-transition: all linear .3s;
        -o-transition: all linear .3s;
    }

    .contact-card p a {
        font-size: 18px;
        line-height: 30px;
        display: block;
        color: var(--text);
        transition: all linear .3s;
        -webkit-transition: all linear .3s;
        -moz-transition: all linear .3s;
        -ms-transition: all linear .3s;
        -o-transition: all linear .3s;
    }

    .contact-card.active {
        background: var(--primary);
    }

    .contact-card.active i {
        color: var(--primary);
        background: var(--white);
    }

    .contact-card.active h4,
    .contact-card.active p,
    .contact-card.active a {
        color: var(--white);
    }

</style>


<!-- ==============banner part================ -->


<section class="inner-section single-banner" style="background: url(https://images.newscientist.com/wp-content/uploads/2019/06/18153152/medicineshutterstock_1421041688.jpg) no-repeat center;">
    <div class="container">
        <h2>contact us</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
    </div>
</section>

<!-- ===============banner end================= -->

<!-- contact part -->


<section class="inner-section contact-part">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="contact-card">
                    <i class="icofont-location-pin"></i>
                    <h4>Head office</h4>
                    <p>13A/4, Ariff Rd, Daspara, Ultadanga, Kolkata, West Bengal 700067</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="contact-card active">
                    <i class="icofont-phone"></i>
                    <h4>phone number</h4>
                    <p>
                        <a href="#">033 2549 2641 </a>
                        <a href="#">+91 95612 22664</a>
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="contact-card">
                    <i class="icofont-email"></i>
                    <h4>Support mail</h4>
                    <p>
                        <a href="#">info@pharmabag.com</a>
                        <a href="#">contact@pharmabag.com</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-map">
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=13A/40,%20Ariff%20Rd,%20Daspara,%20Ultadanga,%20Kolkata,%20West%20Bengal%20700067&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/"></a><br>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 500px;
                                    width: 100%;
                                }

                            </style><a href="https://www.embedgooglemap.net">google maps on my website</a>
                            <style>
                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 500px;
                                    width: 100%;
                                }

                            </style>
                        </div>
                    </div>
                </div>
            </div>
          <div class="col-lg-6 card card-body">
    <form class="contact-form" id="contactForm2">
        <h4>Drop Your Message </h4>
        <br>
        <div class="form-group">
            <select name="reason" class="form-control" required="">
                <option value="">Select Reason</option>
                <option value="Enquiry">Enquiry</option>
                <option value="Report">Report</option>
                <option value="Request Medicine">Request Medicine</option>
                <option value="Change Account Info">Change Account Info</option>
                <option value="Others">Others</option>
            </select>
        </div>
        <div class="form-group">
            <div class="form-input-group">
                <input name="name" class="form-control" type="text" placeholder="Your Name" required="">
                <i class="icofont-user-alt-3"></i>
            </div>
        </div>
        <div class="form-group">
            <div class="form-input-group">
                <input name="email" class="form-control" type="email" placeholder="Your Email" required="">
                <i class="icofont-email"></i>
            </div>
        </div>
        <div class="form-group">
            <div class="form-input-group">
                <input name="phone" class="form-control" type="tel" placeholder="Your Phone Number" required="">
                <i class="icofont-phone"></i>
            </div>
        </div>
        <div class="form-group">
            <div class="form-input-group">
                <textarea name="message" class="form-control" placeholder="Your Message" required=""></textarea>
                <i class="icofont-paragraph"></i>
            </div>
        </div>
        <button type="submit" class="form-btn-group">
            <i class="fas fa-envelope"></i>
            <span>send message</span>
        </button>
    </form>
</div>

<script>
document.getElementById('contactForm2').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
    
    // Serialize form data into JSON format
    var formData = {};
    var formElements = this.elements;
    for (var i = 0; i < formElements.length; i++) {
        var element = formElements[i];
        if (element.tagName === 'INPUT' || element.tagName === 'SELECT' || element.tagName === 'TEXTAREA') {
            formData[element.name] = element.value;
        }
    }
    
    // Send JSON data to the endpoint
    fetch('https://pharmabag.in:3000/contactus', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(formData)
    })
    .then(response => {
        if (response.ok) {
            alert('Message sent successfully!We will contact you soon.');
            // Optionally, reset the form after successful submission
            document.getElementById('contactForm2').reset();
        } else {
            throw new Error('Failed to send message');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Failed to send message. Please try again later.');
    });
});
</script>

    </div>
</section>

<?php include 'sections/newsletter.php' ?>
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
