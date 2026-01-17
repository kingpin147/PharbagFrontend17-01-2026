
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
  <!--start content-->
  <main class="page-content">

      <section class="inner-section single-banner" style="background: url(https://images.newscientist.com/wp-content/uploads/2019/06/18153152/medicineshutterstock_1421041688.jpg) no-repeat center;">
          <div class="container">
              <h2>Order Details</h2>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Contact</li>
              </ol>
          </div>
      </section>

      <div class="container py-3">
          <div class="card">
              <div class="card-header ">
                  <div class="row g-3 align-items-center">
                      <div class="col-12 col-lg-4 col-md-6 me-auto">
                          <h5 class="mb-1">Order ID: #00145</h5>
                      </div>
                      <div class="col-12 col-lg-3 col-6 col-md-3">
                          <button type="button" class="badge btn-primary"><i class="fa fa-download"></i> Invoice </button>
                          <button type="button" class="badge btn-success" data-bs-toggle="modal" data-bs-target="#raise-ticket" id="theme-button"><i class="fa fa-ticket"></i> Raice a Ticket </button>

                          <!--                   raise ticket modal-->
                          <div class="modal fade" id="raise-ticket">
    <div class="modal-dialog bg-white">
        <div class="modal-content">

            <div class="modal-header border-bottom" style="border: 0px solid">
                <span>Raise a Ticket</span>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="p-3 row">
                    <form>
                        <div class="row">
                            <div class="col-xxl-6 col-lg-6 col-md-5 col-6">
                                <div class="">
                                    <label class="form-label"> Reason </label> <br>
                                    <select class="form-control">
                                        <option selected=""> Select your reason here</option>
                                        <option value="1">Reason 1</option>
                                        <option value="2">Reason 2</option>
                                        <option value="3">Reason 3</option>
                                        <option value="4">Reason 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-lg-6 col-md-5 col-6">
                                <div class="">
                                    <label class="form-label"> Subject </label> <br>
                                    <input class="form-control" placeholder="" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <label class="form-label"> Message (MAX 150 words) </label> <br>
                            <textarea placeholder="write your comments here" class="form-control"> </textarea>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary border-0" style="width: 100%">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

                      </div>
                  </div>
              </div>
              <div class="card-body">

                  <div class="row row-cols-1 row-cols-xl-2 row-cols-xxl-3 mb-4">

                      <div class="col">
                          <div class="card border shadow-none radius-10">
                              <div class="card-body">
                                  <div class="d-flex align-items-center gap-3">
                                      <div class="icon-box bg-light-danger border-0">
                                          <i class="bi bi-geo-alt text-danger"></i>
                                      </div>
                                      <div class="info">
                                          <h6 class="mb-2">Delivery Details</h6>
                                          <p class="mb-1"><strong>Address</strong> : Tcs Delta Park,J1-2, Street Number 30, EP Block, <br></p>
                                          <p class="mb-1"><strong>Landmark</strong> TCS Building</p>
                                          <p class="mb-1"><strong>Pin</strong> : 700001</p>
                                          <p class="mb-1"><strong>City</strong> : Kolkata</p>
                                          <p class="mb-1"><strong>State</strong> : West Bengal</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="col">
                          <div class="card border shadow-none radius-10">
                              <div class="card-body">
                                  <div class="d-flex align-items-center gap-3">
                                      <div class="icon-box bg-light-danger border-0">
                                          <i class="bi bi-geo-alt text-danger"></i>
                                      </div>
                                      <div class="info">
                                          <h6 class="mb-2">Payment info</h6>
                                          <p class="mb-1"><strong>Name on card :</strong> Master Card **** **** 8956</p>
                                          <p class="mb-1"><strong>Account Number :</strong> XXXXXXXXX</p>
                                          <p class="mb-1"><strong>Ifsc Code :</strong> XXXX</p>
                                          <p class="mb-1"><strong>Bank Name :</strong> Swiss Bank</p>
                                          <p class="mb-1"><strong>UPI :</strong> pharma@axis</p>
                                          <p class="mb-1"><strong>Transaction No. :</strong> 123456789</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!--end row-->

                  <div class="row">
                      <div class="col-12 col-lg-8">
                          <div class="card border shadow-none radius-10">
                              <div class="card-body">
                                  <div class="table-responsive">
                                      <table class="table align-middle mb-0">
                                          <thead class="bg-primary">
                                              <tr>
                                                  <th>ID</th>
                                                  <th>Product</th>
                                                  <th>MRP</th>
                                                  <th>Quantity</th>
                                                  <th>Total</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <td>#254</td>
                                                  <td>
                                                      <a href="product.php">
                                                          <div class="orderlist">
                                                              <P class="mb-0 product-title">Pan D</P>
                                                          </div>
                                                      </a>
                                                  </td>
                                                  <td>₹ 10.00</td>
                                                  <td>₹ 200</td>
                                                  <td>₹ 2000.00</td>
                                              </tr>
                                              <tr>
                                                  <td>#244</td>
                                                  <td>
                                                      <a href="product.php">
                                                          <div class="orderlist">
                                                              <P class="mb-0 product-title">Pan D</P>
                                                          </div>
                                                      </a>
                                                  </td>
                                                  <td>₹ 10.00</td>
                                                  <td>₹ 200</td>
                                                  <td>₹ 2000.00</td>
                                              </tr>
                                              <tr>
                                                  <td>#292</td>
                                                  <td>
                                                      <a href="product.php">
                                                          <div class="orderlist">
                                                              <P class="mb-0 product-title">Pan D</P>
                                                          </div>
                                                      </a>
                                                  </td>
                                                  <td>₹ 10.00</td>
                                                  <td>₹ 200</td>
                                                  <td>₹ 2000.00</td>
                                              </tr>

                                          </tbody>
                                      </table>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-12 col-lg-4">
                          <div class="card border shadow-none bg-light radius-10">
                              <div class="card-body">
                                  <div class="d-flex align-items-center mb-4">
                                      <div>
                                          <h5 class="mb-0">Payment Status</h5>
                                      </div>
                                      <div class="ms-auto">
                                          <span class="badge bg-primary ">COD</span>
                                      </div>
                                  </div>
                                  <div class="d-flex align-items-center mb-3">
                                      <div>
                                          <p class="mb-0">Total Price</p>
                                      </div>
                                      <div class="ms-auto">
                                          <h5 class="mb-0">₹ 2000.00</h5>
                                      </div>
                                  </div>
                                  <div class="d-flex align-items-center mb-3">
                                      <div>
                                          <p class="mb-0">Shipping Price</p>
                                      </div>
                                      <div class="ms-auto">
                                          <h5 class="mb-0">₹ 0.00</h5>
                                      </div>
                                  </div>
                                  <div class="d-flex align-items-center mb-3">
                                      <div>
                                          <p class="mb-0">GST</p>
                                      </div>
                                      <div class="ms-auto">
                                          <h5 class="mb-0">₹ 24.00</h5>
                                      </div>
                                  </div>
                                  <div class="d-flex align-items-center mb-3">
                                      <div>
                                          <p class="mb-0">Discount</p>
                                      </div>
                                      <div class="ms-auto">
                                          <h5 class="mb-0 text-danger">-₹ 36.00</h5>
                                      </div>
                                  </div>
                                  <div class="">
                                      <hr>
                                  </div>
                                  <div class="d-flex align-items-center mb-3">
                                      <div>
                                          <p class="mb-0">Total</p>
                                      </div>
                                      <div class="ms-auto">
                                          <h5 class="mb-0 text-primary">₹ 1988</h5>
                                      </div>
                                  </div>
                              </div>
                          </div>

                      </div>
                      <div class="col-12 col-md-6">
                          <div class="card border shadow-none radius-10">
                              <div class="card-body">
                                  <div class="" id="track-order">
                                      <nav class="navmenu">
                                          <ul type="none">
                                              <li> <a href="#" > Delivery </a>
                                                  <p class="clearfix">
                                                      <span class="float-start"> order will be delivered </span> &nbsp;
                                                      <span class="float-end"> 12 July, 2022 </span>
                                                  </p>
                                              </li>
                                              <li> <a href="#"> In Transit </a>
                                                  <p class="clearfix">
                                                      <span class="float-start">
                                                          In-transit uploaded <br>
                                                          (Kolkata_Entally_C (West Bengal) </span> &nbsp;
                                                      <span class="float-end"> 15 July, 2022 </span>
                                                  </p>
                                              </li>
                                              <li> <a href="#"> Confirmed </a>
                                                  <p class="clearfix">
                                                      <span class="float-start"> order has been confiremed </span> &nbsp;
                                                      <span class="float-end"> 20 July, 2022 </span>
                                                  </p>
                                              </li>
                                              <li> <a href="#" class="active"> Ordered </a>
                                                  <p class="clearfix">
                                                      <span class="float-start"> order has been placed. </span> &nbsp;
                                                      <span class="float-end"> 20 July, 2022 </span>
                                                  </p>
                                              </li>
                                          </ul>
                                      </nav>
                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>
                  <!--end row-->
              </div>
          </div>
      </div>

  </main>
  <!--end page main-->
  <!--end wrapper-->
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
