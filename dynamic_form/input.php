<?php
include('./koneksidb.php'); 
?>
<html lang="en">
<head>
    <meta charset="utf-8" />
	  <meta name="referrer" content="always" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets2/img/apple-icon.png">
    <!-- <link rel="icon" type="image/png" href="assets2/img/favicon.png"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Wika Release</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.css" />
    <!-- CSS Files -->
    <link href="assets2/css/bootstrap.min.css" rel="stylesheet" />
    <!-- <link href="assets2/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" /> -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets2/css/demo.css" rel="stylesheet" />
  <style>
    .containers {
      overflow-x: auto;
      white-space: nowrap;
      padding: 0 1px;
      text-align: left;
    }
      
    #external-events {
      float: left;
      width: 150px;
      
      }
      
    #external-events h4 {
      font-size: 16px;
      margin-top: 0;
      padding-top: 1em;
      }
      
    .external-event { /* try to mimick the look of a real event */
      margin: 10px 0;
      padding: 2px 4px;
      background: #3366CC;
      color: #fff;
      font-size: .85em;
      cursor: pointer;
      }
      
    #external-events p {
      margin: 1.5em 0;
      font-size: 11px;
      color: #666;
      }
      
    #external-events p input {
      margin: 0;
      vertical-align: middle;
      }

    #calendar {
  /*    float: right; */
      margin: 0 auto;
      width: 100%;
      background-color: #FFFFFF;
        border-radius: 6px;
        border-color: blue;
      box-shadow: 0 3px 5px #2CA8FF;
      }

    img.kiri {
        float: left;
        margin: 5px;
        width: 110px;
        height: 75px;
    }

    img.kanan {
        float: right;
        margin: 5px;
        width: 110px;
        height: 100px;
    }

    </style> <!-- kalender --> 
</head> 
<body>     
   <div class="wrapper">
    <div class="section section-navbars" style="padding-top : 100px;">
      <div class="container" id="menu-dropdown">
        <div class="row">
          <div class="col-md-12" align="center">
                <img src="./images/wika.png" class="kiri">
            <img src="./images/images.jpg" class="kanan">
            <br>
            <h6 align="left"><b>HCIS</b><br>Human Capital Information System</h6>
            <hr>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container" align="center" style="padding : 0px 0px;">
  <!-- Nav tabs -->
  <div class="card">
    <div class="card-body">
      <!-- Tab panes -->
      <div class="tab-content text-center">
        <!-- Mini Modal -->
        <div class="modal fade modal-mini modal-primary" id="myModal1" name="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header justify-content-center">
              </div>
            </div>
          </div>
        </div>
      </div>
  <!--Inputan Wika release-->
  <form method="post" action="">
  <div class="container" align="center" style="padding : 0px 0px;">
    <!-- <h5><b><u>HUBUNGI KAMI</u></b></h5> -->
    <div class="row" style="width:100%; padding-top : 8px;" align="center">
      <div class="col-md-2" align="left">
        Versi
      </div>
      <div class="col-md-8" align="left">
        <input id="versi" name="nama" type="text" value="" placeholder="Isi disini..." class="form-control" />
      </div>
    </div>
    <div class="row" style="width:100%; padding-top : 8px;" align="center">
      <div class="col-md-2" align="left">
        Tanggal
      </div>
      <div class="col-md-8" align="left">
        <input id="tanggal" name="tanggal" type="date" value="" placeholder="Isi disini..." class="form-control" />
      </div>
    </div>
    <div class="row" style="width:100%; padding-top : 8px;" align="center">
      <div class="col-md-2" align="left">
        Modul
      </div>
      <div class="col-md-4" align="left">
        <select required id="modul" name="modul" class="form-control">
                        <option value="OD"></option>
                        <option value="PA">PA</option>
                        <option value="ESS">ESS</option>
                        <option value="PFM">PFM</option>
                        <option value="Talent">Talent</option>
                        <option value="Training">Training</option>
                        <option value="MPP">MPP</option>
                        <option value="Rekrut">Rekrut</option>
                        <option value="Training">Training</option>
                        <option value="Payroll">Payroll</option>
        </select>
      </div>
      <div class="col-md-2"></div>
    </div>
    <div class="row" style="width:100%; padding-top : 8px;" align="center">
      <div class="col-md-2" align="left">
        Menu
      </div>
      <div class="col-md-8" align="left">
        <input id="menu" name="menu" placeholder="Isi disini..." class="form-control" />
      </div>
    </div>
    <div class="row" style="width:100%; padding-top : 8px;" align="center">
      <div class="col-md-2" align="left">
        Release
      </div>
      <div class="col-md-8" align="left">
        <input id="release" name="release" placeholder="Isi disini..." class="form-control" />
      </div>
    </div><br>
    <div class="col-md-12" align="center" style="padding-right:30px;">
      <button class="btn btn-primary btn-round" type="submit" name="submit">Submit</button>
    </div>
  </form>

	<div class="containers">
	<table class="table table-bordered"  style="margin-top: 10px;">
		<thead style="background-color:#B4B7BA;">
		  <tr>
			<th>No</th>
			<th>Versi</th>
			<th>Tanggal</th>
			<th>Modul</th>
			<th>Menu</th>
			<th>Release</th>
			<th>Fungsi</th>
		  </tr>
		</thead>
		<tbody>
			<?php
				$sql	= 'select * from tbl_versi_modul';
				$query	= mysqli_query($db_link,$sql);
			

				while($data	= mysqli_fetch_array($query)){ 

				$i++;
			?>
			<tr class=odd>
                    <td style='text-align:center'><b>$i</b></td>
                    <td style='text-align:center'><?php echo $data['versi']; ?></td>
                    <td style='text-align:center'><?php echo $data['tanggal']; ?></td>
                    <td style='text-align:center'><?php echo $data['modul']; ?></td>
                    <td style='text-align:center'><?php echo $data['menu_versi']; ?></td>
                    <td style='text-align:center'><?php echo $data['release']; ?></td>";
          <!-- UPDATE `tbl_versi_modul` SET `tanggal` = '11/23/2018' WHERE `tbl_versi_modul`.`id` = 1;-->
            		<td valign=top width=200>
                    <a href=$PHP_SELF?act=update&$primary_key=".$$primary_key."><img src=/images/button_edit.gif border=0>Edit</a>
                    <a href=$PHP_SELF?act=delete&$primary_key=".$$primary_key." onClick=\"javascript:return confirm('Anda Yakin Menghapus Data ini?');return false;\"><img src=/images/button_delete.gif border=0>Delete</a>
				</td>
			</tr>
			<?php
				if($i==0){
			?>		
		<tr>
			<td colspan=8 align=center>** Tidak ada data ** </td>
		</tr>
		<?php
			} 
		?>

			<?php
				}
			?>
		</tbody>
	</table>
	</div>
<!--   Core JS Files   -->
<script src="assets2/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets2/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets2/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="assets2/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets2/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<!--<script src="/assets2/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>-->
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="assets2/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>
<link href="assets2/fullcalendar.css" rel="stylesheet" />
<link href="assets2/fullcalendar.print.css" rel="stylesheet" media="print" />
<script src="assets2/jquery/jquery-ui.custom.min.js"></script>
<script src="assets2/fullcalendar.js"></script>
<script src="assets2/js/bootstrap-datepicker.min.js"></script>
</html>