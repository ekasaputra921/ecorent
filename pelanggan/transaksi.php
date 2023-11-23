<?php
if (!isset($_SESSION["pelanggan"])) {
  header('location: login.php');
  exit;
}
?>
<div class="panel panel-info">
  <div class="panel-heading"><h3 class="text-center">Sewa</h3></div>
  <div class="panel-body">
    <form action="?page=selesai" method="POST">
      <input type="hidden" name="id_mobil" value="<?=$_GET["id"]?>">
      <div class="form-group">
        <label for="lama">Lama Sewa</label>
        <select name="lama" class="form-control">
          <?php for ($i=1; $i<=7; $i++): ?>
            <option value="<?=$i?>"><?=$i?> Hari</option>
          <?php endfor; ?>
        </select>
      </div>
      <div class="form-group">
        <label>Tanggal Ambil</label>
        <div class="row">
          <div class="col-md-4">
            <select name="tgl" class="form-control" required="on">
              <option>Tanggal</option>
              <?php for ($i=1; $i<=31; $i++): ?>
                <option value="<?=$i?>"><?=$i?></option>
              <?php endfor; ?>
            </select>
          </div>
          <div class="col-md-4">
            <select name="bln" class="form-control" required="on">
              <option>Bulan</option>
              <option value="1">Januari</option>
              <option value="2">Februari</option>
              <option value="3">Maret</option>
              <option value="4">April</option>
              <option value="5">Mei</option>
              <option value="6">Juni</option>
              <option value="7">Juli</option>
              <option value="8">Agustus</option>
              <option value="9">September</option>
              <option value="10">Oktober</option>
              <option value="11">November</option>
              <option value="12">Desember</option>
            </select>
          </div>
          <div class="col-md-4">
            <select name="thn" class="form-control" required="on">
              <option>Tahun</option>
              <?php for ($i=2020; $i<=2030; $i++): ?>
                <option value="<?=$i?>"><?=$i?></option>
              <?php endfor; ?>
            </select>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="jaminan">Jaminan</label>
        <select name="jaminan" class="form-control">
          <option value="STNK">STNK</option>
          <option value="KTP">KTP</option>
        </select>
      </div>
      <button type="submit" class="btn btn-info btn-block">NEXT!</button>
    </form>
  </div>
</div>
