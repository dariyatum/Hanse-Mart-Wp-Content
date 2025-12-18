<head>
    <link rel="stylesheet" href="/components/categories.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/contact.css">
        <script>
  (g => { /* Google's bootstrap loader code */ })({
    key: "YOUR_API_KEY",
    v: "weekly"
  });
</script>
  
</head>

<?php get_header();?>
<a href="javascript:history.back()" class="back-btn">&larr; Back</a>

    <div class="contact" id="">
        <h1>Contact Us</h1>
        <form action="">
            <div class="labels">
                <label for="">First name:</label>
                <br> 
                <br>
                <input type="text" id="" name="" placeholder="Your name">
                <br>
                <br>
                <label for="">Last name:</label>
                <br>
                <br>
                <input type="text" id="" name="" placeholder="Your name">
                <br>
                <br>
                <label for="">Email Adress:</label>
                <br>
                <br>
                <input type="text" id="" name="" placeholder="Your name">
                <br>
                <br>
                <label for="">Message:</label>
                <br>
                <br>
                <input type="text" id="" name="" placeholder="Your message" style="padding-bottom: 50px;">
                <br>
                <br>
                <input type="submit" id="" name="" value="Submit" style="text-align: center; font-size: 25px; border: 2px solid #0e0b0b; width: 100%; color: #ffffff;background-color: #0e0b0b;">
            </div>
        </form>
    </div>
    <div class="img">
        <gmp-map center="-25.344,131.031" zoom="4" map-id="DEMO_MAP_ID"></gmp-map>

    </div>
    <?php get_footer();?>

