<?php
include("include/session.php");
if ($session->logged_in) {
    ?>
    <html>
        <head>  
            <meta http-equiv="X-UA-Compatible" content="IE=9; text/html; charset=utf-8"/> 
            <title>Pirkiniai</title>
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
                            <h1>Visi pirkiniai:</h1>
                            <table>
  <tr>
    <th>Pavadinimas</th>
    <th>Kaina</th>
    <th>Ar Pašalinti?</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
      <td>50</td>
      <td>  <button type="button">Pašalinti</button></td>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
      <td>50</td>
      <td>  <button type="button">Pašalinti</button></td>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
      <td>50</td>
      <td>  <button type="button">Pašalinti</button></td>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
      <td>50</td>
      <td>  <button type="button">Pašalinti</button></td>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
      <td>50</td>
      <td>  <button type="button">Pašalinti</button></td>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
      <td>50</td>
      <td>  <button type="button">Pašalinti</button></td>
      
  </tr>
      <tr>
          <td>Limitas</td>
          <td>5000</td>
      
  </tr>
</table>                  
                        </div> 
                        <br>                
                <tr><td>
                        <?php
                       // include("include/footer.php");
                       // ?>
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