<style>
    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-align: center;
        line-height: 40px;
    }

    button:active {
        background-color: #45a049;
    }


    button:hover {
        background-color: #45a049;
    }
</style>
<?php
global $wpdb;
// echo "HI";
$table_name = $wpdb->prefix . 'lease';
$now_user = wp_get_current_user()->display_name;

// 從資料庫中獲取資料
$all_addresses = $wpdb->get_col("SELECT address FROM $table_name WHERE lord_name='$now_user'");

foreach ($all_addresses as $address) {
    echo '<button type="button" onclick="buttonClick(\'' . $address . '\')"> ' . $address . '</button>';
}

// JavaScript 函式，處理按鈕點擊
echo '<script>
    function buttonClick(address) {
        var form = document.createElement("form");
        form.method = "post";
        form.action = "http://localhost/wordpress/租約細項房東/"; 

        var inputAddress = document.createElement("input");
        inputAddress.type = "hidden";
        inputAddress.name = "address";
        inputAddress.value = address;

        form.appendChild(inputAddress);

        document.body.appendChild(form);

        form.submit();
    }
</script>';
?>