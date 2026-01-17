

$(function() {
	"use strict";

  // Tooltops

    $(function () {
        $('[data-bs-toggle="tooltip"]').tooltip();
    })



    $(".nav-toggle-icon").on("click", function() {
		$(".wrapper").toggleClass("toggled")
	})

    $(".mobile-toggle-icon").on("click", function() {
		$(".wrapper").addClass("toggled")
	})

	$(function() {
		for (var e = window.location, o = $(".metismenu li a").filter(function() {
				return this.href == e
			}).addClass("").parent().addClass("mm-active"); o.is("li");) o = o.parent("").addClass("mm-show").parent("").addClass("mm-active")
	})


	$(".toggle-icon").click(function() {
		$(".wrapper").hasClass("toggled") ? ($(".wrapper").removeClass("toggled"), $(".sidebar-wrapper").unbind("hover")) : ($(".wrapper").addClass("toggled"), $(".sidebar-wrapper").hover(function() {
			$(".wrapper").addClass("sidebar-hovered")
		}, function() {
			$(".wrapper").removeClass("sidebar-hovered")
		}))
	})



	$(function() {
		$("#menu").metisMenu()
	})


	$(".search-toggle-icon").on("click", function() {
		$(".top-header .navbar form").addClass("full-searchbar")
	})
	$(".search-close-icon").on("click", function() {
		$(".top-header .navbar form").removeClass("full-searchbar")
	})


	$(".chat-toggle-btn").on("click", function() {
		$(".chat-wrapper").toggleClass("chat-toggled")
	}), $(".chat-toggle-btn-mobile").on("click", function() {
		$(".chat-wrapper").removeClass("chat-toggled")
	}), $(".email-toggle-btn").on("click", function() {
		$(".email-wrapper").toggleClass("email-toggled")
	}), $(".email-toggle-btn-mobile").on("click", function() {
		$(".email-wrapper").removeClass("email-toggled")
	}), $(".compose-mail-btn").on("click", function() {
		$(".compose-mail-popup").show()
	}), $(".compose-mail-close").on("click", function() {
		$(".compose-mail-popup").hide()
	})


	$(document).ready(function() {
		$(window).on("scroll", function() {
			$(this).scrollTop() > 300 ? $(".back-to-top").fadeIn() : $(".back-to-top").fadeOut()
		}), $(".back-to-top").on("click", function() {
			return $("html, body").animate({
				scrollTop: 0
			}, 600), !1
		})
	})


	// switcher 

	$("#LightTheme").on("click", function() {
		$("html").attr("class", "light-theme")
	}),

	$("#DarkTheme").on("click", function() {
		$("html").attr("class", "dark-theme")
	}),

	$("#SemiDarkTheme").on("click", function() {
		$("html").attr("class", "semi-dark")
	}),

	$("#MinimalTheme").on("click", function() {
		$("html").attr("class", "minimal-theme")
	})


	$("#headercolor1").on("click", function() {
		$("html").addClass("color-header headercolor1"), $("html").removeClass("headercolor2 headercolor3 headercolor4 headercolor5 headercolor6 headercolor7 headercolor8")
	}), $("#headercolor2").on("click", function() {
		$("html").addClass("color-header headercolor2"), $("html").removeClass("headercolor1 headercolor3 headercolor4 headercolor5 headercolor6 headercolor7 headercolor8")
	}), $("#headercolor3").on("click", function() {
		$("html").addClass("color-header headercolor3"), $("html").removeClass("headercolor1 headercolor2 headercolor4 headercolor5 headercolor6 headercolor7 headercolor8")
	}), $("#headercolor4").on("click", function() {
		$("html").addClass("color-header headercolor4"), $("html").removeClass("headercolor1 headercolor2 headercolor3 headercolor5 headercolor6 headercolor7 headercolor8")
	}), $("#headercolor5").on("click", function() {
		$("html").addClass("color-header headercolor5"), $("html").removeClass("headercolor1 headercolor2 headercolor4 headercolor3 headercolor6 headercolor7 headercolor8")
	}), $("#headercolor6").on("click", function() {
		$("html").addClass("color-header headercolor6"), $("html").removeClass("headercolor1 headercolor2 headercolor4 headercolor5 headercolor3 headercolor7 headercolor8")
	}), $("#headercolor7").on("click", function() {
		$("html").addClass("color-header headercolor7"), $("html").removeClass("headercolor1 headercolor2 headercolor4 headercolor5 headercolor6 headercolor3 headercolor8")
	}), $("#headercolor8").on("click", function() {
		$("html").addClass("color-header headercolor8"), $("html").removeClass("headercolor1 headercolor2 headercolor4 headercolor5 headercolor6 headercolor7 headercolor3")
	})


	// new PerfectScrollbar(".header-message-list")
  //   new PerfectScrollbar(".header-notifications-list")



});




async function vacationcheck(event){
if(parseInt(localStorage.getItem("vacation"))>0){

var x=await fetch("https://pharmabag.in:3000/seller/end/vacation",{
method:"POST",
headers:{
    "content-type":"application/json",
    "auth-token":localStorage.getItem("auth-token")
},
body:JSON.stringify({expire_date:document.getElementById('expire_date').value})

})
if (x.status==200) {
	alert("You are now Active now! Good to see you")
	localStorage.setItem("vacation","0")
document.getElementById('aaa').checked=false
document.getElementById("vacationNotice").style.display="none"


}else{
	alert("Sorry we cannot end you vacation!please wait some time.")

}
}else{

	$("#myModal").modal("show")
}




}

function checkdate(e){
e.parentElement.parentElement.getElementsByClassName("form-label")[0].innerText='How many days you will go for vacation'
if(new Date(e.value)-new Date()<0){e.value='';

e.style.border="1px solid red"
e.parentElement.parentElement.getElementsByClassName("form-label")[0].innerText="Dates cannot be in Past or today! enter a future date"


return false}
}
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

alert("You are On vacation now! enjoy")
	localStorage.setItem("vacation","1")
	$("#myModal").modal("hide")
document.getElementById('aaa').checked=true

}
else{
    alert("Sorry but you cannot go for a vacation now!")
}

}

}


async function checksellerlogin(){


    if(localStorage.getItem("user_type")=="seller"&& localStorage.getItem("auth-token")){


var x=await fetch("https://pharmabag.in:3000/seller/auth/profile",{method:"GET",
    headers:{"content-type":"application/json","auth-token":localStorage.getItem("auth-token")}})
let data=await x.json()
var html=`


<li>
               <a class="dropdown-item" href="#">
                 <div class="d-flex align-items-center">
                    <img src="./assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="54" height="54">
                    <div class="ms-3">
                      <h6 class="mb-0 dropdown-user-name">Hi, ${data.seller_details.name}</h6>
                      <small class="mb-0 dropdown-user-designation text-secondary">Seller</small>

                      ${data.seller_user.status==1?'<small class="mb-0 dropdown-user-designation badge alert-success">Verified</small>':" "}
                      
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
                <a class="dropdown-item" onclick="if(confirm('Do you want to logout')){localStorage.removeItem('auth-token');location.reload()}">
                   <div class="d-flex align-items-center">
                     <div class=""><i class="bi bi-lock-fill"></i></div>
                     <div class="ms-3"><span>Logout</span></div>
                   </div>
                 </a>
              </li>



`



               


    }else{

html=` <li><a href="../register.php" class="btn btn-primary">Login Now</a>
              </li> `
document.getElementById("afterlogin").parentElement.parentElement.innerHTML=html

    }

document.getElementById("afterlogin").innerHTML=html
$('.header-cart, .cart-btn').on('click', function(){
    $('body').css('overflow', 'hidden');
    $('.cart-sidebar').addClass('active');
    $('.cart-close').on('click', function(){
        $('body').css('overflow', 'inherit');
        $('.cart-sidebar').removeClass('active');
        $('.backdrop').fadeOut();
    });
}); 



    }

checksellerlogin()


//=======================
//      add to local storgae
//====================
function addtolocalstorage(name,value){
    if(!localStorage.getItem(name)){
        x=[]
       x.push(value)

        localStorage.setItem(name,JSON.stringify(x))
        return 0

    }
    else{
        var x=JSON.parse(localStorage.getItem(name))
        x.push(value)
        localStorage.setItem(name,JSON.stringify(x))
        return 0
    }

}
count=0

async function checkfornotification(){
document.getElementById("notificatiocount").innerText=''
var x=await fetch("https://pharmabag.in:3000/seller/my/notifications",{method:"GET",
    headers:{"content-type":"application/json","auth-token":localStorage.getItem("auth-token")}})
let data=await x.json()
var count=parseInt(localStorage.getItem("countb"))||0

var html=''
for (var i = 0; i < data.length; i++) {
	//console.log(new Date(data[i].date),new Date(localStorage.getItem("lastseenNotifications")))
	
  if(new Date(data[i].date)> new Date(localStorage.getItem("lastseenNotificationsbuyer"))) {
       
        localStorage.setItem("countb",count++)
    }else{
        
        localStorage.setItem("countb",0)
    }
	html+=`
            <a class="dropdown-item" href="#">
                <div class="d-flex align-items-center">
                    <img src="./assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="50" height="50">
                    <div class="ms-3 flex-grow-1">
                        
                        <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">${data[i].message}</small>
                    </div>
                </div>
            </a>
        `
}
document.getElementById("notificatiocount").innerText=count>10?"10+":count
document.getElementById("header-message-list").innerHTML=html
localStorage.setItem("lastseenNotifications",data[0].date);

}
checkfornotification()
setInterval(checkfornotification,60000)