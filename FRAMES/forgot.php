<!DOCTYPE html>
<html lang="en" style="color-scheme:dark !important">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP CSS15</title>
    <style>
   body,html{

   /* The image used */
   background-image: url(../images/banner.jpg);
   /* Full height */
   
   /* Center and scale the image nicely */
   background-position: center;
   background-repeat: no-repeat;
   background-size: cover;
   display:flex;
   flex-direction: row;
   width:100%;
 }
 .div1{
   width: 450px;
   height:fit-content;
   align-self: center;
   justify-content:center;
   display: inline-block;
   /* position: ;*/
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    /*margin: ;*/
    margin-left:430px;
    background-color:white;
    overflow-x:hidden;
    overflow-y:auto;
    margin-top:100px;
    /*overflow:scroll;*/
}
h1{
   padding:15px;
   text-align: center;
   font: 1em sans-serif;
   transform: scale(2);
   color: black;
}
hr{
   width: 425px;
}
#line{
   width: 425px;
   height: 2px;
   background-color: rgb(238, 235, 238);
   align-self: center;
}
.top1{
   margin: 5px;
   display: flex;
   flex-direction: column;
}
input[type=date]{
   background-color: rgb(243, 239, 239);
   width: 300px;
   height: 25px;
   border-radius: 50px;
}
.top2{
   margin-left: 10px;
   margin-right: 20px;
}
label{
   font-family: sans-serif;
   height: 0;
   margin: 0;
   padding: 0;
   color:black;
}
h5{
   height: 1px;
}
input[type=text]{
   width: 100%;
   padding: 10px 20px;
   border: 0px;
   border-radius:50px;
   box-sizing: border-box;
   background-color: rgb(231, 229, 229);
   color:black;
 }
 input[type=date]{
   width: 100%;
   padding: 18px 20px;
   border: 0px;
   border-radius:50px;
   box-sizing: border-box;
   background-color: rgb(231, 229, 229);
   color:black;
 }
 input[type=email]{
   width: 100%;
   padding: 10px 20px;
   border: 0px;
   border-radius:50px;
   box-sizing: border-box;
   background-color: rgb(231, 229, 229);
   color:black;
 }
 input[type=password]{
   width: 100%;
   padding: 10px 20px;
   border: 0px;
   border-radius:50px;
   box-sizing: border-box;
   background-color: rgb(231, 229, 229);
   color:black;
 }
 input[type=submit]{
   width: 100%;
   padding: 15px;
   border: solid white;
   background-color: rgb(49,49,49);
   color: white;
 }
 select{
    width: 100%;
   padding: 10px 20px;
   border: 0px;
   border-radius:50px;
   box-sizing: border-box;
   background-color: rgb(231, 229, 229);
   color:black;
}
::placeholder{
    color:black;
}

    </style>
    <?php if(@$_GET['w'])
            {echo'<script>alert("'.@$_GET['w'].'");</script>';}
        ?>
        <script>
        /*function department(){
            var number=document.getElementById("iid").value; 
            alert(number) ;
        }*/
        function course(str) {

  if (str == "") {
    //var data="<input type='text id='inp9' placeholder='Enter Department Id..' name='teachdid'></input>";
    //document.getElementById("txtHint").innerHTML = data;
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","getcourse.php?q="+str,true);
    xmlhttp.send();
    
  }
}
function course4(){
            var number=document.getElementById("studcid").value; 
            document.getElementById("inp12").value=number;
        }
    </script>
    </head>
    <body>
    
    <div class="div1">
        <form action="script.php" method="post" name="studentsignupform">
        <div class="top1">
            <h1><strong>FORGOT PASSWORD</strong></h1>
            
            <div id="line"></div>
        </div>
        <div class="top2">
            <label for="inp4"><h5>Email</h5></label>
            <input type="email" id="inp4" placeholder="Enter Email" name="email"></input>
        </div>
        <div class="top2">
            <label for="inp4"><h5>Phone number</h5></label>
            <input type="text" id="inp4" placeholder="Enter Phone number" name="phone"></input>
        </div>
        <div class="top2">
            <label for="inp5"><h5>USER</h5></label>
            <select name="user" id="">
                <option value="0">Select</option>
                <option value="student">Student</option>
                <option value="teacher">Teacher</option>
            </select>
        </div>
        <div class="top2">
            <label for="inp5"><h5>New Password</h5></label>
            <input type="password" id="inp5" placeholder="Enter Password" name="passwd"></input>
        </div>
        
        <div class="top1">
            <div id="line"></div><br>
            <input type="submit" value="SUBMIT" name="passbtn">
        </div>
    </form>
    <button style="background-color:inherit;margin-left: 10px;margin-top: 5px;margin-bottom: 5px;color:black;"><a href="home.php" style="text-decoration:none;color:inherit;">back</a></button>

    </div>
</body>
</html>