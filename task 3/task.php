<?php
/************1**********/

// $color = array('white', 'green', 'red', 'blue', 'black');
// echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"."\n";

/************2**********/
// $color = array('white', 'green', 'red');
// foreach ($color as $c)
// {
// echo "$c, ";
// }
// sort($color);
// echo "<ul>";
// foreach ($color as $y)
// {
// echo "<li>$y</li>";
// }
// echo "</ul>";

/************3**********/


// $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
// "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
// "Finland"=>"Helsinki", "France" => "Paris",
// "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
// "Germany" => "Berlin", "Greece" => "Athens",
// "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
// "Portugal"=>"Lisbon", "Spain"=>"Madrid",
// "Sweden"=>"Stockholm", "United Kingdom"=>"London",
// "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
// "Czech Republic"=>"Prague", "Estonia"=>"Tallin",
// "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta",
// "Austria" => "Vienna", "Poland"=>"Warsaw") ;
// asort($ceu) ;
// foreach($ceu as $country => $capital)
// {
// echo "The capital of $country is $capital"."\n" ;
// }


/************14**********/


// $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
// 	asort($ceu);  
// 	foreach($ceu as $country => $capital)  
// 	{  
// 		echo "The capital of $country is $capital <br>";  
// 	}  



/************5**********/
// $color = array(4 => 'white', 6 => 'green', 11=> 'red');
// echo reset($color)."\n";


/************6**********/
// $original = array( '1','2','3','4','5' );
// echo 'Original array : '."\n";
// foreach ($original as $x) 
// {echo "$x ";}
// $inserted = '$';
// array_splice( $original, 3, 0, $inserted ); 
// echo " \n After inserting '$' the array is : "."\n";
// foreach ($original as $x) 
// {echo "$x ";}
// echo "\n"

/************7**********/

// $fruits = array("d" => "lemon", 
// "a" => "orange", 
// "b" => "banana", 
// "c" => "apple");
// asort($fruits);
// foreach ($fruits as $key => $val) {
//     echo "$key = $val\n";
// }


/************8**********/

// $month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
// 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// $temp_array = explode(',', $month_temp);
// $tot_temp = 0;
// $temp_array_length = count($temp_array);
// foreach($temp_array as $temp)
// {
//  $tot_temp += $temp;
// }
//  $avg_high_temp = $tot_temp/$temp_array_length;
//  echo "Average Temperature is : ".$avg_high_temp."
// "; 
// sort($temp_array);
// echo " List of five lowest temperatures :";
// for ($i=0; $i< 5; $i++)
// { 
// echo $temp_array[$i].", ";
// }
// echo "List of five highest temperatures :";
// for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
// {
// echo $temp_array[$i].", ";
// }



/************9**********/
// $my_array1 = array("color" => "red", 2, 4);
// $my_array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
// $res = array_merge($my_array1, $my_array2);
  
// print_r($res);


/************10**********/

// $colors = array("red","blue", "white","yellow");

// $colors_convert = array_map("strtoupper", $colors);

// foreach( $colors_convert as $NewArray ) {
 
//  echo $NewArray . '</br>' ;
 
//  }




// $colors = array("RED","BLUE", "WHITE","YELLOW");

// $colors_convert = array_map("strtolower", $colors);

// foreach( $colors_convert as $NewArray ) {
 
//  echo $NewArray . '</br>' ;
 
//  }

       /*******11*****/

// echo implode(",",range(200,250,4))."\n";

/************12**********/

// $my_array = array("abcd","abc","de","hjjj","g","wer");
// $min = 100;
// $max = -1;
// foreach($my_array as $a){
//   $length = strlen($a);
//   if ($length > $max) { 
//        $max = $length;
//   } else if ($length < $min) { 
//        $min = $length;
//   }
// }
// $new_array = array_map('strlen', $my_array);
// echo "The shortest array length is " . min($new_array) .
// ". The longest array length is " . max($new_array).'.';

/************13**********/

// $n=range(11,20);
// shuffle($n);
// for ($x=0; $x< 10; $x++)
// {
// echo $n[$x].' ';
// }
// echo "\n"


/************14**********/
// function min_values_not_zero(Array $values) 
// {
// return min(array_diff(array_map('intval', $values), array(0)));
// }
// print_r(min_values_not_zero(array(2, 0, 10, 12, 6))."\n");

/********************************************loop************************************************/

for($x=1; $x<=10; $x++)
{
 if($x< 10)
 {
 echo "$x-";
 }
 else
  {
 echo "$x"."\n";
  }
}
/*********2*****/

$sum = 0;
for($x=1; $x<=30; $x++)
{
$sum +=$x;
}
echo "total as a number $sum"."\n";





/*************3***************/
$output = 'A';
for ($rows = 1; $rows <= 5; $rows++) {
    for ($columns = 5 - $rows; $columns > 0; $columns--) {
        echo "A ";
    }
    for ($cell = 0; $cell < $rows; $cell++) {
        echo "$output ";
    }
    $output++;
    echo "<br/>";
}


/*************4***************/


$output = 1;

for ($rows = 1; $rows <= 5; $rows++) {
    for ($columns = 5 - $rows; $columns > 0; $columns--) {
        echo "1 ";
    }
    for ($cell = 0; $cell < $rows; $cell++) {
        echo "$output ";
    }
    $output++;
    echo "<br/>";
}

/**********5*********/

$num5 = 1;
for ($i = 0; $i < 5; $i++) {
    echo "<p>";
    for ($j = 0; $j < 5; $j++) {
        if ($j === $i) {
            echo "$num5 ";
            $num5++;
        } else
            echo "0 ";
    }
    echo "</p>";
}
/********6*********/

$n = 6;
$x = 1;
for($i=1;$i<=$n-1;$i++)
{
 $x*=($i+1); 
}
echo "The factorial of  $n = $x"."\n";

/************8********/

$text="Orange Coding Academy";
$search_char="c";
$count="0";
for($x="0"; $x< strlen($text); $x++)
  { 
    if(substr($text,$x,1)==$search_char)
    {
    $count=$count+1;
     }
  }
echo $count."\n";

/**********9**********/
for($i=1;$i<=6;$i++)
{
echo "<tr>";
for ($j=1;$j<=5;$j++)
  {
  echo "<td>$i * $j = ".$i*$j."</td>";
  }
  echo "</tr>";
  }

/*************10********/

$num10 = range(1, 50);
    echo "<p>";
    foreach ($num10 as $val) {
        if ($val % 3 === 0) echo "Fizz ";
        else echo $val . " ";
    }
    echo "</p>";


/*************11***********/

$n = 5; 
echo "n = " . $n . "\n";
$count = 1;
for ($i = $n; $i > 0; $i--) 
{
  for ($j = $i; $j < $n + 1; $j++) 
   {
     printf("%4s", $count);
     $count++;
   } 
    echo "\n";
   }



?>

