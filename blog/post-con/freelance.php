<?php
$link = "freelance/";
$image = "me-mask.png";
$title = "Being a Freelance Web Designer in Glasgow";
$description = "My experience with being a freelance web developer/desginer here in Glasgow has been interesting to say the least.";
$URL = 'http://www.elisweb.co.uk/blog/posts/freelance/';
$shareImg = 'http://www.elisweb.co.uk/blog/images/me-mask.png';
$date = new DateTime('2017-01-06');
$dateMain = $date->format('jS F Y'); // for example
$dateRel = $date->format('d-m-y'); // for example

if(isset($related)){
    global $link;
    global $image;
    global $title;
    global $description;
    global $dateRel;
    
    echo '<div class="postCon col-lg-12 col-md-12 col-sm-6 col-xs-12">
          <div class="postImgCon postImgCon2 col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <a href="../'.$link.'"><img src="../../images/'.$image.'"></a>
          </div>
          <div class="postTextCon col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h4><a href="../'.$link.'">'.$title.'</a></h4>
              <hr>
              <p>'.$description.' <br><a href="../'.$link.'">Read more to get some insights and tips. Enjoy ...</a><br><span class="dateWritten">'.$dateRel.'</span></p>
          </div>
      </div>';
}
if(isset($main)) {
    global $link;
    global $image;
    global $title;
    global $description;
    global $dateMain;
    
    echo '<div class="postCon col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="postTextCon col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h4><a href="posts/'.$link.'">'.$title.'</a></h4>
              <hr>
              <p>'.$description.' <br><a href="posts/'.$link.'">Read more to get some insights and tips. Enjoy ...</a><br><span class="dateWritten">Posted - '.$dateMain.'</span></p>
          </div>
          <div class="postImgCon postImgCon2 col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <a href="posts/'.$link.'"><img src="images/'.$image.'"></a>
          </div>
      </div>';
}
?>
