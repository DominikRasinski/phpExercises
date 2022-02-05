 <?php 

 class ThisKeyWord
 {
     public $name;
     function __construct($name) //__construct sluzy do natychmiastowego wywolawania funkcji podczas zinicjalizowania obiektu
     {
         $this->name = $name;
     }
 }

$printThis = new ThisKeyWord('Jack');
echo $printThis->name;