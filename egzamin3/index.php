<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl.css">
    <title>Hurtownia szkolna</title>

</head>
<body>
    <div class="baner">
        <h1>Hurtownia z najlepszymi cenami</h1>
    </div>
    <div class="lewy">
        <h2>Nasze ceny</h2>
        <?php 
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "sklep";
            $conn = mysqli_connect($servername, $username, $password,$dbname);
            
            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            }
            $sql="select nazwa, cena from towary limit 4;";
            $wynik=mysqli_query($conn,$sql);
            echo "<table>";
            if(mysqli_num_rows($wynik)>0){
                while($row=mysqli_fetch_assoc($wynik)){
                    echo "<tr><td>$row[nazwa]</td><td>$row[cena]</td><tr>";
                };
            };
            echo "</table>";
            mysqli_close($conn);
        ?>
    </div>
    <div class="srodkowy">
        <h2>Koszt zakupów</h2>
        <form action="index.php" method="post">
        wybierz artykuł:<br>
        <select name="produkt">
            <option value="Zeszyt 60 kartek" >Zeszyt 60 kartek</option>
            <option value="Zeszyt 32 kartki" >Zeszyt 32 kartki</option>
            <option value="Cyrkiel">Cyrkiel</option>
            <option value="Linijka 30 cm">Linijka 30 cm</option>
        </select><br>
        <label>liczba sztuk: <input type="number" name="liczbaSztuk"></label><br>
        <input type="submit" value="OBLICZ"> 
        </form>
        <?php 
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "sklep";
            if(isset($_POST["produkt"]) && isset($_POST["liczbaSztuk"])){
                $nazwa=$_POST["produkt"];
                $ilosc=$_POST["liczbaSztuk"];
                $conn = mysqli_connect($servername, $username, $password,$dbname);
                if (!$conn) {
                  die("Connection failed: " . mysqli_connect_error());
                }
                $sql="select cena from towary where nazwa='$nazwa';";
                $wynik1=mysqli_query($conn,$sql);
                if(mysqli_num_rows($wynik1)>0){
                    $wiersz=mysqli_fetch_assoc($wynik1);
                    echo "wartość zakupów:". $wiersz["cena"]*$ilosc;
                }
            }
            mysqli_close($conn);
            
        ?>
    </div>
    <div class="prawy">
        <h2>Kontakt</h2>
        <img src="zakupy.png" alt="hurtownia">
        <p>email: <a href="mailto:hurt@poczta2.pl">hurt@poczta2.pl</a></p>
    </div>
    <div class="stopka">
    <h4>Witrynę wykonał: Szymon Pniaczek</h4>
    </div>
</body>
</html>