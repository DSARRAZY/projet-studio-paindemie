<?php
get_header();
?>
<!-- page all artist -->
<section class="all_artist overflow-auto">

  <div class="container mainReferences">

      <div class="row">
        <section class="col introduction">
          <div class="type-js headline">
            <h1 class="text-js introduction__title">Les artistes qui sont passés chez nous!</h1>
          </div>
          <div class="line"></div>
        </section>
      </div>

      <div class="row">
        <section class="col equipment-display">
            <?php //display of references, artists
              references();     
            ?>
        </section>

        <section class="col equipment-display">
            <?php //display of references, artists
              references('DESC');  
            ?>
        </section>
      </div>

  </div>

</section>

<?php
get_footer();
?>
