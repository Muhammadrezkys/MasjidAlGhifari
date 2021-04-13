<h2 style="text-align: center;"><a href="#" style="color: black;">FOTO KEGIATAN</a></h2>   
<section id="maincontent">
  <div class="container">
    <div class="row">
      <ul class="portfolio-area da-thumbs">
        <?php foreach ($foto as $fot) { ?>
          <li class="portfolio-item" data-id="id-0">
            <div class="span4   ">
              <div class="image-wrapp" style="width: 300px; height: 260px" >

                <img src="<?= base_url(''); ?>uploads/<?= $fot->gambar ?>" alt="Portfolio name" title="" />
                
                <figcaption><?= $fot->nama_foto; ?></figcaption>
                
                <article class="da-animate da-slideFromRight">
                  <a class="zoom" data-pretty="prettyPhoto" href="<?= base_url(''); ?>uploads/<?= $fot->gambar ?> ">
                    <i class="icon-zoom-in icon-rounded icon-48 active"></i>
                  </a>
                  <div class="hidden-tablet">
                   <p>
                     <figcaption><?= $fot->nama_foto; ?></figcaption> 
                   </p>
                 </div>
               </article>

             </div>
           </div>
         </li>
       <?php } ?>
     </ul>
   </section>
