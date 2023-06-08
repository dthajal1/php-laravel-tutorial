<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <gpa>Document</gpa>
</head>
<body>

    <?php 
    // include "header.html" 
    ?>

    <?php 
        // include "resource.php";
        // sayHi();
        // echo $name;
    ?>

    <?php 
        class Student {
            private $name;
            private $gpa;

            function __construct($name, $gpa) {
                $this->name = $name;
                $this->gpa = $gpa;
            }

            function hasHonors() {
                if ($this->gpa > 3.5) {
                    return "true";
                } else {
                    return "false";
                }
            }

            function getName() {
                return $this->name;
            }
            // setters and getters
        }

        $Student1 = new Student("JK Rowling", 4.0);
        $Student2 = new Student("Some Student", 3.3);
        $student3 = new Student("Hello", 3.7);

        echo $Student1->hasHonors();

        
    ?>
    
    <?php 
    // variables
        // $userName = "Diraj";
        // echo "<p>Welcome $userName!</p>";
    // data types
        // $greeting = "Hello World!"; // string
        // $age = 30; // integer
        // $gpa = 3.5; // decimal or float
        // $isMale = true; // boolean
        // $nothing = null; // no value
    // working with strings
        // echo strtolower($greeting);
        // strtoupper(string)
        // strlen(string)
        // $greeting[0]
        // echo str_replace("Hello", "My", $greeting); // replaces the string Hello with My in variable greeting
        // $world = substr($greeting, 6, 5);
    // arrays
        // $myArr = array("Diraj", "Dipika", 12);
        // echo $myArr[0];
        // echo count($myArr);
    // associative arrays (Dictionaries in python)
        // $grades = array("Tom"=>"A+", "Jim"=>"B+", "Tim"=>"A-");
        // echo $grades["Tom"];
    // functions, if else, switch
        // function sayHi() {
        //     echo "Hello user!";
        //     return 10;
        // }

        // if (true) {
        //     $ten = sayHi();
        //     echo $ten;
        // }
    // while, for
        // $counter = 0;
        // while ($counter < 5) {
        //     echo $counter;
        //     $counter++;
        // }

        // for ($i = 0; $i < 5; $i++) {
        //     echo "Hello";
        // }
    ?>

    <!-- Getting users input -->
    <!-- <form action="site.php" method="post"> -->
        <!-- Your name: <input type="text" name="firstName">
        Your password: <input type="password" name="pass"> -->

        <!-- All the checked values will be stored inside fruit array -->
        <!-- Apples: <input type="checkbox" name="fruits[]" value="apple">
        Oranges: <input type="checkbox" name="fruits[]" value="orange">
        Pears: <input type="checkbox" name="fruits[]" value="pear">
        <button type="submit">Submit</button> -->
    <!-- </form> -->

    <!-- Your password is  -->
    <?php 
    // echo $_GET["firstName"] ;
    // echo $_POST["pass"];
    // $fruits = $_POST["fruits"];
    // echo $fruits[0];
    ?>

</body>
</html>