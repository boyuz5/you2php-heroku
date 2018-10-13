<?php
header("HTTP/1.0 404 Not Found");
$headtitle='ERROR message';
include("./header.php");?>

<div class="container-fluid" style="height: 480px;
    background-color: #dbdbdb;">
    <div class="container" style="height: 100%">
        <div class="row" style="height: 100%">
 <div class="col-12 justify-content-center align-self-center text-center">
     <img src="//wx3.sinaimg.cn/large/b0738b0agy1fm04l0cw4ej203w02s0sl.jpg" class="p-2" >
      <h2>The content requested cannot be found.</h2>
      <p>Sorry, the video cannot be played.</p>
      <p>Possible reasons:</p>
      <p>1.The link is invalid</p>
      <p>2.The video is copywritten and cannot be played</p>
      <p>3.Netword error.</p>
      <p>4.Too many requests at the same time, please try again later.</p>
  </div>

  </div>
    </div>
  
</div>


<?php
include("./footer.php"); 
?>
