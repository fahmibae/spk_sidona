<?php include "atas.php"; ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-md-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-700" >Wisata</h1>
            <div class="md-2 sm-2 xs-2">
            <button type="button" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#ModalTambah"><span class="icon text-white-50"><i class="fas fa-plus"></i></span><span class="text"> Tambah wisata</span></button>
          </div>
        </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">

            <div class="card-body">

              <div class="table-responsive">

                <form method="POST" action="barang_cari.php">
                  
                </form>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Nama Wisata</th>
                      <th>Alamat</th>
                      <th>Deskripsi</th>
                      <th>Latitude</th>
                      <th>Longitude</th>
                      <th>Gambar</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                         $no = 1;
                          $sql = mysqli_query($konek,"SELECT * FROM wisata");
                            while ($data = mysqli_fetch_array($sql)) {
                        ?>
                    <tr>
                      <td><?php echo $data['id']; ?></td>
                      <td><?php echo $data['nama_lokasi'];?></td>
                      <td><?php echo $data['alamat'];?></td>
                      <td><?php echo $data['deskripsi'];?></td>
                      <td><?php echo $data['lat'];?></td>
                      <td><?php echo $data['lng'];?></td>
                      <td><img width="100" src="../../../img/bg-img/<?php echo $data['gambar'];?>"></td>
                      <td align="center">
                        <a href="wisata_edit.php?id=<?php echo $data['id'];?>" class="btn btn-success btn-circle" style="background-color: #fff; border: 0"><i class="fa fa-edit" style="color: #858796;"></i></a>
                        <a href="barang/proses_delete.php?id_user=<?php echo $data['id_user'];?>" id="hapus" class="btn btn-danger btn-circle" style="background-color: #fff; border: 0"><i class="fa fa-trash" style="color: #858796;"></i></a>
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
    <form method="post" id="user_form" action="wisata/wisata_save.php" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header" style="background: #4e73df">
          <h4 class="modal-title" style="color: white;">Tambah Pengguna</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">

          <label>Nama Wisata</label>
          <input type="text" name="nama_wisata" id="nama_wisata" class="form-control" placeholder="Nama Wisata" required oninvalid="this.setCustomValidity('Nama Wisata Masih Kosong')" oninput="setCustomValidity('')"/>
          <br />
          <label>Alamat</label>
          <textarea name="alamat" id="alamat" rows="2" maxlength="255" class="form-control" placeholder="alamat" required oninvalid="this.setCustomValidity('Alamat Tidak Boleh Kosong')" oninput="setCustomValidity('')">
          </textarea>
          <br/>
          <label>Deskripsi Wisata</label>
          <textarea name="deskripsi" id="deskripsi" rows="3" maxlength="1000" class="form-control" placeholder="Deskripsi Wisata" required oninvalid="this.setCustomValidity('Deskripsi Wisata Tidak Boleh Kosong')" oninput="setCustomValidity('')">
          </textarea>
          <br />
          <label>Lattitude</label>
          <input type="text" name="lattitude" id="lattitude" class="form-control" placeholder="Lattitude" required oninvalid="this.setCustomValidity('Lattitude Tidak Boleh Kosong')" oninput="setCustomValidity('')"/>
          <br />
          <label>Longitude</label>
          <input type="text" name="longitude" id="longitude" class="form-control" placeholder="Longitude" required oninvalid="this.setCustomValidity('Longitude Tidak Boleh Kosong')" oninput="setCustomValidity('')"/>
          <br />
          <label>Gambar</label>
          <input type="file" name="gambar" id="gambar" class="form-control" placeholder="Gambar" required oninvalid="this.setCustomValidity('Gambar Tidak Boleh Kosong')" oninput="setCustomValidity('')"/>
          <br />

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