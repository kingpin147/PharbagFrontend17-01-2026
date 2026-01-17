<!doctype html>
<html lang="en">



<head>
    <title> Seller  </title>

<style type="text/css">
    
.curpoin{
cursor: pointer;


}
</style>
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
<link href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet"/>

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
                <li> <a href="custom-orders.php"><i class="bi bi-circle"></i>Custom Orders</a>
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
document.getElementById("vacationNotice").style.display="block"



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

    <!--start content-->
    <main class="page-content">
<div id="vacationNotice" style="display: none;font-size: 25px;padding: 5px;margin: 5px;background: burlywood;color: black;">
<center>
    <i class="fa fa-exclamation-triangle" aria-hidden="true" style="color: yellow;"></i>You are in Vacation Mode
</center>
    
</div>
        <div class="row row-cols-1 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-4">
            <div class="col">
                <div class="card overflow-hidden radius-10 curpoin" id="activesellingproductscard">
                    <div class="card-body">
                        <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
                            <div class="w-50">
                                <p>Active Selling Products</p>
                                <h4 class="" id="activesellingproducts"></h4>
                            </div>
                            <div class="w-50">
                                <!-- <p class="mb-3 float-end text-success">+ 16% <i class="bi bi-arrow-up"></i></p> -->
                                <div id="chart1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              <div class="col">
                <div class="card overflow-hidden radius-10 curpoin" id="slowmovingproductscard">
                    <div class="card-body">
                        <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
                            <div class="w-50">
                                <p>Slow Moving Product</p>
                                <h4 class="" id="slowmovingproducts"></h4>
                            </div>
                            <div class="w-50">
                                <!-- <p class="mb-3 float-end text-success">+ 24% <i class="bi bi-arrow-up"></i></p> -->
                                <div id="chart3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card overflow-hidden radius-10 curpoin" id="sortexpireproductscard">
                    <div class="card-body">
                        <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
                            <div class="w-50">
                                <p>Short Expire Product</p>
                                <h4 class="" id="sortexpireproducts"></h4>
                            </div>
                            <div class="w-50">
                                <!-- <p class="mb-3 float-end text-danger">- 3.4% <i class="bi bi-arrow-down"></i></p> -->
                                <div id="chart2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
            <div class="col">
                <div class="card overflow-hidden radius-10 curpoin" id="outofstockproductscard">
                    <div class="card-body">
                        <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
                            <div class="w-50">
                                <p>Out of Stock Product</p>
                                <h4 class="" id="outofstockproducts"></h4>
                            </div>
                            <div class="w-50">
                                <!-- <p class="mb-3 float-end text-danger">- 3.4% <i class="bi bi-arrow-down"></i></p> -->
                                <div id="chart4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" onclick="location.href='orders.php'">
                <div class="card overflow-hidden radius-10 curpoin" id="outofstockproductscard">
                    <div class="card-body">
                        <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
                            <div class="w-50">
                                <p>Pending Orders</p>
                                <h4 class="" id="pendingorders"></h4>
                            </div>
                            <div class="w-50">
                                <!-- <p class="mb-3 float-end text-danger">- 3.4% <i class="bi bi-arrow-down"></i></p> -->
                                <div id="chart40"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" onclick="location.href='orders.php'">
                <div class="card overflow-hidden radius-10 curpoin" id="outofstockproductscard">
                    <div class="card-body">
                        <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
                            <div class="w-50">
                                <p>Completed orders</p>
                                <h4 class="" id="completedorders"></h4>
                            </div>
                            <div class="w-50">
                                <!-- <p class="mb-3 float-end text-danger">- 3.4% <i class="bi bi-arrow-down"></i></p> -->
                                <div id="chart41"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" onclick="location.href='orders.php'">
                <div class="card overflow-hidden radius-10 curpoin" id="outofstockproductscard">
                    <div class="card-body">
                        <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
                            <div class="w-50">
                                <p>Rejected Orders</p>
                                <h4 class="" id="rejectedorders"></h4>
                            </div>
                            <div class="w-50">
                                <!-- <p class="mb-3 float-end text-danger">- 3.4% <i class="bi bi-arrow-down"></i></p> -->
                                <div id="chart4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" onclick="location.href='orders.php'">
                <div class="card overflow-hidden radius-10 curpoin" id="outofstockproductscard">
                    <div class="card-body">
                        <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
                            <div class="w-50">
                                <p>New Orders</p>
                                <h4 class="" id="neworders"></h4>
                            </div>
                            <div class="w-50">
                                <!-- <p class="mb-3 float-end text-danger">- 3.4% <i class="bi bi-arrow-down"></i></p> -->
                                <div id="chart4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           

        </div>
        <!--end row-->

        <div class="row">
            <div class="col-12 col-lg-12 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0">Order Overview</h6>
                            <div class="fs-5 ms-auto dropdown">
                                <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">
                                    <input type="month" class="form-control">
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                        <div id="chart5"></div>
                    </div>
                </div>
            </div>

            <!-- products table -->
                   <div class="card-body">
                <div class="table-responsive">
                    <center><h4 id="typeoftable"></h4></center>
                    <table class="table align-middle table-striped" id="myproductstable">
                        <thead class="table-light">
                            <tr>
                                <th>Id</th>
                                
                                <th>Name</th>
                                <th>SubCategory</th>
                                <th>Expiry Date</th>
                                <th>Min qty</th>
                                <th>Max qty</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="myproducts">


 <script>
var previouslyuploaded_image={}
var changed=false;
async function loaddata(listOfIds,typeoftable)
{document.getElementById("myproductstable").scrollIntoView()
document.getElementById("typeoftable").innerText=typeoftable
var res = await fetch("https://pharmabag.in:3000/seller/auth/products/seller",{"headers" : {"content-type":"application/json","auth-token":localStorage.getItem("auth-token")} });
if(res.status==401){
    alert("You must login as a seller,click ok to login")
    location.href="../register.php"
}

var data= await res.json()
data=data.result_products
console.log(data)
let allproducts = data.map(a => a.product_name);
productloop=''
for (var i = allproducts.length - 1; i >= 0; i--){
productloop+=`<option ${data[i]?.discount_details.product_name==allproducts[i]?"selected":" "}>${allproducts[i]}</option>`
}
if(typeoftable=="Slow moving"){
        data = data.filter((elem) =>  !listOfIds.some((ele) => ele._id == elem._id));
    }else{
            data = data.filter((elem) => {
return listOfIds.some((ele) => {
return ele._id == elem._id;
  });
});
    }






console.log(data.length)


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
                                <td><span>${data[i]._id}</span></td>
                               
                                <td><span>${data[i].product_name}</span></td>
                                <td><span>${data[i].categories.sub_category_name}</span></td>
                                <td><span>${data[i]?.expire_date?data[i].expire_date.split("T")[0]:" "}</span></td>
                                
                                <td><span>${data[i].min_order_qty}</span></td>
                                <td><span>${data[i].max_order_qty}</span></td>
                                <td><span>₹ ${data[i].product_price}/pc</span></td>
<td>
${
((new Date(data[i]?.expire_date) - new Date())/(1000 * 60 * 60 * 24*30))>3?
`<span class="badge rounded-pill alert-success">Usable</span>`:((new Date() - new Date(data[i]?.expire_date))/(1000 * 60 * 60 * 24*30))<1 ? `<span class="badge rounded-pill alert-danger">Expired</span>`: `<span class="badge rounded-pill alert-warning">Exp. Soon</span>`
}

</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">

                                        <a href="./product.php?id=${data[i]._id}" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="View detail"
                                            aria-label="Views"><i class="bi bi-eye-fill"></i></a>

                                        <a href="#" class="text-warning" data-bs-toggle="modal"
                                            data-bs-target="#edit${i}" onclick="discountlayout('editporduct${i}','${i}')"><i class="bi bi-pencil-fill"></i></a>

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
            <input name="product_price" type="number" value="${data[i].product_price}" class="form-control" required onkeyup='buildeditdata("editporduct${i}")'>
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
 <input type="number" class="form-control" placeholder="PTR %" onkeyup='buildeditdata("editporduct${i}")' name="discountOnPtrOnlyPercenatge" value="${data[i].discount_form_details.discountOnPtrOnlyPercenatge}">
        </div>

        <div class="col-sm-2 col-6" id="buyeditporduct${i}">
            <label>Buy</label>
            <input type="number" name="buy" value="${data[i]?.discount_form_details.buy}" onkeyup='buildeditdata("editporduct${i}")' class="form-control">
        </div>

        <div class="col-sm-2 col-6" id="geteditporduct${i}">
            <label>Get</label>
            <input type="number" onkeyup='buildeditdata("editporduct${i}")' name="get" value="${data[i]?.discount_form_details.get}" class="form-control">
        </div>

        <div class="col-sm-3 col-6" id="discount-editporduct${i}">
            <label>Discounted Product</label>
            <select name="producName" class="form-select" id="editporductselect" onchange='buildeditdata("editporduct${i}")'>
               ${productloop}
            </select>
        </div>

        <div class="col-sm-3 col-6" id="finalptr${i}">
            <label>Net Rate </label>
            <input  type="number" readonly class="form-control" id="finalptrshoweditporduct${i}" value="${data[i]?.discount_details.final_ptr}" onchange="changed='editporduct${i}';">
        </div>
<div class="col-sm-3 col-6" id="perptr${i}">
            <label>PTR </label>
            <input  type="number" class="form-control" id="perptrshow${i}" value="${data[i]?.discount_details.per_ptr}" onchange="changed='editporduct${i}'; alert('You have changed PTR! Please be carefull')">
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

// $('#myproductstable').DataTable();
 }
                      
      
      </script>                      
                        </tbody>
                    </table>
                </div>

            </div>
            <!--
            <div class="col-12 col-lg-6 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0">By Device</h6>
                            <div class="fs-5 ms-auto dropdown">
                                <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row row-cols-1 row-cols-md-2 g-3 mt-2 align-items-center">
                            <div class="col-lg-7 col-xl-7 col-xxl-8">
                                <div class="by-device-container">
                                    <div class="piechart-legend">
                                        <h2 class="mb-1">85%</h2>
                                        <h6 class="mb-0">Total Visitors</h6>
                                    </div>
                                    <canvas id="chart6"></canvas>
                                </div>
                            </div>
                            <div class="col-lg-5 col-xl-5 col-xxl-4">
                                <div class="">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex align-items-center justify-content-between border-0">
                                            <i class="bi bi-tablet-landscape-fill me-2 text-primary"></i> <span>Tablet - </span> <span>22.5%</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center justify-content-between border-0">
                                            <i class="bi bi-phone-fill me-2 text-primary-2"></i> <span>Mobile - </span> <span>62.3%</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center justify-content-between border-0">
                                            <i class="bi bi-display-fill me-2 text-primary-3"></i> <span>Desktop - </span> <span>15.2%</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
-->
        </div>
        <!--end row-->


        <!--
        <div class="row">
            <div class="col-12 col-lg-6 col-xl-4 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0">Traffic Source</h6>
                            <div class="fs-5 ms-auto dropdown">
                                <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div id="chart7" class=""></div>
                        <div class="traffic-widget">
                            <div class="progress-wrapper mb-3">
                                <p class="mb-1">Social <span class="float-end">8,475</span></p>
                                <div class="progress rounded-0" style="height: 8px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;"></div>
                                </div>
                            </div>
                            <div class="progress-wrapper mb-3">
                                <p class="mb-1">Direct <span class="float-end">7,989</span></p>
                                <div class="progress rounded-0" style="height: 8px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 65%;"></div>
                                </div>
                            </div>
                            <div class="progress-wrapper mb-0">
                                <p class="mb-1">Search <span class="float-end">6,359</span></p>
                                <div class="progress rounded-0" style="height: 8px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="card radius-10 border shadow-none mb-3">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <p class="mb-1">Messages</p>
                                        <h4 class="mb-0 text-primary">289</h4>
                                    </div>
                                    <div class="dropdown ms-auto">
                                        <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots fs-4"></i>
                                        </div>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:;">Action</a>
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="chart8"></div>
                            </div>
                        </div>
                        <div class="card radius-10 border shadow-none mb-3">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <p class="mb-1">Total Posts</p>
                                        <h4 class="mb-0 text-primary">489</h4>
                                    </div>
                                    <div class="dropdown ms-auto">
                                        <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots fs-4"></i>
                                        </div>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:;">Action</a>
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="chart9"></div>
                            </div>
                        </div>
                        <div class="card radius-10 border shadow-none mb-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <p class="mb-1">New Tasks</p>
                                        <h4 class="mb-0 text-primary">149</h4>
                                    </div>
                                    <div class="dropdown ms-auto">
                                        <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots fs-4"></i>
                                        </div>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:;">Action</a>
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="chart10"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-12 col-xl-4 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0">Visitors</h6>
                            <div class="fs-5 ms-auto dropdown">
                                <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div id="chart11" class=""></div>
                        <div class="d-flex align-items-center gap-5 justify-content-center mt-3 p-2 radius-10 border">
                            <div class="text-center">
                                <h3 class="mb-2 text-primary">8,546</h3>
                                <p class="mb-0">New Visitors</p>
                            </div>
                            <div class="border-end sepration"></div>
                            <div class="text-center">
                                <h3 class="mb-2 text-primary-2">3,723</h3>
                                <p class="mb-0">Old Visitors</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
-->
        <!--end row-->
    </main>
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
        // document.addEventListener('DOMContentLoaded', () => {

        //     const selectDrop = document.querySelector('#countries');
        //     // const selectDrop = document.getElementById('countries');

        //     fetch('country.json').then(res => {
        //         return res.json();
        //     }).then(data => {
        //         let output = "";
        //         data.forEach(country => {
        //             output += `<option value="${country.name}">${country.name}</option>`;
        //         })

        //         selectDrop.innerHTML = output;

        //     }).catch(err => {
        //         console.log(err);
        //     })

        // });

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
        function buildGraph(elementIdToWatch){
var data=[0,0,0,0,0,0,0,0,0,0,0,parseInt(document.getElementById(elementIdToWatch).innerText)||0]
if(!Object.keys(localStorage).includes(elementIdToWatch)){
localStorage.setItem(elementIdToWatch,JSON.stringify(data))
return [JSON.parse(localStorage.getItem(elementIdToWatch)),100]
}else{

var currentSavedData=JSON.parse(localStorage.getItem(elementIdToWatch))
var currentData=parseInt(document.getElementById(elementIdToWatch).innerText)
if(currentSavedData.filter(v => v == 0).length==0){
currentSavedData=[0,0,0,0,0,0,0,0,0,0,0,currentData]
}
for (var i = 0; i < currentSavedData.length; i++) {
    if(currentSavedData[i]==0 && !currentSavedData.includes(currentData)){
        currentSavedData[i]=currentData
        break
    }
}
localStorage.setItem(elementIdToWatch,JSON.stringify(currentSavedData))
values=currentSavedData.filter(v=>v!=0)
var increasesx = values.map((currVal, index) => {
    if (index === 0) {
        return;
    }

    var prevValx = values[index - 1];
    return ((currVal - prevValx) / prevValx) * 100;
}).filter(Boolean);




return [JSON.parse(localStorage.getItem(elementIdToWatch)),increasesx]

}



}

        $(document).ready(function() {
            $('input[type="checkbox"]').on('change', function(e) {
                if (e.target.checked) {
                    $('#myModal').modal();
                }
            });
            
        });
(async function x(){

var activesellingproducts = document.getElementById("activesellingproducts")
var sortexpireproducts = document.getElementById("sortexpireproducts")
var slowmovingproducts = document.getElementById("slowmovingproducts")
var outofstockproducts = document.getElementById("outofstockproducts")



var activesellingproductscard = document.getElementById("activesellingproductscard")

var sortexpireproductscard = document.getElementById("sortexpireproductscard")

var slowmovingproductscard = document.getElementById("slowmovingproductscard")

var outofstockproductscard = document.getElementById("outofstockproductscard")






var x=await fetch("https://pharmabag.in:3000/seller/dashboard/details",{method:"GET",
    headers:{"content-type":"application/json","auth-token":localStorage.getItem("auth-token")}})
let data=await x.json()
if(data.seller_vacation==1){
    localStorage.setItem("vacation",1);
document.getElementById("vacationNotice").style.display="block"
document.getElementById('aaa').checked=true;

}else{
       localStorage.setItem("vacation",0);
document.getElementById("vacationNotice").style.display="none"
document.getElementById('aaa').checked=false;
}
activesellingproducts.innerText=data.slowmoving.length
 loaddata(data.slowmoving,"Active selling")  
sortexpireproducts.innerText=data.nearexpirycount.length

slowmovingproducts.innerText=Math.abs(parseInt(data.productcount- data.slowmoving.length))
localStorage.setItem("vacation",data.seller_vacation)
outofstockproducts.innerText=data.outofstockproductcount.length
document.getElementById("pendingorders").innerText=data.pending_orders_count
document.getElementById("completedorders").innerText=data.completed_orders_count
document.getElementById("rejectedorders").innerText=data.rejected_orders_count
document.getElementById("neworders").innerText=data.new_orders_count

activesellingproductscard.addEventListener("click",()=>loaddata(data.slowmoving,"Active selling"))
sortexpireproductscard.addEventListener("click",()=>loaddata(data.nearexpirycount,"Short Expiring and Expired"))
slowmovingproductscard.addEventListener("click",()=>loaddata(data.slowmoving,"Slow moving"))
outofstockproductscard.addEventListener("click",()=>loaddata(data.outofstockproductcount,"Out of Stock"))



        var options = {
        series: [{
            name: "Revenue",
            data: data.dashboard
    }],
        chart: {
            type: "area",
            // width: 130,
            stacked: true,
            height: 280,
            toolbar: {
                show: !1
            },
            zoom: {
                enabled: !1
            },
            dropShadow: {
                enabled: 0,
                top: 3,
                left: 14,
                blur: 4,
                opacity: .12,
                color: "#3461ff"
            },
            sparkline: {
                enabled: !1
            }
        },
        markers: {
            size: 0,
            colors: ["#3461ff"],
            strokeColors: "#fff",
            strokeWidth: 2,
            hover: {
                size: 7
            }
        },
        grid: {
            row: {
                colors: ["transparent", "transparent"],
                opacity: .2
            },
            borderColor: "#f1f1f1"
        },
        plotOptions: {
            bar: {
                horizontal: !1,
                columnWidth: "25%",
                //endingShape: "rounded"
            }
        },
        dataLabels: {
            enabled: !1
        },
        stroke: {
            show: !0,
            width: [2.5],
            //colors: ["#3461ff"],
            curve: "smooth"
        },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'light',
                type: 'vertical',
                shadeIntensity: 0.5,
                gradientToColors: ['#3461ff'],
                inverseColors: false,
                opacityFrom: 0.5,
                opacityTo: 0.1,
                // stops: [0, 100]
            }
        },
        colors: ["#3461ff"],
        xaxis: {
            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
        },
        responsive: [
            {
                breakpoint: 1000,
                options: {
                    chart: {
                        type: "area",
                        // width: 130,
                        stacked: true,
                    }
                }
        }
      ],
        legend: {
            show: false
        },
        tooltip: {
            theme: "dark"
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart5"), options);
    chart.render();
     // chart 1
    var options = {
        series: [{
            name: "Total Orders",
            data: buildGraph("activesellingproducts")[0]
    }],
        chart: {
            type: "line",
            //width: 100%,
            height: 40,
            toolbar: {
                show: !1
            },
            zoom: {
                enabled: !1
            },
            dropShadow: {
                enabled: 0,
                top: 3,
                left: 14,
                blur: 4,
                opacity: .12,
                color: "#3461ff"
            },
            sparkline: {
                enabled: !0
            }
        },
        markers: {
            size: 0,
            colors: ["#3461ff"],
            strokeColors: "#fff",
            strokeWidth: 2,
            hover: {
                size: 7
            }
        },
        plotOptions: {
            bar: {
                horizontal: !1,
                columnWidth: "35%",
                endingShape: "rounded"
            }
        },
        dataLabels: {
            enabled: !1
        },
        stroke: {
            show: !0,
            width: 2.5,
            curve: "smooth"
        },
        colors: ["#3461ff"],
        xaxis: {
            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            theme: "dark",
            fixed: {
                enabled: !1
            },
            x: {
                show: !1
            },
            y: {
                title: {
                    formatter: function (e) {
                        return ""
                    }
                }
            },
            marker: {
                show: !1
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart1"), options);
    chart.render();



    // chart 2
    var options = {
        series: [{
            name: "Total Views",
            data: buildGraph("sortexpireproducts")[0]
    }],
        chart: {
            type: "bar",
            //width: 100%,
            height: 40,
            toolbar: {
                show: !1
            },
            zoom: {
                enabled: !1
            },
            dropShadow: {
                enabled: 0,
                top: 3,
                left: 14,
                blur: 4,
                opacity: .12,
                color: "#3461ff"
            },
            sparkline: {
                enabled: !0
            }
        },
        markers: {
            size: 0,
            colors: ["#3461ff"],
            strokeColors: "#fff",
            strokeWidth: 2,
            hover: {
                size: 7
            }
        },
        plotOptions: {
            bar: {
                horizontal: !1,
                columnWidth: "35%",
                endingShape: "rounded"
            }
        },
        dataLabels: {
            enabled: !1
        },
        stroke: {
            show: !0,
            width: 2.5,
            curve: "smooth"
        },
        colors: ["#3461ff"],
        xaxis: {
            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            theme: "dark",
            fixed: {
                enabled: !1
            },
            x: {
                show: !1
            },
            y: {
                title: {
                    formatter: function (e) {
                        return ""
                    }
                }
            },
            marker: {
                show: !1
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart2"), options);
    chart.render();



    // chart 3
    var options = {
        series: [{
            name: "Revenue",
            data: buildGraph("slowmovingproducts")[0]
    }],
        chart: {
            type: "line",
            //width: 100%,
            height: 40,
            toolbar: {
                show: !1
            },
            zoom: {
                enabled: !1
            },
            dropShadow: {
                enabled: 0,
                top: 3,
                left: 14,
                blur: 4,
                opacity: .12,
                color: "#3461ff"
            },
            sparkline: {
                enabled: !0
            }
        },
        markers: {
            size: 0,
            colors: ["#3461ff"],
            strokeColors: "#fff",
            strokeWidth: 2,
            hover: {
                size: 7
            }
        },
        plotOptions: {
            bar: {
                horizontal: !1,
                columnWidth: "35%",
                endingShape: "rounded"
            }
        },
        dataLabels: {
            enabled: !1
        },
        stroke: {
            show: !0,
            width: 2.5,
            curve: "smooth"
        },
        colors: ["#3461ff"],
        xaxis: {
            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            theme: "dark",
            fixed: {
                enabled: !1
            },
            x: {
                show: !1
            },
            y: {
                title: {
                    formatter: function (e) {
                        return ""
                    }
                }
            },
            marker: {
                show: !1
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart3"), options);
    chart.render();




    // chart 4
    var options = {
        series: [{
            name: "Customers",
            data: buildGraph("outofstockproducts")[0]
    }],
        chart: {
            type: "bar",
            //width: 100%,
            height: 40,
            toolbar: {
                show: !1
            },
            zoom: {
                enabled: !1
            },
            dropShadow: {
                enabled: 0,
                top: 3,
                left: 14,
                blur: 4,
                opacity: .12,
                color: "#3461ff"
            },
            sparkline: {
                enabled: !0
            }
        },
        markers: {
            size: 0,
            colors: ["#3461ff"],
            strokeColors: "#fff",
            strokeWidth: 2,
            hover: {
                size: 7
            }
        },
        plotOptions: {
            bar: {
                horizontal: !1,
                columnWidth: "35%",
                endingShape: "rounded"
            }
        },
        dataLabels: {
            enabled: !1
        },
        stroke: {
            show: !0,
            width: 2.5,
            curve: "smooth"
        },
        colors: ["#3461ff"],
        xaxis: {
            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            theme: "dark",
            fixed: {
                enabled: !1
            },
            x: {
                show: !1
            },
            y: {
                title: {
                    formatter: function (e) {
                        return ""
                    }
                }
            },
            marker: {
                show: !1
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart4"), options);
    chart.render();



    // chart 5

    

    



})()
    </script>
<script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>

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
$("#finalptrshow").val(response.final_ptr)


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
maxQtySale:rawdata.max_order_qty,
minQtySale:rawdata.min_order_qty,
discountOnPtrOnlyPercenatge:rawdata.discountOnPtrOnlyPercenatge,
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
    return res.status(401).json({"Error":"Something Wrong with this requsest try again"})
} 
var x=await fetch(`https://pharmabag.in:3000/get/discount/details/${data}`,{method:"POST",headers:{"content-type":"application/json"},body:rawdata["discount_form_details"]})
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
    "auth-token":localStorage.getItem("auth-token")
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
var x=await fetch("https://pharmabag.in:3000/seller/auth/products/add/update/"+id,{
method:"POST",
headers:{
    "content-type":"application/json",
    "auth-token":localStorage.getItem("auth-token")
},
body:JSON.stringify(await buildeditdata(formid))

})

if(x.status==200){
alert("You Product is successfully edited")
//document.getElementById(formid).reset()
location.reload()

}

}else{
    alert("Fill in all details or make sure you uploaded all images")
}

}


async function deleteProduct(id){
    if(confirm("Do you really want to delete this product?")){
var x=await fetch("https://pharmabag.in:3000/seller/auth/products/add/delete",{
method:"POST",
headers:{
    "content-type":"application/json",
    "auth-token":localStorage.getItem("auth-token")
},
body:JSON.stringify({id:id})

})

if(x.status==200){
loaddata()
alert("You Product is successfully deleted")



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
