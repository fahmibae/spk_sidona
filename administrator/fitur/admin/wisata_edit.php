<?php include "atas.php";?>

<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-md-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-700" >Edit Barang</h1>

          </div>
                    <br/>
                   <?php
                    $id = $_GET['id'];
                    $sql = mysqli_query($konek, "SELECT * FROM wisata WHERE id='$id'");
                    $row = mysqli_fetch_array($sql);

                    ?>
                    <form method="POST" id="form" class="form-horizontal form-label-left" enctype="multipart/form-data" action="wisata/proses_edit.php">
                    
                    <input type="hidden" readonly name="id" value="<?php echo $row['id'];?>" id="id" class="form-control" required/>

                     <label>Nama Wisata</label>
                     <input type="text" name="nama_wisata" required oninvalid="this.setCustomValidity('Nama Wisata Tidak Boleh Kosong')" oninput="setCustomValidity('')" value="<?php echo $row['nama_lokasi'];?>" id="nama_wisata" class="form-control" placeholder="Nama Wisata"/>

                    <br/>
                    <label>Alamat</label>
                    <textarea name="alamat" rows="3" maxlength="255" id="alamat" required oninvalid="this.setCustomValidity('Alamat Tidak Boleh Kosong')" oninput="setCustomValidity('')"  class="form-control" placeholder="Alamat" maxlength="255" rows="2"><?php echo $row['alamat'];?></textarea>
                    
                    <br/>
                    <label>Deskripsi Wisata</label>
                    <textarea name="deskripsi" id="deskripsi" required oninvalid="this.setCustomValidity('Deskripsi Wisata Tidak Boleh Kosong')" oninput="setCustomValidity('')"  class="form-control" placeholder="Deskripsi Wisata" maxlength="10000" rows="5"><?php echo $row['deskripsi'];?></textarea>
                    
                    <br/>
                    <label>Lattitude</label>
                    <input type="text" name="lattitude" required oninvalid="this.setCustomValidity('Lattitude Tidak Boleh Kosong')" oninput="setCustomValidity('')" value="<?php echo $row['lat'];?>" id="lattitude" class="form-control" placeholder="Lattitude"/>

                    <br/>
                    <label>Longitude</label>
                    <input type="text" name="longitude" required oninvalid="this.setCustomValidity('Longitude Tidak Boleh Kosong')" oninput="setCustomValidity('')" value="<?php echo $row['lng'];?>" id="longitude" class="form-control" placeholder="Longitude"/>

                    <br/>
                    <label>Gambar</label>
                    <br/>
                    <img src="../../../img/bg-img/<?php echo $row['gambar'];?>" width="100">
                    <br/>
                    <br/>
                    <input type="file" name="gambar" required oninvalid="this.setCustomValidity('Gambar Tidak Boleh Kosong')" value="<?php echo $row['gambar'];?>" oninput="setCustomValidity('')" id="gambar" class="form-control" placeholder="Gambar"/>

                    <br/>
                    <div class="form-group">
                     
                   
                      <button class="btn btn-success" style="width: 90px;"><i class="fa fa-floppy-o" ></i> Ubah</button>
                       <a href="wisata.php"><button type="button" class="btn btn-default" style="background-color: #858796; color: #fff;">Kembali</button></a>
                   
                    </div>

                  </form>
                </div>

            <?php include "bawah.php"; ?>
<script type="text/javascript">
    $(document).ready(function(){
        $('#show-hide').click(function(){
            if($(this).is(':checked')){
                $('#password').attr('type', 'text');
            }else{
                $('#password').attr('type', 'password');
            }
        });
    });
</script>