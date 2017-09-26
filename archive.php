<?php get_header(); ?>
    
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="article-list">

<?php
    if (have_posts()){

?>
    <div class="archive-title shadow-z-1">
        <h2><?php the_archive_title(); ?></h2>
    </div>

<?php


        while (have_posts()) { the_post();
?>

                <article class="post">
                    <header class="article-title text-center">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p class="post-meta">by <?php the_author(); ?>  @ <?php echo get_the_date('d / m / Y'); ?></p>
                    </header>
<?php
    if(has_post_thumbnail()){
?>
                    <div class="article-featured-content shadow-z-2">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full',array('class'=>'img-responsive')); ?></a>
                    </div>
<?php
    }
?>
                    <div class="post-summary">
                        
<?php 
if(get_post_format() == 'video'){
    ?>
<div class="article-featured-content shadow-z-2">
    <div class="embed-responsive embed-responsive-16by9">
        <?php the_excerpt(); ?>
    </div>
</div>
    <?
} else {
    the_excerpt();
}
?>
                        
                    </div>

                    <div class="post-detail-link text-center">
                        <a href="<?php the_permalink(); ?>" class="btn btn-fab btn-raised btn-material-red">
                            <i class="fa fa-plus"></i>
                            <div class="ripple-wrapper"></div>
                        </a>
                    </div>
                </article>

<?php
        }
    }
?>

                
                <nav role="navigation" class="navigation posts-navigation">
                    <div class="nav-links">

<?php
    the_posts_navigation(array(
            'screen_reader_text' => ' ',
            'next_text' => 'Older',
            'prev_text' => 'Newer'
        ));
?>


                    </div>
                </nav>
                                                       
            </div>                                    
        </div>
    </div>
    

<?php get_footer( ); ?>