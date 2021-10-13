<?php 
 class Node {
     public $value;
     public $next;
     public function __construct()
     {

     }

 }
 class Queue {
     public $front;
     public $back;
     public function __construct()
     {
        $this->front = null;
        $this->back = null;
     }
    
    public function isEmpty()
    {
        return is_null ($this->front);
    }
    public function enqueue($value)
    {
        $old_back = $this->back;
        $this->back = new Node();
        $this->back->value = $value;
        if($this->isEmpty()) 
        {
            $this->front = $this->back; 
        }else
        {
            $old_back->next = $this->back;
        }
    }
    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null;
        }
        $removedValue = $this->front->value;
        $this->front  = $this->front->next;
        return $removedValue;
    }

}
$queue = new Queue(4);

$queue->enqueue("start");
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
$queue->enqueue("End");

$queue->dequeue();
$queue->dequeue();

$queue->enqueue(4);
$queue->enqueue(5);

$queue->dequeue();
$queue->dequeue();
$queue->dequeue();


while(!$queue->isEmpty()){
  echo $queue->dequeue()."\n";
}

echo '<pre>';
print_r($queue);
echo '</pre>';

      
    
 
