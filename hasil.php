<div class="col-lg-8">
    <div class="card">
        <div class="card-header">
            <b>Hasil Konversi Soal Tipe C</b>
        </div>
        <div class="card-body">
            <?php
            if (isset($_POST['hitung'])) {
                $nilai_input = $_POST['hitung'];
                $total = 0;

                for ($i = 1; $i <= $nilai_input; $i++) {
                    $rupiah = $i * 10000;
                    echo $i . ". ";
                    echo "$" . $i . " = ";
                    echo "Rp.".$rupiah."<br>";
                    $total += $rupiah;
                }


                
                echo "Total = Rp. " . number_format($total);
            }
            ?>


        </div>
    </div>