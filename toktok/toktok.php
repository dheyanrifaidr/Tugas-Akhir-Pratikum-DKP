<html>
    <body>
    <table>
        <tr>
       <?php 
        class pembeli{
            private $nama;
            private $alamat;
            private $nomor;

            function setNama($nama) {$this->nama = $nama;}
            function setAlamat($alamat) {$this->alamat = $alamat;}
            function setNomor($nomor) {$this->nomor = $nomor;}

            function getNama() {return $this->nama;}
            function getAlamat() {return $this->alamat;}
            function getNomor() {return $this->nomor;}
        }

        $pembeli1 = new pembeli();
        $pembeli1->setNama($_POST['nama']);
        $pembeli1->setAlamat($_POST['alamat']);
        $pembeli1->setNomor($_POST['nomor']);
        $uang = $_POST{'uang'}
        ?>
        </tr>

        <tr>
            <td><br>
            <?php 
            $uk1 = $_POST['uk1'];
            if ($uk1 == '')
            {$uk1 = 0;}
            else if ($uk1 == 'es')
            {$uk1 = 100000 ;}
            else if ($uk1 == 'em')
            {$uk1 = 110000.;}
            else if ($uk1 == 'el')
            {$uk1 = 120000.;}
            else
            {$uk1 = 130000.;}

            $jml1 = $_POST['jml1'];
            if ($jml1 == '')
            {$jml1 = 0;}
            else if ($jml1 == '1')
            {$jml1 = 1;}
            else if ($jml1 == '2')
            {$jml1 = 2;}
            else if ($jml1 == '3')
            {$jml1 = 3;}
            else
            {$jml1 = '4';}

            $uk2 = $_POST['uk2'];
            if ($uk2 == '')
            {$uk2 = 0;}
            else if ($uk2 == 'es')
            {$uk2 = 60000 ;}
            else if ($uk2 == 'em')
            {$uk2 = 65000.;}
            else if ($uk2 == 'el')
            {$uk2 = 70000.;}
            else
            {$uk2 = 75000.;}

            $jml2 = $_POST['jml2'];
            if ($jml2 == '')
            {$jml2 = 0;}
            else if ($jml2 == '1')
            {$jml2 = 1;}
            else if ($jml2 == '2')
            {$jml2 = 2;}
            else if ($jml2 == '3')
            {$jml2 = 3;}
            else
            {$jml2 = 4;}

            $uk3 = $_POST['uk3'];
            if ($uk3 == '')
            {$uk3 = 0;}
            else if ($uk3 == 'es')
            {$uk3 = 90000 ;}
            else if ($uk3 == 'em')
            {$uk3 = 95000.;}
            else if ($uk3 == 'el')
            {$uk3 = 100000.;}
            else
            {$uk3 = 105000.;}

            $jml3 = $_POST['jml3'];
            if ($jml3 == '')
            {$jml3 = 0;}
            else if ($jml3 == '1')
            {$jml3 = 1;}
            else if ($jml3 == '2')
            {$jml3 = 2;}
            else if ($jml3 == '3')
            {$jml3 = 3;}
            else
            {$jml3 = 4;}

            $uk4 = $_POST['uk4'];
            if ($uk4 == '')
            {$uk4 = 0;}
            else if ($uk4 == 'es')
            {$uk4 = 80000 ;}
            else if ($uk4 == 'em')
            {$uk4 = 85000.;}
            else if ($uk4 == 'el')
            {$uk4 = 90000.;}
            else
            {$uk4 = 95000.;}

            $jml4 = $_POST['jml4'];
            if ($jml4 == '')
            {$jml4 = 0;}
            else if ($jml4 == '1')
            {$jml4 = 1;}
            else if ($jml4 == '2')
            {$jml4 = 2;}
            else if ($jml4 == '3')
            {$jml4 = 3;}
            else
            {$jml4 = 4;}

            $tot1 = $uk1 * $jml1;
            $tot2 = $uk2 * $jml2;
            $tot3 = $uk3 * $jml3;
            $tot4 = $uk4 * $jml4;

            $total = $tot1 + $tot2 + $tot3 + $tot4;
            $sisa = $uang - $total;
            ?>
            </td>
        </tr>

        <?php
        echo "Selamat datang"."<br><br>";
        echo "Nama pelanggan : ". $pembeli1->getNama()."<br>";
        echo "Alamat pelanggan : ". $pembeli1->getAlamat()."<br>";
        echo "Nomor telepon pelanggan : ". $pembeli1->getNomor()."<br><br>";
        echo "Anda telah melakukan transaksi dengan total harga Rp.". $total. ".","<br>";
        echo "Uang yang Anda bayarkan sebesar Rp.". $uang. ".","<br>";
        echo "Kembalian yang akan Anda terima atas pembayaran tersebut yaitu sebesar Rp.". $sisa;
        echo ".","<br>","<br>";
        echo "Terimakasih atas kedatangannya.","<br>","<br>","<br>";
        ?>
    </table>
    </body>
</html>

    

