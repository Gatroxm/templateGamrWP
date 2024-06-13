<?php get_header()?>
<?php if(have_posts()): while(have_posts()): the_post() ?>
<main>
    <div class="container my-5">
        <h2><?php the_title()?></h2>
        <div class="text-justify">
            <?php the_content()?>
        </div>
    </div>
</main>
<?php endwhile; endif;?>
<?php get_footer()?>