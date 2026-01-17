<script>
function generateinvoice(html){

var hdata=JSON.parse(html)
var xx=``
for (var i = 0; i < hdata.cart_details.details.length; i++) {

if(hdata.cart_details.details[i].key.toString()=="Final Payable Value"){
hdata.cart_details.details[i].value=hdata.cart_details.pricing.final_order_value.toString()
}                                                                                                                                                              

   xx+=`    <p
                                style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">
                                ${hdata.cart_details.details[i].key.toString()}: <b>${hdata.cart_details.details[i].value.toString().replace("undefined",'')}</b></p>
                            <br>` 




}
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
                        
                           


                                 <div class="col">
                <div class="card overflow-hidden radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
                            <div >
                                <p><img src="https://pharmabag.in/image/logo/logo-edited.png" class="logo-icon" alt="logo icon" width="120" height="50"> <span style="font-size: 18px;" class="logo-text">Pharmabag<span></p>
                                <h6 class="">

13A/4, Ariff Rd, Daspara, Ultadanga, Kolkata, West Bengal 700067
<br>


<a href="tel:+919561222664">+91 95612 22664</a>
<br>
<a href="mailto:info@pharmabag.com">info@pharmabag.com</a>
<br>
<a href="mailto:contact@pharmabag.com">contact@pharmabag.com</a>
</h6>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
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
                                style="color: #6422f1; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 700; line-height: 34px; margin-bottom: 0; margin-top: 0;">
                                Order ${hdata.order_status=="sucessfull"?"Delivered":"Failed"}</h1>
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
                            <b
                                style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 24px;font-weight: 700; line-height: 22px; margin: 0;">
                                 ${hdata.cart_details.product_name}
                            </b>
                            <hr>
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
                            ${xx}
                             <p
                                style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">
                                Order date: ${new Date(hdata.date).toLocaleDateString()}</p>
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
                              
                            </p>
                            <p
                                style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">
                                
                            </p>
                             <p
                                style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">
                                
                            </p>
                          
                            <p
                                style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">
                                *every price here is in INR
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
    
    link.download = "Recipt_of_Order_${hdata.order_id}.jpeg"; 
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
    alert("Invoce downloaded you can close this window now")


},"image/jpeg",
  0.95)
});










</\script>
</html>`;

const winUrl = URL.createObjectURL(
    new Blob([winHtml], { type: "text/html" })
);
location.href=winUrl
// const win = window.open(
//     winUrl,
//     "win",
//     `width=800,height=800,screenX=200,screenY=200`
// );











}



</script>
<?php 
if (!empty($_GET["generateInvoice"])) {
    echo "<script>generateinvoice(`".$_GET["generateInvoice"]."`)</script>";
    
}


?>
