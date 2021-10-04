<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    class StopWatch {
       private $startTime;
       private $endTime;
    
    public function getStartTime(){
     return $this->startTime;
    }
    public function getEndTime(){
      return $this->endTime;
    }
  
    public function start(){
      return $this->startTime = microtime(true);
    }
    public function stop(){
     return $this->endTime = microtime(true);
    }
    function getElapsedTime(){
    return ($this->endTime - $this->startTime) * 1000;

    }
    public function selectionsort(){
      for($i = 1; $i < 100,000; $i++);
    }
  }
  $stopwatch = new Stopwatch();
  $stopwatch->start();
  $stopwatch->selectionsort();
  $stopwatch->stop();
  echo "<br>" . $stopwatch->getStartTime();
  echo "<br>" . $stopwatch->getEndTime();

    
 
    ?>
</body>
</html>