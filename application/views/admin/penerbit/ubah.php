<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<h2>Ubah Penerbit</h2>

<form method="post" action="<?php echo site_url('admin/penerbit/ubah'); ?>">
	<input type="hidden" name="id_penerbit" value="<?php echo $penerbit->id_penerbit; ?>">
	<table class="form-input">
		<tbody>
			<tr>
				<td class="label">Nama Suplier</td>
				<td class="input"><input type="text" name="nama_suplier" value="<?php echo $penerbit->nama_suplier; ?>" style="width: 100%"></td>
			</tr>		
			<tr>
				<td class="label">Nama Penerbit</td>
				<td class="input"><input type="text" name="nama_penerbit" value="<?php echo $penerbit->nama_penerbit; ?>" style="width: 100%"></td>
			</tr>
			<tr>
				<td class="label">Alamat Penerbit</td>
				<td class="input"><input type="text" name="alamat_penerbit" value="<?php echo $penerbit->alamat_penerbit; ?>" style="width: 100%"></td>
			</tr>
			<tr>
				<td class="label">Telp Penerbit</td>
				<td class="input"><input type="text" name="telp_penerbit" value="<?php echo $penerbit->telp_penerbit; ?>" style="width: 100%"></td>
			</tr>						
			<tr>
				<td class="label"></td>
				<td class="input"><button type="submit">Ubah</button></td>
			</tr>
		</tbody>
	</table>
</form>