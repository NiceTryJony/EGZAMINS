<!DOCTYPE html>
<html>
    <head>
        <title>Weterynarz</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="weterynarz.css">
    </head>
<section id="baner">
    <h1>GABINET WETERYNARYJNY</h1>
</section>
<section id="pan_l">
    <h2>PSY</h2>
        <?php
            $polaczenie = mysqli_connect("localhost", "root", "02dE@Ks7sw5sRc4cGj9", "weterynarz");

            $zapytanie = (mysqli_query($polaczenie, "SELECT * FROM zwierzeta WHERE rodzaj = 1"));
            while($wiersz=mysqli_fetch_array($zapytanie)){
                echo "{$wiersz[0]} {$wiersz[3]} {$wiersz[4]} <br>";
            }

            mysqli_close($polaczenie);
        ?>
    <h2>KOTY</h2>
    <?php
            $polaczenie = mysqli_connect("localhost", "root", "02dE@Ks7sw5sRc4cGj9", "weterynarz");

            $zapytanie = (mysqli_query($polaczenie, "SELECT * FROM zwierzeta WHERE rodzaj = 2"));
            while($wiersz=mysqli_fetch_array($zapytanie)){
                echo "{$wiersz[0]} {$wiersz[3]} {$wiersz[4]} <br>";
            }

            mysqli_close($polaczenie);
        ?>
</section>
<section id="pan_s">
    <h2>SZCZEGÓŁOWA INFORMACJA O ZWIERZĘTACH</h2>
        <?php
            $polaczenie = mysqli_connect("localhost", "root", "02dE@Ks7sw5sRc4cGj9", "weterynarz");
            
            $zapytanie = mysqli_query($polaczenie, "SELECT imie, telefon, szczepienie, opis FROM zwierzeta");
            while($wiersz=mysqli_fetch_array($zapytanie)){
                echo "Pacjent: {$wiersz[0]}<br>
                Telefon właściciela: {$wiersz[1]} ostatnie szczepienie {$wiersz[2]} informacje {$wiersz[3]}<br>
                <section id='linia'></section>";
            }

            mysqli_close($polaczenie);
        ?>
</section>
<section id="pan_p">
    <h2>WETERYNARZ</h2>
    <img src="" alt="tutaj musi być obrazek ale go niema">
    <p>Krzysztof Nowakowski, lekarz weterynarii</p>
    <h2>GODZINY PRZYJĘĆ</h2>
    <table>
        <tr>
            <td>Poniedziałek</td>
            <td>15:00-19:00</td>
        </tr>
        <tr>
            <td>Wtorek</td>
            <td>15:00-19:00</td>
        </tr>
    </table>
</section>
</html>