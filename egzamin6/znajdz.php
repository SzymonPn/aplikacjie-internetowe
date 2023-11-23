<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <div class="baner">
        <h1>Grupa Polskich Kwiaciarni</h1>
    </div>
    <div class="lewy">
        <h2>Menu</h2>
        <ol>
            <li><a href="index.html">Strona główna</a></li>
            <li><a href="https://www.kwiaty.pl/" target="_blank">Rozpoznaj kwiaty</a></li>
            <li><a href="znajdz.php">Znajdź kwiaciarnię</a></li>
            <ul>
                <li>w Warszawie</li>
                <li>w Malborku</li>
                <li>w Poznaniu</li>
            </ul>
        </ol>
    </div>
    <div class="prawy">
        <h2>Znajdź kwiaciarnię</h2>
        <form action="znajdz.php" method="post">
            <label>Podaj nazwę miasta: <input type="text" name="miasto" id="miasto"></label>
            <input type="submit" value="SPRAWDŹ">
        </form>
        <?php 
            if(isset($_POST["miasto"])){
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "kwiaciarnia";
                $miasto=$_POST["miasto"];
                $conn = mysqli_connect($servername, $username, $password,$dbname);
                $sql="SELECT nazwa, ulica FROM kwiaciarnie WHERE miasto = '$miasto';";
                if (!$conn) {
                  die("Connection failed: " . mysqli_connect_error());
                }
                $wynik=mysqli_query($conn,$sql);
                if(mysqli_num_rows($wynik)>0){
                    $row=mysqli_fetch_row($wynik);
                    echo "<h3>$row[0], $row[1]</h3>";
                }
    
                mysqli_close($conn);
            }
 
        ?>
    </div>
    <div class="stopka">
        <p>Stronę opracował: Szymon Pniaczek</p>
    </div>
</body>
</html>