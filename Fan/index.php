<?php 
  const SLOW = 1;
  const MEDIUM = 2;
  const FAST = 3;
  class Fan 
  {
    public int $speed;
    public bool $on;
    public float $radius;
    public string $color;
    
    public function __construct()
    {
        $this->speed  = SLOW;
        $this->on     = false;
        $this->radius = 5;
        $this->color  = "yellow";
    }
    public function setSpeed($speed): void
    {
      $this->speed = $speed;
    }
    private function getSpeed()
    {
      return $this->speed;
    }
    public function setOn($on): void
    {
        $this->on = $on;
    }
    public function getOn(): bool
    {
     return $this->on;
    }
    public function setRadius($radius): void
    {
        $this->radius = $radius;
    }
    public function getRadius(): float
    {
        return $this->radius;
    }
    public function setColor($color): void
    {
        $this->color = $color;
    }
    private function getColor(): string 
    {
        return $this->color;
    }
    public function __toString()
    {
        if($this->on == true)
        {
            return "<br>"."Fan is on"."<br>"."Fan speed is : " . $this->speed . "<br>". "Color: " . $this->color . "<br> ". "Radius: " . $this->radius;
           
        } else {
    
            return  "<br>"."Fan is off". "<br>"."Color: " . $this->color . "<br>"."Radius: " . $this->radius;
        }
    }
}
  $fan = new Fan();
  echo $fan;
  echo "<hr>";
  $fan->setSpeed(SLOW);
  $fan->setOn(true);
  $fan->setRadius(5);
  $fan->setColor("yellow");
  echo $fan;
  
  
?>