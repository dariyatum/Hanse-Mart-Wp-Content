<head>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/Product.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/style.css">


</head>
<?php get_header(); ?>
<a href="javascript:history.back()" class="back-btn">&larr; Back</a>

  <section class="banner-hero">
        <h3 class="banner-hero_title">Get <span>Free Delivery</span>On Shopping $200</h3>
        <a href="" class="banner-hero_btn">Learn More</a>
    </section>


 <!-- Top Navigation -->
  <div class="nav-bar">
    <div class="nav-left">
      <div class="dropdown">
        <select name="" id="" class="arroww">
            <option value="">All Categories</option>
            <option value="">Fresh& Frozen</option>
            <option value="">Instant Food</option>
            <option value="">Ingredient</option>
            <option value="">Drink</option>
            <option value="">Snacks</option>
            <option value="">Grocaries</option>
        </select>
      </div>
      <a href="#">Special Offers</a>
      <a href="#">New Arrival</a>
      <a href="#">Best Sellers</a>
    </div>

    <div class="nav-right">
        <select name="" id="" class="sort dropdown">
            <option value="">soft by</option>
            <option value="">price high to low</option>
            <option value="">price low to high</option>
        </select>
      </button>
    </div>
  </div>

  <!-- Search Bar -->
  <div class="search-wrapper">
    <div class="search-bar">
      <span class="search-icon">🔍</span>
      <input type="text" placeholder="search....." />
    </div>
  </div>

 <div class="product-grid">

<?php
$args = array(
    'post_type'      => 'product'
);


$query = new WP_Query($args);

while ($query->have_posts()) : $query->the_post();

    $price = get_post_meta(get_the_ID(), '_price', true);
    $stock = get_post_meta(get_the_ID(), '_stock_status', true);
?>

    <div class="product-card product-card-4">
        <span class="badge">New</span>

        <a class="product-imagee" href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('medium'); ?>
        </a>

        <p><?php the_title(); ?></p>

        <strong>$<?php echo esc_html($price); ?></strong>

<?php if (intval($stock) > 0): ?>
            <span style="color: red;">In Stock</span>
        <?php else: ?>
            <span style="color: gray;">out of stock</span>
        <?php endif; ?>

        <a href="<?php the_permalink(); ?>">
            <button>Add to Cart</button>
        </a>
    </div>

<?php endwhile; wp_reset_postdata(); ?>

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
<?php get_footer(); ?>