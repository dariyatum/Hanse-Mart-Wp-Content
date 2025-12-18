<head>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/signup.css">
</head>

<?php get_header();?>
<a href="javascript:history.back()" class="back-btn">&larr; Back</a>
  <div class="signup-container">
    <h1>SIGN UP</h1>

    <form class="signup-form">
      <label>Name :</label>
      <input type="text" />

      <label>Email :</label>
      <input type="email" />

      <label>Password :</label>
      <input type="password" />

      <button class="primary-btn">Sign up</button>
    </form>

    <p class="login-text">
      Already have an account ?  <a class="a-of" href="<?php echo site_url('/log-in'); ?>">Log in</a>
    </p>

    <div class="divider">
      <span></span>
      <p>or</p>
      <span></span>
    </div>

    <button class="google-btn">
      <span class="google-icon">G</span>
      Sign up with google
    </button>
  </div>
  <?php get_footer();?>