<body>
	<div class="container">
		<div class="row justify-content-start">
			<div class="col-12 mg-top20">
				<div class="row">
					<div class="col-6 pull-right"><a href="<?php echo base_url() ?>" class="btn btn-primary">Kembali</a></div>
					<?php if (isset($pagination)): ?>
						<div class="col-6 pull-right"><?php echo $pagination; ?></div>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-12 mg-top20">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nama Lengkap Anak</th>
							<th scope="col">Nama Orangtua</th>
							<th scope="col">Kelas</th>
							<th scope="col">Kelompok</th>
							<th scope="col">Desa</th>
							<th scope="col">No Telepon</th>
							<th scope="col">Email</th>
							<th scope="col">Saran Dan Kritik</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach ($lists as $list)
							{
						?>
								<tr>
									<th scope="row"><?php echo $row ?></th>
									<td><?php echo $list->nama ?></td>
									<td><?php echo $list->namaortu ?></td>
									<td><?php echo $list->kelas ?></td>
									<td><?php echo $list->instansi ?></td>
									<td><?php echo $list->alamatinstansi ?></td>
									<td><?php echo $list->notelepon ?></td>
									<td><?php echo $list->email ?></td>
									<td>
										<?php 
											echo substr($list->komentar, 0, 25);
											echo strlen($list->komentar) > 25 ? '<br /><span class="view-more" id="detail-' . $list->id . '">view more</span>': '';
										?>
									</td>
								</tr>
								<script>
									list_array['detail-<?php echo $list->id ?>'] = {};
									list_array['detail-<?php echo $list->id ?>']['nama'] = '<?php echo $list->nama ?>';
									list_array['detail-<?php echo $list->id ?>']['namaortu'] = '<?php echo $list->namaortu ?>';
									list_array['detail-<?php echo $list->id ?>']['kelas'] = '<?php echo $list->kelas ?>';
									list_array['detail-<?php echo $list->id ?>']['instansi'] = '<?php echo $list->instansi ?>';
									list_array['detail-<?php echo $list->id ?>']['alamatinstansi'] = '<?php echo $list->alamatinstansi ?>';
									list_array['detail-<?php echo $list->id ?>']['notelepon'] = '<?php echo $list->notelepon ?>';
									list_array['detail-<?php echo $list->id ?>']['email'] = '<?php echo $list->email ?>';
									list_array['detail-<?php echo $list->id ?>']['komentar'] = '<?php echo $list->komentar ?>';
								</script>
						<?php
								$row++;
							}
						?>
					</tbody>
				</table>
				
			</div>
			<?php if (isset($pagination)): ?>
					<div class="col-12 mg-top20 pull-right"><?php echo $pagination; ?></div>
			<?php endif; ?>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="detail-modal" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modal-title-text"></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-2">Nama Anak</div>
						<div class="col-1">:</div>
						<div class="col-9" id="modal-nama"></div>
					</div>
					<div class="row">
						<div class="col-2">Nama Orangtua</div>
						<div class="col-1">:</div>
						<div class="col-9" id="modal-namaortu"></div>
					</div>
					<div class="row">
						<div class="col-2">Kelas</div>
						<div class="col-1">:</div>
						<div class="col-9" id="modal-kelas"></div>
					</div>
					<div class="row">
						<div class="col-2">Instansi</div>
						<div class="col-1">:</div>
						<div class="col-9" id="modal-instansi"></div>
					</div>
					<div class="row">
						<div class="col-2">Alamat Instansi</div>
						<div class="col-1">:</div>
						<div class="col-9" id="modal-alamatinstansi"></div>
					</div>
					<div class="row">
						<div class="col-2">Email</div>
						<div class="col-1">:</div>
						<div class="col-9" id="modal-email"></div>
					</div>
					<div class="row">
						<div class="col-2">Saran Dan Kritik</div>
						<div class="col-1">:</div>
						<div class="col-9 text-wrap" id="modal-komentar"></div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<script>
		$( ".view-more" ).click(function() {
			var id = $(this).attr('id');

			$('#modal-title-text').text('Detail dari ' + list_array[id]['nama']);
			$('#modal-nama').text(list_array[id]['nama']);
			$('#modal-namaortu').text(list_array[id]['namaortu']);
			$('#modal-kelas').text(list_array[id]['kelas']);
			$('#modal-instansi').text(list_array[id]['instansi']);
			$('#modal-alamatinstansi').text(list_array[id]['alamatinstansi']);
			$('#modal-email').text(list_array[id]['email']);
			$('#modal-komentar').text(list_array[id]['komentar']);
			$('#detail-modal').modal('show');
		});
	</script>
</body>