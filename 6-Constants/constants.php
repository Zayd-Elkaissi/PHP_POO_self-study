<!DOCTYPE html>
<html>
<body>

<?php
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting Assilah!";
  public function byebye() {
    // access a constant from inside the class
    echo self::LEAVING_MESSAGE;
  }
}

$goodbye = new Goodbye();
// access a constant from outside the class 
echo Goodbye::LEAVING_MESSAGE;
echo '<br>';
$goodbye->byebye();
?>

</body>
</html>
