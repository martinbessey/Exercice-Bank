<?php

require 'Owner.php';
require 'Account.php';



$o1 = new Owner ('Rockefeller', 'John', '1898/07/08', 'New York');
$o2 = new Owner ('Gates', 'Bill', '1955/10/28', 'Washington');
$o3 = new Owner ('Musk', 'Elon', '1971/06/28', 'Los Angeles');


$a1 = new Account ('livret A', 3000, '€', $o1);
$a2 = new Account ('Assurance vie', 50000, '€', $o2);
$a3 = new Account ('PEL', 60000, '$', $o3);
$a4 = new Account ('PEA', 40000, ' ¥', $o1);


$accountsList = array ($a1, $a2, $a3, $a4);
$ownersList = array ($o1, $o2, $o3);

echo $o1."<br>";
echo $o1 -> getAge();
echo "Ensemble des comptes: <br>";
echo $o1 -> allAccounts($accountsList, $o1)."<br>";
echo"<br>";

echo $o2."<br>";
echo $o2 -> getAge();
echo "Ensemble des comptes: <br>";
echo $o2 -> allAccounts($accountsList, $o2)."<br>";
echo"<br>";

echo $o3."<br>";
echo $o3 -> getAge();
echo "Ensemble des comptes: <br>";
echo $o3 -> allAccounts($accountsList, $o3)."<br>";
echo"<br>";
?>