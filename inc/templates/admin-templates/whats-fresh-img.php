<?php $img = esc_attr( get_option( $option_name ) ); ?>
<?php if(empty($img)): ?>
    <input type="button" value="Upload" id="upload-<?php print $option_name ?>" class="button button-secondary upload-whats-fresh-img" />
    <input id="<?php print $option_name ?>" type="hidden" name="<?php print $option_name ?>" value="" />
    <p></p>
<?php else: ?>
    <input type="button" value="Upload" id="upload-<?php print $option_name ?>" class="button button-secondary upload-whats-fresh-img" />
    <input id="<?php print $option_name ?>" type="hidden" name="<?php print $option_name ?>" value="<?php print $img ?>" />
    <p>File name:  <?php print basename($img) ?></p>
<?php endif; ?>
