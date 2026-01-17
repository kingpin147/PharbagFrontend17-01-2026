
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
        <form>
            <div class="shop-widget-group">
                <input type="number" placeholder="Min - 00" min="1">
                <input type="number" placeholder="Max - 5k" max="">
            </div>
        </form>
    </div>

    <div class="shop-widget">
        <h6 class="shop-widget-title">Filter by</h6>
        <form>
            <ul class="shop-widget-list">
                <li>
                    <div class="shop-widget-content">
                        <input type="checkbox" id="tag1">
                        <label for="tag1">new items</label>
                    </div>
                    <span class="shop-widget-number">(13)</span>
                </li>
                <li>
                    <div class="shop-widget-content">
                        <input type="checkbox" id="tag3">
                        <label for="tag3">Best Selling</label>
                    </div>
                    <span class="shop-widget-number">(35)</span>
                </li>
                <li>
                    <div class="shop-widget-content">
                        <input type="checkbox" id="tag5">
                        <label for="tag5">discount items</label>
                    </div>
                    <span class="shop-widget-number">(59)</span>
                </li>
            </ul>
        </form>
    </div>

    <div class="shop-widget">
        <h6 class="shop-widget-title">Location</h6>
        <form>
            <ul class="shop-widget-list">
                <li>
                    <select name="city" id="city" class="form-control" value="">
                        <option value="">Kolkata</option>
                        <option value="">Howrah</option>
                        <option value=""></option>
                    </select>
                </li>
                <li id="shop-widget-search">
                    <input class="shop-widget-search" type="number" min="1" max="" placeholder="Pincode - 700 001">
                </li>
            </ul>
        </form>
    </div>
    <div class="shop-widget">
        <h6 class="shop-widget-title">Discount type</h6>
        <form>
            <input class="shop-widget-search" type="text" placeholder="Search...">
            <ul class="shop-widget-list">
                <li>
                    <div class="shop-widget-content">
                        <input type="checkbox" id="brand1">
                        <label for="brand1">All</label>
                    </div>
                </li>
                <li>
                    <div class="shop-widget-content">
                        <input type="checkbox" id="brand1">
                        <label for="brand1">Discount PTR Only</label>
                    </div>
                </li>
                <li>
                    <div class="shop-widget-content">
                        <input type="checkbox" id="brand2">
                        <label for="brand1">Same product bonus</label>
                    </div>
                </li>
                <li>
                    <div class="shop-widget-content">
                        <input type="checkbox" id="brand3">
                        <label for="brand1">Same product bonus & Discount</label>
                    </div>
                </li>
                <li>
                    <div class="shop-widget-content">
                        <input type="checkbox" id="brand4">
                        <label for="brand1">Different product bonus</label>
                    </div>
                </li>
                <li>
                    <div class="shop-widget-content">
                        <input type="checkbox" id="brand4">
                        <label for="brand1">Different product bonus & Discount</label>
                    </div>
                </li>
            </ul>
        </form>
    </div>
    <div class="shop-widget">
        <h6 class="shop-widget-title">Category</h6>
        <form>
            <input class="shop-widget-search" type="text" placeholder="Search...">
            <ul class="shop-widget-list">
                <li>
                    <div class="shop-widget-content">
                        <input type="checkbox" id="cate1">
                        <label for="cate1">All Category</label>
                    </div>
                    <span class="shop-widget-number">(13)</span>
                </li>
                <li>
                    <div class="shop-widget-content">
                        <input type="checkbox" id="cate1">
                        <label for="cate1">Ethical</label>
                    </div>
                    <span class="shop-widget-number">(13)</span>
                </li>
                <li>
                    <div class="shop-widget-content">
                        <input type="checkbox" id="cate1">
                        <label for="cate1">Generic</label>
                    </div>
                    <span class="shop-widget-number">(13)</span>
                </li>
                <li>
                    <div class="shop-widget-content">
                        <input type="checkbox" id="cate1">
                        <label for="cate1">OTC</label>
                    </div>
                    <span class="shop-widget-number">(13)</span>
                </li>
                <li>
                    <div class="shop-widget-content">
                        <input type="checkbox" id="cate1">
                        <label for="cate1">Ayurvedic</label>
                    </div>
                    <span class="shop-widget-number">(13)</span>
                </li>
                <li>
                    <div class="shop-widget-content">
                        <input type="checkbox" id="cate1">
                        <label for="cate1">Surgical</label>
                    </div>
                    <span class="shop-widget-number">(13)</span>
                </li>
                <li>
                    <div class="shop-widget-content">
                        <input type="checkbox" id="cate1">
                        <label for="cate1">Critical Care</label>
                    </div>
                    <span class="shop-widget-number">(13)</span>
                </li>
                <li>
                    <div class="shop-widget-content">
                        <input type="checkbox" id="cate1">
                        <label for="cate1">Others</label>
                    </div>
                    <span class="shop-widget-number">(13)</span>
                </li>

            </ul>

        </form>
    </div>


</aside>
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

<!--=====================================
                    SHOP PART START
        =======================================-->

<section class="inner-section shop-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 d-none d-lg-block">
                <div class="shop-widget">
    <h6 class="shop-widget-title">Filter by Price</h6>
    <form>
        <div class="shop-widget-group">
            <input type="number" placeholder="Min - 00" min="1">
            <input type="number" placeholder="Max - 5k" max="">
        </div>
    </form>
</div>

<div class="shop-widget">
    <h6 class="shop-widget-title">Filter by</h6>
    <form>
        <ul class="shop-widget-list">
            <li>
                <div class="shop-widget-content">
                    <input type="checkbox" id="tag1">
                    <label for="tag1">new items</label>
                </div>
                <span class="shop-widget-number">(13)</span>
            </li>
            <li>
                <div class="shop-widget-content">
                    <input type="checkbox" id="tag3">
                    <label for="tag3">Best Selling</label>
                </div>
                <span class="shop-widget-number">(35)</span>
            </li>
            <li>
                <div class="shop-widget-content">
                    <input type="checkbox" id="tag5">
                    <label for="tag5">discount items</label>
                </div>
                <span class="shop-widget-number">(59)</span>
            </li>
        </ul>
    </form>
</div>

<div class="shop-widget">
    <h6 class="shop-widget-title">Location</h6>
    <form>
        <ul class="shop-widget-list">
            <li>
                <select name="city" id="city" class="form-control" value="">
                    <option value="">Kolkata</option>
                    <option value="">Howrah</option>
                    <option value=""></option>
                </select>
            </li>
            <li id="shop-widget-search">
                <input class="shop-widget-search" type="number" min="1" max="" placeholder="Pincode - 700 001">
            </li>
        </ul>
    </form>
</div>
<div class="shop-widget">
    <h6 class="shop-widget-title">Discount type</h6>
    <form>
        <input class="shop-widget-search" type="text" placeholder="Search...">
        <ul class="shop-widget-list">
            <li>
                <div class="shop-widget-content">
                    <input type="checkbox" id="brand1">
                    <label for="brand1">All</label>
                </div>
            </li>
            <li>
                <div class="shop-widget-content">
                    <input type="checkbox" id="brand1">
                    <label for="brand1">Discount PTR Only</label>
                </div>
            </li>
            <li>
                <div class="shop-widget-content">
                    <input type="checkbox" id="brand2">
                    <label for="brand1">Same product bonus</label>
                </div>
            </li>
            <li>
                <div class="shop-widget-content">
                    <input type="checkbox" id="brand3">
                    <label for="brand1">Same product bonus & Discount</label>
                </div>
            </li>
            <li>
                <div class="shop-widget-content">
                    <input type="checkbox" id="brand4">
                    <label for="brand1">Different product bonus</label>
                </div>
            </li>
            <li>
                <div class="shop-widget-content">
                    <input type="checkbox" id="brand4">
                    <label for="brand1">Different product bonus & Discount</label>
                </div>
            </li>
        </ul>
    </form>
</div>
<div class="shop-widget">
    <h6 class="shop-widget-title">Category</h6>
    <form>
        <input class="shop-widget-search" type="text" placeholder="Search...">
        <ul class="shop-widget-list shop-widget-scroll">
            <li>
                <div class="shop-widget-content">
                    <input type="checkbox" id="cate1">
                    <label for="cate1">All Category</label>
                </div>
                <span class="shop-widget-number">(13)</span>
            </li>
            <li>
                <div class="shop-widget-content">
                    <input type="checkbox" id="cate1">
                    <label for="cate1">Ethical</label>
                </div>
                <span class="shop-widget-number">(13)</span>
            </li>
            <li>
                <div class="shop-widget-content">
                    <input type="checkbox" id="cate1">
                    <label for="cate1">Generic</label>
                </div>
                <span class="shop-widget-number">(13)</span>
            </li>
            <li>
                <div class="shop-widget-content">
                    <input type="checkbox" id="cate1">
                    <label for="cate1">OTC</label>
                </div>
                <span class="shop-widget-number">(13)</span>
            </li>
            <li>
                <div class="shop-widget-content">
                    <input type="checkbox" id="cate1">
                    <label for="cate1">Ayurvedic</label>
                </div>
                <span class="shop-widget-number">(13)</span>
            </li>
            <li>
                <div class="shop-widget-content">
                    <input type="checkbox" id="cate1">
                    <label for="cate1">Surgical</label>
                </div>
                <span class="shop-widget-number">(13)</span>
            </li>
            <li>
                <div class="shop-widget-content">
                    <input type="checkbox" id="cate1">
                    <label for="cate1">Critical Care</label>
                </div>
                <span class="shop-widget-number">(13)</span>
            </li>
            <li>
                <div class="shop-widget-content">
                    <input type="checkbox" id="cate1">
                    <label for="cate1">Others</label>
                </div>
                <span class="shop-widget-number">(13)</span>
            </li>


        </ul>

    </form>
</div>
            </div>
            <div class="col-lg-9">
                <div class="row p-3 border-bottom bg-white rounded-3" >
                    <h6>Search by Location</h6>

                    <form action="">
                        <div class="row">
                            <div class="col">
                                <select class="form-select filter-select">
                                    <option selected>Kolkata</option>
                                </select>
                            </div>
                            <div class="col">
                                <input type="number" min="1" max="799999" class="form-control" placeholder="Pin - 700001">
                            </div>
                            <div class="col">
                                <input type="submit" class="form-control bg-primary text-white" value="search" name="search">
                            </div>
                        </div>
                    </form>

                </div>

                <div class="row pt-3">
                    <div class="col-lg-12 mb-4">
    <form action="">
        <div class="top-filter">
            <div class="filter-show">
                <label class="filter-label">Show :</label>
                <select class="form-select filter-select">
                    <option value="1">12</option>
                    <option value="2">24</option>
                    <option value="3">36</option>
                </select>
            </div>
            <div class="filter-short">
                <label class="filter-label">Sort by :</label>
                <select class="form-select filter-select">
                    <option selected> Default </option>
                    <option value="1">Name </option>
                    <option value="2">New Item</option>
                    <option value="3">Best Price </option>
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
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-3">
                    <div class="col">
        <div class="product-card">
            <div class="product-media">
                <div class="product-label">
                    <label class="label-text new">new</label>
                </div>
                <a class="product-image" href="product.php">
                    <img src="image/products/02.jpg" alt="product">
                </a>
                <div class="product-widget">
                
                    <a title="Product Compare"  class="fas fa-heart" ></a>
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
</div>
<div class="col">
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
</div>
<div class="col">
        <div class="product-card">
            <div class="product-media">
                <div class="product-label">
                    <label class="label-text new">new</label>
                </div>
                <a class="product-image" href="product.php">
                    <img src="image/products/02.jpg" alt="product">
                </a>
                <div class="product-widget">
                    <a title="Product Compare"  class="fas fa-heart "></a>
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
</div>
<div class="col">
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
</div>
<div class="col">
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
</div>
<div class="col">
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
</div>
<div class="col">
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
</div>
<div class="col">
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
</div>
<div class="col">
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
</div>
<div class="col">
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
</div>
<div class="col">
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
</div>
<div class="col">
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
</div>                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bottom-paginate">
                            <p class="page-info">Showing 12 of 600 Results</p>
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
                            </ul>
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
