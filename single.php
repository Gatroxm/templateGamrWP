<?php get_header()?>
<main>
    <div class="container my-5">
        <div class="row">
            <!-- Articulo -->
            <?php if(have_posts()): while(have_posts()): the_post() ?>
            <div class="col-12 col-md-9">
                <?php if ( has_post_thumbnail() ) :?>
                    <?php the_post_thumbnail('post-thumbnail', array('class'=>'card-img-top img-fluid'));?>
                <?php endif;?>
                <h2 class="my-3"><?php the_title();?></h2>
                <p class="lead"><?php echo get_the_date();?> / <?php the_category(','); ?> / <?php the_author()?></p>
                <div class="text-justify">
                    <?php the_content()?>
                </div>
            </div>
            <?php endwhile; endif;?>
            <!-- Aside -->
            <div class="col-12 col-md-3">
                <?php get_sidebar();?>
            </div>
        </div>
    </div>
</main>
<?php get_footer()?>