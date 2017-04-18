<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<h2>Tambah Kategori</h2>

<form method="post" action="<?php echo site_url('admin/kategori/tambah'); ?>">
	<table class="form-input">
		<tbody>
			<tr>
				<td class="label">Nama Kategori</td>
				<td class="input"><input type="text" name="nama_kategori" style="width: 100%"></td>
			</tr>						
			<tr>
				<td class="label"></td>
				<td class="input"><button type="submit">Simpan</button></td>
			</tr>
		</tbody>
	</table>
</form>