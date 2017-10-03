<?php
$link = "windows-tricks/";
$image = "windows.jpg";
$title = "Handy tricks and tips for using Windows 10";
$description = "Windows has been the most popular OS for many years now but there's still things that'll surprise you. Have a look at these handy tips that'll help you use your PC to the best of its ability.";
$URL = 'http://www.elisweb.co.uk/blog/posts/windows/';
$shareImg = 'http://www.elisweb.co.uk/blog/images/windows.jpg';
$date = new DateTime('2016-01-01');
$dateMain = $date->format('jS F Y');
$dateRel = $date->format('d-m-y');

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
              <p>'.$description.' <a href="../'.$link.'">Read more ...</a><br><span class="dateWritten">'.$dateRel.'</span></p>
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
              <p>'.$description.' <a href="posts/'.$link.'">Read more ...</a><br><span class="dateWritten">Posted - '.$dateMain.'</span></p>
          </div>
          <div class="postImgCon postImgCon2 col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <a href="posts/'.$link.'"><img src="images/'.$image.'"></a>
          </div>
      </div>';
}
?>