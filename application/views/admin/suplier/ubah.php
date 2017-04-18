<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<h2>Ubah Suplier</h2>

<form method="post" action="<?php echo site_url('admin/suplier/ubah'); ?>">
	<input type="hidden" name="id_suplier" value="<?php echo $suplier->id_suplier; ?>">
	<table class="form-input">
		<tbody>
			<tr>
				<td class="label">Nama suplier</td>
				<td class="input"><input type="text" name="nama_suplier" value="<?php echo $suplier->nama_suplier; ?>" style="width: 100%"></td>
			</tr>
			<tr>
				<td class="label">Alamat suplier</td>
				<td class="input"><input type="text" name="alamat_suplier" value="<?php echo $suplier->alamat_suplier; ?>" style="width: 100%"></td>
			</tr>
			<tr>
				<td class="label">Telp suplier</td>
				<td class="input"><input type="text" name="telp_suplier" value="<?php echo $suplier->telp_suplier; ?>" style="width: 100%"></td>
			</tr>						
			<tr>
				<td class="label"></td>
				<td class="input"><button type="submit">Ubah</button></td>
			</tr>
		</tbody>
	</table>
</form>