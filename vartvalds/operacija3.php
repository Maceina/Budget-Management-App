<?php
include("include/session.php");
//Jei prisijunges Administratorius ar Valdytojas vykdomas operacija3 kodas
if ($session->logged_in && ($session->isAdmin() || $session->isManager())) {
    ?>    
    <html>  
        <head>  
            <meta http-equiv="X-UA-Compatible" content="IE=9; text/html; charset=utf-8"/> 
            <title>Limitu patvirtinimas</title>
            <link href="include/styles.css" rel="stylesheet" type="text/css" />
            <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
        </head>
        <body>       
            <table class="center"><tr><td>
                        <img src="pictures/logo.png"/>
                    </td></tr><tr><td> 
                        <?php
                        include("include/meniu.php");
                        ?>                   
                        <table style="border-width: 2px; border-style: dotted;"><tr><td>
                                    Atgal į [<a href="index.php">Pradžia</a>]
                                </td></tr></table>               
                        <br> 
                        <div style="text-align: center;color:green">                   
                            <h1>Limitų patvirtinimas</h1>
                            <table>
  <tr>
    <th>Vartotojo vardas</th>
    <th>Limitas</th>
    <th> <button type="button">Taip</button>  <button type="button">Ne</button> </th>
  </tr>
  <tr>
    <td>Alfreds Futterki</td>
    <td>5000</td>
    <th> <button type="button">Taip</button>  <button type="button">Ne</button> </th>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>3000</td>
    <th> <button type="button">Taip</button>  <button type="button">Ne</button> </th>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>2000</td>
    <th> <button type="button">Taip</button>  <button type="button">Ne</button> </th>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>1000</td>
    <th> <button type="button">Taip</button>  <button type="button">Ne</button> </th>
  </tr>
</table>                   
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
    //Jei vartotojas neprisijungęs arba prisijunges, bet ne Administratorius 
    //ar ne Valdytojas - užkraunamas pradinis puslapis   
} else {
    header("Location: index.php");
}
?>

