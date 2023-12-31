<?php
if (!isset($_SESSION["pelanggan"])) {
	header('location: login.php');
}
?>
<div class="panel panel-info">
	<div class="panel-heading"><h3 class="text-center">Detail Transaksi</h3></div>
	<div class="panel-body">
		<table class="table table-hover">
			<tbody>
				<?php $query = $connection->query("SELECT t.id_transaksi, m.nama_mobil, t.lama, t.jaminan, t.total_harga, t.tgl_sewa, t.tgl_ambil, t.jatuh_tempo, t.status, t.konfirmasi, t.pembatalan FROM transaksi t JOIN pelanggan p USING(id_pelanggan) JOIN mobil m ON t.id_mobil=m.id_mobil WHERE id_transaksi=$_GET[id]");?>
				<?php while ($r = $query->fetch_assoc()): ?>
					<tr>
						<th>Mobil</th>
						<td>: <?=$r['nama_mobil']?></td>
					</tr>
					<tr>
						<th>Lama</th>
						<td>: <?=$r['lama']?> Hari</td>
					</tr>
					<tr>
						<th>Jaminan</th>
						<td>: <?=$r['jaminan']?></td>
					</tr>
					<tr>
						<th>Total</th>
						<td>: Rp.<?=number_format($r['total_harga'])?>,-</td>
					</tr>
					<tr>
						<th>Tanggal Ambil</th>
						<td>: <?=($r['tgl_ambil']) ? date("d-m-Y H:i:s", strtotime($r['tgl_ambil'])) : "<b>Belum</b>"?></td>
					</tr>
					<tr>
						<th>Pembayaran Paling Lambat</th>
						<td>: <?=date("d-m-Y H:i:s", strtotime($r['jatuh_tempo']))?></td>
					</tr>
					<tr>
						<th>Konfirmasi</th>
						<td>: <span class="label label-<?=($r['konfirmasi']) ? "success" : "danger"?>"><?=($r['konfirmasi']) ? "Sudah" : "Belum"?></span></td>
					</tr>
					<tr>
						<th>Kembali</th>
						<td>: <span class="label label-<?=($r['status']) ? "success" : "danger"?>"><?=($r['status']) ? "Sudah" : "Belum"?></span></td>
					</tr>
					<tr>
						<th>Pembatalan</th>
						<td>: <span class="label label-<?=($r['pembatalan']) ? "danger" : "success"?>"><?=($r['pembatalan']) ? "Ya" : "Tidak"?></span></td>
					</tr>
					<tr class="hidden-print">
						<th></th>
						<td> &nbsp;
							<?php if (!$r['konfirmasi']): ?>
								<a href="?page=konfirmasi&id=<?= $r['id_transaksi'] ?>" class="btn btn-primary">Konfirmasi Sekarang</a>
							<?php endif ?>
						</td>
					</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>
</div>
