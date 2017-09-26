<?php get_header(); ?>


<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="article-list">
<?php
    if (have_posts()){
        while (have_posts()) { the_post();
?>
            <div class="entry-title text-center">
                <h2><?php the_title(); ?></h2>
            </div>

<?php
    if(has_post_thumbnail()){
?>
                    <div class="entry-featured-content shadow-z-2">
                        <?php the_post_thumbnail('full',array('class'=>'img-responsive')); ?>
                    </div>
<?php
    }
?>
            
            
            <div class="entry-content">
<?php 
    the_content();
?>
            </div>
         
                                               
<hr>
            
            
            <?php comments_template(); ?>

<?php
        }
    }
?> 
              
        </div>                                    
    </div>
</div>

<?php get_footer(); ?>