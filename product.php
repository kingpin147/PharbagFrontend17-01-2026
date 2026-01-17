
<?php include 'sections/header.php' ?>
<?php include 'sections/header-top.php' ?>
<?php include 'sections/header-middle.php' ?>
<?php include 'sections/navbar.php' ?>
<?php include 'sections/sidebar-cat.php' ?>
<?php include 'sections/sidebar-cart.php' ?>
<?php include 'sections/sidebar-nav.php' ?>
<?php include 'sections/mobile-menu.php' ?>
<?php include 'sections/quick-view.php' ?>


<!-- <script src="https://code.jquery.com/jquery-3.6.3.min.js" ></script> -->
<!--=====================================
                PRODUCT DETAILS PART START
        =======================================-->
<style type="text/css">


/*======================
    404 page
=======================*/

.page_404 {
  padding: 40px 0;
  background: #fff;
  font-family: "Arvo", serif;
}

.page_404 img {
  width: 100%;
}

.four_zero_four_bg {
  background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
  height: 400px;
  background-position: center;
}

.four_zero_four_bg h1 {
  font-size: 80px;
}

.four_zero_four_bg h3 {
  font-size: 80px;
}

.link_404 {
  color: #fff !important;
  padding: 10px 20px;
  background: #39ac31;
  margin: 20px 0;
  display: inline-block;
}
.contant_box_404 {
  margin-top: -50px;
}

#goback{
padding: 10px;
border: 1px solid gray;
border-radius: 50%;
}

#goback:hover{
color: white;
background: #5467ed;


    
}
.subsellerID{

}
.mainsellerid{
    display: none;
}
.sellerID:hover .mainsellerid{display: inline-flex;}
.sellerID:hover .subsellerID{display: none;}
 @keyframes shake {
            0% { transform: translateX(0); }
            20% { transform: translateX(-15px); } /* Increase leftward movement */
            40% { transform: translateX(15px); }  /* Increase rightward movement */
            60% { transform: translateX(-15px); } /* Increase leftward movement */
            80% { transform: translateX(15px); }  /* Increase rightward movement */
            100% { transform: translateX(0); }
        }

        /* Apply the animation to the element with the "shake" class */
        .shake {
            animation: shake 0.5s ease-in-out;
        }
 @keyframes breath {
            0% { transform: scale(1); }
            50% { transform: scale(1.5); }
          /* Increase leftward movement */
              /* Increase rightward movement */
            100% { transform: scale(1); }
        }
        .breath{
            animation: breath 1s infinite ease-in-out;

        }
@media only screen and (max-width: 768px){
    #outofstockimage{
        top: 170px;
    }
}
</style>

<?php 
require_once "./vendor/leafs/fetch/src/Fetch.php";
use function Leaf\fetch;
try{
$res = fetch("https://pharmabag.in:3000/buyer/un/auth/products/per/".$_GET['id']);
$resmain=$res;
echo is_null($res->data->result_products);
if (is_null($res->data->result_products)) {
   echo <<<ht
<section class="page_404">
    <div class="container">
        <div class="row">   
        <div class="col-sm-12 ">
        <div class="col-sm-10 col-sm-offset-1  text-center" style="width:100%;">
        <div class="four_zero_four_bg">
            <h1 class="text-center "></h1>
        
        
        </div>
        
        <div class="contant_box_404">
        <h3 class="h2">
        This seller is Not Accepting Orders Now!
        </h3>
        
        <p>the page you are looking for not avaible! either medicine is not available or seller is on vaccation</p>
        
        <a href="/" class="link_404" data-translate="en">View More Products</a>
    </div>
        </div>
        </div>
        </div>
    </div>
</section>
ht;
exit();
}
$smallimgog=str_replace("https://pharmabag03.s3.ap-south-1.amazonaws.com/","https://pharmabag03.s3.ap-south-1.amazonaws.com/small_",$res->data->result_products->image_list[0]);
echo '<meta property="og:image" content="{$smallimgog}">';
$imgloop='';
for ($i=0; $i < count($res->data->result_products->image_list); $i++) { 
    $smallimg=str_replace("https://pharmabag03.s3.ap-south-1.amazonaws.com/","https://pharmabag03.s3.ap-south-1.amazonaws.com/small_",$res->data->result_products->image_list[$i]);
    $imgloop.=<<<imgloop
    <li><img src="{$smallimg}" alt="product"></li>'
imgloop;
}
$expdate=substr(explode("T", $res->data->result_products->expire_date)[0], 0, 7);
$discount_type=str_replace("_"," ",$res->data->result_products->discount_details->type);
$buy=$res->data->result_products->discount_form_details->buy?$res->data->result_products->discount_form_details->buy:'';
$get=$res->data->result_products->discount_form_details->get?$res->data->result_products->discount_form_details->get:'';
$diffproduct=$res->data->result_products->discount_form_details->get?$res->data->result_products->discount_details->product_name:'';
$diffhtml='';
if($res->data->result_products->discount_details->type=="different_product_bonus"||$res->data->result_products->discount_details->type=="different_ptr_discount_and_same_product_bonus"){
$diffhtml='<li><b>Product: </b> '.$diffproduct.'</li>';
}
$sellerID=substr($res->data->result_products->seller_id,0,8);
if($res->data->result_products->stock==0){
    $outofstockimage='<img id="outofstockimage" src="https://drive.google.com/uc?export=download&id=1cjc18clVN1pHJ_nj26TPbC5V68NZ4GRa" style="width: 100%;position: absolute;z-index: 9;">';
    $breath="breath";
    $noclick="pointer-events:none;";
}else{
    $outofstockimage='';
     $breath="";
    $noclick="pointer-events:auto;";
}
$html=<<<hhh
<section class="inner-section">

    <div class="container">
        <div class="product-back">
            <a  onclick="history.go(-1)"><i class="fa-solid fa-arrow-left" id="goback"></i></a>
        </div>
    </div>

    <div class="container mt-3">
        <div class="product-view col-12 w-100" style="max-width:10000px;">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="view-gallery">
                        <div class="view-label-group">
                            <label class="view-label new">new</label>
                            <label class="view-label off">-{$res->data->result_products->discount_form_details->discountOnPtrOnlyPercenatge}%</label>
                        </div>
                        <ul class="preview-slider slider-arrow">
                            {$imgloop}
                        </ul>
                        <ul class="thumb-slider">
                       {$imgloop}
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="view-details">
                        <h3 class="view-name">
                            <a>{$res->data->result_products->product_name}</a>
                        </h3>
                        <div class="view-meta">
                            
                            <p>Company: {$res->data->result_products->company_name}</p>
                          
                        </div>
                        
<!--                        <p class="view-desc">{$res->data->result_products->extra_fields[3]}</p>-->
                        <div class="d-flex justify-content-between">
                            <ul>
                                <li><b>Expiry: </b>{$expdate}</li>
                                <li><b>Stock: </b>{$res->data->result_products->stock}</li>
                                <li><b>Min qty: </b> {$res->data->result_products->min_order_qty}</li>
                                <li><b>Max qty: </b> {$res->data->result_products->max_order_qty}</li>
                                <li><b>Discount: </b> {$res->data->result_products->discount_form_details->discountOnPtrOnlyPercenatge}%</li>
                            </ul>
                            <ul>
                                <li><b>Medicine Type: </b> {$res->data->result_products->categories->sub_category_name} </li>
                                <li><b>Country: </b> {$res->data->result_products->extra_fields[0]} </li>
                                <li><b>Buy: </b> {$buy}</li>
                                <li><b>Get: </b> {$get}</li>
                                {$diffhtml}
                                <li><b>GST: </b> {$res->data->result_products->discount_details->gst}%</li>
<li><b>Expected Delivary Date: </b> {$res->data->result_products->extra_fields[5]}+3 Days</li>                                
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li><b>Chemical Combination: </b> {$res->data->result_products->chemical_combination}</li>
                                <li><b>Discount type: </b> {$discount_type}</li>
                                <li class="sellerID" style="color:var(--primary)"><b>Seller ID: </b> <span class="subsellerID">{$sellerID}xxxxxx</span><span class="mainsellerid">{$res->data->result_products->seller_id}</span></li>
                            </ul>
                        </div>

                        <div class="view-add-group" style="position:relative;">
{$outofstockimage}
                            <div class="input-group p-price align-items-start f-flex justify-content-between">

                                <h4 class="view-price">
                                    <span>MRP:</span><span> ₹{$res->data->result_products->product_price}<br> <small> </small> </span>
                                    <span> </span>
                                </h4>
                                <h4 class="view-price">
                                    <span>PTR:</span><span> ₹{$res->data->result_products->discount_details->per_ptr} <br> <small> ₹{$res->data->result_products->product_price}</small> </span>
                                    <span> (Rate without GST)</span>
                                </h4>

                            </div>
                            <form onsubmit="event.preventDefault()">
                                <div class="input-group p-price">

                                    <div class="product-action" style="{$noclick}">
                                        <span class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></span>
                                        <input class="action-input" title="Quantity Number" type="number"  name="quantity" value="1" required id="normvalue">
                                        <span class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></span>
                                    </div>

<i  style="
    cursor: pointer;
    font-size: 25px;
    border: 1px solid gray;
    border-radius: 50%;
    padding: 13px;
    z-index:99;
" title="Add to wishlist" class="fa-regular fa-heart {$breath}" id="wishlistpolyfil" onclick="addtowishlist('{$res->data->result_products->_id}',this)"></i>
                                    
                                </div>
                                 <p style="font-size:12px">*you have to buy more than ₹20000 </p>
                                <button style="{$noclick}" class="product-add" title="Add to Bag" onclick="addtocart('{$res->data->result_products->_id}',document.getElementById('normvalue').value,new Date('{$res->data->result_products->extra_fields[5]}'),this)">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>Add to Bag</span>
                                </button>
                            </form>

                            <br>
                            <p style="font-size:12px">*Custom order will work to place any amount of order quantity</p>
                            <button style="{$noclick}" class="product-add" title="Custom Order" data-bs-toggle="modal" data-bs-target="#customOrder">
                                <i class="fas fa-shopping-basket"></i>
                                <span>Custom Order</span>
                            </button>

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<div class="modal fade" id="customOrder">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body card bg-white">
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <form onsubmit="event.preventDefault()">
                    <div class="col-12 mb-2">
                        <label>Product Name</label>
                        <input type="text" class="form-control" value="{$res->data->result_products->product_name}" readonly>
                    </div>
                    <div class="col-12 mb-2">
                        <label>Prodct Quantity</label>
                        <input type="number" class="form-control" value="" id="custvalue" required="">
                    </div>
                    <div class="col-12 mb-2">
                        <label>Date range</label>
                        <input type="date" class="form-control" value="" id="custdate"  required="">
                    </div>
                    <br>
                    <button class="product-add" style="background:var(--primary);color:#fff" title="Add to Bag" onclick="addtocartcustom('{$res->data->result_products->_id}',document.getElementById('custvalue').value,document.getElementById('custdate').value,this)">
                        <i class="fas fa-shopping-basket"></i>
                        <span>Place Order</span>
                    </button>
                </form>
            </div>
        </div>


    </div>
</div>




hhh;
echo $html;
}
catch(Exception $e){echo "<center>Product not found or something went wrong</center>Error<br>".$e;}
?>

<!--=====================================
                 PRODUCT RELATED PART START
        =======================================-->

<section class="inner-section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-heading">
                    <h2>related this items</h2>
                </div>
            </div>
        </div>
        <div class="col-12" id="reletedItemsContainer">
  <?php 

//==============================================
$res = fetch("https://pharmabag.in:3000/user/get/10/product/homepage");
$html='<ul class="new-slider slider-arrow">';

for ($i=0; $i < count($res->data); $i++) { 
    $img=str_replace("https://pharmabag03.s3.ap-south-1.amazonaws.com/","https://pharmabag03.s3.ap-south-1.amazonaws.com/small_",$res->data[$i]->image_list[0]);
    $html.=<<<hhh
    <li>
        <div class="product-card">
            <div class="product-media">
                <div class="product-label">
                    <label class="label-text new">new</label>
                     <label class="view-label off">{$res->data[$i]->discount_form_details->discountOnPtrOnlyPercenatge} %off</label>
                </div>                
                <a class="product-image" href="product.php?id={$res->data[$i]->_id}">
                    <img src="{$img}" alt="product">
                </a>
                <div class="product-widget">
                    <a style="cursor:pointer;" title="Add to wishlist" onclick="addtowishlist('{$res->data[$i]->_id}',this)" class="fas fa-heart"></a>                   
                    <a title="Product View" href="product.php?id={$res->data[$i]->_id}" class="fas fa-eye"></a>
                </div>
            </div>
            <div class="product-content">
                <h6 class="product-name">
                    <a href="product.php?id={$res->data[$i]->_id}">{$res->data[$i]->product_name}</a>
                </h6>
                <p> {$res->data[$i]->categories->category_name} > {$res->data[$i]->categories->sub_category_name} </p>
                
                <h6 class="clearfix">
                    <span class="float-start"><small>MRP</small> <br> ₹{$res->data[$i]->product_price}</span>
                    <span class="float-end"><small>PTR</small> <br> ₹{$res->data[$i]->discount_details->per_ptr}</span>
                </h6>
                
                <button class="product-add" title="view details of product" onclick="location.href='product.php?id={$res->data[$i]->_id}'">
                    <i class="fas fa-shopping-basket"></i>
                    <span>View Details</span>
                </button>
                
            </div>
        </div>
    </li>
    
hhh;
}
echo $html.'</ul>';

  
    
?>


</div>
        <div class="row">
            <div class="col-lg-12">
                <div class="section-btn-25">
                    <a href="shop.php" class="btn btn-outline">
                        <i class="fas fa-eye"></i>
                        <span>view all related</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=====================================
                  PRODUCT TAB PART START
        =======================================-->
<section class="inner-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-tabs">
                   
                    <li><a href="#tab-reve" class="tab-link active" data-bs-toggle="tab">reviews</a></li>
                </ul>
            </div>
        </div>
        
        <div  id="tab-reve">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-details-frame comments">
                        <ul class="review-list" id="reviewholder">
                            <!-- <li class="review-item">
                                <div class="review-media">
                                    <a class="review-avatar" href="#">
                                        <img src="image/profile/avatar-1.png" alt="review">
                                    </a>
                                    <h5 class="review-meta">
                                        <a href="#">miron mahmud</a>
                                        <span>June 02, 2020</span>
                                    </h5>
                                </div>
                                <ul class="review-rating">
                                    <li class="icofont-ui-rating"></li>
                                    <li class="icofont-ui-rating"></li>
                                    <li class="icofont-ui-rating"></li>
                                    <li class="icofont-ui-rating"></li>
                                    <li class="icofont-ui-rate-blank"></li>
                                </ul>
                                <p class="review-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus hic amet qui velit, molestiae suscipit perferendis, autem doloremque blanditiis dolores nulla excepturi ea nobis!</p>
                                <form class="review-reply">
                                    <input type="text" placeholder="reply your thoughts">
                                    <button><i class="icofont-reply"></i>reply</button>
                                </form>
                                <ul class="review-reply-list">
                                    <li class="review-reply-item">
                                        <div class="review-media">
                                            <a class="review-avatar" href="#">
                                                <img src="image/profile/avatar-1.png" alt="review">
                                            </a>
                                            <h5 class="review-meta">
                                                <a href="#">labonno khan</a>
                                                <span><b>author -</b> June 02, 2020</span>
                                            </h5>
                                        </div>
                                        <p class="review-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus hic amet qui velit, molestiae suscipit perferendis, autem doloremque blanditiis dolores nulla excepturi ea nobis!</p>
                                        <form class="review-reply">
                                            <input type="text" placeholder="reply your thoughts">
                                            <button><i class="icofont-reply"></i>reply</button>
                                        </form>
                                    </li>
                                    
                                </ul>
                            </li> -->
                          
                        </ul>
                    </div>
                    <div class="product-details-frame">
                       <center> <h3 class="frame-title">add your review</h3></center>
                        <form class="review-form" onsubmit="event.preventDefault()">
                            <div class="row">
                                <div class="col-lg-12">
                                   <center><div id="rateYo">
                                       <!--  <input type="radio" name="rating" id="star-1"><label for="star-1"></label>
                                        <input type="radio" name="rating" id="star-2"><label for="star-2"></label>
                                        <input type="radio" name="rating" id="star-3"><label for="star-3"></label>
                                        <input type="radio" name="rating" id="star-4"><label for="star-4"></label>
                                        <input type="radio" name="rating" id="star-5"><label for="star-5"></label> -->
                                    </div><h4></h4></center><br>

                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="review-message" placeholder="Describe" cols="3"></textarea>
                                    </div>
                                </div>
                                                             
                                <div class="col-lg-6">
                                    <button class="btn btn-inline" onclick="postareview()">
                                        <i class="icofont-water-drop"></i>
                                        <span>drop your review</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div></section>
   <script type="text/javascript">
       async function postareview() {
           

  var x=await fetch("https://pharmabag.in:3000/buyer/auth/review",{method:"POST",
    headers:{
        "content-type":"application/json",
    "auth-token":localStorage.getItem("auth-token")
   },
   body:JSON.stringify({
message:$("#review-message").val(),
star: $("#rateYo").rateYo().rateYo("rating"),
product_id:"<?php echo $_GET['id'];?>"

   })
})

if (x.status=200) {

    alert("Thanks for giving us your valuable review")
    $("#review-message").val("")
    getreview()
}else{
    alert("You must write some words about this product or seller")
}
       }



       async function getreview() {
           try{
  var x=await fetch("https://pharmabag.in:3000/user/review/<?php echo $_GET['id'];?>")

var rawdata=await x.json()
var html=''
for (var i = rawdata.length - 1; i >= 0; i--) {
    html+=`

  <li class="review-item">
                                <div class="review-media">
                                    <a class="review-avatar" href="#">
                                        <img src="image/profile/avatar-1.png" alt="review">
                                    </a>
                                    <h5 class="review-meta">
                                        <a href="#">${rawdata[i].user_name}</a>
                                        <span>${new Date(rawdata[i].date).toDateString()}</span>
                                    </h5>
                                </div>
                                <div class="review-rating">
<span class="badge rating-icon" style="font-size:1.3vh;background:${
rawdata[i].star<2.9?"red":rawdata[i].star<3.9?"orange":"#32783b"

}"><i id="sellerrating">${rawdata[i].star}</i> <i class="fa-solid fa-star"></i></span>
                                   
                                </div>
                                <p class="review-desc">${rawdata[i].message}</p>
                                <!-- <form class="review-reply">
                                    <input type="text" placeholder="reply your thoughts">
                                    <button><i class="icofont-reply"></i>reply</button>
                                </form> -->
                            </li>

    `


}

    $("#reviewholder").html(html)
if (rawdata.length<1) {
    $("#reviewholder").html(`
<center><h3>
Be the first to review this product.
</h3></center><br>
 `)


}



           }catch(err){
            console.log(err.message)
           }
       }

getreview()
   </script>



<!--customOrder Modal-->

<script type="text/javascript">
    async function addtocart(id,qty,date,event){
console.log(`qty is ${qty}`)
if(parseInt("<?php print_r($resmain->data->result_products->stock);?>")<=0){

if(confirm("Stock Unavailable Please do CUSTOM ORDER. Are you okay with it?")){
$("#customOrder").modal("show");return 0}else{return 0}

}
if(parseInt("<?php print_r($resmain->data->result_products->stock);?>")<qty){

if(!confirm("You have to wait until new stocks arrive. Are you okay with it?")){return 0}
}
if(parseInt("<?php echo $resmain->data->result_products->min_order_qty;?>")>parseInt(qty)){

    alert("*You must select a valid  quantity to buy (More than Min qty <?php echo $resmain->data->result_products->min_order_qty;?>) or go with *CUSTOM ORDER!")
    return
}
if(parseInt("<?php echo $resmain->data->result_products->max_order_qty;?>")<parseInt(qty)){

    alert("*You must select a valid  quantity to buy (Less than Max qty <?php echo $resmain->data->result_products->max_order_qty;?>) or go with CUSTOM ORDER!")
    return
}
var calculate=parseInt(qty)*parseFloat("<?php print_r($resmain->data->result_products->discount_details->per_ptr);?>")
calculate+=calculate*parseFloat("<?php print_r($resmain->data->result_products->discount_details->gst);?>")/100
if(calculate<20000){
      alert("Your total amount should be more than ₹20000 buy some more worth ₹"+parseInt(20000-calculate))+" Or go with CUSTOM ORDER!"
    return
}
var x=await fetch("https://pharmabag.in:3000/buyer/auth/cart",{
    method:"POST",
    headers:{"content-type":"application/json","auth-token":localStorage.getItem("auth-token")},
    body:JSON.stringify({
        product_id:id,
        quantity:qty,
        price_details:JSON.stringify({
            delivary_date:date
        })
    })

})

if(x.status==404||x.status==401||x.status==402){
alert("You must login as a buyer first then you can buy")
location.href="register.php"
}
else if(x.status==403){
alert("Please Wait untill Admin verify your licences!")
return
}
else{

    const elementToShake = event
            elementToShake.classList.add('shake');

            // Remove the "shake" class after the animation completes
            elementToShake.addEventListener('animationend', function() {
                elementToShake.classList.remove('shake');
            });
event.innerText="Added to Bag"
event.disabled=true
//document.getElementById("reletedItemsContainer").scrollIntoView()
showmycart()
}



    }


   async function addtocartcustom(id,qty,date,event){
    if(qty<1){alert("You must buy some amount,don't put 0") ;return}
    if("<?php print_r($resmain->data->result_products->stock);?>"!=0 &&( (parseInt(qty)>=parseInt("<?php echo $resmain->data->result_products->min_order_qty;?>"))&&(parseInt(qty)<=parseInt("<?php echo $resmain->data->result_products->max_order_qty;?>")))){

    alert("*You must select a valid  quantity to buy (Less than Min qty Or More than Max qty) or go with *Normal ORDER!")
    return
}
if(!(id&&qty&&date&&event)) {alert("Fill all details") ;return}
if("<?php print_r($resmain->data->result_products->stock);?>"<=0){

if(!confirm("You have to wait until new stocks arrive. Are you okay with it?")){return 0}

}


var x=await fetch("https://pharmabag.in:3000/buyer/auth/cart/custom",{
    method:"POST",
    headers:{"content-type":"application/json","auth-token":localStorage.getItem("auth-token")},
    body:JSON.stringify({
        product_id:id,
        quantity:qty,
        price_details:JSON.stringify({
            delivary_date:date
        })
    })

})

if(x.status==404||x.status==401||x.status==402){
alert("You must login as a buyer first then you can buy")
location.href="register.php"
}
else if(x.status==403){
alert("Please Wait until Admin verify your licenses!")
return
}
else{
event.innerText="Added to Cart"
alert("Please note you have selected custom order so our seller has to accept it,for streamline experience go for normal order next time.")
event.disabled=true
$("#customOrder").modal("hide")
//document.getElementById("reletedItemsContainer").scrollIntoView()
showmycart()
}



    }




</script>
<?php include 'sections/newsletter.php' ?>
<?php include 'sections/footer.php' ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
 <script type="text/javascript">$(function () {

$("#rateYo").rateYo({

rating    : 3.6,
spacing   : "5px",
multiColor: {

"startColor": "#FF0000", //RED
"endColor"  : "#00FF00"  //GREEN
}
}).on("rateyo.change", function (e, data) {

var rating = data.rating;

$(this).next().text(rating);
});

});</script>
