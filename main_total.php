<div>
    <?php
    global $wpdb;

    $now_user = wp_get_current_user()->display_name;
    $table_name = $wpdb->prefix . 'lease';
    $rent = $wpdb->get_var("SELECT rent FROM $table_name WHERE tenant_name = '$now_user'");
    $eb = $wpdb->get_var("SELECT electricity_bill FROM $table_name WHERE tenant_name = '$now_user'");
    $W = $wpdb->get_var("SELECT W FROM $table_name WHERE tenant_name = '$now_user'");
    $total = ($W * $eb) + $rent;
    echo '<h3 style="color: white;">' . esc_html($total) . '元</h3>';

    ?>
</div>