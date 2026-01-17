
<?php include 'sections/header.php' ?>
<?php include 'sections/header-top.php' ?>
<?php include 'sections/header-middle.php' ?>
<?php include 'sections/navbar.php' ?>
<?php include 'sections/sidebar-cat.php' ?>
<?php include 'sections/sidebar-cart.php' ?>
<?php include 'sections/sidebar-nav.php' ?>
<?php include 'sections/mobile-menu.php' ?>
<?php include 'sections/quick-view.php' ?>


<div class="container-fluid mt-4">
    <div class="border shadow p-3">
        <h4 class="text-center"> Privacy Policy </h4>
    </div>
</div>

<div class="container">
    <div class=" p-3 mt-4">

        <div class="card my-3">
            <div class="card-body privacy">
                <h5 class="mt-4"> Privace Policy : </h5>
                <p>
                    At pharmabag, accessible from pharmabag.in, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by pharmabag and how we use it.
                </p>
                <p>
                    At pharmabag, accessible from pharmabag.in, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by pharmabag and how we use it.
                </p>
                <p>
                    If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.
                </p>
                <p>
                    This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in pharmabag. This policy is not applicable to any information collected offline or via channels other than this website. Our Privacy Policy was created with the help of the Free Privacy Policy Generator.
                </p>
            </div>
        </div>

        <div class="card my-3">
            <div class="card-body privacy">
                <h5 class="mt-4"> Information we collect : </h5>
                <p>
                    The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.
                </p>
                <p>
                    If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.
                </p>
                <p>
                    When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.
                </p>
            </div>
        </div>

        <div class="card my-3">
            <div class="card-body privacy">
                <h5 class="mt-4"> How we use your information : </h5>
                <p>
                    We use the information we collect in various ways, including to:
                </p>
                <ul class="privacy-ul">
                    <li>Provide, operate, and maintain our website</li>
                    <li>Improve, personalize, and expand our website</li>
                    <li>Understand and analyze how you use our website</li>
                    <li>Develop new products, services, features, and functionality</li>
                    <li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes</li>
                    <li>Send you emails</li>
                    <li>Find and prevent fraud</li>
                </ul>
            </div>
        </div>

        <div class="card my-3">
            <div class="card-body privacy">
                <h5 class="mt-4"> Log Files : </h5>
                <p>
                    pharmabag follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information.
                </p>
            </div>
        </div>

        <div class="card my-3">
            <div class="card-body privacy">
                <h5 class="mt-4"> GDPR Data Protection Rights : </h5>
                <p>
                    We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:
                    <br><br>
                    The right to access – You have the right to request copies of your personal data. We may charge you a small fee for this service.
                    <br><br>
                    The right to rectification – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.
                    <br><br>
                    The right to erasure – You have the right to request that we erase your personal data, under certain conditions.
                    <br><br>
                    The right to restrict processing – You have the right to request that we restrict the processing of your personal data, under certain conditions.
                    <br><br>
                    The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.
                    <br><br>
                    The right to data portability – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.
                    <br><br>
                    If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.
                </p>
            </div>
        </div>

        <div class="card my-3">
            <div class="card-body privacy">
                <h5 class="mt-4"> Children's Information : </h5>
                <p>
                    Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.
                    <br><br>
                    pharmabag does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.
                </p>
            </div>
        </div>

    </div>
</div>

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
