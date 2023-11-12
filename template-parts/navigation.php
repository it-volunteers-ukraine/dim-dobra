<div class="container navigation-wrapper">

    <div class="navigation-box">
        <?php $next_post = get_next_post(true);

        if( ! empty( $next_post ) ){
            ?>
            <a class="navigation-text" href="<?php echo get_permalink( $next_post ); ?>">
                <svg class="navigation-icon" width="32px" height="32px">
                    <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite-logo.svg#arrow-left"></use>
                </svg>
                <div><?php echo esc_html( $next_post->post_title ); ?></div>
                
            </a>
            <?php
        } ?>
    </div>

    <div class="navigation-box">
        <?php $previous_post = get_previous_post(true);

        if( ! empty( $previous_post ) ){
            ?>
            <a class="navigation-text" href="<?php echo get_permalink( $previous_post ); ?>">
                <div><?php echo esc_html( $previous_post->post_title ); ?></div>
                <svg class="navigation-icon" width="32px" height="32px">
                    <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite-logo.svg#arrow-right"></use>
                </svg>
            </a>
            <?php
        } ?>
    </div>

</div>