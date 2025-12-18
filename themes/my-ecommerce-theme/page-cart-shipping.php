<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/shipping-cart.css">
     <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/Product.css">
     <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/scss">
     <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/product-detail.css">
</head>


<?php get_header();?>
<a href="javascript:history.back()" class="back-btn">&larr; Back</a>
<div class="checkout-page">


  <!-- LEFT: CART -->
  <div class="cart">
    <h2>Shopping cart</h2>
    <p class="cart-sub">You have 3 item in your cart</p>

    <div class="cart-item">
      <img src="https://i.pinimg.com/1200x/8a/b3/c2/8ab3c2a3d9bada28945e17635c0944a5.jpg" />
      <div class="info">
        <h4>Lotte Pepero Almond</h4>
        <span>Extra cheese and toping</span>
      </div>
      <div class="qty">4 ▲▼</div>
      <div class="prices">$1.50</div>
      <button class="delete">🗑</button>
    </div>

    <div class="cart-item">
      <img src="https://i.pinimg.com/1200x/04/40/c0/0440c09e02ae12e3b51156193ab6dd6c.jpg" />
      <div class="info">
        <h4>Frozen Pork Belly</h4>
        <span>500g Pack</span>
      </div>
      <div class="qty">1 ▲▼</div>
      <div class="prices">$681</div>
      <button class="delete">🗑</button>
    </div>

    <div class="cart-item">
      <img src="https://i.pinimg.com/736x/57/1f/00/571f0012df93f5dad85b40555bff5c3a.jpg" />
      <div class="info">
        <h4>Korean Soy Sauce</h4>
        <span>500ML</span>
      </div>
      <div class="qty">1 ▲▼</div>
      <div class="prices">$681</div>
      <button class="delete">🗑</button>
    </div>

    <div class="cart-item">
      <img src="https://i.pinimg.com/736x/08/d4/6f/08d46f5d8241a66d3d2f0f2ad684e06e.jpg" />
      <div class="info">
        <h4>Binggrae Banana Milk</h4>
        <span>6 bottles / pack</span>
      </div>
      <div class="qty">1 ▲▼</div>
      <div class="prices">$681</div>
      <button class="delete">🗑</button>
    </div>

    <div class="cart-item">
      <img src="https://i.pinimg.com/736x/7c/8a/86/7c8a861f6d7fb2b12af0ad05d441e334.jpg" />
      <div class="info">
        <h4>Tteokbokki Pack (Spicy)</h4>
        <span>With Rice Cakes + Sauce</span>
      </div>
      <div class="qty">1 ▲▼</div>
      <div class="prices">$681</div>
      <button class="delete">🗑</button>
    </div>
     <section class="pagination-section">

        <div class="pagination">
            <a href="#">Back</a>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">Next</a>
        </div>
    </section>
  </div>
  

  <!-- RIGHT: PAYMENT -->
  <div class="payment">
    <div class="payment-header">
      <h3>Card Details</h3>
      <img src="avatar.png" class="avatar">
    </div>

    <p class="label">Card type</p>
    <div class="cards">
      <span>Mastercard</span>
      <span>Visa</span>
      <span>PayPal</span>
      <span class="muted">See all</span>
    </div>

    <label>Name on card</label>
    <input type="text" placeholder="Name" />

    <label>Card Number</label>
    <input type="text" placeholder="1111 2222 3333 4444" />

    <div class="row">
      <div>
        <label>Expiration date</label>
        <input type="text" placeholder="mm/yy" />
      </div>
      <div>
        <label>CVV</label>
        <input type="text" placeholder="123" />
      </div>
    </div>

    <div class="summary">
      <div><span>Subtotal</span><span>$1,668</span></div>
      <div><span>Shipping</span><span>$4</span></div>
      <div class="total"><span>Total (Tax incl.)</span><span>$1,672</span></div>
    </div>

    <button class="checkout">
      <span>$1,672</span>
      <span>
        <a class="a-of" href="<?php echo site_url('/successful-page'); ?>">Checkout →</a></span>
    </button>
  </div>

</div>
<!-- REVIEWS -->
<section class="reviews">
  <h2>Reviews & Rating</h2>

  <div class="review-grid">
    <!-- Review Card -->
    <div class="review-card">
      <div class="review-header">
        <div class="user">
          <img src="https://i.pinimg.com/736x/6c/b7/eb/6cb7ebededd89db08959006552b4756d.jpg" alt="">
          <div>
            <h4>Samnang Dara</h4>
            <span>May 12, 2024</span>
          </div>
        </div>
        <div class="rating">⭐ 4.9</div>
      </div>
      <p>
        I've been using Nature's Best Vitamin C 1000 mg tablets for six months,
        and the results are fantastic. My immune system feels stronger—I haven't
        had a single cold this flu season.
      </p>
    </div>

    <!-- Duplicate cards -->
    <div class="review-card"><div class="review-header">
        <div class="user">
          <img src="https://i.pinimg.com/736x/8b/e8/74/8be874f1e95e58c8d2fb5e5c20240a73.jpg" alt="">
          <div>
            <h4>Thea Sithul</h4>
            <span>May 12, 2024</span>
          </div>
        </div>
        <div class="rating">⭐ 4.9</div>
      </div>
      <p>
        I've been using Nature's Best Vitamin C 1000 mg tablets for six months,
        and the results are fantastic. My immune system feels stronger—I haven't
        had a single cold this flu season.
      </p></div>
    <div class="review-card"><div class="review-header">
        <div class="user">
          <img src="https://i.pinimg.com/736x/21/16/33/2116330139a980d22397898539b69543.jpg" alt="">
          <div>
            <h4>Kenn Chhai</h4>
            <span>May 12, 2024</span>
          </div>
        </div>
        <div class="rating">⭐ 4.9</div>
      </div>
      <p>
        I've been using Nature's Best Vitamin C 1000 mg tablets for six months,
        and the results are fantastic. My immune system feels stronger—I haven't
        had a single cold this flu season.
      </p></div>
    <div class="review-card"><div class="review-header">
        <div class="user">
          <img src="https://i.pinimg.com/736x/86/ca/39/86ca395c981be0ed62f7c5679d0d0bf2.jpg" alt="">
          <div>
            <h4>Tum Dariya</h4>
            <span>May 12, 2024</span>
          </div>
        </div>
        <div class="rating">⭐ 4.9</div>
      </div>
      <p>
        I've been using Nature's Best Vitamin C 1000 mg tablets for six months,
        and the results are fantastic. My immune system feels stronger—I haven't
        had a single cold this flu season.
      </p></div>
    <div class="review-card"><div class="review-header">
        <div class="user">
          <img src="https://i.pinimg.com/736x/f6/0f/d4/f60fd4411770aa762459dc8a8b44d765.jpg" alt="">
          <div>
            <h4>Mao SreyPov</h4>
            <span>May 12, 2024</span>
          </div>
        </div>
        <div class="rating">⭐ 4.9</div>
      </div>
      <p>
        I've been using Nature's Best Vitamin C 1000 mg tablets for six months,
        and the results are fantastic. My immune system feels stronger—I haven't
        had a single cold this flu season.
      </p></div>
    <div class="review-card"><div class="review-header">
        <div class="user">
          <img src="https://i.pinimg.com/736x/89/87/49/8987499850fa97bb275f52718c69f5cc.jpg" alt="">
          <div>
            <h4>Kim Jennie</h4>
            <span>May 12, 2024</span>
          </div>
        </div>
        <div class="rating">⭐ 4.9</div>
      </div>
      <p>
        I've been using Nature's Best Vitamin C 1000 mg tablets for six months,
        and the results are fantastic. My immune system feels stronger—I haven't
        had a single cold this flu season.
      </p></div>
  </div>
</section>
  <?php get_footer();?>