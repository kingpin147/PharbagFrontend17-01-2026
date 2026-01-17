<?php 
// error_reporting(E_ALL);
// ini_set('display_errors', '1');
use function Leaf\fetch;
//==============================================
$res = fetch("https://pharmabag.in:3000/user/get/10/product/homepage");
$html='<ul class="new-slider slider-arrow">';

for ($i=0; $i < count($res->data); $i++) { 
    $img=str_replace("https://pharmabag03.s3.ap-south-1.amazonaws.com/","https://pharmabag03.s3.ap-south-1.amazonaws.com/small_",$res->data[$i]->image_list[0]);
    if ($res->data[$i]->discount_form_details->buy!='') {
        $buyget='<label class="view-label sale">'.$res->data[$i]->discount_form_details->buy.'+'.$res->data[$i]->discount_form_details->get.'</label>';
    }else{
        $buyget='';
    }
    $html.=<<<hhh
    <li>
        <div class="product-card">
            <div class="product-media">
                <div class="product-label">
                    <label class="label-text new">new</label>
                     <label class="view-label off">{$res->data[$i]->discount_form_details->discountOnPtrOnlyPercenatge} %off</label>
                     {$buyget}
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
                
                <button class="product-add" title="Add to Cart" onclick="location.href='product.php?id={$res->data[$i]->_id}'">
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

