<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<h2>Buku</h2>

<p style="text-align: right;"><a href="<?php echo site_url('admin/buku/tambah'); ?>">Tambah Buku</a></p>
<table class="data-tabel">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Suplier</th>
			<th>Nama Penerbit</th>
			<th>Kategori</th>
			<th>Judul Buku</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($buku->result() AS $i => $row) : ?>
			<tr>
				<td style="width: 40px;"><?php echo ($i + 1); ?></td>
				<td><?php echo $row->nama_suplier; ?></td>
				<td><?php echo $row->nama_penerbit; ?></td>
				<td><?php echo $row->nama_kategori; ?></td>
				<td><?php echo $row->judul_buku; ?></td>
				<td style="width: 110px; text-align: center;">
					<a href="<?php echo site_url('admin/buku/ubah/'.$row->id_buku); ?>">Ubah</a>
					<a href="<?php echo site_url('admin/buku/hapus/'.$row->id_buku); ?>">Hapus</a>
				</td>
			</tr>
		<?php endforeach; ?>		
	</tbody>
</table>