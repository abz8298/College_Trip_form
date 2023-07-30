<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
        This is my first php website
        <?php
        define('PI3', 3.14);
            echo "Hello world and this is printed using php"; 
            // Single line comment
            /*
            This is multi line comment
            */

            $variable1 = 5;
            $variable2 = 2;
            echo $variable1;
            Echo $variable2; 

            echo $variable1 + $variable2;

            // Operator in PHP
            // Arithmetic Operator
            echo "<br>";
            echo "The value of variable1 + variable2 is ";
            echo "<br>";
            echo $variable1 + $variable2;
            echo "<br>";
            echo "The value of variable1 - variable2 is ";
            echo "<br>";
            echo $variable1 - $variable2;
            echo "<br>";
            echo "The value of variable1 * variable2 is ";
            echo "<br>";
            echo $variable1 * $variable2;
            echo "<br>";
            // Assignment Operator
            $newVar = $variable1;
            // $newVar += 1;
            // $newVar -= 2;
            // $newVar *= 2;
            $newVar /= 2;
            echo "The value of new variable is ";
            echo $newVar;
            echo "<br>";
            // Comparison Operator
            // echo "<h1> Comparison Operator </h1>";
            echo "The value of 1==4 is ";
            echo var_dump(1==4);
            echo "<br>";

            echo "The value of 1!=4 is ";
            echo var_dump(1!=4);
            echo "<br>";

            echo "The value of 1>=4 is "; //greater than equal to
            echo var_dump(1>=4);
            echo "<br>";

            echo "The value of 1<=4 is "; //less than equal to
            echo var_dump(1<=4);
            echo "<br>";
            // Increment/Decrement Operator
        //    echo $variable1++;
        //    echo $variable1--;
        //    echo ++$variable1;
           echo --$variable1;
           echo "<br>";
           echo $variable1;
           echo "<br>";

            // Logical Operator
            //  and (&&)
            //  or (||)
            //  xor
            //  !

            // $myVar = (true and true);
            // $myVar = (false and true);
            $myVar = (true and false);
            echo var_dump($myVar);
        ?>
            <?php
                // Data types in PHP
                // String
                // Integer
                // Float
                // Boolean
                // Array
                // Object
                echo "<br> Data types <br>";
                $var = "This is a string";
                echo var_dump($var);
                echo "<br>";

                $var = 67;
                echo var_dump($var);
                echo "<br>";

                $var = 67.1;
                echo var_dump($var);
                echo "<br>";

                $var = true;
                echo var_dump($var);

                echo "<br>";
                echo PI3;
            ?>
    </div>
</body>
</html>