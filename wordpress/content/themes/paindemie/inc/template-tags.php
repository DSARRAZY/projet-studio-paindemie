<?php

/**
 * Show all references, artists
 *
 * @param  string $order order of appearance ASC or DESC argument
 * @return void
 */
function references($order = 'ASC')
{

    $references = new WP_Query(
        [
            'post_type' => 'references',
            'order' => $order,
            'orderby' => 'ID',

            //only display posts with photos
            'meta_key' => '_thumbnail_id',
            'meta_value_num' => 0,
            'meta_compare' => '!=',
        ]
    );
?>
    <!-- Carousel section-->

    <div id="studioCarousel" class="carousel slide" data-ride="carousel" data-interval="4000" data-pause="false">
        <div class="carousel-inner">

            <?php if ($references->have_posts()) : while ($references->have_posts()) : $references->the_post(); ?>

                    <div class="<?php echo ($references->current_post == 0) ? 'carousel-item active' : 'carousel-item'; ?>">

                        <a class="title-page-group" href="<?php echo get_permalink(get_the_ID()); ?>">
                            <div>
                                <?php the_post_thumbnail() ?>
                                <h2><?php the_title() ?></h2>Voir la page du groupe
                            </div>
                        </a>
                    </div><!-- carousel-item -->

            <?php endwhile;
            endif ?>

        </div><!-- carousel-inner -->
    </div><!-- carousel-slide -->

    <?php
}

/**
 * Display quantity if quantity of equipment greater than 1
 * 
 * @return void
 * 
 * * 
 */

function quantityEquipment()
{
    $displayQuantity =  (get_field('equipment_quantity'));
    if ($displayQuantity > 1) {
        echo $displayQuantity . " ";
    }
}

// fonction permettant d'aller chercher les catégories d'équipements.
function categoryEquipments()
{

    // Retrieve taxonomies
    $taxonomies = get_categories('taxonomy=equipment_category_taxonomy&type=custom_post_type');

    foreach ($taxonomies as $taxonomy) {
        //var_dump($taxonomy);
        //Boucle permettant d'aller chercher tous les équipements de la catégorie
        $args = [
            'post_type' => 'equipment',
            'tax_query' => [
                [
                    'taxonomy' => 'equipment_category_taxonomy',
                    'field' => 'term_taxonomy_id',
                    'terms' => $taxonomy->term_id
                ],
            ],
        ];
        $Equipments = new WP_Query($args);
        // Retrieve image
        $image = get_field('equipment_img', 'equipment_category_taxonomy' . '_' . $taxonomy->term_id);
    ?>
       
       <section class="col-sm-12 col-md-4 col-lg-3 all_equipment">
        <div class="card mb-3">
            <div class="container container_all_equipment">
                <div class="dropdown">
                    <h2 class="category_name"><?= $taxonomy->name ?></h2>
                    <img src="<?= ($image['url']) ?>" class="card-img-top" alt="...">
                    <div class="caption">Voir le matériel</div>
                    <div class="list">
                        <?php if ($Equipments->have_posts()) : while ($Equipments->have_posts()) : $Equipments->the_post(); ?>
                        <div class="item"><?php quantityEquipment(); the_title(); ?></div>
                        <?php endwhile; ?>
                    </div>
                        <?php endif; ?>
                </div>
            </div>
        </div>     
    </section>

<?php }

} ?>
