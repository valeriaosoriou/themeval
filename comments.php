<h5 class="mt-5" >Comments... </h5>
<small><?php comments_number(' no comments yet', ' one response', ' % responses'); ?></small>
<hr>

<!---------------------- Form input ------------------->
<?php comment_form(); ?>
<!---------------------- Comments list ---------------->
<?php wp_list_comments(array(
  'callback' => function($comment, $args, $depth){ ?>
  <!----------------------- Avatar --------------------->
  <div class="media">
      <?php
      if ( $args['avatar_size'] != 0 ) {
        echo get_avatar( $comment, $args['avatar_size'] );
      }
      ?>
      <!-------------------- body ----------------------->
      <h5 class="mt-0">
          <?php
            printf(__('<cite>%s</cite> <span>says:</span>'), get_comment_author_link()); // author says
          ?>
        </h5>
      
      <!-------------------- Moderation ---------------------->
      <div class="media-body">
        <?php
          if ( $comment->comment_approved == '0' ) { ?>
              <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em><br/><?php
        } ?>
      <!---------------------- Comment dynamic ---------------->
      <?php comment_text(); ?>
      <!----------------------- Reply Btn --------------------->
      <span>
        <?php
          comment_reply_link(
            array_merge(
              $args,
                array(
                  'reply_text' => 'Reply',
                  'add_below' => $add_below,
                  'depth'     => $depth,
                  'max_depth' => 2
                )
            )
          );
        ?>
      </span>
      <!------------------------- Edit btn -------------------->
      <span>
        <?php
          edit_comment_link( __( 'Edit' ), '  ', '' );
        ?>
      </span>

    </div><!-- end media-body -->
  </div><!-- end media -->

<?php }
  ));
?>