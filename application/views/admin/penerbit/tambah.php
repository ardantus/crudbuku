<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<h2>Tambah Penerbit</h2>

<form method="post" action="<?php echo site_url('admin/penerbit/tambah'); ?>">
	<table class="form-input">
		<tbody>
			<tr>
				<td class="label">Nama Suplier</td>
				<td class="input"><input type="text" name="nama_suplier" style="width: 100%"></td>
			</tr>
			<tr>
				<td class="label">Nama Penerbit</td>
				<td class="input"><input type="text" name="nama_penerbit" style="width: 100%"></td>
			</tr>
			<tr>
				<td class="label">Alamat Penerbit</td>
				<td class="input"><input type="text" name="alamat_penerbit" style="width: 100%"></td>
			</tr>
			<tr>
				<td class="label">Telp Penerbit</td>
				<td class="input"><input type="text" name="telp_penerbit" style="width: 100%"></td>
			</tr>						
			<tr>
				<td class="label"></td>
				<td class="input"><button type="submit">Simpan</button></td>
			</tr>
		</tbody>
	</table>
</form>