<?php
session_start();
session_regenerate_id();
$pcode='2';
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
<link href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet"/>
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
            <div class="breadcrumb-title pe-3">Inventory</div>

            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Products List</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!--end breadcrumb-->

        <div class="">
            <div class="">
                <!-- <div class="row align-items-center m-0">
                    <div class="col-md-3 col-6 me-auto mb-md-0 mb-3">
                        <select class="form-select">
                            <option>All category</option>
                            <option value="">Ethical</option>
                            <option value="">Generic</option>
                            <option value="">OTC</option>
                            <option value="">Category</option>
                            <option value="">Ayurvedic</option>
                            <option value="">Surgical</option>
                            <option value="">Critical Care</option>
                            <option value="">Others</option>
                        </select>
                    </div>
                    <div class="col-md-3 col-6 me-auto mb-md-0 mb-3">
                        <select class="form-select">
                            <option>All</option>
                            <option>Expired</option>
                            <option>Usable</option>
                            <option>Near Expiry </option>
                        </select>
                    </div> -->
<!--
                    <div class="col-md-3 col-6">
                        <button data-bs-toggle="modal" data-bs-target="#upload" id="theme-button">
                            &#43; Add inventory</button>
                    </div>

                    <div class="col-md-3 col-6">
                    <form class="ms-auto position-relative">
                        <a href="" class="btn btn-primary btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#add-csv">Import CSV</a>
                        <a href="" class="btn btn-success btn-sm mt-2">Export CSV</a>
                    </form>
                    </div>
-->
                    <div class="modal fade" id="upload">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <center>
    <div class="justify-content-center alert " style="background: #EDF0FF;">
        <span style="color: var(--primary)"> Best market rates </span>
        <p class="market-rates">
            <span class=""> By XYZ </span>
            <span class="" style="var(--red)"> Rate is rs 1239 </span>
            <span class="" style="var(--orange)"> By XYZ </span>
            <span class="" style="var(--orange)"> Rate is rs 1239
            </span>
        </p>
    </div>
</center>

<form>
    <div class="row add-inventory">
        <div class="col-sm-12 col-12">
            <label>Product Name <span class="required"> *</span></label>
            <input type="text" class="form-control" required>
        </div>
        <div class="col-sm-6 col-12">
            <label>Company name <span class="required"> *</span> </label>
            <input type="text" class="form-control" required>
        </div>
        <div class="col-sm-6 col-12">
            <label>Chemical combination </label>
            <input type="text" class="form-control" value="Pantoprazole 40 MG+">
        </div>
        <div class="col-sm-4 col-12">
            <label>Country of Origin</label>
            <select class="form-control" id="countries" name="countries">
                <option value=""></option>
            </select>

        </div>
        <div class="col-sm-4 col-6">
            <label>Batch Number </label>
            <input type="text" class="form-control">
        </div>
        <div class="col-sm-4 col-6">
            <label>HSN Number</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-sm-12 col-12">
            <label>Product description</label>
            <textarea class="form-control" placeholder="Full description" rows="2" cols="4"></textarea>
        </div>

        <div class="col-sm-4 col-6">
            <label>Medicine Type <span class="required"> *</span></label>
            <select class="form-select" required>
                <option selected>Select Medicine Type</option>
                <option>Strip</option>
                <option>Bottle</option>
                <option>Tube</option>
                <option>Vial</option>
                <option>PFS</option>
            </select>
        </div>

        <div class="col-sm-4 col-6">
            <label>Category <span class="required"> *</span></label>
            <select class="form-select" required>
                <option selected> Select Category </option>
                <option value="">Ethical</option>
                <option value="">Generic</option>
                <option value="">OTC</option>
                <option value="">Category</option>
                <option value="">Ayurvedic</option>
                <option value="">Surgical</option>
                <option value="">Critical Care</option>
                <option value="">Others</option>
            </select>
        </div>

        <div class="col-sm-4 col-6">
            <label>Sub-Category <span class="required"> *</span></label>
            <select class="form-select" required>
                <option selected>Select Sub-Category </option>
                <option value="">Syrups</option>
                <option value="">Capsules</option>
                <option value="">Creams</option>
                <option value="">Lotions</option>
                <option value="">Ointments</option>
                <option value="">Suppositories</option>
                <option value="">Drops</option>
                <option value="">Inhalers</option>
                <option value="">Injections</option>
                <option value="">Tablets</option>
                <option value="">Powders/Granules</option>

                <option value="" class="divider"></option>

                <option value="">Colon and rectal surgery</option>
                <option value="">General surgery</option>
                <option value="">Gynecologic oncology</option>
                <option value="">Plastic surgery</option>
                <option value="">Neurological surgery</option>
                <option value="">Ophthalmic surgery</option>
                <option value="">Oral and maxillofacial surgery.</option>

                <option value="" class="divider"></option>

                <option value="">Others</option>
            </select>
        </div>

        <div class="col-sm-4 col-6">
            <label>Total Avaliable Quantity <span class="required"> *</span></label>
            <input type="number" class="form-control" required>
        </div>

        <div class="col-sm-4 col-6">
            <label>Min Order Quantity <span class="required"> *</span></label>
            <input type="number" class="form-control" required>
        </div>

        <div class="col-sm-4 col-6">
            <label>Max Order Quantity <span class="required"> *</span></label>
            <input type="number" class="form-control" required>
        </div>

        <div class="col-sm-3 col-6">
            <label>MRP (₹) <span class="required"> *</span></label>
            <input type="number" class="form-control" required>
        </div>

        <div class="col-sm-3 col-6">
            <label>Expiry Date <span class="required"> *</span></label>
            <input type="month" class="form-control" required>
        </div>

        <div class="col-sm-3 col-6">
            <label>GST <span class="required"> *</span></label>
            <select class="form-select" required>
                <option selected>Select GST</option>
                <option>5% GST</option>
                <option>12% GST</option>
                <option>18% GST</option>
            </select>
        </div>

        <div class="col-sm-3 col-6">
            <label>Discount Type <span class="required"> *</span></label>
            <select class="form-select" id="discount" required>
                <option value="0">No Discount</option>
                <option value="1">Discount on PTR only</option>
                <option value="2">Same Product Bonus</option>
                <option value="3">Same Product Bonus Plus Discount</option>
                <option value="4">Different Product Bonus</option>
                <option value="5">Diffarent Product Bonus Plus Discount</option>
            </select>
        </div>

        <div class="col-12">
            <hr>
        </div>

        <div class="col-sm-2 col-6" id="ptr">
            <label>Discount on PTR</label>
            <input type="number" class="form-control" placeholder="PTR %">
        </div>

        <div class="col-sm-2 col-6" id="buy">
            <label>Buy</label>
            <input type="number" class="form-control">
        </div>

        <div class="col-sm-2 col-6" id="get">
            <label>Get</label>
            <input type="number" class="form-control">
        </div>

        <div class="col-sm-3 col-6" id="discount-product">
            <label>Discounted Product</label>
            <select class="form-select">
                <option selected>No Product Selected</option>
                <option>Product 1</option>
                <option>Product 2</option>
                <option>Product 3</option>
                <option>Product 4</option>
            </select>
        </div>

        <div class="col-sm-3 col-6" id="buy">
            <label>Final PTR %</label>
            <input readonly type="number" class="form-control">
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form>
                        <input id="image-uploadify" type="file" accept="image/*,.pdf" multiple>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-12">
            <input type="submit" name="submit" value="submit" class="next  btn btn-primary">
        </div>

    </div>
</form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle table-striped" id="myproductstable">
                        <thead class="table-light">
                            <tr>
                                <th>#id</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Expiry Date</th>
                                <th>Min qty</th>
                                <th>Max qty</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="myproducts">
                           <!--  <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td><span>ESLO 2.5MG T</span></td>
                                <td><span>#00112</span></td>
                                <td><span>12/12.21</span></td>
                                <td><span>100</span></td>
                                <td><span>1000</span></td>
                                <td><span>₹ 50/pc</span></td>
                                <td><span class="badge rounded-pill alert-success">Usable</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">

                                        <a href="product.php" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>

                                        <a href="" class="text-warning dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-pencil-fill"></i></a>

                                    
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#accept-product">Accept</a></li>
                                            <li><a class="dropdown-item" href="#">Pending Review</a></li>
                                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#reject-product">Reject</a></li>
                                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit">Edit</a></li>
                                        </ul>

                                        
                                        <div class="modal fade" id="edit">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <h4>Edit Product</h4>
<hr>

<form>
    <div class="row add-inventory">
        <div class="col-sm-12 col-12">
            <label>Product Name <span class="required"> *</span></label>
            <input type="text" class="form-control" required>
        </div>
        <div class="col-sm-6 col-12">
            <label>Company name <span class="required"> *</span> </label>
            <input type="text" class="form-control" required>
        </div>
        <div class="col-sm-6 col-12">
            <label>Chemical combination </label>
            <input type="text" class="form-control" value="Pantoprazole 40 MG+">
        </div>
        <div class="col-sm-4 col-12">
            <label>Country of Origin</label>
            <select class="form-control" id="countries" name="countries">
                <option value=""></option>
            </select>

        </div>
        <div class="col-sm-4 col-6">
            <label>Batch Number </label>
            <input type="text" class="form-control">
        </div>
        <div class="col-sm-4 col-6">
            <label>HSN Number</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-sm-12 col-12">
            <label>Product description</label>
            <textarea class="form-control" placeholder="Full description" rows="2" cols="4"></textarea>
        </div>

        <div class="col-sm-4 col-6">
            <label>Medicine Type <span class="required"> *</span></label>
            <select class="form-select" required>
                <option selected>Select Medicine Type</option>
                <option>Strip</option>
                <option>Bottle</option>
                <option>Tube</option>
                <option>Vial</option>
                <option>PFS</option>
            </select>
        </div>

        <div class="col-sm-4 col-6">
            <label>Category <span class="required"> *</span></label>
            <select class="form-select" required>
                <option selected> Select Category </option>
                <option value="">Ethical</option>
                <option value="">Generic</option>
                <option value="">OTC</option>
                <option value="">Category</option>
                <option value="">Ayurvedic</option>
                <option value="">Surgical</option>
                <option value="">Critical Care</option>
                <option value="">Others</option>
            </select>
        </div>

        <div class="col-sm-4 col-6">
            <label>Sub-Category <span class="required"> *</span></label>
            <select class="form-select" required>
                <option selected>Select Sub-Category </option>
                <option value="">Syrups</option>
                <option value="">Capsules</option>
                <option value="">Creams</option>
                <option value="">Lotions</option>
                <option value="">Ointments</option>
                <option value="">Suppositories</option>
                <option value="">Drops</option>
                <option value="">Inhalers</option>
                <option value="">Injections</option>
                <option value="">Tablets</option>
                <option value="">Powders/Granules</option>

                <option value="" class="divider"></option>

                <option value="">Colon and rectal surgery</option>
                <option value="">General surgery</option>
                <option value="">Gynecologic oncology</option>
                <option value="">Plastic surgery</option>
                <option value="">Neurological surgery</option>
                <option value="">Ophthalmic surgery</option>
                <option value="">Oral and maxillofacial surgery.</option>

                <option value="" class="divider"></option>

                <option value="">Others</option>
            </select>
        </div>

        <div class="col-sm-4 col-6">
            <label>Total Avaliable Quantity <span class="required"> *</span></label>
            <input type="number" class="form-control" required>
        </div>

        <div class="col-sm-4 col-6">
            <label>Min Order Quantity <span class="required"> *</span></label>
            <input type="number" class="form-control" required>
        </div>

        <div class="col-sm-4 col-6">
            <label>Max Order Quantity <span class="required"> *</span></label>
            <input type="number" class="form-control" required>
        </div>

        <div class="col-sm-3 col-6">
            <label>MRP (₹) <span class="required"> *</span></label>
            <input type="number" class="form-control" required>
        </div>

        <div class="col-sm-3 col-6">
            <label>Expiry Date <span class="required"> *</span></label>
            <input type="month" class="form-control" required>
        </div>

        <div class="col-sm-3 col-6">
            <label>GST <span class="required"> *</span></label>
            <select class="form-select" required>
                <option selected>Select GST</option>
                <option>5% GST</option>
                <option>12% GST</option>
                <option>18% GST</option>
            </select>
        </div>

        <div class="col-sm-3 col-6">
            <label>Discount Type <span class="required"> *</span></label>
            <select class="form-select" id="discount" required>
                <option value="0">No Discount</option>
                <option value="1">Discount on PTR only</option>
                <option value="2">Same Product Bonus</option>
                <option value="3">Same Product Bonus Plus Discount</option>
                <option value="4">Different Product Bonus</option>
                <option value="5">Diffarent Product Bonus Plus Discount</option>
            </select>
        </div>

        <div class="col-12">
            <hr>
        </div>

        <div class="col-sm-2 col-6" id="ptr">
            <label>Discount on PTR</label>
            <input type="number" class="form-control" placeholder="PTR %">
        </div>

        <div class="col-sm-2 col-6" id="buy">
            <label>Buy</label>
            <input type="number" class="form-control">
        </div>

        <div class="col-sm-2 col-6" id="get">
            <label>Get</label>
            <input type="number" class="form-control">
        </div>

        <div class="col-sm-3 col-6" id="discount-product">
            <label>Discounted Product</label>
            <select class="form-select">
                <option selected>No Product Selected</option>
                <option>Product 1</option>
                <option>Product 2</option>
                <option>Product 3</option>
                <option>Product 4</option>
            </select>
        </div>

        <div class="col-sm-3 col-6" id="buy">
            <label>Final PTR %</label>
            <input readonly type="number" class="form-control">
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form>
                        <input id="image-uploadify" type="file" accept="image/*,.pdf" multiple>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-12">
            <input type="submit" name="submit" value="submit" class="next  btn btn-primary">
        </div>

    </div>
</form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="" class="text-danger" data-bs-toggle="modal" data-bs-target="#delete-product"><i class="bi bi-trash-fill"></i></a>

                                    </div>
                                   
                                    <div class="modal fade" id="accept-product">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to accept this product.</p>
                                                    <a href="" class="btn btn-primary">Yes</a>
                                                    <a class="btn btn-danger" class="btn-close" data-bs-dismiss="modal" aria-label="Close">No</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="modal fade" id="reject-product">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to Reject this product.</p>
                                                    <a href="" class="btn btn-primary">Yes</a>
                                                    <a class="btn btn-danger" class="btn-close" data-bs-dismiss="modal" aria-label="Close">No</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                  
                                    <div class="modal fade" id="delete-product">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to delete the product permanenlty.</p>
                                                    <a href="" class="btn btn-primary">Yes</a>
                                                    <a class="btn btn-danger" class="btn-close" data-bs-dismiss="modal" aria-label="Close">No</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
 -->
                        </tbody>
                    </table>
                </div>

               

            </div>
        </div>

    </main>
    <!--end page main-->

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
 <script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js"></script>

    <script>
        new PerfectScrollbar(".best-product")

    </script>

    <script>
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
       
var sclist
var sc=new Promise(function(resolve,reject) {
    var xxx={}
fetch("https://www.julia.sr:3000/user/all/subcategory").then((x)=>{
 return x.json()
    
}).then((subcat)=>{ for (let j = 0; j < subcat.length; j++) {
    xxx[subcat[j]._id]=subcat[j].post_subcategory_name
}})

    fetch("https://www.julia.sr:3000/user/all/category").then((x)=>{
return x.json()
    
}).then((cat)=>{ for (let j = 0; j < cat.length; j++) {
    xxx[cat[j]._id]=cat[j].post_category_name
}})
fetch("https://www.julia.sr:3000/user/all/location").then((x)=>{
return x.json()
    
}).then((cat)=>{ for (let j = 0; j < cat.length; j++) {
    xxx[cat[j]._id]=cat[j].location_name
}})
   

    
resolve(xxx)
    
})

function debounce(cb, interval, immediate) {
                                            var timeout;

                                            return function() {
                                                var context = this,
                                                    args = arguments;
                                                var later = function() {
                                                    timeout = null;
                                                    if (!immediate) cb.apply(context, args);
                                                };

                                                var callNow = immediate && !timeout;

                                                clearTimeout(timeout);
                                                timeout = setTimeout(later, interval);

                                                if (callNow) cb.apply(context, args);
                                            };
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

    </script>
<script>
var previouslyuploaded_image={}
var table;
async function loaddata()
{

var res = await fetch("https://pharmabag.in:3000/admin/get/all/product",{"headers" : {"content-type":"application/json","Authorization":"<?php echo $_SESSION['token'];?>"} });
if(res.status==401){
    alert("You must login as a seller,click ok to login")
    location.href="admin-signin.php"
}
var data= await res.json()
let allproducts = data.map(a => a.product_name);
console.log(allproducts)
productloop=''
for (var i = allproducts.length - 1; i >= 0; i--){
productloop+=`<option ${data[i]?.discount_form_details.producName==allproducts[i]?"selected":" "}>${allproducts[i]}</option>`
}
var html='';

var imgloop=''
for (var i = data.length - 1; i >= 0; i--) {


imgloop=''

    previouslyuploaded_image[i]=data[i].image_list
for (var j = 0; j < data[i].image_list.length; j++) {
   console.log(data[i].image_list[j])
    imgloop+=`

<div class="preloadimagecontainer">
 <img src="${data[i].image_list[j].replace("https://pharmabag03.s3.ap-south-1.amazonaws.com/","https://pharmabag03.s3.ap-south-1.amazonaws.com/small_")}" alt="product image" height="300">
<a class="form-button btn " onclick="this.parentElement.remove();buyer_licences_image.splice(${j},1,'null')">X</a>
</div>

   `
}
html+=`
<tr>
                                <!--<td><span>${data[i]._id}</span></td>-->
                               
                                <td><span>${data[i].categories.category_name}</span></td>
                                <td><span>${data[i].categories.sub_category_name}</span></td>
                                <td><span>${data[i].product_name}</span></td>

                                <td><span>${data[i]?.expire_date?data[i].expire_date.split("T")[0]:" "}</span></td>
                                <td><span>${data[i].min_order_qty}</span></td>
                                <td><span>${data[i].max_order_qty}</span></td>
                                <td><span>₹ ${data[i].product_price}/pc</span></td>
<td>
${
((new Date(data[i]?.expire_date) - new Date())/(1000 * 60 * 60 * 24*30))>3?
`<span class="badge rounded-pill alert-success">Usable</span>`:((new Date() - new Date(data[i]?.expire_date))/(1000 * 60 * 60 * 24*30))<1 ? `<span class="badge rounded-pill alert-warning">Exp. Soon</span>`: `<span class="badge rounded-pill alert-danger">Expired</span>`
}

</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">

                                        <a href="product.php?id=${data[i]._id}" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="View detail"
                                            aria-label="Views"><i class="bi bi-eye-fill"></i></a>

                                        <a href="#" class="text-warning" data-bs-toggle="modal"
                                            data-bs-target="#edit${i}" onclick="changed=false; discountlayout('editporduct${i}','${i}')"><i class="bi bi-pencil-fill"></i></a>

                                        <a class="text-danger" onclick="deleteProduct('${data[i]._id}')"><i class="bi bi-trash-fill"></i></a>

                                    </div>

<!--                                       edit inventory modal-->
<div class="modal fade" id="edit${i}">
                                        <div class="modal-dialog">
                                            <div class="modal-content" style="width:147%;">
                                                <div class="modal-body">
                                                    <h4>Edit Product</h4>
<hr>

<form id="editporduct${i}" data-id="${data[i]._id}" method="POST" onsubmit="event.preventDefault()">
    <div class="row add-inventory">
        <div class="col-sm-12 col-12">
            <label>Product Name <span class="required"> *</span></label>
            <input name="product_name" type="text" class="form-control" required value="${data[i].product_name}">
        </div>
        <div class="col-sm-6 col-12">
            <label>Company name <span class="required"> *</span> </label>
            <input name="company_name" type="text" class="form-control" value="${data[i].company_name}" required>
        </div>
        <div class="col-sm-6 col-12">
            <label>Chemical combination </label>
            <input name="chemical_combination" type="text" class="form-control" value="${data[i].chemical_combination}">
        </div>
        <div hidden class="col-sm-4 col-12">
            <label>Country of Origin</label>
            <select class="form-control countries-drop" id="countries" name="extra_fields2">
                <option value="${data[i].extra_fields[0]}">${data[i].extra_fields[0]}</option>
            </select>

        </div>
        <div hidden class="col-sm-4 col-6">
            <label>Batch Number </label>
            <input name="extra_fields2" type="text" class="form-control" value="${data[i].extra_fields[1]}" >
        </div>
        <div hidden class="col-sm-4 col-6">
            <label>HSN Number</label>
            <input name="extra_fields2" type="text" class="form-control"  value="${data[i].extra_fields[2]}">
        </div>
        <div hidden class="col-sm-12 col-12">
            <label>Product description</label>
            <textarea class="form-control" name="extra_fields2" placeholder="Full description" rows="2" cols="4">${data[i].extra_fields[3]}</textarea>
        </div>
           

        <div hidden class="col-sm-4 col-6">
            <label>Medicine Type <span class="required"> *</span></label>
            <select class="form-select" name="extra_fields2" required>
                <option selected value="${data[i].extra_fields[4]}">${data[i].extra_fields[4]}</option>
                <option value="Strip">Strip</option>
                <option value="Bottle">Bottle</option>
                <option value="Tube">Tube</option>
                <option value="Vial">Vial</option>
                <option value="PFS">PFS</option>
            </select>
        </div>


        <div class="col-sm-4 col-6">
            <label>Category <span class="required"> *</span></label>
            <select class="form-select" name="categories" required>
              <?php echo $html;?>
            <option selected value="${data[i].categories.category_name}">${data[i].categories.category_name}</option>
            </select>

        </div>

        <div class="col-sm-4 col-6">
            <label>Sub-Category <span class="required"> *</span></label>
            <select class="form-select" name="categories" required>
                <?php echo $shtml; ?>
            <option selected value="${data[i].categories.sub_category_name}">${data[i].categories.sub_category_name}</option>
            </select>
        </div>

        <div class="col-sm-4 col-6">
            <label>Total Avaliable Quantity <span class="required"> *</span></label>
            <input name="stock" type="number" class="form-control" required value="${data[i].stock}" >
        </div>

        <div class="col-sm-4 col-6">
            <label>Min Order Quantity <span class="required"> *</span></label>
            <input name="min_order_qty" type="number" value="${data[i].min_order_qty}" class="form-control" required onkeyup='buildeditdata("editporduct${i}")'>
        </div>

        <div class="col-sm-4 col-6">
            <label>Max Order Quantity <span class="required"> *</span></label>
            <input name="max_order_qty" type="number" value="${data[i].max_order_qty}" class="form-control" required onkeyup='buildeditdata("editporduct${i}")'>
        </div>

        <div class="col-sm-3 col-6">
            <label>MRP (₹) <span class="required"> *</span></label>
            <input name="product_price" type="number" step="0.01" value="${data[i].product_price}" class="form-control" required onkeyup='buildeditdata("editporduct${i}")'>
        </div>

        <div class="col-sm-3 col-6">
            <label>Expiry Date <span class="required"> *</span></label>
            <input name="expire_date" type="text" value="${data[i]?.expire_date?data[i].expire_date.split("T")[0].split("-")[1]+"/"+data[i].expire_date.split("T")[0].split("-")[0]:" "}" class="form-control" required onkeyup="addSlashes(this)" maxlength=7 placeholder="mm/yyyy">

        </div>
        <div class="col-sm-4 col-8">
            <label>Expected Delivary Time (in Days)</label>
            <input name="extra_fields2" type="number" value="${data[i].extra_fields[5]}" class="form-control">
        </div>

        <div class="col-sm-3 col-6">
            <label>GST <span class="required"> *</span></label>
            <select name="gstPercentage" class="form-select" required onchange='buildeditdata("editporduct${i}")'>
                <option value="0">0% GST</option>
           
                <option value="5">5% GST</option>
                <option value="12">12% GST</option>
                <option value="18">18% GST</option>
                <option selected value="${data[i].discount_form_details.gstPercentage}">${data[i].discount_form_details.gstPercentage}% GST</option>
               
            </select>
        </div>

        <div class="col-sm-6 col-6">
            <label>Discount Type <span class="required"> *</span></label>
            <select name="" class="form-select" id="discounteditporduct${i}" required onchange='buildeditdata("editporduct${i}")'>
                <option >Select Discount Type</option>

    <option value="0" ${["ptr_discount","same_product_bonus","ptr_discount_and_same_product_bonus","different_product_bonus","different_ptr_discount_and_same_product_bonus",].indexOf(data[i]?.discount_details.type)==-1?'selected':" "}>No Discount</option>
                <option value="1" ${data[i]?.discount_details.type=="ptr_discount"?'selected':" "}>Discount on PTR only</option>
                <option value="2" ${data[i]?.discount_details.type=="same_product_bonus"?'selected':" "}>Same Product Bonus</option>
                <option value="3" ${data[i]?.discount_details.type=="ptr_discount_and_same_product_bonus"?'selected':" "}>Same Product Bonus Plus Discount</option>
                <option value="4" ${data[i]?.discount_details.type=="different_product_bonus"?'selected':" "}>Different Product Bonus</option>
                <option value="5" ${data[i]?.discount_details.type=="different_ptr_discount_and_same_product_bonus"?'selected':" "}>Diffarent Product Bonus Plus Discount</option>
                
            </select>
        </div>

        <div class="col-12">
            <hr>
        </div>

        <div class="col-sm-2 col-6" id="ptreditporduct${i}">
            <label>Discount on PTR</label>
 <input type="number" step="0.01" class="form-control" placeholder="PTR %" onkeyup='buildeditdata("editporduct${i}")' name="discountOnPtrOnlyPercenatge" value="${data[i].discount_form_details.discountOnPtrOnlyPercenatge}">
        </div>

        <div class="col-sm-2 col-6" id="buyeditporduct${i}">
            <label>Buy</label>
            <input type="number" name="buy" value="${data[i]?.discount_form_details.buy}"  class="form-control">
        </div>

        <div class="col-sm-2 col-6" id="geteditporduct${i}">
            <label>Get</label>
            <input type="number"  name="get" value="${data[i]?.discount_form_details.get}" class="form-control">
        </div>

        <div class="col-sm-3 col-6" id="discount-editporduct${i}">
            <label>Discounted Product</label>
            <select name="producName" class="form-select" id="editporductselect" onchange='buildeditdata("editporduct${i}")'>
               ${productloop}
            </select>
        </div>

        <div class="col-sm- col-6" id="finalptr${i}">
            <label>Net Rate </label>
            <input  type="number" step="0.01" class="form-control" id="finalptrshoweditporduct${i}" value="${data[i]?.discount_details.final_ptr}" onchange="changed='editporduct${i}';">
        </div>
<div class="col-sm-3 col-6" id="perptr${i}">
            <label>PTR </label>
            <input  type="number" step="0.01" class="form-control" id="perptrshoweditporduct${i}" value="${data[i]?.discount_details.per_ptr}" onchange="changed='editporduct${i}';alert('You have changed PTR! Please be carefull')">
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
            
<hr/>

                        
<div id="con" class="con" style="display: grid;grid-template-columns: repeat(auto-fit, minmax(200px, 3fr));grid-gap: 20px;margin-top: 20px;">

${imgloop}




</div>
<hr/>
upload new files
<hr/>
                <input id="" onchange="upload(this)" type="file" accept="image/*,.pdf" multiple data-exclude="true">    
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-12">
            <input type="submit" name="submit" id="submitform" value="submit" class="next  btn btn-primary" onclick="editproduct('editporduct${i}','${data[i]._id}')">
        </div>

    </div>
</form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--                                    delete product modal-->
                                    <div class="modal fade" id="delete-product">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to delete the product permanenlty.</p>
                                                    <a href="" class="btn btn-primary">Yes</a>
                                                    <a class="btn btn-danger" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">No</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>

`



}
document.getElementById("myproducts").innerHTML=html

table=$('#myproductstable').DataTable();
 }
 loaddata()                        
      
      </script>                      
      <script>
        var buyer_licences_image=[]

    var imgdata=[]
        document.addEventListener('DOMContentLoaded', () => {

            //const selectDrop = document.querySelector('.countries-drop');
            const selectDrop = document.getElementsByClassName('countries-drop');

            fetch('country.json').then(res => {
                return res.json();
            }).then(data => {
                let output = "";
                data.forEach(country => {
                    output += `<option value="${country.name}" ${country.name=="India"?"selected":" title='country'"}>${country.name}</option>`;
                })

                for (var i = 0; i < selectDrop.length; i++) {
                    selectDrop[i].innerHTML = output;
                }
                   

            }).catch(err => {
                console.log(err);
            })

        });

    </script>

    <script>
        function validate() {
           if(validateform("addporduct")<=3 ){
}else{
    alert("Fill in all details or make sure you uploaded all images")
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

    </script>
<?php include "../functions.php"; ?>
<script type="text/javascript">
async function builddata(formid){
var rawdata=Form2JSON(document.getElementById(formid))
rawdata["image_list"]=JSON.stringify(buyer_licences_image)
rawdata["bulk"]="1"
rawdata["categories"]=JSON.stringify({category_name:rawdata.categories[0],sub_category_name:rawdata.categories[1]})
rawdata["extra_fields"]=JSON.stringify(rawdata["extra_fields2"])
rawdata["discount_form_details"]=JSON.stringify({
gstPercentage:rawdata.gstPercentage,
mrp:rawdata.product_price ,
buy:rawdata.buy,
get:rawdata.get,
producName:rawdata.producName,
maxQtySale:rawdata.max_order_qty,
minQtySale:rawdata.min_order_qty,
discountOnPtrOnlyPercenatge:rawdata.discountOnPtrOnlyPercenatge,
userBuy:rawdata.max_order_qty
})
var data=$("#discount").val();
var x=await fetch(`https://pharmabag.in:3000/get/discount/details/${data}`,{method:"POST",headers:{"content-type":"application/json"},body:rawdata["discount_form_details"]})
var response=await x.json()
if (response.status==false) {
    alert(response.message)
    return
}
rawdata["discount_details"]=JSON.stringify(response)
$("#finalptrshow").val(response.per_ptr)


return rawdata

}
async function buildeditdata(formid){
var rawdata=Form2JSON(document.getElementById(formid))
rawdata["image_list"]=JSON.stringify(buyer_licences_image)
rawdata["bulk"]="1"
rawdata["expire_date"]=rawdata["expire_date"].split("/")[1]+"/"+rawdata["expire_date"].split("/")[0]+"/26"

rawdata["categories"]=JSON.stringify({category_name:rawdata.categories[0],sub_category_name:rawdata.categories[1]})
rawdata["extra_fields"]=JSON.stringify(rawdata["extra_fields2"])
rawdata["discount_form_details"]=JSON.stringify({
gstPercentage:rawdata.gstPercentage,
mrp:rawdata.product_price ,
buy:rawdata.buy,
get:rawdata.get,
producName:rawdata.producName,
maxQtySale:parseInt(`0${rawdata.max_order_qty}`),
minQtySale:parseInt(`0${rawdata.min_order_qty}`),
discountOnPtrOnlyPercenatge:rawdata?.discountOnPtrOnlyPercenatge||0,
userBuy:rawdata.max_order_qty
})
var data=$("#discount"+formid).val();

switch(data) {


case "1":
    document.getElementById("buy"+formid).style.display="none"
    document.getElementById("get"+formid).style.display="none"
    document.getElementById("discount-"+formid).style.display="none"
    break;
case "2":
    document.getElementById("buy"+formid).style.display="block"
    document.getElementById("get"+formid).style.display="block"
    document.getElementById("discount-"+formid).style.display="block"
    break;
case "3":
    document.getElementById("buy"+formid).style.display="block"
    document.getElementById("get"+formid).style.display="block"
    document.getElementById("discount-"+formid).style.display="block"
    break;
case "4":
    document.getElementById("buy"+formid).style.display="block"
    document.getElementById("get"+formid).style.display="block"
    document.getElementById("discount-"+formid).style.display="block"
    break;
case "5":
    document.getElementById("buy"+formid).style.display="block"
    document.getElementById("get"+formid).style.display="block"
    document.getElementById("discount-"+formid).style.display="block"
    break;

default:
    document.getElementById("buy"+formid).style.display="none"
    document.getElementById("get"+formid).style.display="none"
    document.getElementById("discount-"+formid).style.display="none"
    break
} 
var x=await fetch(`https://pharmabag.in:3000/get/discount/details/${data==0?1:data}`,{method:"POST",headers:{"content-type":"application/json"},body:rawdata["discount_form_details"]})
var response=await x.json()
if (response.status==false) {
    alert(response.message)
    return
}
if(changed!=formid){
    console.log($("#finalptrshow"+formid))
$("#finalptrshow"+formid).val(response.final_ptr)
$("#perptrshow"+formid).val(response.per_ptr)

}
response.final_ptr=$("#finalptrshow"+formid).val()
response.per_ptr=$("#perptrshow"+formid).val()

rawdata["discount_details"]=JSON.stringify(response)


return rawdata

}

   var alldata=Form2JSON(document.getElementById("addporduct"))








function discountlayout(formid,nid) {
    buyer_licences_image=[]
 for (var i = 0; i < previouslyuploaded_image[nid].length; i++) {
    x=previouslyuploaded_image[nid][i]
      buyer_licences_image.push(x)
 }
    var data=$("#discount"+formid).val();

switch(data) {
case "1":
    document.getElementById("buy"+formid).style.display="none"
    document.getElementById("get"+formid).style.display="none"
    document.getElementById("discount-"+formid).style.display="none"
    break;
case "2":
    document.getElementById("buy"+formid).style.display="block"
    document.getElementById("get"+formid).style.display="block"
    document.getElementById("discount-"+formid).style.display="block"
    break;
case "3":
    document.getElementById("buy"+formid).style.display="block"
    document.getElementById("get"+formid).style.display="block"
    document.getElementById("discount-"+formid).style.display="block"
    break;
case "4":
    document.getElementById("buy"+formid).style.display="block"
    document.getElementById("get"+formid).style.display="block"
    document.getElementById("discount-"+formid).style.display="block"
    break;
case "5":
    document.getElementById("buy"+formid).style.display="block"
    document.getElementById("get"+formid).style.display="block"
    document.getElementById("discount-"+formid).style.display="block"
    break;

default:
    return res.status(401).json({"Error":"Something Wrong with this requsest try again"})
} 
    
}















async function addproduct(formid){
    console.log("in addporduct")
    console.log(validateform(formid))
if(validateform(formid)<=3 && buyer_licences_image.length>=1 ){
var x=await fetch("https://pharmabag.in:3000/seller/auth/products/add",{
method:"POST",
headers:{
    "content-type":"application/json",
    "Authorization":"<?php echo $_SESSION['token'];?>"
},
body:JSON.stringify(await builddata(formid))

})

if(x.status==200){
alert("You Product is sucessfully uploaded")
document.getElementById(formid).reset()
location.reload()

}

}else{
    alert("Fill in all details or make sure you uploaded all images")
}

}
function editproduct(formid,id){
if(imgdata.length==0){
    updateproduct(formid,id)
}


}

async function updateproduct(formid,id){
buyer_licences_image=buyer_licences_image.filter(element => {return element !='null';})
    console.log("in updateporduct")
    console.log(validateform(formid))
if(validateform(formid)<=4 && buyer_licences_image.length>=1 ){
var x=await fetch("https://pharmabag.in:3000/admin/auth/products/add/update/"+id,{
method:"POST",
headers:{
    "content-type":"application/json",
    "Authorization":"<?php echo $_SESSION['token'];?>"
},
body:JSON.stringify(await buildeditdata(formid))

})

if(x.status==200){
alert("You Product is sucessfully edited")
//document.getElementById(formid).reset()
location.reload()

}

}else{
    alert("Fill in all details or make sure you uploaded all images")
}

}


async function deleteProduct(id){
    if(confirm("Do you really want to delete this product?")){
var x=await fetch("https://pharmabag.in:3000/admin/auth/products/add/delete",{
method:"POST",
headers:{
    "content-type":"application/json",
    "Authorization":"<?php echo $_SESSION['token'];?>"
},
body:JSON.stringify({id:id})

})

if(x.status==200){
loaddata()
alert("You Product is sucessfully deleted")



}
else{
    alert("We cannot delete your product contact admin")
}

}

}


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


async function upload(event){
    var currentform=event.form.id
    var id=event.form.dataset.id
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
    console.log(validateform(currentform))
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
        buyer_licences_image.push("https://"+res.split("https://")[1])
        btn.style.display="none"
        
        event.parentElement.getElementsByClassName('progressx')[0].remove()
event.parentElement.innerHTML="<div><hr><br><center><b>image uploaded successfully</b></center><br><hr></div>"

}



if (currentform.startsWith("edit")) {
    updateproduct(currentform,id)

}else{addproduct(currentform)}

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


</script>                  
    </body>

    </html>
