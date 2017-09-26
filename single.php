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

<?php echo '<div class="entry-bottom"><p><span class="post-tags"><strong><i class="fa fa-tasks"></i> Catagories: </strong>'.get_the_category_list(' , ').'</p></div>'; ?>


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
if(get_post_format() == 'video'){
    ?>
<div class="article-featured-content shadow-z-2">
    <div class="embed-responsive embed-responsive-16by9">
        <?php the_excerpt(); ?>
    </div>
</div>
    <?
}
?>


<?php 
    the_content();
    wp_link_pages(array(
        'before'           => ' <div class="entry-bottom"><p class="post-pages"><span class="post-tags"><strong><i class="fa fa-book"></i> Pages:</strong>',
        'after'            => '</p></div>',
        'next_or_number'   => 'number',
        'separator'        => ' ',
    ));
?>
            </div>
            
           
<?php echo get_the_tag_list(' <div class="entry-bottom"><p><span class="post-tags"><strong><i class="fa fa-tags"></i> Tags:</strong> ',', ','</p></div>');  ?>
            
           
                                               
<hr>                                                
            <div class="post-author-meta">

                <div class="author-photo">
<?php echo get_avatar( get_the_author_meta( 'ID' ) , 96, null,'',array('class' => array('img-responsive') )); ?>
                </div>

                <div class="author-right-info">
                    <h2><?php echo get_the_author_meta( 'first_name').' '.get_the_author_meta( 'last_name') ?></h2>
                    <p><?php echo get_the_author_meta( 'description' ) ?></p>
                    <p><a href="<?php echo get_the_author_meta( 'user_url' )  ?>"><?php echo get_the_author_meta( 'user_url' ) ?></a></p>
                </div>

            </div>
            

            <nav role="navigation" class="navigation posts-navigation">
                <div class="nav-links">
<?php
    the_post_navigation(array(
            'screen_reader_text' => ' ',
            'next_text' => 'Older',
            'prev_text' => 'Newer'
        ));
?>              </div>
            </nav>
            
            
            <?php comments_template(); ?>


<?php
        }
    }
?> 
              
        </div>                                    
    </div>
</div>

<?php get_footer(); ?>