
<?php include 'sections/header.php' ?>
<?php include 'sections/header-top.php' ?>
<?php include 'sections/header-middle.php' ?>
<?php include 'sections/navbar.php' ?>
<?php include 'sections/sidebar-cat.php' ?>
<?php include 'sections/sidebar-cart.php' ?>
<?php include 'sections/sidebar-nav.php' ?>
<?php include 'sections/mobile-menu.php' ?>
<?php include 'sections/quick-view.php' ?>
<aside class="filter-sidebar">
    <div class="cart-header">
        <button class="cart-close"><i class="icofont-close"></i> </button>
    </div>
    <div class="shop-widget">
        <h6 class="shop-widget-title">Filter by Price</h6>
        <form id="filbyprice" data-mobile="mobile">
            <div class="shop-widget-group">
                <input type="number" placeholder="Min - 00" min="1" name="gte">
                <input type="number" placeholder="Max - 5k" max="" name="lte">
            </div>
        </form>
    </div>

    <div class="shop-widget">
        <h6 class="shop-widget-title">Filter by</h6>
        <form data-mobile="mobile">
            <ul class="shop-widget-list">
                <li>
                    <div class="shop-widget-content">
                        <input type="checkbox" id="tag1"  name="showonlynew" value="true">
                        <label for="tag1">new items</label>
                    </div>
                    <span class="shop-widget-number"></span>
                </li>
                <li>
                    <div class="shop-widget-content">
                        <input type="checkbox" id="tag3" name="showonlybest" value="true">
                        <label for="tag3">Best Selling</label>
                    </div>
                    <span class="shop-widget-number"></span>
                </li>
                <li>
                    <div class="shop-widget-content">
                        <input type="checkbox" id="tag5" name="showonlydiscount" value="true" >
                        <label for="tag5">discount items</label>
                    </div>
                    <span class="shop-widget-number"></span>
                </li>
            </ul>
        </form>
    </div>

    <div class="shop-widget">
        <h6 class="shop-widget-title">Location</h6>
        <form id="filbycity1" data-mobile="mobile">
            <ul class="shop-widget-list">
                <li>
                    <select name="city" id="city2131" class="form-control" value="">
                       
<script>

(async()=>{

$res = await fetch("https://pharmabag.in:3000/get/city");
var data=await $res.json()

var echo=`<option value="">Any Location</option>`
for (var $i=0; $i < data.length; $i++) { 
console.log(data[$i])
echo+= `<option value="${data[$i]}">${data[$i]}</option>`


}
console.log(echo)
document.getElementById("city2131").innerHTML=echo
document.getElementById("city").innerHTML=echo
}
)()





 </script>
                        
                    </select>
                </li>
                
            </ul>
        </form>
    </div>
    <div class="shop-widget">
        <h6 class="shop-widget-title">Discount type</h6>
        <form id="filbydisctype1" data-mobile="mobile"> 
           
            <ul class="shop-widget-list">
                <li>
                    <div class="shop-widget-content">
                        <input type="checkbox" id="brand1">
                        <label for="brand1">All</label>
                    </div>
                </li>
                <li>
                    <div class="shop-widget-content">
                        <input type="checkbox" id="brand1" name="disctype" value="ptr_discount">
                        <label for="brand1">Discount PTR Only</label>
                    </div>
                </li>
                <li>
                    <div class="shop-widget-content">
                        <input type="checkbox" id="brand2"  name="disctype" value="same_product_bonus">
                        <label for="brand1">Same product bonus</label>
                    </div>
                </li>
                <li>
                    <div class="shop-widget-content">
                        <input type="checkbox" id="brand3" name="disctype" value="ptr_discount_and_same_product_bonus">
                        <label for="brand1">Same product bonus & Discount</label>
                    </div>
                </li>
                <li>
                    <div class="shop-widget-content">
                        <input type="checkbox" id="brand4" name="disctype" value="different_product_bonus">
                        <label for="brand1">Different product bonus</label>
                    </div>
                </li>
                <li>
                    <div class="shop-widget-content">
                        <input type="checkbox" id="brand4" name="disctype" value="different_ptr_discount_and_same_product_bonus">
                        <label for="brand1">Different product bonus & Discount</label>
                    </div>
                </li>
            </ul>
        </form>
    </div>
    <div class="shop-widget">
        <h6 class="shop-widget-title">Category</h6>
        <form id="filbycat1" data-mobile="mobile">
            <!-- <input class="shop-widget-search" type="text" placeholder="Search..."> -->
            <ul class="shop-widget-list" id="categories7895">
                
            </ul>

        </form>
    </div>
    <div class="shop-widget">
        <h6 class="shop-widget-title">sub Category</h6>
        <form id="filbycat1" data-mobile="mobile">
            <!-- <input class="shop-widget-search" type="text" placeholder="Search..."> -->
            <ul class="shop-widget-list" id="categoriesmobile">
                
            </ul>

        </form>
    </div>

</aside>


<!--=====================================
                    SHOP PART START
        =======================================-->
        
<section class="inner-section shop-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 d-none d-lg-block">
                <div class="shop-widget">
    <h6 class="shop-widget-title">Filter by Price</h6>
    <form id="filbyprice1">
        <div class="shop-widget-group">
            <input type="number" placeholder="Min - 00" min="1" name="gte">
            <input type="number" placeholder="Max - 5k" max="" name="lte">
        </div>
    </form>
</div>

<div class="shop-widget">
    <h6 class="shop-widget-title">Filter by</h6>
    <form>
        <ul class="shop-widget-list">
            <li>
                <div class="shop-widget-content">
                    <input type="checkbox" id="tag1m" name="showonlynew" value="true">
                    <label for="tag1">new items</label>
                </div>
                <span class="shop-widget-number"></span>
            </li>
            <li>
                <div class="shop-widget-content">
                    <input type="checkbox" id="tag3m"  name="showonlybest" value="true">
                    <label for="tag3">Best Selling</label>
                </div>
                <span class="shop-widget-number"></span>
            </li>
            <li>
                <div class="shop-widget-content">
                    <input type="checkbox" id="tag5m" name="showonlydiscount" value="true">
                    <label for="tag5">discount items</label>
                </div>
                <span class="shop-widget-number"></span>
            </li>
        </ul>
    </form>
</div>

<div class="shop-widget">
    <h6 class="shop-widget-title">Location</h6>
    <form id="filbycity">
        <ul class="shop-widget-list">
            <li>
                <select name="city" id="city" class="form-control" value="">
                   
                </select>
            </li>
            
        </ul>
    </form>
</div>
<div class="shop-widget">
    <h6 class="shop-widget-title">Discount type</h6>
    <form id="filbydisctype">
        
        <ul class="shop-widget-list">
            <li>
                <div class="shop-widget-content">
                    <input type="checkbox" id="brand1">
                    <label for="brand1">All</label>
                </div>
            </li>
            <li>
                <div class="shop-widget-content">
                    <input type="checkbox" id="brand1" name="disctype" value="ptr_discount">
                    <label for="brand1">Discount PTR Only</label>
                </div>
            </li>
            <li>
                <div class="shop-widget-content">
                    <input type="checkbox" id="brand2" name="disctype" value="same_product_bonus">
                    <label for="brand1">Same product bonus</label>
                </div>
            </li>
            <li>
                <div class="shop-widget-content">
                    <input type="checkbox" id="brand3" name="disctype" value="ptr_discount_and_same_product_bonus">
                    <label for="brand1">Same product bonus & Discount</label>
                </div>
            </li>
            <li>
                <div class="shop-widget-content">
                    <input type="checkbox" id="brand4" name="disctype" value="different_product_bonus">
                    <label for="brand1">Different product bonus</label>
                </div>
            </li>
            <li>
                <div class="shop-widget-content">
                    <input type="checkbox" id="brand4" name="disctype" value="different_ptr_discount_and_same_product_bonus">
                    <label for="brand1">Different product bonus & Discount</label>
                </div>
            </li>
        </ul>
    </form>
</div>
<div class="shop-widget ">
    <h6 class="shop-widget-title">Category</h6>
    <form id="filbycat2"> 
        <!-- <input class="shop-widget-search" type="text" placeholder="Search..."> -->
        <ul class="shop-widget-list shop-widget-scroll" id="categories1231">
<script type="text/javascript">
    
            (async ()=>{

$res = await fetch("https://pharmabag.in:3000/user/get/all/category");
var data=await $res.json()

var echo=`<li>
                <div class="shop-widget-content">
                    <input type="checkbox" id="cate00">
                    <label for="cate1">All Category</label>
                </div>
                <span class="shop-widget-number"></span>
            </li>`
for (var $i=0; $i < data.length; $i++) { 

echo+= `
<li>
                <div class="shop-widget-content">
                    <input type="checkbox" ${"<?php echo $_GET["category"];?>"==data[$i].category_name?"checked":" "} id="cate${$i}" name="category" value="${data[$i].category_name}">
                    <label for="cate${$i}">${data[$i].category_name}</label>
                </div>
                <span class="shop-widget-number"></span>
            </li>
            `


}
console.log(echo)
document.getElementById("categories1231").innerHTML=echo
document.getElementById("categories7895").innerHTML=echo




            })()
</script>
    

       


        </ul>

    </form>
</div>
<div class="shop-widget">
    <h6 class="shop-widget-title">sub Category</h6>
    <form id="filbysubcat2"> 
        <!-- <input class="shop-widget-search" type="text" placeholder="Search..."> -->
        <ul class="shop-widget-list shop-widget-scroll" id="categories123135">
<script type="text/javascript">
    
            (async ()=>{

$res = await fetch("https://pharmabag.in:3000/user/get/all/subcategory");
var data=await $res.json()

var echo=`<li>
                <div class="shop-widget-content">
                    <input type="checkbox" id="cate00">
                    <label for="cate1">All subCategory</label>
                </div>
                <span class="shop-widget-number"></span>
            </li>`
for (var $i=0; $i < data.length; $i++) { 

echo+= `
<li>
                <div class="shop-widget-content">
                    <input type="checkbox" ${"<?php echo $_GET["subcategory"];?>"==data[$i].subcategory_name?"checked":" "} id="subcate${$i}" name="subcategory" value="${data[$i].subcategory_name}">
                    <label for="subcate${$i}">${data[$i].subcategory_name}</label>
                </div>
                <span class="shop-widget-number"></span>
            </li>
            `


}
console.log(echo)
document.getElementById("categories123135").innerHTML=echo
document.getElementById("categoriesmobile").innerHTML=echo




            })()
</script>
    

       


        </ul>

    </form>
</div>
            </div>            
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12 mb-4">
    <form data-mobile="mobile">
        <div class="top-filter">
            <div class="filter-show">
                <label class="filter-label">Show :</label>
                <select class="form-select filter-select" name="limit">
                    <option value="12">12</option>
                    <option value="24">24</option>
                    <option value="36">36</option>
                </select>
            </div>
            <div class="filter-short">
                <label class="filter-label">Sort by :</label>
                <select class="form-select filter-select" name="sort">
                    <option value="_id">New Item</option>
                   
                    <option value="product_name">Name </option>
                    <option value="4">Discount (High - Low) </option>
                    <option value="5">Discount (Low - High) </option>
                    <option value="6">Price (High - Low) </option>
                    <option value="7">Price (Low - High) </option>
                </select>

            </div>
        </div>
    </form>
    <div class="d-block d-lg-none mx-3 filter-btn">
        <button class="mobilefilter">
            <i class="fa fa-bars"></i> Filter
        </button>
    </div>
</div>
                </div>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-3" id="holder">
                   
               </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bottom-paginate">
                            <center>
<button id="loadmore" class="makepayment" style="background: #5467ed;"><span>Load more</span></button>
                                
                            </center>

                            <!-- <p class="page-info">Showing 12 of 600 Results</p>
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fas fa-long-arrow-alt-left"></i>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">...</li>
                                <li class="page-item"><a class="page-link" href="#">60</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================
                    SHOP PART END
        =======================================-->

<?php include 'sections/newsletter.php' ?>
<?php include 'sections/footer.php' ?>

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


var skip=0
const render =async ()=>{

var aaa=[]
for(var i=0;i<document.forms.length;i++){

if(window.innerWidth <992){
if(document.forms[i].dataset.mobile=="mobile"){
      aaa.push(Form2JSON(document.forms[i]))

}


}else{

  aaa.push(Form2JSON(document.forms[i]))
}

}
var obj=Object.assign({},...aaa)
var x=await fetch("https://pharmabag.in:3000/filter?skip=0&q="+encodeURI(JSON.stringify(obj)))
var data=await x.json()
skip=data[data.length-1].nextoffset
html=''
for (var i = data.length - 2; i >= 0; i--) {
    if (data[i].discount_form_details.buy!='') {
        var buyget='<label class="view-label sale">'+data[i].discount_form_details.buy+'+'+data[i].discount_form_details.get+'</label>';
    }else{
        var buyget='';
    } 
console.log(((new Date() - new Date(data[i].date))/(1000 * 60 * 60 * 24*30)))

    html+=`
    <div class="col">
<div class="product-card">
            <div class="product-media">
                <div class="product-label">

                ${

((new Date()-new Date(data[i].date))/(1000 * 60 * 60 * 24*30))<1?'<label class="label-text new">new</label>':''

                }
                   
                    ${data[i].discount_form_details.discountOnPtrOnlyPercenatge?`<label class="view-label off">${data[i].discount_form_details.discountOnPtrOnlyPercenatge}% off</label>`:''}
                     ${buyget}
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
                <p > <span style="font-size:80%"> Seller</span> <span style="color:var(--primary);font-size: 80%;padding: 6px;border-radius: 7px;">${data[i].seller_id.substr(0,8)}xxxxxx<span></span></span> </p>
                
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
</div>

    `
}




document.getElementById("holder").innerHTML=html
}


for(var i=0;i<document.forms.length;i++){
if(window.innerWidth <992){
if(document.forms[i].dataset.mobile=="mobile"){
    document.forms[i].addEventListener("change",render)
}


}
 else{document.forms[i].addEventListener("change",render)
}
}
$(document).ready(function(){
setTimeout(()=>{render()},1000)
// your code
});




const loadmore =async ()=>{

var aaa=[]
for(var i=0;i<document.forms.length;i++){
  aaa.push(Form2JSON(document.forms[i]))}
var obj=Object.assign({},...aaa)
var x=await fetch("https://pharmabag.in:3000/filter?skip="+skip+"&q="+encodeURI(JSON.stringify(obj)))
var data=await x.json()
skip=data[data.length-1].nextoffset
html=''
for (var i = data.length - 2; i >= 0; i--) {
     if (data[i].discount_form_details.buy!='') {
        var buyget='<label class="view-label sale">'+data[i].discount_form_details.buy+'+'+data[i].discount_form_details.get+'</label>';
    }else{
        var buyget='';
    } 
var col=document.createElement("div")
col.className="col"
col.innerHTML=`
    <div class="col">
<div class="product-card">
            <div class="product-media">
                <div class="product-label">
                 
                ${

((new Date()-new Date(data[i].date))/(1000 * 60 * 60 * 24*30))<1?'<label class="label-text new">new</label>':''

                }
                   
                    ${data[i].discount_form_details.discountOnPtrOnlyPercenatge?`<label class="view-label off">-${data[i].discount_form_details.discountOnPtrOnlyPercenatge}% off</label>`:''}
                    ${buyget}
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
                <p><span style="font-size:80%"> Seller</span> <span style="color:var(--primary);font-size: 80%;padding: 6px;border-radius: 7px;">${data[i].seller_id.substr(0,8)}xxxxxx<span></span></span> </p>
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
</div>

    `
document.getElementById("holder").appendChild(col)
}




}















document.getElementById("loadmore").onclick=()=>{loadmore()}
</script>

</body>

</html>
