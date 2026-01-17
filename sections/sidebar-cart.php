<aside class="cart-sidebar">
    <div class="cart-header">
        <div class="cart-total">
            <i class="fas fa-shopping-basket"></i>
            <span>total item</span><span> </span>
        </div>
        <button class="cart-close"><i class="icofont-close"></i></button>
    </div>
    <ul class="cart-list" id="cart-item">
        <center>Loading....</center>

    </ul>
    <div class="cart-footer">
        <!--
                <button class="coupon-btn">Do you have a coupon code?</button>
                <form class="coupon-form">
                    <input type="text" placeholder="Enter your coupon code">
                    <button type="submit"><span>apply</span></button>
                </form>
-->
        <a id="cart-checkout-btn" class="cart-checkout-btn" onclick="placeorder()">
            <span class="checkout-label">Place Your Order</span>
            <span class="checkout-price" id="total-checkout-price">₹0</span>
        </a>
    </div>
</aside>
