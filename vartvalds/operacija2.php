<?php
include("include/session.php");
if ($session->logged_in) {
    ?>
    <html>
        <head>  
            <meta http-equiv="X-UA-Compatible" content="IE=9; text/html; charset=utf-8"/> 
            <title>Pirkinių pridėjimas</title>
            <link href="include/styles.css" rel="stylesheet" type="text/css" />
        </head>
        <body>
            <table class="center" >
                <tr><td>
                        <img src="pictures/logo.png"/>
                    </td></tr><tr><td> 
                        <?php
                        //Jei vartotojas prisijungęs
                        ?>
                        <table style="border-width: 2px; border-style: dotted;"><tr><td>
                                    Atgal į [<a href="index.php">Pradžia</a>]
                                </td></tr></table>               
                        <br> 
                        <div style="text-align: center;color:green">                   
                            <h1>Pridėti pirkinį.</h1>
                              <form action="/action_page.php">
  <label for="fname">Prekės pavadinimas:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="lname">Kaina:</label><br>
  <input type="text" id="lname" name="lname" value=""><br><br>
  <input type="submit" value="Pridėti">
</form>                 
                        </div> 
                        <br>  
                <tr><td>
                        <?php
                        //include("include/footer.php");
                        //?>
                    </td></tr>      
            </table>
        </body>
    </html>
    <?php
    //Jei vartotojas neprisijungęs, užkraunamas pradinis puslapis  
} else {
    header("Location: index.php");
}
?>