<div class="container mt-5">
	<div class="row">
		<div class="col-6">
		<h3><?=$data['judul']?></h3>
		<ul class="list-group">
			<?php foreach($data['mhs'] as $mhs): ?>
		  <li class="list-group-item d-flex justify-content-between align-items-center">
		  	<?=$mhs['nama']?>
		  	<a href="<?=BASEURL?>mahasiswa/detail/<?=$mhs['id']?>" class="badge badge-primary">detail</a>
		  	</li>
		  	<?php endforeach; ?>

		</ul>
		</div>
	</div>

</div>