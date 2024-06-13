<?php get_header(); ?>
    <main>
        <!-- Blog -->
        <div class="container my-5">
            <div class="row">
                <?php if(have_posts()): while(have_posts()): the_post() ?>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="card mb-3">
                        <?php if ( has_post_thumbnail() ) :?>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumbnail', array('class'=>'card-img-top img-fluid'));?></a>
                        <?php endif;?>
                        <div class="card-body">
                            <?php if(!empty(the_title())):?>
                                <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
                            <?php endif;?>
                            <?php if(!empty(the_excerpt()) && the_excerpt() !== ''):?>
                                <p class="card-text"><?php the_excerpt();?></p>
                            <?php endif;?>
                        </div>
                        <div class="card-footer">
                            <?php echo get_the_date();?> / <?php the_category(','); ?> / <?php the_author()?>
                        </div>
                    </div>
                </div>
                <?php endwhile; endif;?>
            </div>
        </div>
    </main>
<?php get_footer()?>