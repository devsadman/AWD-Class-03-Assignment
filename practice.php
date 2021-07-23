<?php
//- ফর লুপ ইউজ করে ২,৩,৪,৫,৬,৭,৮,৯ এর নামতা রেডি করুন
echo "<p style='font-weight:bold;text-align:center;'>ফর লুপ ইউজ করে ২,৩,৪,৫,৬,৭,৮,৯ এর নামতা রেডি করুন</p>";
function mul($num) {
    for($i=1;$i<=10;$i++) {
        $result=$num*$i;
        echo "{$num}*{$i}={$result} <br>";
    }
}
mul(2);
echo "<hr>";
mul(3);
echo "<hr>";
mul(4);
echo "<hr>";
mul(5);
echo "<hr>";
mul(6);
echo "<hr>";
mul(7);
echo "<hr>";
mul(8);
echo "<hr>";
mul(9);
echo "<hr>";

echo "<p style='font-weight:bold;text-align:center;'>একটি ফর লুপ তৈরি করুন ১০০০ থেকে ৫০০০ পযন্ত লুপ ঢ়ুরবে এবং যেখানে আপনি ৩০০০ থেকে বড় এবং ১১ দ্বারা বিভায্য সংখা গুলা প্রিন্ট করবেন</p>";
for($i=1000;$i<=5000;$i++) {
    if($i>3000 && $i%11==0) {
        echo "The value is: {$i} <br>";
    }
}
echo "<hr>";
echo "<p style='font-weight:bold;text-align:center;'>একটি ইমেজ আপলোডিং ফাংসন বানান যেথানে ছবির নাম, হাইট, ওইদ দিয়ে ছবিটাকে মেনেজ কার যাবে</p>";
function imageUploader($image_name,$height,$width) {
    if ($height==300 && $width==300) {
        echo "Your {$image_name} is ready for uploading";
    } elseif ($height!=$width) {
        echo "You must resize {$image_name}";
    } else {
        echo "Invalid size";
    }
}
imageUploader('nature',300,300);
echo "<hr>";
echo "<p style='font-weight:bold;text-align:center;'>- একটা হেডিং এ বাংলায় লাল, সবুজ, নিল, হলুদ, বেগুনি, কাল এই রং গুলা দিয়ে হেডিং এর কালার টা চেঞ্জ করে এমন করে একটা ফাংসন বানান</p>";

function colorChange($txt,$type) {
    if ($type=='lal') {
        $color='red';
    } elseif ($type=='sobuj') {
        $color='green';
    }elseif ($type=='nil') {
        $color='blue';
    }elseif ($type=='holud') {
        $color='yellow';
    }elseif ($type=='beguni') {
        $color='purple';
    }elseif ($type=='kalo') {
        $color='black';
    }
    
    echo "<h2 style='color:{$color};'>{$txt}</h2>";
}
$input='Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis, voluptate.<br>';
colorChange($input,'lal');
colorChange($input,'sobuj');
colorChange($input,'nil');
colorChange($input,'holud');
colorChange($input,'beguni');
colorChange($input,'kalo');
echo "<hr>";
echo "<p style='font-weight:bold;text-align:center;'>- বাংলাদেশি টাকাতে ইউএস ডলার, কানাডিয়ান ডলার, পাউন্ড এ কনভাট করার একটি ফাংসন বানান</p>";
function currencyConverter($amount,$switch) {
    if ($switch=='us') {
        $result=$amount*0.012;
        echo "Bangladeshi {$amount} Taka = US Dollar {$result}<br>";
    } elseif ($switch=='c') {
        $result=$amount*0.015;
        echo "Bangladeshi {$amount} Taka = Canadian Dollar {$result} <br>";
    } elseif ($switch=='p') {
        $result=$amount*0.0086;
        echo "Bangladeshi {$amount} Taka = Pound {$result} <br>";
    }
}
currencyConverter(8000,'us');
currencyConverter(8000,'c');
currencyConverter(8000,'p');

echo "<hr>";
echo "<p style='font-weight:bold;text-align:center;'>এমন একটি ফাংসন বানান যেখানে আপনার ওজন আর উচ্চা দিলে আপনার বডি ম্যাস ইন্ডেক্স বের করে দিব</p>";
function bmiCalculator($height,$weight) {
    $bmi=(($weight/$height/$height)*10000);
    if ($bmi<=18.5) {
        $message='Underweight';
    } elseif ($bmi>18.5 && $bmi<=24.9) {
        $message='Normal Weight';
    } elseif ($bmi>=25 && $bmi<=29.9) {
        $message='Over Weight';
    } elseif ($bmi>=30) {
        $message='Obesity';
    }
    echo "Your BMI is; {$bmi} and you are {$message}";

}
bmiCalculator(103.5,65);
echo "<hr>";
echo "<p style='font-weight:bold;text-align:center;'>একটি হেডিং ফাংসন বানান যেটা দিয়ে ডাইনামিস হেডিং তৈরি করা যাবে</p>";

function dynamicHeading($txt,$tag) {
    if ($tag=='h1') {
        $tagName='h1';
    } elseif ($tag=='h2') {
        $tagName='h2';
    } elseif ($tag=='h3') {
        $tagName='h3';
    }elseif ($tag=='h4') {
        $tagName='h4';
    }elseif ($tag=='h5') {
        $tagName='h5';
    }elseif ($tag=='h6') {
        $tagName='h6';
    }

    echo "<{$tagName}>$txt</$tagName>";

}

$input="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, dolorum! <br>";
dynamicHeading($input,'h1');
dynamicHeading($input,'h2');
dynamicHeading($input,'h3');
dynamicHeading($input,'h4');
dynamicHeading($input,'h5');
dynamicHeading($input,'h6');

echo "<hr>";
echo "<p style='font-weight:bold;text-align:center;'>এমন একটি ফাংসন তৈরি করুন যেটাতে আপনার জন্ম সাল দিলে সে আপনার বয়স বের করে দিবে</p>";
function ageCalculator($birtYear,$currentYear) {
    $age=$currentYear-$birtYear;
    echo "Your age is: {$age}";
}
ageCalculator(1995,2021);
echo "<hr>";
echo "<p style='font-weight:bold;text-align:center;'>গ্রেড এবং জিপিএ বের করার জন্য একটি ফাংসন তৈরি করুন</p>";
function resulSheet($sub,$marks) {
    if ($marks<40) {
        $grade='F';
        $gpa=0.00;
    } elseif ($marks>=40 && $marks<=44) {
        $grade='D';
        $gpa=2.00;
    } elseif ($marks>=45 && $marks<=49) {
        $grade='C';
        $gpa=2.25;
    } elseif ($marks>=50 && $marks<=54) {
        $grade='C+';
        $gpa=2.50;
    } elseif ($marks>=55 && $marks<=59) {
        $grade='B-';
        $gpa=2.75;
    } elseif ($marks>=60 && $marks<=64) {
        $grade='B';
        $gpa=3.00;
    } elseif ($marks>=65 && $marks<=69) {
        $grade='B+';
        $gpa=3.25;
    }elseif ($marks>=70 && $marks<=74) {
        $grade='A-';
        $gpa=3.50;
    }elseif ($marks>=75 && $marks<=79) {
        $grade='A';
        $gpa=3.75;
    }elseif ($marks>=80) {
        $grade='A+';
        $gpa=4.00;
    }

    echo "Subject Name: {$sub}||Grade: {$grade}||Gpa: {$gpa} <br>";
}
resulSheet('AI',80);
resulSheet('E-commerec',75);
resulSheet('Data Structure',72);
resulSheet('Algorithm',85);

echo "<hr>";
echo "<p style='font-weight:bold;text-align:center;'>এমন একটি ফাংসন বানান যাকে কি না একটা বয়স দিলে একজন কি বৃদ্ধ, যুবক, কিশো, ছেলে , বাচ্ছা রিটান করবে</p>";

function person($age) {
    if ($age<10) {
        $message='child';
    } elseif ($age>=10 && $age<=15) {
        $message='boy';
    } elseif ($age>=16 && $age<=20) {
        $message='teenage';
    } elseif ($age>=21 && $age<=45) {
        $message='Young Man';
    }elseif ($age>=46) {
        $message='Old Guy';
    }
    echo "Hello!! Your age is {$age} and you are {$message} <br>";
}
person(8);
person(15);
person(16);
person(24);
person(46);
person(22);

echo "<hr>";
echo "<p style='font-weight:bold;text-align:center;'>- এমন একটি ফাংসন বানান যেটা দিয়ে আয়তক্ষেত্র, বগক্ষেত্র, এবং বৃত্তে ক্ষেত্রফল বের করা যাবে</p>";
//rectangular area
function reactangularArea($height,$width) {
    $result=$height*$width;
    echo "The Rectangular area is: {$result}";
}
reactangularArea(20,30);
echo "<hr>";
//square area
function squareArea($length) {
    $result=$length*$length;
    echo "The Square area is: {$result}";
}
squareArea(20);
echo "<hr>";
//Circle area
function circleArea($radius) {
    define('PI',3.1416);
    $result=PI*($radius*$radius);
    echo "The Circle area is: {$result}";
}
circleArea(15);
echo "<hr>";
echo "<p style='font-weight:bold;text-align:center;'>পি এইচ পি এর রিভাস ফাংসনের মতন একটি ফাংসন বানান</p>";

$txt='sadman';
$count=strlen($txt)-1;
for ($i=$count;$i>=0;$i--) {
    echo "$txt[$i]";
    
}
echo "<hr>";
echo "<p style='font-weight:bold;text-align:center;'>বড় হাত, ছোট হাত, উভয় হাত এর লেখা কনভাসন করার জন্য একটিং ফাংসন বানান</p>";

//borohat
function upperCase($txt) {
    echo "<span style='text-transform:uppercase;'>{$txt}</span>";
}
$input="hello i am md sadman ahsan";
upperCase($input);

echo "<hr>";
//chotoHat
function lowerCase($txt) {
    echo "<span style='text-transform:lowercase;'>{$txt}</span>";
}
$input="hello i am md sadman ahsan";
lowerCase($input);
echo "<hr>";
//toggle
function togglHand($txt,$type) {
    if ($type=='b') {
        $hat='uppercase';

    } elseif ($type=='c') {
        $hat='lowercase';
    } else {
        echo "Invalid Data";
    }
    echo "<span style='text-transform:{$hat};'>{$txt}</span>";
}
$input="hello i am md sadman ahsan <br>";
togglHand($input,'c');
togglHand($input,'b');