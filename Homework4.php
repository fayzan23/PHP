<!-- Assignment 4 - COSC 2328 - Professor McCurry -->
<!-- Implemented by - Fayzan Bhatti -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Homework 4</title>
</head>
<body>
	
<!-- Form #1 -->
<p> Form #1 </p>
<caption> (Please Enter 3 Numbers from 0 to 100) </caption>
<form>
  Number 1: <input type="number" name="num1" min="0" max ="100"><br>
  Number 2: <input type="number" name="num2" min="0" max ="100"><br>
  Number 3: <input type="number" name="num3" min="0" max ="100"><br>
<br>
  Maximum: <output id="max"></output><br>
  Average: <output id="avg"></output><br>
  Minimum: <output id="min"></output><br> 
<br>
</form>		

<button type="button" id="submission">Submit</button>
<br>
<hr>

<script>
  var num1 = document.querySelector("[name='num1']");
  var num2 = document.querySelector("[name='num2']");
  var num3 = document.querySelector("[name='num3']"); 

  var max = document.getElementById("max");
  var avg = document.getElementById("avg");
  var min = document.getElementById("min"); 
  
  var button = document.getElementById("submission");
  
  button.addEventListener("click", function(){
    maximum();
    average();
    minimum();
  });

  function maximum() {
    max.textContent = Math.max(num1.value, num2.value, num3.value);  
  }
		
  function average() {
    avg.textContent = (+num1.value + +num2.value + +num3.value) / 3;
  }
	
  function minimum() {
    min.textContent = Math.min(num1.value, num2.value, num3.value);  
  }
</script>

<!-- Form #2 -->
<p> Form #2 </p><br>
<form action="information.php" method="post">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" required="required" placeholder="Name" />
    </div>
    
    <div>
        <label for="name">Email:</label>
        <input type="email" name="email" required="required" placeholder="Email" />
    </div>

    <div>
        <label for="name">House Address:</label>
        <input type="text" name="address" required="required" placeholder="House Address" />
    </div>

    <div>
        <label for="name">Phone Number:</label>
        <input type="tel" name="phoneNum" required="required" placeholder="Phone Number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"/>
    </div>

    <div>
        <label for="name">Current Classification:</label>
        <select name="grade" required="required">
            <option value="Freshman">Freshman</option>
            <option value="Sophomore">Sophomore</option>
            <option value="Junior">Junior</option>
            <option value="Senior">Senior</option>
        </select>
    </div>
    <br>
    <div>
        <label for="name">Course List:</label>
        <select name = "subject" multiple size = 5>
            <option value = "Ethical Analysis PHIL-2329">Ethical Analysis PHIL-2329</option>
            <option value = "Web Programming COSC-2328">Web Programming COSC-2328</option>
            <option value = "Intro to Computer Organization & Architecture COSC-2331">Intro to Computer Organization & Architecture COSC-2331</option>
            <option value = "Algorithms & Data Structures COSC-3327">Algorithms & Data Structures COSC-3327</option>
            <option value = "Intro to Astronomy ASTR-1311">Intro to Astronomy ASTR-1311</option>
        </select>
        <br>
        <br>
        <input type = "submit" name = "submit" value = Submit>
        <br>
        <hr>
    </div>

<!-- Form #3 -->
<p> Form #3 </p><br>
    <div>
        <label for="color">Username:</label>
        <input type="text" name="username" required="required" placeholder="Username"/>
    </div>

    <div>
        <label for="color">Password (Minimum of 8 Characters):</label>
        <input type="password" name="password" minlength="8" required="required" placeholder="Password"/>
    </div>

    <div>
        <label for="color">Background Color:</label>
        <input type ="color" name="bgcolor" value="#000000"/>
    </div>

    <div>
        <label for="color">Text Color:</label>
        <input type="color" name="textcolor" value="#ffffff"/><br>
    </div>
    <br>
    <input type = "submit" value="Sign in">

</form>
</body>
</html>