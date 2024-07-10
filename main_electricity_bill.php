<div>
    <?php
    global $wpdb;

    $now_user = wp_get_current_user()->display_name;
    $table_name = $wpdb->prefix . 'lease';
    $eb = $wpdb->get_var("SELECT electricity_bill FROM $table_name WHERE tenant_name = '$now_user'");
    echo '<h3 style="color: white;">' . esc_html($eb) . '元</h3>';
    ?>
</div>