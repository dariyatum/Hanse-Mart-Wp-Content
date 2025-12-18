<head>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/login.css">
</head>

<?php get_header();?>
<a href="javascript:history.back()" class="back-btn">&larr; Back</a>
 <div class="login-container">
    <h1>LOG IN</h1>

    <form class="login-form">
      <label>Name or phone number :</label>
      <input type="text" />

      <label>Password :</label>
      <input type="password" />

      <p class="helper-text">
        forget password ? <a href="#">Sign up</a>
      </p>

      <button class="primary-btn">log in</button>
    </form>
  </div>
  <?php get_footer();?>
  
