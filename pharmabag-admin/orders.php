<?php
session_start();
session_regenerate_id();
$pcode='4';
if (isset($_SESSION["admin_id"]) && isset($_SESSION["role"]) && isset($_SESSION["token"])) {
    
    if (in_array($pcode, str_split($_SESSION["role"]))) {
        echo "<!doctype html><br/> ";


    }else{

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
}
else{
header("location:admin-signin.php");


}



?>
<!DOCTYPE html>
    <html lang="en">

    <head>

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
        <link href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet"/>

 <link rel="stylesheet" href="../vendor/slickslider/slick.min.css">
       

    </head>

    <body>
        <script type="text/javascript">0</script>
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
          <!-- 
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

            </ul>-->
            
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

        <!--<li>
            <a href="backup.php">
                <div class="parent-icon"><i class="bi bi-file-earmark-break-fill"></i>
                </div>
                <div class="menu-title">Backup</div>
            </a>        
        </li>-->

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

    <main class="page-content">

        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Orders</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">All Orders</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <!--    head end-->

        <div class="container p-4">

            <!--     toggle tab-pills-->

            <div class="clearfix">
                <ul class="nav nav-pills float-start" role="tablist" id="nav-pill-background">
                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="pill" href="#pending"> Pending </a> </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="pill" href="#closed"> Closed </a> </li>
                </ul>

                <!-- <p class="float-end"> <button id="filter-button"> Filter <i class="fa-regular fa-grid-2-plus"></i> </button></p>-->
            </div>

            <!--        toggle tab- pending-->
<div class="modal fade" id="upload-invoice">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5>View Invoice</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" id="upload-invoice-body">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
            <div class="tab-content mt-2">
                <div class="tab-pane active" id="pending">

                    <div class="table-responsive p-3">
                        <table class="table table-borderless" id="xxxx">
                            <thead class="border-bottom">
                                <tr>
                                    <th> Date </th>
                                    <th> Product ID </th>
                                    <th> Order ID </th>
                                    <th> Order Qty </th>
                                    <th> Price </th>
                                    <th> Paid </th>
                                    <th> Status </th>
                                    <th> Payments & Invoice</th>
                                    <th>Actions</th>
                                    <th>Delivery Address</th>
                                </tr>
                            </thead>
                             <tbody class="align-items-center" id="order-summary">

<script>
    const getorders=async()=>{

var res = await fetch("https://pharmabag.in:3000/admin/get/all/orders",{"headers" : {"content-type":"application/json","Authorization":"<?php echo $_SESSION['token'];?>"} });
if(res.status==401){
    alert("You must login as a seller,click ok to login")
    location.href="../register.php"
}
if ( $.fn.DataTable.isDataTable('#xxxx') ) {
  $('#xxxx').DataTable().destroy();
}

if ( $.fn.DataTable.isDataTable('#closed_table') ) {
  $('#closed_table').DataTable().destroy();
}
var data= await res.json()
var html=``;
var shtml='';
for (var i=0;  i < data.length;  i++) { 

    if (data[i].order_status=="sucessfull"){

shtml+=`
     <tr>
                                    <td> ${new Date(data[i].date).toLocaleDateString()} </td>
                                    <td> <a title="Product View" href="./product.php?id=${data[i].cart_details.product_id}" class="fas fa-eye" tabindex="0"></a><small>${data[i].cart_details.product_name}</small></td>
                                    <td> <a title="view seller" href="./users-seller.php?id=${data[i].cart_details.seller_id}" class="fas fa-eye" tabindex="0"></a> ${data[i].order_id} </td>
                                    <td> ${data[i].cart_details.quantity} </td>
                                    <td> ₹${data[i].cart_details.pricing.final_order_value} </td>

                                    <td> <span class="pending"> ${data[i].order_status} </span> </td>
                                    <td> <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#upload-invoice" onclick="showpaydetails('${data[i]._id}')">view</a> </td>

                                    
                                  
<!--                                    <td>
       <a href="order-details.php?details=${encodeURI(JSON.stringify(data[i]))}" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views">View</a>
                                    </td>-->
                                </tr>
   
`





    }else{


    html+=` 
     <tr>
                                    <td> ${new Date(data[i].date).toLocaleDateString()} </td>
                                    <td> <a title="Product View" href="./product.php?id=${data[i].cart_details.product_id}" class="fas fa-eye" tabindex="0"></a><small>${data[i].cart_details.product_name}</small></td>
                                    <td> <a title="view seller" href="./users-seller.php?id=${data[i].cart_details.seller_id}" class="fas fa-eye" tabindex="0"></a> ${data[i].order_id} </td>
                                    <td> ${data[i].cart_details.quantity} </td>
                                    <td> ₹${(data[i]?.cart_details?.pricing?.final_order_value)} </td>
<td>  ₹${["PAID","sucessfull"].includes(data[i].order_status)?(data[i]?.cart_details?.pricing?.final_order_value):(data[i].cart_details?.pricing?.final_order_value-data[i].order_payment_details?.due)}  </td>
                                    <td> 
${data[i].order_status=="divided"?`      
             <div class="modal fade" id="breakdown${i}">
                            <div class="modal-dialog bg-light">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5>Divided Order</h5>
                                        
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="row" id="breakdownform${i}" onsubmit="event.preventDefault()">
                                        

                                        </form>

                                           
                                    </div>
                                </div>
                            </div>   
                        </div>
                     `:" "}

                                    <span class="pending" style='color:white;background:${data[i].order_status=="accepted"?"lightgreen"
                                    :data[i].order_status=="Rejected"?"red"
                                    :data[i].order_status=="Placed"?"#FF8338"
                                    :data[i].order_status=="PAID"?"#ff00ef"
                                    :data[i].order_status=="awaiting confirmation"?"#052a59"
                                    :data[i].order_status=="sucessfull"?"green":"#692eea"}'> ${data[i].order_status} </span>${data[i].order_status=="divided"?`<i style="cursor:pointer;" onclick="vewbreakdown('${i}','${data[i]._id}')" data-bs-toggle="modal" data-bs-target="#breakdown${i}" class="fa fa-eye">view</i>`:" "} </td>

                                    <td> <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#upload-invoice" onclick="showpaydetails('${data[i]._id}')">view</a> </td>

                                    
                                    <td> <a class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown">Change status</a>

                                        <ul class="dropdown-menu">
                                             <li style="background:green;color:white;"><a class="dropdown-item" > ${data[i].buyer_details[0].status==1?`Full Advance Payment <a href='users-buyer.php?id=${data[i].buyer_id}' class='btn btn-primary btn-sm'>view</a>`:data[i].buyer_details[0].status==2?`with EMI facility <a href='users-buyer.php?id=${data[i].buyer_id}' class='btn btn-primary btn-sm'>view</a>`:data[i].buyer_details[0].status==3?`With Full Credit facility <a href='users-buyer.php?id=${data[i].buyer_id}' class='btn btn-primary btn-sm'>view</a>`:`Not Recognized <a href='users-buyer.php?id=${data[i].buyer_id}' class='btn btn-primary btn-sm'>view</a>`}</a></li>
                                           <li style="display:${['PAID','Placed'].includes(data[i].order_status)?'none':' '};"><a class="dropdown-item" onclick="change_status('${data[i]._id}','6')">Full Payment Done</a></li>
                                           <li style="display:${['PAID','Placed'].includes(data[i].order_status)?'none':' '};"><a class="dropdown-item" onclick="change_status('${data[i]._id}','7')">Part Payment Done</a></li>
                                                
                                           <li style="display:${['Placed'].includes(data[i].order_status)?'none':' '};"><a class="dropdown-item" onclick="change_status('${data[i]._id}','1')">Order Reached Warehouse</a></li>
                                                <li style="display:${['Placed'].includes(data[i].order_status)?'none':' '};"><a class="dropdown-item" onclick="change_status('${data[i]._id}','2')">Order in Transit</a></li>
                                                <li style="display:${['Placed'].includes(data[i].order_status)?'none':' '};"><a class="dropdown-item" onclick="change_status('${data[i]._id}','3')">Out for Delivery</a></li>
                                                <li style="display:${['Placed'].includes(data[i].order_status)?'none':' '};"><a class="dropdown-item" onclick="change_status('${data[i]._id}','4')">Order Shipped</a></li>
                                                <li style="display:${['Placed'].includes(data[i].order_status)?'none':' '};"><a class="dropdown-item" onclick="change_status('${data[i]._id}','5')">Order Delivered</a></li>
                                                <li><a class="dropdown-item" onclick="change_status('${data[i]._id}','8')">Reject Order</a></li>

                                           
                                        </ul>

                                    </td>
                                    <td>${data[i].bill_details.street_address},${data[i].bill_details.street_address2},${data[i].bill_details.city},${data[i].bill_details.pincode}</td>

<!--                                    <td>
       <a href="order-details.php?details=${encodeURI(JSON.stringify(data[i]))}" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views">View</a>
                                    </td>-->
                                </tr>



   
`

}


}
document.getElementById("order-summary").innerHTML=html
document.getElementById("order-closed").innerHTML=shtml

//$(document).ready(function () {

$('#xxxx').DataTable({
        order: [[2, 'desc']],
       
    } );




$('#closed_table').DataTable({
        order: [[2, 'desc']],
       
    } );



//});

}
window.onload=() =>{
getorders()
}
//getorders()
async function vewbreakdown(id,order_id){

var x=await fetch("https://pharmabag.in:3000/get/milestone/"+order_id,{method:"GET",
    headers:{"content-type":"application/json","auth-token":localStorage.getItem("auth-token")}})
let data=await x.json()


var milestone=``;
var milestonequantity=Object.keys(data.milestone_details)
console.log(milestonequantity)
for (var l = milestonequantity.length - 1; l >= 0; l--) {

milestone+=` <div class="col-12 col-sm-6">
                                                <label>Product Quantity</label>
                                                <input type="number" name="milestone" value="${data.milestone_details[milestonequantity[l]]}" class="form-control" readonly>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <label>Date Range</label>
                                     <input name="Date" type="date"  value="${milestonequantity[l]}" class="form-control" readonly>
                                            </div>`
}


document.getElementById("breakdownform"+id).innerHTML=milestone+`${data.is_partial==1?"<h3>This Product is available for easy EMI </h3>":" "}`










}
                                </script>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--   ===toggle tabs- closed=====-->

                <div class="tab-pane" id="closed">
                    <div class="table-responsive p-3">
                        <table class="table table-borderless" id="closed_table" >
                            <thead class="border-bottom">
                                <tr>
                                     <th> Date </th>
                                    <th> Product ID </th>
                                    <th> Order ID </th>
                                    <th> Order Qty </th>
                                    <th> Price </th>
                                    <th> Status </th>
                                    <th> Payments & Invoice</th>

                                </tr>
                            </thead>
                            <tbody class="align-items-center" style="justify-content: space-between" id="order-closed">
                                <tr>
                                    <td> 21 june, 2022 </td>
                                    <td> #00145 </td>
                                    <td> ₹123364 </td>
                                    <td> Delivered </td>
                                    <td>
                                        <a href="invoice.php" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown"> Download &nbsp; <i class="fa fa-download"></i> </a>

                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Seller Invoice</a></li>
                                            <li><a class="dropdown-item" href="#">Buyer Invoice</a></li>
                                        </ul>
                                    </td>

                                    <td>
                                        <div class="table-actions d-flex align-items-center gap-3 fs-6">

                                            <a href="order-details.php" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>

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
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/js/pace.min.js"></script>
    <script src="assets/plugins/chartjs/js/Chart.min.js"></script>
    <script src="assets/plugins/chartjs/js/Chart.extension.js"></script>
    <script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>

    <script src="assets/plugins/fancy-file-uploader/jquery.ui.widget.js"></script>
    <script src="assets/plugins/fancy-file-uploader/jquery.fileupload.js"></script>
    <script src="assets/plugins/fancy-file-uploader/jquery.iframe-transport.js"></script>
    <script src="assets/plugins/fancy-file-uploader/jquery.fancy-fileupload.js"></script>
    <script src="assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js"></script>
    <script src="assets/js/form-file-upload.js"></script>
    <!--app-->
    <script src="assets/js/app.js"></script>
    <script src="assets/js/index.js"></script>

    <script src="assets/main.js"></script>
<script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>
    <!--    pdf-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js"></script>
<script src="../vendor/slickslider/slick.min.js"></script>
    <script>
        new PerfectScrollbar(".best-product")

    </script>

    <script>
        



async function change_status(id,type){
    

var order_status=""
switch(type) {
case "1":
    order_status="Reached warehouse"
    break;
case "2":
    order_status="Order in Transit"
    break;
case "3":
    order_status="Out for Delivery"
    break;
case "4":
    order_status="Order Shipped"
    break;
case "5":
    order_status="sucessfull"
    break;
case "6":
    order_status="PAID"
    break;
case "7":
    order_status="partial payment"
    var paid_amount=prompt("Enter how much the buyer Paid to you")
default:
    order_status="Transport delay"
} 
if (!confirm("Are you sure ?")){return}

 var x=await fetch("https://pharmabag.in:3000/admin/change/order/status/"+id,{method:"POST",headers:{"content-type":"application/json","Authorization":"<?php echo $_SESSION['token'];?>"},body:JSON.stringify({type:type,paid_amount:paid_amount})});
 if(x.status==200){
getorders()
    console.log(event.parentElement.parentElement)}
}











        $(document).ready(function() {
            $.ajax({
                url: "json/country.json",
                type: "GET",
                success: function(data) {
                    $.each(data, function(key, value) {
                        $("#countries").append("<option>" + value.name + "</option>");
                    });
                }
            });
        });
async function showpaydetails(oid) {
     var x=await fetch("https://pharmabag.in:3000/admin/get/payments/"+oid,{method:"GET",headers:{"content-type":"application/json","Authorization":"<?php echo $_SESSION['token'];?>"}});

if(x.status==200){
    var data=await x.json()
    var imgloop=''
    var dele=''
    for (var i = data.invoice.length - 1; i >= 0; i--) {
        imgloop+=`<li><iframe src="${data.invoice[i]}" width="400px" height="300px"  /></li>`
    }
    if(data.invoice.length>0){
dele=`<button class="btn btn-danger" onclick="deleteInvoice('${oid}')"> Delete Invoice</button>
`
    }
document.getElementById("upload-invoice-body").innerHTML=`
<h3>Full Amount:₹${data.full_ammount}</h3>
<h3>Paid Amount:₹${data.paid_ammount}</h3>
<h3>Part payment Accepted: ${data.is_partial==1?"Yes":"No"}</h3>
${dele}
<h3>Invoice Images:</h3>
<ul class="team-slider slider-arrow">
                            ${imgloop}
                        </ul>

`

$('.team-slider').slick({
    dots: false,
    infinite: false,
    autoplay: false,
    arrows: true,
    speed: 800,
    prevArrow: '<i class="fa fa-arrow-left bamdik"></i>',
    nextArrow: '<i class="fa fa-arrow-right dandik"></i>',
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }
    ]
});


}

}
async function deleteInvoice(oid){
     var x=await fetch("https://pharmabag.in:3000/admin/delete/invoice/"+oid,{method:"POST",headers:{"content-type":"application/json","Authorization":"<?php echo $_SESSION['token'];?>"}});

if(x.status==200){
    alert("invoice successfully deleted")
    $("#upload-invoice").modal("hide")

}else{
    alert("Cannot delete invoice contact developer")
    $("#upload-invoice").modal("hide")
    
}
}

    </script>

    </body>

    </html>
