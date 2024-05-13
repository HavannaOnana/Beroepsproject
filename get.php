<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get php file</title>
</head>
<body>

    <form action="get.php" method="get">
        <label for="name">Name : </label>
        <input type="text" id="name" name="name"><br><br>

        <label for="achternaam">Achternaam : </label>
        <input type="text" name="achternaam" id="achternaam"><br><br>

        <label for="leeftijd">Age : </label>
        <input type="number" name="leeftijd" id="leeftijd"><br><br>

        <label for="adress">Address : </label>
        <input type="text" name="adress" id="adress"><br><br>

        <label for="email">Email : </label>
        <input type="email" name="email" id="email"><br><br>

        <button type="submit">Button</button><br><br>
        
    </form>

    <?php
    
      if($_SERVER["REQUEST_METHOD"] == "GET"){
        $name = $_GET["name"];
        $achternaam = $_GET["achternaam"];
        $leeftijd = $_GET["leeftijd"];
        $adress= $_GET["adress"];
        $email = $_GET["email"];

        echo "Naam : $name <br><br>";
        echo "Achternaam : $achternaam <br><br>";
        echo "Leeftijd : $leeftijd <br><br>";
        echo "adress: $adress <br><br>";
        echo "email : $email <br><br>";
      }
    
    
    
    ?>
    
    
</body>
</html>