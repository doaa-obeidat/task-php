<?php
/********1*******/
// $str = "hi";
// echo strtoupper($str);
/********2*******/
// echo strtolower("ORANGE.");
/********3*******/
// $str1 = 'welcome to StackHowTo.';
// echo ucfirst($str1);


/********4*******/
// $str = 'hELLO wORLD!';
// $str = ucwords($str);             
// $str = ucwords(strtolower($str));
// echo ucwords(strtolower($str));


/********5*******/
// $str1= '085119'; 
// echo substr(chunk_split($str1, 2, ':'), 0, -1)."\n";


/********6*******/
// $word = "orange";
// $mystring = "I am a full stack developer at orange coding academy";
 
// // Test if string contains the word 
// if(strpos($mystring, $word) !== false){
//     echo "Word Found!";
// } else{
//     echo "Word Not Found!";
// }

/********7*******/
// $path = ' www.orange.com/index.php';
// $file_name = substr(strrchr($path, "/"), 1);
// echo $file_name."\n"; 

/********8*******/
// $mailid  = 'info@orange.com';
// $user = strstr($mailid, '@', true);
// echo $user."\n";

/********9*******/
// $str1 = 'info@orange.com';
// echo substr($str1, -3)."\n";

/********10*******/
// function password_generate($chars) 
// {
//   $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
//   return substr(str_shuffle($data), 0, $chars);
// }
//   echo password_generate(7)."\n";

/********11*******/
// $str = 'That new trainee is so genius ';
// echo preg_replace('/That/', 'the', $str, 1); 


/********12*******/
// $str1 = 'dragonball';
// $str2 = 'dragonboll';
// $str_pos = strspn($str1 ^ $str2, "\0");
// printf('First difference between two strings at position %d: "%s" vs "%s"',
// $str_pos, $str1[$str_pos], $str2[$str_pos]);
// printf("\n");


/********13*******/
// $str = "Twinkle, twinkle, little star.";
// $arra1 = explode("<br>", $str);
// var_dump($arra1);

/********14*******/
// $cha = 'z';
// $next_cha = ++$cha; 
// //The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
// if (strlen($next_cha) > 1) 
// {
//  $next_cha = $next_cha[0];
//  }
// echo $next_cha."\n";

/********15*******/
// $cha = 'a';
// $next_cha = ++$cha; 
// //The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
// if (strlen($next_cha) > 1) 
// {
//  $next_cha = $next_cha[0];
//  }
// echo $next_cha."\n";
  

/********16*******/
// $original_string = 'The brown fox';
// $string_to_insert ='quick';
// $insert_pos = 4;
// $new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
// echo $new_string;


/********17*******/
// $x = '000547023.24';
// $str1 = ltrim($x, '0');
// echo $str1."\n";


/********18*******/
// $my_str = 'The quick brown fox jumps over the lazy dog';
// echo str_replace("fox", " ", $my_str)."\n";

/********19*******/
// $my_str = 'The quick brown fox jumps over the lazy dog---';
// echo trim($my_str, '-')."\n";
 /********20*******/
// $my_str = '\"\1+2/3*2:2-3/4*3';
// $my_string = 'The quick brown fox jumps over the lazy dog';
// echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";
// echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_str)."\n";

/********21*******/
// $my_string = 'The quick brown fox jumps over the lazy dog';
// echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";



/********22*******/
// $str1 = "2,543.12";
// $x = str_replace( ',', '', $str1);
// if( is_numeric($x))
//   {
//   echo $x."\n";
//   }


/********23*******/
// for ($x = ord('a'); $x <= ord('z'); $x++)
//  echo chr($x)."    ";
//  echo "\n"

?>