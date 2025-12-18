<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/product-detail.css">
</head>


<?php get_header(); ?>
<a href="javascript:history.back()" class="back-btn">&larr; Back</a>
<?php
while ( have_posts() ) : the_post();

$price = get_post_meta(get_the_ID(), '_price', true);
$stock = get_post_meta(get_the_ID(), '_stock_status', true);
?>

<div class="product-page">

  <!-- LEFT : IMAGES -->
  <div class="gallery">
    <div class="main-image">
      <?php the_post_thumbnail('large'); ?>
    </div>

    <div class="thumbnails">
      <!-- optional: gallery images later -->
    </div>
  </div>

  <!-- RIGHT : DETAILS -->
  <div class="details">

    <h1><?php the_title(); ?></h1>

    <div class="rating">
      ★★★★★
      <span>288 reviews</span>
      <span class="divider">|</span>
      <span>100ml</span>
    </div>

    <div class="price">
      $<?php echo esc_html($price); ?>
    </div>

    <p class="description">
      <?php the_excerpt(); ?>
    </p>

    <hr>

    <!-- ACTION ROW -->
    <div class="action-row">
      <select class="size">
        <option>100ml</option>
      </select>

      <div class="quantity">
        <button>-</button>
        <span>1</span>
        <button>+</button>
      </div>

      <button class="add-to-cart"><a class="a-of" href="<?php echo site_url('/cart-shipping'); ?>">Add to cart</a></button>
    </div>

    <div class="meta">
      <span>♡ Add to wishlist</span>
      <span class="guarantee">
        <?php if ($stock === 'instock') : ?>
          ✔ In stock
        <?php else : ?>
          ✖ Out of stock
        <?php endif; ?>
      </span>
    </div>

    <!-- ACCORDIONS -->
    <div class="accordion">

      <div class="accordion-item open">
        HOW TO USE <span>−</span>
      </div>

      <ul class="how-to">
        <?php the_content(); ?>
      </ul>

    </div>

  </div>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>
