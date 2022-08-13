<!DOCTYPE html>
<html>
    <body>
        <!-- Form #2 -->
        Your Name is: <?php echo $_POST["name"];
        echo "<br>";
        ?>

        Your Email Address is: <?php echo $_POST["email"];
        echo "<br>";
        ?>  

        Your House Address is: <?php echo $_POST["address"];
        echo "<br>";
        ?>

        Your Phone Number is: <?php echo $_POST["phoneNum"];
        echo "<br>";
        ?>

        Your Current Classification is: <?php echo $_POST["grade"];
        echo "<br>";
        ?>

        Your Course is: <?php echo $_POST["subject"];
        echo "<br>";
        ?>

        <!-- Form #3 -->
        <hr>
        Your Username is: <?php echo $_POST["username"];
        echo "<br>";
        ?>

        Your Password is: <?php echo $_POST["password"];
        echo "<br>";
        ?>   
    </body>
</html>
 