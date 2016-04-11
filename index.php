<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>App Deployement on Heroku</title>
</head>
<body>
    <label id="lbl">Enter Your Name: </label>
    <input type="text" id="tb"  />
    <button id="btn" onclick="myFunction()">Click</button>
    <script>
        var text = document.getElementById("tb").value;

        function myFunction()
        {            
                alert("HELLO " + text);                        
        }

    </script>
</body>
</html>