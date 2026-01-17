 <?php

require "../vendor/leafs/fetch/src/Fetch.php";
?>
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
     <link href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet"/>

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
            <a class="" onclick="if(confirm('Do you want to logout')){localStorage.removeItem('auth-token');location.reload()}">
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
    async function getinvoices(oid,event){
         var x=await fetch("https://pharmabag.in:3000/seller/get/payments/"+oid,{method:"GET",headers:{"content-type":"application/json","auth-token":localStorage.getItem("auth-token")}});

if(x.status==200){
    var data =await x.json()
    if(data.invoice.length==0){return}
document.getElementById(event).innerHTML=` <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5>Invoice already uploaded</h5><br>

                                       <a href="${data.invoice[0]}" target="_blank" class="btn
                                        btn-primary">View Invoce</a>

                                    </div>
                                    <p>**NOTE uploading invoice means you sent products to Pharmabag</p>
                                    <div class="modal-body">
                                       <b>To change the invoice you uploaded Please contact admin</b>
                                       
                                        <form>
                                         <div class="next btn btn-primary" onclick="location.href='./tickets-pending.php'" >Contact admin via tickets</div>
                                         Or <a href="https://pharmabag.in/contact-us.php" target="_blank"> Contact admin </a>

                                        </form>
                                    </div>
                                </div>
                            </div>`
    }}


</script>
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

        <!--    headend-->

        <div class="container p-4">

            <!--     toggle tab-pills-->

            <div class="clearfix">
                 <ul class="nav nav-pills float-start" role="tablist" id="nav-pill-background">
                    <label>Search Products By status: </label>
                    <select name="month-select" id="month-select" class="monthlist form-control" onchange="table.search(this.value).draw();">
                <option value="" selected>All</option>

                <option value="Placed">Placed</option>

                <option value="accepted">accepted</option>

                <option value="awaiting confirmation">awaiting confirmation</option>

                <option value="way to warehouse">way to warehouse</option>
                <option value="Reached warehouse">Reached warehouse</option>
                <option value="Order in Transit">Order in Transit</option>
                <option value="Out for Delivery">Out for Delivery</option>
                <option value="Order Shipped">Order Shipped</option>
                <option value="Transport delay">Transport delay</option>
                <option value="sucessfull">sucessfull</option>
                </select>
                </ul>


            </div>

            <!--        toggle tab- pending-->

            <div class="tab-content mt-2">
                <div class="tab-pane active" id="pending">

                    <div class="table-responsive p-3">
                        <table class="table " id="orders">
                            <thead class="border-bottom">
                                <tr>
                                    <th> Order Date </th>
                                    <th> Delivery Date(Exp.) </th>

                                    <th> Product </th>
                                    <th> Order ID </th>
                                    <th> Order Qty </th>
                                    <th> Total Price </th>

                                    <th> Status </th>
                                    <th> Upload Invoice</th>
                                    <th> Action</th>

                                </tr>
                            </thead>
                            <tbody class="align-items-center" id="order-summary">

<script>
var table;

       /** we dont need it here in api bu need it on the client side.
             * Creates a json object including fields in the form
             *
             * @param {HTMLElement} form The form element to convert
             * @return {Object} The form data
             */
            const Form2JSON = (form) => {
                const data = new FormData(form);
                return Array.from(data.keys()).reduce((result, key) => {
                    if (result[key]) {
                        result[key] = data.getAll(key)
                        return result
                    }
                    result[key] = data.get(key);
                    return result;
                }, {});
            };


    function arraysum(arr) {
  if(!Array.isArray(arr)) return;
  let totalNumber = 0;
  for (let i=0,l=arr.length; i<l; i++) {
     totalNumber+=parseFloat(arr[i]);
  }
  return totalNumber;
}
function split(x, n)
{
 var nums=[]
// If we cannot split the
// number into exactly 'N' parts
if(x < n)
return [undefined,x]



    // If x % n == 0 then the minimum
    // difference is 0 and all
    // numbers are x / n
    else if (x % n == 0)
    {
        for(let i=0;i<n;i++){
        nums.push((x/n))}
    }
    else
    {

        // upto n-(x % n) the values
        // will be x / n
        // after that the values
        // will be x / n + 1
        let zp = n - (x % n);
        let pp = Math.floor(x/n);
        for(let i=0;i<n;i++)
        {

            if(i>= zp)
            nums.push((pp + 1));
            else
            nums.push(pp);
        }

    }
return nums
}

function zip(arr1,arr2,out={}){

// if(arr1.length>arr2.length){

// [arr1,arr2]=[arr2,arr1]

// }

    arr1.map( (val,idx)=>{ out[val] = arr2[idx]; } );
    return out;
}

function updatemilestone(e,id){
e.style.border=""
document.getElementById("error"+id).innerText=''
    if(parseInt(e.value)>parseInt(e.max)){
        e.value=''
        e.style.border="1px solid red"
        e.placeholder="must be less from total quantity"
    }
    var milestonequantity=split(parseInt(e.dataset.total)-parseInt(e.value),2)

var inputs=Array.from(e.form.elements.milestone ).filter((elm)=>{return elm.dataset.index!=e.dataset.index})
inputs[0].value=milestonequantity[0]
inputs[1].value=milestonequantity[1]

}
function byId(id){
    return document.getElementById(id)
}
function checkdate2(e,id){
document.getElementById("error"+id).innerText=''
if(new Date(e.value)-new Date()<0){e.value='';

e.style.border="1px solid red"
document.getElementById("error"+id).innerText="Dates cannot be in Past or today! enter a future date"


return false}
}





    const getorders =async()=>{
var res = await fetch("https://pharmabag.in:3000/seller/auth/orders/seller/get/all/custom/orders",{"headers" : {"content-type":"application/json","auth-token":localStorage.getItem("auth-token")} });
if(res.status==401){
    alert("You must login as a seller,click ok to login")
    location.href="../register.php"
}
var data= await res.json()
var html='';
var model='';

for (var i=data.length-1;  i  >=0;  i--) {
if(["PAID","partialpayment","full credit"].includes(data[i].order_status)){data[i].order_status="accepted"}
var milestone=``;
var milestonequantity=split(data[i].cart_details.quantity,3)
console.log(milestonequantity)
for (var l = milestonequantity.length - 1; l >= 0; l--) {

milestone+=` <div class="col-12 col-sm-6">
                                                <label>Product Quantity</label>
                                                <input type="number" name="milestone" data-index="${l}" data-total="${data[i].cart_details.quantity}" data-value='${milestonequantity[l]}' value="${milestonequantity[l]}"  max="${data[i].cart_details.quantity}" class="form-control" onclick="this.style.border='';document.getElementById('error${i}').innerText='';" onblur="if(this.value==0||this.value=''){this.value='';byId('dg${i}sa${l}').value='';return}">
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <label>Date Range</label>
                                     <input name="Date" id="dg${i}sa${l}" type="date" data-index="${l}" onkeyup="checkdate2(this,'${i}')" onchange="checkdate2(this,'${i}')" onclick="this.style.border='';document.getElementById('error${i}').innerText='';" class="form-control">
                                            </div>`
}




     model+=`<div class="modal fade" id="upload-invoice${i}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5>Upload Invoice</h5><br>

                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                    </div>
                                    <p>**NOTE uploading invoice means you sent products to Pharmabag</p>
                                    <div class="modal-body">
                                        <form>
                                            <input id="" onchange="upload(this,'${data[i]._id}','${i}')" type="file"  multiple>
                        <div id="con" class="con" style="display: grid;grid-template-columns: repeat(auto-fit, minmax(200px, 3fr));grid-gap: 20px;margin-top: 20px;">


</div>
                                            <br>
                                            <div class="next btn btn-primary">Upload</div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

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

                        <div class="modal fade" id="replyorder${i}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5>Divide Order (total '${data[i].cart_details.quantity}')</h5>
                                        <small id="error${i}"></small>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="row" id="setmilestoneform${i}" onsubmit="event.preventDefault()">
                                        ${milestone}


                                            <input type="submit" name="submit" value="submit" class="next mt-3  btn btn-primary" onclick="setmilestone('${i}','${data[i]._id}','${data[i].cart_details.quantity}')">

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>`

    html+=`

     <tr>
                                    <td> ${new Date(data[i].date).toLocaleDateString()} </td>
                                    <td> ${new Date(data[i].cart_details.expectedDelivaryCustomOrder)< new Date()?new Date(data[i].cart_details.expectedDelivaryNormalOrder).toLocaleDateString():new Date(data[i].cart_details.expectedDelivaryCustomOrder).toLocaleDateString()} </td>
                                    <td data-name='${data[i].cart_details.product_name}' data-toggle="popover" data-img='${data[i].cart_details.product_image.replace("https://pharmabag03.s3.ap-south-1.amazonaws.com/","https://pharmabag03.s3.ap-south-1.amazonaws.com/small_")}'> <a title="Product View" href="./product.php?id=${data[i].cart_details.product_id}" class="fas fa-eye" tabindex="0"></a><small>${data[i].cart_details.product_name}</small></td>
                                    <td> ${data[i].order_id} </td>
                                    <td> ${data[i].cart_details.quantity} </td>
                                    <td> ₹${data[i].cart_details.pricing.final_order_value} </td>


                                    <td> <span class="pending" style='color:white;background:${data[i].order_status=="accepted"?"lightgreen"
                                    :data[i].order_status=="Rejected"?"red"
                                    :data[i].order_status=="Placed"?"#FF8338"
                                    :data[i].order_status=="awaiting confirmation"?"#052a59"
                                    :data[i].order_status=="sucessfull"?"green":"#692eea"}'> ${data[i].order_status} </span> ${data[i].order_status=="divided"?`<i style="cursor:pointer;" onclick="vewbreakdown('${i}','${data[i]._id}')" data-bs-toggle="modal" data-bs-target="#breakdown${i}" class="fa fa-eye">view</i>`:" "}</td>
                                    <td>

                                     <a onclick="getinvoices('${data[i]._id}','upload-invoice${i}')" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#upload-invoice${i}">Upload</a> 
                                     </td>


                                    <td> <a class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown">Reply</a>

                                        <ul class="dropdown-menu">
                                           ${data[i].order_status=="Placed"?
        `<li><a class="dropdown-item" onclick="accept('${data[i]._id}',this)">Accept</a></li><li><a href="" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#replyorder${i}">Set Milestone</a></li><li><a class="dropdown-item" onclick="reject('${data[i]._id}',this)">Reject</a></li>`:`<li><a href="tickets-pending.php" class="dropdown-item">contact Admin</a></li>`}
                                        </ul>

                                    </td>

<!--                                    <td>
       <a href="order-details.php?details=${encodeURI(JSON.stringify(data[i]))}" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views">View</a>
                                    </td>-->




                                </tr>

`
}
document.getElementById("order-summary").innerHTML=html
document.getElementById("modals").innerHTML=model
table=$('#orders').DataTable({

        columnDefs: [
    {
      targets: [1], // Replace 0 with the column index where your dates are
      type: 'date-in', // Specify the date format (European format in this example)
    }
  ],order: [[3, 'desc']]

    });



// $(document).ready(function(){
//      $('[data-toggle="popover"]').popover({
//           //trigger: 'focus',
//           trigger: 'hover',
//           html: true,
//           content: function () {
//                 return `<h3>${$(this).data('name')}</h3><img class="img-fluid" src="`+$(this).data('img') + '" />';
//           },
//           title:""
//     })
// });
}
getorders()
async function setmilestone(formid,oid,qty){


var temp0=document.getElementById("setmilestoneform"+formid)
num=Array.from(temp0.elements ).filter((cc)=>{return cc.type=="number"})
date=Array.from(temp0.elements ).filter((cc)=>{return cc.type=="date"})
console.log(num)
console.log(date)
wrongcount=0
var errortext=""
var numvalue=[]
var jsonx={}
           num.forEach((e)=>numvalue.push(e.value))

var datevalue=[]
           date.forEach((e)=>datevalue.push(e.value))

           date.filter((e)=>{return e.value!=""}).forEach((e,i)=>{
            console.log(e,i)
           
            jsonx[e.value]=num[i].value


       })



    if(datevalue.filter((e, i, a) => a.indexOf(e) !== i).length>0 ) {
           date.forEach((e)=>e.style.border="1px solid red")
           errortext+="\nDates cannot be Same! Change date"
           document.getElementById("error"+formid).innerText=errortext
wrongcount++

        }
//     if(numvalue.filter((e, i, a) => a.indexOf(e) !== i).length>0 ) {
//            num.forEach((e)=>e.style.border="1px solid red")
//            errortext+="\nmilestone cannot be same! change Quantity"
//            document.getElementById("error"+formid).innerText=errortext
// wrongcount++

//         }


// var jsonx=zip(datevalue,numvalue)


console.log(jsonx)




for(var i=num.filter((e)=>{return e.value!=""}).length-1;i>=0;i--){
// console.log(num[i])
try{
if(date[i].dataset.index==num[i].dataset.index&& date[i].value==""){
date[i].style.border="1px solid red"
wrongcount++
errortext+="\nDates cannot be empty! enter a date"
document.getElementById("error"+formid).innerText=errortext
}
}catch(e){}
}
if(wrongcount!=0) return
if(datevalue.length!=numvalue.length){
    alert("you must select date!")
    return
}
console.log(arraysum(Object.values(jsonx)),qty)
if(arraysum(Object.values(jsonx))!=qty){
    alert("Total quantity dose not match with order,click OK Pharmabag will do it for you")
si=split(qty,3)
num.forEach((e,i)=>{e.value=si[i]})
return
}
// var body=JSON.parse(JSON.stringify(zip(Form2JSON(temp0).Date.filter((e)=>{return e!=""}),Form2JSON(temp0).milestone.filter((e)=>{return e!=""&&e!=0}))))
// console.log(body)

 var x=await fetch("https://pharmabag.in:3000/seller/auth/orders/seller/setmilestone/order/"+oid,{method:"POST",headers:{"content-type":"application/json","auth-token":localStorage.getItem("auth-token")},body:JSON.stringify({milestone_details:jsonx,ispartial:0})});
 if(x.status==200){
    $('#replyorder'+formid).modal("hide");
location.reload()

    }



}


                                </script>
                            </tbody>
                        </table>

                        <!-- upload invoice modal -->

                       <div id="modals"></div>

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
<script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>


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

 var x=await fetch("https://pharmabag.in:3000/seller/auth/orders/seller/accept/order/"+id,{method:"POST",headers:{"content-type":"application/json","auth-token":localStorage.getItem("auth-token")},body:JSON.stringify({ispartial:0})});
 if(x.status==200){
location.reload()

    console.log(event.parentElement.parentElement)}
}

async function reject(id,event){
          if(!confirm("Do you want to reject?")){return }
 var x=await fetch("https://pharmabag.in:3000/seller/auth/orders/seller/reject/order/"+id,{method:"GET",headers:{"content-type":"application/json","auth-token":localStorage.getItem("auth-token")}});
 if(x.status==200){
location.reload()

    console.log(event.parentElement.parentElement)}


}





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
location.reload()

    $("#upload-invoice"+num).modal("hide")
    }else if(x.status=401){
alert("Order must be accepted to upload invoice")

  

    }else{location.reload()

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


                    let allowed_mime_types = ['application/pdf'];
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



                    request.open('POST', '../uploadpdf.php');
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
