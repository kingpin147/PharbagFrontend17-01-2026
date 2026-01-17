<?php include 'sections/header.php' ?>
<?php include 'sections/header-top.php' ?>
<?php include 'sections/header-middle.php' ?>
<?php include 'sections/navbar.php' ?>
<?php include 'sections/sidebar-cat.php' ?>
<?php include 'sections/sidebar-cart.php' ?>
<?php include 'sections/sidebar-nav.php' ?>
<?php include 'sections/mobile-menu.php' ?>
<?php include 'sections/quick-view.php' ?>
<script type="text/javascript">
    const getmessage=async ()=>{
var x=await fetch(`https://pharmabag.in:3000/user/get/message/for/ticket/<?php echo $_GET['id']; ?>`,{

method:"GET",
headers:{
    "content-type":"application/json",
    "auth-token":localStorage.getItem("auth-token")
}

})

let data = await x.json()
html=`
    <div class="card">
            <div class="card-header">
                <div class="">
                    <p> <b> Ticket Details : </b> <span> ${new Date('<?php echo $_GET['time']; ?>').toLocaleDateString()} </span> </p>
                </div>
                <div class="card-body">
                    <div class="">
                        <p><?php echo $_GET['data']; ?></p>
                    </div>
                </div>
            </div>
        </div>


`


for (var i = 0; i < data.length; i++) {
  
html+=`
    <div class="card">
            <div class="card-header">
                <div class="">
                    <p> <b> ${data[i].user_name} : </b> <span> ${new Date(data[i].createdAt).toLocaleDateString()} </span> </p>
                </div>
                <div class="card-body">
                    <div class="">
                        <p>${data[i].message}</p>
                    </div>
                </div>
            </div>
        </div>


`

}
document.getElementById("chatbox").innerHTML=html
 document.getElementById("chatbox").scrollTop = document.getElementById("chatbox").scrollHeight;
    }

getmessage()
setInterval(getmessage,10000)


</script>

<main class="page-content">
<div class="container">
        <div class="product-back">
            <a  onclick="history.go(-1)"><i class="fa-solid fa-arrow-left" id="goback"></i></a>
        </div>
    </div>
    <div class="container my-4" id="ticket">

    
<div id="chatbox" style="height: 58vh;overflow: scroll;">
    
</div>


        <div class="input-group mt-4" id="reply">
            <input id="chat_input" type="text" class="form-control col-3" placeholder="Your Reply" name="email">
            <button class="input-group-text btn-primary" id="replay" onclick="sendmessage()">Reply</button>
            <button class="input-group-text" style="background: #8bc73a;" id="closechat" onclick="closed()">refresh</button>
        </div>
        
        <script>
            let close = document.getElementById('closechat');
            let reply = document.getElementById('replay');
            let ci = document.getElementById('chat_input');
            
            function closed(){
                getmessage()
            }


const sendmessage=async()=>{

var x=await fetch(`https://pharmabag.in:3000/buyer/send/message/for/ticket/<?php echo $_GET["id"];?>`,{

method:"POST",
headers:{
    "content-type":"application/json",
    "auth-token":localStorage.getItem("auth-token")
},
body:JSON.stringify({message:ci.value})

})
if(x.status==200){
    getmessage()
    ci.value='';
     document.getElementById("chatbox").scrollTop = document.getElementById("chatbox").scrollHeight;
    
}else{
    alert("Cannot send message at this momment")
}





}



// Execute a function when the user presses a key on the keyboard
ci.addEventListener("keypress", function(event) {
  // If the user presses the "Enter" key on the keyboard
  if (event.key === "Enter") {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    sendmessage()
  }
}); 
            
        </script>
    </div>



</main>
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
