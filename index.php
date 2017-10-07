<?php
/*
1: Is this comment here?
2: added
3: added2
*/
$error = "";
$success = "";
if (isset($_POST['contactSub']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $this_form_spam = $_POST['this_title'];
    $field_name = $_POST['name'];
    $field_email = $_POST['email'];
    $field_phone = $_POST['phone'];
    $field_subject = $_POST['subject'];
    $field_message = $_POST['message'];
    if(empty($field_name) || empty($field_email) || empty($field_message)) {
        $error = '
            <div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                Please fill out all form fields!
            </div>';
    }
    if(empty($error)) {
        require 'PHPMailer/PHPMailerAutoload.php';
        if ($this_form_spam == "" || $this_form_spam == 'null') {
            // Initiate a NEW email
            $mail = new PHPMailer;
// Set the email settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
// SMTP connection will not close after each email sent, reduces SMTP overhead
            $mail->SMTPKeepAlive = true;
            $mail->Port = 587;
            $mail->Username = 'ely.nathan93@gmail.com';
            $mail->Password = '519362et';
            $mail->setFrom($field_email, $field_name);
            $mail->addReplyTo($field_email, $field_name);
// Add recipients from values found in database
            $mail->addAddress('hello@elisweb.co.uk', 'Eli\'s Web');

            $mail->Subject = 'Message recieved from website visitor';
            $mail->Body    = '<p>Name: '.$field_name.'</p>
            <p>Email: '.$field_email.'</p>
            <p>Phone: '.$field_phone.'</p>
            <p>Subject: '.$field_subject.'</p>
            <p>Message:</p>'.$field_message;
            $mail->AltBody = '<br>'.$field_message;
            // If message didn't send display error message
            if($mail->Send()) {
                 $success = '
                <div class="alert alert-success alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    Thank you for your message ' . $field_name . '!           I\'ll get back to you as soon as possible.
                </div>'; // redirect to success page
            }
            else{
                $error = "<div class=\"alert alert-dismissable alert-danger\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button><p>Message could not be sent.";
                echo "Mailer Error:</p><p>" . $mail->ErrorInfo ."</p>";
                exit;

            }
        }
        else {
                $success = '
                <div class="alert alert-success alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    Thank you for your message ' . $field_name . '!           I\'ll get back to you as soon as possible.
                </div>'; // redirect to success page
        }
    }
}

// Mailing List


$mailingError = "";
$mailingSuccess = "";
if (isset($_POST['mailingSub']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $field_name = $_POST['mailingName'];
    $field_email = $_POST['mailingEmail'];
    if(empty($field_name) || empty($field_email)) {
        $mailingError = '
            <div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                Please fill out all form fields!
            </div>';
    }
    if(empty($mailingError)) {
        require 'PHPMailer/PHPMailerAutoload.php';
            // Initiate a NEW email
            $mail = new PHPMailer;
// Set the email settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
// SMTP connection will not close after each email sent, reduces SMTP overhead
            $mail->SMTPKeepAlive = true;
            $mail->Port = 587;
            $mail->Username = 'ely.nathan93@gmail.com';
            $mail->Password = '519362et';
            $mail->setFrom($field_email, $field_name);
            $mail->addReplyTo($field_email, $field_name);
            $mail->Subject = "Mailing list subscribtion";
// Add recipients from values found in database
            $mail->addAddress('hello@elisweb.co.uk', 'Eli\'s Web');

            $mail->Subject = 'Mailing List Sign up!';
            $mail->Body    = '<div style="text-align:center">
            <img src="http://www.elisweb.co.uk/images/logo.png" style="width:100px; margin:0 auto;">
            </div>
            <h1 style="text-align:center">Someone has signed up to the mailing list!</h1>
            <p>Name: '.$field_name.'</p>
            <p>Email: '.$field_email.'</p>
            <p>Remeber to make a note of this until the mailing list software is ready!</p>';
            $mail->AltBody = $field_name . ' - ' . $field_email . ' has signed up to your mailing list!';
            // If message didn't send display error message
            if($mail->Send()) {
                 $mailingSuccess = '
                <div class="alert alert-success alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    Thank you for signing up ' . $field_name . '!           You\'ll start to receive updates soon!
                </div>'; // redirect to success page
            }
            else{
                $mailingError = "<div class=\"alert alert-dismissable alert-danger\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button><p>Sorry! Could not sign you up. Please try again later</p>";
                exit;
            }
    }
}
?>

  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <title>Eli's Web | Freelance Web Development & Design, Glasgow</title>
    <meta name="author" content="Elijah Nathan - Eli's Web">
    <meta name="description" content="Eli's Web provides freelance web development in Glasgow. Giving you the most stylish and up to date websites. Glasgow Web design. Low cost freelance web design, graphic design and branding.">
    <meta property="og:image" content="http://www.elisweb.co.uk/blog/images/me-mask.png" />
    <meta property="og:description" content="Eli's Web provides freelance web development in Glasgow. Giving you the most stylish and up to date websites. Glasgow Web design. Low cost freelance web design, graphic design and branding." />
    <meta property="og:url" content="http://www.elisweb.co.uk" />
    <meta property="og:title" content="Eli's Web | Freelance Web Development & Design, Glasgow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo.png">
    <link rel="apple-touch-icon" sizes="57x57" href="images/logo.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/logo.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/logo.png">
    <!-- Animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- Custom CSS -->
    <link href="css/main.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.less" rel="stylesheet/less">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
    <script src="js/jquery.min.js"></script>
  </head>


  <body>

    <!-- Facebook news feed -->

    <div id="fb-root"></div>
    <script>
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>


    <!-- Navigation Menu -->
    <nav class="col-lg-12 col-md-12 col-sm-12 col-xs-12 navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <i class="fa fa-bars"></i>
      </button>
          <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Freelance Web Development Logo"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="/blog/">Blog</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
    <!-- /.Navigation Menu -->

    <!-- Head section -->
    <div class="head col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <!-- Carousel For fading background images -->
      <div id="myCarousel" class="carousel carousel-fade slide" data-ride="carousel" data-interval="5000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
          <li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item item1 active">
          </div>

          <div class="item item2">
          </div>

          <div class="item item3">
          </div>
          <div class="item item4">
          </div>
          <div class="item item5">
          </div>
          <div class="item item6">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- /.Carousel -->
      <div id="headSub" class="headSub col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- Container for text and button -->
        <div class="logoDiv col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h1 class="eli">
                ELI'S
            </h1>
          <img class="logoImg" src="images/logo.png" alt="Freelance Web Development Logo">
          <h1 class="web">
                WEB
            </h1>
        </div>

        <div class="head-con text-center col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-offset-1 col-xs-10">
          <p>"It's no longer enough to simply exist online...
            <br> It's time to stand out from the crowd"</p>
          <div class="btnsTop text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <a href="#contact"><button class="btnTop">Hire me</button></a>
          </div>
        </div>
      </div>
      <!--/.headSub -->
    </div>
    <!-- /.Head -->
    <div id="services" class="services col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
      <h2>What can I offer your business?</h2>
      <hr class="line-head">
      <div class="services-inner">
        <div class="service-block serv-1 col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <div class="service-head">
            <span class="glyphicon glyphicon-home service-icon"></span>
            <h4>Professional Web Design</h4>
            <hr>
          </div>
          <div class="service-content">
            <p>From our first meeting over a cup of coffee, to getting your site on the internet, I provide professional and effective web development. Fancy a chat about an update for your website? Get in contact to start planning.</p>
          </div>
        </div>
        <div class="service-block serv-2 col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <div class="service-head">
            <span class="glyphicon glyphicon-pencil service-icon"></span>
            <h4>Graphic Design</h4>
            <hr>
          </div>
          <div class="service-content">
            <p>There's nothing like a few little graphic tweaks to make your site stand out! I can work a bit of magic on Photoshop to create the best ideas for your business. If you have your own designs, I can create a story board to show you how your
              finished product might look.</p>
          </div>
        </div>
        <div class="service-block serv-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <div class="service-head">
            <span class="glyphicon glyphicon-user service-icon"></span>
            <h4>Marketing</h4>
            <hr>
          </div>
          <div class="service-content">
            <p>Search engine optimisation and social media branding; these are just a couple of ways that I can help your business take off. Whether starting from scratch or just looking for a wee update, linking your pages to social media and Google can
              be profitable for any business.</p>
          </div>
        </div>
        <div class="service-block serv-4 col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <div class="service-head">
            <span class="glyphicon glyphicon-gbp service-icon"></span>
            <h4>Low Cost</h4>
            <hr>
          </div>
          <div class="service-content">
            <p>There's no need to pay through the nose. Each project will be appropriately costed and we can agree on a price beforehand. There's nothing stopping you from getting a great product for less. Your satisfaction is my greatest priority.</p>
          </div>
        </div>
      </div>
    </div>
    <div id="portfolio" class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <h2>Check out some of my work</h2>
      <hr>
      <p>Whether it's a new website, an update on your old one or some powerful flat designs to use on the web, your business cards or posters, simply get in touch and we'll start planning! For full details on my portfolio and more, please get in touch.</p>
      <div class="portfolio-box-inner">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="hovereffect" onclick="">
            <img class="img-responsive" src="images/timesport.png" alt="">
            <div class="overlay">
              <h2>Times Square, Glasgow<br> Web Development</h2>
              <p>
                <a data-toggle="modal" data-target="#myModal">View</a>
              </p>
            </div>
          </div>
        </div>
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Times Square, Glasgow</h4>
              </div>
              <div class="modal-body">
                <a href="http://www.times-square-scotland.co.uk" target="_blank"><img src="images/times.png" alt="Web Development for Times Square"></a>
                <p>Times Square is a Bar/Restaurant in St.Enoch Square in the heart of Glasgow's city centre. In order to showcase this characterfull venue I created an image based website laid out in a stylish grid.</p>
                <p>Please click the image above to visit the live website.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="hovereffect" onclick="">
            <img class="img-responsive" src="images/lion-only.png" alt="">
            <div class="overlay">
              <h2>Graphic design</h2>
              <p>
                <a data-toggle="modal" data-target="#myModal4">View</a>
              </p>
            </div>
          </div>
        </div>
        <div id="myModal4" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Graphic Design</h4>
              </div>
              <div class="modal-body">
                <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel2" data-slide-to="1"></li>
                    <li data-target="#myCarousel2" data-slide-to="2"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="images/lion-only.png" alt="Graphic Design Lion" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <p>It isn't often that geometric design is associated with realism or nature. But creating this image of a lion using hundreds of triangles has created something beautifully realistic.</p>
                    </div>

                    <div class="item">
                      <img src="images/milio.jpg" alt="Milo Lifts" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <p>Logo created for instagram weight lifter.</p>
                      <br>
                      <br>
                      <br>
                    </div>
                    <div class="item">
                      <img src="images/eye.png" alt="Image Manipulation" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <p>This image created in Photoshop shows how eye-catching* manipulated images can be for your company.</p>
                      <p>*Pun absolutely intended</p>
                    </div>


                  </div>

                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="hovereffect" onclick="">
            <img class="img-responsive" src="images/denport.png" alt="">
            <div class="overlay">
              <h2>The Den, Glasgow<br> Web Development</h2>
              <p>
                <a data-toggle="modal" data-target="#myModal3">View</a>
              </p>
            </div>
          </div>
        </div>
        <div id="myModal3" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">The Den, Glasgow</h4>
              </div>
              <div class="modal-body">
                <a href="http://www.denglasgow.com" target="_blank"><img src="images/den.png" alt="Web Development, Den"></a>
                <p>This modern bar/restaurant on Drymen Road in Bearsden required a website to display the contemporary venue.</p>
                <p>Part of the same tavern group as Times Square, the client requested a website very similar to Time's Square's.</p>
                <p>Please click the image above to visit the live website.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="hovereffect" onclick="">
            <img class="img-responsive" src="images/royalport.png" alt="">
            <div class="overlay">
              <h2>The Royal Dunkeld Hotel<br> Web Development</h2>
              <p>
                <a data-toggle="modal" data-target="#myModal5">View</a>
              </p>
            </div>
          </div>
        </div>
        <div id="myModal5" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Royal Dunkeld Hotel</h4>
              </div>
              <div class="modal-body">
                <a href="http://www.royaldunkeld.co.uk" target="_blank"><img src="images/royal.png" alt="Web Development for Royal Dunkeld Hotel"></a>
                <p>This beautiful old fashioned hotel required a full rebranding of their website. Using full screen images, I was able to showcase the hotel and the beautiful surrounding area of Perthshire</p>
                <p>Please click the image above to visit the live website</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="hovereffect" onclick="">
            <img class="img-responsive" src="images/jake.png" alt="">
            <div class="overlay">
              <h2>Jacob Eaton, Artist <br> Web Development</h2>
              <p>
                <a data-toggle="modal" data-target="#myModal2">View</a>
              </p>
            </div>
          </div>
        </div>
        <div id="myModal2" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Jacob Eaton, Artist | Web Development</h4>
              </div>
              <div class="modal-body">
                <a href="http://www.jacobsamueleaton.com" target="_blank"><img src="images/jake.png" alt="Graphic Design Lion" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></a>
                <p>This contemporary artist living and working in London, creates paintings and screen prints inspired by colour theory. He required an update to his website which was in keeping with his minimalist style.
                </p>
                <p>Please click the image above to visit the live website</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="hovereffect" onclick="">
            <img class="img-responsive" src="images/dave.png" alt="">
            <div class="overlay">
              <h2>Dave Gourlay Joinery <br> Web Development</h2>
              <p>
                <a data-toggle="modal" data-target="#myModal6">View</a>
              </p>
            </div>
          </div>
        </div>
        <div id="myModal6" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Dave Gourlay Joinery | Web Development</h4>
              </div>
              <div class="modal-body">
                <a href="http://www.perthshirejoiner.co.uk" target="_blank"><img src="images/dave.png" alt="Joiner - Web Development"></a>
                <p>This joiner creates beautifully modern wooden structures. The website I developed combines old wooden textures with a modern, one-page, layout with angled sections.</p>
                <p>Please click the image above to visit the live website</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
      </div>


    </div>
    <div id="listSign" class="blog-news text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="mailingFormInner col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h3>Sign up to my mailing list</h3>
        <hr>
        <p>I'll send you blog updates as well as any offers I think you might be interested in!</p>
        <p>** Psst! Here I should note that I offer my own custom built mailing list software to all my clients</p>
        <?php
               echo $mailingError;
               echo $mailingSuccess;
            ?>
          <form class="mailingForm" action="<?php echo $_SERVER['PHP_SELF']; ?>#listSign" method="post">
            <input type="text" name="mailingName" id="mailingName" placeholder="First Name" />
            <input type="email" name="mailingEmail" id="mailingEmail" placeholder="Email" />
            <input type="submit" name="mailingSub" id="mailingSub" value="Sign Up" />
          </form>
      </div>
    </div>
    <div id="news" class="news col-lg-12 col-md-12 col-sm-12 col-xs-12">

      <div class="text-center newsLeft col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2>Facebook</h2>
        <div class="fb-page" data-href="https://www.facebook.com/eliswebdevelopment/" data-tabs="timeline" data-width="1000" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false">
          <blockquote cite="https://www.facebook.com/eliswebdevelopment/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/eliswebdevelopment/">Eli&#039;s Web</a></blockquote>
        </div>
      </div>
    </div>
    </div>
    <div id="about" class="about-block col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="about-block-inner container">
        <div class="content-block-inner text-center">
          <h2>About Me</h2>
          <div>
            <p>
              Have a look to find out more...
            </p>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 about-list clear">
          <div class="about-list-left">
            <div class="about-item chef clear">
              <a href="#about" class="about-item-image">
              <img class="block" src="blog/images/me-mask.png" alt="Me as a chef">
            </a>
              <div class="about-item-content">
                <div class="about-item-content-inner">
                  <h3 class="about-item-title">Who's this guy?</h3>
                  <hr>
                  <p>
                    I came to this career from a what felt like a lifetime working as a chef in high profile establishments. I learned to work with reliability, creativity and attention to detail. I'm well travelled, but, now back living here in Glasgow and loving every
                    minute of being a freelance web developer & designer!
                  </p>
                </div>
              </div>
            </div>
            <div class="about-item about-item-secondary clear">
              <div class="about-item-content">
                <div class="about-item-content-inner">
                  <h3 class="about-item-title">What I Do Now</h3>
                  <hr>
                  <p>
                    I am here to develop your website from an idea into reality. I have always been a bit of a "computer nerd". I recently decided to reinforce my skills by attending the City of Glasgow College to do an HND in Web Development. I bring an optimistic and professional
                    attitude to a diverse range of projects.
                  </p>
                </div>
              </div>
              <a href="#about" class="about-item-image desk">
            <img class="block" src="images/stamp.png" alt="My Freelance Web Development Station">

          </a>
            </div>
          </div>
          <div class="about-list-right">
            <div class="about-item george about-item-third clear">
              <a href="#contact" class="about-item-image">
            <img class="block original" src="images/georgesquare.jpg" alt="George Square, Glasgow">
          </a>
              <div class="about-item-content">
                <div class="about-item-content-inner">
                  <h3 class="about-item-title">Where to find me</h3>
                  <hr>
                  <p>
                    Being based in the Centre of Glasgow makes it easier to meet with clients - thats you! Face to face meetings help fluent planning and more efficient construction of your site. Working from home allows me to utilise more of my time on your projects.
                    <br> If you'd rather, please see the <a href="#contact">contact section</a> to get in touch.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="contact" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="contact-block-content col-md-6 col-lg-5 col-lg-offset-1 col-sm-12 col-xs-12">
        <h2>Eli's Web</h2>
        <hr align="left">
        <p>Thank you for your interest in Eli's Web. Please contact me using the form. Alternatively you can email or call, using the information below. Don't forget to like me on <a class="fb" href="https://www.facebook.com/eliswebdevelopment">Facebook!</a></p>
        <ul class="contact-list">
          <li><span class="glyphicon glyphicon-map-marker conLogo"></span>City Centre, Glasgow</li>
          <li><span class="glyphicon glyphicon-phone-alt conLogo"></span>07818021037</li>
          <li><a href="mailto:hello@elisweb.co.uk?subject=General%20Enquiry&anp;body="><span class="glyphicon glyphicon-envelope conLogo"></span>hello@elisweb.co.uk</a></li>
        </ul>
      </div>
      <div class="contact-form col-md-6 col-lg-6">
        <h2>Contact</h2>
        <hr align="left">
        <p>Please contact me using the contact form below</p>
        <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>#contact" method="post">
          <?php
              echo $error;
              echo $success;
          ?>
            <fieldset>
              <div class="field-group">
                <input id="this_title" type="text" name="this_title" value="" />
                <input name="name" class="field" id="name" type="text" placeholder="Name" required />
              </div>
              <div class="field-group">
                <input name="email" class="field" id="email" type="email" placeholder="Email" required />
              </div>
              <div class="field-group">
                <input name="phone" class="field" id="phone" type="number" placeholder="Phone" required />
              </div>
              <div class="field-group">
                <input name="subject" class="field" id="subject" type="text" placeholder="Subject">
                <input type="text" name="_gotcha" style="display:none" />
              </div>
              <div class="field-group">
                <textarea placeholder="Message" class="field" name="message" id="message" required></textarea>
              </div>
              <div class="text-right">
                <a href="thankyou.html"><input type="submit" name="contactSub" class="button button-primary contact-submit" value="Send"></a>
              </div>
            </fieldset>
        </form>
      </div>
    </div>
    <div class="footer col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="footer-inner container">
        <div class="clear">
          <div class="footer-column col-md-8">
            <p>
              Eli's Web &copy; Copyright
              <?php echo date("Y"); ?> &mdash; All Rights Reserved
            </p>
          </div>
          <div class="footer-column col-md-4">
            <ul class="footer-social-list icon-list-inline">
              <li class="navigation-item-social"><a href="https://www.linkedin.com/profile/preview?locale=en_US&trk=prof-0-sb-preview-primary-button" target="_blank"><i class="fa fa-linkedin"></i></a></li> |
              <li class="navigation-item-social"><a href="https://www.facebook.com/eliswebdevelopment" target="_blank"><i class="fa fa-facebook"></i></a></li> |
              <li class="navigation-item-social tsncs"><a href="/elis-web-terms-and-conditions.pdf" target="_blank">Ts & Cs</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/scrollreveal.min.js"></script>
    <script type="text/javascript">
      window.sr = ScrollReveal({
        reset: true
      });
      sr.reveal('.logoImg', {
        origin: 'top',
        distance: '200px',
        delay: 300,
        mobile: true
      });
      sr.reveal('.eli', {
        origin: 'left',
        distance: '200px',
        delay: 300,
        mobile: true
      });
      sr.reveal('.web', {
        origin: 'right',
        distance: '200px',
        delay: 300,
        mobile: true
      });
      sr.reveal('.serv-1', {
        origin: 'bottom',
        distance: '200px',
        delay: 200,
        duration: 600,
        mobile: true
      });
      sr.reveal('.serv-2', {
        origin: 'top',
        distance: '200px',
        delay: 300,
        duration: 600,
        mobile: true
      });
      sr.reveal('.serv-3', {
        origin: 'bottom',
        distance: '200px',
        delay: 200,
        duration: 600,
        mobile: true
      });
      sr.reveal('.serv-4', {
        origin: 'top',
        distance: '200px',
        delay: 300,
        duration: 600,
        mobile: true
      });
      sr.reveal('.box1', {
        opacity: 0,
        scale: 0,
        delay: 100,
        mobile: true
      });
      sr.reveal('.box2', {
        opacity: 0,
        scale: 0,
        delay: 200,
        mobile: true
      });
      sr.reveal('.box3', {
        opacity: 0,
        scale: 0,
        delay: 300,
        mobile: true
      });
      sr.reveal('.box4', {
        opacity: 0,
        scale: 0,
        delay: 400,
        mobile: true
      });
      sr.reveal('.box5', {
        opacity: 0,
        scale: 0,
        delay: 500,
        mobile: true
      });
      sr.reveal('.box6', {
        opacity: 0,
        scale: 0,
        delay: 600,
        mobile: true
      });
      sr.reveal('.chef', {
        origin: 'left',
        distance: '500px',
        delay: 300,
        mobile: true,
        easing: 'ease-in-out',
        duration: 600,
        reset: false
      });
      sr.reveal('.george', {
        origin: 'bottom',
        distance: '700px',
        delay: 500,
        mobile: true,
        easing: 'ease-in-out',
        duration: 600,
        reset: false
      });
      sr.reveal('.about-item-secondary', {
        origin: 'right',
        distance: '700px',
        delay: 600,
        mobile: true,
        easing: 'ease-in-out',
        duration: 600,
        reset: false
      });
      sr.reveal('.contact-form', {
        origin: 'left',
        distance: '200px',
        delay: 200,
        duration: 1000,
        mobile: true
      });
      sr.reveal('.contact-block-content', {
        origin: 'right',
        distance: '200px',
        delay: 200,
        duration: 1000,
        mobile: true
      });
      // SMOOTH SCROLL
      $(function() {
        $('a[href*=#]:not([href=#], #myCarousel2 a)').click(function() {
          if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top - 70
              }, 1000);
              return false;
            }
          }
        });
      });
    </script>
    <!-- End of SMOOTH SCROLL -->
  </body>

  </html>
