<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Exercise</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container py-5">

    <!-- HEADER -->
    <h1 class="text-center mb-5">
        <?php echo "PHP Exercise - Loops & Conditionals"; ?>
    </h1>

    <!-- ==== QUESTION 1 ==== -->
    <div class="card shadow task-card mb-4">
        <div class="card-body">

            <h2 class="card-title text-center mb-4">
                Question 1 - PHP Loops (0-10)
            </h2>

            <?php
                function num_loop() {
                    for ($i = 0; $i <= 10; $i++) {
                        echo "i is equal to $i <br>";
                    }
                }
            ?>

            <div class="output-box">
                <?php
                    num_loop();
                ?>
            </div>

        </div>
    </div>

    <!-- ==== QUESTION 2 ==== -->
    <div class="card shadow task-card mb-4">
        <div class="card-body">

            <h2 class="card-title text-center mb-4">
                Question 2 - Car Array (For loop)
            </h2>

            <?php
            function show_cars() {
                $cars = ['Jaguar F-Type', 'Supra', 'Porsche 911'];

                for ($i = 0; $i < count($cars); $i++) {
                    echo "The car is: " . $cars[$i] . "<br>";
                }
            }
            ?>

            <div class="output-box">
                <?php
                    show_cars();
                ?>
            </div>

        </div>
    </div>

    <!-- ==== QUESTION 3 ==== -->
    <div class="card shadow task-card mb-4">
        <div class="card-body">

            <h2 class="card-title text-center mb-4">
                Question 3 - Cars Array (Foreach loop)
            </h2>

            <?php
                function show_cars_foreach(){
                    $cars = ['Jaguar F-Type', 'Supra', 'Porsche 911'];

                    foreach ($cars as $car) {
                        echo "The car is: $car <br>";
                    }
                }
            ?>

            <div class="output-box">
                <?php
                    show_cars_foreach()
                ?>
            </div>

        </div>
    </div>

    <!-- ================= QUESTION 4 ================= -->
    <div class="card shadow task-card mb-4">
        <div class="card-body">

            <h2 class="card-title text-center mb-4">
                Question 4 - While Loops
            </h2>

            <?php
                $nums = 1;

                while ($nums <=5) {
                    echo "X is equal to $nums . <br>";
                    $nums++;
                }
            ?>

            <div class="output-box">
                <!-- Output goes here -->
            </div>

        </div>
    </div>

    <!-- ================= QUESTION 5 ================= -->
    <div class="card shadow task-card mb-4">
        <div class="card-body">

            <h2 class="card-title text-center mb-4">
                Question 5 - While Loops
            </h2>

            <?php
                $num_do = 6;

                do {
                    echo "Y is equal to: $num_do. <br>";
                    $num_do++;
                } while ($num_do <= 5);
            ?>

            <div class="output-box">
                
            </div>

        </div>
    </div>

    <!-- ================= QUESTION 6 ================= -->
    <div class="card shadow task-card mb-4">
        <div class="card-body">

            <h2 class="card-title text-center mb-4">
                Question 6 - Name Print
            </h2>

            <?php
                function printMYName($name) {
                    echo "My name is: $name <br>";
                }
            ?>

            <div class="output-box">
                <?php
                    printMyName("Dominic");
                ?>
            </div>

        </div>
    </div>

    <!-- ====== QUESTION 7 ====== -->
    <div class="card shadow task-card mb-4">
        <div class="card-body">

            <h2 class="card-title text-center mb-4">
                Question 7 - Multiplying Numbers
            </h2>

            <?php
                function multiply_num($para_one, $para_two) {
                   return $para_one * $para_two;
                }
            ?>

            <div class="output-box">
                <?php
                   echo multiply_num(4, 5);
                ?>
            </div>

        </div>
    </div>

    <!-- ===== QUESTION 8 ===== -->
    <div class="card shadow task-card mb-4">
        <div class="card-body">

            <h2 class="card-title text-center mb-4">
                Question 8 - Looping Arrays
            </h2>

            <?php
                function arrayLooper($fruits){
                    echo "Here are all your fruits: <br>";

                    foreach($fruits as $fruit){
                        echo "- $fruit <br>";
                    }
                }
            ?>

            <div class="output-box">
                <?php
                    $myFruits = ['Apple', 'Orange', 'Mango', 'Banana'];
                    arrayLooper($myFruits);
                ?>
            </div>

        </div>
    </div>
