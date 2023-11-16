<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Biblioteka</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="baner">
        <h1>Biblioteka w Książkowicach Małych</h1>
    </div>
    <div class="lewy">
        <h4>Dodaj czytelnika</h4>
        <form action="biblioteka.php" method="post">
            <label>imię: <input type="text" name="imie"></label><br>
            <label>nazwisko: <input type="text" name="nazwisko"></label><br>
            <label>symbol: <input type="number" name="symbol"></label><br>
            <input type="submit" value="AKCEPTUJ">
        </form>
        <?php 
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "biblioteka";
            if(isset($_POST["imie"])&&isset($_POST["nazwisko"])&&isset($_POST["symbol"])){
                $imie=$_POST["imie"];
                $nazwisko=$_POST["nazwisko"];
                $symbol=$_POST["symbol"];
                $conn = mysqli_connect($servername, $username, $password,$dbname);
                if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
                }
                $sql="INSERT INTO czytelnicy(imie, nazwisko, kod) VALUES('$imie', '$nazwisko', '$symbol');";
                if(mysqli_query($conn,$sql)){
                    echo "Dodano czytelnika $imie $nazwisko";
                }
                mysqli_close($conn);
            }
        ?>
    </div>
    <div class="srodkowy">
        <img src="biblioteka.png" alt="biblioteka">
        <h6>ul. Czytelników&nbsp;15; Książkowice Małe</h6>
        <p><a href="mailto:biuro@bib.pl">Czy masz jakieś uwagi?</a></p>
    </div>
    <div class="prawy">
        <h4>Nasi czytelnicy:</h4>
        <?php 
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "biblioteka";
            $conn = mysqli_connect($servername, $username, $password,$dbname);
            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            }
            $sql="SELECT imie, nazwisko FROM czytelnicy ORDER BY nazwisko;";
            $wynik=mysqli_query($conn,$sql);
            echo "<ol>";
            if(mysqli_num_rows($wynik)>0){
                while($row=mysqli_fetch_assoc($wynik)){
                    echo "<li>$row[imie] $row[nazwisko]</li>";
                };
            };
            echo "</ol>";
            mysqli_close($conn);
        ?>
    </div>
    <div class="stopka">
        <p>Projekt witryny: Szymon  Pniaczek</p>
    </div>
</body>
</html>