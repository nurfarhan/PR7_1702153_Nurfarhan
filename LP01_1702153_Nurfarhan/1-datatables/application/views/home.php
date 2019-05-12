<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>
<!--table -->
<div class="container" style="margin-top: 20px">
  <div class="col-md-12">
    <h2 style="text-align: center;margin-bottom: 30px"> Data Tabel</h2><hr>
    <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th> Nomor</th>
          <th> Nama </th>

        </tr>
      </thead>
      <tbody>

        <tr>
          <td>1</td>
          <td>Lokomotif</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Gerbong</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Kursi</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Left Join(Lokomotif & Kursi)</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Right Join(Kursi & gerbong)</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Inner Join(Kursi & Gerbong & Kereta)</td>
        </tr>

      </tbody>
    </table>
  </div>

	<div class="col-md-4">
		<h2 style="text-align: center;margin-bottom: 30px"> Data Lokomotif</h2><hr>
		<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>

					<th> Kode Kereta </th>
					<th> Nama Kereta</th>

				</tr>
			</thead>
			<tbody>
				<?php

				foreach ($data_lokomotif as $lokomotif) {
				?>
				<tr>

					<td><?php echo $lokomotif->kd_kereta; ?></td>
					<td><?php echo $lokomotif->nama_kereta; ?></td>

				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

<!-- gerbong -->
  <div class="col-md-4">
		<h2 style="text-align: center;margin-bottom: 30px"> Data Gerbong</h2>
    <hr>
		<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>

					<th> Kode Gerbong </th>
					<th> Kode Kereta </th>
          <th> Nama Gerbong </th>
				</tr>
			</thead>
			<tbody>
				<?php

				foreach ($data_gerbong as $gerbong) {
				?>
				<tr>

					<td><?php echo $gerbong->kd_gerbong; ?></td>
					<td><?php echo $gerbong->kd_kereta; ?></td>
          <td><?php echo $gerbong->nama_gerbong; ?></td>

				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>


  <!-- kursi -->
    <div class="col-md-4">
  		<h2 style="text-align: center;margin-bottom: 30px"> Data Kursi</h2>
      <hr>
  		<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
  			<thead>
  				<tr>

  					<th> Kode Kursi </th>
  					<th> Kode Gerbong </th>
            <th> Kode Kereta </th>
  				</tr>
  			</thead>
  			<tbody>
  				<?php

  				foreach ($data_kursi as $kursi) {
  				?>
  				<tr>

  					<td><?php echo $kursi->kd_kursi; ?></td>
  					<td><?php echo $kursi->kd_gerbong; ?></td>
            <td><?php echo $kursi->kd_kereta; ?></td>

  				</tr>
  				<?php } ?>
  			</tbody>
  		</table>
  	</div>

</div>


<div class="container" style="margin-top: 20px">
<!-- LJ -->
  <div class="col-md-4">
    <h2 style="text-align: center;margin-bottom: 30px"> Data LeftJoin</h2>
    <hr>
    <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>

          <th> Kode Kereta </th>
          <th> Nama Kereta</th>
          <th> Kode Kursi </th>

        </tr>
      </thead>
      <tbody>
        <?php

        foreach ($datalj as $lj) {
        ?>
        <tr>

          <td><?php echo $lj->kd_kereta; ?></td>
          <td><?php echo $lj->nama_kereta; ?></td>
          <td><?php echo $lj->kd_kursi; ?></td>

        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  <!-- RJ -->
    <div class="col-md-4">
      <h2 style="text-align: center;margin-bottom: 30px"> Data RightJoin</h2>
      <hr>
      <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr>

            <th> Kode Gerbong </th>
            <th> Nama Gerbong</th>
            <th> Kode Kursi </th>

          </tr>
        </thead>
        <tbody>
          <?php

          foreach ($datarj as $rj) {
          ?>
          <tr>

            <td><?php echo $rj->kd_gerbong; ?></td>
            <td><?php echo $rj->nama_gerbong; ?></td>
            <td><?php echo $rj->kd_kursi; ?></td>

          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <!-- IJ -->
      <div class="col-md-4">
        <h2 style="text-align: center;margin-bottom: 30px"> Data InnerJoin</h2>
        <hr>
        <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>

              <th> Kode Gerbong </th>
              <th> Kode Kereta </th>
              <th> Kode Kursi </th>
              <th> Nama Gerbong </th>
              <th> Nama Kereta </th>

            </tr>
          </thead>
          <tbody>
            <?php

            foreach ($dataij as $ij) {
            ?>
            <tr>

              <td><?php echo $ij->kd_gerbong; ?></td>
              <td><?php echo $ij->kd_kereta; ?></td>
              <td><?php echo $ij->kd_kursi; ?></td>
              <td><?php echo $ij->nama_gerbong; ?></td>
              <td><?php echo $ij->nama_kereta; ?></td>

            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
</div>



<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>
</body>
</html>
