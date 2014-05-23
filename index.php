<?php get_header(); ?>
<div class="row container">
    <?php
    $args = 'p=34';
    $my_query = new WP_Query( $args );

    if( $my_query->have_posts() ) :
    while( $my_query->have_posts() ) : $my_query->the_post();
    ?>
        <h1 class="show-for-medium-up text-center">Capitol Web Marketing Consultants</h1>
        <h1  class="show-for-small text-center">CWMC</h1>
        <hr />
        <?php  //JasperDisplayOrbit(); ?>
    <article class="hentry">
        <div class="row collapse">
            <h2 class="small-12 large-12 columns text-center entry-title" itemprop="name"><span id="numero1" itemprop="headline"><a rel-bookmark href="<?php the_permalink(); ?>" itemprop="url"><?php the_title(); ?></a></span></h2>
            <?php Jasper_entry_meta(); ?>
        </div>

    <div id="firstStop" class="small-9 large-8 columns panel">
        <?php the_content(); ?>
    <?php
            endwhile;
        endif;
        rewind_posts();
    ?>
    </div>
    </article>
    <div class="small-3 large-4 columns show-for-medium-up">
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
