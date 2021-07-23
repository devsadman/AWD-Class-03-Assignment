<?php
    /*
    while loop
    */
    // $i=50;
    // while($i<=677) {
    //     if ($i%2==0) {
    //         echo "Loop number is {$i} <br>";
    //     }
        
    //     $i++;
    // }
    // $i=50;
    // while ($i<=120) {
    //     echo "Loop number is {$i} <br>";
    //     $i++;
    // }
    // $i=11;
    // do {
    //     echo "loop number is {$i} <br>";
    //     $i++;
    // } while ($i <= 10);

    // for loop
    // for ($i=70; $i <=500 ; $i++) { 
    //     if ($i%6==0) {
    //         echo "Loop number is {$i} <br>";
    //     }
       
    // }
    // for ($i=2000; $i >=1200 ; $i--) { 
    //     if ($i>=1500 && $i<=1700) {
    //         if ($i%2==0) {
    //             echo "Loop number is {$i} <br>";
    //         }
    //     }
    // }

    //Php built in function
    // $text="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam nesciunt voluptatum similique nam maiores, sit accusamus reiciendis iusto molestias, delectus, sed odio ducimus perferendis! Eligendi delectus, sed in incidunt maiores dolorum alias molestiae, ut temporibus distinctio officiis recusandae assumenda corporis natus eum corrupti odio facilis explicabo quasi amet tempora sint?";
    // echo $text;
    // echo "<hr>";
    // echo "The inputed String length is: ".strlen($text);
    // echo "<hr>";
    // echo "Total Word is ".str_word_count($text);
    // echo "<hr>";
    // echo "Postion of Eligendi is: ". strpos($text,'Eligendi');
    // echo "<br>";
    // echo substr($text,6,16);
    // echo "<hr>";
    // echo str_replace('tempora','Hi',$text);
    // echo "<hr>";
    // echo str_shuffle('abcde');
    // echo "<hr>";
    //otp 
    // $num=str_shuffle('abcdefghijklmnopqrstuvwxyz123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ');
    // $otp=substr($num,8,3);
    // echo "The otp is: {$otp}";

    //User define function
    // function info(){
    //     echo "Hello sadman How are you";
    // }
    // info();
    // function info() {
    //     return "Hello Sadman Whats up";
    // }
    // echo info();
    // function info ($name) {
    //     echo "Hello {$name} How are you <br>";
    // }
    // info('sadman');
    // info('anika');
    // info('tunny');
    // function info($name,$age,$skill) {
    //     echo "Hi {$name},Your age is {$age} and your skill is {$skill} <br>";
    // }
    // info('sadman',25,'laravel');
    // info('tunny',21,'Digital');
    // info('anika',24,'Go Lan');
        // function biyeShadi($name,$age) {
        //     if ($age>=18) {
        //         echo "Hello {$name},You are elligible for marriage";
        //     } else {
        //         $wait=18-$age;
        //         echo "Sorry {$name},You have to wait {$wait} years for marriage";
        //     }
           
        // }
        // biyeShadi('ontika',10);
    // function result ($subject,$marks) {
    //     if ($marks<40) {
    //         $grade='F';
    //         $gpa=0.00;
    //     } elseif ($marks>= 40 && $marks <= 44) {
    //         $grade='D';
    //         $gpa=2.00;
    //     } elseif ($marks>= 45 && $marks <= 49) {
    //         $grade='C';
    //         $gpa=2.25;
    //     } elseif ($marks>= 50 && $marks <= 54) {
    //         $grade='C+';
    //         $gpa=2.50;
    //     } elseif ($marks>= 55 && $marks <= 59) {
    //         $grade='B-';
    //         $gpa=2.75;
    //     } elseif ($marks>= 60 && $marks <= 64) {
    //         $grade='B';
    //         $gpa=3.00;
    //     } elseif ($marks>= 65 && $marks <= 69) {
    //         $grade='B+';
    //         $gpa=3.25;
    //     }  elseif ($marks>= 70 && $marks <= 74) {
    //         $grade='A-';
    //         $gpa=3.50;
    //     }  elseif ($marks>= 75 && $marks <= 79) {
    //         $grade='A';
    //         $gpa=3.75;
    //     }  elseif ($marks>=80) {
    //         $grade='A+';
    //         $gpa=4.00;
    //     } else {
    //         $grade='Invalid';
    //         $gpa='Invalid';
    //     }
    //     echo "Subject {$subject} || Grade: {$grade} || GPA: {$gpa}";
    // }
    // result('AI',80);

   
    // function boroHat($txt) {
    //     echo "<span style='text-transform:uppercase;'>$txt</span>";
    // }
    // $input="hello my name is md. Sadman ahsan and i am a php developer";
    // boroHat($input);
    // function ozuHat($txt,$type) {
    //     if ($type=='b') {
    //         $hat='uppercase';
    //     } elseif ($type=='c') {
    //         $hat='lowercase';
    //     }
    //     echo "<span style='text-transform:{$hat};'>$txt</span>";
    // }
    // $input='hello my name is md. Sadman ahsan and i am a php developer';
    // ozuHat($input,'c');
    

    //message show

    // function message($txt,$type) {
    //     if ($type=='error') {
    //         $color='red';
    //     } elseif ($type=='success') {
    //         $color='green';
    //     }
    //     echo "<span style='background-color:{$color}'>$txt</span>";
    // }
    // $input='hello my name is md. Sadman ahsan and i am a php developer';
    // message($input,'success');
    
    // function info($name,$age,$skill) {
    //     echo "hello {$name} your age is: {$age} and your skill is: {$skill} <br>";
    // }
    // info('sadman',25,'Dev Ops');
    // info('hashem',21,'Go lang');
    // info('joshim',20,'Ruby');
    // function mul($number) {
    //     for($i=1;$i<=10;$i++) {
    //         $result=+$number*$i;
    //         echo "{$number}*{$i}={$result}<br>";
    //     }
    // }
    // mul(11);
    //box print

    function star($number) {
        for ($i=1; $i <=10 ; $i++) { 
            
            for ($j=1; $j<=10 ; $j++) { 
                echo "*";
            }
            echo "<br>";
        }
    }
    star(5);
 
?>
