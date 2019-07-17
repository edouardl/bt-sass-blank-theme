<form method="get" id="searchform" action="<?php echo esc_url(home_url()); ?>" role="search">
    <label for="s" class="label"><?php _e('Search', I18N_DOMAIN); ?></label>
    <input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e('Search', I18N_DOMAIN); ?>"/>
    <input type="submit" class="submit" name="submit" id="searchsubmit"
           value="<?php esc_attr_e('Search', I18N_DOMAIN); ?>"/>
</form>
