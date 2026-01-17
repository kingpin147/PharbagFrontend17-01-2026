<?php

include "../vendor/leafs/fetch/src/Fetch.php";
use function Leaf\fetch;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- WEBPAGE TITLE -->
        <title>Pharmabag</title>

        <!--=====================================
                    CSS LINK PART START
        =======================================-->
        
        <!-- FAVICON -->
        <link rel="icon" href="image/favicon.png">

        <!-- FONTS -->
<!--        <link rel="stylesheet" href="fonts/flaticon/flaticon.css">-->
       

        <link rel="stylesheet" href="../fonts/icofont/icofont.min.css">
        <link rel="stylesheet" href="../fonts/icons/fa.css">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">


        <!-- VENDOR -->
        <link rel="stylesheet" href="../vendor/venobox/venobox.min.css">
        <link rel="stylesheet" href="../vendor/slickslider/slick.min.css">
        <link rel="stylesheet" href="../vendor/niceselect/nice-select.min.css">
        <link rel="stylesheet" href="../vendor/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="../css/user-auth.css">
        
        <!-- CUSTOM -->
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/index.css">
        <link rel="stylesheet" href="../css/product-details.css">

        <link rel="stylesheet" href="../css/wallet.css">
        
<script src="../vendor/bootstrap/jquery-1.12.4.min.js"></script>
    </head>

  
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
</style>

<?php 


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


$imgloop='';
for ($i=0; $i < count($res->data->result_products->image_list); $i++) { 
    $smallimg=str_replace("https://pharmabag03.s3.ap-south-1.amazonaws.com/","https://pharmabag03.s3.ap-south-1.amazonaws.com/small_",$res->data->result_products->image_list[$i]);
    $imgloop.=<<<imgloop
    <li><img src="{$smallimg}" alt="product"></li>'
imgloop;
}
$expdate=explode("T", $res->data->result_products->expire_date)[0];
$discount_type=str_replace("_"," ",$res->data->result_products->discount_details->type);
$buy=$res->data->result_products->discount_form_details->buy?$res->data->result_products->discount_form_details->buy:'';
$get=$res->data->result_products->discount_form_details->get?$res->data->result_products->discount_form_details->get:'';
$sellerID=substr($res->data->result_products->seller_id,0,8);
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
                            <p>HSN:<span> {$res->data->result_products->extra_fields[2]}</span></p>
                            <p>Company: {$res->data->result_products->company_name}</p>
                          
                        </div>
                        
<!--                        <p class="view-desc">{$res->data->result_products->extra_fields[3]}</p>-->
                        <div class="d-flex justify-content-between">
                            <ul>
                                <li><b>Expiry: </b>{$expdate}</li>
                                <li><b>Stock: </b>{$res->data->result_products->stock}</li>
                                <li><b>Min qty: </b> {$res->data->result_products->min_order_qty}</li>
                                <li><b>Max qty: </b> {$res->data->result_products->max_order_qty}</li>
                            </ul>
                            <ul>
                                <li><b>Medicine Type: </b> {$res->data->result_products->extra_fields[4]} </li>
                                <li><b>Country: </b> {$res->data->result_products->extra_fields[0]} </li>
                                <li><b>Buy: </b> {$buy}</li>
                                <li><b>Get: </b> {$get}</li>
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

                        <div class="view-add-group">

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
                          

                            <br>
                  
                        

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






hhh;
echo $html;
}
catch(Exception $e){echo "<center>Product not found or something went wrong</center>Error<br>".$e;}
?>

<!--=====================================
                 PRODUCT RELATED PART START
        =======================================-->

<script src="../sections/vendor/bootstrap/jquery-1.12.4.min.js"></script>
<script src="../sections/vendor/bootstrap/popper.min.js"></script>
<script src="../sections/vendor/bootstrap/bootstrap.min.js"></script>
<script src="../sections/vendor/countdown/countdown.min.js"></script>
<script src="../sections/vendor/niceselect/nice-select.min.js"></script>
<script src="../sections/vendor/slickslider/slick.min.js"></script>
<script src="../sections/vendor/venobox/venobox.min.js"></script>

<!-- CUSTOM -->
<script src="../js/nice-select.js"></script>
<script src="../js/countdown.js"></script>
<script src="../js/accordion.js"></script>
<script src="../js/venobox.js"></script>
<script src="../js/slick.js"></script>
<script src="../js/main.js"></script>
<script src="../js/bootstrap-tour.min.js"></script>