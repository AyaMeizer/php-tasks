<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


    ///////string and string functions
    //Exercise 1

    // $txt="leTs start ExeRcise 1";
    // $uppercase=strtoupper($txt);
    // $lowercase=strtolower($txt);
    // echo "entered text is: <h1>$txt</h1>";
    // echo "uppercase text : <h1>$uppercase</h1>";
    // echo "lowercase text : <h1>$lowercase</h1>";
    // $firstLetter=ucfirst($lowercase); 
    // echo "First letter uppercase text : <h1>$firstLetter</h1>";
    // $firstLetterOfWord=ucwords($lowercase);
    // echo "First letter of each word uppercase text : <h1>$firstLetterOfWord</h1>";


    //Exercise 2

    // $date=date_create("085119");
    // echo "time is: ".date_format($date,"H:i:s");


    //Exercise 3

    // $input = "i'm a fullstack developer at orange coding academy";
    // $word = "Orange";
    // if(strpos(strtolower($input) , strtolower($word))){
    //     echo "word is found";
    // } else{
    //     echo "word is not found";
    // }

    //Exercise 4

    // $url = "www.orange.com/index.php";
    // echo strstr($url,"/",false);

    //Exercise 5

    // $email= "info@email.com";
    // echo strstr($email,"@",true)."\n";
    // // or
    // $username= explode("@",$email);
    // echo $username[0];

    //Exercise 6

    // $email= "info@email.com";
    //  echo strstr($email,"c",false)."\n"; 
    // // or
    // $username= explode(".",$email);
    // echo $username[1];

    //Exercise 7

    // $alphabet = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    //  echo substr(str_shuffle($alphabet), 0, 8);

    //Exercise 8

    // $sentance = "that trainee is so genius";
    // echo str_replace("that","the",$sentance);

    //Exercise 9
 /////////////////////////////problem

    // $a="dragonboll";
    // $b="dragonball";
    // echo strspn("dragonboll","dragonball");

    //Exercise 10

    // $string = "Twinkle, tinkle, little star.";
    //      $stringToArray = explode(", ", $string);
    //      var_dump($stringToArray);


    //Exercise 11

    // $letter = "d";
    // echo ++$letter;


    //Exercise 12

    // $txt = "the brown fox";
    // $added = "quick ";
    // $position=strpos($txt,"brown");
    // echo substr($txt,0,$position).$added.substr($txt,$position);

    // $position=strpos($txt,"b");
    // echo substr($txt,0,$position);


    //Exercise 13
    
    // $num = "00062964";
    // echo ltrim($num,"0");


    //Exercise 14

    // $txt= "the quick brown fox jumps over the lazy dog";
    // echo str_replace("fox","",$txt)


    //Exercise 15

    // $txt= "the quick brown fox jumps over the lazy dog---";
    // echo str_replace("---","",$txt)


    //Exercise 16
    // $txt = "24%th^y/h&GY*if0=w";
    // echo preg_replace('/[^A-Za-z0-9\-]/', ' ', $txt);
    

    //Exercise 17

    // $txt = "the quick brown fox jumps over the lazy dog";
    // echo implode(' ', array_slice(str_word_count($txt, 2), 0, 5));


    //Exercise 18

    // $txt = "2,3,4,5,6";
    // echo str_replace(',', ' ', $txt);


    //Exercise 19

    // $a="a";
    // for($i=0;$i<26;$i++){
    // echo $a++." ";
    // }



    //////////arrays
    //q1
    // $color=["red","green","blue"];
    // $txt= "these are the Rgb colors : the $color[0] color , the $color[1] color and the $color[2] color";
    // echo $txt;

    //q2
    // $color=["red","green","blue"];
    // for($i=0;$i<count($color);$i++){
    //     echo "<li>$color[$i]</li>";
    // }

    //q3
    // $cities = ["jordan" => "amman", "usa"=>"washington", "palestine"=>"al Quodos"];
    // echo $cities["palestine"];


    // q4
    // $color=["red","green","blue"];
    // echo $color[0];

    // q5
    // $array= [1,2,3,4,5,6,7];
    // $q= ["good"];
    // array_splice( $array, 3, 0, $q);
    // echo  var_dump($array);

     //q6
    //  $fruits=["d"=>"lemon","a"=>"orange","b"=>"banana","c"=>"apple"];
    //  $sorted=asort($fruits);
    //  foreach($fruits as $key=>$value){
    //      echo $key."=>".$value."<br/>";
    //  }

    //q7
    // $array=[1,4,6,8,0,12,3,5,79,56];
    // $avg= array_sum($array)/count($array);
    // echo $avg;

    //q8
    // $array1=["a","b","name"=>"aya"];
    // $array2=["c","d","age"=>22,"e"];
    // $merged=array_merge($array1,$array2);
    // echo var_dump($merged);


    //1.
    // $colors=["red","blue","green"];
    // $lowercase=array_map("strtoupper",$colors);
    // echo var_dump($lowercase);

    //2.
    // $colors=["RED","BLUE","GREEN"];
    // $uppercase=array_map("strtolower",$colors);
    // echo var_dump($uppercase);

    //q9 4.
    // $num= array(range(200,250));
    // echo var_dump($num);
    
    //q10
    // $starray=["a","abcd","abc","ab"];
    // $lengths=array_map("strlen",$starray);
    // echo "The shortest is " . min($lengths) .". The longest is " . max($lengths);

    //q11
//     for($i=0; $i<10 ; $i++)
// {
//     $random[] = rand(0,10) ;
// }
//     echo json_encode($random);

//q12
// $array=[2,5,0,9,15,1];
// echo min(array_filter($array));





//////////if statement

//q1
// $year = 2011;
// if(($year%4)===0 || ($year%400)===0 && $year%100!==0){
//     echo "$year is a leap year";
// }else{
//     echo "$year is not a leap year";
// }


//q2
// $temp=5;
// if($temp>=20){
//     echo "we are in summer";
// }else{
//     echo "we are in winter";
// }

// q3
// $num=[5,2];
// if($num[0]===$num[1]){
//     echo array_sum($num)*3;
// }else{
//     echo array_sum($num);
// }


//q4
// $num=[17,13];
// if($num[0]+$num[1]===30){
//     echo array_sum($num);
// }else{
//     echo "false";
// }

//q5
//  $num=11;
// if($num%3===0 && $num>0){
//     echo "$num is multiple of 3";
// }else{
//     echo "false";
// }

//q6
// $num=52;
// if($num>=20 && $num<=50){
//     echo "$num is between the range of 20-50";
// }else{
//     echo "$num is NOT between the range of 20-50";
// }

//q7
// $array=[1,9,7];
// echo max($array);


//q8
// $bill=60;
// if($bill<=50){
//     echo $bill*2.5." JOD";
// }
// else if($bill>50 && $bill<=150){
//     echo $bill*5.0." JOD";
// }
// else if($bill>150 && $bill<=250){
//     echo $bill*6.2." JOD";
// }
// else if($bill>250){
//     echo $bill*7.5." JOD";
// }

//q9
// $array=[1,3,9,5];
// echo "sum of the array is ".array_sum($array)."<br/>";
// $value=$array[0];
// for($i=1;$i<count($array);$i++){
// $value= ($value-$array[$i]);
// }
// echo "sub of the array is ".$value."<br/>";
// $multi=$array[0];
// for($i=1;$i<count($array);$i++){
//     $multi= ($multi*$array[$i]);
//     }
//     echo "multiplication of the array is ".$multi."<br/>";
//     $division=$array[0];
// for($i=1;$i<count($array);$i++){
//     $division= ($division/$array[$i]);
//     }
//     echo "division of the array is ".$division."<br/>";


//q10
// $age=19;
// if($age>=18){
//     echo "$age is legal to vote";
// }else{
//     echo "$age is illegal to vote";
// }


//q11
// $number=10;
// if($number>0){
//     echo "$number is positive";
// }
// if($number<0){
//     echo "$number is negative";
// }
// if($number===0){
//     echo "$number is zero";
// }

//q12
// $grades=[50,90,60,90];
// $avg= array_sum($grades)/count($grades);
// if($avg>90){
//    echo "$avg is A";
// }else if($avg>70){
//    echo "$avg is B";
// }else if($avg>50){
//     echo "$avg is D";
//  }


/////////loops

  ?>
</body>
</html>