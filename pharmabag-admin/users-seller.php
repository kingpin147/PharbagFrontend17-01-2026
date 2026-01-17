
<?php
session_start();
session_regenerate_id();
$pcode = '7';
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
   <style>
        /* Style for the popup overlay */
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        /* Style for the popup form */
        .popup {
            z-index: 900;
            background-color: white;
            width: 500px;
            padding: 20px;
            position: absolute;
            top: 50%;
            left: 60vw;
            height: 600px;
            overflow-x: scroll;
            transform: translate(-50%, -50%);
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);
        }

        /* Style for the form fields */
        .popup input[type="text"],
        .popup input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Style for the submit button */
        .popup input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Style for the close button */
        .popup .close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            padding: 20px;
            border-radius: 50%;
            border:1px solid black;
        }
         .popup .close:hover{
            background-color: #5467ED;
         }
    </style>
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


<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form onsubmit="event.preventDefault()" id="vacation">

                    <label class="form-label"><label class="form-label">How many days you will go for vacation <span style="color:#ea2e86">(Don't type date use calendar instead)</span></label> <br> </label> <br>
                    <div class="input-group">

                        <input id="expire_date" class="form-control" placeholder="select from calender -->" type="date" name="expire_date"  onchange="checkdate(this)">

                        <a  class="btn btn-primary" onclick="goVacation()">Set</a>
                    </div>

                </form>

                <br>
                <a class="btn btn-danger" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
            </div>
        </div>
    </div>
</div>


  <div class="popup" id="popupForm" style="display:none;">
        <span class="close" onclick="closePopup()">&times;</span>
        <h2>Edit Seller Profile</h2>
        <form id="sellerForm">

        </form>
      </div>




       <script type="text/javascript">


     function createFormFields(form, data, prefix = "") {
            for (const key in data) {
                if (data.hasOwnProperty(key)) {
                    const value = data[key];
                    const fieldName = prefix + key;
                    if(['_id','date','__v','seller_number_id','status',"seller_id"].includes(fieldName)) continue

                    const label = document.createElement("label");
                    label.setAttribute("for", fieldName);
                    label.textContent = fieldName.charAt(0).toUpperCase() + fieldName.slice(1).replace(/_/g, ' ');

                    const input = document.createElement("input");
                    if(value==''){
                    input.setAttribute("hidden", "true");
                    label.setAttribute("hidden", "true");

                    }
                    input.setAttribute("type", "text");
                    input.setAttribute("id", fieldName);
                    input.setAttribute("name", fieldName);
                    input.value = value;

                    form.appendChild(label);
                    form.appendChild(input);

                    if (typeof value === "object" && !Array.isArray(value)) {
                         input.setAttribute("hidden", "true");
                    label.setAttribute("hidden", "true");
                        // If the value is an object (nested object), recurse
                        createFormFields(form, value, fieldName + ".");
                    }
                }
            }
        }


        async function openPopup() {
            var x=await fetch("https://pharmabag.in:3000/admin/seller/auth/profile/<?php echo $_GET['id']; ?>",{method:"GET",
    headers:{"content-type":"application/json","Authorization":"<?php echo $_SESSION['token']; ?>"}})
let sellerData=(await x.json()).seller_details

      const form = document.getElementById("sellerForm");
            form.innerHTML = ""; // Clear any existing form elements
 createFormFields(form, sellerData);

            // Add the submit button
            const submitButton = document.createElement("input");
            submitButton.setAttribute("type", "submit");
            submitButton.value = "Save";
            form.appendChild(submitButton);


            document.getElementById("popupForm").style.display = "block";


        // Function to handle form submission
        document.getElementById("sellerForm").addEventListener("submit",async function (e) {
            e.preventDefault(); // Prevent the default form submission
            var updatedata=collectFormData(document.getElementById("sellerForm"))
            var x=await fetch("https://pharmabag.in:3000/admin/seller/auth/profile/edit/<?php echo $_GET['id']; ?>",{method:"POST",
    headers:{"content-type":"application/json","Authorization":"<?php echo $_SESSION['token']; ?>"},body:JSON.stringify(updatedata)})
             document.getElementById("popupForm").style.display = "none";
             upload()

});
}

function closePopup(){
            document.getElementById("popupForm").style.display = "none";

}
 function collectFormData(form) {
            const formData = {};
            for (const element of form.elements) {
                if (element.name) {
                    const keys = element.name.split('.');
                    let currentObject = formData;

                    for (let i = 0; i < keys.length - 1; i++) {
                        const key = keys[i];
                        if (!currentObject[key]) {
                            currentObject[key] = {};
                        }
                        currentObject = currentObject[key];
                    }
                    currentObject[keys[keys.length - 1]] = element.value;
                }
            }
            return formData;
        }
    </script>

<script type="text/javascript">

async function upload(){
var x=await fetch("https://pharmabag.in:3000/admin/seller/auth/profile/<?php echo $_GET['id']; ?>",{method:"GET",
    headers:{"content-type":"application/json","Authorization":"<?php echo $_SESSION['token']; ?>"}})
let data=await x.json()

var html=`<div class="col-12 col-lg-5">
                <div class="card shadow-sm border-0 overflow-hidden">
                    <div class="card-body">
                        <div class="profile-avatar text-center">
                            <img src="/pharmabag-admin/assets/images/avatars/avatar-1.png" class="rounded-circle shadow" width="120" height="120" alt="">
                        </div>
                        <div class="d-flex align-items-center justify-content-around mt-3 gap-3">
                            <div class="text-center">
                                <h4 class="mb-0">${data.seller_details.name}</h4>
                                 <p class="mb-0"> Seller number id ${data.seller_details.seller_number_id}
                                   ${data.seller_details.status!=0?"Active":"Pending"}
                                </p>
                                <p class="mt-2 text-secondary">Alternate ID: ${data.seller_details.seller_id}</p>
                                <p class="mt-2 text-secondary">${data.seller_details.legal_name}</p> <!-- business name-->
                            </div>
                        </div>
                        <!--                        business address-->
                        <div class="text-center mt-2">
                            <p class="mb-0 text-secondary">${data.seller_details.address.street_address}</p>
                            <p class="mb-0 text-secondary">${data.seller_details.address.street_address2}</p>
                        </div>
                        <hr>
                        <button onclick="openPopup()" class="btn btn-primary btn-sm">Edit Seller Profile</button>
  <td> <a href="payments.php?id=${data.seller_details.seller_id}&details=${encodeURI(JSON.stringify(data.seller_details))}" class="btn btn-primary btn-sm"> Manage settelments </a> </td>
                            <td> <a href="settelementhistory.php?id=${data.seller_details.seller_id}&details=${encodeURI(JSON.stringify(data.seller_details))}" class="btn btn-primary btn-sm"> View history </a> </td>
                        <div class="text-start">
                            <h5 class="">Business Details</h5>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
<li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                            Phone No.
                            <span class="">${data.seller_details.phone_no}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                            Email
                            <span class="">${data.seller_details.email}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                            PAN No.
                            <span class="">${data.seller_details.gst_pan_response?.gst_number||data.seller_details.gst_pan_response?.pan||data.seller_details.gst_pan_response?.gstin.substring(2,12)}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                            GST No.
                            <span class="">${data.seller_details?.gst_pan_response?.gst_number||data.seller_details.gst_pan_response?.gstin}</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                            Drug LIC 20B License
                            <span class="">${data.seller_details?.licence?.DL20B[0]}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                            Valid Till
                            <span class="">${data.seller_details?.licence?.DL20B[1]}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                            Drug LIC 21B License
                            <span class="">${data.seller_details?.licence?.DL21B[0]}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                            Valid Till
                            <span class="">${data.seller_details?.licence?.DL21B[1]}</span>
                        </li>
                    </ul>
                    <div class="card">
                        <div class="card-body">
                            <div class="text-start">
                                <h5 class="">Bank Details</h5>
                            </div>

                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                                Account Number
                                <span class="">${data.seller_details.bank_account.account_no}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                                IFSC Code.
                                <span class="">${data.seller_details.bank_account.ifsc_code}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                                Branch Name.
                                <span class="">${data.seller_details.bank_account.branch_name}</span>
                            </li>
                             <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                                Bank Name.
                                <span class="">${data.seller_details.bank_account.bank_name}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-7">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="mb-0">${data.seller_details.legal_name} Account Details Images</h5>
                        <hr>
                        <div class="card shadow-none border">
                            <div class="card-header">
                                <h6 class="mb-0">D.L. No. 20B</h6>
                            </div>
                            <div class="card-body">
                                <img src="${data.seller_details?.licence?.DL20B[2]}" alt="" width="100%">
                            </div>
                        </div>
                        <div class="card shadow-none border">
                            <div class="card-header">
                                <h6 class="mb-0">D.L. No. 21B</h6>
                            </div>
                            <div class="card-body">
                                <img src="${data.seller_details?.licence?.DL21B[2]}" alt="" width="100%">
                            </div>
                        </div>
                        <hr>
                        <div class="card shadow-none border">
                            <div class="card-header">
                                <h6 class="mb-0">Cancelled Cheque</h6>
                            </div>
                            <div class="card-body">
                                <img src="${data.seller_details?.bank_account.cancel_cheque}" alt="" width="100%">
                            </div>
                        </div>

                    </div>
                </div>

            </div>`


document.getElementById("menuxx").innerHTML=html
}
upload()

</script>
    <!--start content-->
    <main class="page-content">

        <div class="row" id="menuxx">

        </div>
        <!--end row-->

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

    <script>
        new PerfectScrollbar(".best-product");

    </script>

    <script>


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

    </script>

    </body>

    </html>
