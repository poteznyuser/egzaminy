<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <div id="baner">
        <h1>Portal dla wędkarzy</h1>
    </div>
    <div id="prawy">
        <img src="ryba1.jpg" alt="Sum">
        <a href="kwerendy.txt" download="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    <div id="lewy1">
        <h3>Ryby zamieszkujące rzeki</h3>
        <ol>
            <?php
                $polaczenie = mysqli_connect('localhost', 'root', '', 'wedkowanie'); 
                $zapytanie1 = "SELECT nazwa, akwen, wojewodztwo FROM ryby INNER JOIN lowisko ON     ryby.id = lowisko.Ryby_id WHERE lowisko.rodzaj = 3";
                $wynik1 = mysqli_query($polaczenie, $zapytanie1);
                while($wiersz1 = mysqli_fetch_row($wynik1)){
                    echo "<li>$wiersz1[0] pływa w rzece $wiersz1[1], $wiersz1[2]</li><br>";
                }
            ?>
        </ol>
    </div>
    <div id="lewy2">
        <h3>Ryby drapieżne naszych wód</h3>
            <table>
                <tr><th>L.p</th><th>Gatunek</th><th>Występowanie</th></tr>
                <?php
                    $zapytanie2 = "SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia =  1";
                    $wynik2 = mysqli_query($polaczenie, $zapytanie2);
                    while($wiersz2 = mysqli_fetch_row($wynik2)){
                        echo "<tr><td>$wiersz2[0]</td><td>$wiersz2[1]</td><td>$wiersz2[2]</td></tr>";
                    }
                ?>
            </table>
    </div>
    <div id="stopka">
        <p>Stronę wykonał: Twój stary</p>
    </div>
</body>
</html>