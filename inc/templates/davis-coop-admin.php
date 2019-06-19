<h1>Theme Options<h1>
<h3>Manage Options</h3>
<p>Change settings here</p>

<?php settings_errors(); ?>

<form method="post" action="options.php" class="">
    <?php settings_fields( 'davis-coop-general-info-group' ) ?>
    <?php do_settings_sections( 'davis_theme_options' ); ?>
    <?php submit_button(); ?>
</form>