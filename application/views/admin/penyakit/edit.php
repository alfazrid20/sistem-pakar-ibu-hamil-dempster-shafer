<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<div class="x_title">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3>Update Penyakit</h3>

							<br>
							<form action="" method="POST">
								<div class="container">
									<div class="row">
										<input type="hidden" name="id" value="<?php echo $penyakit['id'] ?>">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span >Kode Penyakit : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="kode" class="form-control " style="font-size: 12px;" value="<?php echo $penyakit['kode'] ?>" >
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Nama Penyakit : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="nama" class="form-control" style="font-size: 12px;" value="<?php echo $penyakit['nama'] ?>">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Penanganan Awal/Pencegahan : </span>
										</div>
										<div class="col-md-12">
											<textarea name="keterangan" class="form-control" style="font-size: 12px;"><?php echo $penyakit['keterangan'] ?>
											</textarea>
											
										</div>
									</div>
									<br>
									<button type="submit" name="submit" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #51677b; border-color: #51677b;">Update</button>
									<a href="<?php echo site_url('/penyakit/index') ?>" class="btn btn-default btn-flat btn-sm" style="border-radius: 0px;">Batal</a>
								</div>
							</form>
						</div>	
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>