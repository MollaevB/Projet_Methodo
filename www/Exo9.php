<?php
$nav = array(
  "Edge"=>"edge.png",
  "Chrome"=>"chrome.png",
  "Safari"=>"safari.png",
  "Firefox"=>"ff.png",
  
);

$os = array(
  "Windows"=>"windows.png",
  "Linux"=>"linux.png",
  "Mac"=>"mac.png",
  
);

foreach($os as $ua=>$image){
  if(strpos($_SERVER['HTTP_USER_AGENT'],$ua)!==FALSE){
      echo "<img width='200px' alt='Navigateur : $ua, $image' src='../../images/$image' />";
      break;
  }
}

foreach($nav as $ua=>$image){
    if(strpos($_SERVER['HTTP_USER_AGENT'],$ua)!==FALSE){
        echo "<img width='200px' alt='Navigateur : $ua, $image' src='../../images/$image' />";
        break;
    }
}
?>