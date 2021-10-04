<?php 
  class QuadraticEquation {
    public $a;
    public $b;
    public $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function getA() : int
    {
        return $this->a;
    }
    public function getB(): int
    {
        return $this->b;
    }
    public function getC(): int
     {
        return $this->c;
    }
    public function setA($a) : void 
    {
        $this->a = $a;
    }
    public function setB($b) : void 
    {
        $this->b = $b;
    }
    public function setC($c) : void 
    {
        $this->c = $c;
    }
    public function getDiscriminant(): float 
    {
        return ($this->b * $this->b) - 4  * ($this->a * $this->c);
    }
    public function getRoot1(): float 
    {
        $delta = $this->getDiscriminant();
        $root1 = ((- $this->b) + sqrt($delta)) / (2 * $this->a);
        return $root1;
    }
    public function getRoot2(): float 
    {
        $delta = $this->getDiscriminant();
        $root2 = ((- $this->b) - sqrt($delta)) / (2 * $this->a);
        return $root2;
    }
    public function getResult()
    {
        $delta = $this->getDiscriminant();
        $x1 = $this->getRoot1();
        $x2 = $this->getRoot2();
        if($delta < 0) {
            echo "<br>" . "Phương trình vô nghiệm";
        } else if ($delta == 0) {
            echo "Phương trình có nghiệm" . "x1 = x2 = " . $x1;
        }else {
            echo "Phương trình có nghiệm kép là : ". "x1". $x1 ."và" . "x2 = ". $x2;
        } 
    }
  }
    

?>
