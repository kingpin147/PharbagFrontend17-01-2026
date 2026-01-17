
<!doctype html>
<html lang="en">


<head>
    <title> Seller  </title>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./assets/images/favicon-32x32.png" type="image/png" />

    <!--plugins-->
    <link href="./assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="./assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="./assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="./assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />

    <!--    <link href="assets/plugins/fancy-file-uploader/fancy_fileupload.css" rel="stylesheet" />-->
    <link href="./assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="./assets/css/style.css" rel="stylesheet" />
    <link href="./assets/css/icons.css" rel="stylesheet">
    <link href="./assets/fonts/fontawesome/fontawesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="./assets/css/pace.min.css" rel="stylesheet" />

    <!--Theme Styles-->
    <link href="./assets/css/dark-theme.css" rel="stylesheet" />
    <link href="./assets/css/light-theme.css" rel="stylesheet" />
    <link href="./assets/css/semi-dark.css" rel="stylesheet" />
    <link href="./assets/css/header-colors.css" rel="stylesheet" />

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
              <img src="./assets/images/avatars/avatar-1.png" class="user-img" alt="">
            </div>
          </a>
          <ul id="afterlogin" class="dropdown-menu dropdown-menu-end">
            <li>
               <a class="dropdown-item" href="#">
                 <div class="d-flex align-items-center">
                    <img src="./assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="54" height="54">
                    <div class="ms-3">
                      <h6 class="mb-0 dropdown-user-name">Jhon Deo</h6>
                      <small class="mb-0 dropdown-user-designation text-secondary">Seller</small>
                      <small class="mb-0 dropdown-user-designation badge alert-success">Verified</small>
                    </div>
                 </div>
               </a>
             </li>
             <li><hr class="dropdown-divider"></li>
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
            <span class="notify-badge" id="notificatiocount"></span>
            <i class="bi bi-bell-fill"></i>
        </div>
    </a>
    <div class="dropdown-menu dropdown-menu-end p-0">
        <div class="p-2 border-bottom m-2">
            <h5 class="h5 mb-0">Notifications</h5>
        </div>
        <div class="header-message-list p-2" id="header-message-list">
            <a class="dropdown-item" href="#">
                <div class="d-flex align-items-center">
                    <img src="./assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="50" height="50">
                    <div class="ms-3 flex-grow-1">
                        <h6 class="mb-0 dropdown-msg-user">Amelio Joly <span class="msg-time float-end text-secondary">1 m</span></h6>
                        <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The standard chunk of lorem...</small>
                    </div>
                </div>
            </a>
        </div>
        <!--<div class="p-2">
            <div>
                <hr class="dropdown-divider">
            </div>
            <a class="dropdown-item" href="tickets-pending.php">
                <div class="text-center">View All Messages</div>
            </a>
        </div>-->
    </div>
</li>
        <li class="nav-item dropdown dropdown-large">
   <!-- <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
        <div class="notifications">
            <span class="notify-badge">8</span>
            <i class="bi bi-bell-fill"></i>
        </div>
    </a>-->
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
            <img src="./assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
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

            </ul>
        </li>

        <li>
            <a class="" href="settelement.php">
                <div class="parent-icon"><i class="bi bi-award-fill"></i>
                </div>
                <div class="menu-title">Settlement</div>
            </a>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-cloud-arrow-down-fill"></i>
                </div>
                <div class="menu-title">Orders</div>
            </a>
            <ul>
                <li> <a href="orders.php"><i class="bi bi-circle"></i>Normal Orders</a>
                </li>
               <li> <a href="orders.php"><i class="bi bi-circle"></i>Custom Orders</a>
                </li>
                <li> <a href="cancel-order.php"><i class="bi bi-circle"></i>Cancelled Orders</a>
                </li>
            </ul>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-file-earmark-break-fill"></i>
                </div>
                <div class="menu-title">Tickets &nbsp; &nbsp;
                    <!-- <span class="badge bg-primary"> 10 </span> -->
                </div>
            </a>
            <ul>
                <li> <a href="tickets-pending.php"><i class="bi bi-circle"></i>My Tickets</a>
                </li>
                
            </ul>
        </li>

      <!--  <li>
            <a href="notification.php">
                <div class="parent-icon"><i class="bi bi-file-earmark-break-fill"></i>
                </div>
                <div class="menu-title">Notifications &nbsp; &nbsp;
                    <span class="badge bg-primary"> 10 </span>
                </div>
            </a>
        </li>-->

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
            <a>
                <div class="parent-icon"><i class="bi bi-collection-play-fill"></i>
                </div>
                <div class="menu-title">
                    <span>Vacation Mode </span>

                    <label class="switch">
                        <input type="checkbox" id="aaa" onclick="vacationcheck(this)">
                        <span class="slider round"></span>
                    </label>

                </div>
            </a>
        </li>

     <li>
            <a class="" onclick="if(confirm('Do you want to logout')){localStorage.removeItem('auth-token');location.reload()}" >
                <div class="parent-icon"><i class="bi bi-exclamation-triangle-fill"></i>
                </div>
                <div class="menu-title">Log Out</div>
            </a>
        </li>
        <li><a href="../register.php">Login as buyer</a></li>

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

                   <label class="form-label">How many days you will go for vacation <span style="color:#ea2e86">(Don't type date use calendar instead)</span></label> <br>
                    <div class="input-group">

                        <input id="expire_date" class="form-control" placeholder="select from calender -->" type="date" name="expire_date"  onchange="checkdate(this)">

                        <a  class="btn btn-primary" onclick="goVacation()">Set</a>
                    </div>

                </form>
                <script type="text/javascript">
                    
                    async function goVacation(){
    if(confirm("Do you really want to go on Vacation?")){
var x=await fetch("https://pharmabag.in:3000/seller/go/for/vacation",{
method:"POST",
headers:{
    "content-type":"application/json",
    "auth-token":localStorage.getItem("auth-token")
},
body:JSON.stringify({expire_date:document.getElementById('expire_date').value})

})

if(x.status==200){
loaddata()
alert("You are On vacation now! enjoy")



}
else{
    alert("Sorry but you cannot go for a vacation now!")
}

}

}
    document.addEventListener('DOMContentLoaded',function() {
        if(parseInt(localStorage.getItem("vacation"))>0){

document.getElementById("aaa").checked=true



        }
            // $('input[type="checkbox"]').on('change', function(e) {
            //     if (e.target.checked) {
            //         $('#myModal').modal();
            //     }
            // });
            
        });

                </script>
                <br>
                <a class="btn btn-danger" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
            </div>
        </div>
    </div>
</div>

    <!--    head-->
    <main class="page-content">
        
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Home</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Settlement</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">

            </div>
        </div>
        

        <div class="container p-4">

            <!--     toggle tab-pills-->

            <div class="clearfix">
                <ul class="nav nav-pills float-start" role="tablist" id="nav-pill-background">
                    
                </ul>

                <!-- <p class="float-end"> <button id="invoice-button"><i class="fa fa-inbox-in"> </i> Bulk Download</button></p> -->
            </div>

            <!--        tab-panes : all-->


            <div class="tab-content">
                <div class="tab-pane active" id="all">
                    <div class="p-3 my-3 details">
                       <!--  <p class="clearfix">
                            <span class="float-start" id="sub-button"> <b>Order ID #451262</b> </span>
                            <span class="float-end text-muted"> Placed on 12/06/2022 </span>
                        </p> -->

                        <div class="table-responsive mt-3">
                    <table class="table align-middle table-striped" id="tickets">
                        <thead class="table-secondary">
                            <tr>
                                    <th> Date </th>
                                    <th> Settelment ID </th>
                                    

                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="ticket-summary">
                            

                        </tbody>

<script>
    var offset=0
    const getorders =async()=>{
var res = await fetch("https://pharmabag.in:3000/seller/payments/history",{"headers" : {"content-type":"application/json","auth-token":localStorage.getItem("auth-token")} });
if(res.status!=200){
    alert("You must login as a seller,click ok to login")
    location.href="../register.php"
}
var data= await res.json()


for (var i=data.length-1;  i  >=0;  i--) { 
    console.log(JSON.parse(data[i].orders)["Product ID"])
    var tr=document.createElement("tr")
     tr.innerHTML=`
                            <td> ${data[i].last_settelment_date} </td>
                            <td> ${data[i]._id} </td>
                           
                            
                            
                             <td> <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#upload-invoice${i}" >view Invoce</a> </td>


<div class="modal fade" id="upload-invoice${i}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5>Invoice</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" id="upload-invoice-body">
                                       <img src="${data[i].invoice.replace("https://pharmabag03.s3.ap-south-1.amazonaws.com/","https://pharmabag03.s3.ap-south-1.amazonaws.com/small_")}">
                                       <a href="${data[i].invoice}" download class="btn btn-primary btn-sm"> Download </a> 

                                    </div>
                                </div>
                            </div>
                        </div>


                        
`
document.getElementById("ticket-summary").appendChild(tr)
}
// document.getElementById("modals").innerHTML=model

offset+=10

}
getorders()


                                </script>

                    </table>
                </div>
                    </div>
<!-- 
                    <div class="p-3 my-3 details">
                        <p class="clearfix">
                            <span class="float-start" id="sub-button"> <b>Order ID #451261 </b> </span>
                            <span class="float-end text-muted"> Placed on 12/06/2022 </span>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th> Order Value </th>
                                        <th> TDS </th>
                                        <th> TCS Commission </th>
                                        <th> Net Amount </th>
                                        <th> Net Amount </th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody class="align-items-center">
                                    <tr>
                                        <td> ₹50000 </td>
                                        <td> ₹500 </td>
                                        <td> 2% </td>
                                        <td> ₹5000 </td>
                                        <td> 2% </td>
                                        <td> <button id="invoice-button"> <i class="fa fa-inbox-in"> </i> Invoice </button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="p-3 my-3 details">
                        <p class="clearfix">
                            <span class="float-start" id="sub-button"> <b>Order ID #451261 </b> </span>
                            <span class="float-end text-muted"> Placed on 12/06/2022 </span>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th> Order Value </th>
                                        <th> TDS </th>
                                        <th> TCS Commission </th>
                                        <th> Net Amount </th>
                                        <th> Net Amount </th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody class="align-items-center">
                                    <tr>
                                        <td> ₹50000 </td>
                                        <td> ₹500 </td>
                                        <td> 2% </td>
                                        <td> ₹5000 </td>
                                        <td> 2% </td>
                                        <td> <button id="invoice-button"> <i class="fa fa-inbox-in"> </i> Invoice </button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="p-3 my-3 details">
                        <p class="clearfix">
                            <span class="float-start" id="sub-button"> <b>Order ID #451261 </b> </span>
                            <span class="float-end text-muted"> Placed on 12/06/2022 </span>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th> Order Value </th>
                                        <th> TDS </th>
                                        <th> TCS Commission </th>
                                        <th> Net Amount </th>
                                        <th> Net Amount </th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody class="align-items-center">
                                    <tr>
                                        <td> ₹50000 </td>
                                        <td> ₹500 </td>
                                        <td> 2% </td>
                                        <td> ₹5000 </td>
                                        <td> 2% </td>
                                        <td> <button id="invoice-button"> <i class="fa fa-inbox-in"> </i> Invoice </button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> -->
                </div>

                <!--            tab panes: remittence-->

               <!--  <div class="tab-pane" id="remittence">


                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th> Sr no.</th>
                                    <th> Date </th>
                                    <th> Order ID </th>
                                    <th> Seller inv </th>
                                    <th> Buyer </th>
                                    <th> Order value </th>
                                    <th> Comm. rate </th>
                                    <th> Comm. amt </th>
                                </tr>
                            </thead>
                            <tbody class="align-items-center">
                                <tr>
                                    <td> 1. </td>
                                    <td> 25th June,21 </td>
                                    <td> OD2000232 </td>
                                    <td> 2064 </td>
                                    <td> Akshaya Pharmacy </td>
                                    <td> 3041.00 </td>
                                    <td> 3% </td>
                                    <td> 91.23 </td>
                                </tr>
                            </tbody>

                            <tbody class="align-items-center">
                                <tr>
                                    <td> 2. </td>
                                    <td> 25th June,21 </td>
                                    <td> OD2000232 </td>
                                    <td> 2064 </td>
                                    <td> Akshaya Pharmacy </td>
                                    <td> 3041.00 </td>
                                    <td> 3% </td>
                                    <td> 91.23 </td>
                                </tr>
                            </tbody>

                            <tbody class="align-items-center">
                                <tr>
                                    <td> 3. </td>
                                    <td> 25th June,21 </td>
                                    <td> OD2000232 </td>
                                    <td> 2064 </td>
                                    <td> Akshaya Pharmacy </td>
                                    <td> 3041.00 </td>
                                    <td> 3% </td>
                                    <td> 91.23 </td>
                                </tr>
                            </tbody>

                            <tbody class="align-items-center">
                                <tr>
                                    <td> 4. </td>
                                    <td> 25th June,21 </td>
                                    <td> OD2000232 </td>
                                    <td> 2064 </td>
                                    <td> Akshaya Pharmacy </td>
                                    <td> 3041.00 </td>
                                    <td> 3% </td>
                                    <td> 91.23 </td>
                                </tr>
                            </tbody>

                            <tbody class="align-items-center">
                                <tr>
                                    <td> 5. </td>
                                    <td> 25th June,21 </td>
                                    <td> OD2000232 </td>
                                    <td> 2064 </td>
                                    <td> Akshaya Pharmacy </td>
                                    <td> 3041.00 </td>
                                    <td> 3% </td>
                                    <td> 91.23 </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div> -->

            </div>

        </div>

        <!--    pagination-->
<!-- 
        <div class="container">

            <ul class="pagination" style="justify-content: flex-end">
                <li class="page-item"><a href="#" class="page-link"> Prev </a></li>
                <li class="page-item"><a href="#" class="page-link"> 1 </a></li>
                <li class="page-item"><a href="#" class="page-link"> 2 </a></li>
                <li class="page-item"><a href="#" class="page-link"> 3 </a></li>
                <li class="page-item"><a href="#" class="page-link"> 4 </a></li>
                <li class="page-item"><a href="#" class="page-link"> Next </a></li>
            </ul>

        </div> -->
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
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="./assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="./assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="./assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="./assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="./assets/js/pace.min.js"></script>
    <script src="./assets/plugins/chartjs/js/Chart.min.js"></script>
    <script src="./assets/plugins/chartjs/js/Chart.extension.js"></script>
    <script src="./assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>

    <script src="./assets/plugins/fancy-file-uploader/jquery.ui.widget.js"></script>
    <script src="./assets/plugins/fancy-file-uploader/jquery.fileupload.js"></script>
    <script src="./assets/plugins/fancy-file-uploader/jquery.iframe-transport.js"></script>
    <script src="./assets/plugins/fancy-file-uploader/jquery.fancy-fileupload.js"></script>
    <script src="./assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js"></script>
    <script src="./assets/js/form-file-upload.js"></script>
    <!--app-->
    <script src="./assets/js/app.js"></script>
    <script src="./assets/js/index.js"></script>

    <script>
        new PerfectScrollbar(".best-product");

    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const selectDrop = document.querySelector('#countries');
            // const selectDrop = document.getElementById('countries');

            fetch('country.json').then(res => {
                return res.json();
            }).then(data => {
                let output = "";
                data.forEach(country => {
                    output += `<option value="${country.name}">${country.name}</option>`;
                })

                selectDrop.innerHTML = output;

            }).catch(err => {
                console.log(err);
            })

        });

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
