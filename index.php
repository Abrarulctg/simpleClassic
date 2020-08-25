
<?php get_header(); ?>


<div class="body">
    <div class="row">
        <div class="col-md-3 sidebar">
            <?php dynamic_sidebar('sidebar1'); ?>
        </div>
        <div class="col-md-9 postsSample">
            <?php 
            // This is for Posts Page
            // post thakle post show korte thakbe. r post na thakle error message dibe
            if(have_posts()){
                while(have_posts()){
                    the_post(); ?>
                            <h1 class=""><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h1>
                            <?php the_post_thumbnail(); ?>
                            <p class=""><?php the_content(); ?></p>
                            <br/> <br/>            
                    <!-- <?php //the_content("Read More &raquo;"); ?> -->

                <?php }

            }
            else{
                echo "no post found!";
            } 
            ?>
        </div>
    </div>
</div>

<hr class="footer-hr">
<?php get_footer(); ?>
