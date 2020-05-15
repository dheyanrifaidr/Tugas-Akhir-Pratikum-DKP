<html>
    <body>
        <form action="toktok.php" method="post">
        <label>TOKO PAKAIAN</label><br>
        <label>Silahkan masukkan data diri dan pilihan pembelian Anda</label><br><br>
        <label for="nama">Nama pembeli :</label>
        <input type="text" name="nama" ><br><br>
        <label for="alamat">Alamat pembeli :</label>
        <input type="text" name="alamat" ><br><br>
        <label for="nomor">Nomor telepon pembeli :</label>
        <input type="text" name="nomor" ><br><br>
        <br><br><br>

        <label for="uk1">Silahkan pilih ukuran serta jumlah kemeja yang ingin Anda beli :
        <br>Kemeja dijual dengan harga 100.000 per buah dengan kenaikan 10.000 setiap penambahan ukuran<br></label></td>
            <Select name="uk1" id="uk1">
            <option value=''>-</option>
            <option value='es'>S</option>
            <option value='em'>M</option>
            <option value='el'>L</option>
            <option value='xl'>XL</option>
            </Select>
            <Select name="jml1" id="uk1">
            <option value=''>-</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            </Select>
            </br></br>

        <label for="uk2">Silahkan pilih ukuran serta jumlah kaus yang ingin Anda beli :
            <br>Kaus dijual dengan harga 60.000 per buah dengan kenaikan 5.000 setiap penambahan ukuran<br></label></td>
            <Select name="uk2" id="uk2">
            <option value=''>-</option>
            <option value='es'>S</option>
            <option value='em'>M</option>
            <option value='el'>L</option>
            <option value='xl'>XL</option>
            </Select>
            <Select name="jml2" id="jml2">
            <option value=''>-</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            </Select>
            </br></br>

        <label for="uk3">Silahkan pilih ukuran serta jumlah celana yang ingin Anda beli :
            <br>Celana dijual dengan harga 90.000 per buah dengan kenaikan 5.000 setiap penambahan ukuran<br></label></td>
            <Select name="uk3" id="uk3">
            <option value=''>-</option>
            <option value='es'>S</option>
            <option value='em'>M</option>
            <option value='el'>L</option>
            <option value='xl'>XL</option>
            </Select>
            <Select name="jml3" id="jml3">
            <option value=''>-</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            </Select>
            </br></br>
        
        <label for="uk4">Silahkan pilih pilih ukuran serta jumlah rok yang ingin Anda beli :</label></td>
        <br>Rok dijual dengan harga 80.000 per buah dengan kenaikan 5.000 setiap penambahan ukuran<br>
            <Select name="uk4" id="uk4">
            <option value=''>-</option>
            <option value='es'>S</option>
            <option value='em'>M</option>
            <option value='el'>L</option>
            <option value='xl'>XL</option>
            </Select>
            <Select name="jml4" id="jml4">
            <option value=''>-</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            </Select>
            </br></br>

            <label for="uang">Uang yang dibayarkan : </label>
            <input name="uang" >          
            </br></br>

            <input type="submit" value="OK"/>
	    </form>
		
    </body>
</html>
