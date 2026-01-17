
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

<!--=====================================
                NEW ITEM PART START
        =======================================-->
<style>
    tr td {
        vertical-align: middle;
    }

</style>

<main class="page-content">

    <section class="inner-section single-banner" style="background: url(https://images.newscientist.com/wp-content/uploads/2019/06/18153152/medicineshutterstock_1421041688.jpg) no-repeat center;">
        <div class="container">
            <h2>Bag</h2>
        </div>
    </section>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-12 p-3 card">

                <!--           cart item-->
                <form class="cart-items">
                    <div class="table-responsive col-12 mt-2">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th> Image </th>
                                    <th> Name </th>
                                    <th> Price </th>
                                    <th> Quantity </th>
                                    <th> Final Payble Value </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="remove-cart"> <a href=""> &times;</a> </td>
                                    <td> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQazEFXidsGdtpgZhtRvg_sAk6OfjMkVRgvuw&usqp=CAU" width="50px"> </td>
                                    <td> <b> Pan D </b></td>
                                    <td> ₹75.26 </td>
                                    <td>
                                        <div class="cart-action-group">
                                            <div class="product-action">
                                                <span class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></span>
                                                <input class="action-input" title="Quantity Number" type="text" name="quantity" value="100">
                                                <span class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td> ₹7526.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-12 ">
                        <p> <b> Discount Type: </b> <span> Same Product Bonus and Discount </span></p>
                        <div class="row">
                            <div class="col-6">
                                <p><b> MRP: </b> <span> ₹23.12 </span></p>
                                <p> <b> GST(5%): </b> <span>₹0.04 </span></p>
                                <p> <b> Quantity: </b> <span> 100 Strip </span></p>
                            </div>
                            <div class="col-6">
                                <p> <b> NET PTR Excluding GST: </b> <span>₹71.67</span></p>
                                <p><b> NET Rate Including GST: </b> <span> ₹23.12 </span></p>
                                <p><b> Final Payble Value: </b> <span> ₹7526.00 </span></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-3">
                        <input type="submit" value="Update Cart" name="submit" class="btn btn-primary border-0" disabled>
                    </div>
                </form>


                <form class="cart-items">
                    <div class="table-responsive col-12 mt-2">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th> Image </th>
                                    <th> Name </th>
                                    <th> Price </th>
                                    <th> Quantity </th>
                                    <th> Final Payble Value </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="remove-cart"> <a href="">&times;</a> </td>
                                    <td> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQazEFXidsGdtpgZhtRvg_sAk6OfjMkVRgvuw&usqp=CAU" width="50px"> </td>
                                    <td> <b> Pan D </b></td>
                                    <td> ₹75.26 </td>
                                    <td>
                                        <div class="cart-action-group">
                                            <div class="product-action">
                                                <span class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></span>
                                                <input class="action-input" title="Quantity Number" type="text" name="quantity" value="100">
                                                <span class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td> ₹7526.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-12 ">
                        <p> <b> Discount Type: </b> <span> Same Product Bonus and Discount </span></p>
                        <div class="row">
                            <div class="col-6">
                                <p><b> MRP: </b> <span> ₹23.12 </span></p>
                                <p> <b> GST(5%): </b> <span>₹0.04 </span></p>
                                <p> <b> Quantity: </b> <span> 100 Strip </span></p>
                            </div>
                            <div class="col-6">
                                <p> <b> NET PTR Excluding GST: </b> <span>₹71.67</span></p>
                                <p><b> NET Rate Including GST: </b> <span> ₹23.12 </span></p>
                                <p><b> Final Payble Value: </b> <span> ₹7526.00 </span></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-3">
                        <input type="submit" value="Update Cart" name="submit" class="btn btn-primary border-0" disabled>
                    </div>
                </form>

            </div>


            <div class="col-md-4 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <h3> Order Summary </h3>
                        <hr>
                        <div class="order-summary">
                            <p class="clearfix">
                                <span class="float-start"> Total Price </span>
                                <span class="float-end"> ₹7526.00 </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-start"> Shipping Price </span>
                                <span class="float-end"> ₹ 00.00 </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-start"> GST </span>
                                <span class="float-end"> ₹ 24.00 </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-start"> Discount </span>
                                <span class="float-end"> - ₹ 24.00 </span>
                            </p>
                            <hr>
                            <p class="clearfix">
                                <span class="float-start"> Total </span>
                                <span class="float-end"> ₹ 1988 </span>
                            </p>
                        </div>
                        <br>
                        <a href="billing-info.php" class="btn btn-primary border-0 w-100">Procced to check out</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
    <div class="text-center mb-4">
        <a href="" class="btn theme-btn">Shop More</a>
    </div>

</main>
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
