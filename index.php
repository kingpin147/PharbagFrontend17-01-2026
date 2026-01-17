
<?php include 'sections/header.php' ?>
<?php include 'sections/header-top.php' ?>
<?php include 'sections/header-middle.php' ?>
<?php include 'sections/navbar.php' ?>
<?php include 'sections/sidebar-cat.php' ?>
<?php include 'sections/sidebar-cart.php' ?>
<?php include 'sections/sidebar-nav.php' ?>
<?php include 'sections/mobile-menu.php' ?>
<?php include 'sections/quick-view.php' ?>

<!--=====================================
                NEW ITEM PART START
        =======================================-->
        <br><br>

<?php include 'sections/testimonial.php' ?>
<section id="sectionNewProduct" class="section newitem-part">
    <div class="container">
        <div class="row">
            <div class="col pt-4">
                <div class="section-heading">
                    <h2>collected new items</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3 border">
                <?php include 'sections/category.php' ?>
            </div>
            <div class="col-9">
                <?php include 'sections/new-item.php' ?>

                <div class="col">
                    <div class="section-btn-25">
                        <a href="shop.php" class="btn btn-outline">
                            <i class="fas fa-eye"></i>
                            <span>show more</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section newitem-part">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-heading">
                    <h2>Top manufacturers</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-3">

                <?php include 'sections/manufacture-cat.php' ?>
            </div>
            <div class="col-9">
                <?php include 'sections/manufacture.php' ?>

                <div class="col">
                    <div class="section-btn-25">
                        <a href="shop.php" class="btn btn-outline">
                            <i class="fas fa-eye"></i>
                            <span>show more</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section newitem-part">
    <div class="container">
        <div class="row">
            <div class="col-12 clearfix">
                <div class="section-heading float-start">
                    <h2>Popular in your area</h2>
                </div>
                <div class="section-btn-25 float-end">
                    <a href="shop.php" class="btn btn-outline">
                        <i class="fas fa-eye"></i>
                        <span>show more</span>
                    </a>
                </div>
            </div>
            <div class="col-12 py-5">
<center>
    <h5>To know about what is selleing the most in your area give us location access or select your area from the list</h5></center>
    <br>
    <br>
<div style="display: flex;">
    <p id="demo" class="makepayment" style="width: 100%;padding: 10px;text-align: center;" onclick="getLocation()">
            click here to give us your location
    </p>
    
     <h3 style="margin: 7px;">Or</h3>

<select name="city" id="city" class="form-control" value="" onchange="showpop(this)" style="border: 2px solid black;cursor: pointer;">
<script>

(async()=>{

$res = await fetch("https://pharmabag.in:3000/get/city");
var data=await $res.json()

var echo=`<option value="">Choose your area</option>`
for (var $i=0; $i < data.length; $i++) { 
console.log(data[$i])
echo+= `<option value="${data[$i]}">${data[$i]}</option>`


}

document.getElementById("city").innerHTML=echo
}
)()





 </script>
</select>


<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
x.innerText="Please Allow permission..."
    navigator.geolocation.getCurrentPosition(showPosition, showError);
x.innerText="Please Wait..."

  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
(async ()=>{
var y= await fetch(`https://pharmabag.in:3000/user/get/nearby`,{"method":"POST",headers:{"content-type":"application/json"},body:JSON.stringify({lonlat:[position.coords.longitude,position.coords.latitude]})})
var data=await y.json()

if(data.length==0){
x.innerText="No products found in 50KM"
return 0}
//skip=data[data.length-1].nextoffset
html='<ul class="team-slider slider-arrow">'
for (var $i = data.length - 1; $i >= 0; $i--) {

html+=`<li>
        <div class="product-card">
            <div class="product-media">
                <div class="product-label">
                    <label class="label-text new">new</label>
                </div>
                <a class="product-image" href="product.php?id=${data[$i]._id}">
                    <img src="${data[$i].image_list[0]}" alt="product">
                </a>
                <div class="product-widget">
                    <a style="cursor:pointer;" title="Add to wishlist" onclick="addtowishlist('${data[$i]._id}',this)" class="fas fa-heart"></a>
                    <a title="Product View" href="product.php?id=${data[$i]._id}" class="fas fa-eye"></a>
                </div>
            </div>
            <div class="product-content">
                <h6 class="product-name">
                    <a href="product.php?id=${data[$i]._id}">${data[$i].product_name}</a>
                </h6>
                <p> ${data[$i].categories.category_name} > ${data[$i].categories.sub_category_name} </p>

                <h6 class="clearfix">
                    <span class="float-start"><small>MRP</small> <br> ₹${data[$i].product_price}</span>
                    <span class="float-end"><small>PTR</small> <br> ₹${data[$i].discount_details.per_ptr}</span>
                </h6>

                <button class="product-add" title="Add to Cart" onclick="location.href='product.php?id=${data[$i]._id}'">
                    <i class="fas fa-shopping-basket"></i>
                    <span>View Details</span>
                </button>

            </div>
        </div>
    </li>
    `


}
html+='</ul>'
x.parentElement.parentElement.innerHTML=html
$('.team-slider').slick({
    dots: false,
    infinite: true,
    autoplay: false,
    arrows: true,
    speed: 800,
    prevArrow: '<i class="icofont-arrow-left bamdik"></i>',
    nextArrow: '<i class="icofont-arrow-right dandik"></i>',
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }
    ]
});

})()





}

function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      x.innerHTML = "User denied the request for Geolocation."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML = "Location information is unavailable."
      break;
    case error.TIMEOUT:
      x.innerHTML = "The request to get user location timed out."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML = "An unknown error occurred."
      break;
  }
}


async function showpop(e){
var x= await fetch(`https://pharmabag.in:3000/filter?skip=0&q={"gte":"","lte":"","showonlybest":"true","city":"${document.getElementById('city').value}","limit":"12","sort":"_id"}`)
var data=await x.json()
skip=data[data.length-1].nextoffset
html='<ul class="team-slider slider-arrow">'
for (var $i = data.length - 2; $i >= 0; $i--) {

html+=`<li>
        <div class="product-card">
            <div class="product-media">
                <div class="product-label">
                    <label class="label-text new">new</label>
                </div>                
                <a class="product-image" href="product.php?id=${data[$i]._id}">
                    <img src="${data[$i].image_list[0]}" alt="product">
                </a>
                <div class="product-widget">
                    <a style="cursor:pointer;" title="Add to wishlist" onclick="addtowishlist('${data[$i]._id}',this)" class="fas fa-heart"></a>                   
                    <a title="Product View" href="product.php?id=${data[$i]._id}" class="fas fa-eye"></a>
                </div>
            </div>
            <div class="product-content">
                <h6 class="product-name">
                    <a href="product.php?id=${data[$i]._id}">${data[$i].product_name}</a>
                </h6>
                <p> ${data[$i].categories.category_name} > ${data[$i].categories.sub_category_name} </p>
                
                <h6 class="clearfix">
                    <span class="float-start"><small>MRP</small> <br> ₹${data[$i].product_price}</span>
                    <span class="float-end"><small>PTR</small> <br> ₹${data[$i].discount_details.per_ptr}</span>
                </h6>
                
                <button class="product-add" title="Add to Cart" onclick="location.href='product.php?id=${data[$i]._id}'">
                    <i class="fas fa-shopping-basket"></i>
                    <span>View Details</span>
                </button>
                
            </div>
        </div>
    </li>
    `


}
html+='</ul>'
if(data.length-1==0){

html=`<center>No Products available in ${document.getElementById('city').value}</center>`

}
e.parentElement.parentElement.innerHTML=html
$('.team-slider').slick({
    dots: false,
    infinite: true,
    autoplay: false,
    arrows: true,
    speed: 800,
    prevArrow: '<i class="icofont-arrow-left bamdik"></i>',
    nextArrow: '<i class="icofont-arrow-right dandik"></i>',
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }
    ]
});

}





    


const loadmanu =async (name)=>{


var x=await fetch("https://pharmabag.in:3000/user/get/product/by/manufacture/"+name)
var data=await x.json()

html='<ul class="team-slider slider-arrow">'

for (var i = data.length - 1; i >= 0; i--) {

html+=`
    <li>
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
</li>

    `
}

if(data.length==0){

html=`<center>No Products available for ${name}</center>`

}

document.getElementById("holdermanu").innerHTML=html+"</ul>"
try{
$('.team-slider').slick({
    dots: false,
    infinite: true,
    autoplay: false,
    arrows: true,
    speed: 800,
    prevArrow: '<i class="icofont-arrow-left bamdik"></i>',
    nextArrow: '<i class="icofont-arrow-right dandik"></i>',
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }
    ]
});


}catch(errr){console.log(errr)}


}

</script>








    </div>
      



            </div>




        </div>
    </div>
</section>

<?php include 'sections/newsletter.php' ?>
<?php include 'sections/footer.php' ?>
