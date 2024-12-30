<?php 
    $polaczenie = mysqli_connect("localhost", "root", "02dE@Ks7sw5sRc4cGj9", "biuro");
?>
<!DOCTYPE html>
<html lang="pl_PL">
    <head>
        <meta charset="utf-8">
        <title>Wycieczki po Europie</title>
        <link rel="stylesheet" href="styl4.css">
    </head>
<body>
<section id="baner">
    <h1>BIURO TURYSTYCZNE</h1>
</section>

<section id="dane">
    <h3>Wycieczki na które są wolne miejsca</h3>
    <ul>
    <?php 
        $zapytanie = mysqli_query($polaczenie, "SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna = 1");
        while($wiersz=mysqli_fetch_array($zapytanie)){
            echo "<li>{$wiersz[0]} dnia {$wiersz[1]} jedziemy do {$wiersz[2]}, cena {$wiersz[3]}</li>";
        }
    ?>
    </ul>
</section>

<section id="pan_l">
    <h2>Bestselery</h2>
    <table>
        <tr>
            <td>Wenecja</td><td>kwiecień</td>
        </tr>
        <tr>
            <td>Londyn</td><td>lipiec</td>
        </tr>
        <tr>
            <td>Rzym</td><td>wrzesień</td>
        </tr>
    </table>
</section>

<section id="pan_s">
    <h2>Nasze zdjęcia</h2>
    <?php 
        $zapytanie = mysqli_query($polaczenie, "SELECT nazwaPliku, podpis FROM zdjecia GROUP BY podpis");
        while($wiersz=mysqli_fetch_array($zapytanie)){
            echo "<img src='{$wiersz[0]}' alt='{$wiersz[1]}'>  ";
        }
    ?>
</section>

<section id="pan_p">
    <h2>Skontaktuj się</h2>
    <a href="turysta@wycieczki.pl">napisz do nasz</a>
    <p>111222333</p>
</section>

<section id="stopka">
    <p>Stronę wykonał: 435723469164239874324</p>
</section>
</body>
</html>
