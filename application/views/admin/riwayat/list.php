<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<h3>Daftar Riwayat Diagnosa</h3>

			<br>
			<br><br>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Kode Penyakit</th>
                		<th>Nama Penyakit</th>
                		<th>Kepercayaan</th>
                		<th>Keterangan</th>
                		<th>Tanggal</th>
                		<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no= 1; foreach ($kelompok_data2 as $data): ?>	
					<tr>
						<td><?php echo $data->kode ?></td>
						<td><?php echo $data->nama ?></td>
						<td><?php echo $data->kepercayaan ?></td>
						<td><?php echo $data->keterangan ?></td>	
                    	<td><?php echo $data->created_at ?></td>
                    	<td style="text-align: center; width: 200px;">
                    		<a href="<?php echo site_url('/riwayat/hapus/').$data->id ?>" class="btn btn-danger btn-sm" style="border-radius: 0px;" onclick="javasciprt: return confirm('Apakah anda yakin ?')"><i class="fa fa-trash"></i>  Hapus</a>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>

		</div>
	</div>
</div>