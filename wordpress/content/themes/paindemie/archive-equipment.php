<?php
get_header();
?>

<div class="mainEquipment">
  <section class="equipment-image">
  </section>

  <section class="introduction">
    <h1 class="introduction__title"><?php echo get_theme_mod('paindemie_theme_equipment_title');?></h1>
    <p class="introduction__subtitle"><?php echo get_theme_mod('paindemie_theme_equipment_subtitle');?></p>
  </section>

  <section class="equipment-display">
    <div class="row justify-content-center">
      
        <?php categoryEquipments();?>
      
    </div>
  </section>
</div>

<?php
get_footer();
?>


