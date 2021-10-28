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

$card = new CreditCard('Gianni', 5464823135498564, '15/02/26', 558);

var_dump($card);




?>