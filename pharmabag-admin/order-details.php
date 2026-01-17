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

    </head>

    <body>
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

    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Order</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Order Details</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-header py-3">
                <div class="row g-3 align-items-center">
                    <div class="col-12 col-lg-4 col-md-6 me-auto">
                        <h5 class="mb-1">ID: #00145</h5>
                    </div>
                    <div class="col-12 col-lg-3 col-6 col-md-3 justify-content-end d-flex">
                        <span class="text-end badge bg-info">Order Pending</span>
                    </div>
                    <div class="col-12 col-lg-3 col-6 col-md-3">
                        <button type="button" class="btn btn-primary">Save</button>
                        <a type="button" class="btn btn-secondary" href="invoice.php"><i class="fa fa-download"></i> Invoice </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row row-cols-1 row-cols-xl-2 row-cols-xxl-3">
                    <div class="col">
                        <div class="card border shadow-none radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="icon-box bg-light-primary border-0">
                                        <i class="bi bi-person text-primary"></i>
                                    </div>
                                    <div class="info">
                                        <h6 class="mb-2">Order placed by</h6>
                                        <p class="mb-1">Jhon Deo</p>
                                        <p class="mb-1">M : <span> +91 01234 56789</span></p>
                                        <p class="mb-1">Order ID : <span> #8965327</span></p>
                                        <p class="mb-1">Time : <span> Tue, Apr 15, 2022,</span></p>
                                        <p class="mb-1">Date : <span> 8:44PM</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border shadow-none radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="icon-box bg-light-success border-0">
                                        <i class="bi bi-truck text-success"></i>
                                    </div>
                                    <div class="info">
                                        <h6 class="mb-2">Order info</h6>
                                        <p class="mb-1"><strong>Company :</strong> Appollo Clinic </p>
                                        <p class="mb-1"><strong>PAN No. :</strong> GGXXXXXXXX </p>
                                        <p class="mb-1"><strong>GST No. :</strong> GSTIN******** </p>
                                        <p class="mb-1"><strong>D.L. No. 20B :</strong> LI******** </p>
                                        <p class="mb-1"><strong>D.L. No. 21B :</strong> Li******** </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border shadow-none radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="icon-box bg-light-danger border-0">
                                        <i class="bi bi-geo-alt text-danger"></i>
                                    </div>
                                    <div class="info">
                                        <h6 class="mb-2">Deliver to</h6>
                                        <p class="mb-1"><strong>Address</strong> : Tcs Delta Park,J1-2, Street Number 30, EP Block, <br></p>
                                        <p class="mb-1"><strong>Landmark</strong> TCS Building</p>
                                        <p class="mb-1"><strong>Pin</strong> : 700001</p>
                                        <p class="mb-1"><strong>City</strong> : Kolkata</p>
                                        <p class="mb-1"><strong>State</strong> : West Bengal</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border shadow-none radius-10">
                            <div class="card-header">
                                <div class="text-end">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#bank-info"><i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="icon-box bg-light-warning border-0">
                                        <i class="bi bi-credit-card-fill text-warning"></i>
                                    </div>
                                    <div class="info">
                                        <h6 class="mb-2">Payment info</h6>
                                        <p class="mb-1"><strong>Name on card :</strong> Master Card **** **** 8956</p>
                                        <p class="mb-1"><strong>Account Number :</strong> XXXXXXXXX</p>
                                        <p class="mb-1"><strong>Bank Name :</strong> Swiss Bank</p>
                                        <p class="mb-1"><strong>UPI :</strong> pharma@axis</p>
                                        <p class="mb-1"><strong>Transaction Amount :</strong> ₹ <span> 50000.00 </span></p>
                                        <p class="mb-1"><strong>Transaction Remark :</strong> 123456789</p>
                                        <p class="mb-1"><strong>Transaction Date :</strong> <span>08-12-2022</span> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--end row-->
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="card border shadow-none radius-10">
                            <div class="card-header">
                                <div class="text-start">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#add-bank-info">
                                        <button class="btn btn-primary"> <i class="fa fa-plus"></i> Add Transaction </button>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table align-middle mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Card Name</th>
                                            <th>A/C No. </th>
                                            <th>Bank Name </th>
                                            <th>Upi</th>
                                            <th>Amount</th>
                                            <th>Remark</th>
                                            <th>Date</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Visa </td>
                                            <td>65478452454</td>
                                            <td>State</td>
                                            <td>demo@upi.com</td>
                                            <td>₹ 2000.00</td>
                                            <td> 1545454545 </td>
                                            <td> 02-02-2000 </td>
                                            <td>
                                                <a href="" class="text-primary" data-bs-toggle="modal" data-bs-target="#edt-bank-info" title="edit"><i class="bi bi-pencil"></i></a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="card border shadow-none radius-10">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-middle mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>ID</th>
                                                <th>Product</th>
                                                <th>MRP</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                                <th>View</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#254</td>
                                                <td>
                                                    <div class="orderlist">
                                                        <a class="d-flex align-items-center gap-2">
                                                            <div>
                                                                <P class="mb-0 product-title">Pan D</P>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>₹ 10.00</td>
                                                <td>₹ 200</td>
                                                <td>₹ 2000.00</td>
                                                <td>
                                                    <a href="product.php" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#244</td>
                                                <td>
                                                    <div class="orderlist">
                                                        <a class="d-flex align-items-center gap-2">
                                                            <div>
                                                                <P class="mb-0 product-title">Pan D</P>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>₹ 10.00</td>
                                                <td>₹ 200</td>
                                                <td>₹ 2000.00</td>
                                                <td>
                                                    <a href="product.php" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#292</td>
                                                <td>
                                                    <div class="orderlist">
                                                        <a class="d-flex align-items-center gap-2">
                                                            <div>
                                                                <P class="mb-0 product-title">Pan D</P>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>₹ 10.00</td>
                                                <td>₹ 200</td>
                                                <td>₹ 2000.00</td>
                                                <td>
                                                    <a href="product.php" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card border shadow-none bg-light radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <div>
                                        <h5 class="mb-0">Payment Status</h5>
                                    </div>
                                    <div class="ms-auto">
                                        <button type="button" class="btn alert-success radius-30 px-4">COD</button>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div>
                                        <p class="mb-0">Total Price</p>
                                    </div>
                                    <div class="ms-auto">
                                        <h5 class="mb-0">₹ 2000.00</h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div>
                                        <p class="mb-0">Shipping Price</p>
                                    </div>
                                    <div class="ms-auto">
                                        <h5 class="mb-0">₹ 0.00</h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div>
                                        <p class="mb-0">GST</p>
                                    </div>
                                    <div class="ms-auto">
                                        <h5 class="mb-0">₹ 24.00</h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div>
                                        <p class="mb-0">Discount</p>
                                    </div>
                                    <div class="ms-auto">
                                        <h5 class="mb-0 text-danger">-₹ 36.00</h5>
                                    </div>
                                </div>
                                <div class="">
                                    <hr>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div>
                                        <p class="mb-0">Total</p>
                                    </div>
                                    <div class="ms-auto">
                                        <h5 class="mb-0 text-primary">₹ 1988</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card border shadow-none radius-10">
                            <div class="card-body">
                                <div class="" id="track-order">
                                    <nav class="navmenu">
                                        <ul type="none">
                                            <li> <a href="#" class="active"> Delivery </a>
                                                <p class="clearfix">
                                                    <span class="float-start"> order will be delivered </span> &nbsp;
                                                    <span class="float-end"> 12 July, 2022 </span>
                                                </p>
                                            </li>
                                            <li> <a href="#"> In Transit </a>
                                                <p class="clearfix">
                                                    <span class="float-start">
                                                        In-transit uploaded <br>
                                                        (Kolkata_Entally_C (West Bengal) </span> &nbsp;
                                                    <span class="float-end"> 15 July, 2022 </span>
                                                </p>
                                            </li>
                                            <li> <a href="#"> Confirmed </a>
                                                <p class="clearfix">
                                                    <span class="float-start"> order has been confiremed </span> &nbsp;
                                                    <span class="float-end"> 20 July, 2022 </span>
                                                </p>
                                            </li>
                                            <li> <a href="#"> Ordered </a>
                                                <p class="clearfix">
                                                    <span class="float-start"> order has been placed. </span> &nbsp;
                                                    <span class="float-end"> 20 July, 2022 </span>
                                                </p>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="card border shadow-none radius-10">
                            <div class="card-body">
                                <h6>Invoice from Seller</h6>

                                <div>
                                    <embed src="assets/images/uploads/u1LA9uZn.pdf" width="100%" style="height: calc(400px - 5px);" />
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>

    </main>

    <!--    Payment info Edit modal-->
    
    <div class="modal fade" id="edt-bank-info">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">Edit Payment Details
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">

                        <div class="mb-3">
                            <label>Name of card :</label>
                            <input type="text" class="form-control" value="Master Card **** **** 8956" required>
                        </div>
                        <div class="mb-3">
                            <label>Account Number :</label>
                            <input type="text" class="form-control" value="XXXX****" required>
                        </div>

                        <div class="mb-3">
                            <label>Bank Name :</label>
                            <input type="text" class="form-control" value="Delhi" required>
                        </div>
                        <div class="mb-3">
                            <label>UPI :</label>
                            <input type="text" class="form-control" value="Chota Bheem" required>
                        </div>
                        <div class="mb-3">
                            <label>Transaction Ammount : </label>
                            <input type="text" class="form-control" value="Swiss Bank" required>
                        </div>
                        <div class="mb-3">
                            <label>Transaction Remark : </label>
                            <input type="text" class="form-control" value="Chota Bheem" required>
                        </div>
                        <div class="mb-3">
                            <label>Transaction Date : </label>
                            <input type="date" class="form-control" value="Chota Bheem" required>
                        </div>

                        <input type="submit" value="submit" name="submit" class="form-control btn-primary">

                    </form>
                </div>
            </div>
        </div>
    </div>
    
<!--    add payment details-->
   
   <div class="modal fade" id="add-bank-info">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">Add Payment Details
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">

                        <div class="mb-3">
                            <label>Name of card :</label>
                            <input type="text" class="form-control" value="" placeholder="Master Card **** **** 8956">
                        </div>
                        <div class="mb-3">
                            <label>Account Number :</label>
                            <input type="text" class="form-control" value="" placeholder="XXXX****" >
                        </div>

                        <div class="mb-3">
                            <label>Bank Name :</label>
                            <input type="text" class="form-control" value="" placeholder="Delhi">
                        </div>
                        <div class="mb-3">
                            <label>UPI :</label>
                            <input type="text" class="form-control" value="" placeholder="Chota Bheem" >
                        </div>
                        <div class="mb-3">
                            <label>Transaction Ammount : </label>
                            <input type="text" class="form-control" value="" placeholder="Swiss Bank" >
                        </div>
                        <div class="mb-3">
                            <label>Transaction Remark : </label>
                            <input type="text" class="form-control" value="" placeholder="1254787877" >
                        </div>
                        <div class="mb-3">
                            <label>Transaction Date : </label>
                            <input type="date" class="form-control" value="" placeholder="08-09-2022" >
                        </div>

                        <input type="submit" value="submit" name="submit" class="form-control btn-primary">

                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!--end page main-->
    <!--end wrapper-->
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

    <script src="assets/mainn.js"></script>

    <!--    pdf-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js"></script>

    <script>
        new PerfectScrollbar(".best-product")

    </script>

    <script>
        
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

    </script>

    </body>

    </html>
