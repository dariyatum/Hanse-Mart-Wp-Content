<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/customer.css">
</head>


<?php get_header();?>
<a href="javascript:history.back()" class="back-btn">&larr; Back</a>
 <div class="page-title">
    <h1>MY ACCOUNT</h1>
  </div>

  <div class="account-card">
    <!-- Profile Header -->
    <div class="profile-header">
      <div class="avatar-wrapper">
        <img src="https://i.pinimg.com/736x/7c/c2/1e/7cc21e20e7e295f855024a70ad8796bd.jpg" alt="Profile" class="avatar" />
        <span class="edit-icon">✎</span>
      </div>

      <div class="profile-info">
        <h2>Dariya Tum</h2>
        <p>dariyatum@gmail.com</p>
      </div>
    </div>

    <div class="divider"></div>

    <!-- Info Rows -->
    <div class="info-row">
      <span class="label">Name</span>
      <span class="value">Dariya Tum</span>
    </div>

    <div class="info-row">
      <span class="label">Email account</span>
      <span class="value">dariyatum4121@gmail.com</span>
    </div>

    <div class="info-row">
      <span class="label">Mobile number</span>
      <span class="value">+855 97 666 3857</span>
    </div>

    <div class="info-row">
      <span class="label">Location</span>
      <span class="value">Cambodia</span>
    </div>

    <!-- Button -->
    <button class="save-btn">Save Change</button>
  </div>

<?php get_footer();?>