<?php
// error_reporting(E_ALL);
// ini_set('display_errors', '1');

?>
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
<style type="text/css">
     .progress-container {
       
            margin: 20px auto;
            background: gray;
            border-radius: 24px;
        }

        .progress-bar {
            width: 0%;
            height: 8px;
            background-color: #3498db;
            border-radius: 24px;
        }
        a{
            cursor: pointer;
        }
        .pgchoosecontainer {
    position: relative;
    width: 100%;
    max-width: 600px; /* Adjust the max width as needed */
}


#button1 {

    filter: drop-shadow(-6px 6px 2px #262732A7);

    position: absolute;
    top: 44%; /* Adjust the vertical position */
    left: 10%; /* Adjust the horizontal position */
    transform: translate(-50%, -50%);
}
#button2 {
    filter: drop-shadow(6px 6px 2px #262732A7);
    position: absolute;
    top: 42%; /* Adjust the vertical position */
    left: 92%; /* Adjust the horizontal position */
    transform: translate(-50%, -50%);
}
.or{
    display: none;
}
@media only screen and (max-width: 768px) {
  /* For mobile phones: */
      .pgchoosecontainer {
        display: grid;
grid-template-columns: 1fr;
    position: relative;
    width: 100%;
    max-width: 600px; /* Adjust the max width as needed */
}
 .pgchoosecontainer .img{
    display: none;/* Adjust the max width as needed */
}

#button1 {
     filter: drop-shadow(6px 6px 2px #262732A7);
  position: unset;
    top: unset; /* Adjust the vertical position */
    left: unset; /* Adjust the horizontal position */
    transform: unset;
}
#button2 {
    position: unset;
    top: unset; /* Adjust the vertical position */
    left: unset; /* Adjust the horizontal position */
    transform: unset;
}
.or{
    display: block;
}
}


</style>
<div class="container-fluid my-5">
    <div class="row">
        <div class="col-12 col-md-3 profile order-last order-md-first">
            <ul class=" nav-tabs flex-column" style="align-items: start;">
                <li><a href="profile.php" >Profile Settings</a></li>
                <li><a href="" class="active">My orders</a></li>
                <li><a href="credit-details.php">Credit Details</a></li>
                <li><a href="cancel-order.php">Canceled Orders</a></li>
                <li><a href="tickets.php">Tickets</a></li>


                <li><a href="register.php">Login as Seller</a></li>
                <li><a onclick="localStorage.removeItem('auth-token');localStorage.removeItem('user_type');location.href='register.php'">Logout</a></li>
            </ul>
        </div>

                <div class="modal fade" id="pgchoose">
                    <div class="modal-dialog bg-light">
                        <div class="modal-content">

                            <div class="modal-header" style="border: 0px solid">
                                <h5>Choose Payment Gateway</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                 <div class="pgchoosecontainer">
        <img class="img" src="MAKEPAYMENT.gif" alt="Your Image" style="width:100%;">
        <button id="button1"><img src="Group16.png" style="width: 200px;border: 3px solid black;border-radius: 15px;"></button>
        <center class="or"><b>Or</b></center>
        <button id="button2"><img src="Group18.png" style="width: 200px;border: 3px solid black;border-radius: 15px;"></button>
    </div>
                            </div>
                        </div>
                    </div>
                </div>
   <div class="modal fade" id="PaymentBreakup">
                    <div class="modal-dialog bg-light">
                        <div class="modal-content">

                            <div class="modal-header" style="border: 0px solid">
                                <h5>Payment Breakups</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body" id="PaymentBreakup-body">
                                 
                            </div>
                        </div>
                    </div>
                </div>


        <div class="col-12 col-md-9 order-first order-md-last">
            <div class="container">
                <div class="row">
                    <div>
                        <!--        event item start-->
                        <div class="mb-3 col-12">
                            <div class="row" id="productholder">
<script type="text/javascript">
function round(value,decimalPlaces=2){
    return Number(Number(value).toFixed(decimalPlaces))

}

var allpayments
    var tracPackege={
"Placed":0,
"accepted":10,
"divided":10,
"PAID":40,
"partialpayment":20,
"awaiting confirmation":0,
"way to warehouse":30,
"Reached warehouse":45,
"Order in Transit":50,
"Out for Delivery":60,
"Order Shipped":80,
"sucessfull":100
    }

function viewPaymentBrakup(order_id) {
  var data = allpayments.filter((item) => item.order_id == order_id);
  console.log(data);
  var html=""
for (var i = data.length - 1; i >= 0; i--){

    html+=` <div class="d-flex orders" style="border:1px solid var(--primary);margin:5px;padding:5px;border-radius:10px;">
                                            <ul>
                                                <li><span>Payment Date: </span> <span> ${new Date(data[i].date).toLocaleDateString()}</span></li>
                                                <li><span>Payment Mode: </span> <span> ${data[i].PGresponse =='{"COD":"paid by admin"}'?"COD to Admin":data[i].PGresponse != "null"?JSON.parse(data[i]?.PGresponse||"").payment_mode:"No Payment"}</span></li>
                                            </ul>
                                            <ul>
                                                <li><span>Paid Amount: </span> <span> ₹ ${data[i].PGresponse !="null" && data[i].PGresponse !='{"COD":"paid by admin"}' ?JSON.parse(data[i]?.PGresponse||"").amount:data[i].PGresponse =='{"COD":"paid by admin"}'?data[i].paid_ammount:0}</span></li>
                                                <li><span>Payment Status: </span><span class="badge bg-${data[i].paid_ammount?"success":"warning"}"> ${data[i].PGresponse =='{"COD":"paid by admin"}'?"COD To Admin":data[i].PGresponse != "null"?JSON.parse(data[i]?.PGresponse||"").order_status:"Failed"} </span></li>
                                            </ul>
                                        </div>`
}
document.getElementById("PaymentBreakup-body").innerHTML=html;
$("#PaymentBreakup").modal("show")

}



    async function fetchallpayments(){
allpayments=''
var x=await fetch("https://pharmabag.in:3000/buyer/get/payments",{method:"GET",
    headers:{"content-type":"application/json","auth-token":localStorage.getItem("auth-token")}})
allpayments=await x.json()
    }

    fetchallpayments()




    async function getmyorders(){

var x=await fetch("https://pharmabag.in:3000/buyer/auth/get/my/orders",{method:"GET",
    headers:{"content-type":"application/json","auth-token":localStorage.getItem("auth-token")}})
let data=await x.json()
var html=""
if(x.status==200){
    for (var i = data.length - 1; i >= 0; i--) {



html+=`
 <div class="col-12 alert-info">
                                    <div>
                                        <h5> Product Name: <span> ${data[i].cart_details.product_name} </span> </h5>
                                        <hr>
                                        <div class="d-flex orders">
                                            <ul>
                                                <li><span>Order Id: </span> <span> ${data[i].order_id}</span></li>
                                                <li><span>Ordered Quantity: </span> <span> ${data[i].cart_details.quantity}</span></li>
                                        <li><span>Order Value : </span> <b> ₹${round(data[i].cart_details.pricing?.final_order_value)}</b></li>
                                        <li><a  class="fa fa-eye" onclick="viewPaymentBrakup('${data[i]._id}')"></a><span>Total Paid  : </span> <b> ₹${["PAID"].includes(data[i].order_status)?round(data[i].cart_details?.pricing?.final_order_value):round(data[i].cart_details?.pricing?.final_order_value-data[i].order_payment_details?.due)}  </b></li>
                                            </ul>
                                            <ul>
                                            ${

data[i].order_status=="awaiting confirmation"?

`<li><span class="makepayment" style="background:#0c0064;" onclick="Xconfirm('${data[i]._id}',this)">Confirm</span> <span class="makepayment" style="background:#0c0064;" onclick="cancel('${data[i]._id}',this,'${encodeURI(JSON.stringify(data[i]))}')">Cancel</span></li>
<li><span>Order Status: </span><span class="badge bg-success"> ${data[i].order_status} </span></li>
 <a onclick="vewbreakdown('${i}','${data[i]._id}')" class="mx-4 mt-3" data-bs-target="#replyorder${i}" data-bs-toggle="modal">
                                                <i class="fa-solid fa-eye"></i>
                                                <span>View breakDown</span>
                                            </a>


`:data[i].order_status=="divided"?

`<li onclick="makepayment('${data[i].order_payment_details?.paymentlink}','${data[i].order_payment_details?.is_partial}')"><span>Payment Status: </span> <span class="makepayment">Make Full Payment</span></li>
<li><span>Order Status: </span><span class="badge bg-success"> ${data[i].order_status} </span></li>
 <a onclick="vewbreakdown('${i}','${data[i]._id}')" class="mx-4 mt-3" data-bs-target="#replyorder${i}" data-bs-toggle="modal">
                                                <i class="fa-solid fa-eye"></i>
                                                <span>View breakDown</span>
                                            </a>


`           :["PAID"].includes(data[i].order_status) ?
`<li><span>Payment Status: </span> <span>Thanks for Payment</span></li>
<li><span>Order Status: </span><span class="badge bg-success"> PAID </span></li>`

            :data[i].order_status=="accepted" && data[i].order_payment_details?.paymentlink?

` <li onclick="makepayment('${data[i].order_payment_details?.paymentlink}','${data[i].order_payment_details?.is_partial}')"><span>Payment Status: </span> <span class="makepayment">Make Full Payment</span></li>
  <li><span>Order Status: </span><span class="badge bg-success"> Order Accepted </span></li>
  <li><span>You get Free Delivery on this order </span></li>`

            :["PAID","way to warehouse","sucessfull","Reached warehouse","Order in Transit","Out for Delivery","Order Shipped","Transport delay"].includes(data[i].order_status) && (data[i].order_payment_details?.due<=0  )?
`<li><span>Payment Status: </span> <span>Thanks for Payment</span></li>
<li><span>Order Status: </span><span class="badge bg-success"> ${data[i].order_status} </span></li>`

            :data[i].order_status=="partialpayment"?
`<li onclick="makepayment('${data[i].order_payment_details?.paymentlink}','${data[i].order_payment_details?.is_partial}',${data[i].order_payment_details?.due},${data[i].cart_details.pricing?.final_order_value})" ><span>Partial Payment Status: </span> <span class="makepayment">Pay Due ₹${round(data[i].order_payment_details?.due)}</span></li>
<li><span>Order Status: </span><span class="badge bg-success"> Order Accepted </span></li><li><span>Free Delivery on Full Payment </span></li>`
            :data[i].order_status=="full credit"?
`<li onclick="makepayment('${data[i].order_payment_details?.paymentlink}','${data[i].order_payment_details?.is_partial}',${data[i].order_payment_details?.due},${data[i].cart_details.pricing?.final_order_value})" ><span>Credit Payment Status: </span> <span class="makepayment">Pay Due ₹${round(data[i].order_payment_details?.due)}</span></li>
<li><span>Order Status: </span><span class="badge bg-success"> full credit </span></li><li><span>Free Delivery on Full Payment </span></li>`


            :data[i].order_status=="sucessfull" && (data[i].order_payment_details?.due<=0 )?
`<li><span>Payment Status: </span> <span class="makepayment" style="background:#018e11;">Sucessfull</span></li>
<li><span>Order Status: </span><span class="badge bg-success"> ${data[i].order_status} </span></li`
            :["way to warehouse","sucessfull","Reached warehouse","Order in Transit","Out for Delivery","Order Shipped","Transport delay"].includes(data[i].order_status) && !(data[i].order_payment_details?.due<=0 ) && data[i].order_payment_details?.is_partial==0  ?
`<li onclick="makepayment('${data[i].order_payment_details?.paymentlink}','${data[i].order_payment_details?.is_partial}')"><span>Payment Status: </span> <span class="makepayment">Make Full Payment</span></li>
<li><span>Order Status: </span><span class="badge bg-success"> ${data[i].order_status} </span></li>`
            :["way to warehouse","sucessfull","Reached warehouse","Order in Transit","Out for Delivery","Order Shipped","Transport delay"].includes(data[i].order_status) && !(data[i].order_payment_details?.due<=0 ) && data[i].order_payment_details?.is_partial!=0 ?`<li onclick="makepayment('${data[i].order_payment_details?.paymentlink}','${data[i].order_payment_details?.is_partial}',${data[i].order_payment_details?.due},${data[i].cart_details.pricing?.final_order_value})" ><span>Partial Payment Status: </span> <span class="makepayment">Pay Due ₹${round(data[i].order_payment_details?.due)}</span></li>
<li><span>Order Status: </span><span class="badge bg-success">${data[i].order_status} </span></li><li><span>Free Delivery on Full Payment </span></li>`

            :`<li><span>Payment Status: </span> <span class="makepayment" style="background:#0c0064;">Under Review</span></li>
<li><span>Order Status: </span><span class="badge bg-success"> ${data[i].order_status} </span></li>`

  }

  <li style="position:relative;"><div class="progress-container">
    <span style="font-size: 25px;position:absolute;top: -25px;left:${tracPackege[data[i].order_status]}%" class="fa-solid fa-truck-fast" ></span>
        <div class="progress-bar" id="progressBar" style="width:${tracPackege[data[i].order_status]}%"></div>
    </div>
<div style="display:flex;justify-content:space-between;">
<b>Placed</b>
<b>successful</b>

</div>

    </li>

                                            </ul>
                                        </div>

                                        <div class="mt-3 orders">
                                            <a href="product.php?id=${data[i].cart_details.product_id}" class="mx-4">
                                                <i class="fas fa-eye"></i>
                                                <span>View Product</span>
                                            </a>

                                   ${
data[i].order_status=="Placed"?`<a href="#" class="mx-4 mt-3" data-bs-target="#modify-order${i}" data-bs-toggle="modal">
                                                <i class="fa-solid fa-download"></i>
                                                <span>Modify Order</span>
                                            </a>`:"<span></span>"
                                    }




 <div class="modal fade" id="modify-order${i}">
                    <div class="modal-dialog bg-light">
                        <div class="modal-content">

                            <div class="modal-header" style="border: 0px solid">
                                <h5>Modify Order</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <div class="p-3 row">
                                    <span class="badge alert-info">Order can be modified before order gets confirmed </span>

                                    <form class="cart-items" onsubmit="event.preventDefault()">
                                        <div class="table-responsive col-12 mt-2">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th> Image </th>
                                                        <th> Name </th>
                                                        <th> Item Price </th>
                                                        <th> Quantity </th>
                                                        <th> Final Payble Value </th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td> <img src="${data[i].cart_details.product_image.replace("https://pharmabag03.s3.ap-south-1.amazonaws.com/","https://pharmabag03.s3.ap-south-1.amazonaws.com/small_")}" width="50px"> </td>
                                                        <td> <b> ${data[i].cart_details.product_name}</b></td>
                                                        <td> ₹${data[i].cart_details.product_price} </td>
                                                        <td>
                                                            <div class="cart-action-group">
                                                                <div class="product-action">
                     <span class="action-minus" title="Quantity Minus" onclick="minus_order(this,'price_${data[i]._id}','${data[i].cart_details?.pricing?.final_ptr}')"><i class="icofont-minus"></i></span>
<input class="action-input" id="${data[i].cart_details.cart_id}" data-product_id="${data[i].cart_details.product_id}" title="Quantity Number" type="text" name="quantity" value="${data[i].cart_details.quantity}" onkeyup="document.getElementById('price_${data[i]._id}').innerText='₹'+((parseFloat(this.value))*(parseFloat(${data[i].cart_details?.pricing?.final_ptr}))).toFixed(2)">
                      <span class="action-plus" title="Quantity Plus" onclick="plus_order(this,'price_${data[i]._id}','${data[i].cart_details?.pricing?.final_ptr}')"><i class="icofont-plus"></i></span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td id="price_${data[i]._id}" > ₹${data[i].cart_details?.pricing?.final_order_value}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="col-12 mt-3">

<input type="submit" value="Update Order" onclick="updateOrder('${data[i].cart_details.product_id}',document.getElementById('${data[i].cart_details.cart_id}').value,'${data[i]._id}','${data[i].cart_details.min_order_qty}')" class="btn btn-primary border-0" >
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                        ${
data[i].order_status=="Placed"?`<a href="#" class="mx-4 mt-3" data-bs-toggle="modal" data-bs-target="#cancel-order${i}">
                                                <i class="fa-solid fa-download"></i>
                                                <span>Cancel Order</span>
                                            </a>`:"<span></span>"



                        }





   <!--    cancel order-->

                <div class="modal fade" id="cancel-order${i}">
                    <div class="modal-dialog bg-light">
                        <div class="modal-content">

                            <div class="modal-header" style="border: 0px solid">
                                <h5>Cancel Order</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <div class="p-3 row">
                                    <span class="badge alert-info"> The order can be cancelled before it gets confirmed.</span>
                                    <form onsubmit="event.preventDefault()">



                                        <div class="mt-4">
                                            <label class="form-label"> Why you want to cancel this order? </label> <br>
                                            <textarea id="${data[i].cart_details.product_id}" placeholder="write your reason here" class="form-control"> </textarea>
                                        </div>

                                        <div class="mt-4">
                                            <button type="submit" class="btn btn-primary" style="width: 100%" onclick="cancelorder('${data[i].cart_details.product_id}','${data[i].seller_id}',document.getElementById('${data[i].cart_details.product_id}').value,'${data[i]._id}','${encodeURI(JSON.stringify(data[i]))}')">Cancel Now</button>
                                        </div>

     </form>
<br>
<span>**Cancelled order were supposed to be archived for 30 days before it gets deleted</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ------------modify modal------------- -->


             <div class="modal fade" id="replyorder${i}">
                            <div class="modal-dialog bg-light">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5>Divide Order</h5>
                                        <small id="error${i}"></small>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="row" id="setmilestoneform${i}" onsubmit="event.preventDefault()">


                                        </form>

                                            <li style="display:${data[i].order_status=="awaiting confirmation"?'initial':'none'}"><span class="makepayment" id="${i}" style="background:#0c0064;" onclick="Xconfirm('${data[i]._id}',this)">Confirm</span> <span class="makepayment" style="background:#0c0064;" onclick="cancel('${data[i]._id}',this,'${encodeURI(JSON.stringify(data[i]))}')">Cancel</span></li>

                                    </div>
                                </div>
                            </div>
                        </div>




                                            ${


data[i].order_status=="sucessfull"?`<a onclick="generateinvoice('${encodeURI(JSON.stringify(data[i]))}')" class="mx-4 mt-3"  style='cursor:pointer'>
                                                <i class="fa-solid fa-download"></i>
                                                <span>Invoice</span>
                                            </a>`:"<span></span>"
                                            }
                                        </div>

                                    </div>

                                </div>


`
}
}
document.getElementById("productholder").innerHTML=html

}


getmyorders()








async function vewbreakdown(id,order_id){

var x=await fetch("https://pharmabag.in:3000/get/milestone/"+order_id,{method:"GET",
    headers:{"content-type":"application/json","auth-token":localStorage.getItem("auth-token")}})
let data=await x.json()


var milestone=``;
var milestonequantity=Object.keys(data.milestone_details)
console.log(milestonequantity)
for (var l = 0; l < milestonequantity.length; l++){
if(data.milestone_details[milestonequantity[l]]==0||data.milestone_details[milestonequantity[l]]==''){continue}
milestone+=` <div class="col-12 col-sm-6">
                                                <label>Product Quantity</label>
                                                <input type="number" name="milestone" value="${data.milestone_details[milestonequantity[l]]}" class="form-control" readonly>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <label>Date Range</label>
                                     <input name="Date" type="date"  value="${milestonequantity[l]}" class="form-control" readonly>
                                            </div>`
}


document.getElementById("setmilestoneform"+id).innerHTML=milestone+`${data.is_partial==1?"<h3>This Product is available for easy EMI </h3>":" "}`











}

async function Xconfirm(id,event){
var x=await fetch("https://pharmabag.in:3000/confirm/milestone/"+id,{method:"GET",
    headers:{"content-type":"application/json","auth-token":localStorage.getItem("auth-token")}})
let data=await x.json()
if(x.status==200){
    $("#replyorder"+event.id).modal("hide")
    alert("Thanks for confirming! your order will reach you soon")

    location.reload()


}
    else{
alert("we cannot process now! try again after sometime.")
    }



}
async function cancel(id,event,ordertext){
addtolocalstorage("cancelorders",decodeURI(ordertext))
var x=await fetch("https://pharmabag.in:3000/cancel/milestone/"+id,{method:"GET",
    headers:{"content-type":"application/json","auth-token":localStorage.getItem("auth-token")}})
let data=await x.json()
if(x.status==200){
    $("#replyorder"+event.id).modal("hide")
    alert("We are sorry to hear that!Don't worry order again hope this time it works.")
  location.reload()

}
    else{
alert("we cannot process now! try again after sometime.")
    }

}












</script>










                            </div>
                        </div>
                    </div>
                </div>





                <!--raise ticket modal.-->

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


async function makepayment(link,is_pertial,due,finalPay){
amount=0

pg=""
$("#pgchoose").modal("show")
document.getElementById("button1").addEventListener("click",()=>{
    pg="cc/"
    _makepayment(link,is_pertial,due,finalPay,pg)
})
document.getElementById("button2").addEventListener("click",()=>{
    pg="wl/"
    _makepayment(link,is_pertial,due,finalPay,pg)
})

}
async function _makepayment(link,is_pertial,due,finalPay,pg){
    if(!pg){return 0}
amount=0


if(is_pertial==0){
  

location.href=(link+pg+(amount>=0?amount:1));
}else{
//alert(due)
//alert(`xx${finalPay}`)
//amount=prompt("seller accept part payment like EMIs. So enter the amount you want to give now.")
if(due==finalPay ){
if(!confirm("The seller accepts part payment, such as EMIs. Your first installment is 25%, which amounts to ₹"+round(finalPay*0.25)+" click OK to continue.")) return
}else{
amount=prompt("Thanks for clearing First EMIs Installment. Now you can enter Any amount you want to Pay.")

}

 location.href=(link+pg+(amount>=0?amount:1));


}
}

function generateinvoice(html){

var hdata=JSON.parse(decodeURI( html))
console.log(hdata)
var xx=``
for (var i = 0; i < hdata.cart_details.details.length; i++) {

if(hdata.cart_details.details[i].key.toString()=="Final Payable Value"){
hdata.cart_details.details[i].value=hdata.cart_details?.pricing?.final_order_value.toString()
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
<?php
if (!empty($_GET["generateInvoice"])) {
    echo "<script>generateinvoice(`" . $_GET["generateInvoice"] . "`)</script>";

}

?>




</body>

</html>
