<?php
// This page variable ***UPDATE***
    $thisPage = "THIS-PAGE-IN-POST-CON.php";
    include '../../post-con/'.$thisPage;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <title><?php echo $title; ?> | Eli's Web</title>
    <meta name="author" content="Elijah Nathan - Eli's Web">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="<?php echo $shareImg; ?>" />
    <meta property="og:description" content="<?php echo $description; ?>" />
    <meta property="og:url"content="<?php echo $URL; ?>" />
    <meta property="og:title" content="<?php echo $title; ?> | Eli's Web" />
    <link rel="shortcut icon" href="../../images/logo.png">
    <link rel="apple-touch-icon" sizes="57x57" href="../../images/logo.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../../images/logo.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../../images/logo.png">
    <!-- Animation CSS -->
    <link href="../../../css/animate.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="../../../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- Custom CSS -->
    <link href="../../../css/blog.css" rel="stylesheet">
    <link href="../../../font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,700' rel='stylesheet' type='text/css'>
  </head>
  
  <body>

<?php
    include '../includes/nav.php';
?>
      
      <!-- Head section -->
<div class="head col-lg-12 col-md-12 col-sm-12 col-xs-12">
<?php
    include 'head/head.php';
?>
</div><!-- /.Head -->
     <div class="blogFull col-lg-7 col-lg-offset-1 col-md-7 col-md-offset-1 col-sm-12 col-xs-12">
<?php
    include 'post/post.php';
?>         
      
      </div>
      <div class="related col-lg-3 col-md-3 col-sm-12 col-xs-12">
       <?php 
        include '../includes/author.php'; 
        ?>
          
      <h3 class="col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-1 otherPosts">Related posts...</h3>
<?php
    $related = "";
    // Related posts random generator script
    include '../includes/related.php';
    unset($related);
    include '../../post-con/'.$thisPage;
?>
          
</div>
      <div class="comments col-lg-offset-1 col-lg-7 col-md-7 col-md-offset-1 col-sm-12 col-xs-12">
          <!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
<a class="a2a_dd" href="https://www.addtoany.com/share?linkurl=http%3A%2F%2Fwww.elisweb.co.uk&amp;linkname=Eli%27s%20Web"></a>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_google_plus"></a>
<a class="a2a_button_pinterest"></a>
</div>
<script>
var a2a_config = a2a_config || {};
a2a_config.linkname = "<?php echo $title; ?>"; // INSERT TAGLINE HERE
a2a_config.linkurl = "<?php echo $URL; ?>"; // INSERT URL HERE
</script>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
          <h3>Let me know what you thought of the article!</h3>
     <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = '<?php echo $URL; ?>';  // INSERT URL HERE
this.page.identifier = '<?php echo $link;?>'; // INSERT PAGE IDENTIFIER
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = '//elis-web.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
      
      </div>
      <?php
        include '../includes/footer.php';
      ?>
    </body>
</html>