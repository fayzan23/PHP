<!--In Class Assignment-2 – COSC 2328 – Professor McCurry -->
<!-- Implemented by - Fayzan Bhatti  -->
<!DOCTYPE html>
<html>

<head>
    <title>In-Class 2 PHP</title>
    <style>
    span 
    {
        color: blue;
        background-color: lightgrey;
    }
    body{
        background-color: aliceblue;
        color: olivedrab;
    }
</style>
</head>
<body>
<!-- Part 2 -->
    <?php
    $x = "This is information for my variable";
    function print_center($var)
    {
        echo"<br>";
        echo"<p style = \"text-align:center; color:coral\">
        $var</p>";
    }
    print_center($x);

// Part 3 
    $y = 7;
    function print_step($var)
    {
    for ($count = 0; $count <= $var; $count++)
    {
        echo"<p style = \"color:BlueViolet\">Let's do this again!</p>";
        echo"<br>";
    }
    }
    print_step($y);

// Part 4
    $anInt = 15;
    $aFloat = 2.17;
    function mathOps($var1, $var2)
    {
        $varsAdded = $var1 + $var2;
        $varsSubtracted = $var1 - $var2;
        $varsMult = $var1 * $var2;
        $varsDiv = $var1 / $var2;
        $varsMod = $var1 % $var2;
        echo "<span>We are doing math with $var1 and $var2<br> Their sum is: 
        $varsAdded<br>Their diff is: $varsSubtracted<br>Their product is:
        $varsMult<br>Their quotient is: $varsDiv<br>Thier mod is:
        $varsMod<br><br></span>";
    }
    mathOps($anInt, $aFloat);

// Part 5
    $numArray = array(7,25,12,20,1,9,3,15,23);
    function meanAndMedian ($array)
    {
    //mean  part of function
        $mean = 0;
        for ($i=0; $i < count($array); $i++)
        {
            // code...
            $mean += $array[$i];
        }
        $mean = $mean / count($array);
            echo "<span style=\"background-color:CornflowerBlue\">
            The average of the array elements is: $mean<br><span>";

    //median part of function
        $median = 0;
        if(count($array) % 2 == 0)
        {
            // sets median to the item in the center of the array if the array has an even number in it
            $median = ($array[count($array) / 2] + $array[(count($array) / 2) - 1]) / 2;
        }
        else
        {
            $median = $array[count($array) / 2];
        }
        echo "<span>The median is: $median <br><span>";
    }

    meanAndMedian ($numArray);

// Part 6
    // Create an array using the words from the following sentence:
    $wordArray = array("This", "is", "a", "very", "simple", "sentence", "that", 
    "is", "stored", "as", "an", "array. Big YEET", "testing", "more");

    function printSentence($wordArray)
    {
        // Use a for loop to determine the number of elements in the array
        for ($index = 0; $index < count($wordArray); $index++)
        {
            // Create a variable that will determine the modulo
            $arrayCount = $index % 3;

            // Use the switch function to print at each position
            // Create a function to print the sentence using the various alignments using different colors
            switch ($arrayCount)
            {
                case 0:
                    echo "<p style =\"color:Blue; text-align: left;\">$wordArray[$index]<br></p>";
                    break;
                case 1:
                    echo "<p style =\"color:Green; text-align: center;\">$wordArray[$index]<br></p>";
                    break;
                case 2:
                    echo "<p style =\"color:Red; text-align: right;\">$wordArray[$index]<br></p>";
                    break;
            }
        }
        // Call the function
        printSentence($wordArray);
    }


// Part 7

// Create a variable with the array size, for this example use 19
$arraySize = 19;
$arrayNumber = array();
function printArray($array, $arraySize)
{
    for ($index = 0; $index < $arraySize; $index++)
    {
        // Create a function to generate a random array, for the purpose of this example between 0 and 37
        $randomNum = rand(0,37);
        array_push($array,$randomNum);
    }
    for ($index = 0; $index < count($array); $index++)
    {
        // Use an if statement to color the numbers less than 7 as GoldenRod
        if ($array[$index] < 7)
        {
            echo "<p><span style =\"color:GoldenRod;\">$array[$index]</span></p>";
        }
        // Use an elseif statement to color the numbers less than 15 as Indigo
        else if ($array[$index] < 15)
        {
            echo "<p><span style = \"color:Indigo;\">$array[$index]</span></p>";
        }
        // // Use an else statement to color any other number as LightSeaGreen
        else
        {
            echo "<p><span style = \"color:LightSeaGreen;\">$array[$index]</span></p>";
        }
    }
}
    // Call the function
    printArray($arrayNumber,$arraySize);
     ?>
    </body>
  </html>