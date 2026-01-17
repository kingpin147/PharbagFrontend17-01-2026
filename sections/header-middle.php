<header class="header-part">
    <div class="container">
        <div class="header-content">
            <div class="header-media-group">
                <button class="header-user">
                    <!-- <img src="images/user.png" alt="user"> -->
                    <i class="fa fa-bars"></i>
                </button>
                <a href="index.php">
                    <img src="image/logo/logo-edited.png" alt="logo"></a>
                <button class="header-src"><i class="fas fa-search"></i></button>
            </div>

            <a href="index.php" class="header-logo">
                <img src="image/logo/logo-edited.png" alt="logo">
            </a>

            <form class="header-form">
                <div class="input-group">
                    <div style="width:30%">
                        <select name="" id="searchcat" class="form-control">
                            <option value="" selected> All categories </option>
                           

 <?php 
require_once "./vendor/leafs/fetch/src/Fetch.php";

use function Leaf\fetch;
$res1 = fetch("https://pharmabag.in:3000/user/get/all/category");
$html='';
for ($i=0; $i <count($res1->data) ; $i++) { 
    $html.=<<<hhh
<option value="{$res1->data[$i]->category_name}"> {$res1->data[$i]->category_name} </option>
                           
hhh;



   
       


}
echo $html;
?>   
              



                        </select>
                    </div>
                    <div class="d-flex" style="width:70%">
                        <input id="search-list" type="text" placeholder="Search anything..." class="w-100">
                      
                    </div>

<div id="searchresults" style="display: grid;margin: 4px;grid-template-columns: 1fr 1fr auto;gap: 10px;max-height: 60vh;overflow: scroll;">
<!-- <img id="loader_img" src="https://drive.google.com/uc?export=download&amp;id=1tlRd6JMersZh74k3kh-nSi_lD2_6_zyV" style="display: block;margin-left: auto;margin-right: auto;"> -->
</div>

<!--<dialog id="loginDialog">  <h2>Welcome to Our Website</h2>
    <p>We're glad to have you here. Explore our offerings and let us know if you have any questions.</p>
    <button>Close</button></dialog>
-->
<script>
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
                                        };

                                        function keyPressCallback() {
                                             if(this.value==''){document.getElementById('searchresults').innerHTML=''}

                                            var input = document.getElementById('search-list');

                                            search(input.value);
                                        }

                                        document.getElementById('search-list').onkeyup = debounce(keyPressCallback, 400);

                                        function search(text) {
                                            let data = async () => {

if (document.getElementById("searchcat").value =='') {
       var x = await fetch("https://pharmabag.in:3000/buyer/un/auth/products/" + text);
                                                return x.json()
                                            }else{
var x = await fetch("https://pharmabag.in:3000/buyer/un/auth/products/" + text,{method:"POST",headers:{"content-type":"application/json"},body:JSON.stringify({category:document.getElementById("searchcat").value})});
                                                return x.json()

                                            }

                                             
                                            }
                                            data().then(data => {
                                                data=data.result_products
                                                var html = '';
                                                for (let i = 0; i < data.length; i++) {

                                                    html += ` <div class="col">
<div class="product-card">
            <div class="product-media">
                <div class="product-label">

                ${

((new Date()-new Date(data[i].date))/(1000 * 60 * 60 * 24*30))<1?'<label class="label-text new">new</label>':''

                }
                   
                    ${data[i].discount_form_details.discountOnPtrOnlyPercenatge?`<label class="view-label off">-${data[i].discount_form_details.discountOnPtrOnlyPercenatge}% off</label>`:''}
                     
                </div>                
                <a class="product-image" href="product.php?id=${data[i]._id}">
                    <img src="${`https://pharmabag03.s3.ap-south-1.amazonaws.com/small_${(data[i].image_list[0]).split("https://pharmabag03.s3.ap-south-1.amazonaws.com/")[1]}`}" alt="product">
                </a>
                <div class="product-widget">
                    <a style="cursor:pointer;" title="Add to wishlist" onclick="addtowishlist('${data[i]._id}',this)" class="fas fa-heart"></a>                   
                    <a title="Product View" href="product.php?id=${data[i]._id}" class="fas fa-eye"></a>
                </div>
            </div>
            <div class="product-content">
                <h6 class="product-name">
                    <a href="product.php?id=${data[i]._id}">${data[i].product_name}</a>
                </h6>
                <p> ${data[i].categories.category_name} > ${data[i].categories.sub_category_name} </p>
                
                <h6 class="clearfix">
                    <span class="float-start"><small>MRP</small> <br> ₹${data[i].product_price}</span>
                    <span class="float-end"><small>PTR</small> <br> ₹${parseFloat(data[i].discount_details.per_ptr).toFixed(2)}</span>
                </h6>
                
                <button class="product-add" title="Add to Cart" onclick="location.href='product.php?id=${data[i]._id}'">
                    <i class="fas fa-shopping-basket"></i>
                    <span>View Details</span>
                </button>
                
            </div>
        </div>
</div>`
                                                    document.getElementById('searchresults').innerHTML = html
                                                }
                            if(data.length==0){document.getElementById('searchresults').innerHTML =`<center class="mt-10"><b>No results! try different name</b></center>`
                                                                           }
                                            })

                                        }










window.onclick = function(event) {
    //console.log(event.target)
  if (event.target != document.getElementsByClassName("header-form")[0]&&event.target!=document.getElementById('searchresults')) {
   document.getElementById('searchresults').innerHTML='';
  }
} 
                                    </script>


                </div>
            </form>

            <div class="header-widget-group" id="afterlogin">


<script type="text/javascript">
(async ()=>{
  
// Function to start the timer
function startTimer(duration, onTimeUp) {
console.log("running");    
var timer = duration, minutes, seconds;
    var intervalId = setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        //console.log(minutes + ":" + seconds);

        if (--timer < 0) {
            clearInterval(intervalId);
            onTimeUp(); // Call the function when time is up
        }
        // Save remaining time to localStorage
        localStorage.setItem('timer', timer);
    }, 1000);
}

// Function to retrieve saved timer value from localStorage
function retrieveSavedTimer() {
    return localStorage.getItem('timer') || 120; // Default to 2 minutes if not found
}

// Load saved timer value or set default to 2 minutes
var remainingTime = parseInt(retrieveSavedTimer());

// Get the display element where timer will be shown
//var display = document.getElementById('timer');

// Function to be called when time is up
function timeIsUp() {
    //alert("Time's up!");
if(location.pathname
!='/register.php'){

loginDialog.showModal()

}
var initialTime = 40;
 localStorage.setItem('timer', initialTime);
        // Restart the timer
        startTimer(initialTime, timeIsUp);
    // Call any other function or perform actions here
}

  if(localStorage.getItem("user_type")=="buyer"&& localStorage.getItem("auth-token")){


var x=await fetch("https://pharmabag.in:3000/buyer/auth/profile",{method:"GET",
    headers:{"content-type":"application/json","auth-token":localStorage.getItem("auth-token")}})
let data=await x.json()
if(x.status!=200){
html=`  <a href="register.php" class="btn btn-primary pulse" >Login</a>`
document.getElementById("afterlogin").style.display="block"
document.querySelectorAll('.header-top-list').forEach(iten=>iten.style.display='flex')
document.getElementById("afterlogin").innerHTML=html
//document.querySelectorAll('.header-top-list').forEach(iten=>iten.style.display='none')
// Start the timer
//console.log("daasahddcdhadxbk")
startTimer( localStorage.getItem('timer') || 40, timeIsUp);

$('.header-cart, .cart-btn').on('click', function(){
    $('body').css('overflow', 'hidden');
    $('.cart-sidebar').addClass('active');
    $('.cart-close').on('click', function(){
        $('body').css('overflow', 'inherit');
        $('.cart-sidebar').removeClass('active');
        $('.backdrop').fadeOut();
    });
});

return
}
var html=`

                <div class="dropdown">
                    <a href="profile.php" class="header-widget " title="Click to see profile">
                        <i class="fas fa-user"></i> <span>Hi, ${data.buyer_details.name}</span>
                    </a>
                    <ul class="dropdown-position-list">
                        <!-- <li><a data-bs-toggle="modal" data-bs-target="#login-popup">login</a></li> -->
                        <li><a href="my-orders.php">My orders</a></li>
                        <li><a href="profile.php">My Profile</a></li>
			<!--<li><a href="profile.php">Request a product</a></li>-->
                        <li><a onclick="localStorage.removeItem('auth-token');localStorage.removeItem('user_type');location.href='register.php'">Logout</a></li>
        <!--   <li><a href="reset-password.php">reset password</a></li>
                        <li><a href="change-password.php">change password</a></li>-->
                    </ul>
                </div>
                
                <a href="wishlist.php" class="header-widget" title="Wishlist">
                    <i class="fas fa-heart"></i>
                    <sup id="wishlistcount">0</sup>
                </a>
                <button onclick="showmycart()" class="header-widget header-cart cart-btn" title="My Bag">
                    <i class="fas fa-shopping-basket"></i>
                    <sup id="cartnumber-header">0</sup>
                </button>

   <a class=" dropdown-toggle  header-widget href="#" data-bs-toggle="dropdown" onclick="checkfornotification()">
        
            <i class="fa fa-bell"></i>
            <sup id="notificatiocount">0</sup>
        
    </a>
    <div class="dropdown-menu dropdown-menu-end p-0" style="max-height:500px;overflow:scroll;">
        <div class="p-2 border-bottom m-2">
            <h5 class="h5 mb-0">Messages</h5>
        </div>
        <div class="header-message-list p-2" id="header-message-list">
            
        </div>
       
    </div>


                `




               
document.querySelectorAll('.header-top-list').forEach(iten=>iten.style.display='none')

    }else{

html=`  <a href="register.php" class="btn btn-primary pulse" >Login</a>`
document.getElementById("afterlogin").style.display="block"
document.querySelectorAll('.header-top-list').forEach(iten=>iten.style.display='flex')
startTimer( localStorage.getItem('timer') || 40, timeIsUp);  
  }

document.getElementById("afterlogin").innerHTML=html
//document.querySelectorAll('.header-top-list').forEach(iten=>iten.style.display='none')
$('.header-cart, .cart-btn').on('click', function(){
    $('body').css('overflow', 'hidden');
    $('.cart-sidebar').addClass('active');
    $('.cart-close').on('click', function(){
        $('body').css('overflow', 'inherit');
        $('.cart-sidebar').removeClass('active');
        $('.backdrop').fadeOut();
    });
}); 



    })()






async function checkfornotification(){
document.getElementById("notificatiocount").innerText=''
var x=await fetch("https://pharmabag.in:3000/buyer/my/notifications",{method:"GET",
    headers:{"content-type":"application/json","auth-token":localStorage.getItem("auth-token")}})
let data=await x.json()
var count=parseInt(localStorage.getItem("countb"))||0

var html=''
for (var i = 0; i < data.length; i++) {
    if(new Date(data[i].date)> new Date(localStorage.getItem("lastseenNotificationsbuyer"))) {
       
        localStorage.setItem("countb",count++)
    }else{
        
        localStorage.setItem("countb",0)
    }
       
    html+=`
            <a class="dropdown-item" href="#">
                <div class="d-flex align-items-center">
                    <img src="../image/profile/avatar-1.png" alt="" class="rounded-circle" width="50" height="50">
                    <div class="ms-3 flex-grow-1">
                        
                        <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">${data[i].message}</small>
                    </div>
                </div>
            </a>
        `
}
document.getElementById("notificatiocount").innerText=count>10?"10+":count

document.getElementById("header-message-list").innerHTML=html
localStorage.setItem("lastseenNotificationsbuyer",data[0].date);

}
setTimeout(checkfornotification,5000)

setInterval(checkfornotification,60000)
</script>

            </div>

        </div>
    </div>
</header>



<div class="modal fade" id="login-popup">
    <div class="modal-dialog">
        <div class="modal-content">
            <button  class="modal-close icofont-close" data-bs-dismiss="modal"></button>

            <section class="user-form-part">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="user-form-card">
                                <!--
                            <div class="user-form-title">
                                <h2>welcome!</h2>
                                <p>Use your credentials to access</p>
                            </div>
-->
                                <div class="user-form-group">
                                    <!--
                                <ul class="user-form-social">
                                    <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i>login with facebook</a></li>
                                    <li><a href="#" class="twitter"><i class="fab fa-twitter"></i>login with twitter</a></li>
                                    <li><a href="#" class="google"><i class="fab fa-google"></i>login with google</a></li>
                                    <li><a href="#" class="instagram"><i class="fab fa-instagram"></i>login with instagram</a></li>
                                </ul>
                                <div class="user-form-divider">
                                    <p>or</p>
                                </div>
-->
                                    <form class="user-form">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Enter your email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Enter your password">
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" value="" id="check">
                                            <label class="form-check-label" for="check">Remember Me</label>
                                        </div>
                                        <div class="form-button">
                                            <button type="submit">login</button>
                                            <p>Forgot your password?<a href="reset-password.html">reset here</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="user-form-remind">
                                <p>Don't have any account?<a href="register.html">register here</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>

<!--=====================================
                    HEADER PART END
        =======================================-->
<dialog id="loginDialog" style="
    align-self: center;
    margin-left: auto;
    margin-right: auto;
    padding: 40px;
    border: 1px solid var(--primary);
    border-radius: 10px;
    height: 60dvh;
">  <center>
<button onclick="loginDialog.close()" style="
    right: 10px;
    position: absolute;
    top: 10px;
    padding: 5px;
    border: 1px solid red;
    border-radius: 5px;
    background: red;
    color: white;
">close</button>
<h2>Welcome to Our Website</h2>
    <br>
<h4>We're glad to have you here.
<br><a href="/register.php" style="
    color: var(--primary);
    text-decoration: underline;
">Explore our offerings by logging in </a>
and let us know if you have any questions.</h4>
<br>

    <a href="/register.php" class="btn btn-primary pulse">login now!</a>
<br>
<br>
<div class="col-lg-12 card card-body">
    <form class="contact-form" id="contactForm">
        <h4>Drop Your Message </h4>
        <br>
        <div class="form-group">
            <select name="reason" class="form-control" required="">
                <option value="">Select Reason</option>
                <option value="Enquiry">Enquiry</option>
                <option value="Report">Report</option>
                <option value="Request Medicine">Request Medicine</option>
                <option value="Change Account Info">Change Account Info</option>
                <option value="Others">Others</option>
            </select>
        </div>
        <div class="form-group">
            <div class="form-input-group">
                <input name="name" class="form-control" type="text" placeholder="Your Name" required="">
                <i class="icofont-user-alt-3"></i>
            </div>
        </div>
        <div class="form-group">
            <div class="form-input-group">
                <input name="email" class="form-control" type="email" placeholder="Your Email" required="">
                <i class="icofont-email"></i>
            </div>
        </div>
        <div class="form-group">
            <div class="form-input-group">
                <input name="phone" class="form-control" type="tel" placeholder="Your Phone Number" required="">
                <i class="icofont-phone"></i>
            </div>
        </div>
        <div class="form-group">
            <div class="form-input-group">
                <textarea name="message" class="form-control" placeholder="Your Message" required=""></textarea>
                <i class="icofont-paragraph"></i>
            </div>
        </div>
        <button type="submit" class="form-btn-group">
            <i class="fas fa-envelope"></i>
            <span>send message</span>
        </button>
    </form>
</div>

<script>
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
    
    // Serialize form data into JSON format
    var formData = {};
    var formElements = this.elements;
    for (var i = 0; i < formElements.length; i++) {
        var element = formElements[i];
        if (element.tagName === 'INPUT' || element.tagName === 'SELECT' || element.tagName === 'TEXTAREA') {
            formData[element.name] = element.value;
        }
    }
    
    // Send JSON data to the endpoint
    fetch('https://pharmabag.in:3000/contactus', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(formData)
    })
    .then(response => {
        if (response.ok) {
            alert('Message sent successfully! We will contact you soon.');
            // Optionally, reset the form after successful submission
            document.getElementById('contactForm').reset();
        } else {
            throw new Error('Failed to send message');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Failed to send message. Please try again later.');
    });
});
</script>

</center></dialog>
