<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<h2>Tambah Suplier</h2>

<form method="post" action="<?php echo site_url('admin/suplier/tambah'); ?>">
	<table class="form-input">
		<tbody>
			<tr>
				<td class="label">Nama Suplier</td>
				<td class="input"><input type="text" name="nama_suplier" style="width: 100%"></td>
			</tr>
			<tr>
				<td class="label">Alamat Suplier</td>
				<td class="input"><input type="text" name="alamat_suplier" style="width: 100%"></td>
			</tr>
			<tr>
				<td class="label">Telp Suplier</td>
				<td class="input"><input type="text" name="telp_suplier" style="width: 100%"></td>
			</tr>						
			<tr>
				<td class="label"></td>
				<td class="input"><button type="submit">Simpan</button></td>
			</tr>
		</tbody>
	</table>
</form>