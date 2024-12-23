<!DOCTYPE hmtl>
<html>
    <head>
        <meta charset="utf-8">
        <title>Nasze hobby</title>
        <link rel="stylesheet" href="hobby.css">
    </head>
<section id="baner">
    <h1>FORUM HOBBYSTYCZNE</h1>
</section>
<section id="pan_p">
    <h3>TEMATYKA FORUM</h3>
    <ul>
        <li>Hodowla zwierząt</li>
        <ul>
            <li>psy</li>
            <li>koty</li>
        </ul>
        <li>Muzyka</li>
        <li>Gry komputerowe</li>
    </ul>
</section>
<section id="pan_l">
    <!--EFEKT DZIAŁANIA POST Z FORMULAŻA-->
    <?php
        $polaczenie = mysqli_connect("localhost", "root", "02dE@Ks7sw5sRc4cGj9", "forum");

        if(isset($_POST['wys'])){
            $nick=$_POST['nick'];
            $zainteresowania=$_POST['zainteresowania'];
            $zawod=$_POST['zawod'];
            $plec=$_POST['plec'];

            $zapytanie = "INSERT INTO uzytkownicy (id, nick, zainteresowania, zawod, plec) VALUES (NULL ,'$nick', '$zainteresowania', '$zawod', '$plec')";
            $zapytanie2= mysqli_query($polaczenie, "SELECT nick FROM uzytkownicy WHERE nick = '$nick'");
            while($wiersz=mysqli_fetch_array($zapytanie2)){
                echo "Konto {$wiersz[1]} zostało dodano na forum hobbistym";
        }
    }

        mysqli_close($polaczenie);
    ?>
</section>
</html>