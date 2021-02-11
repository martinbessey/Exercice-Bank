<?php
/* Création de la classe "Titulaire" */
class Owner 
{   
    private $name;
    private $surname;
    private $birthdate;
    private $city;
   
    public function __construct($name, $surname, $birthdate, $city)
    {
        $this -> name = $name;
        $this -> surname = $surname;
        $this -> birthdate = $birthdate;
        $this -> city = $city;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of surname
     */ 
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the value of surname
     *
     * @return  self
     */ 
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get the value of birthdate
     */ 
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set the value of birthdate
     *
     * @return  self
     */ 
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get the value of city
     */ 
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */ 
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }
    
/* fonction permettant de définir tous les comptes d'un titulaire pour un tableau donné */
    
    function allAccounts($array, $owner)
    {
        foreach ($array as $value)
        {
            if ($owner == $value -> getOwner())
            {
               echo "<br>";
               echo $value."<br/>";
            }    
        }
    }
    
    /* fonction permettant de définir l'âge à partir de la date de naissance du titulaire */
    
    public function getAge()
    {
        $date1 = new DateTime('now');
        $date2 = new DateTime ($this->getBirthdate());
        $interval = $date1 -> diff($date2);
        $age = $interval->format('%y');
        return $age."ans <br>";
    }
    function __toString()
    {
        return $this->name." ".$this->surname;
    }
}

?>
