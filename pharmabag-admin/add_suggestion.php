<?php
session_start();
session_regenerate_id();
$pcode='a';
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

<?php

require "../vendor/leafs/fetch/src/Fetch.php";
use function Leaf\fetch;

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
    </head>

    <body>
        <script>0</script>
<div class="wrapper">

    <header class="top-header">

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

    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Suggestions</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add suggestions</li>
<li><a class="btn btn-primary btn-sm mt-2" onclick="document.getElementById('importfile').click()" >Import CSV</a></li>
<li>                        <a onclick="exportcsv()" class="btn btn-success btn-sm mt-2">Export CSV</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->


<form class="row g-3" action="https://pharmabag.in:5349/admin/import/suggestion/bulk" method="post" enctype="multipart/form-data" id="importform" hidden>
    <input type="file" id="importfile" list="GFGOptions" name="file" class="form-control" hidden placeholder="product name" onchange="document.getElementById('importform').submit()">
</form>

<form class="row g-3" onsubmit="event.preventDefault()" id="addcatform">                                                                                                   <div class="col-12">                                                                                                                                       <label class="form-label">Name</label>
    <input type="text" id="catadd" list="GFGOptions" name="name" class="form-control" placeholder="product name" value="<?php echo $_GET['name']??"";?>">                                                         </div>


<div class="col-12">
                                        <label class="form-label">company name</label>
                                        <input type="text" id="catadd" value="<?php echo $_GET['comp']??"";?>" name="company_name" class="form-control" placeholder="company name">
</div>
<div class="col-12">
                                        <label class="form-label">chemical composition</label>
                                        <input type="text" id="catadd" name="chemical" class="form-control" placeholder="chemical composition">
</div>
<div class="col-12">
                                        <label class="form-label">HSN</label>
                                        <input type="text" id="catadd" name="hsn" class="form-control" placeholder="HSN no.">
                                    </div>


  <div class="col-12">
            <label class="form-label">Medicine Type <span class="required"> *</span></label>
            <select class="form-select" name="type" id="type" required>
                <option selected>Select Medicine Type</option>
                <option value="Strip">Strip</option>
                <option value="Bottle">Bottle</option>
                <option value="Tube">Tube</option>
                <option value="Vial">Vial</option>
                <option value="PFS">PFS</option>
            </select>
        </div>


<div class="col-12">
                                        <label class="form-label">Category</label>
                                        <select class="form-select" name="category_name" required>
          



<?php
$res = fetch("https://pharmabag.in:3000/user/get/all/category");
$html='<option selected>Select Category</option>';
for ($i=0; $i < count($res->data); $i++) { 
    $html.=<<<hhh
    <option value="{$res->data[$i]->category_name}">{$res->data[$i]->category_name}</option>
hhh;
}
echo $html;


?>
            </select>
                                         
                                       
                                    </div>
<div class="col-12">
                                        <label class="form-label">Sub category</label>
                                        <select class="form-select" name="subcategory_name" required>
                
                <?php
$res = fetch("https://pharmabag.in:3000/user/get/all/subcategory");
$shtml='<option selected>Select Subcategory</option>';
for ($i=0; $i < count($res->data); $i++) { 
    $shtml.=<<<hhh
    <option value="{$res->data[$i]->subcategory_name}">{$res->data[$i]->subcategory_name}</option>
hhh;
}
echo $shtml;


?>
            </select>
                                    </div>

<input type="text" id="images" name="image" class="form-control" hidden placeholder="HSN no.">



<div class="col-12">

                        <input id="" onchange="upload(this)" type="file" accept="image/*" multiple>
                       <div id="con" class="con" style="display: grid;grid-template-columns: repeat(auto-fit, minmax(200px, 3fr));grid-gap: 20px;margin-top: 20px;">


</div>







                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="next btn btn-primary" >Add Suggetion</button>
                                        </div>
                                    </div>
                                </form>







        <div class="card">
            <div class="card-header py-3">
                <h6 class="mb-0">Add Product Category</h6>
            </div>
            <div class="card-body" style="max-height: none; overflow-y: auto;">
                <div class="row">
                   
                    <div class="col-12 col-lg-12 d-flex">
                        <div class="card border shadow-none w-100">
                            <div class="card-body" style="
    max-height: none;
">
                                <div class="table-responsive">
                                    <table id="suggestiontable" class="table align-middle">
                                        <thead class="table-light">
                                            <tr>


                                                <th>Name</th>
<th>Company</th>
<th>Chemicals</th>

                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody">


                                                                                 </tbody>
                                        <!--                                       edit category modal-->
                                        <div class="modal fade" id="edit-cat">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="row g-3">
                                                            <div class="col-12">
                                                                <label class="form-label">Name</label>
                                                                <input type="text" class="form-control" placeholder="Category name">
                                                            </div>
                                                            <div class="col-12 mt-3">
                                                                <div class="d-flex">
                                                                    <button class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--                                    delete category modal-->
                                        <div class="modal fade" id="delete-category">
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

                                    </table>
                                   

                                </div>
                            </div>
                            <button class="btn btn-primary" onclick="loadmore()" style="
    margin: 20px;
">Load more data</button>
                        </div>
                    </div>
                </div>
                <!--end row-->
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js"></script>

    <script>
        new PerfectScrollbar(".best-product")

    </script>

    <script>



const Form2JSON = (form) => {
        const data = new FormData(form);
        return Array.from(data.keys()).reduce((result, key) => {
          if (result[key]) {
            result[key] = data.getAll(key)
            return result
          }
          result[key] = data.get(key);
          return result;
        },
          {});
      }


function validateform(formid){
   var wrongcount=0
    var rightcount=0
for(let i=0;i<document.forms[formid].elements.length-1;i++){
if(!document.forms[formid].elements[i].value || ["add some details","add address","select location","Select Medicine Type","Select Category","Select Subcategory","Select Discount Type","No Product Selected"].includes(document.forms[formid].elements[i].value) ){
document.forms[formid].elements[i].style.border="3px solid red"
    wrongcount+=1
}else{
document.forms[formid].elements[i].style.border=""
    rightcount+=1
}
}
    return wrongcount
}


  var buyer_licences_image=[]

    var imgdata=[]





/*
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
*/
    </script>




 <script>
async function saveedit(element){

  var x=await fetch("https://pharmabag.in:3000/admin/edit/suggestion/"+element.parentElement.parentElement.parentElement.getElementsByTagName("td")[0].id,{
                  method:"POST",
                    headers:{"content-type":"application/json","Authorization":"<?php echo $_SESSION['token']; ?>"},
                    body:JSON.stringify({"name":element.parentElement.parentElement.parentElement.getElementsByTagName("td")[0].innerText})

                  })

if(x.status!=200){
    alert("Can not edit this suggestion")
    return
}
else{
    alert("Edited Sucessfully")
element.parentElement.getElementsByTagName("a")[1].style.display="block"
element.parentElement.parentElement.parentElement.getElementsByTagName("td")[0].contentEditable="false"
element.parentElement.getElementsByTagName("a")[2].remove()
element.className="text-warning"
element.innerHTML=`<i class="bi bi-pencil-fill"></i>`
element.setAttribute("onclick","initEdit(this)")
}
}

     function initEdit(temp0){
temp0.parentElement.parentElement.parentElement.getElementsByTagName("td")[0].contentEditable="true"
temp0.parentElement.parentElement.parentElement.getElementsByTagName("td")[0].focus()

temp0.className="btn btn-primary"
temp0.innerHTML="save"
temp0.setAttribute("onclick","saveedit(this)")
temp0.parentElement.getElementsByTagName("a")[1].style.display="none"
var xxx=document.createElement("a")

xxx.className="btn btn-primary"
xxx.innerHTML="Cancel"
xxx.addEventListener("click",()=>{
temp0.parentElement.getElementsByTagName("a")[1].style.display="block"
temp0.parentElement.parentElement.parentElement.getElementsByTagName("td")[0].contentEditable="false"
xxx.remove()
temp0.className="text-warning"
temp0.innerHTML=`<i class="bi bi-pencil-fill"></i>`
temp0.setAttribute("onclick","initEdit(this)")

})
temp0.parentElement.appendChild(xxx)




     }
     let suggestionTable; 
     var mainoffset=0; 
const getData=async(offset)=>{

loader.show()
     var x=await fetch(`https://pharmabag.in:3000/user/get/all/suggestion?limit=100&offset=${offset}`,{
                  method:"GET",
                    headers:{"content-type":"application/json"} })
 var data=await x.json()
 for(let i=0;i<data.length;i++){
 let tbl=document.createElement("tr")
                  tbl.innerHTML=`                                                    <td id='${data[i]._id}'>${data[i].name}</td>
<td id='${data[i]._id}'>${data[i].company_name}</td>
<td id='${data[i]._id}'>${data[i].chemical}</td>

                                                <td>
                                                    <div class="d-flex align-items-center gap-3 fs-6">

                                                         <a onclick="initEdit(this)" class="text-warning"><i class="bi bi-pencil-fill"></i></a>
                                                        <a onclick="delete_cat('${data[i]._id}')" class="text-danger"><i class="bi bi-trash-fill"></i></a>
                                                    </div>
                                                </td>`

                  document.getElementById("tbody").appendChild(tbl)



 }
 if (suggestionTable) {
            suggestionTable.rows.add(data).draw();
        } else {
            suggestionTable = $("#suggestiontable").DataTable({
                data: data,
                columns: [
                    { data: "name" },
                    { data: "company_name" },
                    { data: "chemical" },
                    {
                        data: null,
                        render: function (data, type, row) {
                            return `
                                <div class="d-flex align-items-center gap-3 fs-6">
                                    <a onclick="initEdit(this)" class="text-warning"><i class="bi bi-pencil-fill"></i></a>
                                    <a onclick="delete_cat('${data._id}')" class="text-danger"><i class="bi bi-trash-fill"></i></a>
                                </div>`;
                        }
                    }
                ]
            });
        }
mainoffset+=100
loader.hide()
     }

     window.onload=()=>{getData(0)}
const loadmore=()=>{getData(mainoffset)}



                  async function addcat(){
document.getElementById("images").value=JSON.stringify(buyer_licences_image)
                  var x=await fetch("https://pharmabag.in:3000/admin/add/suggestion",{
                  method:"POST",
                    headers:{"content-type":"application/json","Authorization":"<?php echo $_SESSION['token']; ?>"},
                    body:JSON.stringify(Form2JSON(document.getElementById("addcatform")))

                  })
                  var data=await x.json()
                  if(x.status==200){alert("Suggestion added successfully")}
                    location.reload()
                  let tbl=document.createElement("tr")
                  tbl.innerHTML=`                                               <td id='${data._id}'>${data.name}</td>
                                                <td id='${data._id}'>${data.company_name}</td>
<td id='${data._id}'>${data.chemical}</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3 fs-6">
                                                        <a onclick="initEdit(this)" class="text-warning"><i class="bi bi-pencil-fill"></i></a>

                                                        <a onclick="delete_cat('${data._id}')" class="text-danger"><i class="bi bi-trash-fill"></i></a>
                                                    </div>
                                                </td>`

                  document.getElementById("tbody").insertAdjacentElement('afterbegin', tbl)

                  }

     async function delete_cat(id){
if(confirm("Are you sure to delete this suggestion?")){
       var x=await fetch("https://pharmabag.in:3000/admin/delete/suggestion/"+id,{
                  method:"POST",
                    headers:{"content-type":"application/json","Authorization":"<?php echo $_SESSION['token']; ?>"},
                    })
       if(x.status==200){location.reload()}
     }
     }

                  </script>


<script>
async function exportcsv(){
//var x=await fetch("https://www.julia.sr:3000/admin/all/users",{headers:{"content-type":"application/json","Authorization":"Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyX2lkIjoiNjM0ODU5MmQ5ZjdkNTRiOTY0OThjNDVjIiwiaWF0IjoxNjgzMzU3NjY4fQ.g7Whdj0El213AehiWshzTEkmp1qe1T939HZHgn6pICM"}});
var x=await fetch("https://pharmabag.in:3000/user/get/all/suggestion",{
                  method:"GET",
                    headers:{"content-type":"application/json"} })
 var data=await x.json()
 var csv = Object.keys(data[0]).toString()+"\n";
            data.forEach(function(row) {
                csv += Object.values(row).toString().replaceAll("\n"," ")+'\n';

            });

            var hiddenElement = document.createElement('a');
            hiddenElement.href = 'data:text/csv;charset=utf-8,' + encodeURI(csv);
            hiddenElement.target = '_blank';
            hiddenElement.download = 'all_suggestion_data'+new Date().toLocaleDateString()+'.csv';
            hiddenElement.click();
var hiddenElement = document.createElement('a');
            hiddenElement.href = 'data:text/json;charset=utf-8,' + encodeURI(JSON.stringify(data));
            hiddenElement.target = '_blank';
            hiddenElement.download = 'Vmongodb_all_suggestion_data'+new Date().toLocaleDateString()+'.json';
            hiddenElement.click();

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
  var currentform = event.form.id
  var id = event.form.dataset.id
  imgdata = []
  var files = event.files
  for (var i = 0; i < files.length; i++) {
    imgdata.push(files[i])
  }
  for (var i = 0; i < imgdata.length; i++) {
    console.log(imgdata[i])
    var preloadimagecontainer = document.createElement("div")
    preloadimagecontainer.className = "preloadimagecontainer"
    event.parentElement.getElementsByClassName("con")[0].appendChild(preloadimagecontainer)
    //=================================
    var progressBar = document.createElement("img");
    progressBar.src = URL.createObjectURL(imgdata[i])
    progressBar.id = imgdata[i].name.hashCode()
    progressBar.setAttribute("height", "300")
    preloadimagecontainer.appendChild(progressBar);
    //===================================
    var btn = document.createElement("a")
    btn.className = "form-button btn "
    btn.innerText = "X"
    btn.setAttribute("onclick", `this.parentElement.remove();imgdata.splice(${i},1,"null")`)
    preloadimagecontainer.appendChild(btn);
    //===================================================
  }
  event.form.getElementsByClassName("next")[0].addEventListener("click", async ()=> {
    console.log(validateform(currentform))
    imgdata = imgdata.filter(element => {
      return element != 'null';
    })
    console.log(imgdata)
    var event2 = event
    for (var i = 0; i < imgdata.length; i++) {
      event = document.getElementById(`${imgdata[i].name.hashCode()}`)
      console.log(`${URL.createObjectURL(imgdata[i])}`)
      res = await sendFiles(imgdata[i], event)
      if (res.indexOf("https://")==-1) {
        alert("Upload another image we cannot process this image Please Note Maximum file size is 5MB and allowed file types are ['jpeg', 'png', 'svg', 'webp', 'jpg']")
          btn.remove()
          progressBar.remove()
          event.value = ''
          event.parentElement.getElementsByClassName('progressx')[0].remove()
          return
        }
        event.type = "text"
        event.value = "https://"+res.split("https://")[1]
        event2.hidden = true
        buyer_licences_image.push("https://"+res.split("https://")[1])
        btn.style.display = "none"

        event.parentElement.getElementsByClassName('progressx')[0].remove()
        event.parentElement.innerHTML = "<div><hr><br><center><b>image uploaded successfully</b></center><br><hr></div>"

      }



      addcat()

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
    var file = files
    //====================================
    return new Promise((resolve, reject) => {
      if (files.length == 0) {
        alert('Error : No file selected');
        return;
      }


      let allowed_mime_types = ['image/jpeg',
        'image/svg+xml',
        'image/png',
        'image/svg',
        'image/webp',
        'image/jpg'];
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
        progress.style.width = `${percent}%`
        console.log(`File is ${percent}% uploaded.`);
      };



      request.open('POST', '../upload.php');
      request.addEventListener('load', function(e) {
        resolve(request.response)
      });
      request.send(data);

    })


    }


//====================================


const loader = {
    show: function (customHtml = null) {
        this.addAnimationStyles();
        const loaderHtml = customHtml || this.getDefaultHtml();

        // Create a new loader element
        const loaderElement = document.createElement('div');
        loaderElement.innerHTML = loaderHtml;
        loaderElement.classList.add('loader64645446554dfd5ff4dfe82422fdf34521dsddsdadderere');
        // Add styles to the loader element
        loaderElement.style.position = 'fixed';
        loaderElement.style.top = '50%';
        loaderElement.style.left = '50%';
        loaderElement.style.transform = 'translate(-50%, -50%)';
        loaderElement.style.zIndex = '9999';
        loaderElement.style.background = '#fff';


        // Append the loader element to the body
        document.body.appendChild(loaderElement);
        this.addBlur();
    },

    hide: function () {
        // Remove the loader element from the body
        const loaderElement = document.querySelector('.loader64645446554dfd5ff4dfe82422fdf34521dsddsdadderere');
        if (loaderElement) {
            loaderElement.parentElement.removeChild(loaderElement);
        }
        const blurElement = document.querySelector('.blur');
        if (blurElement) {
            blurElement.parentElement.removeChild(blurElement);
        }
    },
    addBlur: function () {
        // Create a new element for blur effect
        const blurElement = document.createElement('div');
        blurElement.classList.add('blur');

        // Append the blur element to the body
        document.body.appendChild(blurElement);
    },
    addAnimationStyles: function () {
        // Create style element
        const style = document.createElement('style');
        style.type = 'text/css';
        style.innerHTML = `
        .blur {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.5); /* Semi-transparent white */
            backdrop-filter: blur(50px); /* Fallback for browsers that support backdrop-filter */
            z-index: 9998; /* Make sure it's below the loader */
        }
            @-webkit-keyframes spin {
                0% { -webkit-transform: rotate(0deg); }
                100% { -webkit-transform: rotate(360deg); }
            }
            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }
        `;

        // Append style element to the head
        document.head.appendChild(style);
    },


    getDefaultHtml: function () {
        // Default loader HTML with animation
        return '<div class="loader64645446554dfd5ff4dfe82422fdf34521dsddsdadderere" style="border: 8px solid #f3f3f3; border-radius: 50%; border-top: 8px solid #3498db; width: 50px; height: 50px; animation: spin 1s linear infinite;"></div>';
    }
};


</script>







<script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>

    </body>

    </html>
