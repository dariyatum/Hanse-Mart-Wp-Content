<head>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
      <link rel="stylesheet" href="wp-content/themes/my-ecommerce-theme/components/style.css">
      <!-- <link rel="stylesheet" href="wp-content/themes/my-ecommerce-theme/components/slider.css"> -->
      <link rel="stylesheet" href="wp-content/themes/my-ecommerce-theme/style.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>

<?php get_header();?>

<!-- hero -->
<section class="hero">
  <div class="hero-content">
    <h1>FIND YOUR<br>OWN KOREAN<br>FAVOURITE</h1>
    <input type="text" placeholder="Search..." />
    <p>The best selection of Korean food and products</p>
  </div>
</section>

<!-- CATEGORIES -->
    <h3 class="title">SHOP BY CATEGORIES</h3>
<section class="categories">
  <div class="category"><i class="fa-solid fa-bowl-food"></i><span>Food</span></div>
  <div class="category"><i class="fa-solid fa-wine-bottle"></i><span>Drink</span></div>
  <div class="category"><i class="fa-solid fa-pump-soap"></i><span>Beauty</span></div>
  <div class="category"><i class="fa-solid fa-shirt"></i><span>Fashion</span></div>


</section>
  <section class="see-all">
    <a class="see-all-btn" href="<?php echo site_url('/categories'); ?>">See all</a>
    </section>

<!-- SALE -->
<section class="sale">
  <h2>SALE</h2>
  <span>UP TO 50% OFF</span>
</section>

<!-- FEATURE PRODUCTS -->
 <h3 class="title">FEATURE PRODUCTS</h3>
<section class="products">
  <div class="product-grid">

  <?php
    // WP Query for Featured Products
$args = [
    'post_type'      => 'product',
    'posts_per_page' => 4,
    'tax_query'      => [
        [
            'taxonomy' => 'product_category', // correct WooCommerce taxonomy
            'field'    => 'slug',
            'terms'    => 'featured', // the slug of your category
        ],
    ],
];

$featured_query = new WP_Query($args);

if ($featured_query->have_posts()) :
    while ($featured_query->have_posts()) : $featured_query->the_post();
        // display your product card here
    endwhile;
else :
    echo 'No products found.';
endif;

wp_reset_postdata();



    $featured_query = new WP_Query($args);

    if($featured_query->have_posts()) :
        while($featured_query->have_posts()) : $featured_query->the_post();
  ?>
        <div class="product-card">
            <?php if(has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
            <?php endif; ?>
            <h3><?php the_title(); ?></h3>
            <?php if( $price = get_post_meta(get_the_ID(), '_price', true) ) : ?>
                <strong>$<?php echo $price; ?></strong>
            <?php endif; ?>
            <?php $stock = get_post_meta(get_the_ID(), '_stock', true); ?>
            <span style="color: red;"><?php echo $stock ? 'In Stock' : 'Out of Stock'; ?></span>
            <a href="<?php the_permalink(); ?>"><button>Add to Cart</button></a>
        </div>
  <?php
        endwhile;
    else :
        echo '<p>No featured products found.</p>';
    endif;

    wp_reset_postdata();
  ?>

  </div>
</section>


  </div>
</section>
  <section class="see-all">
    <a href="" class ="see-all-btn">See all</a>
    </section>

<!-- BEST SELLER -->



<!-- PREMIUM SNACK COLLECTION -->
  <!-- PREMIUM SNACK COLLECTION -->
<!-- FEATURE PRODUCTS -->
 <h3 class="title">PREMIUM SNACK COLLECTION</h3>
<section class="products">
  <div class="product-grid">

  <?php
    // WP Query for Featured Products
$args = [
    'post_type'      => 'product',
    'posts_per_page' => 4,
    'tax_query'      => [
        [
            'taxonomy' => 'product_category', // correct WooCommerce taxonomy
            'field'    => 'slug',
            'terms'    => 'featured', // the slug of your category
        ],
    ],
];

$featured_query = new WP_Query($args);

if ($featured_query->have_posts()) :
    while ($featured_query->have_posts()) : $featured_query->the_post();
        // display your product card here
    endwhile;
else :
    echo 'No products found.';
endif;

wp_reset_postdata();



    $featured_query = new WP_Query($args);

    if($featured_query->have_posts()) :
        while($featured_query->have_posts()) : $featured_query->the_post();
  ?>
        <div class="product-card">
            <?php if(has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
            <?php endif; ?>
            <h3><?php the_title(); ?></h3>
            <?php if( $price = get_post_meta(get_the_ID(), '_price', true) ) : ?>
                <strong>$<?php echo $price; ?></strong>
            <?php endif; ?>
            <?php $stock = get_post_meta(get_the_ID(), '_stock', true); ?>
            <span style="color: red;"><?php echo $stock ? 'In Stock' : 'Out of Stock'; ?></span>
            <a href="<?php the_permalink(); ?>"><button>Add to Cart</button></a>
        </div>
  <?php
        endwhile;
    else :
        echo '<p>No featured products found.</p>';
    endif;

    wp_reset_postdata();
  ?>

  </div>
</section>
<section class="see-all">
  <a href="<?php echo site_url('/premium'); ?>" class="see-all-btn">See all</a>
</section>
<!-- NEW ARRIVAL -->
   <h3 class="title">NEW ARRIVAL</h3>
<section class="products">
  <div class="product-grid">

  <?php
    // WP Query for Featured Products
$args = [
    'post_type'      => 'product',
    'posts_per_page' => 4,
    'tax_query'      => [
        [
            'taxonomy' => 'product_category', // correct WooCommerce taxonomy
            'field'    => 'slug',
            'terms'    => 'featured', // the slug of your category
        ],
    ],
];

$featured_query = new WP_Query($args);

if ($featured_query->have_posts()) :
    while ($featured_query->have_posts()) : $featured_query->the_post();
        // display your product card here
    endwhile;
else :
    echo 'No products found.';
endif;

wp_reset_postdata();



    $featured_query = new WP_Query($args);

    if($featured_query->have_posts()) :
        while($featured_query->have_posts()) : $featured_query->the_post();
  ?>
        <div class="product-card">
            <?php if(has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
            <?php endif; ?>
            <h3><?php the_title(); ?></h3>
            <?php if( $price = get_post_meta(get_the_ID(), '_price', true) ) : ?>
                <strong>$<?php echo $price; ?></strong>
            <?php endif; ?>
            <?php $stock = get_post_meta(get_the_ID(), '_stock', true); ?>
            <span style="color: red;"><?php echo $stock ? 'In Stock' : 'Out of Stock'; ?></span>
            <a href="<?php the_permalink(); ?>"><button>Add to Cart</button></a>
        </div>
  <?php
        endwhile;
    else :
        echo '<p>No featured products found.</p>';
    endif;

    wp_reset_postdata();
  ?>

  </div>
</section>
  <section class="see-all">
    <a href="" class ="see-all-btn">See all</a>
    </section>

<!-- COMBO -->
    <h3 class="title">COMBO</h3>
<section class="combo">
  <img class="banner-container" src="https://i.ibb.co/vC9tcrQC/Frame-52.png" alt="">

</section>
  <section class="see-all">
    <a href="" class ="see-all-btn">See all</a>
    </section>

<!-- PROMO SECTION -->
<!-- PROMO SECTION -->
<section class="promo">
    <h2>UP TO 30% OFF</h2>

    <div class="product-grid product-grid-center">
        <?php
        $promo_query = new WP_Query([
            'post_type'      => 'product',
            'posts_per_page' => 4,
            'meta_query'     => [
                [
                    'key'     => 'is_promotion',
                    'value'   => '1',
                    'compare' => '='
                ]
            ]
        ]);$promo_query = new WP_Query([
    'post_type' => 'product',
    'posts_per_page' => 4,
]);



        if ($promo_query->have_posts()) :
            while ($promo_query->have_posts()) : $promo_query->the_post();

                $price = get_post_meta(get_the_ID(), '_price', true);
                $image = get_the_post_thumbnail_url(get_the_ID(), 'medium');
        ?>
            <div class="card">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo esc_url($image); ?>" alt="<?php the_title(); ?>">
                </a>

                <h3><?php the_title(); ?></h3>

                <p class="price">$<?php echo esc_html($price); ?></p>

                <a href="<?php the_permalink(); ?>">
                    <button>Add to cart</button>
                </a>
            </div>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No promotion products found.</p>';
        endif;
        ?>
    </div>
</section>


<p class="see-all"><a href="<?php echo site_url('/promotion'); ?>">See all promotions</a></p>
<!-- REVIEWS -->
<section class="reviews"style="background-color: transparent;">
  <h3>CUSTOMER REVIEWS</h3>
  <p>⭐ ⭐ ⭐ ⭐ ☆ (4.1 out of 5)</p>
</section>

<!-- REVIEW SECTION -->
  <p class="write-review" style="background-color: transparent;"> >Write a review</p>
<section class="reviews"style="background-color: transparent;">
   
    <div class="review-wrapper">
        <!-- LEFT -->
        <div class="rating">
            <div class="stars">★★★★☆</div>

            <div class="bar">
                <span>5</span>
                <div class="progress"><div class="fill w80"></div></div>
            </div>
            <div class="bar">
                <span>4</span>
                <div class="progress"><div class="fill w40"></div></div>
            </div>
            <div class="bar">
                <span>3</span>
                <div class="progress"><div class="fill w20"></div></div>
            </div>
            <div class="bar">
                <span>2</span>
                <div class="progress"><div class="fill w10"></div></div>
            </div>
            <div class="bar">
                <span>1</span>
                <div class="progress"><div class="fill w15"></div></div>
            </div>
        </div>

        <!-- RIGHT !DOCTYPE html>
<html <?php language_attributes(); ?>>
<head><?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() );?>">
    <link rel="stylesheet" href="wp-content/themes/my-ecommerce-theme/components/nav2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="wp-content/themes/my-ecommerce-theme/components/nav.css">
    <link rel="stylesheet" href="wp-content/themes/my-ecommerce-theme/components/header-back.css">

</head>
<body <?php body_class(); ?>>
<header>
<div class="nav__brand"><img src="https://i.ibb.co/Pz6KNytN/nav-brand.png" alt=""></div>
<?php wp_nav_menu(['theme_location'=>'primary']); ?>
</header>-->
        <div class="review-images">
            <h4>REVIEW WITH IMAGES</h4>
            <div class="images">
                <img src="https://images.unsplash.com/photo-1546069901-eacef0df6022" alt="">
                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836" alt="">
                <img src="https://images.unsplash.com/photo-1526318896980-cf78c088247c" alt="">
            </div>
        </div>
    </div>
</section>
<!-- SPECIAL OFFERS -->
<section class="sale green">
  <h2>UP TO 30% OFF</h2>
</section>





 <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      centeredSlides: true,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        type: "fraction",
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    var appendNumber = 4;
    var prependNumber = 1;
    document
      .querySelector(".prepend-2-slides")
      .addEventListener("click", function (e) {
        e.preventDefault();
        swiper.prependSlide([
          '<div class="swiper-slide">Slide ' + --prependNumber + "</div>",
          '<div class="swiper-slide">Slide ' + --prependNumber + "</div>",
        ]);
      });
    document
      .querySelector(".prepend-slide")
      .addEventListener("click", function (e) {
        e.preventDefault();
        swiper.prependSlide(
          '<div class="swiper-slide">Slide ' + --prependNumber + "</div>"
        );
      });
    document
      .querySelector(".append-slide")
      .addEventListener("click", function (e) {
        e.preventDefault();
        swiper.appendSlide(
          '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>"
        );
      });
    document
      .querySelector(".append-2-slides")
      .addEventListener("click", function (e) {
        e.preventDefault();
        swiper.appendSlide([
          '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>",
          '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>",
        ]);
      });
  </script>

 <!-- <?php the_content(); ?> -->
<?php get_footer();?>
