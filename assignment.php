<?php
/*Assignment No 1 */
//boro hat
echo "<h2 style='text-align:center;'>Assignment 01</h2>";
function upperCase($txt)
{
    echo "<span style='text-transform:uppercase;'>$txt</span>";
}
$input = "Hello, i am md. sadman ahsan";
upperCase($input);

echo "<hr>";
//choto hat
function lowercase($txt)
{
    echo "<span style='text-transform:lowercase;'>$txt</span>";
}
$input = "Hello, i am md. sadman ahsan";
lowercase($input);

echo "<hr>";

// Toggle hand
function toggleHand($txt, $type)
{
    if ($type == 'u') {
        $case = 'uppercase';
    } elseif ($type == 'l') {
        $case = 'lowercase';
    } else {
        echo "Invalid case";
    }
    echo "<span style='text-transform: {$case};'>$txt</span>"."<br>";
}

$input = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores numquam laborum doloribus. Voluptatibus, voluptatum nihil dolorem adipisci dolore doloremque unde?";

toggleHand($input, 'u');
toggleHand($input, 'l');
echo "<hr>";
echo "<h2 style='text-align:center;'>Assignment 02</h2>";
$txt='sadman';
$length=strlen($txt)-1;
for ($i=$length;$i>=0;$i--) {
    echo $txt[$i];
}

echo "<hr>";
echo "<h2 style='text-align:center;'>Assignment 03</h2>";
/*Assignment No 3 */

//Rectangular Area

function rectangularArea($height, $width)
{
    $area = $height * $width;
    echo "The Rectangular area is: {$area}";
}
rectangularArea(10, 15);
echo "<hr>";
//Square Area

function squareArea($length)
{
    $area = $length * $length;
    echo "The Square area is: {$area}";
}
squareArea(10, 10);
echo "<hr>";

//Square Area

function circleArea($radius)
{
    define('PI', 3.1416);
    $area = PI * $radius;
    echo "The Circle area is: {$area}";
}
circleArea(10.5);
echo "<hr>";
echo "<h2 style='text-align:center;'>Assignment 04</h2>";
/*Assignment No 4 */
function personAge($age)
{
    if ($age <= 10) {
        $type = 'child';
    } elseif ($age > 10 && $age <= 15) {
        $type = 'boy';
    } elseif ($age >= 16 && $age <= 20) {
        $type = 'teenager';
    } elseif ($age >= 21 && $age <= 45) {
        $type = 'young man';
    } elseif ($age >= 46) {
        $type = 'Old Man';
    }
    echo "Hello, Your age is {$age} and you are a {$type} <br>";
}
personAge(49);
personAge(11);
personAge(9);
personAge(25);

echo "<hr>";
echo "<h2 style='text-align:center;'>Assignment 05</h2>";
/*Assignment No 5 */
// Grade & GPA
function result($subject, $marks)
{
    if ($marks < 40) {
        $grade = 'F';
        $gpa   = '0.0';
    } elseif ($marks >= 40 && $marks <= 44) {
        $grade = 'D';
        $gpa   = '2.0';
    } elseif ($marks >= 45 && $marks <= 49) {
        $grade = 'C';
        $gpa   = '2.25';
    } elseif ($marks >= 50 && $marks <= 54) {
        $grade = 'C+';
        $gpa   = '2.25';
    } elseif ($marks >= 55 && $marks <= 59) {
        $grade = 'B-';
        $gpa   = '2.75';
    } elseif ($marks >= 60 && $marks <= 64) {
        $grade = 'B';
        $gpa   = '3.00';
    } elseif ($marks >= 65 && $marks <= 69) {
        $grade = 'B+';
        $gpa   = '3.25';
    } elseif ($marks >= 70 && $marks <= 74) {
        $grade = 'A-';
        $gpa   = '3.5';
    } elseif ($marks >= 75 && $marks <= 79) {
        $grade = 'A';
        $gpa   = '3.75';
    } elseif ($marks >= 80) {
        $grade = 'A+';
        $gpa   = '4.00';
    }
    echo "Your Subject is: {$subject} | Your grade is: {$grade} | Your gpa is: {$gpa} <br>";
}
result('Artificial Intelligence', 80);
result('Algorithm Analysis & Design', 75);
result('Software Design & Development', 69);

echo "<hr>";
echo "<h2 style='text-align:center;'>Assignment 06</h2>";
/*Assignment No 6 */
function ageCalculator($birthYear, $currentYear)
{
    $age = $currentYear - $birthYear;
    echo "Your age is: {$age} year";
}
ageCalculator(1995, 2020);
echo "<hr>";
echo "<h2 style='text-align:center;'>Assignment 07</h2>";
/*Assignment No 7 */
//Dynamic Heading
function dynamicHeading($txt, $tag)
{
    if ($tag == 'h1') {
        $tagName = 'h1';
    } elseif ($tag == 'h2') {
        $tagName = 'h2';
    } elseif ($tag == 'h3') {
        $tagName = 'h3';
    } elseif ($tag == 'h4') {
        $tagName = 'h4';
    } elseif ($tag == 'h5') {
        $tagName = 'h5';
    } elseif ($tag == 'h6') {
        $tagName = 'h6';
    }
    echo "<{$tagName}>$txt</{$tagName}>";
}
$input = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores numquam laborum doloribus. Voluptatibus, voluptatum nihil dolorem adipisci dolore doloremque unde?";
dynamicHeading($input, 'h4');
dynamicHeading($input, 'h3');
dynamicHeading($input, 'h2');
dynamicHeading($input, 'h1');

echo "<hr>";
echo "<h2 style='text-align:center;'>Assignment 08</h2>";
/*Assignment No 8 */
//BMI Calculator
function bmiCalculator($height, $weight)
{
    $BMI = ($weight / $height / $height) * 10000; // height should be cm
    if ($BMI < 18.5) {
        $category = 'underweight';
    } elseif ($BMI >= 18.5 && $BMI <= 24.9) {
        $category = 'Normal Weight';
    } elseif ($BMI >= 25 && $BMI <= 29.9) {
        $category = 'Overweight';
    } elseif ($BMI >= 30) {
        $category = 'Obesity';
    }
    echo "Your BMI is {$BMI} and you have {$category} <br>";
}
bmiCalculator(149.86, 65);
bmiCalculator(103.5, 18.3);
bmiCalculator(91.1, 16.6);
echo "<hr>";
echo "<h2 style='text-align:center;'>Assignment 09</h2>";
/*Assignment No 9 */
// Currency Converter
function currencyConverter($taka, $convert)
{
    if ($convert == 'us-dollar') {
        define('drate', 0.012);
        $d_currency = $taka * drate;
        echo "Banladeshi {$taka} Taka = US Dollar {$d_currency} <br>";
    } elseif ($convert == 'can-dollar') {
        define('crate', 0.015);
        $c_currency = $taka * crate;
        echo "Banladeshi {$taka} Taka = Canadian Dollar {$c_currency} <br>";
    } elseif ($convert == 'pound') {
        define('p_rate', 0.0086);
        $p_currency = $taka * p_rate;
        echo "Banladeshi {$taka} Taka = Pound {$p_currency} <br>";

    }

}
currencyConverter(500, 'can-dollar');
currencyConverter(500, 'us-dollar');
currencyConverter(500, 'pound');

echo "<hr>";
echo "<h2 style='text-align:center;'>Assignment 10</h2>";
/*Assignment No 10 */
//color convert
function colorConvert($txt,$color) {
    if ($color=='lal') {
        $color='red';
    }elseif ($color=='sobuj') {
        $color='green';
    }elseif ($color=='nil') {
        $color='blue';
    }elseif ($color=='holud') {
        $color='yellow';
    } elseif ($color=='beguni') {
        $color='purple';
    } elseif ($color=='kalo') {
        $color='black';
    }
    echo "<h2 style='color:{$color}'>$txt</h2>";
}

$input="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium, suscipit.<br>";
colorConvert($input,'lal');
colorConvert($input,'sobuj');
colorConvert($input,'nil');
colorConvert($input,'holud');
colorConvert($input,'beguni');
colorConvert($input,'kalo');
echo "<hr>";
echo "<h2 style='text-align:center;'>Assignment 11</h2>";
/*Assignment No 11 */
//image uplaod

function imageUploader($image_name,$height,$width) {
    if ($height==300 && $width==300) {
        echo "<span style='color:green;'>Successfully Uploaded "." $image_name</span> <br>";
    } elseif($height!=$width) {
        echo "<span style='color:red;'>size must be 300*300 for"." $image_name</span> <br>";
    } else {
        echo "<span style='color:red;'>Invalid Height and width for "." $image_name</span> <br>";
    }
   
}
imageUploader('profile',300,300);
imageUploader('profile',400,300);
imageUploader('profile',400,400);
echo "<hr>";
echo "<h2 style='text-align:center;'>Assignment 12</h2>";
/*Assignment No 12 */
//for loop
for($i=1000;$i<=5000;$i++) {
    if ($i>3000 && $i%11==0) {
        echo "The number is: {$i} <br>";
    }
}
echo "<hr>";
echo "<h2 style='text-align:center;'>Assignment 13</h2>";
/*Assignment No 13 */
//multiple of 2

function mul($number) {
    for($i=1;$i<=10;$i++) {
        $result=0;
        $result=$result+($i*$number);
        echo "{$number}*{$i}={$result} <br>";
    }
    
}
mul(2);
echo"<hr>";
mul(3);
echo"<hr>";
mul(4);
echo"<hr>";
mul(5);
echo"<hr>";
mul(6);
echo"<hr>";
mul(7);
echo"<hr>";
mul(8);
echo"<hr>";
mul(9);
echo"<hr>";
?>
