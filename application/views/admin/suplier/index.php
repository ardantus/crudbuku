<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<h2>Suplier</h2>

<p style="text-align: right;"><a href="<?php echo site_url('admin/suplier/tambah'); ?>">Tambah Suplier</a></p>
<table class="data-tabel">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Suplier</th>
			<th>Alamat Suplier</th>
			<th>Telp Suplier</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($suplier->result() AS $i => $row) : ?>
			<tr>
				<td style="width: 40px;"><?php echo ($i + 1); ?></td>
				<td><?php echo $row->nama_suplier; ?></td>
				<td><?php echo $row->alamat_suplier; ?></td>
				<td><?php echo $row->telp_suplier; ?></td>
				<td style="width: 110px; text-align: center;">
					<a href="<?php echo site_url('admin/suplier/ubah/'.$row->id_suplier); ?>">Ubah</a>
					<a href="<?php echo site_url('admin/suplier/hapus/'.$row->id_suplier); ?>">Hapus</a>
				</td>
			</tr>
		<?php endforeach; ?>		
	</tbody>
</table>