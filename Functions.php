<?php
//   function of calculating age

function calculateAge($age){

    $year =  date('Y');
    $currentAge = $year - $age;
   return $currentAge;  
     

}
$name = "maryama";
$age = 2003;
calculateAge($age);

echo "Maryama's current age is: ".calculateAge($age);


?>