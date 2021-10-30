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
        protected $id;
        protected $name;
        protected $surname;
        protected $adress;
        protected $premium;
        protected $total;

        public function __construct($id, $name, $surname, $adress, $premium = false, $total = 0){
            $this->id = $id;
            $this->name = $name;
            $this->surname = $surname;
            $this->adress = $adress;
            $this->premium = $premium;
            $this->total = $total;
        }

        public function setPremium($bool){
            $this->premium = $bool;
        }

        public function updateTotal($total){
            if($this->premium == true){
                return $this->total = $total * 0.85;
            }
            return $this->total = $total;
        }
    }

    class Card {
        protected $cardID;
        protected $cardCode;
        protected $expDate;
        protected $ccv;
    }

    class Cart{
        public $products;
        public $cartPrice;

        public function setProducts(...$product){
            $this->products = $product;
        }

        public function setTotal($user){
            return $user->updateTotal($this->cartPrice);
        }

        public function getTotalPrice(){
            foreach( $this->products as $prod){
                $this->cartPrice += $prod->price;
            }
        }

        public function checkPremium($user){
            if( $this->cartPrice > 100 ){
                return $user->setPremium(true);
            }
        }
    }

    $leo = new User(551, 'Leonardo', 'Pascal', 'via Zianigo');
    $telefono1 = new Product('xl-34-gc', 'Nokia', 20, 'Elettronic');
    $telefono2 = new Product('xl-3s4-gc', 'Nokia', 10, 'Elettronic');
    $telefono3 = new Product('xl-3f4-gc', 'Nokia', 600, 'Elettronic');
    $leoCard = new Card(785, 654862154895,'12/5/2026', 556);
    $cart = new Cart();
    $cart->setProducts($telefono1, $telefono2, $telefono3);
    $cart->getTotalPrice();
    $cart->checkPremium($leo);
    $cart->setTotal($leo);
    

    var_dump($leo);

?>
