<section id="maincontent" onload="window.print()">

<!-- <button onclick="cetak()"style="background-color: #8FBC8F;">
      Cetak
    </button > -->

    <div class="container" id="cetak">


      <table class="table table-bordered">
        <div class="text-right" style="margin-bottom:10px;">
          <h3 style="text-align: center;">Daftar Jadwal Sholat</h3>
          <h4 style="text-align: center;">Masjid AL Ghifari</h4>
        </div>
        <thead>
          <tr>
            <th scope ="col" style="text-align: center;">No</th>
            <th scope="col" style="text-align: center;">Tanggal</th>
            <th scope="col"style="text-align: center;">Sholat Subuh</th>
            <th scope="col" style="text-align: center;">Sholat Zuhur</th>
            <th scope="col" style="text-align: center;">Sholat Asar</th>
            <th scope="col" style="text-align: center;">Sholat Magrib</th>
            <th scope="col" style="text-align: center;">Sholat Isya</th>
          </tr>
        </thead>

        <tbody>
          <?php 
          $no = 0;

          foreach($jadwal as $jad){ 
            $no++;?>

            <tr>
              <th style="text-align: center;"scope="row"><?php echo $no ?></th>
              <td style="text-align: center;"><?= $jad->tanggal; ?></td>
              <td style="text-align: center;"><?= $jad->jadwal_subuh; ?></td>
              <td style="text-align: center;"><?= $jad->jadwal_zuhur; ?></td>
              <td style="text-align: center;"><?= $jad->jadwal_asar; ?></td>
              <td style="text-align: center;"><?= $jad->jadwal_magrib; ?></td>
              <td style="text-align: center;"><?= $jad->jadwal_isya; ?></td>
            </tr>
          <?php } ?>

        </tbody>
      </table>

    </section>
 <!--  <script type="text/javascript">

    function cetak(){
      var printContent = document.getElementById("cetak").innerHTML;
      var originalContent = document.body.innerHTML;
      document.body.innerHTML = printContent;
      window.print();
      document.body.innerHTML = originalContent;
    }
  </script> -->
