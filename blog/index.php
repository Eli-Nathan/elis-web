<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Blog | Eli's Web | Freelance Web development, Glasgow</title>
    <meta name="author" content="Elijah Nathan - Eli's Web">
    <meta name="description" content="Welcome to my blog, I am a freelance web developer based in Glasgow. Giving you the most stylish and up to date websites. Glasgow Web design. Low cost web design. My blog discusses all things design and web.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="http://www.elisweb.co.uk/blog/images/me-mask.png" />
    <meta property="og:description" content="Welcome to my blog, I am a freelance web developer based in Glasgow. Giving you the most stylish and up to date websites. Glasgow Web design. Low cost web design. My blog discusses all things design and web." />
    <meta property="og:url"content="http://www.elisweb.co.uk/blog/" />
    <meta property="og:title" content="Blog | Eli's Web | Freelance Web development, Glasgow" />  
    <link rel="shortcut icon" href="images/logo.png">
    <link rel="apple-touch-icon" sizes="57x57" href="images/logo.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/logo.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/logo.png">
    <!-- Animation CSS -->
    <link href="../css/animate.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- Custom CSS -->
    <link href="../css/blog.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,700' rel='stylesheet' type='text/css'>
  </head>
  
  
  <body>

<!-- Navigation Menu -->
            <nav class="col-lg-12 col-md-12 col-sm-12 col-xs-12 navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <i class="fa fa-bars"></i>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../">Home</a></li>
        <li><a href="../#services">Services</a></li>
        <li><a href="../#portfolio">Portfolio</a></li>
        <li><a href="../#about">About</a></li>
        <li><a href="/blog/">Blog</a></li>
        <li><a href="../#contact">Contact</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><!-- /.Navigation Menu -->
      
      <!-- Head section -->
<div class="head col-lg-12 col-md-12 col-sm-12 col-xs-12">
 <!-- /.Carousel -->
   <!-- Container for text and button -->
      <div id="headSub" class="headSub col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="logoDiv col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <img src="images/logo.png">
              <h1 class="page">ELI'S WEB</h1>
          </div>
          
    </div>
        <div class="blog col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-8 col-sm-offset-2 col-xs-offset-1 col-xs-10">
            <div class="text-center blogHead col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h2>Blog</h2>
              <hr>
          </div>
        <p>First of all, thanks for coming! I'll try keep this short and sweet ... <br> I've started this blog to share my experience of being a freelance web developer here in Glasgow. You'll find some info on my business experience, some basic tutorials from "How to google properly" to some basic coding tutorials (coming soon...) and some barely coherent ramblings. Hope you enjoy and remember to leave a comment!</p>
                                                                                                                                        </div>
         <div id="headSub" class="headSub col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <a href="../#contact"><button class="btnTop">Hire me</button></a>
        
    </div><!--/.headSub -->
</div><!-- /.Head -->
      
      <div class="allArticles col-lg-7 col-lg-offset-1 col-md-7 col-md-offset-1 col-sm-12 col-xs-12">
          
        <?php 
          $main = "";
          unset($related);
          // All posts
          include 'posts/includes/main.php';
        ?>
          
      
      </div>
      <div class="related col-lg-3 col-md-3 col-sm-12 col-xs-12">
       <?php 
        include 'posts/includes/author.php'; 
        ?>
      </div>
      <div class="footer col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="footer-inner container">
    <div class="clear">
      <div class="footer-column col-md-8">
        <p>
          Eli's Web &copy; Copyright <?php echo date("Y"); ?> &mdash; All Rights Reserved
        </p>
      </div>
      <div class="footer-column col-md-4">
        <ul class="footer-social-list icon-list-inline">
            <li class="navigation-item-social"><a href="https://www.linkedin.com/profile/preview?locale=en_US&trk=prof-0-sb-preview-primary-button" target="_blank"><i class="fa fa-linkedin"></i></a></li> |
          <li class="navigation-item-social"><a href="https://www.facebook.com/eliswebdevelopment" target="_blank"><i class="fa fa-facebook"></i></a></li>  |
          <li class="navigation-item-social tsncs"><a href="/elis-web-terms-and-conditions.pdf" target="_blank">Ts & Cs</a></li>
            
          
        </ul>
      </div>
    </div>
  </div>
</div>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>     
    <script src="../js/scrollreveal.min.js"></script>
    <script src="../js/script.js"></script>
    
  </body>
</html>