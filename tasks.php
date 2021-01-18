<?php 
//Q1-------------------
// $moh = "This text is upper case";
// $moh = strtoupper($moh) ;
// echo  $moh;
//-----------------------------
// $moh = "This text is lower case";
// $moh = strtolower($moh) ;
// echo  $moh;
//-------------------------
// $moh = "This text is first word upper case";
// $moh = ucfirst($moh) ;
// echo  $moh;
//-----------------------------
// $moh = "This text is first  character upper case";
// $moh = ucwords($moh) ;
// echo  $moh;

/*
--
--
--
--
*/
//Q2---------------------
// $numbers = array(1,2,3,4,5,6,7,8,9);
// foreach ($numbers as $number)
//     print $number."-".number_format($number, 2, ':', ',')."<br>";


// $text = "12 34 56 78 90";
// $newtext = wordwrap($text, 2, ":");

// echo $newtext;


 /*
--
--
--
--
*/
//Q3---------------------   
// $text = "The quick brown fox jumps over the lazy dog.";
// if (strpos($text, 'jumps') !== false) {
//   echo 'true';
// }
/*
--
--
--
--
*/
//Q4---------------------  
// $path = 'www.example.com/public_html/index.php';
// $filename = substr(strrchr($path, "/"), 1);
// echo $filename; 

/*
--
--
--
--
*/
//Q5---------------------
// $email  = 'Orange@example.com';
// $user = strstr($email, '@', true); 
// echo $user; 

/*
--
--
--
--
*/
//Q6---------------------
// $str1 = 'rayy@example.com';
// echo substr($str1, -3)."\n";

/*
--
--
--
--
*/
//Q7---------------------
// function password_generate($chars) 
// {
  //   $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  //   return substr(str_shuffle($data), 0, $chars);
  // }
  //   echo password_generate(9)."\n";
  
  /*
  --
  --
  --
  --
  */
  //Q8---------------------
  //   $trans = array("the" => "That" );
  // echo strtr("That quick brown fox jumps over the lazy dog", $trans);
  /*
  --
  --
  --
  --
  */
  //Q9---------------------
  // $str1 = 'football';
  // $str2 = 'footboll';
  // $str_pos = strspn($str1 ^ $str2, "\0");
  // printf('First difference between two strings at position %d: "%s" vs "%s"',
  // $str_pos, $str1[$str_pos], $str2[$str_pos]);
  // printf("\n");
  /*
  --
  --
  --
  --
  */
  //Q10---------------------
  //  $str  = "Twinkle, twinkle, little star,<br>
  // How I wonder what you are.<br>
  //  Up above the world so high,<br>
  // Like a diamond in the sky.";
  // $arra1 = explode("<br>", $str);
  // echo var_dump($arra1);
 

  /*
  --
  --
  --
  --
  */
  //Q11---------------------
  // $str = "hello world";
  // echo substr(strstr($str, 'e'), 1);

  /*
  --
  --
  --
  --
  */
  //Q12---------------------
//   $email  = 'Orange@example.com';
// $user = substr(strstr($email, '@'),1); 
// echo $user; 
  /*
  --
  --
  --
  --
  */
  //Q13---------------------
  //  $afterWord = 'The'; 
  //  $wordAdd = ' quick';
  //  $str = "The brown fox";
  //   echo str_replace($afterWord, $afterWord.$wordAdd,$str);

  /*
  --
  --
  --
  --
  */
  //Q18---------------------
  // $email  = 'The quick brown fox';
  // $user = strstr($email, ' ', true); 
  // echo $user; 
  /*
  /*
  --
  --
  --
  --
  */
  //Q14---------------------
//   $x = '000547023.24';
// $str1 = ltrim($x, '0');
// echo $str1."\n";


/*
  --
  --
  --
  --
  */
  //Q15---------------------

// $str = "The quick brown fox jumps over the lazy dog";
// echo str_replace("fox", '',$str);


  /*
  --
  --
  --
  --
  */
  //Q16---------------------
 
  // $str = "Original String : 'The quick brown fox jumps over the lazy dog///'";
  // echo str_replace("/", '',$str);
  

  /*
  --
  --
  --
  --
  */
  //Q17---------------------
//   $path = 'http://www.example.com/5478631';
// $filename = substr(strrchr($path, "/"), 1);
// echo $filename; 

  /*
  --
  --
  --
  --
  */
  //Q18---------------------
//   $string = '\"\1+2/3*2:2-3/4*3';

//   // Remove special characters
//   $cleanStr = preg_replace('/[^A-Za-z0-9]/', ' ', $string);
//  echo $cleanStr
/*
--
--
--
--
*/
//Q19---------------------
// for ($i=0; $i < 5; $i++) { 
//   $str = "The quick brown fox jumps over the lazy dog";
//   $newStr = explode(" ",$str);
//   echo $newStr[$i]." ";
// }



/*
--
--
--
--
*/
//Q20---------------------
  // $str = '2,543.12';
  // echo str_replace(',', '',$str);
/*
--
--
--
--
*/
//Q21---------------------
// for ($x = ord('a'); $x <= ord('z'); $x++)
// echo chr($x);
// echo "\n"

  
  ?>