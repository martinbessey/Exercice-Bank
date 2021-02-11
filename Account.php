<?php
/*  Création de la Classe "Compte"   */
class Account
{
    private $label;
    private $balance;
    private $currency;
    private $owner;
/* construction avec "Owner" en clé étrangère*/
    public function __construct ($label, $balance, $currency, Owner $owner)
    {
        $this -> label = $label;
        $this -> balance = $balance;
        $this -> currency = $currency;
        $this -> owner = $owner;
    }
    /**
     * Get the value of label
     */ 
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set the value of label
     *
     * @return  self
     */ 
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get the value of balance
     */ 
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Set the value of balance
     *
     * @return  self
     */ 
    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * Get the value of currency
     */ 
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set the value of currency
     *
     * @return  self
     */ 
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get the value of owner
     */ 
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set the value of owner
     *
     * @return  self
     */ 
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }
    function __toString(){

        return "Nom du compte: ".$this->label."<br> Solde en ".$this->currency.": ".$this->balance."<br> Titulaire du compte: ".$this->owner;
    }
    

}
    

?>

    
