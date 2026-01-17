<?php include 'sections/header.php'?>
<?php include 'sections/header-top.php'?>
<?php include 'sections/header-middle.php'?>
<?php include 'sections/navbar.php'?>
<?php include 'sections/sidebar-cat.php'?>
<?php include 'sections/sidebar-cart.php'?>
<?php include 'sections/sidebar-nav.php'?>
<?php include 'sections/mobile-menu.php'?>
<?php include 'sections/quick-view.php'?>

<!-- Page title -->

<div class="container-fluid my-5">
    <div class="row">

        <div class="col-12 col-md-3 profile order-last order-md-first">
            <ul class=" nav-tabs flex-column" style="align-items: start;">
                <li><a href="profile.php" >Profile Settings</a></li>
                <li><a href="my-orders.php">My orders</a></li>
                <li><a href="credit-details.php" >Credit Details</a></li>
                <li><a href="cancel-order.php" class="active">Canceled Orders</a></li>
                <li><a href="tickets.php">Tickets</a></li>
                
                <li><a href="register.php">Login as Seller</a></li>
                <li><a onclick="localStorage.removeItem('auth-token');localStorage.removeItem('user_type');location.href='register.php'">Logout</a></li>
            </ul>
        </div>

        <div class="col-12 col-md-9 order-first order-md-last">
            <div class="container">
                <h6>**Cancelled order were supposed to be archived for 30 days before it gets deleted.</h6><small> You cannot see this Canceled orders on your other devices as it is stored locally </small><br><br>
                <div class="row" id="productholder">
                    <script type="text/javascript">
    async function getmyorders(){

var x=JSON.parse(localStorage.getItem("cancelorders"))

var html=""
if(x){
    for (var i = x.length - 1; i >= 0; i--) {
        var data=JSON.parse(x[i])

console.log(data)

html+=`

         <div class="mb-3 col-12">
                            <div class="row">
                                <div class="col-12 alert-info">
                                    <div>

                                        <h5> Order Id: <small>${data.order_id} </small></h5>
                                        <hr>
                                        <h3> Product Name: <span> ${data.cart_details.product_name} </span> </h3>
                                        <hr>
                                        <div class="d-flex orders">
                                            <ul>
                                                <li><span>Order Date: </span> <span> ${new Date(data.date).toLocaleDateString()}</span></li>
                                                 <li><span>Ordered Quantity: </span> <span> ${data.cart_details.quantity}</span></li>
                                            </ul>
                                           
                                        </div>

                                        <div class="mt-3 orders ">
                                           
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>






`
}
}
document.getElementById("productholder").innerHTML=html
}


getmyorders()
</script>



                    <div>
                        <!--        event item start-->

                    </div>
                </div>

               <!--  <div class="row">
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
                </div> -->

            </div>

        </div>

    </div>
</div>


<!-- Footer -->
<!--=====================================
                     FOOTER PART START
        =======================================-->
<?php include 'sections/footer.php'?>

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


function generateinvoice(html){

var hdata=JSON.parse(JSON.parse(decodeURI( html)))

const winHtml = `<!DOCTYPE HTML> <!-- PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd" -->
<html
    style="-moz-osx-font-smoothing: grayscale; -webkit-font-smoothing: antialiased; background-color: #464646; margin: 0; padding: 0;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="format-detection" content="telephone=no">
    <title>Payment successful</title>
    <!-- Latest compiled and minified CSS -->
     <script src="https://pharmabag.in/js/html2canvas.js"><\/script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"><\/script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></\script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></\script>

</head>

<body bgcolor="#d7d7d7" class="payment_successfulPage"
    style="-moz-osx-font-smoothing: grayscale; -webkit-font-smoothing: antialiased; background-color: #d7d7d7; margin: 0; padding: 0;">
    <!-- Header Start -->
    
    <!-- Header End -->

    <!-- Content Start -->
    <table cellpadding="0" cellspacing="0" cols="1" bgcolor="#d7d7d7" align="center" style="max-width: 600px;">
        <tr bgcolor="#d7d7d7">
            <td height="30">
            </td>
        </tr>

        <!-- This encapsulation is required to ensure correct rendering on Windows 10 Mail app. -->
        <tr bgcolor="#d7d7d7">
            <td>
                <!-- Seperator Start -->
                <table cellpadding="0" cellspacing="0" cols="1" bgcolor="#d7d7d7" align="center">
                    <tr bgcolor="#d7d7d7">
                        <td height="30">
                        </td>
                    </tr>
                </table>
                <!-- Seperator End -->

                <!-- Generic Pod Left Aligned with Price breakdown Start -->
                <table id="temp0" align="center" cellpadding="0" cellspacing="0" cols="3" bgcolor="white"
                    class="bordered-left-right"
                    style="border-left: 10px solid #d7d7d7; border-right: 10px solid #d7d7d7; max-width: 600px; width: 100%;">
                    <tr height="20">
                        <td colspan="3">
                        </td>
                    </tr>
                    <tr align="center">
                        <td width="36">
                        </td>
                        <td class="text-primary">
                        
                            <img src=${hdata.order_status=="Success"?"data:image/png;base64,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":"https://pharmabag.in/image/cross.jpg"}
                                alt="Pharma Bag" width="50">
                        </td>
                        <td width="36">
                        </td>
                    </tr>
                    <tr height="17">
                        <td colspan="3">
                        </td>
                    </tr>
                    <tr align="center">
                        <td width="36">
                        </td>
                        <td class="text-primary">
                            <h1
                                style="color: #6422f1; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 30px; font-weight: 700; line-height: 34px; margin-bottom: 0; margin-top: 0;">
                                Payment ${hdata.order_status=="Success"?"received":"Failed"}</h1>
                        </td>
                        <td width="36">
                        </td>
                    </tr>
                    <tr height="30">
                        <td colspan="3">
                        </td>
                    </tr>
                    <tr align="left">
                        <td width="36">
                        </td>
                        <td>
                            <p
                                style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">
                                Hi ${hdata.billing_name}
                            </p>
                        </td>
                        <td width="36">
                        </td>
                    </tr>
                    <tr height="10">
                        <td colspan="3">
                        </td>
                    </tr>
                    <tr align="left">
                        <td width="36">
                        </td>
                        <td>
                            <p
                                style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">
                                Your transaction was ${hdata.order_status=="Success"?"Successfull":"Failed"}!</p>
                            <br>
                            <p
                                style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0; ">
                                <strong>Payment Details:</strong><br />

                                Amount: ₹ ${hdata.amount} <br />
                                Account: Pharma Bag HDFC Business Bank<br />
                            </p>
                            <br>
                            <p
                                style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">
                                We advise to keep this ID for payment Tracking.&nbsp;&nbsp;&nbsp;&nbsp;<br /></p>
                        </td>
                        <td width="36">
                        </td>
                    </tr>
                    <tr height="20">
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr height="10">
                        <td colspan="3">
                        </td>
                    </tr>
                    <tr align="center">
                        <td width="36">
                        </td>
                        <td>
                            <p
                                style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">
                                <strong>OrderID: ${hdata.order_id}</strong>
                            </p>
                            <p
                                style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">
                                <strong>Tracking ID: ${hdata.tracking_id}</strong>
                            </p>
                             <p
                                style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">
                                <strong>Bank Ref No: ${hdata.bank_ref_no}</strong>
                            </p>
                            <p
                                style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">
                                Order date: ${hdata.trans_date}</p>
                            <p
                                style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">
                            </p>
                        </td>

                        <td width="26">
                        </td>

                    </tr>

        </tr>
        <tr height="20">
            <td colspan="3">
            </td>
        </tr>

        <tr align="center">
            <td width="36">
            </td>
            <td>




            </td>

            <td width="26">
            </td>

        </tr>

        <tr height="30">
            <td colspan="3">
            </td>
        </tr>

    </table>
               
    <!-- Generic Pod Left Aligned with Price breakdown End -->

    <!-- Seperator Start -->
    <table cellpadding="0" cellspacing="0" cols="1" bgcolor="#d7d7d7" align="center"
        style="max-width: 600px; width: 100%;">
        <tr bgcolor="#d7d7d7">
            <td height="50">
            </td>
        </tr>
    </table>
    <!-- Seperator End -->

    </td>
    </tr>
    </table>
    <!-- Content End -->

    <!-- Footer Start -->
 
    <!-- Footer End -->
</body>
<script>


html2canvas(document.getElementById("temp0"),{
useCORS: true
}).then(function(canvas) {
   canvas.toBlob((blob)=>{
    var link = window.document.createElement('a');
    link.href = window.URL.createObjectURL(blob);
    
    link.download = "Recipt_${hdata.order_id}_${hdata.tracking_id}.jpeg"; 
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
    alert("Invoice downloaded you can close this window now")


},"image/jpeg",
  0.95)
});










</\script>
</html>`;

const winUrl = URL.createObjectURL(
    new Blob([winHtml], { type: "text/html" })
);

const win = window.open(
    winUrl,
    "win",
    `width=800,height=800,screenX=200,screenY=200`
);











}






</script>

</body>

</html>
