
<?php include 'sections/header.php' ?>
<?php include 'sections/header-top.php' ?>
<?php include 'sections/header-middle.php' ?>
<?php include 'sections/navbar.php' ?>
<?php include 'sections/sidebar-cat.php' ?>
<?php include 'sections/sidebar-cart.php' ?>
<?php include 'sections/sidebar-nav.php' ?>
<?php include 'sections/mobile-menu.php' ?>
<?php include 'sections/quick-view.php' ?>

<div class="container">
    <div class="row">
        <div class="col pt-4">
            <div class="section-heading">
                <h2>My Wishlists</h2>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 p-4" id="Wishlistdata">
            <center><h3>Add some products you are planning to buy</h3></center>
          <script type="text/javascript">
              





getmywishlist()


          </script>
        </div>

    </div>
</div>

<section class="inner-section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-heading">
                    <h2>related Products</h2>
                </div>
            </div>
        </div>
        <div class="col-12">
    <?php 
require_once "./vendor/leafs/fetch/src/Fetch.php";
use function Leaf\fetch;
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



</div>
        <div class="row">
            <div class="col-lg-12">
                <div class="section-btn-25">
                    <a href="shop.php" class="btn btn-outline">
                        <i class="fas fa-eye"></i>
                        <span>Shop More</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>




<?php include 'sections/newsletter.php' ?>
<?php include 'sections/footer.php' ?>
