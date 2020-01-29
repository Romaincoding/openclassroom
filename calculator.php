<?php

class calculator


{

    private $number1;
    private $number2;


    public function __construct($mynumber1, $mynumber2){
        $this->number1 =$mynumber1;
        $this->number2 =$mynumber2;
    }

    public function multiplicator($myNumber1, $myNumber2){
        $result = $myNumber1 * $myNumber2;
        return $result;
    
    }

    public function divisator($myNumber1, $myNumber2){
        $result = $myNumber1 / $myNumber2;
        return $result;
    
    }

    public function sumator($myNumber1, $myNumber2){
        $result = $myNumber1  + $myNumber2;
        return $result;
    
    }

    public function soustractor($myNumber1, $myNumber2){
        $result = $myNumber1 - $myNumber2;
        return $result;
    
    }

    public function factor($myNumber1){
        $result = 1;
        for($myNumber1; $myNumber1 >= 1; $myNumber1--){
            $result *= $myNumber1;
        }
        return $result;
    }

    /*public function soustractor($myNumber1, $myNumber2){
        $result = $myNumber1 - $myNumber2;
        return $result;
    }*/

    public function isNumbFirst($myNumber1){
    $nbDiv = 0;

        for($j=1;$j<=$myNumber1;$j++){
            if($myNumber1%$j==0){
                $nbDiv++; 
            }
        }    
        if ($nbDiv == 2){
            return true;
        }
        return false;     
    }

    public function numbPremiers($myNumber1){
        for($i = 2;$i <= $myNumber1; $i++){
            
            if( $this->isNumbFirst($i)== true){
                echo $i." ";
            } else{
            }
        
        }
        echo ".";
    }
    /**
     * Cette fonction permet de trouver le plus petit nombre des valeurs entrer 
     * 
     */
    public function getlowerNumber($NombreSaisi){

        
        $tabNombre = preg_split("[,]", $NombreSaisi);
        $_plusPetit=1000000000000;

        foreach($tabNombre as $_value){
            if($_plusPetit>$_value){
                $_plusPetit=$_value;
            }
        }
        echo "Le nombres plus petit entre " .$NombreSaisi. " est : " . $_plusPetit;
    }
    




    public function dateSecond($inputUsers){
        $numberofsecs = time();
        $result = $numberofsecs - $inputUsers;
        setlocale(LC_TIME, "fr_FR");
        echo "la date est ".strftime('%d %B %G', $result);
    }

    //5 = 0


    public function toBinary($inputUsers){
        $arrayValue;
        $i=0;
        while($inputUsers>0){
        $arrayValue[$i] =$inputUsers % 2; 

        $inputUsers = (int)$inputUsers/2;
            $i++;    
        }

        for($j = $i-1 ; $j>=0 ;$j--){
            echo $arrayValue[$j];
        }
        
    }

    function hexa($dec) {
        $hex = ($dec == 0 ? '0' : '');

        while ($dec > 0) {
          $hex = dechex($dec - floor($dec / 16) * 16) . $hex;
          $dec = floor($dec / 16);
        }

        return $hex;
    }
    public function toRomNb($number){
        $basicRomanNumbers = array( 'M', 'CM', 'D', 'CD', 'C', 'XC', 'L', 'XL', 'X', 'IX', 'V', 'IV', 'I');
        $basicNumbers = array( 1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1);

        if ($number > 4999) $number = 4999;

        if ($number <= 0) $number = 1;
        $number = (int) $number;
        $romanNumber = '';
        $i = 0;

         while($number > O){
             if($number >= $basicNumbers[$i]) {
                $number = $number - $basicNumbers[$i];
                $romanNumber = $romanNumber.$basicRomanNumbers[$i];
             }
             else {
            $i++;
             }
        }
        return $romanNumber;
       }


}



    




