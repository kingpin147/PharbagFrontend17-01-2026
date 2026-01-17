<?php include 'sections/header.php' ?>
<?php include 'sections/header-top.php' ?>
<?php include 'sections/header-middle.php' ?>
<?php include 'sections/navbar.php' ?>
<?php include 'sections/sidebar-cat.php' ?>
<?php include 'sections/sidebar-cart.php' ?>
<?php include 'sections/sidebar-nav.php' ?>
<?php include 'sections/mobile-menu.php' ?>
<?php include 'sections/quick-view.php' ?>
<style type="text/css">
        .progressupload{
    height: 20px;
    margin-top: 25px;
}
.progressx{
    background-color: #5467ed!important;
    width: 0%;
    height: 20px;
    border-radius: 20px;
    
}
.progressBar{
    padding-top: 2px;
    padding-bottom: 2px;
}
#afterlogin{
display:none!important;
}



    </style>


<script type="text/javascript">
    var timeLeft=60;
    var timerseller
function countdown(elem,html) {
elem=document.getElementById(elem)
    if (timeLeft == -1) {
        
         clearTimeout(timerseller)
         elem.innerHTML= `<a onclick="otp1(document.getElementById('${html}').value)" >Resend OTP</a>`
    } else {
        elem.innerHTML ="Wait " +timeLeft + ' seconds to resend OTP';
        timeLeft--;
    }
}
   var timeLeftbuyer=60;
    var timerbuyer
function countdownbuyer(elem,html) {
elem=document.getElementById(elem)
    if (timeLeftbuyer == -1) {
        
         clearTimeout(timerbuyer)
         elem.innerHTML= `<a onclick="otp1(document.getElementById('${html}').value)" >Resend OTP</a>`
    } else {
        elem.innerHTML ="Wait " +timeLeftbuyer + ' seconds to resend OTP';
        timeLeftbuyer--;
    }
}
</script>
<section class="user-form-part">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-8 col-xxl-8">
                <div class="user-form-logo">
                    <a><img src="image/logo/logo-edited.png" alt="logo"></a>
                </div>
                <div class="user-form-card">

                    <div class="user-form">

                        <ul class="nav nav-pills" role="tablist" id="nav-pill-background">

                            <li class="nav-item"> <a class="nav-link active" data-bs-toggle="pill" href="#buyer1"> Buyer </a> </li>

                            <li class="nav-item"> <a class="nav-link" data-bs-toggle="pill" href="#seller1"> Seller </a> </li>

                        </ul>

                    </div>

                    <div class="tab-content mt-4">

                        <div class="tab-pane active" id="buyer1">

                            <form class="user-form col-12" id="hideafterotp">
                                <div class="col-12 mb-2">
                                    <label class="form-label">Phone Number</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Enter your phone number" id="buyer-phone" maxlength="10">
                                        <a name="getotp" value="Send OTP" class="btn btn-primary border-0" onclick="otp(document.getElementById('buyer-phone').value)"> Send OTP</a>
                                    </div>
                                    <div class="col-12 mb-2 mt-3 text-center" id="inputs">
                                        <p class="mb-2"> Enter OTP </p>
                                        <div class="">
                                            <input id="buyerotp" type="text" class="digit" minlength="5" maxlength="7" required style="width: 50%;">
                                           
                                        </div>
                                        <div class="text-center mt-3">
                                            <a name="getotp" value="Send OTP" class="btn btn-primary border-0" onclick="verify(document.getElementById('buyerotp').value)">Verify</a>
                                            <br>
                                            <br>
                                            <span id="Resend0"></span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <hr>
                            <form id="reg" class="row mt-4">
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">Enter PAN </label>
                                    <input id="PAN" type="text" class="form-control" name="" value="" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">Enter GST number</label>
                                    <input id="GST" type="text" class="form-control" name="" value="" required oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);" >

                                </div>
                                <div class="form-button col-12 mt-4" id="verifyandcontinuebtn">
                                    <a onclick="verifyandcontinue()" class="btn btn-primary border-0">Verify & continue <i class="fa fa-right-arrow"></i></a>
                                </div>
                                <div id="aftergst" style="display: none;">
                                <div class="col-12 mt-4">
                                    <h4>Basic Information</h4>
                                    <p>We'll use this details to keep you updated about your order</p>
                                </div>
                                <div class="mb-2 col-12">
                                    <label class="form-label">Legal Name (Company Name)</label>
                                    <input type="text" class="form-control" name="legal_name" id="legal_name" value="" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">PAN</label>
                                    <input type="text" class="form-control" name="PAN" id="pan" value="" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">GST No.</label>
                                    <input type="text" class="form-control" name="GST" id="gst" value="" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" value="" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">Phone number</label>
                                    <input type="number" class="form-control" name="phone_no" id="phone_no" value="" required>
                                </div>
                                <div class="col-12 mt-4">
                                    <h4>Shipping Information</h4>
                                </div>
                                <div class="mb-2 col-12">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" class="form-control" name="name" id="fullname" value="" required>
                                </div>
                                <div class="mb-2 col-12">
                                    <label class="form-label">Street Address</label>
                                    <input type="text" class="form-control" name="address" id="street" value="" required>
                                </div>
                                <div class="mb-2 col-12">
                                    <label class="form-label">Street Address 2</label>
                                    <input type="text" class="form-control" name="address" id="street2" value="" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">State</label>
                                    <input type="text" class="form-control" name="address" id="state" value="" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control" name="address" id="city" value="" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">Pin Code</label>
                                    <input type="number" class="form-control" name="address" id="pin" value="" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">Land mark</label>
                                    <input type="text" class="form-control" name="address" id="lndmark" value="" required>
                                </div>
                                <hr>
                                <div class="col-12 mt-4">
                                    <h4>Drug Licence Information</h4>
                                </div>
                                <div class="mb-2 col-12">
                                    <label class="form-label">D.L. No. 20B</label>
                                    <input type="text" class="form-control" name="DL_20B" id="dl20b" value="" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">Valid Till</label>
                                    <input type="date" class="form-control" name="DL_20B" id="dl21b" value="" required>
                                </div>
 <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">D.L. Picture</label>
     <input id="dl20bpicture" type="file" class="form-control" name="DL_20B" value="" required onchange='upload(this)'>
     
                                </div>
                                <div class="mb-2 col-12">
                                    <label class="form-label">D.L. No. 21B</label>
                                    <input type="text" class="form-control" name="DL_21B" value="" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">Valid Till</label>
                                    <input type="date" class="form-control" name="DL_21B" value="" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">D.L. Picture</label>
                                    <input id="dl21bpicture" type="file" class="form-control" onchange='upload(this)' name="DL_21B" value="" required>
                                </div>
                                <hr>
                                <div class="col-12 mt-4" hidden="">
                                    <h4>Bank Information</h4>
                                    <span>Compulsory for seller </span>
                                </div>
                                <div class="mb-2 col-sm-6 col-12" hidden="">
                                    <label class="form-label">Bank Name</label>
                                    <input type="text" class="form-control" name="band_account" value="demo-bank" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12" hidden="">
                                    <label class="form-label">Branch Name</label>
                                    <input type="text" class="form-control" name="band_account" value="demo-branch" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12" hidden="">
                                    <label class="form-label">Account No.</label>
                                    <input type="number" class="form-control" name="band_account" value="demo1234" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12" hidden="">
                                    <label class="form-label">IFSC Code.</label>
                                    <input type="text" class="form-control" name="band_account" value="demoifsc" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12" hidden="">
                                    <label class="form-label">Account Holder Name</label>
                                    <input type="text" class="form-control" name="band_account" value="demo007" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12" hidden="">
                                    <label class="form-label">Cancel Cheque Picture</label>
                                    <input type="text" class="form-control" name="band_account" value="https://pharmabag03.s3.ap-south-1.amazonaws.com/c7e3f334159ec1a9a918d460477c0893ed5c2351.png" >
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">Invite code</label>
                                    <input type="text"  class="form-control" name="invite_code" value="" >
                                </div>
                                <div class="mt-3">
                                    
<input id="checktermsbuy" type="checkbox" required> I agree to the Pharmabag's <a href="privacy_policy.php" target="_blank">Privacy Policy</a> and <a href="terms_and_conditions.php" target="_blank">terms</a>
                                </div>

                                <div class="form-button col-12 mt-4">
                                    <a onclick="if(document.getElementById('checktermsbuy').checked){registerbuyer()}else{alert('Please agree to our Terms and Conditions and Privacy Policy');return}" value="submit" class="btn btn-primary border-0">Register</a>
                                </div>
                            </div>
                            </form>

                        </div>

                       
                        <div class="tab-pane" id="seller1">

                            <form class="user-form col-12" id="shideafterotp">
                                <div class="col-12 mb-2">
                                    <label class="form-label">Phone Number</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Enter your phone number" id="seller-phone" maxlength="10">
           <a name="getotp" value="Send OTP" class="btn btn-primary border-0" onclick="otp1(document.getElementById('seller-phone').value);"> Send OTP</a>
                                    </div>
                                    <div class="col-12 mb-2 mt-3 text-center" id="inputs1">
                                        <p class="mb-2"> Enter OTP </p>
                                        <div class="">
                                            <input id="sellerotp" type="text" class="digit" minlength="5" maxlength="7" required style="width: 50%;">
                                           
                                        </div>
                                        <div class="text-center mt-3">
                                            <a name="getotp" value="Send OTP" class="btn btn-primary border-0" onclick="verify1(document.getElementById('sellerotp').value)">Verify</a>
                                            <br>
                                            <br>

                                            <span id="Resend1"></span>

                                        </div>
                                    </div>
                                </div>
                            </form>
                            <script type="text/javascript">




                            </script>
                            <hr>
                            <form id="reg1" class="row mt-4">
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">Enter PAN </label>
                                    <!-- <span class="required"> *</span> -->
                                    <input id="sPAN" type="text" class="form-control" name="" value="" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">Enter GST number</label>
                                    <input id="sGST" type="text" class="form-control" name="" value="" required oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);" />

                                </div>
                                <div class="form-button col-12 mt-4" id="sverifyandcontinuebtn">
                                    <a onclick="verifyandcontinue1()" class="btn btn-primary border-0">Verify & continue <i class="fa fa-right-arrow"></i></a>
                                </div>
                                <div id="saftergst" style="display: none;">
                                <div class="col-12 mt-4">
                                    <h4>Basic Information</h4>
                                    <p>We'll use this details to keep you updated about your order</p>
                                </div>
                                <div class="mb-2 col-12">
                                    <label class="form-label">Legal Name (Company Name)</label>
                                    <input type="text" class="form-control" name="legal_name" id="slegal_name" value="" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">PAN</label>
                                    <input type="text" class="form-control" name="" id="span" value="" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">GST No.</label>
                                    <input type="text" class="form-control" name="" id="sgst" value="" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="semail" value="" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">Phone number</label>
                                    <input type="number" class="form-control" name="phone_no" id="sphone_no" value="" required>
                                </div>
                                <div class="col-12 mt-4">
                                    <h4>Shipping Information</h4>
                                </div>
                                <div class="mb-2 col-12">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" class="form-control" name="name" id="sfullname" value="" required>
                                </div>
                                <div class="mb-2 col-12">
                                    <label class="form-label">Street Address</label>
                                    <input type="text" class="form-control" name="address" id="sstreet" value="" required>
                                </div>
                                <div class="mb-2 col-12">
                                    <label class="form-label">Street Address 2</label>
                                    <input type="text" class="form-control" name="address" id="sstreet2" value="" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">State</label>
                                    <input type="text" class="form-control" name="address" id="sstate" value="" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control" name="address" id="scity" value="" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">Pin Code</label>
                                    <input type="number" class="form-control" name="address" id="spin" value="" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">Land mark</label>
                                    <input type="text" class="form-control" name="address" id="slndmark" value="" required>
                                </div>
                                <hr>
                                <div class="col-12 mt-4">
                                    <h4>Drug Licence Information</h4>
                                </div>
                                <div class="mb-2 col-12">
                                    <label class="form-label">D.L. No. 20B</label>
                                    <input type="text" class="form-control" name="DL_20B" id="sdl20b" value="" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">Valid Till</label>
                                    <input type="date" class="form-control" name="DL_20B" id="sdl21b" value="" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">D.L. Picture</label>
                                    <input type="file" onchange="upload(this)" class="form-control" name="DL_20B" value="" required>
                                </div>
                                <div class="mb-2 col-12">
                                    <label class="form-label">D.L. No. 21B</label>
                                    <input type="text" class="form-control" name="DL_21B" value="" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">Valid Till</label>
                                    <input type="date" class="form-control" name="DL_21B" value="" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">D.L. Picture</label>
                                    <input type="file" onchange="upload(this)" class="form-control" name="DL_21B" value="" required>
                                </div>
                                <hr>
                                <div class="col-12 mt-4">
                                    <h4>Bank Information</h4>
                                    <span>Compulsory for seller </span>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">Bank Name</label>
                                    <input type="text" class="form-control" name="band_account" value="" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">Branch Name</label>
                                    <input type="text" class="form-control" name="band_account" value="" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">Account No.</label>
                                    <input type="number" class="form-control" name="band_account" value="" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">IFSC Code.</label>
                                    <input type="text" class="form-control" name="band_account" value="" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">Account Holder Name</label>
                                    <input type="text" class="form-control" name="band_account" value="" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">Cancel Cheque Picture</label>
                                    <input type="file" onchange="upload(this)" class="form-control" name="band_account" value="" required>
                                </div>
                                <div class="mb-2 col-sm-6 col-12">
                                    <label class="form-label">Invite code</label>
                                    <input type="text"  class="form-control" name="invite_code" value="" >
                                </div>
                                <div class="mt-3">
                                    <input id="checkterms" type="checkbox" required> I agree to the Pharmabag's <a href="privacy_policy.php" target="_blank">Privacy Policy</a> and <a href="terms_and_conditions.php" target="_blank">terms</a>
                                </div>

                                <div class="form-button col-12 mt-4">
                                    <a onclick="if(document.getElementById('checkterms').checked){registerseller()}else{alert('Please agree to our Terms and Conditions and Privacy Policy');return}" value="submit" class="btn btn-primary border-0">Register</a>
                                </div>
                            </div>
                            </form>

                        </div>

                    </div>


                </div>
               
            </div>
        </div>
    </div>
</section>

<!--=====================================
                    USER FORM PART END
        =======================================-->

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
//=======================================================
    async function otp(text) {
        timeLeftbuyer=60
        timerbuyer=setInterval(()=>{countdown('Resend0','buyer-phone')},1000);
        inputs.style.display = "block";
var x=await fetch("https://pharmabag.in:3000/buyer/un/auth/phone",
    {method:"POST",
    headers:{"content-type":"application/json"},
    body:JSON.stringify({"phone_no":text})


    })
}
//=======================================================
    let reg = document.getElementById('reg');
//===============================================================
  async  function verify(otp) {

var x=await fetch("https://pharmabag.in:3000/buyer/un/auth/verify",{method:"POST",
    headers:{"content-type":"application/json"},
    body:JSON.stringify({"phone_no":document.getElementById('buyer-phone').value,"otp":otp})


    })

var xdata=await x.json()      

if(x.status==200){

if (xdata["is_user_found"]) {
localStorage.setItem("auth-token",xdata["auth-token"])
        localStorage.setItem("user_type","buyer")

location.href="/"
return
}

        reg.style.display = "flex";
        document.getElementById("hideafterotp").style.display="none"
        localStorage.setItem("auth-token",xdata["auth-token"])
        localStorage.setItem("user_type","buyer")
//if (xdata["is_user_found"]) {

//location.href="/"

//}


    }else{
        alert("Wrong OTP enters try again or resend OTP")
    }


    }
    //==========================================================


async function verifyandcontinue(){
var pg=document.getElementById("PAN").value?"PAN":"GST"
var val=document.getElementById(pg).value

let x= await fetch(`https://pharmabag.in:3000/verify/pan/gst/${pg}/${val}`)
if(x.status==200){
var response=await x.json()
window.response=response
if(response["ONLY_PAN"]==false){    
document.getElementById("aftergst").style.display="block"
document.getElementById("verifyandcontinuebtn").style.display="none"

document.getElementById("legal_name").value=(response.data.data.lgnm)
document.getElementById("fullname").value=(response.data.data.lgnm)
document.getElementById("gst").value=(response.data.data.gstin)
document.getElementById("pan").value=(document.getElementById("PAN").value||'')
document.getElementById("street").value=(response.data.data.pradr.addr.loc)   
document.getElementById("street2").value=(response.data.data.pradr.addr?.st||response.data.data.pradr.addr?.bnm)
document.getElementById("state").value=(response.data.data.pradr.addr.stcd)
document.getElementById("city").value=(response.data.data.pradr.addr?.city||response.data.data.pradr.addr.dst )
document.getElementById("pin").value=(response.data.data.pradr.addr.pncd)
document.getElementById("lndmark").value=(`${response.data.data.pradr.addr.bnm} ;${response.data.data.pradr.addr.bno} ;${response.data.data.pradr.addr.flno} ;${response.data.data.pradr.addr.loc}`)

document.getElementById('phone_no').value=document.getElementById('buyer-phone').value

}else{

document.getElementById("aftergst").style.display="block"
document.getElementById("verifyandcontinuebtn").style.display="none"
document.getElementById("legal_name").value=(response.data.data.response.name)
document.getElementById("fullname").value=(response.data.data.response.name)
document.getElementById("pan").value=(document.getElementById("PAN").value||'')


}






}
else{
    alert("Sorry but we cannot process this number so please contact admin or use another GST or PAN No or try again in sometime")

    return

//document.getElementById("aftergst").style.display="block"

}

}







    //================================================
    
    let inputs1 = document.getElementById('inputs1');

  async function otp1(text) {
    timeLeft=60
    timerseller=setInterval(()=>{countdown('Resend1','seller-phone')},1000);
        inputs1.style.display = "block";

var x=await fetch("https://pharmabag.in:3000/seller/un/auth/phone",
    {method:"POST",
    headers:{"content-type":"application/json"},
    body:JSON.stringify({"phone_no":text})


    })
    }
//======================================================================
    let reg1 = document.getElementById('reg1');

   async function verify1(otp) {
    

var x=await fetch("https://pharmabag.in:3000/seller/un/auth/verify",{method:"POST",
    headers:{"content-type":"application/json"},
    body:JSON.stringify({"phone_no":document.getElementById('seller-phone').value,"otp":otp})


    })
xdata=await x.json()
        

if(x.status==200){
       
        
    
if (xdata["is_user_found"]) {
 localStorage.setItem("auth-token",xdata["auth-token"])
         localStorage.setItem("user_type","seller")
location.href="/pharmabag-seller"
return
}
 localStorage.setItem("auth-token",xdata["auth-token"])
         localStorage.setItem("user_type","seller")

 reg1.style.display = "flex";
        document.getElementById("shideafterotp").style.display="none"

    }else{
        alert("Wrong OTP enters try again or resend OTP")
    }


    }
//====================================================================================

async function verifyandcontinue1(){
var pg=document.getElementById("sPAN").value?"PAN":"GST"
var val=document.getElementById("s"+pg).value

let x= await fetch(`https://pharmabag.in:3000/verify/pan/gst/${pg}/${val}`)

if(x.status==200){
var response=await x.json()
window.response=response
if(response["ONLY_PAN"]==false){    
document.getElementById("saftergst").style.display="block"
document.getElementById("sverifyandcontinuebtn").style.display="none"

document.getElementById("sfullname").value=(response.data.data.lgnm)
document.getElementById("slegal_name").value=(response.data.data.lgnm)
document.getElementById("sgst").value=(response.data.data.gstin)
document.getElementById("span").value=(document.getElementById("PAN").value||'')
document.getElementById("sstreet").value=(response.data.data.pradr.addr.loc)   
document.getElementById("sstreet2").value=(response.data.data.pradr.addr?.st||response.data.data.pradr.addr?.bnm)
document.getElementById("sstate").value=(response.data.data.pradr.addr.stcd)
document.getElementById("scity").value=(response.data.data.pradr.addr?.city||response.data.data.pradr.addr.dst )
document.getElementById("spin").value=(response.data.data.pradr.addr.pncd)
document.getElementById("slndmark").value=(`${response.data.data.pradr.addr.bnm} ;${response.data.data.pradr.addr.bno} ;${response.data.data.pradr.addr.flno} ;${response.data.data.pradr.addr.loc}`)

document.getElementById('sphone_no').value=document.getElementById('seller-phone').value

}else{

document.getElementById("saftergst").style.display="block"
document.getElementById("verifyandcontinuebtn").style.display="none"
document.getElementById("slegal_name").value=(response.data.data.response.name)
document.getElementById("sfullname").value=(response.data.data.response.name)
document.getElementById("span").value=(document.getElementById("sPAN").value||'')


}



}else{
    alert("Sorry but we cannot process this number so please contact admin or use another GST or PAN No or try again in sometime")

    return


}

}

var buyer_licences_image=[]

async function upload(event){
files=event.files

var progressBar = document.createElement("img");
progressBar.className = "previewimage";
progressBar.src=URL.createObjectURL(files[0])
progressBar.setAttribute("height","300")
event.parentElement.appendChild(progressBar);
var btn=document.createElement("a")
btn.className="form-button btn btn-primary"
btn.innerText="Upload this image"
event.parentElement.appendChild(btn);
btn.addEventListener("click",async ()=>{

res=await sendFiles(files,event)
if(res.indexOf("https://")==-1){
alert("Upload another image we cannot process this image Please Note Maximum file size is 5MB and allowed file types are ['jpeg','png','svg','webp','jpg']")
btn.remove()
progressBar.remove()
event.value=''
event.parentElement.getElementsByClassName('progressx')[0].remove()
return
}
event.type="text"
event.value="https://"+res.split("https://")[1]
event.hidden=true
buyer_licences_image.push("https://"+res.split("https://")[1])
btn.style.display="none"
progressBar.style.display="none"
var vv = document.createElement("div");
vv.innerHTML="<hr><br><center><b>image uploaded successfully</b></center><br><hr>"
event.parentElement.appendChild(vv)
})

}


function sendFiles(files,elm){



var progressBar = document.createElement("div");
progressBar.className = "progressBar";
elm.parentElement.appendChild(progressBar);
var innerDIV = document.createElement("div");
innerDIV.className = "progressx";
progressBar.appendChild(innerDIV);
var progress = innerDIV//document.getElementsByClassName("progressx")[0];
progress.style.width = "0%";
var file=files[0]
//====================================
return new Promise((resolve, reject) => {
                    if (files.length == 0) {
                        alert('Error : No file selected');
                        return;
                    }


                    let allowed_mime_types = ['image/jpeg','image/svg+xml', 'image/png','image/svg','image/webp','image/jpg'];
                    let allowed_size_mb = 5;

                    if (allowed_mime_types.indexOf(file.type) == -1) {
                        alert('Error : Incorrect file type');
                        return;
                    }

                    if (file.size > allowed_size_mb * 1024 * 1024) {
                        alert('Error : Exceeded size');
                        return;
                    }

                    let data = new FormData();
                    data.append('file', file);

                    let request = new XMLHttpRequest();

                    request.upload.onprogress = function(event) {
    let percent = Math.round(100 * event.loaded / event.total);
    progress.style.width=`${percent}%`
                        console.log(`File is ${percent}% uploaded.`);
                    };



                    request.open('POST', 'upload.php');
                    request.addEventListener('load', function(e) {
                        resolve(request.response)
                    });
                    request.send(data);

                })





//====================================

}


</script>

<script>

          


function validateform(formid){
   var wrongcount=0
    var rightcount=0
for(let i=0;i<document.forms[formid].elements.length-2;i++){
if(!document.forms[formid].elements[i].value || ["add some details","add address","select location"].includes(document.forms[formid].elements[i].value)  ){
document.forms[formid].elements[i].style.border="3px solid red"    
    wrongcount+=1
}else{
document.forms[formid].elements[i].style.border=""
    rightcount+=1
}
}
if(
(document.getElementById("pan").value || document.getElementById("span").value)
||(document.getElementById("gst").value || document.getElementById("sgst").value)
||(document.getElementById("GST").value || document.getElementById("sGST").value)
||(document.getElementById("PAN").value || document.getElementById("sPAN").value)
){


document.getElementById("pan").style.border=""
document.getElementById("span").style.border=""
document.getElementById("gst").style.border=""
document.getElementById("sgst").style.border=""
document.getElementById("GST").style.border=""
document.getElementById("sGST").style.border=""
document.getElementById("PAN").style.border=""
document.getElementById("sPAN").style.border=""
  return wrongcount-2
}else{return wrongcount}
} 





//===================================================
async function builddata(formid){

var rawdata=Form2JSON(document.getElementById(formid))
rawdata["licence"]=JSON.stringify({DL20B:rawdata.DL_20B,DL21B:rawdata.DL_21B})
var rs=await fetch("https://geocode.maps.co/search?q="+encodeURIComponent(`${rawdata.address[3]} ${rawdata.address[2]} ${rawdata.address[4]}`))
var cord=await rs.json()
rawdata["address"]=JSON.stringify({
street_address:rawdata.address[0],
street_address2:rawdata.address[1],
state:rawdata.address[2],
city:rawdata.address[3],
pincode:rawdata.address[4],
landmark:rawdata.address[5],
cords:`${cord[0].lat},${cord[0].lon}`
})


rawdata["gst_pan_response"]=JSON.stringify( window.response.data.data)
rawdata["band_account"]=JSON.stringify({
bank_name:rawdata.band_account[0],
branch_name:rawdata.band_account[1],
account_no:rawdata.band_account[2],
ifsc_code:rawdata.band_account[3],
acc_name:rawdata.band_account[4],
cancel_cheque:rawdata.band_account[5]
}
)

return rawdata


}

//===================================================
async function registerbuyer(){
if(!window.response){
    alert("We canot get your GST details so try with another gst or pan or contact admin!")
    return
}

if(validateform("reg")<=1 && buyer_licences_image.length==2 ){
var x=await fetch("https://pharmabag.in:3000/buyer/auth/register",{
method:"POST",
headers:{
    "content-type":"application/json",
    "auth-token":localStorage.getItem("auth-token")
},
body:JSON.stringify(await builddata("reg"))

})

if(x.status==200){
alert("You are sucessfully registerd!Now wait Admin will review your licence.")
location.href="/"
}

}else{
    alert("Fill in all details or make sure you uploaded all images")
}

}
//====================================================
async function registerseller(){
if(!window.response){
    alert("We canot get your GST details so try with another gst or pan or contact admin!")
    return
}


if(validateform("reg1")<=0 && buyer_licences_image.length==3 ){
var x=await fetch("https://pharmabag.in:3000/seller/auth/register",{
method:"POST",
headers:{
    "content-type":"application/json",
    "auth-token":localStorage.getItem("auth-token")
},
body:JSON.stringify(await builddata("reg1"))

})

if(x.status==200){
alert("You are sucessfully registerd!Now wait Admin will review your licence.")
location.href="pharmabag-seller/"
}

}else{
    alert("Fill in all details or make sure you uploaded all images")
}

}

</script>





</body>

</html>
