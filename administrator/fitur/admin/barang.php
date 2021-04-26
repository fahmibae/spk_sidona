<?php include "atas.php"; ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          
          <!-- Page Heading -->
          <div class="d-md-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-700" >Barang</h1>
           <div align="left">
         <div class="col-md-2 col-sm-6 col-xs-12">
            <button type="button" class="btn btn-primary btn-icon-split" data-toggle="modal" style="width: 173px;" data-target="#ModalTambah"><span class="icon text-white-50"><i class="fas fa-plus"></i></span><span class="text"> Tambah Barang</span></button>
          </div>
      </div>
      </div>
      
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
              <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Kode Barang</th>
                      <th>Kategori</th>
                      <th>Nama Barang</th>
                      <th>Keterangan</th>
                      <th>Harga Beli</th>
                      <th>Harga Jual</th>
                      <th>Stok</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                         $no = 1;
                          $sql = mysqli_query($konek,"SELECT * FROM barang");
                            while ($data = mysqli_fetch_array($sql)) {
                        ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $data['kode_barang'];?></td>
                      <td><?php echo $data['kategori'];?></td>
                      <td><?php echo $data['nama_barang'];?></td>
                      <td><?php echo $data['keterangan'];?></td>
                      <td><?php echo number_format($data['harga_beli']);?></td>
                      <td><?php echo number_format($data['harga_jual']);?></td>
                      <td><?php echo $data['stok'];?></td>
                      <td align="center">
                        <a href="barang_edit.php?kode_barang=<?php echo $data['kode_barang'];?>" type="button" class="btn btn-success btn-circle" style="background-color: #fff; border: 0"><i class="fa fa-edit" style="color: #858796;"></i></a>
                        <a href="barang/proses_delete.php?kode_barang=<?php echo $data['kode_barang'];?>" id="hapus" type="button" class="btn btn-danger btn-circle" style="background-color: #fff; border: 0"><i class="fa fa-trash" style="color: #858796;"></i></a>
                      </td>
                    </tr>
                    <?php
                  }
                  ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>


<div id="ModalTambah" class="modal fade">
  <div class="modal-dialog">
    <form method="post" id="user_form" action="barang/barang_save.php" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header" style="background: #4e73df">
          <h4 class="modal-title" style="color: white;">Add Barang</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">

        <?php
       $sql = mysqli_query($konek, "SELECT max(kode_barang) AS maxKode FROM barang");
       $row = mysqli_fetch_array($sql);
       $kodeMax = $row['maxKode'];
       $no_urut = (int) substr($kodeMax, 3, 5);
       $no_urut++;
       $char = "BRG";
       $barang = $char . sprintf("%05s", $no_urut);
      ?>

        <label>Kode Barang</label>
        <input type="text" name="kode_barang" required oninvalid="this.setCustomValidity('Kode Barang Tidak Boleh Kosong')" oninput="setCustomValidity('')" value="<?php echo $barang;?>" id="kode_barang" class="form-control" readonly placeholder="Kode Barang"/>
        <br/>

        <label>Kategori</label>
        <input type="text" name="kategori" required oninvalid="this.setCustomValidity('Kategori Tidak Boleh Kosong')" oninput="setCustomValidity('')" id="kategori" class="form-control" placeholder="Kategori"/>

        </br>
        <label>Nama Barang</label>
        <input type="text" name="nama_barang" required oninvalid="this.setCustomValidity('Nama Barang Tidak Boleh Kosong')" oninput="setCustomValidity('')" id="nama_barang" class="form-control" placeholder="Nama Barang"/>
                    
        <br/>
        <label>Keterangan</label>
        <input type="text" name="keterangan" required oninvalid="this.setCustomValidity('Keterangan Tidak Boleh Kosong')" oninput="setCustomValidity('')" id="keterangan" class="form-control" placeholder="Keterangan"/>

        <br/>
        <label>Harga Beli</label>
        <input type="number" name="harga_beli" id="harga_beli" onkeyup="hitung();" required oninvalid="this.setCustomValidity('Harga Beli Tidak Boleh Kosong')" oninput="setCustomValidity('')" class="form-control" placeholder="Harga Beli"/>

        <br/>
        <label>Keuntungan</label>
        <input type="number" name="untung" id="untung" onkeyup="hitung();" required oninvalid="this.setCustomValidity('Keuntungan Tidak Boleh Kosong')" oninput="setCustomValidity('')"  class="form-control" placeholder="Keuntungan"/>

        <br/>
        <label>Potongan Harga</label>
        <input type="number" name="potongan_harga" id="potongan_harga" onkeyup="hitung();" required oninvalid="this.setCustomValidity('Diskon Tidak Boleh Kosong')" oninput="setCustomValidity('')"  class="form-control" placeholder="Potongan Harga"/>

        <br/>
        <label>Harga Jual</label>
        <input type="number" onkeyup="hitung();" name="harga_jual" id="harga_jual" required oninvalid="this.setCustomValidity('Harga Jual Tidak Boleh Kosong')" oninput="setCustomValidity('')"  class="form-control" placeholder="Harga Jual"/>

        </div>
        <div class="modal-footer">
          <input type="submit" name="action" id="action" class="btn btn-primary" value="Tambah" />
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </form>
  </div>
</div>


<?php include "bawah.php"; ?>

<script>
  $(document).on("click", "#hapus", function(e) {
    e.preventDefault();
    var link = $(this).attr("href");
    bootbox.confirm("Yakin Ingin Menghapus ?", function(confirmed){
      if (confirmed){
        window.location.href = link;
      };
    })
  })
</script>
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