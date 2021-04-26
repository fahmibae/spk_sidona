<?php include "atas.php";?>

<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-md-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-700" >Edit Barang</h1>

          </div>
                    <br/>
                   <?php
                    $level  = $_POST['level'];
                    $sql = mysqli_query($konek, "SELECT max(id_user) AS maxKode FROM user WHERE id_user LIKE '$level%'");
                    $row = mysqli_fetch_array($sql);
                    $kodeMax = $row['maxKode'];

                    $no_urut = (int) substr($kodeMax, 3, 2);

                    $no_urut++;

                    $newkode = $level . sprintf("%02s", $no_urut);

                    if ($level == "ksr"){
                        $level_user = "kasir";
                      }elseif ($level == "gdg"){
                        $level_user = "gudang";
                      }
                    ?>
                    <form method="POST" id="form" class="form-horizontal form-label-left" action="pengguna/pengguna_save.php">
                    
                    <label>Id User</label>
                    <input type="text" readonly name="id_user" value="<?php echo $newkode; ?>" id="id_user" class="form-control" required/>

                    <br/>
                     <label>Nama Pengguna</label>
                     <input type="text" name="nama_pengguna" required oninvalid="this.setCustomValidity('Nama Pengguna Tidak Boleh Kosong')" oninput="setCustomValidity('')" id="nama_pengguna" class="form-control" placeholder="Nama Pengguna"/>

                    <br/>
                    <label>Username</label>
                   <input type="text" name="username" required oninvalid="this.setCustomValidity('Username Tidak Boleh Kosong')" oninput="setCustomValidity('')" id="username" class="form-control" placeholder="Username"/>
                    
                    <br/>
                    <label>Password</label>
                    <input type="password" name="password" required oninvalid="this.setCustomValidity('Password Tidak Boleh Kosong')" oninput="setCustomValidity('')" id="password" class="form-control" placeholder="Password"/>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                    <input type="checkbox" name="show-hide" value="" id="show-hide"/> Tampilkan  
                    </div>

                    <br/>
                    <label>Level</label>
                    <input type="text" name="level" id="level" value="<?php echo $level_user ;?>" class="form-control" placeholder="Level" readonly/>

                    <br/>
                    <div class="form-group">
                     
                   
                      <button class="btn btn-success" style="width: 90px;"><i class="fa fa-floppy-o" ></i> Ubah</button>
                       <a href="pengguna.php"><button type="button" class="btn btn-default" style="background-color: #858796; color: #fff;">Kembali</button></a>
                   
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