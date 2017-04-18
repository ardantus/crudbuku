<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<h2>Tambah Buku</h2>

<form method="post" action="<?php echo site_url('admin/buku/tambah'); ?>">
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
				<td class="label">Kategori</td>
				<td class="input"><input type="text" name="nama_kategori" style="width: 100%"></td>
			</tr>
			<tr>
				<td class="label">Judul Buku</td>
				<td class="input"><input type="text" name="judul_buku" style="width: 100%"></td>
			</tr>						
			<tr>
				<td class="label"></td>
				<td class="input"><button type="submit">Simpan</button></td>
			</tr>
		</tbody>
	</table>
</form>