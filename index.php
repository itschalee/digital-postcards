<?php
  //Set the Content Type so the user gets a picture
  header('Content-type: image/jpeg');

  // Create Image From Existing File
  $jpg_image = imagecreatefromjpeg('./img/card.jpg');

  // Allocate A Color For The Text
  $white = imagecolorallocate($jpg_image, 0, 0, 0);
  $red = imagecolorallocate($jpg_image, 195, 15, 22);

  // Set Path to Font File

  $font_path2 = './font/FiraSans-Bold.ttf';

  // Set Text to Be Printed On Image

  $text1 = $_GET['name']; // gets the name from url param and puts it on first line
  $text2 = "Wishes charlie and";
  $text3 = "the cats frans & frits";


  // Print Text On Image
  // change text size by changing the first number (75 in this case)
  // first line on postcard
  imagettftext($jpg_image, 75, 0, 1400, 900, $red, $font_path2, $text1);
  // second line on postcard
  imagettftext($jpg_image, 75, 0, 1400, 1090, $red, $font_path2, $text2);
  // third line on postcard
  imagettftext($jpg_image, 75, 0, 1400, 1280, $red, $font_path2, $text3);

  // Send Image to Browser
  imagejpeg($jpg_image);

  // Clear Memory
  imagedestroy($jpg_image);
?>
