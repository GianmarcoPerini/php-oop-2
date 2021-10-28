<?php 

class CreditCard{
    public $name;
    public $unicCode;
    public $expirationDate;
    public $cvv;

    /**
     * @param string $nome proprietario
     * @param integer $codice univoco della carta di credito
     * @param string $data scadenza carta
     * @param integer $codice di conferma
     */
    public function __construct($name, $unicCode, $expirationDate, $cvv){
        $this->name = $name;
        $this->unicCode = $unicCode;
        $this->expirationDate = $expirationDate;
        $this->cvv = $cvv;
    }
}

class User{
    public $creditCards;

    public function __construct($creditCards){
        $this->creditCards = $creditCards;
    }
}

$card1 = new CreditCard('Gianni', 5464823135498564, '15/02/26', 558);
$user = new User($card1, $card2);

var_dump($user);




?>