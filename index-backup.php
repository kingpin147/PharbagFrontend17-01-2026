

<?php include 'sections/header.php' ?>
<?php include 'sections/header-top.php' ?>
<?php include 'sections/header-middle.php' ?>
<?php include 'sections/navbar.php' ?>
<?php include 'sections/sidebar-cat.php' ?>
<?php include 'sections/sidebar-cart.php' ?>
<?php include 'sections/sidebar-nav.php' ?>
<?php include 'sections/mobile-menu.php' ?>
<?php include 'sections/quick-view.php' ?>

<div class="modal fade" id="product-view">
    <div class="modal-dialog">
        <div class="modal-content">
            <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
            <div class="product-view">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="view-gallery">
                            <div class="view-label-group">
                                <label class="view-label new">new</label>
                                <label class="view-label off">-10%</label>
                            </div>
                            <ul class="preview-slider slider-arrow">
                                <li><img src="image/products/01.jpg" alt="product"></li>
                                <li><img src="image/products/01.jpg" alt="product"></li>
                                <li><img src="image/products/01.jpg" alt="product"></li>
                                <li><img src="image/products/01.jpg" alt="product"></li>
                                <li><img src="image/products/01.jpg" alt="product"></li>
                            </ul>
                            <ul class="thumb-slider">
                                <li><img src="image/products/01.jpg" alt="product"></li>
                                <li><img src="image/products/01.jpg" alt="product"></li>
                                <li><img src="image/products/01.jpg" alt="product"></li>
                                <li><img src="image/products/01.jpg" alt="product"></li>
                                <li><img src="image/products/01.jpg" alt="product"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="view-details">
                            <h3 class="view-name">
                                <a href="product-video.html">product name</a>
                            </h3>
                            <div class="view-meta">
                                <p>SKU:<span> 1234567</span></p>
                                <p>Sold by SLS Pharma</p>
                                <p>
                                    <span class="badge bg-danger text-light">Expiry Soon</span>
                                </p>
                            </div>
                            <div class="view-rating">
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="icofont-star"></i>
                                <a href="product-video.html">(3 reviews)</a>
                            </div>
                            <!--
                        <h3 class="view-price">
                            <del>$38.00</del>
                            <span>$24.00<small>/per packet</small></span>
                        </h3>
-->
                            <p class="view-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit non tempora
                                magni repudiandae sint suscipit tempore quis maxime explicabo veniam eos reprehenderit
                                fuga</p>

                            <div class="d-flex justify-content-between">
                                <ul>
                                    <li><b>Expiry: </b> Dec 2022</li>
                                    <li><b>Stock: </b>10000</li>
                                    <li><b>Min qty: </b> 100</li>
                                    <li><b>Max qty: </b> 1000</li>
                                </ul>
                                <ul>
                                    <li><b>Medicine Type: </b> Strip </li>
                                    <li><b>Country: </b> India </li>
                                    <li><b>Buy: </b> 100</li>
                                    <li><b>Get: </b> 1</li>
                                    <li><b>GST: </b> 12%</li>
                                </ul>
                            </div>
                            <div>
                                <ul>
                                    <li><b>Chemical Combination: </b> Liquid</li>
                                    <li><b>Discount type: </b> same Product Bonus <span> 100 + 1</span> </li>
                                </ul>
                            </div>

                            <div class="view-add-group">

                                <div class="input-group p-price align-items-start f-flex justify-content-between">

                                    <h4 class="view-price">
                                        <span>MRP:</span><span> ₹24.00 <br> <small> </small> </span>
                                        <span> </span>
                                    </h4>
                                    <h4 class="view-price">
                                        <span>PTR:</span><span> ₹24.00 <br> <small> ₹28.00</small> </span>
                                        <span> (Exclusive of GST)</span>

                                    </h4>

                                </div>
                                <form>
                                    <div class="input-group p-price">

                                        <div class="product-action">
                                            <span class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></span>
                                            <input class="action-input" title="Quantity Number" type="number" min="100" max="500" name="quantity" value="1">
                                            <span class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></span>
                                        </div>

                                        <div><input type="checkbox"> Bulk order</div>

                                    </div>

                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>Add to Bag</span>
                                    </button>

                                    <br>
                                    <p style="font-size:12px">*Custom order will work to place order grater then maximum order quantity</p>
                                    <button class="product-add" title="Custom Order" data-bs-toggle="modal" data-bs-target="#customOrder">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>Custom Order</span>
                                    </button>

                                </form>

                                <div class="py-4">
                                    <p>
                                        <i class="fa-regular fa-heart"></i>
                                        <i class="fa-solid fa-heart"></i>

                                        <span>Add to my wish list</span>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="home-classic-slider slider-arrow">
    <div class="banner-part" style="background: url(image/home/banner/1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6">
                    <div class="banner-content">
                        <h1>we are delivered Medicine.</h1>
                        <p>Lorem ipsum dolor consectetur adipisicing elit modi consequatur eaque expedita porro necessitatibus eveniet voluptatum quis pariatur Laboriosam molestiae architecto excepturi</p>
                        <div class="banner-btn">
                            <a class="btn btn-inline" href="shop.php">
                                <i class="fas fa-shopping-basket"></i>
                                <span>shop now</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-part" style="background: url(image/home/banner/2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6">
                    <div class="banner-content">
                        <h1>we are delivered Medicine.</h1>
                        <p>Lorem ipsum dolor consectetur adipisicing elit modi consequatur eaque expedita porro necessitatibus eveniet voluptatum quis pariatur Laboriosam molestiae architecto excepturi</p>
                        <div class="banner-btn">
                            <a class="btn btn-inline" href="shop.php">
                                <i class="fas fa-shopping-basket"></i>
                                <span>shop now</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-part" style="background: url(image/home/banner/3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6">
                    <div class="banner-content">
                        <h1>we are delivered Medicine.</h1>
                        <p>Lorem ipsum dolor consectetur adipisicing elit modi consequatur eaque expedita porro necessitatibus eveniet voluptatum quis pariatur Laboriosam molestiae architecto excepturi</p>
                        <div class="banner-btn">
                            <a class="btn btn-inline" href="shop.php">
                                <i class="fas fa-shopping-basket"></i>
                                <span>shop now</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=====================================
                NEW ITEM PART START
        =======================================-->

<section class="section newitem-part">
    <div class="container">
        <div class="row">
            <div class="col pt-4">
                <div class="section-heading">
                    <h2>collected new items</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3 d-md-block d-none border">
                <div class="category-header">
    <h4 class="category-title">
        <i class="fas fa-align-left"></i>
        <span>Popular categories</span>
    </h4>
</div>
<ul class="category-list" style="overflow:visible; height: auto;">

    <li class="category-item">
        <a class="category-link" href="#">
            <i class="fa-solid fa-pills"></i>
            <span>Ethical</span>
        </a>
    </li>
    <li class="category-item">
        <a class="category-link" href="#">
            <i class="fa-solid fa-pills"></i>
            <span>Generic</span>
        </a>
    </li>
    <li class="category-item">
        <a class="category-link" href="#">
            <i class="fa-solid fa-pills"></i>
            <span>OTC</span>
        </a>
    </li>
    <li class="category-item">
        <a class="category-link" href="#">
            <i class="fa-solid fa-pills"></i>
            <span>Ayurvedic</span>
        </a>
    </li>
    <li class="category-item">
        <a class="category-link" href="#">
            <i class="fa-solid fa-pills"></i>
            <span>Surgical</span>
        </a>
    </li>
    <li class="category-item">
        <a class="category-link" href="#">
            <i class="fa-solid fa-pills"></i>
            <span>Critical Care</span>
        </a>
    </li>
    <li class="category-item">
        <a class="category-link" href="#">
            <i class="fa-solid fa-angles-right"></i>
            <span>Others</span>
        </a>
    </li>
</ul>


<!--
Ethical
Generic
OTC
Ayurvedic
Surgical
Critical Care
Others
-->
            </div>
            <div class="col-md-9 col-12">
                <ul class="new-slider slider-arrow">

    <li>
        <div class="product-card">
            <div class="product-media">
                <div class="product-label">
                    <label class="label-text new">new</label>
                </div>
                <a class="product-image" href="product.php">
                    <img src="image/products/02.jpg" alt="product">
                </a>
                <div class="product-widget">
                    <a title="Product Compare"  class="fas fa-heart"></a>
                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                </div>
            </div>
            <div class="product-content">
                <!-- <div class="product-rating">
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="icofont-star"></i>
                    <a href="product-video.html">(3)</a>
                </div> -->
                <h6 class="product-name">
                    <a href="product.php">Product Name</a>
                </h6>
                <p class="auth"> Category > Sub Category </p>
                <h6 class="clearfix">
                    <span class="float-start"><small>MRP</small> <br> ₹28</span>
                    <span class="float-end"><small>PTR</small> <br> ₹28</span>
                </h6>
                <!-- <div class="product-action">
                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                </div> -->
                <button class="product-add" title="Add to Cart">
                    <i class="fas fa-shopping-basket"></i>
                    <span>Add to Bag</span>
                </button>
            </div>
        </div>
    </li>
    <li>
        <div class="product-card">
            <div class="product-media">
                <div class="product-label">
                    <label class="label-text new">new</label>
                </div>
                <a class="product-image" href="product.php">
                    <img src="image/products/02.jpg" alt="product">
                </a>
                <div class="product-widget">
                    <a title="Product Compare"  class="fas fa-heart"></a>
                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                </div>
            </div>
            <div class="product-content">
                <!-- <div class="product-rating">
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="icofont-star"></i>
                    <a href="product-video.html">(3)</a>
                </div> -->
                <h6 class="product-name">
                    <a href="product.php">Product Name</a>
                </h6>
                <p class="auth"> Category > Sub Category </p>
                <h6 class="clearfix">
                    <span class="float-start"><small>MRP</small> <br> ₹28</span>
                    <span class="float-end"><small>PTR</small> <br> ₹28</span>
                </h6>
                <!-- <div class="product-action">
                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                </div> -->
                <button class="product-add" title="Add to Cart">
                    <i class="fas fa-shopping-basket"></i>
                    <span>Add to Bag</span>
                </button>
            </div>
        </div>
    </li>
    <li>
        <div class="product-card">
            <div class="product-media">
                <div class="product-label">
                    <label class="label-text new">new</label>
                </div>
                <a class="product-image" href="product.php">
                    <img src="image/products/02.jpg" alt="product">
                </a>
                <div class="product-widget">
                    <a title="Product Compare"  class="fas fa-heart"></a>
                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                </div>
            </div>
            <div class="product-content">
                <!-- <div class="product-rating">
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="icofont-star"></i>
                    <a href="product-video.html">(3)</a>
                </div> -->
                <h6 class="product-name">
                    <a href="product.php">Product Name</a>
                </h6>
                <p class="auth"> Category > Sub Category </p>
                <h6 class="clearfix">
                    <span class="float-start"><small>MRP</small> <br> ₹28</span>
                    <span class="float-end"><small>PTR</small> <br> ₹28</span>
                </h6>
                <!-- <div class="product-action">
                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                </div> -->
                <button class="product-add" title="Add to Cart">
                    <i class="fas fa-shopping-basket"></i>
                    <span>Add to Bag</span>
                </button>
            </div>
        </div>
    </li>
    <li>
        <div class="product-card">
            <div class="product-media">
                <div class="product-label">
                    <label class="label-text new">new</label>
                </div>
                <a class="product-image" href="product.php">
                    <img src="image/products/02.jpg" alt="product">
                </a>
                <div class="product-widget">
                    <a title="Product Compare"  class="fas fa-heart"></a>
                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                </div>
            </div>
            <div class="product-content">
                <!-- <div class="product-rating">
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="icofont-star"></i>
                    <a href="product-video.html">(3)</a>
                </div> -->
                <h6 class="product-name">
                    <a href="product.php">Product Name</a>
                </h6>
                <p class="auth"> Category > Sub Category </p>
                <h6 class="clearfix">
                    <span class="float-start"><small>MRP</small> <br> ₹28</span>
                    <span class="float-end"><small>PTR</small> <br> ₹28</span>
                </h6>
                <!-- <div class="product-action">
                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                </div> -->
                <button class="product-add" title="Add to Cart">
                    <i class="fas fa-shopping-basket"></i>
                    <span>Add to Bag</span>
                </button>
            </div>
        </div>
    </li>
    <li>
        <div class="product-card">
            <div class="product-media">
                <div class="product-label">
                    <label class="label-text new">new</label>
                </div>
                <a class="product-image" href="product.php">
                    <img src="image/products/02.jpg" alt="product">
                </a>
                <div class="product-widget">
                    <a title="Product Compare"  class="fas fa-heart"></a>
                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                </div>
            </div>
            <div class="product-content">
                <!-- <div class="product-rating">
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="icofont-star"></i>
                    <a href="product-video.html">(3)</a>
                </div> -->
                <h6 class="product-name">
                    <a href="product.php">Product Name</a>
                </h6>
                <p class="auth"> Category > Sub Category </p>
                <h6 class="clearfix">
                    <span class="float-start"><small>MRP</small> <br> ₹28</span>
                    <span class="float-end"><small>PTR</small> <br> ₹28</span>
                </h6>
                <!-- <div class="product-action">
                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                </div> -->
                <button class="product-add" title="Add to Cart">
                    <i class="fas fa-shopping-basket"></i>
                    <span>Add to Bag</span>
                </button>
            </div>
        </div>
    </li>
    <li>
        <div class="product-card">
            <div class="product-media">
                <div class="product-label">
                    <label class="label-text new">new</label>
                </div>
                <a class="product-image" href="product.php">
                    <img src="image/products/02.jpg" alt="product">
                </a>
                <div class="product-widget">
                    <a title="Product Compare"  class="fas fa-heart"></a>
                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                </div>
            </div>
            <div class="product-content">
                <!-- <div class="product-rating">
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="icofont-star"></i>
                    <a href="product-video.html">(3)</a>
                </div> -->
                <h6 class="product-name">
                    <a href="product.php">Product Name</a>
                </h6>
                <p class="auth"> Category > Sub Category </p>
                <h6 class="clearfix">
                    <span class="float-start"><small>MRP</small> <br> ₹28</span>
                    <span class="float-end"><small>PTR</small> <br> ₹28</span>
                </h6>
                <!-- <div class="product-action">
                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                </div> -->
                <button class="product-add" title="Add to Cart">
                    <i class="fas fa-shopping-basket"></i>
                    <span>Add to Bag</span>
                </button>
            </div>
        </div>
    </li>
    <li>
        <div class="product-card">
            <div class="product-media">
                <div class="product-label">
                    <label class="label-text new">new</label>
                </div>
                <a class="product-image" href="product.php">
                    <img src="image/products/02.jpg" alt="product">
                </a>
                <div class="product-widget">
                    <a title="Product Compare"  class="fas fa-heart"></a>
                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                </div>
            </div>
            <div class="product-content">
                <!-- <div class="product-rating">
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="icofont-star"></i>
                    <a href="product-video.html">(3)</a>
                </div> -->
                <h6 class="product-name">
                    <a href="product.php">Product Name</a>
                </h6>
                <p class="auth"> Category > Sub Category </p>
                <h6 class="clearfix">
                    <span class="float-start"><small>MRP</small> <br> ₹28</span>
                    <span class="float-end"><small>PTR</small> <br> ₹28</span>
                </h6>
                <!-- <div class="product-action">
                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                </div> -->
                <button class="product-add" title="Add to Cart">
                    <i class="fas fa-shopping-basket"></i>
                    <span>Add to Bag</span>
                </button>
            </div>
        </div>
    </li>


</ul>

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
            <div class="col-3 d-md-block d-none">
                <div class="category-header">
    <h4 class="category-title">
        <i class="fas fa-align-left"></i>
        <span>Popular Manufacture</span>
    </h4>
</div>

<ul class="category-list" style="overflow:visible; height: auto;">

    <li class="category-item">
        <a class="category-link" href="#">
            <i class="fa-solid fa-pills"></i>
            <span>Pharma</span>
        </a>
    </li>
    <li class="category-item">
        <a class="category-link" href="#">
            <i class="fa-solid fa-pills"></i>
            <span>Burnet Pharmaceuticals Pvt Ltd</span>
        </a>
    </li>
    <li class="category-item">
        <a class="category-link" href="#">
            <i class="fa-solid fa-pills"></i>
            <span>Pharma Impex Laboratories Pvt Ltd</span>
        </a>
    </li>
    <li class="category-item">
        <a class="category-link" href="#">
            <i class="fa-solid fa-pills"></i>
            <span>Reckitt Benckiser India Ltd</span>
        </a>
    </li>
    <li class="category-item">
        <a class="category-link" href="#">
            <i class="fa-solid fa-angles-right"></i>
            <span>More</span>
        </a>
    </li>

</ul>
            </div>
            <div class="col-md-9 col-12">
                <ul class="manufacture slider-arrow">
    <li>
        <div class="product-card">
            <div class="product-media">
                <div class="product-label">
                    <label class="label-text new">new</label>
                </div>
                <a class="product-image" href="product.php">
                    <img src="image/products/02.jpg" alt="product">
                </a>
                <div class="product-widget">
                    <a title="Product Compare"  class="fas fa-heart"></a>
                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                </div>
            </div>
            <div class="product-content">
                <!-- <div class="product-rating">
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="icofont-star"></i>
                    <a href="product-video.html">(3)</a>
                </div> -->
                <h6 class="product-name">
                    <a href="product.php">Product Name</a>
                </h6>
                <p class="auth"> Category > Sub Category </p>
                <h6 class="clearfix">
                    <span class="float-start"><small>MRP</small> <br> ₹28</span>
                    <span class="float-end"><small>PTR</small> <br> ₹28</span>
                </h6>
                <!-- <div class="product-action">
                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                </div> -->
                <button class="product-add" title="Add to Cart">
                    <i class="fas fa-shopping-basket"></i>
                    <span>Add to Bag</span>
                </button>
            </div>
        </div>
    </li>
    <li>
        <div class="product-card">
            <div class="product-media">
                <div class="product-label">
                    <label class="label-text new">new</label>
                </div>
                <a class="product-image" href="product.php">
                    <img src="image/products/02.jpg" alt="product">
                </a>
                <div class="product-widget">
                    <a title="Product Compare"  class="fas fa-heart"></a>
                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                </div>
            </div>
            <div class="product-content">
                <!-- <div class="product-rating">
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="icofont-star"></i>
                    <a href="product-video.html">(3)</a>
                </div> -->
                <h6 class="product-name">
                    <a href="product.php">Product Name</a>
                </h6>
                <p class="auth"> Category > Sub Category </p>
                <h6 class="clearfix">
                    <span class="float-start"><small>MRP</small> <br> ₹28</span>
                    <span class="float-end"><small>PTR</small> <br> ₹28</span>
                </h6>
                <!-- <div class="product-action">
                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                </div> -->
                <button class="product-add" title="Add to Cart">
                    <i class="fas fa-shopping-basket"></i>
                    <span>Add to Bag</span>
                </button>
            </div>
        </div>
    </li>
    <li>
        <div class="product-card">
            <div class="product-media">
                <div class="product-label">
                    <label class="label-text new">new</label>
                </div>
                <a class="product-image" href="product.php">
                    <img src="image/products/02.jpg" alt="product">
                </a>
                <div class="product-widget">
                    <a title="Product Compare"  class="fas fa-heart"></a>
                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                </div>
            </div>
            <div class="product-content">
                <!-- <div class="product-rating">
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="icofont-star"></i>
                    <a href="product-video.html">(3)</a>
                </div> -->
                <h6 class="product-name">
                    <a href="product.php">Product Name</a>
                </h6>
                <p class="auth"> Category > Sub Category </p>
                <h6 class="clearfix">
                    <span class="float-start"><small>MRP</small> <br> ₹28</span>
                    <span class="float-end"><small>PTR</small> <br> ₹28</span>
                </h6>
                <!-- <div class="product-action">
                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                </div> -->
                <button class="product-add" title="Add to Cart">
                    <i class="fas fa-shopping-basket"></i>
                    <span>Add to Bag</span>
                </button>
            </div>
        </div>
    </li>
    <li>
        <div class="product-card">
            <div class="product-media">
                <div class="product-label">
                    <label class="label-text new">new</label>
                </div>
                <a class="product-image" href="product.php">
                    <img src="image/products/02.jpg" alt="product">
                </a>
                <div class="product-widget">
                    <a title="Product Compare"  class="fas fa-heart"></a>
                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                </div>
            </div>
            <div class="product-content">
                <!-- <div class="product-rating">
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="icofont-star"></i>
                    <a href="product-video.html">(3)</a>
                </div> -->
                <h6 class="product-name">
                    <a href="product.php">Product Name</a>
                </h6>
                <p class="auth"> Category > Sub Category </p>
                <h6 class="clearfix">
                    <span class="float-start"><small>MRP</small> <br> ₹28</span>
                    <span class="float-end"><small>PTR</small> <br> ₹28</span>
                </h6>
                <!-- <div class="product-action">
                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                </div> -->
                <button class="product-add" title="Add to Cart">
                    <i class="fas fa-shopping-basket"></i>
                    <span>Add to Bag</span>
                </button>
            </div>
        </div>
    </li>
    <li>
        <div class="product-card">
            <div class="product-media">
                <div class="product-label">
                    <label class="label-text new">new</label>
                </div>
                <a class="product-image" href="product.php">
                    <img src="image/products/02.jpg" alt="product">
                </a>
                <div class="product-widget">
                    <a title="Product Compare"  class="fas fa-heart"></a>
                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                </div>
            </div>
            <div class="product-content">
                <!-- <div class="product-rating">
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="icofont-star"></i>
                    <a href="product-video.html">(3)</a>
                </div> -->
                <h6 class="product-name">
                    <a href="product.php">Product Name</a>
                </h6>
                <p class="auth"> Category > Sub Category </p>
                <h6 class="clearfix">
                    <span class="float-start"><small>MRP</small> <br> ₹28</span>
                    <span class="float-end"><small>PTR</small> <br> ₹28</span>
                </h6>
                <!-- <div class="product-action">
                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                </div> -->
                <button class="product-add" title="Add to Cart">
                    <i class="fas fa-shopping-basket"></i>
                    <span>Add to Bag</span>
                </button>
            </div>
        </div>
    </li>

</ul>

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

<section class="section testimonial-part">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading">
                            <h2>client's feedback</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonial-slider slider-arrow">
                            <div class="testimonial-card">
                                <i class="fas fa-quote-left"></i>
                                <p>Lorem ipsum dolor consectetur adipisicing elit neque earum sapiente vitae obcaecati magnam doloribus magni provident ipsam</p>
                                <h5>mahmud hasan</h5>
                                <ul>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                </ul>                                
                            </div>
                            <div class="testimonial-card">
                                <i class="fas fa-quote-left"></i>
                                <p>Lorem ipsum dolor consectetur adipisicing elit neque earum sapiente vitae obcaecati magnam doloribus magni provident ipsam</p>
                                <h5>mahmud hasan</h5>
                                <ul>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                </ul>
                            </div>
                            <div class="testimonial-card">
                                <i class="fas fa-quote-left"></i>
                                <p>Lorem ipsum dolor consectetur adipisicing elit neque earum sapiente vitae obcaecati magnam doloribus magni provident ipsam</p>
                                <h5>mahmud hasan</h5>
                                <ul>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                </ul>
                            </div>
                            <div class="testimonial-card">
                                <i class="fas fa-quote-left"></i>
                                <p>Lorem ipsum dolor consectetur adipisicing elit neque earum sapiente vitae obcaecati magnam doloribus magni provident ipsam</p>
                                <h5>mahmud hasan</h5>
                                <ul>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                </ul>
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
                    <h2>Populer in your area</h2>
                </div>
            </div>
            <div class="col-12 py-3">
                <ul class="popular-area slider-arrow">
    <li>
        <div class="product-card">
            <div class="product-media">
                <div class="product-label">
                    <label class="label-text new">new</label>
                </div>
                <a class="product-image" href="product.php">
                    <img src="image/products/02.jpg" alt="product">
                </a>
                <div class="product-widget">
                    <a title="Product Compare"  class="fas fa-heart"></a>
                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                </div>
            </div>
            <div class="product-content">
                <!-- <div class="product-rating">
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="icofont-star"></i>
                    <a href="product-video.html">(3)</a>
                </div> -->
                <h6 class="product-name">
                    <a href="product.php">Product Name</a>
                </h6>
                <p class="auth"> Category > Sub Category </p>
                <h6 class="clearfix">
                    <span class="float-start"><small>MRP</small> <br> ₹28</span>
                    <span class="float-end"><small>PTR</small> <br> ₹28</span>
                </h6>
                <!-- <div class="product-action">
                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                </div> -->
                <button class="product-add" title="Add to Cart">
                    <i class="fas fa-shopping-basket"></i>
                    <span>Add to Bag</span>
                </button>
            </div>
        </div>
    </li>
    <li>
        <div class="product-card">
            <div class="product-media">
                <div class="product-label">
                    <label class="label-text new">new</label>
                </div>
                <a class="product-image" href="product.php">
                    <img src="image/products/02.jpg" alt="product">
                </a>
                <div class="product-widget">
                    <a title="Product Compare"  class="fas fa-heart"></a>
                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                </div>
            </div>
            <div class="product-content">
                <!-- <div class="product-rating">
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="icofont-star"></i>
                    <a href="product-video.html">(3)</a>
                </div> -->
                <h6 class="product-name">
                    <a href="product.php">Product Name</a>
                </h6>
                <p class="auth"> Category > Sub Category </p>
                <h6 class="clearfix">
                    <span class="float-start"><small>MRP</small> <br> ₹28</span>
                    <span class="float-end"><small>PTR</small> <br> ₹28</span>
                </h6>
                <!-- <div class="product-action">
                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                </div> -->
                <button class="product-add" title="Add to Cart">
                    <i class="fas fa-shopping-basket"></i>
                    <span>Add to Bag</span>
                </button>
            </div>
        </div>
    </li>
    <li>
        <div class="product-card">
            <div class="product-media">
                <div class="product-label">
                    <label class="label-text new">new</label>
                </div>
                <a class="product-image" href="product.php">
                    <img src="image/products/02.jpg" alt="product">
                </a>
                <div class="product-widget">
                    <a title="Product Compare"  class="fas fa-heart"></a>
                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                </div>
            </div>
            <div class="product-content">
                <!-- <div class="product-rating">
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="icofont-star"></i>
                    <a href="product-video.html">(3)</a>
                </div> -->
                <h6 class="product-name">
                    <a href="product.php">Product Name</a>
                </h6>
                <p class="auth"> Category > Sub Category </p>
                <h6 class="clearfix">
                    <span class="float-start"><small>MRP</small> <br> ₹28</span>
                    <span class="float-end"><small>PTR</small> <br> ₹28</span>
                </h6>
                <!-- <div class="product-action">
                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                </div> -->
                <button class="product-add" title="Add to Cart">
                    <i class="fas fa-shopping-basket"></i>
                    <span>Add to Bag</span>
                </button>
            </div>
        </div>
    </li>
    <li>
        <div class="product-card">
            <div class="product-media">
                <div class="product-label">
                    <label class="label-text new">new</label>
                </div>
                <a class="product-image" href="product.php">
                    <img src="image/products/02.jpg" alt="product">
                </a>
                <div class="product-widget">
                    <a title="Product Compare"  class="fas fa-heart"></a>
                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                </div>
            </div>
            <div class="product-content">
                <!-- <div class="product-rating">
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="icofont-star"></i>
                    <a href="product-video.html">(3)</a>
                </div> -->
                <h6 class="product-name">
                    <a href="product.php">Product Name</a>
                </h6>
                <p class="auth"> Category > Sub Category </p>
                <h6 class="clearfix">
                    <span class="float-start"><small>MRP</small> <br> ₹28</span>
                    <span class="float-end"><small>PTR</small> <br> ₹28</span>
                </h6>
                <!-- <div class="product-action">
                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                </div> -->
                <button class="product-add" title="Add to Cart">
                    <i class="fas fa-shopping-basket"></i>
                    <span>Add to Bag</span>
                </button>
            </div>
        </div>
    </li>
    <li>
        <div class="product-card">
            <div class="product-media">
                <div class="product-label">
                    <label class="label-text new">new</label>
                </div>
                <a class="product-image" href="product.php">
                    <img src="image/products/02.jpg" alt="product">
                </a>
                <div class="product-widget">
                    <a title="Product Compare"  class="fas fa-heart"></a>
                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                </div>
            </div>
            <div class="product-content">
                <!-- <div class="product-rating">
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="icofont-star"></i>
                    <a href="product-video.html">(3)</a>
                </div> -->
                <h6 class="product-name">
                    <a href="product.php">Product Name</a>
                </h6>
                <p class="auth"> Category > Sub Category </p>
                <h6 class="clearfix">
                    <span class="float-start"><small>MRP</small> <br> ₹28</span>
                    <span class="float-end"><small>PTR</small> <br> ₹28</span>
                </h6>
                <!-- <div class="product-action">
                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                </div> -->
                <button class="product-add" title="Add to Cart">
                    <i class="fas fa-shopping-basket"></i>
                    <span>Add to Bag</span>
                </button>
            </div>
        </div>
    </li>
    <li>
        <div class="product-card">
            <div class="product-media">
                <div class="product-label">
                    <label class="label-text new">new</label>
                </div>
                <a class="product-image" href="product.php">
                    <img src="image/products/02.jpg" alt="product">
                </a>
                <div class="product-widget">
                    <a title="Product Compare"  class="fas fa-heart"></a>
                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                </div>
            </div>
            <div class="product-content">
                <!-- <div class="product-rating">
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="active icofont-star"></i>
                    <i class="icofont-star"></i>
                    <a href="product-video.html">(3)</a>
                </div> -->
                <h6 class="product-name">
                    <a href="product.php">Product Name</a>
                </h6>
                <p class="auth"> Category > Sub Category </p>
                <h6 class="clearfix">
                    <span class="float-start"><small>MRP</small> <br> ₹28</span>
                    <span class="float-end"><small>PTR</small> <br> ₹28</span>
                </h6>
                <!-- <div class="product-action">
                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                </div> -->
                <button class="product-add" title="Add to Cart">
                    <i class="fas fa-shopping-basket"></i>
                    <span>Add to Bag</span>
                </button>
            </div>
        </div>
    </li>
    
    
</ul>                <div class="col">
                    <div class="section-btn-25">
                        <a href="area-search.php" class="btn btn-outline">
                            <i class="fas fa-eye"></i>
                            <span>Search on your area</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'sections/newsletter.php' ?>
<!--=====================================
                     FOOTER PART START
        =======================================-->
<?php include 'sections/footer.php' ?>

<!--=====================================
                      FOOTER PART END
        =======================================-->

<script src="vendor/bootstrap/jquery-1.12.4.min.js"></script>
<script src="vendor/bootstrap/popper.min.js"></script>
<script src="vendor/bootstrap/bootstrap.min.js"></script>
<script src="vendor/countdown/countdown.min.js"></script>
<script src="vendor/niceselect/nice-select.min.js"></script>
<script src="vendor/slickslider/slick.min.js"></script>
<script src="vendor/venobox/venobox.min.js"></script>

<!-- CUSTOM -->
<script src="js/nice-select.js"></script>
<script src="js/countdown.js"></script>
<script src="js/accordion.js"></script>
<script src="js/venobox.js"></script>
<script src="js/slick.js"></script>
<script src="js/main.js"></script>
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
