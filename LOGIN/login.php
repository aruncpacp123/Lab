
<html >
    <head>
        <link rel="stylesheet" type="text/css" href="../CSS/main.css">
        <link href="../images/download.png" rel="icon">
        <?php if(@$_GET['w'])
            {echo'<script>alert("'.@$_GET['w'].'");</script>';}
        ?>

    </head>
    <body style="overflow:auto;">
        

        <div class="logindiv">
            <div class="loginleft">
                <div class="head">
                    <h2 class="loginh2">STUDENT </h2>
                </div>
                <div class="head2">
                    <h2 class="loginh2">LOGIN</h2>
                </div>
            </div>
            <div class="loginright">
                <form method="post" action="script.php?q=index.php" class="form1">
                    <div class="top1">
                        <div class="loginh1">
                            <div class="letter">L</div>
                            <div class="letter">O</div>
                            <div class="letter">G</div>
                            <div class="letter">I</div>
                            <div class="letter">N</div>

                        </div>
                        <div id="line"></div>
                    </div>
                    
                    <div class="top2">
                        <input type="text" name="login_email" placeholder="Enter Email.."></input>
                    </div>
                    <div class="top2">
                        <input type="password" name="login_password" placeholder="Enter Password.."></input>
                    </div>
                   
                    
                    <div class="top1">
                        <div id="line"></div><br>
                        <input type="submit" value="Login" name="login">
                    </div>
                </form>
                <div class="login_bottom">
                    <div class="login_bottom_text">
                         <a href="signup.php"><h5>Sign Up</h5></a>
                    </div>
                    <div class="login_bottom_text">
                        <a href=""><h5>Forgot Password?</h5></a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
