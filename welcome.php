<!DOCTYPE html>
<html>
    <head>
        <title>Welcome</title>
    </head>
    <body>
        <h3>Selamat belajar</h3>
        <?php
        // komentar satu barus
        $_nama = "Nawaf Rafif";
        $_umur = 20;
        $_berat = 60.5;
        $_prodi = "SI";
        $_kampus = "STTNF";
        echo "Nama saya $_nama, Umur saya $_umur tahun";
        echo "<br>";
        ?>
        <hr/>
        <?php
        echo "berat badan saya $_berat";
        echo "<br>";
        echo "saya dari prodi $_prodi";
        ?>
        <br>Saya kuliah di kampus <strong><?= $_kampus ?></strong>
    </body>
</html>