<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<h2>Ubah Buku</h2>

<form method="post" action="<?php echo site_url('admin/buku/ubah'); ?>">
	<input type="hidden" name="id_penerbit" value="<?php echo $buku->id_buku; ?>">
	<table class="form-input">
		<tbody>
			<tr>
				<td class="label">Nama Suplier</td>
				<td class="input"><input type="text" name="nama_suplier" value="<?php echo $buku->nama_suplier; ?>" style="width: 100%"></td>
			</tr>		
			<tr>
				<td class="label">Nama Penerbit</td>
				<td class="input"><input type="text" name="nama_penerbit" value="<?php echo $buku->nama_penerbit; ?>" style="width: 100%"></td>
			</tr>
			<tr>
				<td class="label">Kategori</td>
				<td class="input"><input type="text" name="nama_kategori" value="<?php echo $buku->nama_kategori; ?>" style="width: 100%"></td>
			</tr>
			<tr>
				<td class="label">Judul Buku</td>
				<td class="input"><input type="text" name="judul_buku" value="<?php echo $buku->judul_buku; ?>" style="width: 100%"></td>
			</tr>						
			<tr>
				<td class="label"></td>
				<td class="input"><button type="submit">Ubah</button></td>
			</tr>
		</tbody>
	</table>
</form>