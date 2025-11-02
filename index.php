<!DOCTYPE html>
<htm lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
    <form action="" method="GET">
        <input type="text" name="person">
        <button>Submit</button>
    </form>
    -->
    <?php
    /*
        echo "Hello, World!";
         print "<br>";
        print "hi there";
       
        echo "<br>";
        echo 20+25;
        print"<br>";

        //variable
      
        $name = "John";
        $age = 30;
        $grade = 85.5;

        echo $name;
        echo '<br>';
        echo $age;
        echo'<br>';
        echo $grade
        
       $name =$_GET['person'];
       echo "Hello, " . $name;
      
      //coments
        //single line comment
        /* multi line comment */
        # another single line comment
        
        //functions
        //predefined functions
        //strlen()
        /*
        $name = "John Doe";
        $length = strlen($name);
        echo "The length of the name is: " . $length;
        echo "<br>";
        echo $name;
        //str_word_count()
        $name = "John Doe";
        $wordcount = str_word_count($name);
        echo "<br>";
        echo "The number of words in the name is: " . $wordcount;

        //strrev()
        $name = "John Doe";
        $reversed = strrev($name);
        echo "<br>";    
        echo "The reversed name is: " . $reversed;
        //strpos()
        $name = "John Doe";
        $position =strpos($name,"Doe");
        echo "<br>";
        echo "The position of 'Doe' in the name is: " . $position;
        //str_replace()
        $name = "John Doe";
        $newname = str_replace("Doe","smith",$name);
        echo "<br>";
        echo "The new name is: " . $newname;
       
        ///operators

        //arthmetic operators
        
        echo 20 + 10;
        echo "<br>";
        echo 20 - 10;
        echo "<br>";
        echo 20 * 10;
        echo "<br>";
        echo 20 / 10;
        echo "<br>";
        echo 25 % 10;
        echo "<br>";
        echo 2 ** 10;
        echo "<br>";
        echo ((((5*3)-5)*3)/2);
        

        //assignment operators
        $num = 10;
        echo $num;
        echo "<br>";
        $num += 5; // $num = $num + 5
        echo $num;
      
        //comparison operators
        $a = 10;
        $b = 20;
        if($a == $b){
            echo "a is equal to b";
        }
        else{
            echo "a is not equal to b";
        }
        echo "<br>";
         $a = 10;
        $b = 20;
        if($a != $b){
            echo "true";
        }
        else{
            echo "false";
        }

        ///
         echo "<br>";
         $a = 10;
        $b = 20;
        if($a !== $b){
            echo "true";
        }
        else{
            echo "false";
        }
        ///
         
        /*
        == :- equal to value
        === :- identical(data type and value)
        /!= :- not equal to value
        /!== :- not identical(data type and value)
        
            echo "<br>";
            $a = 10;    
            $b = "10";
            if($a<$b){
                echo"true";
            }else{
                echo "false";
            }

             echo "<br>";
            $a = 10;    
            $b = 10;
            if($a<$b){
                echo"true";
            }else{
                echo "false";
            }
             
            //incremant operator
            //preincremant
            $x =10;
            echo $x;
            echo '<br>';
echo ++$x;

//IF statement
$x = 20;
            $y = 30;
            $z = 20;
            $w =10;
            if ($x == $y || $x == $z ){
                echo "x is equal to y or z";
                echo "<br>";
            echo '<br>';
            echo $x;
            echo '<br>';
            echo ++$x;

            //postincremant
            echo '<br>';
            echo $x;
            echo'<br>';
            echo $x++;
            echo '<br>';
            echo $x;
            // decremant operator
            $x =10;
            echo '<br>';
            echo $x;
            echo '<br>';
            echo --$x;//x =x-1 pre decremant
            echo '<br>';
            echo $x;

            //post decremant
            echo '<br>';
            $x = 10;
            echo '<br>';
            echo $x;
            echo '<br>';
            echo $x--;//post decremant x = x-1
            echo '<br>';
            echo $x;
              

            //logical operators
            //or operstor
            $x = 10;
            $y= 20;
            $z = 30;
            if($x == $y || $x==$z){
                echo 'Equal';
            }
            else  if($x != $y ||$x != $z ){
                echo 'Not Equal';
            }
            else{
                echo 'Not a valid statement';
            }

            //and operator
            $p= 10;
            $q= 20;
            $r=10;
            $s=10;
            if($p == $r && $q == $s){
                echo'<br>';
                echo 'both are equal to the same value';


            }else{
                echo "x is not equal to y or z";
                echo "<br>";
            }

            //xor
            if($p == $r xor $q == $p+10){
                echo '<br>';
                echo 'p equal to r or q equal to p+10 but not both';
                echo '<br>';
            }else{
                echo '<br>';
                echo 'either both are true or both are false';
            }

                //if elseif else
                $x =10;
                $y =20;
                if($x == $y){
                   echo '<br>';
                   echo 'x is equal to y';
                }
                else if($x > $y){
                    echo '<br>';
                    echo 'x is greater than y';
                }
                else if($x < $y){
                    echo '<br>';
                    echo 'x is less than y';
                }
                else{
                   echo '<br>';
                   echo 'x is not equal to y';
                }
                 
                //switch case
                $input = 6;
                switch($input){
                    case 1:
                        echo "You selected 1";
                        break;
                    case 2:
                        echo "You selected 2";
                        break;
                    case 3:
                        echo "You selected 3";
                        break;
                    case 4:
                        echo "You selected 4";
                        break;
                    case 5:
                        echo "You selected 5";
                        break;
                    default:
                        echo "Invalid input";
                }
 */
     //userdefined function
    $x=100;
     $y=50;
     function newCalc($x,$y){
       $z=$x+$y;
       echo $z;
     }
     newCalc($x, $y);
     echo"<br>";
    $q=250;
    function mulCalc($q){
        $ans=$q*3;
        echo"Answer ".$q;
    }
    mulCalc($q);


    ?>
</body>
<html