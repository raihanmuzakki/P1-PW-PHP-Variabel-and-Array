<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar nilai siswa</title>
</head>
<body>
    <?php
    $ns1 = ['id'=> 1, 'nama'=> 'Gibran', 'nim'=> '011031', 'uts'=> 70, 'uas'=> 75, 'tugas'=> 77];
    $ns2 = ['id'=> 2, 'nama'=> 'Jordan', 'nim'=> '011040', 'uts'=> 70, 'uas'=> 82, 'tugas'=> 85];
    $ns3 = ['id'=> 3, 'nama'=> 'Mikey',  'nim'=> '011022', 'uts'=> 90, 'uas'=> 85, 'tugas'=> 80];
    $ns4 = ['id'=> 4, 'nama'=> 'Marchel','nim'=> '011010', 'uts'=> 85, 'uas'=> 90, 'tugas'=> 97];
    $ar_nilai = [$ns1, $ns2, $ns3, $ns4];
    ?>
    
    <h3 class="text-center display-5 my-5">Daftar Nilai Siswa</h3>
    <table class="table table-success table-striped text-center display-10 my-10">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Tugas</th>
            <th>Nilai akhir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach ($ar_nilai as $ns) {
            echo '<tr><td>' .$nomor. '</td>';
            echo '<td>' .$ns['nama']. '</td>';
            echo '<td>' .$ns['nim']. '</td>';
            echo '<td>' .$ns['uts']. '</td>';
            echo '<td>' .$ns['uas']. '</td>';
            echo '<td>' .$ns['tugas']. '</td>';
            $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas'])/3;
            echo '<td>' .number_format($nilai_akhir,2,',','.').'</td>';
            echo'<tr/>';
            $nomor++;
            }
        ?>
    </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>