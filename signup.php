
    <?php
    
    include 'head.php';
    
    ?>
    
    <style>
    body {
        background:rgba(218, 175, 118, 0.399);
    }
    </style>
    
    <body>
       
        </label>
        <div class = "container-fluid" style = "background:rgba(214, 207, 170, 0.644); margin-left:25em; margin-right:30em; width:32%; padding-left:1.5em; padding-right:1.5em; padding-bottom:2em; border: 1px solid rgb(223, 232, 248);" >
            

                <p style = "padding-top:1em; font-size:1.7em; padding-left:2em; font-weight:bold;">Sign up as a User</p>

                <form action="signupdb.php" method="POST">
                    
                    <div class = form-group>

                        <label for ="first name"> </label>
                        <input type = "text" class = "form-control" name = "firstname" id = "firstname" placeholder = "First Name" />
                        
                        <label for = "last name"> </label>
                        <input type = "text" class = "form-control" name = "lastname" id = "lastname" placeholder = "Last Name"/>
                        
                        <label for = "country"></label>
                        <select class = "form-control" select id = "country" name = "country" placeholder = "Country">
                            <option >Country</option>
                            <option >Afghanistan</option>
                            <option>Albania</option>
                            <option>Algeria</option>
                            <option>Andora</option>
                            <option>Angola</option>
                            <option>Antigua and Barbuda</option>
                            <option>Argentina</option>
                            <option>Armenia</option>
                            <option>Australia</option>
                            <option>Austria</option>
                            <option>Azerbaijan</option>
                            <option>Bahamas</option>
                            <option>Bahrain</option>
                            <option>Bangladesh</option>
                            <option>Barbados</option>
                            <option>Belarus</option>
                            <option>Belgium</option>
                            <option>Belize</option>
                            <option>Benin</option>
                            <option>Bhutan</option>
                            <option>Bolivia</option>
                            <option>Bosnia and Herzegovina</option>
                            <option>Botswana</option>
                            <option>Brazil</option>
                            <option>Brunei</option>
                            <option>Bulgaria</option>
                            <option>Burkina Faso</option>
                            <option>Burundi</option>
                            <option>Cabo Verde</option>
                            <option>Cambodia</option>
                            <option>Cameroon</option>
                            <option>Canada</option>
                            <option>Central African Republic</option>
                            <option>Chad</option>
                            <option>Chile</option>
                            <option>China</option>
                            <option>Colombia</option>
                            <option>Comoros</option>
                            <option>Congo</option>
                            <option>Costa Rica</option>
                            <option>Croatia</option>
                            <option>Cuba</option>
                            <option>Cyprus</option>
                            <option>Czech Republic</option>
                            <option>Denmark</option>
                            <option>Djibouti</option>
                            <option>Dominica</option>
                            <option>Dominican Republic</option>
                            <option>East Timor (Timor-Leste)</option>
                            <option>Ecuador</option>
                            <option>Egypt</option>
                            <option>Equatorial Guinea</option>
                            <option>Ethiopia</option>
                            <option>Finland</option>
                            <option>France</option>
                            <option>Gabon</option>
                            <option>Gambia</option>
                            <option>Georgia</option>
                            <option>Germany</option>
                            <option>Ghana</option>
                            <option>Greece</option>
                            <option>Guinea</option>
                            <option>Guinea-Bissau</option>
                            <option>Haiti</option>
                            <option>Honduras</option>
                            <option>Hungary</option>
                            <option>Iceland</option>
                            <option>India</option>
                            <option>Indonesia</option>
                            <option>Iran</option>
                            <option>Iraq</option>
                            <option>Ireland</option>
                            <option>Israel</option>
                            <option>Italy</option>
                            <option>Japan</option>
                            <option>Jordan</option>
                            <option>Kenya</option>
                            <option>Kiribati</option>
                            <option>Korea (North and South)</option>
                            <option>Kuwait</option>
                            <option>Lebanon</option>
                            <option>Lesotho</option>
                            <option>Liberia</option>
                            <option>Libya</option>
                            <option>Lithuania</option>
                            <option >Madagascar</option>
                            <option>Malawi</option>
                            <option>Malaysia</option>
                            <option>Mali</option>
                            <option>Mexico</option>
                            <option>Morocco</option>
                            <option>Mozambique</option>
                            <option>Namibia</option>
                            <option>Netherlands</option>
                            <option>New Zealand</option>
                            <option>Niger</option>
                            <option>Nigeria</option>
                            <option>North Korea</option>
                            <option>Norway</option>
                            <option>Pakistan</option>
                            <option>Philippines</option>
                            <optio>Poland</option>
                            <option>Portugal</option>
                            <option>Qatar</option>
                            <option>Russia</option>
                            <option>Rwanda</option>
                            <option>Saudi Arabia</option>
                            <option>Senegal</option>
                            <option>Sierra Leone</option>
                            <option>Singapore</option>
                            <option>South Africa</option>
                            <option>South Korea</option>
                            <option>South Sudan</option>
                            <option>Spain</option>
                            <option>Sudan</option>
                            <option>Sweden</option>
                            <option>Switzerland</option>
                            <option>Syria</option>
                            <option>Taiwan</option>
                            <option>Tanzania</option>
                            <option>Thailand</option>
                            <option>Togo</option>
                            <option>Tunisia</option>
                            <option>Turkey</option>
                            <option>Uganda</option>
                            <option>Ukraine</option>
                            <option >United Arab Emirates</option>
                            <option>United Kingdom</option>
                            <option>United States</option>
                            <option>Yemen</option>
                            <option>Zambia</option>
                            <option>Zimbabwe</option>
                        </select>
                        
                        <label for = "email"> </label>
                        <input type = "email" class = "form-control" name = "email" id = "email" placeholder = "Email"/>

                        <label for = "password"> </label>
                        <input type = "password" class = "form-control" name = "password" id = "password" placeholder = "Password"/>

                        <label for = "confirm password"> </label>
                        <input type = "password" class = "form-control" name = "confirm_password" id = "confirm_password" placeholder = "Confirm password"/>

                    </div>

                    <input type="checkbox" id="agreeCheckbox">
                        <label for="agreeCheckbox">I have read and agree with <a href="#">Terms of Use</a></label>
               
                
                    <button class="btn btn-primary" type="submit" style="padding-left:10em; padding-right:8em; margin-top:1em;">Sign Up</button>
            </form> 
        </div>
        
        <p style = "margin-left:30em; margin-top:1em;"> Already have an account? <a href = "signin.php"> Sign in </a> </p>
    </body>
    </html>