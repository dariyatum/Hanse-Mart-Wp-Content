
<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/promotion.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/Product.css">

      
</head>


<?php get_header(); ?>
<a href="javascript:history.back()" class="back-btn">&larr; Back</a>
<div class="container">
  <h1>Promotion Products</h1>

  <?php
  $args = [
    'post_type'      => 'product',
    'posts_per_page' => -1,
    'tax_query'      => [
      [
        'taxonomy' => 'product_category',
        'field'    => 'slug',
        'terms'    => 'promotion',
      ],
    ],
  ];

  $promo_query = new WP_Query($args);

  if ($promo_query->have_posts()) :

    echo '<div class="box">';

    while ($promo_query->have_posts()) : $promo_query->the_post();

      $price = get_post_meta(get_the_ID(), '_price', true);
      $stock = get_post_meta(get_the_ID(), '_stock', true);
      ?>

      <div class="product-card">

        <!-- BADGES -->
        <div class="badge free">Free shipping</div>

        <?php if ($stock > 0) : ?>
          <div class="badge stock">Instock</div>
        <?php else : ?>
          <div class="badge stock out">Out of stock</div>
        <?php endif; ?>

        <!-- IMAGE -->
        <a href="<?php the_permalink(); ?>">
          <?php if (has_post_thumbnail()) {
            the_post_thumbnail('medium');
          } ?>
        </a>

        <!-- TITLE -->
        <h3><?php the_title(); ?></h3>

        <!-- PRICE -->
        <p class="price">
          $<?php echo esc_html($price); ?>
        </p>

        <!-- BUTTON -->

        <a href="<?php the_permalink(); ?>">
            <button>Add to Cart</button>
        </a>

      </div>

      <?php
    endwhile;

    echo '</div>';

  else :
    echo '<p>No promotion products found.</p>';
  endif;

  wp_reset_postdata();
  ?>
  
</div>

<?php get_footer(); ?>
