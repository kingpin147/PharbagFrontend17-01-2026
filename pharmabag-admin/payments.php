<?php
session_start();
session_regenerate_id();
$pcode = '3';
if (isset($_SESSION["admin_id"]) && isset($_SESSION["role"]) && isset($_SESSION["token"])) {

    if (in_array($pcode, str_split($_SESSION["role"]))) {
        echo "<!doctype html><br/> ";

    } else {

        echo <<<html
        <center><h2>You Dont Have Enough Permission</h2></center>
<br><br>
<center><h3><pre> your Permissions are <br><code>
 <u>{$_SESSION["role"]}</u>
</code></pre></h3></center>
<center><h2>You Need Permisson <code>
{$pcode}
</code> to visit this part</h2></center>
<center><h2>if You are super admin then login here<code><a href="admin-signin.php">Login Here</a></code> </h2></center>
<center>
  Here is the list of permissons
<pre>
  <code>
  <span><b>1 <em>Dashboard</i></b></span><br/>
  <span><b>2 <em>Inventory</i></b></span><br/>
  <span><b>3 <em>Settlement</i></b></span><br/>
  <span><b>4 <em>Orders</i></b></span><br/>
  <span><b>5 <em>Tickets</i></b></span><br/>
  <span><b>6 <em>Notifications</i></b></span><br/>
  <span><b>7 <em>Users</i></b></span><br/>
  <span><b>8 <em>Marketing</i></b></span><br/>
  <span><b>9 <em>Product Requested</i></b></span><br/>
  <span><b>a <em>settings</i></b></span>
  <span><b>b <em>category subcategory</i></b></span><br/>
  <span><b>x <em>Manage Admin</i></b></span><br/>


  </code>




</pre>

</center>




html;
        exit();

    }
} else {
    header("location:admin-signin.php");

}

?>
<?php

require "../vendor/leafs/fetch/src/Fetch.php";

$details = json_decode(urldecode($_POST["details"]));

?>
<!DOCTYPE html>
    <html lang="en">

    <head>
<style type="text/css">

    .trans {

    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100vh;
    z-index: 9999;
    background: #fdfdfdb8;
    display: flex;
justify-content: center;
align-items: center;
font-size: large;
font-weight: bold;
text-align: center;

}
tr{
    line-height: inherit!important;
}

 @media print {
      aside,#trans,header,#closed,#breadcrumb{
        display: none;
      }

      #maincontent{
        width: 100vw;
        margin-left: 0;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
       #breadcrumb{
        display: none!important;
      }
      #closed{
        display: none!important;
      }

 }

#checkboxActive{
display:none;



}

</style>
        <title>Admin </title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />

        <!--plugins-->
        <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
        <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
        <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
        <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />

        <!--    <link href="assets/plugins/fancy-file-uploader/fancy_fileupload.css" rel="stylesheet" />-->
        <link href="assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css" rel="stylesheet" />
        <!-- Bootstrap CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/bootstrap-extended.css" rel="stylesheet" />
        <link href="assets/css/style.css" rel="stylesheet" />
        <link href="assets/css/icons.css" rel="stylesheet">
        <link href="assets/fonts/fontawesome/fontawesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <!-- loader-->
        <link href="assets/css/pace.min.css" rel="stylesheet" />

        <!--Theme Styles-->
        <link href="assets/css/dark-theme.css" rel="stylesheet" />
        <link href="assets/css/light-theme.css" rel="stylesheet" />
        <link href="assets/css/semi-dark.css" rel="stylesheet" />
        <link href="assets/css/header-colors.css" rel="stylesheet" />

    </head>

    <body>
        <script type="text/javascript">0</script>
        <script type="text/javascript">
 setInterval(()=>{
             if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
   // true for mobile device

   document.write("Use Desktop PC, this feature is not available for mobile devices.");
   history.go(-1)
 }
 },5000)
  setTimeout(()=>{
             if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
   // true for mobile device
   document.write("");
   document.write("Use Desktop PC, this feature is not available for mobile devices.");

 }
 },300)
        </script>
        <div class="" id="trans"> Generating report Please wait..... <br> Please Stay on this Page</div>
<div class="wrapper">

    <header class="top-header">
    <nav class="navbar navbar-expand gap-3">
        <div class="mobile-toggle-icon fs-3">
            <i class="bi bi-list"></i>
        </div>
       <!-- <form class="searchbar">
            <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
            <input class="form-control" type="text" placeholder="Type here to search">
            <div class="position-absolute top-50 translate-middle-y search-close-icon"><i class="bi bi-x-lg"></i></div>
        </form>-->
        <div class="top-navbar-right ms-auto">

            <ul class="navbar-nav align-items-center">
                <li class="nav-item search-toggle-icon">
                    <a class="nav-link" href="#">
                        <div class="">
                            <i class="bi bi-search"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-user-setting">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                        <div class="user-setting d-flex align-items-center">
                            <img src="assets/images/avatars/avatar-1.png" class="user-img" alt="">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="54" height="54">
                                    <div class="ms-3">
                                        <h6 class="mb-0 dropdown-user-name">Jhon Deo</h6>
                                        <small class="mb-0 dropdown-user-designation text-secondary">Seller</small>
                                        <small class="mb-0 dropdown-user-designation badge alert-success ">Verified</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="user-profile.php">
                                <div class="d-flex align-items-center">
                                    <div class=""><i class="bi bi-person-fill"></i></div>
                                    <div class="ms-3"><span>Profile</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="">
                                <div class="d-flex align-items-center">
                                    <div class=""><i class="bi bi-lock-fill"></i></div>
                                    <div class="ms-3"><span>Logout</span></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown dropdown-large">
    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
        <div class="messages">
            <span class="notify-badge">5</span>
            <i class="bi bi-chat-right-fill"></i>
        </div>
    </a>
    <div class="dropdown-menu dropdown-menu-end p-0">
        <div class="p-2 border-bottom m-2">
            <h5 class="h5 mb-0">Notifications</h5>
        </div>
        <div class="header-message-list p-2">
            <a class="dropdown-item" href="#">
                <div class="d-flex align-items-center">
                    <img src="assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="50" height="50">
                    <div class="ms-3 flex-grow-1">
                        <h6 class="mb-0 dropdown-msg-user">Amelio Joly <span class="msg-time float-end text-secondary">1 m</span></h6>
                        <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The standard chunk of lorem...</small>
                    </div>
                </div>
            </a>
        </div>
       <div class="p-2">
            <div>
                <hr class="dropdown-divider">
            </div>
            <a class="dropdown-item" href="tickets-pending.php">
                <div class="text-center">View All Messages</div>
            </a>
        </div>
    </div>
</li>
                <li class="nav-item dropdown dropdown-large">
    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
        <div class="notifications">
            <span class="notify-badge">8</span>
            <i class="bi bi-bell-fill"></i>
        </div>
    </a>
    <div class="dropdown-menu dropdown-menu-end p-0">
        <div class="p-2 border-bottom m-2">
            <h5 class="h5 mb-0">Notifications</h5>
        </div>
        <div class="header-notifications-list p-2">
            <a class="dropdown-item" href="#">
                <div class="d-flex align-items-center">
                    <div class="notification-box bg-light-primary text-primary"><i class="bi bi-basket2-fill"></i></div>
                    <div class="ms-3 flex-grow-1">
                        <h6 class="mb-0 dropdown-msg-user">New Orders <span class="msg-time float-end text-secondary">1 m</span></h6>
                        <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">You have received new orders</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="p-2">
            <div>
                <hr class="dropdown-divider">
            </div>
            <a class="dropdown-item" href="notification.php">
                <div class="text-center">View All Notifications</div>
            </a>
        </div>
    </div>
</li>

            </ul>

        </div>
    </nav>
</header>

    <aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Pharma Bag</h4>
        </div>
        <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
        </div>
    </div>

    <!-- ================================================navigation START=================================================-->

    <ul class="metismenu" id="menu">
        <li>
            <a href="index.php">
                <div class="parent-icon"><i class="bi bi-house-fill"></i></div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-droplet-fill"></i>
                </div>
                <div class="menu-title">Inventory</div>
            </a>
            <ul>
                <li> <a href="all-products.php"><i class="bi bi-circle"></i> Inventory Details </a>
                </li>
                <!--
                <li> <a href="widgets-data-widgets.html"><i class="bi bi-circle"></i> Add Inventory</a>
                </li>
-->
                <li> <a href="products-categories.php"><i class="bi bi-circle"></i>Category</a>
                </li>
                <li> <a href="products-sub-categories.php"><i class="bi bi-circle"></i>Sub-Category</a>
                </li>

            </ul>
        </li>

        <li>
            <a class="" href="settelement.php">
                <div class="parent-icon"><i class="bi bi-award-fill"></i>
                </div>
                <div class="menu-title">Settlement</div>
            </a>
        </li>
        <!--<li>
            <a class="" href="profit.php">
                <div class="parent-icon"><i class="bi bi-award-fill"></i>
                </div>
                <div class="menu-title">Profit</div>
            </a>
        </li>-->        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-cloud-arrow-down-fill"></i>
                </div>
                <div class="menu-title">Orders</div>
            </a>
            <ul>
                <li> <a href="orders.php"><i class="bi bi-circle"></i>All Orders</a>
                </li>
                <li> <a href="custom-orders.php"><i class="bi bi-circle"></i>Custom Orders</a>
                </li>
                <li> <a href="cancel-order.php"><i class="bi bi-circle"></i>Canceled Orders</a>
                </li>
            </ul>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-file-earmark-break-fill"></i>
                </div>
                <div class="menu-title">Tickets &nbsp; &nbsp;
                   <!-- <span class="badge bg-primary">  </span>-->
                </div>
            </a>
            <ul>
               <li> <a href="tickets-pending.php"><i class="bi bi-circle"></i>All tickets</a>
                </li>
            </ul>
        </li>

        <li>
             <a href="notification.php">
                <div class="parent-icon"><i class="bi bi-file-earmark-break-fill"></i>
                </div>
                <div class="menu-title">Notifications &nbsp; &nbsp;
                    <span class="badge bg-danger" id="notifyId">  </span>
                </div>
            </a>

        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-person-fill"></i>
                </div>
                <div class="menu-title">Users &nbsp; &nbsp;
                   <!-- <span class="badge bg-primary">  </span>-->
                </div>
            </a>
            <ul>
           <!--      <li> <a href="users-all.php"><i class="bi bi-circle"></i>All User</a>
                </li>
-->
                <li> <a href="users-buyer-requested.php"><i class="bi bi-circle"></i>Buyer Requested</a>
                </li>
                <li> <a href="approved_buyer.php"><i class="bi bi-circle"></i>Approved Buyer</a>
                </li>
                <li> <a href="approved_seller.php"><i class="bi bi-circle"></i>Approved seller</a>
                </li>

                <li> <a href="users-seller-requested.php"><i class="bi bi-circle"></i>Seller Requested</a>
                </li>
                <li> <a href="users-admin.php"><i class="bi bi-circle"></i>Admin</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-person-fill"></i>
                </div>
                <div class="menu-title">Marketing &nbsp; &nbsp;
                </div>
            </a>
            <ul>
                <li> <a href="referral-code.php"><i class="bi bi-circle"></i>Referral Codes</a>
                </li>
               <!-- <li> <a href="referral-details.php"><i class="bi bi-circle"></i>Referral Details</a>
                </li>-->            </ul>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-file-earmark-break-fill"></i>
                </div>
                <div class="menu-title">Product Requested
                </div>
            </a>
            <ul>
                <li> <a href="requested-product.php"><i class="bi bi-circle"></i>Requested</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="backup.php">
                <div class="parent-icon"><i class="bi bi-file-earmark-break-fill"></i>
                </div>
                <div class="menu-title">Backup</div>
            </a>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-gear"></i>
                </div>
                <div class="menu-title">Settings</div>
            </a>
            <ul>
               <!--  <li> <a href="city.php"><i class="bi bi-circle"></i> City </a>
                <li> <a href="place.php"><i class="bi bi-circle"></i> Place </a>-->                <li> <a href="homepage-slider.php"><i class="bi bi-circle"></i> Banner (Home) </a>
                <!-- <li> <a href="logo.php"><i class="bi bi-circle"></i> Logos </a>
                <li> <a href="contact-details.php"><i class="bi bi-circle"></i> Contact Details </a> </li>-->
                <!-- <li> <a href="home-testimonials.php"><i class="bi bi-circle"></i> Testimonials </a> </li>-->
                <!--  <li> <a href="home-subscriber.php"><i class="bi bi-circle"></i> Subscriber Settings </a> </li>-->
                <!-- <li> <a href="contactus-leads.php"><i class="bi bi-circle"></i> Contact Us Leads </a> </li>-->
 <li> <a href="add_suggestion.php"><i class="bi bi-circle"></i> Add product suggestions</a> </li>
                <li> <a href="subscribers.php"><i class="bi bi-circle"></i> Subscribers List </a> </li>
                <!--                <li> <a href="payment-settings.php"><i class="bi bi-circle"></i> Payment Settings </a> </li>-->
              <!--    <li> <a href="admin-signin.php"><i class="bi bi-circle"></i> Signin </a> </li>
                <li> <a href="admin-signup.php"><i class="bi bi-circle"></i> Signup </a> </li>
                <li> <a href="admin-reset-password.php"><i class="bi bi-circle"></i> Reset Password </a> </li>
                <li> <a href="admin-forgot-password.php"><i class="bi bi-circle"></i> Forgot Password </a> </li>-->            </ul>
        </li>
       <li>
            <a class="" href="logout.php">
                <div class="parent-icon"><i class="bi bi-exclamation-triangle-fill"></i>
                </div>
                <div class="menu-title">Log Out</div>
            </a>
        </li>

    </ul>
    <!--end navigation-->
</aside>


<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">

                    <label class="form-label"> How many days you will go for vacation </label> <br>
                    <div class="input-group">

                        <input class="form-control" placeholder="" type="date">

                        <a href="" class="btn btn-primary">Set</a>
                    </div>

                </form>
                <br>
                <a class="btn btn-danger" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
            </div>
        </div>
    </div>
</div>

    <main class="page-content" id="maincontent">

        <!--breadcrumb-->
        <div id="breadcrumb" class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Orders To be settled</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Orders</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <!--    headend-->

        <div class="container p-4" id="temp0">

            <!--     toggle tab-pills-->
     <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-2">
            <div class="col">
                <div class="card overflow-hidden radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
                            <div class="w-50">
                                <p><img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon" width="50" height="50"> <span style="font-size: 18px;" class="logo-text">Pharmabag<span></p>
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
                            <div class="w-50">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card overflow-hidden radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
                            <div class="w-50">
                                <h6>

<p><?php echo $details->legal_name; ?>
<br>
<?php echo $details->name; ?></p>

<p><?php echo $details->address->street_address . " " . $details->address->street_address2 . " " . $details->address->state . " " . $details->address->city . " " . $details->address->state . " " . $details->address->pincode; ?></p>

<a href="tel:<?php echo $details->phone_no; ?>"><?php echo $details->phone_no; ?></a><br>
<a href="mailto:<?php echo $details->email; ?>"><?php echo $details->email; ?></a>

<p>IFSC code: <strong><?php echo $details->bank_account->ifsc_code; ?></strong></p>

<p>Account No:<strong> <?php echo $details->bank_account->account_no; ?></strong></p>
<p>Account Name:<strong> <?php echo $details->bank_account->acc_name; ?></strong></p>
</h6>

                            </div>
                            <div class="w-50">

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>


            <!--        toggle tab- pending-->

            <div class="tab-content mt-2">
                <div class="tab-pane active" id="pending">

                    <div class=" p-3 .text-nowrap">
<button id="checkboxActive" class="btn btn-primary" >Done selecting</button>
                        <table class="table table-striped " id="orders">
                            <thead class="border-bottom">
                                <tr>
					<th><input type="checkbox" id="CheckBoxHead"  onchange="checkboxChanged()"></th>
                                    <th> Date </th>

                                    <th> Product Name </th>

                                    <th> Order ID </th>
                                    <th> Order Qty </th>
                                    <th> Total Price </th>
                                    <th> Commission(%) </th>
                                    <th> Commission amount </th>
                                    <th> Surcharge (%) </th>
                                    <th> Surcharge amount </th>
                                    <th hidden> Final Payable</th>


                                </tr>
                            </thead>
                            <tbody class="align-items-center" id="order-summary">

<script>
    const getorders =async(ids=[])=>{
var res = await fetch("https://pharmabag.in:3000/admin/seller/payments/<?php echo $_POST['id']; ?>",
{
    "headers" : {"content-type":"application/json","Authorization":"<?php echo $_SESSION['token']; ?>"}





     });


if(res.status!=200){
    alert("You must login as a admin,click ok to login")
    location.href="admin-signin.php"
}
var data= await res.json()
if (ids.length>0) {
    data=data.filter((obj)=>{
    return ids.includes(obj["_id"])
    })
}
var html='';
var model='';
console.log(data.length);
for (var i = 0; i < data.length; i++) {

    html+=`

     <tr>
<td><input type="checkbox" id="checkbox-${i}" class="childCheckbox" data-Oid="${data[i]._id}" onchange="childCheckboxChanged(this)"></td>

                                    <td> ${new Date(data[i].date).toLocaleDateString()} </td>

                                    <td> ${data[i].cart_details.product_name} </td>
                                    <td> ${data[i].order_id} </td>
                                    <td> ${data[i].cart_details.quantity} </td>
                                    <td id="pricevalue${i}"> ₹${data[i].cart_details.pricing.final_order_value} </td>
    <td contenteditable="true" id="percentvalueof${i}" onkeyup="calculate('${i}','${data[i].cart_details.pricing.final_order_value}','${data.length}')" onblur="if(this.value=='') this.style.border='1px splid red'"> 3 </td>

   <td id="commission${i}"> ${(parseFloat(data[i].cart_details.pricing.final_order_value)*parseFloat(document.getElementById("percentvalueof"+i)?.value||3)/100).toFixed(2)} </span> </td>

    <td contenteditable="true" id="surchargepercentvalueof${i}" onkeyup="calculatesurcharge('${i}','${((parseFloat(data[i].cart_details.pricing.final_order_value)*parseFloat(document.getElementById("percentvalueof"+i)?.value||3)/100)*0.18)}','${data.length}',this,'${data[i].cart_details.pricing.final_order_value}')" onblur="if(this.value=='') this.style.border='1px splid red'"> 0 </td>
 <td id="scommission${i}"> ${(((parseFloat(data[i].cart_details.pricing.final_order_value)*parseFloat(document.getElementById("percentvalueof"+i)?.value||3)/100)*0.18)*parseFloat(document.getElementById("surchargepercentvalueof"+i)?.value||0)/100)} </span> </td>


<td hidden id="finalpay${i}"> ${(parseFloat(data[i].cart_details.pricing.final_order_value)-(parseFloat(data[i].cart_details.pricing.final_order_value)*parseFloat(document.getElementById("percentvalueof"+i)?.value||3)/100)-(((parseFloat(data[i].cart_details.pricing.final_order_value)*parseFloat(document.getElementById("surchargepercentvalueof"+i)?.value||3)/100)*0.18)*parseFloat(document.getElementById("surchargepercentvalueof"+i)?.value||0)/100)).toFixed(2)}  </td>



<!--                                    <td>
       <a href="order-details.php?details=${encodeURI(JSON.stringify(data[i]))}" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views">View</a>
                                    </td>-->




                                </tr>

`

document.getElementById("order-summary").innerHTML=html
document.getElementById("modals").innerHTML=model
}

var totalprice=0
var totalcommision=0
var totalsurcharge=0
var finalprice=0
for (var ij = 0; ij < data.length; ij++) {

totalprice+=parseFloat(document.getElementById('pricevalue'+ij).innerText.replace("₹",""))
totalcommision+=parseFloat(document.getElementById('commission'+ij).innerText)
finalprice+=parseFloat(document.getElementById('finalpay'+ij).innerText)
totalsurcharge+=parseFloat(document.getElementById('scommission'+ij).innerText)

}

document.getElementById("totalprice").innerText="₹ "+totalprice.toFixed(2)
document.getElementById("totalcommision").innerText="₹ "+totalcommision.toFixed(2)
document.getElementById("finalprice").innerText="₹ "+(finalprice-((totalprice/100)*2+(totalcommision*0.18)+totalsurcharge)).toFixed(2)
document.getElementById("TCSdd").innerText="₹ "+(totalprice/100).toFixed(2)
document.getElementById("TDSdd").innerText="₹ "+(totalprice/100).toFixed(2)
document.getElementById("gstcommision").innerText="₹ "+(totalcommision*0.18).toFixed(2)
document.getElementById("surcharge").innerText="₹ "+totalsurcharge.toFixed(2)

}
getorders()
var sele=[]
function updatecheckboxActiveButton(){
document.getElementById("checkboxActive").style.display=sele.length>0?"block":"none";
}
function checkboxChanged() {
    sele=[]
   masterCheckbox= document.getElementById("CheckBoxHead")
    const childCheckboxes = document.querySelectorAll('.childCheckbox');
    childCheckboxes.forEach(function(checkbox) {
        checkbox.checked = masterCheckbox.checked;
        if(checkbox.checked){

            sele.push(checkbox.dataset.oid)
        }else{
            sele.splice(sele.indexOf(checkbox.dataset.oid),1)
        }
updatecheckboxActiveButton()

            
    });
}

function childCheckboxChanged(e){
if(e.checked){
sele.push(e.dataset.oid)
    
}else{
    sele.splice(sele.indexOf(e.dataset.oid),1)
}
    updatecheckboxActiveButton()
}


document.getElementById("checkboxActive").onclick=()=>{
getorders(sele);
document.getElementById("checkboxActive").style.display="none"
//updatecheckboxActiveButton()
alert("List updated. to get to previous result just reload the page.")
}

function calculate(i,price,total){

var percent=parseFloat(document.getElementById("percentvalueof"+i).innerText.replace("%",""))/100

document.getElementById("commission"+i).innerText=parseFloat(parseFloat(price)*percent).toFixed(2)
document.getElementById("finalpay"+i).innerText=parseFloat(parseFloat(price)-parseFloat(price)*percent).toFixed(2)
var totalprice=0
var totalcommision=0
var finalprice=0
var totalsurcharge=0
for (var ij = 0; ij < total; ij++) {

totalprice+=parseFloat(document.getElementById('pricevalue'+ij).innerText.replace("₹",""))
totalcommision+=parseFloat(document.getElementById('commission'+ij).innerText)
finalprice+=parseFloat(document.getElementById('finalpay'+ij).innerText)
totalsurcharge+=parseFloat(document.getElementById('scommission'+ij).innerText)

}
document.getElementById("totalprice").innerText="₹ "+totalprice.toFixed(2)
document.getElementById("TCSdd").innerText="₹ "+totalprice/100
document.getElementById("TDSdd").innerText="₹ "+totalprice/100

document.getElementById("totalcommision").innerText="₹ "+totalcommision.toFixed(2)
document.getElementById("gstcommision").innerText="₹ "+(totalcommision*0.18).toFixed(2)
document.getElementById("finalprice").innerText="₹ "+(finalprice-((totalprice/100)*2+(totalcommision*0.18)+totalsurcharge)).toFixed(2)
document.getElementById("surcharge").innerText="₹ "+totalsurcharge.toFixed(2)

}
function calculatesurcharge(i,price,total,event,xp){

var percent=parseFloat(document.getElementById("surchargepercentvalueof"+i).innerText.replace("%",""))/100
console.log(`event.innerText ${event.innerText}`)
if(event.innerText==0){
    console.log("calculating")
    calculate(i,xp,total)
    document.getElementById('scommission'+i).innerText=0
return
}
document.getElementById("scommission"+i).innerText=parseFloat(parseFloat(price)*percent).toFixed(2)
console.log(document.getElementById("finalpay"+i).innerText)
console.log(parseFloat(parseFloat(price)*percent))
document.getElementById("finalpay"+i).innerText=parseFloat(document.getElementById('finalpay'+i).innerText)-parseFloat(parseFloat(price)*percent)?(parseFloat(document.getElementById('finalpay'+i).innerText)-parseFloat(parseFloat(price)*percent)).toFixed(2):document.getElementById("finalpay"+i).innerText
var totalprice=0
var totalcommision=0
var finalprice=0
var totalsurcharge=0
for (var ij = 0; ij < total; ij++) {

totalprice+=parseFloat(document.getElementById('pricevalue'+ij).innerText.replace("₹",""))
totalcommision+=parseFloat(document.getElementById('commission'+ij).innerText)
finalprice+=parseFloat(document.getElementById('finalpay'+ij).innerText)
totalsurcharge+=parseFloat(document.getElementById('scommission'+ij).innerText)

}
document.getElementById("totalprice").innerText="₹ "+totalprice.toFixed(2)
document.getElementById("TCSdd").innerText="₹ "+totalprice/100
document.getElementById("TDSdd").innerText="₹ "+totalprice/100

document.getElementById("totalcommision").innerText="₹ "+totalcommision.toFixed(2)
document.getElementById("gstcommision").innerText="₹ "+(totalcommision*0.18).toFixed(2)
document.getElementById("finalprice").innerText="₹ "+(finalprice-((totalprice/100)*2+(totalcommision*0.18))).toFixed(2)
document.getElementById("surcharge").innerText="₹ "+totalsurcharge.toFixed(2)

}
                                </script>
                            </tbody>
                        </table>
<br>                        <!-- upload invoice modal -->
<br>                        <!-- upload invoice modal -->
<br>                        <!-- upload invoice modal -->

                       <div id="modals"></div>

                    </div>
                </div>
<div style="display: block;font-size: 20px;font-weight: bold;">
    <div style="display: flex;">
        <span style="float: left; width: 77%;">Total Price</span>
        <span style="float: right;" id="totalprice"></span>
    </div>
    <div style="display: flex;">
        <span style="float: left;width: 77%;">TDS @ 1%</span>
        <span style="float: right;" id="TDSdd"></span>
    </div>
        <div style="display: flex;">
        <span style="float: left;width: 77%;">TCS @ 1%</span>
        <span style="float: right;" id="TCSdd"></span>
    </div>
        <div style="display: flex;">
        <span style="float: left;width: 77%;">Total Commission</span>
        <span style="float: right;" id="totalcommision"></span>
    </div>
    <div style="display: flex;">
        <span style="float: left;width: 77%;">18% GST on Commission</span>
        <span style="float: right;" id="gstcommision"></span>
    </div>
       <div style="display: flex;">
        <span style="float: left;width: 77%;">Total Surcharge @ 18% GST</span>
        <span style="float: right;" id="surcharge"></span>
    </div>
    <hr>
     <div style="display: flex;">
        <span style="float: left;width: 75%;">Final Amount to Pay</span>
        <span style="float: right;font-size: 23px;" id="finalprice"></span>
    </div>


</div>





                <!--   ===toggle tabs- closed=====-->

                <div class="tab-pane" id="closed">

                    <div class="table-responsive p-3">
                        <table class="table table-borderless">
                            <thead class="border-bottom">
                                <tr>
                                    <th> Date </th>
                                    <th> Order ID </th>
                                    <th> Amount </th>
                                    <th> Status </th>
                                    <th> Seller Invoice</th>
                                    <th> Actions</th>
                                </tr>
                            </thead>

                            <tbody class="align-items-center" style="justify-content: space-between">
                                <tr>
                                    <td> 21 june, 2022 </td>
                                    <td> #00145 </td>
                                    <td> ₹123364 </td>
                                    <td> Delivered </td>
                                    <td> <button id="invoice-button"> Download &nbsp; <i class="fa fa-download"></i>
                                        </button> </td>
                                    <td>
                                        <div class="table-actions d-flex align-items-center gap-3 fs-6">

                                            <a href="order-details.php" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views">View</a>

                                            <a class="text-info dropdown-toggle" data-bs-toggle="modal" data-bs-target="#share"><i class="fa fa-share-alt"></i></a>

                                        </div>

                                        <!--                                        share modal-->
                                        <div class="modal fade" id="share">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <ul type="none">
                                                            <li>
                                                                share
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
<div class="container mt-4">

            <ul class="pagination ticket-page" style="justify-content: flex-end">

                <li class="page-item page-prev"><a href="#" class="page-link" onclick="markassetteled()"> Mark as settled & Generate Invoice </a></li>


            </ul>

        </div>
    </main>

        <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->

    <!--
    <div class="switcher-body">
        <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi bi-paint-bucket me-0"></i></button>
        <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <h6 class="mb-0">Theme Variation</h6>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1" checked>
                    <label class="form-check-label" for="LightTheme">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
                    <label class="form-check-label" for="DarkTheme">Dark</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3">
                    <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
                </div>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme" value="option3">
                    <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
                </div>
                <hr />
                <h6 class="mb-0">Header Colors</h6>
                <hr />
                <div class="header-colors-indigators">
                    <div class="row row-cols-auto g-3">
                        <div class="col">
                            <div class="indigator headercolor1" id="headercolor1"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor2" id="headercolor2"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor3" id="headercolor3"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor4" id="headercolor4"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor5" id="headercolor5"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor6" id="headercolor6"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor7" id="headercolor7"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor8" id="headercolor8"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

    </div>

    <!-- Bootstrap bundle JS -->
    <script src="/pharmabag-admin/assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="/pharmabag-admin/assets/js/jquery.min.js"></script>
    <script src="/pharmabag-admin/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="/pharmabag-admin/assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="/pharmabag-admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="/pharmabag-admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="/pharmabag-admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/pharmabag-admin/assets/js/pace.min.js"></script>
    <script src="/pharmabag-admin/assets/plugins/chartjs/js/Chart.min.js"></script>
    <script src="/pharmabag-admin/assets/plugins/chartjs/js/Chart.extension.js"></script>
    <script src="/pharmabag-admin/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>

    <script src="/pharmabag-admin/assets/plugins/fancy-file-uploader/jquery.ui.widget.js"></script>
    <script src="/pharmabag-admin/assets/plugins/fancy-file-uploader/jquery.fileupload.js"></script>
    <script src="/pharmabag-admin/assets/plugins/fancy-file-uploader/jquery.iframe-transport.js"></script>
    <script src="/pharmabag-admin/assets/plugins/fancy-file-uploader/jquery.fancy-fileupload.js"></script>
    <script src="/pharmabag-admin/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js"></script>
    <script src="/pharmabag-admin/assets/js/form-file-upload.js"></script>
    <!--app-->
    <script src="/pharmabag-admin/assets/js/app.js"></script>
    <script src="/pharmabag-admin/assets/js/index.js"></script>
    <script src="../js/html2canvas.js"></script>

<script src="https://cdn.jsdelivr.net/npm/table-to-json@1.0.0/lib/jquery.tabletojson.min.js" integrity="sha256-H8xrCe0tZFi/C2CgxkmiGksqVaxhW0PFcUKZJZo1yNU=" crossorigin="anonymous"></script>

    <script>
        new PerfectScrollbar(".best-product");

    </script>


    <script>
        function validate() {
            let chh = document.getElementById("aaa");
            if (chh.checked) {
                alert("You have elected to show your checkout history.");
            }
        }

    </script>

    <script>
        $(document).ready(function() {
            $('input[type="checkbox"]').on('change', function(e) {
                if (e.target.checked) {
                    $('#myModal').modal();
                }
            });

        });


async function accept(id,event){
    var partial=confirm("Do you accept part payment like EMIs?")
 var x=await fetch("https://pharmabag.in:3000/seller/auth/orders/seller/accept/order/"+id,{method:"POST",headers:{"content-type":"application/json","auth-token":localStorage.getItem("auth-token")},body:JSON.stringify({ispartial:partial?1:0})});
 if(x.status==200){
getorders()
    console.log(event.parentElement.parentElement)}
}

async function reject(id,event){
 var x=await fetch("https://pharmabag.in:3000/seller/auth/orders/seller/reject/order/"+id,{method:"GET",headers:{"content-type":"application/json","auth-token":localStorage.getItem("auth-token")}});
 if(x.status==200){
getorders()
    console.log(event.parentElement.parentElement)}


}


    </script>



<script type="text/javascript">





    String.prototype.hashCode = function() {
  var hash = 0,
    i, chr;
  if (this.length === 0) return hash;
  for (i = 0; i < this.length; i++) {
    chr = this.charCodeAt(i);
    hash = ((hash << 5) - hash) + chr;
    hash |= 0; // Convert to 32bit integer
  }
  return hash;
}

var buyer_licences_image=[]

    var imgdata=[]
async function upload(event,id,num){
    var currentform=event.form.id
    imgdata=[]
var files=event.files
for (var i = 0; i < files.length; i++) {
imgdata.push(files[i])
}
for (var i = 0; i < imgdata.length; i++) {
    console.log(imgdata[i])
    var preloadimagecontainer=document.createElement("div")
    preloadimagecontainer.className="preloadimagecontainer"
    event.parentElement.getElementsByClassName("con")[0].appendChild(preloadimagecontainer)
    //=================================
    var progressBar = document.createElement("img");
    progressBar.src=URL.createObjectURL(imgdata[i])
   progressBar.id=imgdata[i].name.hashCode()
    progressBar.setAttribute("height","300")
    preloadimagecontainer.appendChild(progressBar);
    //===================================
    var btn=document.createElement("a")
    btn.className="form-button btn "
    btn.innerText="X"
    btn.setAttribute("onclick",`this.parentElement.remove();imgdata.splice(${i},1,"null")`)
    preloadimagecontainer.appendChild(btn);
    //===================================================
}
event.form.getElementsByClassName("next")[0].addEventListener("click",async ()=>{
    event.form.getElementsByClassName("next")[0].style.display="none"
imgdata=imgdata.filter(element => {return element !='null';})
console.log(imgdata)
    var event2=event
for (var i = 0; i < imgdata.length; i++) {
 event=document.getElementById(`${imgdata[i].name.hashCode()}`)
    console.log(`${URL.createObjectURL(imgdata[i])}`)
        res=await sendFiles(imgdata[i],event)
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
        event2.hidden=true
        buyer_licences_image.push("https://"+res.split("https://")[1])//push to buyer licence image
        btn.style.display="none"

        event.parentElement.getElementsByClassName('progressx')[0].remove()
event.parentElement.innerHTML="<div><hr><br><center><b>image uploaded successfully</b></center><br><hr></div>"

}




 var x=await fetch("https://pharmabag.in:3000/seller/auth/orders/seller/add/invoice/for/order/"+id,{method:"POST",headers:{"content-type":"application/json","auth-token":localStorage.getItem("auth-token")},body:JSON.stringify({invoice:buyer_licences_image})});
 if(x.status==200){
getorders()
    $("#upload-invoice"+num).modal("hide")
    }else if(x.status=401){
getorders()
    $("#upload-invoice"+num).modal("hide")
alert("Payment required to upload invoice")

    }else{getorders()
    $("#upload-invoice"+num).modal("hide")
        alert("Sorry we cannot process your request")
    }


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
var file=files
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



                    request.open('POST', '../upload.php');
                    request.addEventListener('load', function(e) {
                        resolve(request.response)
                    });
                    request.send(data);

                })





//====================================

}






async function markassetteled(event){
if(sele.length<1){
alert("Please select the check boxes which orders to be settled.");
return;
}

document.getElementById("trans").classList.toggle("trans")
document.getElementById("maincontent").style.margin_left=""


html2canvas(document.getElementById("temp0")).then(function(canvas) {
   canvas.toBlob((blob)=>{

const formData = new FormData();

formData.append('file', blob);

const options = {
  method: 'POST',
  body: formData,
  // If you add this, upload won't work
  // headers: {
  //   'Content-Type': 'multipart/form-data',
  // }
};

fetch('https://pharmabag.in/upload.php', options).then((res)=>{return res.text()}).then(async (res)=>{
document.getElementById("trans").innerHTML="invoice generated Successfully...<br>Now Uploading to server..."
var link="https://"+res.split("https://")[1]
var editedtable=JSON.stringify($("#orders").tableToJSON())
 var x=await fetch("https://pharmabag.in:3000/admin/seller/payments/<?php echo $_POST['id']; ?>",{method:"POST",
    headers:{
    "content-type":"application/json",
    "Authorization":"<?php echo $_SESSION['token']; ?>"
},
    body:JSON.stringify({

orders:editedtable,
invoice:link

    })});
 if(x.status==200){

    alert("Successfully settled!")
document.getElementById("trans").classList.toggle("trans")
document.getElementById("maincontent").style.margin_left="260px"
window.print()
location.href="settelement.php"
}else{
    alert("Something went wrong!")
    document.getElementById("trans").classList.toggle("trans")
}



});

},"image/jpeg",
  0.95)
});






}








</script>










    </body>

    </html>
