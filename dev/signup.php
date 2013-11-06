<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/homepage.css" type="text/css" rel="stylesheet" />
        <title>Yahtzee Online</title>
    </head>
    <body id="signupbody">
        
        <header>
            <a href="homepage.php"><img src="images/yahtzee4.png" alt="Yahtzee Online"/></a>
            Brought to you by your friendly villagehood <br/>Lords of the Code
        </header>
        

        <div id="signingup">
        <form method="POST" action="homepage.php" >
            <fieldset>
                <legend><h3>Yahtzee Sign-Up</h3></legend>
            <label> First Name  </label><input type="text" name="FirstName"/>  <br/>
            <label> Last Name</label><input type="text" name="LastName"/>  <br/>
            <label> Username </label><input type="text" name="UserName" /> <br/>
            <label> Password</label><input type="password" name="Password"/><br/>
            <label> Date of Birth</label><input type ="Date"/><br/>
            <!--Calendar info on p221-->
            <label> Email</label><input type="text" name="Email"/> <br/>        
            <label>Choose a Security Question</label><br/>
            <select name="security_question">
            <option value="first_school">What was the name of your first school?</option>
            <option value="pet_name">What was the name of your first pet?</option>
            <option value="car_model">What was the model of your first car?</option>
            <option value="maiden_name">What is your mother's maiden name?</option>
            </select>
            <br/>
            <br/>
            <label>Answer</label><input type="text" name="Answer" /> <br/>
            <p id="signupsubmit"><input type="submit" value="Sign Up!" /></p>
            </fieldset>
        </form>
        </div>

        <footer>
            <p> The original YAHTZEE&trade; game is a trademark of Hasbro, Inc.<br />
            Credit goes to <a class="footer" href="http://www.YahtzeeScoresheet.com"> YahtzeeScoresheet.com</a> This is a free service to provide an playing experience that is enjoyable.<br />
            The dice aren't included. For concerns or questions please feel free to <a class="footer" href="http://yahtzeescoresheet.blogspot.com">BLOG HERE.</a><br />
            <form method="get" action="http://www.google.com/custom" target="google_window">
                <a href="http://www.google.com/">  </a>   
                <img src="images/google.gif" alt="Google">
                <label for="sbi" style="display: none">Enter your search terms</label>
                <input type="text" name="q" size="31" maxlength="255" value="" id="sbi">
                <label for="sbb" style="display: none">Submit search form</label>
                <input type="submit" name="sa" value="Search" id="sbb">
<!--                <input type="hidden" name="client" value="pub-2083499070704295">
                <input type="hidden" name="forid" value="1">
                <input type="hidden" name="channel" value="6530270764">
                <input type="hidden" name="ie" value="ISO-8859-1">
                <input type="hidden" name="oe" value="ISO-8859-1">
                <input type="hidden" name="cof" value="GALT:#3D81EE;GL:1;DIV:#c3040c;VLC:32527A;AH:center;BGC:FFFFFF;LBGC:ffffff;ALC:c3040c;LC:c3040c;T:000000;GFNT:CCCCCC;GIMP:CCCCCC;LH:50;LW:180;L: http://www.yahtzeescoresheet.com/images/YahtzeeScoreSheetlogo.gif;S:http://www.yahtzeescoresheet.com;FORID:1 ">
                <input type="hidden" name="hl" value="en">   -->
                <p>&copy; 2013 Lords of the Code</p>
            </form>
        </footer>
    </body>
</html>