<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<h2>Penerbit</h2>

<p style="text-align: right;"><a href="<?php echo site_url('admin/penerbit/tambah'); ?>">Tambah Penerbit</a></p>
<table class="data-tabel">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Suplier</th>
			<th>Nama Penerbit</th>
			<th>Alamat Penerbit</th>
			<th>Telp Penerbit</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($penerbit->result() AS $i => $row) : ?>
			<tr>
				<td style="width: 40px;"><?php echo ($i + 1); ?></td>
				<td><?php echo $row->nama_suplier; ?></td>
				<td><?php echo $row->nama_penerbit; ?></td>
				<td><?php echo $row->alamat_penerbit; ?></td>
				<td><?php echo $row->telp_penerbit; ?></td>
				<td style="width: 110px; text-align: center;">
					<a href="<?php echo site_url('admin/penerbit/ubah/'.$row->id_penerbit); ?>">Ubah</a>
					<a href="<?php echo site_url('admin/penerbit/hapus/'.$row->id_penerbit); ?>">Hapus</a>
				</td>
			</tr>
		<?php endforeach; ?>		
	</tbody>
</table>