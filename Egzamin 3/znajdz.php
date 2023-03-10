<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl3.css">
    <title>Kwiaty</title>
</head>
<body>
    <header class="baner">
        <h1>Grupa Polskich Kwiaciarni</h1>
    </header>
    <main>
        <section class="lewy">
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
        </section>
        <section class="prawy">
            <h2>Znajdź kwiaciarnię</h2>
            <form action="znajdz.php" method="post">
                <label for="miasto">Podaj nazwę miasta:</label>
                <input type="text" name="miasto">
                <input type="submit" value="SPRAWDŹ">
            </form>
            <?php
                $conn = mysqli_connect('localhost','root','','kwiaciarnia');
                if(isset($_POST['miasto']))
                {
                    $miasto = $_POST['miasto'];
                    $zapytanie1 = "SELECT nazwa, ulica FROM `kwiaciarnie` WHERE miasto = '$miasto'";
                    $wynik = mysqli_query($conn, $zapytanie1);
                    while($wiersz = mysqli_fetch_row($wynik))
                    {
                        echo '<h3>'.$wiersz[0].', '.$wiersz[1].'</h3>';
                    }
                }
                mysqli_close($conn);
            ?>
        </section>
    </main>
    <footer class="stopka">
        <p>Stonę opracował: Artur Klatka</p>
    </footer>
</body>
</html>