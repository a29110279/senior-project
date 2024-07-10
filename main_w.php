<div>
    <?php
    global $wpdb;

    $now_user = wp_get_current_user()->display_name;
    $table_name = $wpdb->prefix . 'lease';
    $W = $wpdb->get_var("SELECT W FROM $table_name WHERE tenant_name = '$now_user'");
    echo '<h3 style="color: white;">' . esc_html($W) . '度</h3>';

    ?>
</div>