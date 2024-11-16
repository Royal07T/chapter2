<?php 
require_once 'book.php';
 class physicalbook extends Book
 {        public $weight;

    public function __construct
    (
        string $title, 
        string $author, 
        int $price, 
        int $weight
    )
    {
       parent::__construct($title,$author,$price);
       $this->weight = $weight;
    }
    
    public function getWeight(): int
    {  
        return $this->weight;
    }

   public function print(): string
   {
    return"{$this->title},{$this->author},{$this->price},{$this->weight}";
   }

}
 