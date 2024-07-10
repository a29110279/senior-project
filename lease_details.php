<?php
global $wpdb;
$table_name = $wpdb->prefix . 'lease';
$now_user = wp_get_current_user()->display_name;
// 	echo "HI";

if (isset($_POST['address'])) {
    $address = $_POST['address'];
    // 		echo $address;

    $ID = $wpdb->get_var("SELECT ID FROM $table_name WHERE address = '$address' AND lord_name='$now_user' ");
    $lord_name = $wpdb->get_var("SELECT lord_name FROM $table_name WHERE address = '$address' AND lord_name='$now_user' ");
    $tenant_name = $wpdb->get_var("SELECT tenant_name FROM $table_name WHERE address = '$address' AND lord_name='$now_user' ");
    $address = $wpdb->get_var("SELECT address FROM $table_name WHERE address = '$address' AND lord_name='$now_user' ");
    $rent = $wpdb->get_var("SELECT rent FROM $table_name WHERE address = '$address' AND lord_name='$now_user' ");
    $electricity_bill = $wpdb->get_var("SELECT electricity_bill FROM $table_name WHERE address = '$address' AND lord_name='$now_user' ");

    echo '<h4 >租約編號：' . $ID . '</h4>';
    echo '<h4 >房東名稱：' . $lord_name . '</h4>';
    echo '<h4>房客名稱：' . $tenant_name . '</h4>';
    echo '<h4>地址：' . $address . '</h4>';
    echo '<h4>租金：' . $rent . '</h4>';
    echo '<h4>電費/度：' . $electricity_bill . '</h4>';
}
