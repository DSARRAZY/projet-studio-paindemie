<div class="menu">
   <ul>
      <?php foreach (getMainMenuItems() as $menuItem) : ?>
            <li class="main-menu__item"><a href="<?php echo $menuItem->url; ?>"><?php echo $menuItem->title; ?></a></li>
            <!--<li><a href="<?php// echo bloginfo('url')?>">Accueil</a></li>
            <li><a href="#">Studio</a></li>
            <li><a href="<?php// echo get_post_type_archive_link('equipment');?>">Equipements</a></li>
            <li><a href="<?php// echo get_post_type_archive_link('references');?>">References</a></li>
            <li><a href="<?php// echo get_post_type_archive_link('contact');?>">Contact</a></li></li> -->
      <?php endforeach; ?>
   </ul>
</div> 
