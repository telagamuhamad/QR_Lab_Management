<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laporan Data Aset</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/');?>css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body>
    <img src ="assets/img/header2.png" style="position: absolute;" width="800" height= auto>
  <table style="width: 100%;">
    <tr>
      <td align="right">
      <img src = "assets/img/Logo_PLN.png" style="float:right;width:80px;height:100px;">
      </td>
    </tr>
  </table>
    <br><br><br><br><br>

                <p style="text-align: center;">LAPORAN<br>
                <p style="text-align: center;">DATA ASET LABORATORIUM<br>
                <p style="text-align: center;">PT PLN (PERSERO) UPDL PALEMBANG<br>
              
    <br>

<table class="table table-bordered">
                                  <thead>
                                    <tr>
                                      <th scope="col">No</th>
                                      <th scope="col">Kode Aset</th>
                                      <th scope="col">Nama Aset</th>
                                      <th scope="col">Klasifikasi</th>
                                      <th scope="col">Spesifikasi</th>
                                      <th scope="col">Tempat</th>
                                      <th scope="col">Foto Aset</th>
                                                      
                                  </tr>
                              </thead>
                              <?php
                              $no = 1;
                              foreach($aset as $as){
                                ?>
                                <tbody>
                                    <tr>
                                      <td><?php echo $no++ ?></td>
                                      <td><?php echo $as->kode_aset?></td>
                                      <td><?php echo $as->nama_aset?></td>
                                      <td><?php echo $as->klasifikasi?></td>
                                      <td><?php echo $as->spesifikasi?></td>
                                      <td><?php echo $as->lokasi_aset?></td>
                                      <td><?php echo $as->foto_aset?></td>
                                    
                    </tr>
                </tbody>
            <?php } ?>
        </table>                          

    <br><br>

<table style="width: 100%;" >
        <tr>
            <td align="left">
            <span style="font-family: 'Times New Roman', Times, serif;">
                <p>MAN 1 JAR</p>
                <br><br><br>
                <p>.............................</p>
            </span>
            </td>
            

            <td align="right">
                <span style="font-family: 'Times New Roman', Times, serif;">
                    <p>Palembang, .............................</p>
                    <p>Supervisor Laboratorium</p>
                    <br><br><br>
                    <p>.............................</p>
                </span>
                </td>
        </tr>
    </table>


</body>
</html>
