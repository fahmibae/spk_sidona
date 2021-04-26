<?php include "atas.php";?>

<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-md-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-700" >Edit Barang</h1>

          </div>
                    <br/>
                   <?php
                    $kode_barang = $_GET['kode_barang'];
                    $sql = mysqli_query($konek, "SELECT * FROM barang WHERE kode_barang='$kode_barang'");
                    $row = mysqli_fetch_array($sql);

                    ?>
                    <form method="POST" class="form-horizontal form-label-left" action="barang/proses_edit.php">
                    
                    <label>Kode Barang</label>
                    <input type="text" readonly name="kode_barang" value="<?php echo $row['kode_barang'];?>" id="kode_barang" required oninvalid="this.setCustomValidity('Kode Barang Tidak Boleh Kosong')" oninput="setCustomValidity('')" class="form-control" placeholder="Kode Barang" required/>

                    <br/>
                     <label>Kategori</label>
                     <input type="text" name="kategori" required oninvalid="this.setCustomValidity('Kategori Tidak Boleh Kosong')" oninput="setCustomValidity('')" value="<?php echo $row['kategori'];?>" id="kategori" class="form-control" placeholder="Kategori" readonly/>

                    <br/>
                    <label>Nama Barang</label>
                   <input type="text" name="nama_barang" required oninvalid="this.setCustomValidity('Nama Barang Tidak Boleh Kosong')" oninput="setCustomValidity('')" value="<?php echo $row['nama_barang'];?>" id="nama_barang" class="form-control" placeholder="Nama Barang"/>
                    
                    <br/>
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" required oninvalid="this.setCustomValidity('Keterangan Tidak Boleh Kosong')" oninput="setCustomValidity('')" value="<?php echo $row['keterangan'];?>" id="keterangan" class="form-control" placeholder="Keterangan"/>  

                     <br/>
                    <label>Harga Beli</label>
                    <input type="number" name="harga_beli" id="harga_beli" onkeyup="hitung();" required oninvalid="this.setCustomValidity('Harga Beli Tidak Boleh Kosong')" oninput="setCustomValidity('')"  value="<?php echo $row['harga_beli'];?>" class="form-control" placeholder="Harga Beli"/>

                     <br/>
                    <label>Keuntungan</label>
                    <input type="number" name="untung" id="untung" onkeyup="hitung();" required oninvalid="this.setCustomValidity('Keuntungan Tidak Boleh Kosong')" oninput="setCustomValidity('')"  value="<?php echo $row['keuntungan'];?>" class="form-control" placeholder="Keuntungan"/>

                    <br/>
                    <label>Potongan Harga</label>
                    <input type="number" name="potongan_harga" id="potongan_harga" onkeyup="hitung();" required oninvalid="this.setCustomValidity('Diskon Tidak Boleh Kosong')" oninput="setCustomValidity('')" value="<?php echo $row['potongan_harga'];?>" class="form-control" placeholder="Potongan Harga"/>

                     <br/>
                    <label>Harga Jual</label>
                    <input type="number" onkeyup="hitung();" name="harga_jual" id="harga_jual" required oninvalid="this.setCustomValidity('Harga Jual Tidak Boleh Kosong')" oninput="setCustomValidity('')"  value="<?php echo $row['harga_jual'];?>" class="form-control" placeholder="Harga Jual"/>

                     <br/>
                    <label>Stok</label>
                    <input type="number" name="stok" id="stok" required oninvalid="this.setCustomValidity('Stok Barang Tidak Boleh Kosong')" oninput="setCustomValidity('')" value="<?php echo $row['stok'];?>" class="form-control" placeholder="Jumlah Stok"/>

                    <br/>
                    <div class="form-group">
                     
                   
                      <button class="btn btn-success" style="width: 90px;"><i class="fa fa-floppy-o" ></i> Ubah</button>
                       <a href="barang.php"><button type="button" class="btn btn-default" style="background-color: #858796; color: #fff;">Kembali</button></a>
                   
                    </div>

                  </form>
                </div>

            <?php include "bawah.php"; ?>
            

<script type="text/javascript">
  function hitung(){

    var harga_beli      = document.getElementById('harga_beli').value;
    var keuntungan      = document.getElementById('untung').value;
    var potongan_harga  = document.getElementById('potongan_harga').value;
    var jual            = parseInt(harga_beli) + parseInt(keuntungan) - parseInt(potongan_harga);

     if (!isNaN(jual)){
      var harga_jual = document.getElementById('harga_jual').value = jual;
     }

}
</script>