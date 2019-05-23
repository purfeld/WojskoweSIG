<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
      <form action="insert.php" method="post">
       <h1>Formularz do wprowadzania danych do bazy danych</h1><br/>
       zmienna1<br/>
       <input type="text" name="stokrotka1"/><br/>
       zmienna2<br/>
       <input type="text" name="stokrotka2"/><br/>
       szerokosc geograficzna<br/>
       <input type="text" name="stokrotkaSZ"/><br/>
       dlugosc geograficzna<br/>
       <input type="text" name="stokrotkaDL"/><br/><br/>

       <input type="submit" value="send"/>
      </form> 
    
    <?php
    require_once("connect.php");
    ?>
        
</body>
</html>