<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<h2>kategori</h2>

<p style="text-align: right;"><a href="<?php echo site_url('admin/kategori/tambah'); ?>">Tambah Kategori</a></p>
<table class="data-tabel">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Kategori</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($kategori->result() AS $i => $row) : ?>
			<tr>
				<td style="width: 40px;"><?php echo ($i + 1); ?></td>
				<td><?php echo $row->nama_kategori; ?></td>
				<td style="width: 110px; text-align: center;">
					<a href="<?php echo site_url('admin/kategori/ubah/'.$row->id_kategori); ?>">Ubah</a>
					<a href="<?php echo site_url('admin/kategori/hapus/'.$row->id_kategori); ?>">Hapus</a>
				</td>
			</tr>
		<?php endforeach; ?>		
	</tbody>
</table>