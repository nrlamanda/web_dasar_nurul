<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multidimensional array </title>
</head>
<body>
    <?php
    $mobil = array(
        array("toyota","Rp 50.000","merah"),
        array("mitsubisi","Rp 100.000","hitam"),
        array("honda","Rp 500.000","biru")
    );
    //var_dump($mobil);
    //echo $mobil[1][2]; 
    $jumlah_mobil = count($mobil);
    ?>
    <table border="1" style ="border-collapse: collapse;">
        <tr>
            <th>no</th>
            <th>nama</th>
            <th>harga </th>
            <th>jenis</th>
        </tr>
        <?php
        for ($i=0; $i < $jumlah_mobil; $i++) {
            $jumlah_isi_mobil = count($mobil[$i]); 
            ?>
            <tr>
                <td><?php echo $i+1; ?></td>
                <?php for($x=0; $x < $jumlah_isi_mobil; $x++){ ?>
                <td><?php echo $mobil[$i][$x]; ?></td>
                <?php } ?>
        </tr>
        <?php } ?>
</body>
</html>
</body>
</html>