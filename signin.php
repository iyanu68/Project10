
<?Php
include 'head.php';
?>

    
     <style>
    body {
        background:rgba(218, 175, 118, 0.399);
    }
    </style>
    
    <body>

     
        <div class = "container" style ="background:rgba(214, 207, 170, 0.644); margin-left:25em; margin-top:6em; margin-right:30em; width:32%; padding-left:1.5em; padding-right:1.5em; padding-bottom:2em; border: 1px solid rgb(223, 232, 248);" >

                <p style = "padding-top:1em; font-size:1.7em; padding-left:5em; font-weight:bold; padding-bottom:-4em;">Sign in</p>

                <form action = "signindb.php" method = "POST">

                    <div class = form-group>

                        <label for = "email"> </label>
                        <input type = "email" class = "form-control" name = "email" id = "email" placeholder = "Email"/>

                        <label for = "password"> </label>
                        <input type = "password" class = "form-control" name = "password" id = "password" placeholder = "Password"/>
                    </div>
                
                
                <button class = "btn btn-primary" onclick = "submit()" style = "padding-left:9.5em; padding-right:9.5em; margin-bottom:1em;">Sign in </button><br>
                <a href = "#" style = "font-size:1em;">Forgot password?</a>
            
                </form>
            </div>

        <p style = "margin-left:29em; margin-top:1em; font-size:1em;"> New to Chart Hub? <a href = "signup.php"> Sign Up as a User</a> </p>
        
    </body>
    </html>

