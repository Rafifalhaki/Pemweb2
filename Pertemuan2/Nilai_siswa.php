<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<?php
    if (isset($_POST['submit'])) {
        $nama = $_POST["nama"];
        $matkul = $_POST["matkul"];
        $uts = $_POST["uts"];
        $uas = $_POST["uas"];
        $tugas = $_POST["tugas"];
        
        echo "
        <h3 class='text-center mb-3'>Hasil nilai mahasiswa</h3>
        <table class='table container' border='1'>
            <thead class='table-dark text-center'>
                <tr>
                    <th>Nama</th>
                    <th>Mata Kuliah</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>Tugas</th>
                    <th>Nilai Akhir</th>
                    <th>Grade</th>
                    <th>Predikat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>$nama</td>
                    <td>$matkul</td>
                    <td>$uts</td>
                    <td>$uas</td>
                    <td>$tugas</td>
        ";
        
        $nilai_total = ($tugas * 0.3) + ($uts * 0.35) + ($uas * 0.35);
        
        if($nilai_total > 55) {
            $status = "Lulus";
        } else {
            $status = "Tidak Lulus";
        }
        
        // Menentukan grade dan predikat menggunakan switch
        switch (true) {
            case ($nilai_total >= 85):
                $grade = "A";
                $predikat = "Sangat Memuaskan";
                break;
            case ($nilai_total >= 70):
                $grade = "B";
                $predikat = "Memuaskan";
                break;
            case ($nilai_total >= 55):
                $grade = "C";
                $predikat = "Cukup";
                break;
            case ($nilai_total >= 40):
                $grade = "D";
                $predikat = "Kurang";
                break;
            case ($nilai_total < 40):
                $grade = "E";
                $predikat = "Sangat Kurang";
                break;
            default:
                $grade = "-";
                $predikat = "Tidak Ada";
        }
        
        echo "
                    <td>$nilai_total</td>
                    <td>$grade</td>
                    <td>$predikat</td>
                </tr>
            </tbody>
        </table>
        ";
        
        echo "<h5 class='text-center'>$nama dinyatakan $status.</h5>";
    }
?>
