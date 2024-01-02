<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>
    <script>
        
    </script>
    <style>
        .sdiv1{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-self: center;
            margin:auto;
            width:50%;
            border: 4px black solid;
            text-align: center;
            background-color:  rgb(186, 186, 186);/*antiquewhite*/
            margin-top: 5em;
        }
        
        .sdiv2{
            height: 1em;
            background-color: black;
            margin-bottom: 3px;
            
        }
        h1{
            text-align: center;
            color: rgb(228, 28, 28);
            margin: 0;
        }
        .div3{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-self: center;
            padding: 0;
            margin: 0;
            /*margin-top: 2px;*/
            border-bottom: 3px rgb(208, 0, 0) solid;
            border-top: 3px black solid;
        } 
        .div3 input[type=text]{
            width: 80%;
            height: 2.8em;
            margin-bottom: 10px;
           
            border: 2px rgb(114, 55, 55) solid;
            background-color: rgba(85, 88, 88, 0.377);
            border-radius: 5px;
            padding-left: 10px;
        }
        .div3 label h5{
            font-size:15px;
            width:100% !important;
            margin: 0% ;
            margin-bottom: 10px;
        }
        
        .div4{
            width: 100%;
            height: 5em;
            margin-top: 5px;
        }
        .div5{
            width:8px;
            background-color: black;
        }
        .div6{
            margin-top: 1px;
            /*border-bottom:3px rgb(228, 0, 0) solid;*/
            width: 100%;
        }
        label h5{
            font-size:15px;
            width:100% !important;
            margin: 0% ;
            margin-bottom: 10px;
            margin-top: 5px;
        }
        input[type=text],input[type=number],input[type=email]{
            width: 80%;
            height: 2.8em;
            margin-bottom: 10px;
            border: 2px rgb(114, 55, 55) solid;
            background-color: rgba(255, 255, 255, 0.377);
            border-radius: 5px;
            padding-left: 10px;
        }
        ::placeholder{
            color:rgb(233, 17, 17);
        }
        select{
            width: 80%;
            height: 3em;
            margin-bottom: 10px;
            border: 2px rgb(114, 55, 55) solid;
            background-color: rgba(85, 88, 88, 0.377);
            border-radius: 5px;
            padding-left: 10px;
        }
        option{
            background-color: white;
            color: red;
        }
        textarea{
            width: 70%;
            height: 2.2em;
            margin-bottom: 10px;
            border: 2px rgb(114, 55, 55) solid;
            background-color: rgba(255, 255, 255, 0.377);
            border-radius: 5px;
            padding-left: 10px;
            padding-top: 10px;
        }
        button{
            width: 20%;
            min-height: 3.1em;
            margin: 20px;
            border-radius: 5px;
            background-color: blanchedalmond;
        }
    </style>
     <?php if(@$_GET['w'])
            {echo'<script>alert("'.@$_GET['w'].'");</script>';}
        ?>
</head>
<body>
    <?php
        if(@$_GET['q'])
        {
            $sign=@$_GET['q'];//it will have value if this page is loaded via login.php link
        }
        else{
            $sign='';//it will blank if this page is loaded via teacher student add link
        }
    ?>
    <div class="sdiv1">
        <form action="reg.php?q=<?=$sign?>" method="post">
            <h2>STUDENT REGISTRATION</h2>
            <div class="sdiv2"></div>

            <div class="div3">
                <div class="div4">
                    <label for="inp1"><h5>Ktu Id</h5></label>
                    <input type="text" name="ktuid" id="inp1" placeholder="Enter Ktu Id" required>
                </div>
                <div class="div5"></div>
                <div class="div4">
                    
                    <label for="inp2"><h5>Roll No</h5></label>
                    <input type="text" name="rollno" id="inp2" placeholder="Enter Roll No" required>
                </div>
            </div>
            <div class="div3">
                <div class="div4">
                    <label for="inp3"><h5>Name</h5></label>
                    <input type="text" name="name" id="inp3" placeholder="Enter Name" required>
                </div>
            </div>
            <div class="div3">
                <div class="div4">
                    <label for="inp4"><h5>Gender</h5></label>
                    <select name="gender" id="inp4" required>
                        <option value="0" selected disabled>Select an option</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                <div class="div5"></div>
                <div class="div4">
                    <label for="inp5"><h5>Age</h5></label>
                    <input type="text" name="age" id="inp5" placeholder="Enter Age" required>
                </div>
                <div class="div5"></div>
                <div class="div4">
                    <label for="inp6"><h5>Semester</h5></label>
                    <select name="sem" id="inp6" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </div>
            <div class="div3">
                <div class="div4">
                    <label for="inp7"><h5>Address</h5></label>
                    <textarea name="address" id="inp7" cols="25" rows="5" placeholder="Enter Address" required></textarea>
                </div>
            </div>
            <div class="div3">
                <div class="div4">
                    <label for="inp8"><h5>Phone Number</h5></label>
                    <input type="number" name="phno" id="inp8" placeholder="Enter Phone Number" required>
                </div>
                <div class="div5"></div>
                <div class="div4">
                    <label for="inp9"><h5>Email</h5></label>
                    <input type="email" name="email" id="inp9" placeholder="Enter Email" required>
                </div>
            </div>
            <div class="div3">
                <button type="submit" name="submitted">Submit</button>
                <button type="reset">RESET</button>
            </div>
        </form>
     </div>
     <!-- <div class="sdiv1">
        <form action="reg.php" method="post">
            <h2>STUDENT REGISTRATION</h2>
            <div class="sdiv2"></div>

            <div class="div3">
                <div class="div4">
                    <label for="inp1"><h5>Ktu Id</h5></label>
                    <input type="text" name="ktuid" id="inp1" placeholder="Enter Ktu Id" required>
                </div>
                <div class="div5"></div>
                <div class="div4">
                    
                    <label for="inp2"><h5>Roll No</h5></label>
                    <input type="text" name="rollno" id="inp2" placeholder="Enter Roll No" required>
                </div>
            </div>
            <div class="div6">
                <label for="inp3"><h5>Name</h5></label>
                <input type="text" name="name" id="inp3" placeholder="Enter Name" required>
            </div>
            <div class="div3">
                <div class="div4">
                    <label for="inp4"><h5>Gender</h5></label>
                    <select name="gender" id="inp4" required>
                        <option value="0" selected disabled>Select an option</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                <div class="div5"></div>
                <div class="div4">
                    <label for="inp5"><h5>Age</h5></label>
                    <input type="text" name="age" id="inp5" placeholder="Enter Age" required>
                </div>
                <div class="div5"></div>
                <div class="div4">
                    <label for="inp6"><h5>Semester</h5></label>
                    <select name="sem" id="inp6">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </div>
            <div class="div6">
                <label for="inp7"><h5>Address</h5></label>
                <textarea name="address" id="inp7" cols="25" rows="5" placeholder="Enter Address" required></textarea>
            </div>
            <div class="div3">
                <div class="div4">
                    <label for="inp8"><h5>Phone Number</h5></label>
                    <input type="number" name="phno" id="inp8" placeholder="Enter Phone Number" required>
                </div>
                <div class="div5"></div>
                <div class="div4">
                    <label for="inp9"><h5>Email</h5></label>
                    <input type="email" name="email" id="inp9" placeholder="Enter Email" required>
                </div>
            </div>
            <button type="submit" name="submitted">Submit</button>
            <button type="reset">RESET</button>
        </form>
     </div> -->
</body>
</html>