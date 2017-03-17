<form method="get" id="searchform" action="<?php echo esc_url( home_url() ); ?>" role="search">
    <label for="s" class="label"><?php _e( 'Search', 'bsbt' ); ?></label>
    <input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'bsbt' ); //@TODO : change i18n domain name to yours ?>" />
    <input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'bsbt' ); //@TODO : change i18n domain name to yours ?>" />
</form>
