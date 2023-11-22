<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wynajem pokoi</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <div class="baner">
        <h1>Pensjonat pod dobrym humorem</h1>
    </div>
    <div class="lewy">
        <a href="index.html">GŁÓWNA</a>
        <img src="1.jpeg" alt="pokoje">
    </div>
    <div class="srodkowy">
        <a href="cennik.php">CENNIK</a>
        <table>
            <?php 
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "wynajem";
                $conn = mysqli_connect($servername, $username, $password,$dbname);
                
                if (!$conn) {
                  die("Connection failed: " . mysqli_connect_error());
                }
                $sql="SELECT * FROM pokoje;";
                $wynik=mysqli_query($conn,$sql);
                if(mysqli_num_rows($wynik)>0){
                    while($row=mysqli_fetch_assoc($wynik)){
                        echo "<tr><td>$row[id]</td><td>$row[nazwa]</td><td>$row[cena]</td><tr>";
                    };
                };
                mysqli_close($conn);
            ?>
        </table>
    </div>
    <div class="prawy">
        <a href="kalkulator.html">KALKULATOR</a>
        <img src="3.jpeg" alt="pokoje">
    </div>
    <div class="stopka">
        <p>Stronę opracował: Szymon Pniaczek</p>
    </div>
</body>
</html>