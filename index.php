<?php 

// comment
// ctrl + / => comment

// output
// echo "Hello World!";

//variable
$number = 5;
$string = 'Hello world!';
$boolean = true;


echo "$number <br>";
echo "$string <br>";
echo "$boolean <br>";

//arithmetic operator
$num1 = 9;
$num2 = 2;

$result = $num1 + $num2;
echo "Addition: $result <br>";
$result = $num1 - $num2;
echo "Subtract: $result <br>";
$result = $num1 * $num2;
echo "Mutiplication: $result <br>";
$result = $num1 / $num2;
echo "Division: $result <br>";
$result = $num1 % $num2;
echo "Modulus: $result <br>";
$result = $num1 ** $num2;
echo "Exponent: $result <br>";


//assignment operator
// echo $num1 += $num2;

$input = 3;
if($input == 0){
    echo "The input is 0 <br>";
}else if($input % 2 == 0 ){
    echo "The input is even <br>";
}else{
    echo "the input is odd <br>";
}

//logical operator 
// $age = 19;
// $drink = "alcoho";

//AND => di antara 2 pernyataan, keduanya itu harus benar
//OR => di antara 2 pernyataan, cukup salah satunya aja yang benar
// XOR => di antara 2 pernyataan, salah satunya aja yang benar, tapi jika keduanya sama - sama benar ataupun salah itu keluarnya salah 

// if($age >= 21 XOR $drink == "alcohol"){
//     echo "dia legal untuk minum <br>" ;
// }else{
//     echo "dia tidak boleh minum <br>";
// }

// $number = 6;

// if(!($number == 6)){
//     echo "number 6";
// }



echo "1. Add Menu <br>";
echo "2. Edit Menu <br>";
echo "3. Delete Menu <br>";
echo "4. View Menu <br>";
$input = 2;
switch($input){
    case 1:
        echo "Add is chosen";
        break;
    case 2:
        echo "Edit is chosen";
        break;
    case 3:
        echo "Delete is chosen";
        break;
    case 4:
        echo "View is chosen";
        break;
    
}




//repetition
//for loop
// for($i = 0; $i < 10; $i++){
//     echo "$i <br>";
// }

//while loop
$i = 0;
// while($i < 10){
//     echo "$i <br>";
//     $i += 1;
// }

//do-while loop
do{
    echo "$i";
    $i += 1;
}while($i < 10);

echo"<br>";
$result = addition(3, 4);
echo "$result <br>";

// function
function addition($num1, $num2){
    return $num1 + $num2;
}

$array = [1, 2, 3, 4];

$array[0] = 6;
echo "$array[0] <br>";

foreach($array as $a){
    echo "$a <br>";
}

// map, key => $value 
$mahasiswa = array(
    "Nama" => "Reynard", 
    "NIM" => 2702258812,
    "Age" => 19
);

foreach($mahasiswa as $mhs => $mhs_data){
    echo"Key = $mhs, Value = $mhs_data <br>";
}
$string1 = "ansjafakfnkanfksanafnksl";
$size = strlen($string1);
echo "$size <br>";

?>
