<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl2.css">
    <title>Wynajem pokoi</title>
</head>
<body>
    <header class="baner">
        <h1>Pensjonat pod dobrym humorem</h1>
    </header>
    <main>
        <section class="lewy">
            <a href="index.html">GŁÓWNA</a>
            <img src="zad2/1.jpeg" alt="pokoje">
        </section>
        <section class="srodkowy">
            <a href="cennik.php">CENNIK</a>
            <table>
                <?php
                    $conn = mysqli_connect('localhost','root','','wynajem');
                    $zapytanie1 = "SELECT * FROM `pokoje`";
                    $wynik = mysqli_query($conn,$zapytanie1);
                    while($wiersz = mysqli_fetch_row($wynik))
                    {
                        echo '<tr>
                            <td>'.$wiersz[0].'</td>
                            <td>'.$wiersz[1].'</td>
                            <td>'.$wiersz[2].'</td>
                        </tr>';
                    }
                    mysqli_close($conn);
                ?>
            </table>
        </section>
        <section class="prawy">
            <a href="kalkulator.html">KALKULATOR</a>
            <img src="zad2/3.jpeg" alt="pokoje">
        </section>
    </main>
    <footer class="stopka">
        <p>Stronę opracował: Artur Klatka</p>
    </footer>
</body>
</html>