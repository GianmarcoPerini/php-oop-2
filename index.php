<?php 
    class Product{
        public $name;
        public $brand;
        public $price;
        public $category;

        public function __construct($name, $brand, $price, $category){
            $this->name = $name;
            $this->brand = $brand;
            $this->price = $price;
            $this->category = $category;
        }

        public function getName(){
            return $this->name;
        }

        public function getBrand(){
            return $this->brand;
        }

        public function getPrice(){
            return $this->price;
        }
        
        public function getCategory(){
            return $this->category;
        }
    }

    class User {
        public $id;
        public $name;
        public $surname;
        public $adress;
        public $premium;

        public function __construct($id, $name, $surname, $adress, $premium = false){
            $this->id = $id;
            $this->name = $name;
            $this->surname = $surname;
            $this->adress = $adress;
            $this->premium = $premium;
        }
    }

    class Card extends User {
        public $cardID;

        public function __construct($cardID, $id, $name, $surname, $adress, $premium){

            parent::__construct($id, $name, $surname, $adress, $premium);

            $this->cardID = $cardID;
        }

    }

    $leo = new User(551, 'Leonardo', 'Pascal', 'via Zianigo', true );

    var_dump($leo)

?>