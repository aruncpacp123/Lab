<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button{
            color:white;
            background-color:blue;
            border:3px red;
            border-radius:10px;
            padding:10px;
        }
        .div{
            height:50px;
            background-color:white;
            margin:20px 0px;
        }
    </style>
    <script>
        function change()
        {
            const random="#"+Math.floor(Math.random()*12345689).toString(10);
            document.getElementById('body').style.background=random;
        }
        function display()
        {
            var a=document.getElementById('a').style.display;
            if(a=='none')
            {
                document.getElementById('a').style.display="block";
            }
            else
            {
                document.getElementById('a').style.display="none";
            }
        }
    </script>
</head>
<body id="body">
    <p id="a">This is a paragraph</p>
    <button onclick="document.getElementById('a').innerHTML='Button is clicked'">Click here</button>
    <br><br><br>
    <div class="div1">
        <button onclick="document.getElementById('a').style.fontSize='50px'">Zoom In +</button>
        <button onclick="document.getElementById('a').style.fontSize='20px'">Zoom Out -</button>
    </div>
    <br><br><br>
    <button onclick="change()">Change Color</button>
    <br><br><br>
    <button onclick="display()">Display</button>
    <button onclick="display()">Display</button>
</body>
</html>