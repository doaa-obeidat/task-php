<?php

/******************** Functions************/
/******************** 1************/
// function IsPrime($n)
// {
//  for($x=2; $x<$n; $x++)
//    {
//       if($n %$x ==0)
// 	      {
// 		   return 0;
// 		  }
//     }
//   return 1;
//    }
// $a = IsPrime(3);
// if ($a==0)
// echo 'This is not a Prime Number.....'."\n";
// else
// echo 'This is a Prime Number..'."\n";

/******************** 2************/

// function Reverse($str){
//     return strrev($str);
// }
  
// $str = "remove";
// echo Reverse($str)

/******************** 3************/

// function check_lowercase_string($string) {
//     return ($string === strtolower($string));
// }
// var_dump(check_lowercase_string('remove'));

/******************** 4************/


// function swap($x, $y) {
//     echo "Before Swap.\n";
//     echo "x = $x \n";
//     echo "y = $y \n";
  
//     //Swap technique x = 6, y = 3
//     // $x = $x + $y; 6 + 3 = 9
//     // $y = $x - $y; 9 - 3 = 6
//     // $x = $x - $y; 9 - 6 = 3
  
//     echo "After Swap.\n";
//     echo "x = $x \n";
//     echo "y = $y \n";
//   }
  
//   echo swap(12, 10);


/******************** 5************/
// function swap($x, $y) {
//     echo "Before Swap.\n";
//     echo "x = $x \n";
//     echo "y = $y \n";
  
//     //Swap technique x = 6, y = 3
//     // $x = $x + $y; 6 + 3 = 9
//     // $y = $x - $y; 9 - 3 = 6
//     // $x = $x - $y; 9 - 6 = 3
  
//     echo "After Swap.\n";
//     echo "x = $x \n";
//     echo "y = $y \n";
//   }
  
//   echo swap(12, 10);

/******************** 6************/
// function armstrongCheck($number){
//     $sum = 0; 
//     $x = $number; 
//     while($x != 0) 
//     { 
//         $rem = $x % 10; 
//         $sum = $sum + $rem*$rem*$rem; 
//         $x = $x / 10; 
//     } 
     
//     if ($number == $sum)
//         return 1;
     
    
//     return 0;   
// }
 
// $number = 407;
// $flag = armstrongCheck($number);
// if ($flag == 1)
//     echo "is Armstrong Number";
// else
//     echo "No"




/******************** 7************/
// function PalindromeString($string){ 
    
//     $stringnew = str_replace(" ","",$string);
//     if (strrev($stringnew) == $stringnew){ 
//         echo "Palindrome<br>"; 
//     }
//     else{
        
//         echo "Not a Palindrome<br>"; 

//     }
// } 
 
// PalindromeString("eva can i see bees in a cave");

    

  /******************** 8************/
// function remove_duplicates_list($list) {
//     $nums_unique = array_unique($list);
//     return $nums_unique ;
//   }
//   $nums = array(2,4,7,4,8,8,8,4);
//   print_r(remove_duplicates_list($nums));


/*******************Logical Statements and Operators**********************/

           /*****      1    ******/
// function year_check($my_year){
//     if ($my_year % 400 == 0)
//        print("This year is not a leap year");
//     else if ($my_year % 100 == 0)
//        print("This year is not a leap year");
//     else if ($my_year % 4 == 0)
//        print("It is a leap year");
//     else
//        print("This year is not a leap year");
//  }
//  $my_year = 2013;
//  year_check($my_year);

       /**** 1 *****/
// function checkYear($year)
// {
     
//     // Return true if year is a multiple
//     // 0f 4 and not multiple of 100.
//     // OR year is multiple of 400.
//     return ((($year % 4 == 0) &&
//              ($year % 100 != 0)) ||
//              ($year % 400 == 0));
// }
 
// $year = 2013;
 
// checkYear($year)? print("Leap Year"):
// print("This year is not a leap year");

/***********   2 ***********/


// $var = 27;

// if ($var > "20") {
//     echo "It is summertime!";
//   }

/******3*******/

// function test($a, $b) 
// {
//     return $a == $b? ($a + $b)*3 :  false;
// }
// echo test(2, 2);



/*********4**********/

// function multipleOfThree($num)
// {
//     if ($num % 3 == 0 && $num > 0) {
//         return "true";
//     } else {
//         return "false";
//     }
// }
// print multipleOfThree(10);



/******************** 5************/
// function positivenumbe($n) 
// {
//    return $n % 3 == 0 || $n % 7 == 0;
// }

// var_dump(positivenumbe(20));

/******************** 6************/

// function  range($num) 
// {
//    return $num >= 20 && $num <=50;
// }
// var_dump( range(50));



/******************** 7************/
// function largestnumber($x, $y, $z) 
// {
//   $max = max($x, max($y, $z));
//   return $max;
// }

// echo largestnumber(1, 5, 9)."\n";




         /******************8******************/

// function calculateBill($units)
// {  
//     if ($units <= 50) {
//         return $units * 2.5;
//     } else if ($units <= 150) { //51
//        $unitsUnder50 = 50 * 2.5;
//        $unitsUnder150 = ($units - 50) * 5; //120 - 50 = 70
//        return $unitsUnder50 + $unitsUnder150;
//     } else if ($units <= 250) { //170
//        $unitsUnder50 = 50 * 2.5;
//        $unitsUnder150 = 100 * 5; 
//        $unitsUnder250 = ($units - 150) * 6.2;  //170 - 150 = 20 * 6.2
//        return $unitsUnder50 + $unitsUnder150 + $unitsUnder250;
//     } else {
//        $unitsUnder50 = 50 * 2.5; 
//        $unitsUnder150 = 100 * 5; 
//        $unitsUnder250 = 100 * 6.2; 
//        $unitsAbove250 = ($units - 250) * 7.5; //255 - 250 = 5 * 7.5
//        return $unitsUnder50 + $unitsUnder150 + $unitsUnder250 + $unitsAbove250;
//     }
// }
   
// // echo calculateBill(250);

/*****************9*************/
// function calculator($n1, $n2, $operator) {
//     switch($operator) {            
//         case '+':
//             $result = $n1 + $n2;
//             break;
//         case '-':
//             $result = $n1 - $n2;
//             break;
//         case '*':
//             $result = $n1 * $n2;
//             break;
//         case '/':
//             $result = $n1 / $n2;
//             break;       
//     }
//     return $result;
// }

// echo calculator(2, 2, '/');




/***************20******************/
// function check_vote() //function has been declared
// {
//     $name = " ";
//     $age = 15;
//     if ($age >= 18) {
//         echo $name . ", you Are Eligible For Vote";
//     } else {
//         echo $name . "is no eligible to vote. ";
//     }
// }
// check_vote();





/******************11*****************/
// $array = array(60,86,95,63,55,74,79,62,50);
// $avg = array_sum($array) / count($array);
// function test($x) {
//   if ($x < 60)
//    echo "F ";
//    else if ($x < 70)
//    echo "D ";
//   else if ($x < 80)
//    echo "C ";
//   else if ($x < 90)
//    echo "B ";
//   else if($x < 100)
//    echo "A ";

// }

// test($avg);



/****************12******************/

// function  grade($x) {
//     if ($x > 0)
//       echo "Positive ";
//     if ($x == 0)
//       echo "Zero";
//     if ($x < 0)
//      echo "Negative ";

//   }
  
//    grade(-60);











?>