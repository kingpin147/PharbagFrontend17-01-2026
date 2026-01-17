<?php include 'sections/header.php' ?>
<?php include 'sections/header-top.php' ?>
<?php include 'sections/header-middle.php' ?>
<?php include 'sections/navbar.php' ?>
<?php include 'sections/sidebar-cat.php' ?>
<?php include 'sections/sidebar-cart.php' ?>
<?php include 'sections/sidebar-nav.php' ?>
<?php include 'sections/mobile-menu.php' ?>
<?php include 'sections/quick-view.php' ?>

<!-- Page title -->

<div class="container-fluid my-5">
    <div class="row">

        <div class="col-12 col-md-3 profile order-last order-md-first">
            <ul class=" nav-tabs flex-column" style="align-items: start;">
                <li><a href="" class="active">Profile Settings</a></li>
                <li><a href="my-orders.php">My orders</a></li>
                <li><a href="credit-details.php">Credit Details</a></li>
                <li><a href="cancel-order.php">Canceled Orders</a></li>
                <li><a href="tickets.php">Tickets</a></li>
                
                
                <li><a href="register.php">Login as Seller</a></li>
                <li><a onclick="localStorage.removeItem('auth-token');localStorage.removeItem('user_type');location.href='register.php'">Logout</a></li>
            </ul>
        </div>

        <div class="col-12 col-md-9 order-first order-md-last">
            <div class="container-fluid">
          <!--       <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-8">
                        <div class="card" id="profile-picture">
                            <div class="card-body text-center">
                                <div class="clearfix">
                                    <div class="float-start">
                                        <h3> </h3>
                                    </div>
                                    <div class="float-end">
                                        <a data-bs-target="#editdp" data-bs-toggle="modal" href="#"> <i class="fa fa-pencil"></i></a>
                                    </div>
                                </div>

                                <img src="image/profile/avatar-1.png" width="80%">

                                <h5 class="mt-3">Alea Smith</h5>
                                <span>id : <span> #0144</span></span>

                            </div>
                        </div>
                    </div>
                </div> -->

                <!--edit modal profile picture-->

                <div class="modal fade" id="editdp" tabindex="-1" role="modal" aria-labelledby="modal-label" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog bg-white">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="col-md-12">
                                    <form id="form1" class="form-validate mt-5">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="name">Upload Profile Picture</label>
                                                <input type="file" class="form-control mb-4" name="dp">
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-b" data-bs-dismiss="modal"> Cancel </button>
                                        <button type="button" class="btn btn-b"> Save </button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="bg-white p-4 my-4 border">
                            <div class="row">
                                <div class="clearfix">
                                    <div class="float-start">
                                        <h3 style="color: var(--primary);"> Personal Details </h3>
                                    </div>
                                    <div class="float-end">
                                        <a data-bs-target="#edit" data-bs-toggle="modal" href="#"> <i class="fa fa-pencil"></i></a>
                                    </div>
                                </div>


                                <div class="table-responsive">
                                    <table class="table table2" id="productholder">
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
<script>
 async function getmyorders(){

var x=await fetch("https://pharmabag.in:3000/buyer/auth/profile",{method:"GET",
    headers:{"content-type":"application/json","auth-token":localStorage.getItem("auth-token")}})
let data=await x.json()
var html=""
if(x.status==200){
   
   
html+=`  <tr>
                                            <th> Buyer Id </th>
                                            <td> ${data.buyer_details.buyer_number_id} </td>
                                        </tr>
                                         <tr>
                                            <th> Buyer Alternate Id </th>
                                            <td> ${data.buyer_details.buyer_id} </td>
                                        </tr>
                                         <tr>
                                            <th> User Type </th>
                                            <td> ${data.buyer_details.status==1?"Normal":data.buyer_details.status==2?"with EMI facility":data.buyer_details.status==3?"With Full Credit facility":"Not Recognized"} </td>
                                        </tr>



<tr>
                                            <th> Full Name </th>
                                            <td> ${data.buyer_details.name} </td>
                                        </tr>
                                        <tr>
                                            <th> Legal Name </th>
                                            <td> ${data.buyer_details.legal_name} </td>
                                        </tr>
                                        <tr>
                                            <th> Email </th>
                                            <td> ${data.buyer_details.email} </td>
                                        </tr>
                                        <tr>
                                            <th> Phone Number </th>
                                            <td> ${data.buyer_user.phone_no} </td>
                                        </tr>
                                        
                                        
                                        <tr>
                                            <th> Address </th>
                                            <td> ${data.buyer_details.address.landmark} </td>
                                        </tr>
                                        <tr>
                                            <th> Address 2 </th>
                                            <td>  ${data.buyer_details.address.street_address} </td>
                                        </tr>
                                        <tr>
                                            <th> City </th>
                                            <td> ${data.buyer_details.address.city} </td>
                                        </tr>
                                        <tr>
                                            <th> Zip Code </th>
                                            <td> ${data.buyer_details.address.pincode} </td>
                                        </tr>
                                        <tr>
                                            <th> State </th>
                                            <td> ${data.buyer_details.address.state} </td>
                                        </tr>
                                        <tr>
                                            <th> Country </th>
                                            <td> India</td>
                                        </tr>



`
  
}
document.getElementById("productholder").innerHTML=html
}


getmyorders()
</script>


                        <!--            edit details modals-->

                        <div class="modal fade " id="edit" tabindex="-1" role="modal" aria-labelledby="modal-label" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog bg-white">
                                <div class="modal-content">
                                    <div class="modal-header">
                                       <h5>Change your personal details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="">
                                            You don't have the permit to change your account details

                                        </p>
                                        <p class="">
                                            If you want to change account details then <a href="contact-us.php"> contact </a> our admin.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<!-- Footer -->
<!--=====================================
                     FOOTER PART START
        =======================================-->
<?php include 'sections/footer.php' ?>

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

</script>

</body>

</html>
