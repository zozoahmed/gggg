<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>
</head>
<body>
    <form action="index2.html">
        <label for="name">Enter Your Name:</label>
        <input type="text" id="myName" name="name"><br><br>
        <label for="age">Enter Your Age:</label>
        <input type="text" id="myAge" name="age"><br><br>
        
        <label for="gender">Select Your Gender:</label>
        <br>
        <img Id="MyImg" src="1.jpg" width="300px" height="300px">
        <input type="radio" name="myGender" Id="male" value="male" checked />

        <img Id="MyImg2" src="2.jpg" width="300px" height="300px">
        <input type="radio" name="myGender"  Id="female" value="female" /><br />

        <label for="color">Choose a Color:</label>

        <select id="myFcolor">
        <option value="red">Red</option>
        <option value="blue">Blue</option>
        <option value="green">Green</option>
        </select>
        <br><br><br><br><br>
        <input type="submit" value="Submit" onclick="click_Submit()">
    </form>
    <script src="scriptCookies.js"></script>
    <script src="scriptPage1.js"></script>
</body>
</html>
