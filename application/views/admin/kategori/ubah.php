<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<h2>Ubah Suplier</h2>

<form method="post" action="<?php echo site_url('admin/kategori/ubah'); ?>">
	<input type="hidden" name="id_kategori" value="<?php echo $kategori->id_kategori; ?>">
	<table class="form-input">
		<tbody>
			<tr>
				<td class="label">Nama kategori</td>
				<td class="input"><input type="text" name="nama_kategori" value="<?php echo $kategori->nama_kategori; ?>" style="width: 100%"></td>
			</tr>
			<tr>
				<td class="label"></td>
				<td class="input"><button type="submit">Ubah</button></td>
			</tr>
		</tbody>
	</table>
</form>