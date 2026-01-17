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
                <li><a href="profile.php" >Profile Settings</a></li>
                <li><a href="my-orders.php">My orders</a></li>
                <li><a href="credit-details.php">Credit Details</a></li>
                <li><a href="cancel-order.php">Canceled Orders</a></li>
                <li><a href="tickets.php" class="active">Tickets</a></li>
               
                
                <li><a href="register.php">Login as Seller</a></li>
                <li><a onclick="localStorage.removeItem('auth-token');localStorage.removeItem('user_type');location.href='register.php'">Logout</a></li>
            </ul>
        </div>

        <div class="col-12 col-md-9 order-first order-md-last">

            <div class="container my-4">
                <div class="row">
                    <div>
                        <div class="mb-3 col-12">
                            <div class="row">
                                <div class="col-12">
                                    <a class="btn btn-primary border-0" data-bs-toggle="modal" data-bs-target="#raise-ticket" id="theme-button">+ Raise a Ticket </a>
                                </div>

                                <!--                   raise ticket modal-->
                                <div class="modal fade" id="raise-ticket">
    <div class="modal-dialog bg-white">
        <div class="modal-content">

            <div class="modal-header border-bottom" style="border: 0px solid">
                <span>Raise a Ticket</span>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="p-3 row">
                    <form id="ticketform" onsubmit="event.preventDefault()">
                        <div class="row">
                            <div class="col-xxl-6 col-lg-6 col-md-5 col-6">
                                <div class="">
                                    <label class="form-label"> Reason </label> <br>
                                    <select class="form-control" name="reason">
                                        <option selected=""> Select your reason here</option>
                                        <option value="Buyer:payments">Payment</option>
                                        <option value="Buyer:order">Orders</option>
                                        <option value="Buyer:delivery">Delivery</option>
                                        <option value="Buyer:other">Other Reasons</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-xxl-6 col-lg-6 col-md-5 col-6">
                                <div class="">
                                    <label class="form-label"> Subject </label> <br>
                                    <input class="form-control" placeholder="" type="text" name="subject">
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <label class="form-label"> Message (MAX 150 words) </label> <br>
                            <textarea placeholder="write your comments here" class="form-control" name="message"> </textarea>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary border-0" style="width: 100%" onclick="raiseTicket()">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

                                <div class="col-12 mt-4">
                                    <h3>All Tickets</h3>
                                    <div id="alltickets" style="height: 60vh;overflow: scroll;">
                                        <script type="text/javascript">
                                            
const getAllTickets=async ()=>{
var x=await fetch(`https://pharmabag.in:3000/buyer/my/tickets`,{

method:"GET",
headers:{
    "content-type":"application/json",
    "auth-token":localStorage.getItem("auth-token")
}

})
let data = await x.json()
html=""
for (var i = data.length - 1; i >= 0; i--) {
   
   html+=` <div class="col-12 alert-info mt-4">
                                            <div>
                                                <p><span>Ticket No: </span> <span> ${data[i]._id}</span></p>
                                                <p>Date: <span> ${new Date(data[i].createdAt).toLocaleDateString()}</span> </p>
                                                <p>Status :  ${

                                                    data[i].status==0
                                                    ?'<span class="badge bg-warning"> Processing</span>':
                                                    data[i].status==1
                                                    ?'<span class="badge bg-success"> Solved</span>':'<span class="badge bg-warning">Rejected</span>'


                                            }</p>
                                                <hr>
                                                <div class="orders">
                                                    <ul>
                                                        <li><span>Reason : </span> <span> ${data[i].reason}</span></li>
                                                        <li><span>Subject : </span><span> ${data[i].subject} </span></li>
                                                        <li><span>Message : </span><span> ${data[i].message}</span></li>
                                                    </ul>
                                                </div>

                                                <div class="mt-3 orders">
                                                    <a href="ticket-details.php?id=${data[i]._id}&data=${data[i].message}&time=${data[i].createdAt}" class="mx-4">
                                                        <i class="fas fa-message"></i>
                                                        <span>Chat with support</span>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>`
}








document.getElementById("alltickets").innerHTML=html
}
getAllTickets()
















                                        </script>
                                       
                                       
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
        =======================================
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





const raiseTicket=async()=>{

var x=await fetch(`https://pharmabag.in:3000/buyer/create/ticket`,{

method:"POST",
headers:{
    "content-type":"application/json",
    "auth-token":localStorage.getItem("auth-token")
},
body:JSON.stringify(Form2JSON(document.getElementById("ticketform")))

})
if(x.status==200){
    location.reload()
    //$("#raise-ticket").modal("hide")
}else{
    alert("Cannot create ticket at this momment. Make Sure You fill all the fields .")
}





}









</script>

</body>

</html>
