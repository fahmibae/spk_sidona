<?php include "atas.php"; ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          
          <!-- Page Heading -->
          <div class="d-md-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-700" >Supplier</h1>
           <div align="left">
         <div class="col-md-2 col-sm-6 col-xs-12">
            <button type="button" class="btn btn-primary btn-icon-split" data-toggle="modal" style="width: 182px;" data-target="#ModalTambah"><span class="icon text-white-50"><i class="fas fa-plus"></i></span><span class="text"> Tambah Supplier</span></button>
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
                      <th>Kode Supplier</th>
                      <th>Nama Supplier</th>
                      <th>Alamat</th>
                      <th>Telepon</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                         $no = 1;
                          $sql = mysqli_query($konek,"SELECT * FROM supplier");
                            while ($data = mysqli_fetch_array($sql)) {
                        ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $data['kode_supplier'];?></td>
                      <td><?php echo $data['nama_supplier'];?></td>
                      <td><?php echo $data['alamat'];?></td>
                      <td><?php echo $data['telepon'];?></td>
                      <td align="center">
                        <a href="edit_supplier.php?kode_supplier=<?php echo $data['kode_supplier'];?>" type="button" class="btn btn-success btn-circle" style="background-color: #fff; border: 0"><i class="fa fa-edit" style="color: #858796;"></i></a>
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
    <form method="post" id="user_form" action="supplier/supplier_save.php" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header" style="background: #4e73df">
          <h4 class="modal-title" style="color: white;">Tambah Supplier</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">

       <?php
       $sql = mysqli_query($konek, "SELECT max(kode_supplier) AS maxKode FROM supplier");
       $row = mysqli_fetch_array($sql);
       $kodeMax = $row['maxKode'];
       $no_urut = (int) substr($kodeMax, 2, 4);
       $no_urut++;
       $char = "SP";
       $supplier = $char . sprintf("%04s", $no_urut);
      ?>

          <label>Kode Supplier</label>
          <input type="text" name="kode_supplier" value="<?php echo $supplier;?>" id="kode_supplier" class="form-control" placeholder="kode supplier" readonly/>
          <br />
          <label>Nama Supplier</label>
          <input type="text" name="nama_supplier" id="nama_supplier" class="form-control" placeholder="Nama supplier" required oninvalid="this.setCustomValidity('Nama Supplier Masih Kosong')" oninput="setCustomValidity('')"/>
          <br />
          <label>Alamat</label>
          <textarea name="alamat" id="alamat" class="form-control" placeholder="alamat" required oninvalid="this.setCustomValidity('Alamat Tidak Boleh Kosong')" oninput="setCustomValidity('')"/>
          </textarea>
          <br />
          <label>Telepon</label>
          <input type="number" name="telepon" id="telepon" class="form-control" placeholder="telepon" required oninvalid="this.setCustomValidity('Telepon Tidak Boleh Kosong')" oninput="setCustomValidity('')"/>
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