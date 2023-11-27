 <div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<div class="x_title">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3>Update Gejala</h3>

							<br>
							<form action="" method="POST">
								<div class="container">
									<div class="row">
										<input type="hidden" name="id" value="<?php echo $gejala['id'] ?>">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span >Kelompok Gejala : </span>
										</div>
										<div class="col-md-12">
											<select name="kelompok_gejala_id" class="form-control " style="font-size: 12px;">
													<?php $kelompok_gejala = $this->Gejala_model->getlistkelompokgejala();

													?>
													<?php foreach ($kelompok_gejala->result() as $key){ ?>
														<option value="<?php echo $key->id ?>"><?php echo $key->nama; ?></option>
													<?php } ?> 
												
											</select>
										</div>

									<!-- 	<div class="col-md-12">
											<input type="text" name="kelompok_gejala_id" class="form-control " style="font-size: 12px;" value="<?php echo $gejala['kelompok_gejala_id'] ?>" >
										</div> -->
										
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Kode Gejala : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="kode" class="form-control" style="font-size: 12px;" value="<?php echo $gejala['kode'] ?>">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Nama Gejala : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="nama_gejala" class="form-control" style="font-size: 12px;" value="<?php echo $gejala['nama_gejala'] ?>">
										</div>
									</div>
									<br>
									<button type="submit" name="submit" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #51677b; border-color: #51677b;">Update</button>
									<a href="<?php echo site_url('/gejala/index') ?>" class="btn btn-default btn-flat btn-sm" style="border-radius: 0px;">Batal</a>
								</div>
							</form>
						</div>	
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>