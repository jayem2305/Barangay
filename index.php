<!DOCTYPE html>
<html>
<head>
    <title>Certificate Generator</title>
</head>
<body>

<h1>Certificate Generator</h1>

<form action="generate_certificate.php" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>

    <label for="course">AGE:</label><br>
    <input type="text" id="age" name="age"><br>

    <label for="date">Date:</label><br>
    <input type="date" id="date" name="date"><br><br>

    <label for="date">Address:</label><br>
    <textarea  id="addres" name="address" rows="4" cols="50"></textarea>


    <input type="submit" value="Generate Certificate">
</form>

</body>
</html>
