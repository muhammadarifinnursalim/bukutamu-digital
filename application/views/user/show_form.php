<body>
	<div class="container">
		<div class="row justify-content-start">
			<div class="col-3 mg-top20"></div>
			<div class="col-6 mg-top20">
				<?php
					if (validation_errors()){
				?>
						<div class="alert alert-danger" role="alert">
							<?php echo validation_errors() ?>
						</div>
				<?php
					}
				?>
				<?php echo form_open(base_url()); ?>
					<div class="form-group row">
						<label for="nama" class="col-4 col-form-label">Nama Lengkap Anak</label>
						<div class="col-8">
							<input type="text" name="nama" class="form-control" id="nama" required="required" />
						</div>
					</div>
					<div class="form-group row">
						<label for="namaortu" class="col-4 col-form-label">Nama Orangtua</label>
						<div class="col-8">
							<input type="text" name="namaortu" class="form-control" id="namaortu" required="required" />
						</div>
					</div>
					<div class="form-group row">
						<label for="kelas" class="col-4 col-form-label">Kelas</label>
						<div class="col-8">
							<input type="text" name="kelas" class="form-control" id="kelas" required="required" />
						</div>
					</div>
					<div class="form-group row">
						<label for="instansi" class="col-4 col-form-label">Kelompok</label>
						<div class="col-8">
							<input type="text" name="instansi" class="form-control" id="instansi" required="required" />
						</div>
					</div>
					<div class="form-group row">
						<label for="alamatinstansi" class="col-4 col-form-label">Desa</label>
						<div class="col-8">
							<input type="text" name="alamatinstansi" class="form-control" id="alamatinstansi" required="required" />
						</div>
						</div>
						<div class="form-group row">
						<label for="notelepon" class="col-4 col-form-label">No Telepon</label>
					<div class="col-8">
							<input type="text" name="notelepon" class="form-control" id="notelepon" required="required" />
						</div>
					</div>
					<div class="form-group row">
						<label for="email" class="col-4 col-form-label">Alamat email</label>
						<div class="col-8">
							<input type="email" name="email" class="form-control" id="email" required="required" />
						</div>
					</div>
					<div class="form-group row">
						<label for="komentar" class="col-4 col-form-label">Saran Dan Kritik</label>
						<div class="col-8">
							<textarea name="komentar" class="form-control" id="komentar" required="required"  placeholder="Di isi Minimal 10 Karakter"></textarea>
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Kirim</button>
				</form>
				<div class="col-12 text-center mg-top20">
				<a href="<?php echo base_url()?>view_list" class="btn btn-primary">Klik disini untuk melihat data</a>
			</div>
			</div>
			<div class="col-3 mg-top20"></div>
		</div>
	</div>
</body>
