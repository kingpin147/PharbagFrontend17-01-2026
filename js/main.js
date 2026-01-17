//========================================
//          HEADER SCROLL FIXED
//========================================
$(window).on("scroll", function(){
    var scrolling = $(this).scrollTop();
    // console.log(scrolling)
    if (scrolling > 130){
        $(".header-part").addClass("active");
    }else{
        $(".header-part").removeClass("active");
    }
});


//========================================
//          BACK TO TOP BUTTON
//========================================
$(window).on("scroll", function(){
    var scroll = $(this).scrollTop();
    if(scroll > 700){
        $(".backtop").show();
    }else{
        $(".backtop").hide();
    }
});


//========================================
//        DROPDOWN MENU FUNCTION
//========================================
$(function () {
    $(".dropdown-link").click(function() {
        $(this).next().toggle();
        $(this).toggleClass('active');
        if($('.dropdown-list:visible').length > 1) {
            $('.dropdown-list:visible').hide();
            $(this).next().show();
            $('.dropdown-link').removeClass('active');
            $(this).addClass('active');
        }
    }); 
});


//========================================
//       NAV SIDEBAR MENU ACTIVE
//========================================
$('.nav-link').on('click', function(){
    $('.nav-list li a').removeClass('active');
    $(this).addClass('active');
});


//========================================
//        CATEGORY SIDEBAR FUNCTION
//========================================
$('.header-cate, .cate-btn').on('click', function(){
    $('body').css('overflow', 'hidden');
    $('.category-sidebar').addClass('active');
    $('.category-close').on('click', function(){
        $('body').css('overflow', 'inherit');
        $('.category-sidebar').removeClass('active');
        $('.backdrop').fadeOut();
    });
});


//========================================
//         NAV SIDEBAR FUNCTION
//========================================

$('.header-user').on('click', function(){
    $('body').css('overflow', 'hidden');
    $('.nav-sidebar').addClass('active');
    $('.nav-close').on('click', function(){
        $('body').css('overflow', 'inherit');
        $('.nav-sidebar').removeClass('active');
        $('.backdrop').fadeOut();
    });
});

//========================================
//         CART SIDEBAR FUNCTION
//========================================
$('.header-cart, .cart-btn').on('click', function(){
    $('body').css('overflow', 'hidden');
    $('.cart-sidebar').addClass('active');
    $('.cart-close').on('click', function(){
        $('body').css('overflow', 'inherit');
        $('.cart-sidebar').removeClass('active');
        $('.backdrop').fadeOut();
    });
});

$('.filter-btn').on('click', function(){
    $('body').css('overflow', 'hidden');
    $('.filter-sidebar').addClass('active');
    $('.cart-close').on('click', function(){
        $('body').css('overflow', 'inherit');
        $('.filter-sidebar').removeClass('active');
        $('.backdrop').fadeOut();
    });
});

//========================================
//       BACKDROP SIDEBAR FUNCTION
//========================================
$('.header-user, .mobilefilter, .header-cart, .header-cate, .cart-btn, .cate-btn').on('click', function(){
    $('.backdrop').fadeIn();

    $('.backdrop').on('click', function(){
        $(this).fadeOut();
        $('body').css('overflow', 'inherit');
        $('.nav-sidebar').removeClass('active');
        $('.cart-sidebar').removeClass('active');
        $('.category-sidebar').removeClass('active');
        $('.filter-sidebar').removeClass('active');
    });
});


//========================================
//       COUPON FORM FUNCTION
//========================================
$('.coupon-btn').on('click', function(){
    $(this).hide();
    $('.coupon-form').css('display', 'flex');
});


//========================================
//       RESPONSIVE SEARCH BAR
//========================================
$('.header-src').on('click', function(){
    $('.header-form').toggleClass('active');
    $(this).children('.fa-search').toggleClass('fa-times');
});


//========================================
//       WISH ICON ACTIVE FUNCTION
//========================================
$('.wish').on('click', function(){
    $(this).toggleClass('active');
}); 


//========================================
//      ADD TO CART BUTTON FUNCTION
//========================================
// $('.product-add').on('click', function(){
//     var productAdd = $(this).next('.product-action');

//     $(this).hide();
//     productAdd.css('display', 'flex');
// });


//========================================
//      INCREMENT PRODUCT QUANTITY
//========================================
$('.action-plus').on('click', function(){
    var increamentValue = $(this).closest('.product-action').children('.action-input').get(0).value++
    var actionMinus = $(this).closest('.product-action').children('.action-minus');

    if(increamentValue > 0) {
        actionMinus.removeAttr('disabled');
    }
});

//========================================
//      DECREMENT PRODUCT QUANTITY
//========================================

$('.action-minus').on('click', function(){
    var decrementValue = $(this).closest('.product-action').children('.action-input').get(0).value--

    if(decrementValue == 2) {
        $(this).attr('disabled', 'disabled');
    }
});


//========================================
//         REVIEW WIDGET BUTTON
//========================================
$('.review-widget-btn').on('click', function(){
    $(this).next('.review-widget-list').toggle();
});


//========================================
//          COUPON SELECT TEXT
//========================================
$('.offer-select').on('click', function(){
    $(this).text('Copied!');
});


//========================================
//        PRODUCT VIEW IMAGE SHOW
//========================================
$('.modal').on('shown.bs.modal', function (e) {
    $('.preview-slider, .thumb-slider').slick('setPosition', 0);
});


//========================================
//         PROFILE SCHEDULE ACTIVE
//========================================
$('.profile-card.schedule').on('click', function(){
    $('.profile-card.schedule').removeClass('active');
    $(this).addClass('active');
});


//========================================
//         PROFILE CONTACT ACTIVE
//========================================
$('.profile-card.contact').on('click', function(){
    $('.profile-card.contact').removeClass('active');
    $(this).addClass('active');
});


//========================================
//          PROFILE ADDESS ACTIVE
//========================================
$('.profile-card.address').on('click', function(){
    $('.profile-card.address').removeClass('active');
    $(this).addClass('active');
});


//========================================
//         PROFILE PAYMENT ACTIVE
//========================================
$('.payment-card.payment').on('click', function(){
    $('.payment-card.payment').removeClass('active');
    $(this).addClass('active');
});


//========================================
//          my cart section
//=========================================
async function showmycart(){
   var x=await fetch("https://pharmabag.in:3000/buyer/auth/cart",{method:"GET",headers:{
    "auth-token":localStorage.getItem("auth-token")
   }})
var data=await x.json()

data=data.result_cart
var html=""
var finalprice=0
for (var i = data.length - 1; i >= 0; i--) {
    
    html+=`

<li class="cart-item">
            <div class="cart-media">
                <a href="#"><img src="${data[i].product_image.replace("https://pharmabag03.s3.ap-south-1.amazonaws.com/","https://pharmabag03.s3.ap-south-1.amazonaws.com/small_")}" alt="product"></a>
                <button class="cart-delete" onclick="deletecart('${data[i].cart_id}')"><i class="far fa-trash-alt"></i></button>
            </div>
            <div class="cart-info-group">
                <div class="cart-info">
                    <h6><a href="product.php?id=${data[i].product_id}">${data[i].product_name}</a></h6>
                    <p>Unit Price - ₹${data[i].product_price}</p>
                    <p>PTR - ₹${(parseFloat(data[i].pricing.final_user_buy)*parseFloat(data[i].pricing.per_ptr)).toFixed(2)}</p>
                    <p>GST - ₹${(parseFloat(data[i].pricing.final_user_buy)*parseFloat(data[i].pricing.gst_value)).toFixed(2)}</p>
${
		["same_product_bonus"].includes(data[i].pricing.type)?
`<small>🎉🎉 Only Pay for <b>${parseInt(data[i].pricing.final_user_buy)}</b> and get <b>${parseInt(data[i].quantity)-parseInt(data[i].pricing.final_user_buy)}</b> for free</small>`:''

}
                </div>
                <div class="cart-action-group p-price">
                    <div class="product-action">
                    <b>Total</b>
                        <button class="action-minus" title="Quantity Minus" onclick="minusCart(this)"><i class="icofont-minus"></i></button>
                        <input class="action-input" id="${data[i].cart_id}" data-product_id="${data[i].product_id}" title="Quantity Number" type="number" name="quantity" value="${data[i].quantity}" onchange="updatecart(this)">
                        <button class="action-plus" title="Quantity Plus" onclick="plusCart(this)"><i class="icofont-plus"></i></button>
                    </div>
                    <h6 id="final_order_value" style="color:black">₹${parseFloat(data[i].pricing.final_order_value).toFixed(2)}</h6>
                </div>
            </div>
        </li>

    `
finalprice+=parseFloat(data[i].pricing.final_order_value)
}
$("#cart-item").html(html)
$("#cartnumber-header").html(data.length)
$("#cartnumber-mobile").html(data.length)
$("#total-checkout-price").html('₹'+parseFloat(finalprice).toFixed(2))
if(data.length==0){
    document.getElementById("cart-checkout-btn").style.display="none"
}else{
document.getElementById("cart-checkout-btn").style.display="block"
}
};
if(localStorage.getItem("auth-token")){

showmycart()
}
//==================================
//      DELETE CART
//=================================
async function deletecart(id){
   var x=await fetch("https://pharmabag.in:3000/buyer/auth/cart/del",{method:"POST",
    headers:{
        "content-type":"application/json",
    "auth-token":localStorage.getItem("auth-token")
   },
   body:JSON.stringify({id:id})
})
if(x.status==200){showmycart()}
    else{
        alert("Sorry we cannot delete this item try again or contact admin.")
    }

}
//==================================
//      UPDATE CART
//=================================
async function updatecart(event){
   var x=await fetch("https://pharmabag.in:3000/buyer/auth/cart/update",{method:"POST",
    headers:{
        "content-type":"application/json",
    "auth-token":localStorage.getItem("auth-token")
   },
   body:JSON.stringify({id:event.parentElement.getElementsByClassName("action-input")[0].id,product_id:event.parentElement.getElementsByClassName("action-input")[0].dataset.product_id,quantity:event.parentElement.getElementsByClassName("action-input")[0].value})
})
if(x.status==200){showmycart()}
    else if(x.status==422){
        event.parentElement.getElementsByClassName("action-input")[0].value=parseInt(event.parentElement.getElementsByClassName("action-input")[0].value)+1
        alert("Sorry but quantity cannot be less than Min Quantity.Please note custom ordes cannot be changed,But if you want then delete this one and place new order")
    }
    else{
           event.parentElement.getElementsByClassName("action-input")[0].value=x.status
        alert("Your total bill value must be more then ₹20000")
           var x=await fetch("https://pharmabag.in:3000/buyer/auth/cart/update",{method:"POST",
    headers:{
        "content-type":"application/json",
    "auth-token":localStorage.getItem("auth-token")
   },
   body:JSON.stringify({id:event.parentElement.getElementsByClassName("action-input")[0].id,product_id:event.parentElement.getElementsByClassName("action-input")[0].dataset.product_id,quantity:event.parentElement.getElementsByClassName("action-input")[0].value})
})
if(x.status==200){showmycart()}
    }

}

async function placeorder(){

   var x=await fetch("https://pharmabag.in:3000/buyer/auth/cart",{method:"GET",headers:{
    "auth-token":localStorage.getItem("auth-token")
   }})
var data=await x.json()
if(data.result_cart.length){

  var x=await fetch("https://pharmabag.in:3000/buyer/auth/order/placed",{method:"POST",
    headers:{
        "content-type":"application/json",
    "auth-token":localStorage.getItem("auth-token")
   },
   body:JSON.stringify({
order_token:data.order_token,
order_status:"Placed",
order_payment_details:"Not paid"

   })
})
if(x.status==200){
    alert("Your order is sucessfully placed! Now make payment after seller accept your request.Click ok to see your orders")
    location.href="my-orders.php"
}

}
}


//=============================
async function getmywishlist(){

  var x=await fetch("https://pharmabag.in:3000/buyer/auth/wishlist",{method:"GET",
    headers:{
        "content-type":"application/json",
    "auth-token":localStorage.getItem("auth-token")
   }
})
var data=await x.json()
var html=""
for (var i = 0; i < data.length; i++) {
    if(data[i].product_details.length!=0){
    html+=`
<div class="col">
                <div class="product-card">
                    <div class="product-media">
                       
                        <a class="product-image" href="product.php">
                            <img src="${data[i].product_details[0].image_list[0]}" alt="product">
                        </a>
                        <div class="product-widget" onclick="deletewishist('${data[i].product_details[0]._id}',this)">
                            <a style="cursor: pointer;" title="remove from wishlist" class="fas fa-trash"></a>
                            
                        </div>
                    </div>
                    <div class="product-content">
                        <h6 class="product-name">
                            <a href="product.php">${data[i].product_details[0].product_name}</a>
                        </h6>
                        <p> ${data[i].product_details[0].categories.category_name} > ${data[i].product_details[0].categories.sub_category_name} </p>
                        <h6 class="clearfix">
                            <span class="float-start"><small>MRP</small> <br> ₹${data[i].product_details[0].product_price}</span>
                            <span class="float-end"><small>PTR</small> <br> ₹${data[i].product_details[0].discount_details.per_ptr}</span>
                        </h6>
                        <button class="product-add" title="Add to Cart" onclick="location.href='product.php?id=${data[i].product_details[0]._id}'">
                            <i class="fas fa-shopping-basket"></i>
                            <span>view Details</span>
                        </button>
                    </div>
                </div>
            </div>



    `
}}

try{document.getElementById("Wishlistdata").innerHTML=html}
catch(err){}



}





//==================================
//     show wishlist count
//=================================
async function showmywishlist(){
   var x=await fetch("https://pharmabag.in:3000/buyer/auth/wishlist",{method:"GET",
    headers:{
        "content-type":"application/json",
    "auth-token":localStorage.getItem("auth-token")
   }
})
if(x.status==200){
    let data=await x.json()
document.getElementById("wishlistcount").innerHTML=data.length
document.getElementById("mobilewishlistcount").innerHTML=data.length
try{getmywishlist()}catch(err){console.log(err)}

}
    else{
        console.log("Sorry we cannot show try again or contact admin.")
    }

}

if(localStorage.getItem("auth-token")){
showmywishlist()
}
//==================================
//      DELETE Wishlist
//=================================
async function deletewishist(id,event){
   var x=await fetch("https://pharmabag.in:3000/buyer/auth/wishlist/"+id,{method:"DELETE",
    headers:{
        "content-type":"application/json",
    "auth-token":localStorage.getItem("auth-token")
   }
})
if(x.status==200){
    event.classList.toggle("fa-trash")
    event.classList.add("breath")
event.setAttribute("onclick",`addtowishlist('${id}',this)`)
event.title='Add to wishlist'

    showmywishlist()}
    else{
        alert("Sorry we cannot delete this item try again or contact admin.")
    }

}

//=============================
//      add to wishlist
//=============================
async function addtowishlist(id,event){


   var x=await fetch("https://pharmabag.in:3000/buyer/auth/wishlist/"+id,{method:"POST",
    headers:{
        "content-type":"application/json",
    "auth-token":localStorage.getItem("auth-token")
   }
})
if(x.status==200){showmywishlist();
event.classList.toggle("fa-trash")
event.classList.remove("breath")
event.setAttribute("onclick",`deletewishist('${id}',this)`)
event.title='Remove from wishlist'

}
    else{
        alert("Sorry we cannot add this item try again or contact admin.")
    }

}

//============================
//      Add to cart
//============================
   async function updateOrder(pid,qty,order_id_now,minq){

var x=await fetch("https://pharmabag.in:3000/buyer/auth/cart",{
    method:"POST",
    headers:{"content-type":"application/json","auth-token":localStorage.getItem("auth-token")},
    body:JSON.stringify({
        product_id:pid,
        quantity:qty,
        price_details:JSON.stringify({
        delivary_date:new Date()
        })
    })

})
if(x.status==422){

    alert("you must select a valid  quantity to buy (More than Min qty "+minq+")")
    return
}
else if(x.status==423){

    alert("you must contact admin it seems this product is out of stock or removed by the seller")
    return
}
else if(x.status==404||x.status==401||x.status==402){
alert("You must login as a buyer first then you can buy")
location.href="register.php"
}
else if(x.status==424){
alert("Your total bill value must be more then ₹20000")
return

}
else{
//==================================================

  var x=await fetch("https://pharmabag.in:3000/buyer/auth/cart",{method:"GET",headers:{
    "auth-token":localStorage.getItem("auth-token")
   }})
var data=await x.json()
if(data.result_cart.length){

  var x=await fetch("https://pharmabag.in:3000/buyer/auth/order/placed",{method:"POST",
    headers:{
        "content-type":"application/json",
    "auth-token":localStorage.getItem("auth-token")
   },
   body:JSON.stringify({
order_token:data.order_token,
order_status:"Placed",
order_payment_details:"Not paid"

   })
})
if(x.status==200){
    alert("Your order is sucessfully Updated! Now make payment after seller accept your request.Click ok to see your orders")
   
  var del=await fetch("https://pharmabag.in:3000/buyer/auth/order/placed/"+order_id_now,{method:"DELETE",headers:{
    "auth-token":localStorage.getItem("auth-token")
   }})

if(del.status!=200){
console.log("can not delete old order")

}
location.reload()





}

}






}



    }


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




//========================
//     cancel order
//=======================
    async function cancelorder(pid,sid,mes,order_id_now,ordertext){
if(confirm("Are you sure you want to cancel this order?")){


var x=await fetch("https://pharmabag.in:3000/buyer/auth/get/my/orders",{
    method:"POST",
    headers:{"content-type":"application/json","auth-token":localStorage.getItem("auth-token")},
    body:JSON.stringify({
        product_id:decodeURI(ordertext),
        seller_id:sid,
        message:mes
    })

})
if(x.status==200){
addtolocalstorage("cancelorders",decodeURI(ordertext))
    alert("Your order is successfully cancelled!")
   
  var del=await fetch("https://pharmabag.in:3000/buyer/auth/order/placed/"+order_id_now,{method:"DELETE",headers:{
    "auth-token":localStorage.getItem("auth-token")
   }})

if(del.status!=200){
console.log("can not delete this order please contact admin")

}

location.reload()





}




}



    }



function minusCart(temp0){
temp0.parentElement.getElementsByClassName("action-input")[0].value=temp0.parentElement.getElementsByClassName("action-input")[0].value-1;
//temp0.parentElement.parentElement.style.background="#0a58ca"
updatecart(temp0)


}
function plusCart(temp0){
temp0.parentElement.getElementsByClassName("action-input")[0].value=parseInt(temp0.parentElement.getElementsByClassName("action-input")[0].value)+1;
//temp0.parentElement.parentElement.style.background="#0a58ca"


updatecart(temp0)


}

function minus_order(temp0,id,ptr){
temp0.parentElement.getElementsByClassName("action-input")[0].value=temp0.parentElement.getElementsByClassName("action-input")[0].value-1;
document.getElementById(id).innerText="₹"+(ptr*parseFloat(temp0.parentElement.getElementsByClassName("action-input")[0].value)).toFixed(2)
}
function plus_order(temp0,id,ptr){
temp0.parentElement.getElementsByClassName("action-input")[0].value=parseInt(temp0.parentElement.getElementsByClassName("action-input")[0].value)+1;
document.getElementById(id).innerText="₹"+(ptr*parseFloat(temp0.parentElement.getElementsByClassName("action-input")[0].value)).toFixed(2)

}


          /** we dont need it here in api bu need it on the client side.
             * Creates a json object including fields in the form
             *
             * @param {HTMLElement} form The form element to convert
             * @return {Object} The form data
             */
            var Form2JSON = (form) => {
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



function validateform(formid){
   var wrongcount=0
    var rightcount=0
for(let i=0;i<document.forms[formid].elements.length-1;i++){
if(!document.forms[formid].elements[i].value || ["add some details","add address","select location"].includes(document.forms[formid].elements[i].value) ){
document.forms[formid].elements[i].style.border="3px solid red"    
    wrongcount+=1
}else{
document.forms[formid].elements[i].style.border=""
    rightcount+=1
}
}
    return wrongcount
} 











