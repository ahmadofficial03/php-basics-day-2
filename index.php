<?php

/* 

......................Nexted Array and Some Array Methods........................:

*/

// $cars = [
//     ["volvo", 18, "color" => "white"],
//     ["BMW", 38, "color" => "black"],
//     ["civic", 30, "color" => "blue"],

// ];

// print_r(var_dump($cars[2][0])); 


// $array = [true => 'a', 1 => 'b', "1" => 'c', 1.7 => 'd', null => "3"]; // Because of same values it will over write. .: true = 1, 1= 1, "1" = 1


// print_r($array);

// echo $array[null];

// $array = ["a", "b", 50 => "c", "d"];   // d will 52
// print_r($array);

// array_pop($array);  //remove at end
// print_r($array);

// array_shift($array);  // Remove element from beginning
// print_r($array);

// unset($array[0]);
// print_r($array);

// unset($array[0], $array[1]);   //Remove Multiple but not reindex
// print_r($array);


// WITH UNSET IT WILL NOT RE-INDEX:
// $array = [1, 2, 3, 4, 5];
// // print_r($array);

// unset($array[0], $array[1], $array[2], $array[3], $array[4], $array[5]);
// $array[] = 1;   //It will at 5 index.
// print_r(var_dump($array));


// TYPE CASTING:
// $x = 5;
// $x = null;
// $x = "ahmad";
// echo var_dump((array) $x);


// $array = ["a" => 1, "b" => null];
// var_dump(array_key_exists("b", $array));
// var_dump(isset($array["b"])); // it returns false because b's value is null.





/* 

......................Expressions........................:

*/

// Expression Examples:
// $x = 5;
// $y = $x;

// $z = $x === $y;
// // $b = sum($x, $y);

// if ($x < 5) {
//     echo "success";  //x < 5 is also expression
// }





/* 

....................OPERATORS AND CONDITIONALS....................:

*/


// $x = "10";
// $y = 20;

// echo var_dump(+$x);
// echo var_dump($x + $y);

// $x = 10;
// $y = 0;

// // echo var_dump($x / $y);
// echo fdiv($x, $y);              // for infinity answer

// $x = 10.5;
// $y = 5.0;
// echo var_dump($x / $y);
// echo var_dump($x % $y);
// echo var_dump(fmod($x, $y));      //For exact reminder

// $x = ($y = 10) + 5;
// echo $x . "<br />" . $y;    //value of x is 15 and y is 5.

// $x = 16;
// $y = 5;

// if ($x == $y) {
//     echo "equal";
// } else {
//     echo 'not equal';
// }

// $result = $x === $y ? "not equal": "equal";
// echo var_dump($result);


// if ($x != $y) {
//     echo "not equal";
// }

// if ($x <> $y) {                  // Similar to not equal
//     echo "not equal";
// }

// echo var_dump(0 == 'hello');    // '0' == 'hello'

// y is equal to hello if x is only null
// $x = null;
// $x = "some value";   // then hello is not print and some value is print
// $y = $x ?? "hello";
// echo $y;

// $y = $x ?? "hello";     //x is undefined but it not return undefined it return "hello"
// echo $y;


/* 

...........................Some More Operators.............................................. 

*/


// $x = @file('demo.txt');   // For handling errors

// $a = 5;
// --$a;
// echo $a;

// $a++;          // First return value then increment
// echo $a;

// $str = 'ahmad';
// $str++;
// ++$str;        // Will increment and result is "ahmade"
// echo $str;

// --$str;            // will not decrement and result will remain same
// echo $str;      


// $x = true;
// $y = false;

// $z = $x && $y;
// $z = $x || $y;

// $z = !$x and $y;     // First true and second will discarded.     

// $x = false;
// $y = false;

// function hello() {
//     echo "hello World";
//     return false;
// }

// echo var_dump($x && hello() || true);

// echo var_dump($z);


/* 

....................... BITWISE OPERATORS ...................................

*/



// $x = 6;   // 110
// $y = 3;   // 011
// echo var_dump($x & $y);   // Bitwise AND
// echo var_dump($x | $y);
// echo var_dump($x ^ $y);

// $arr1 = ['a', 'b', 'c'];
// $arr2 = ['d', 'e', 'f', 'g', 'h'];

// echo var_dump($arr1 + $arr2);

// $x = 6;     //110 => 001
// $y = 2;
// echo var_dump(~$x & $y);   //will 1
// echo var_dump($x << $y);   //x = 6 shift by 2 to right => $x = 110 => $x = 110000 => 48.


/* 

....................... OPERATOR PRECEDENCE ...................................

*/

// $x = 5;
// $y = 20;
// $z = 10;

// echo var_dump($x / $y * $z);
// echo var_dump($x * $y / $z);

/* 

....................... LOOPS ...................................

*/

// $i = 0;
// while($i <= 15) {
//     echo $i++ . "<br />";
// }

// $counter = 1;

// while ($counter <= 10) {
//     echo $counter . " ";
    
//     if ($counter == 5) {
//         break; // Exit the loop when counter is 5
//     }
    
//     $counter++;
// }


// $i = 0;
// while($i < 15) {
//     if ($i % 2 == 0) {   // I'll skip even
//         $i++;
//         continue;
//     }
//     echo $i++ . ",";
// }


// $i = 40;
// do {
//     echo $i++. ",";
// } 
// while($i < 15);



// $str = "Hello World";

// for ($i = 0; $i < strlen($str); $i++) {
//     echo $str[$i] . "<br />";
// }

// $array = [1, 2, 3, 4, 5];
// $len = count($array);

// for ($i = 0; $i < $len; $i++) {
//     echo $array[$i] . "<br />";  
// }

// $programmingLanguages = ['java', 'c', 'c++', 'ruby'];
// foreach($programmingLanguages as &$language) {
//     echo $language . "<br />";
// } 

// $language = "php";

// print_r($programmingLanguages);


/* 

....................... Switch statement ...................................

*/


// $paymentStatus = "declined";

// switch($paymentStatus) {
//     case 'paid':
//         echo "paid";
//         break;
//     case 'declined':
//     case 'rejected':
//         echo "rejected";
//         break;
//     case 'pending':
//         echo "pending";
//         break;

//     default: 
//     echo "UNknown";
// }

// Loose comparision:
// $paymentStatus = "1";

// switch($paymentStatus) {
//     case '1':
//         echo "paid";
//         break;
//     case '2':
//     case '2':
//         echo "rejected";
//         break;
//     case '3':
//         echo "pending";
//         break;

//     default: 
//     echo "UNknown";
// }


// $paymentStatus = [1,2, 3];
// foreach($paymentStatus as $arr) {
//     switch($arr) {
//         case '1':
//             echo "paid";
//             break;
//         case '2':
//         case '2':
//             echo "rejected";
//             break;
//         case '3':
//             echo "pending";
//             break;
    
//         default: 
//         echo "UNknown";
//     }
//     echo "<br />";
    
// }



?>