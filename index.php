<?php 
    class Product{
        protected $name;
        protected $brand;
        protected $price;
        protected $category;

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
        protected $id;
        protected $name;
        protected $surname;
        protected $adress;
        protected $premium;

        public function __construct($id, $name, $surname, $adress, $premium = false){
            $this->id = $id;
            $this->name = $name;
            $this->surname = $surname;
            $this->adress = $adress;
            $this->premium = $premium;
        }

        public function setPremium($bool){
            return $this->premium = $bool;
        }
    }

    class Card {
        protected $cardID;
        protected $cardCode;
        protected $expDate;
        protected $ccv;

        public function __construct($cardID, $cardCode, $expDate, $ccv){

            $this->cardID = $cardID;
            $this->cardCode = $cardCode;
            $this->expDate = $expDate;
            $this->ccv = $ccv;
        }
    }

    class Cart{
        public $products = [];

        public function setProducts($product){
            return $this->products[] = $product;
        }

        public function checkPremium($product, $user){

            $productPrice = $product->getPrice();

            if( $productPrice > 100 ){
                return $user->setPremium(true);
            }
        }
    }

    $leo = new User(551, 'Leonardo', 'Pascal', 'via Zianigo');
    $telefono = new Product('xl-34-gc', 'Nokia', 150, 'Elettronic');
    $leoCard = new Card(785, 654862154895,'12/5/2026', 556);
    $cart = new Cart();
    $cart->setProducts($telefono);
    $cart->checkPremium($telefono, $leo);
    

    var_dump($leoCard);
    var_dump($telefono);
    var_dump($leo);

?>
