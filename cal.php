<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic_cal</title>
</head>
<body>
    <form action="" method="GET">
         <label for="">Enter First Number:</label>
         <input type="text" name="num1" placeholder="Enter first number"><br><br>
         <label for="">Enter Second Number:</label>
         <input type="text" name="num2" placeholder="Enter second number"><br><br>

         <select name="operator">
            <option value="">Select</option>
            <option value="add">Add</option>
            <option value="sub">Subtract</option>
            <option value="mul">Multiply</option>
            <option value="div">Divide</option>
        </select> <br><br>
<button type="submit" name="submit">Calculate</button>


    </form>
       
    <?php
         if(isset($_GET['submit'])){
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $operator = $_GET['operator'];
             //display answer 
             switch($operator){
                case'add':
                    echo $num1+$num2;
                    break;
                case'sub':
                    echo $num1-$num2;
                    break;
                case'mul':
                    echo $num1*$num2;
                    break;  
                case'div':
                    echo $num1/$num2;
                    break;
                default:
                    echo "Invalid operator";
                    break;
             }
        }

        ?>
</body>
</html>