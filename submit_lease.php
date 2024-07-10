<?php
// 	echo "HI";
global $wpdb;
$table_name = $wpdb->prefix . 'lease';
if (isset($_POST['submit'])) {

    $landlord = $_POST['landlord'];
    $tenant = $_POST['tenant'];
    $address = $_POST['address'];
    $rent = $_POST['rent'];
    $electricity = $_POST['electricity'];
    $W = 0;
    // 	echo $landlord;
    // 	echo $rent;
    // 	echo $address;

    $data = array(
        'lord_name' => $landlord,
        'tenant_name' => $tenant,
        'address' => $address,
        'rent' => $rent,
        'electricity_bill' => $electricity,
        'W' => $W
    );
    // 插入資料庫
    $result = $wpdb->insert($table_name, $data, array('%s', '%s', '%s', '%d', '%d', '%d'));
    // 指定每個值的數據類型

    if ($result != false) {
        echo "<h4>租約新增成功！</h4>";
    }
}
