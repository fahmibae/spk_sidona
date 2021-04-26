<?php include "atas.php";?>

<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-md-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-700" >Edit Supplier</h1>

          </div>
                    <br/>
                   <?php
                    $kode_supplier = $_GET['kode_supplier'];
                    $sql = mysqli_query($konek, "SELECT * FROM supplier WHERE kode_supplier='$kode_supplier'");
                    $row = mysqli_fetch_array($sql);

                    ?>
                    <form method="POST" class="form-horizontal form-label-left" action="supplier/proses_edit.php">
                    
                    <label>Kode Supplier</label>
                    <input type="text" name="kode_supplier" id="kode_supplier" value="<?php echo $row['kode_supplier'];?>" class="form-control" placeholder="Kode supplier" readonly/>
                    <br />
                    <label>Nama Supplier</label>
                    <input type="text" name="nama_supplier" value="<?php echo $row['nama_supplier'];?>" class="form-control" placeholder="Nama supplier" required oninvalid="this.setCustomValidity('Nama Supplier Tidak Boleh Kosong')" oninput="setCustomValidity('')"/>
                    <br />
                    <label>Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" placeholder="alamat" required oninvalid="this.setCustomValidity('Alamat Tidak Boleh Kosong')" oninput="setCustomValidity('')"><?php echo $row['alamat'];?>
                    </textarea>
                    <br />
                    <label>Telepon</label>
                    <input type="text" name="telepon" value="<?php echo $row['telepon'];?>" class="form-control" placeholder="telepon" required oninvalid="this.setCustomValidity('Telepon Tidak Boleh Kosong')" oninput="setCustomValidity('')"/>
                    <br />
                    <div class="form-group">
                     
                   
                      <button class="btn btn-success" style="width: 90px;"><i class="fa fa-floppy-o" ></i> Ubah</button>
                       <a href="supplier.php"><button type="button" class="btn btn-default" style="background-color: #858796; color: #fff;">Kembali</button></a>
                   
                    </div>

                  </form>
                </div>

            <?php include "bawah.php"; ?>
            