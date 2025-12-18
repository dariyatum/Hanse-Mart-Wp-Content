<head>
    <link rel="stylesheet" href="wp-content/themes/my-ecommerce-theme/components/categories.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/categories.css">
</head>

<?php get_header();?>
<a href="javascript:history.back()" class="back-btn">&larr; Back</a>
<section class="grid">

  <!-- ROW 1 -->
  <a href="#" class="card green">
    <h2>FRESH<br>&<br>FROZEN</h2>
    <img src="images/meat.png" alt="">
  </a>

  <a href="instant-food.html" class="card pink">
    <h2>INSTANT<br>FOOD</h2>
    <img src="images/ramen.png" alt="">
  </a>

  <a href="drink.html" class="card yellow">
    <h2>DRINK</h2>
    <img src="images/drink.png" alt="">
  </a>

  <!-- ROW 2 -->
  <a href="ingredient.html" class="card cream">
    <h2>INGREDIENT</h2>
    <img src="images/ingredient.png" alt="">
  </a>

  <a href="snacks.html" class="card purple">
    <h2>SNACKS</h2>
    <img src="images/snacks.png" alt="">
  </a>

  <a href="groceries.html" class="card brown wide">
    <h2>GROCARIES</h2>
    <img src="images/groceries.png" alt="">
  </a>

</section>

<!-- NEW ARRIVAL -->
<a href="new-arrival.html" class="banner new">
  <span class="badge">NEW</span>
  <h1>ARRIVAL</h1>
</a>


<?php get_footer();?>