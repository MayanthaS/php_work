<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <input type="text" name="person">
        <button>Submit</button>
    </form>
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
        */
       $name =$_GET['person'];
       echo "Hello, " . $name;
    ?>
</body>
</html>