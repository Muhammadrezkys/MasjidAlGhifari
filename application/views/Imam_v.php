<section id="maincontent" onload="window.print()">

<!-- <button onclick="cetak()"style="background-color: #8FBC8F;">
      Cetak
</button > -->

  <div class="container" id="cetak">
   

    <table class="table table-bordered">
<div class="text-right" style="margin-bottom:10px;">
    <h3 style="text-align: center;">Daftar Imam Sholat</h3>
    <h4 style="text-align: center;">Masjid AL Ghifari</h4>
  </div>
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Imam Subuh</th>
           <th scope="col">Imam Zuhur</th>
          <th scope="col">Imam Asar</th>
          <th scope="col">Imam Magrib</th>
          <th scope="col">Imam Isya</th>
        </tr>
      </thead>

      <tbody>
        <?php 
        $no = 0;

        foreach($imam as $ima){ 
          $no++;?>

          <tr>
            <th scope="row"><?php echo $no ?></th>
            <td><?= $ima->tanggal; ?></td>
            <td><?= $ima->imam_subuh; ?></td>
            <td><?= $ima->imam_zuhur; ?></td>
            <td><?= $ima->imam_asar; ?></td>
            <td><?= $ima->imam_magrib; ?></td>
            <td><?= $ima->imam_isya; ?></td>
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
