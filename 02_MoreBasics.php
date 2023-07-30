<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            padding: 23px;
        }
        .container{
            max-width: 80%;
            background-color: rgb(221, 123, 123);
            color: white;
            margin: auto;
            
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lets learn about PHP</h1>
        <p>Your party status is here:</p>
        <?php
          $age = 34;
          if($age>18){
            echo "You can go to the party";
          }
          else if($age == 7){
            echo "You are 7 years old";
          }
          else{
            echo "You can not go to the party";
          }

        //   Array in PHP
        $languages = array("Python", "Java", "PHP");
        // echo $languages[1];
        // echo count($languages);


        // Loops in PHP
         $a = 0;
         while ($a <= 10) {
            echo "<br>The value of a is: ";
            echo $a;
            $a++;
         }

        //  Iterating arrays in PHP using while loop
         $a = 0;
         while ($a < count($languages)) {
            echo "<br>The value of language is: ";
            echo $languages[$a];
            $a++;
         }

        //  Do while loop
        $a = 20;
        do {
            echo "<br> The value of a is: ";
            echo $a;
            $a++;
        } while ($a < 10);

        //  For loop
        for ($a=0; $a < 10; $a++) { 
            echo "<br> The value of a from the for loop is: ";
            echo $a;
        }

        // Foreach loop
        foreach ($languages as $value){
            echo "<br>The value is ";
            echo $value;
        }

        function print5(){
            echo "<br>FIVE";
        }
        print5();
        print5();
        print5();
        print5();
        print5();

        function print_number($number){
            echo "<br> Your number is ";
            echo $number;
        }
        print_number(45);
        
        ?>
    </div>
</body>
</html>