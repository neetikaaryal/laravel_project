<!DOCTYPE html>
<html>
<head>
    <title>Form Page</title>
</head>
<body>
    <form action="/submit" method="post">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname"><br><br>
        <x-button/>
    </form> 
</body>
</html>