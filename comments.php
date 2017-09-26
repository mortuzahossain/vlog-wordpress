            <div id="comments" class="comments-area">
                <div class="comment-area">
                <h2 class="comment-title"><?php comments_popup_link('No Comments'); ?></h2>
<?php

foreach ($comments as $comment) {
    ?>
    <ol class="comment-list">
        <li class="comment even thread-even depth-1">
            <article class="comment-body">
                <div class="comment-author-img">
                    <?php echo get_avatar( $comment) ?>
                </div>
                <div class="comment-content">
                    <h3><a href="<?php comment_author_url(); ?>"><?php comment_author(); ?></a> <span><i class="fa fa-clock-o"></i><?php comment_date(); ?></span></h3>
                    <p><?php comment_text(); ?></p>
                </div>
            </article>
        </li>
    </ol>
    </div>
    <?
}

?>



<?php 
if (comments_open()) {
    ?>
                <div id="respond" class="comment-respond">
                    <h3 id="reply-title" class="comment-reply-title">Leave a Comment</h3>
                    <form action="<?php echo site_url('wp-comments-post.php'); ?>" method="post" id="commentform" class="comment-form" novalidate="">
                    <input type="hidden" name="comment_post_ID" value="<?php echo $post->ID; ?>" id="comment_post_ID">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-control-wrapper">
                                    <input type="text" class="form-control empty" name="author">
                                    <div class="floating-label">Your Name</div>
                                    <span class="material-input"></span>
                                </div>  

                                <div class="form-control-wrapper">
                                    <input type="email" class="form-control empty" name="email">
                                    <div class="floating-label">Your Email</div>
                                    <span class="material-input"></span>
                                </div>  

                                <div class="form-control-wrapper">
                                    <input type="url" class="form-control empty" name="url">
                                    <div class="floating-label">Your Website</div>
                                    <span class="material-input"></span>
                                </div>                                           
                            </div>

                            <div class="col-md-6">
                                <div class="form-control-wrapper">
                                    <textarea name="comment" id="comment" class="form-control empty" cols="30" rows="10"></textarea>
                                    <div class="floating-label">Your Comment</div>
                                    <span class="material-input"></span>
                                </div>
                            </div>
                        </div>
                        <p class="form-submit">
                            <button type="submit" class="btn btn-danger">Submit comment</button>
                        </p>
                    </form>
    <?php
}

?>

 </div>
            </div> 