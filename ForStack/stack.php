<?php 

class MyStack {
    private $stack = [];
    private $limit = 0;
    public function __construct($limit)
    {
        $this->limit = $limit;
    }
    //đưa phần tử vào ngăn xếp
    public function push($element) 
    {
        if( !$this->isFull() ){
            array_unshift($this->stack, $element);
        }else{
            die('Stack is full');
        }
    }
    //lấy phần tử ra, xóa trong ngăn xếp
    public function pop()
    {
        if( !$this->isEmpty() ){
            array_shift($this->stack);
        }else{
            die('Stack is empty');
        }
    }
    //lấy phần tử ra, không xóa trong ngăn xếp
    public function peek() 
    {
        return reset($this->stack);
    }
    public function top()
    {
      return reset($this->stack);  
    }
    // kiêm tra rỗng
    public function isEmpty()
    {
        if( count($this->stack) == 0 ){
            return true;
        }else{
            return false;
        }
    }
    // kiểm tra đầy chưa
    public function isFull(){
        if( count($this->stack) == $this->limit )
        {
            return true;
        }else{
            return false;
        }
    }
}
$objmystack = new MyStack(5);

$objmystack->push('Iphone');
$objmystack->push('Samsum');
$objmystack->push('Nokia');
$objmystack->push('Huewie');
$objmystack->push('Xiaomi');

$objmystack->pop();
$objmystack->pop();
$objmystack->pop();

$objmystack->push('HTC');
$objmystack->push('Oppo');

// $objmystack->pop();
// $objmystack->pop();
// $objmystack->pop();
// $objmystack->pop();


 echo '<pre>';
 print_r($objmystack);
 die();
?>
