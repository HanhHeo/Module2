<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lớp hình chữ nhật</title>
</head>
<body>
    <?php 
    class Rectangle {
        public $width;
        public $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
      }
    
    public function getArea(){
        return $this->width * $this->height;
    }
    public function getPerimeter(){
        return (($this->width + $this->height)) * 2;
    }
    public function display(){
        return "Rectangle{" . "width=" . $this->width . " , height=" .$this->height . "}";
    }
}
      $width = 10;
      $height = 20;
    $rectangle = new Rectangle($width, $height);
    echo $rectangle->getArea();
    echo $rectangle->getPerimeter();
    echo ("Diện tích hình chữ nhật :" . $rectangle->display());
    ?>
</body>
</html>