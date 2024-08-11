<?php
function get_product($mysqli_conn, $limit = '', $cat_id = '', $prod_id = '')
{
    $query = "SELECT kpjcafe_products.*,kpjcafe_category.cat_id FROM kpjcafe_products,kpjcafe_category WHERE kpjcafe_products.isAvailable='Available'";
    if ($limit != '') {
        $query .= " LIMIT BY $limit";
    }

    $res = mysqli_query($mysqli_conn, $query);
    $data = array();
    while ($row = mysqli_fetch_assoc($res)) {
        $data[] = $row;
    }
    return $data;
}
function get_safe_value($mysqli_conn, $str)
{
    if ($str != '') {
        $str = trim($str);
        return mysqli_real_escape_string($mysqli_conn, $str);
    }
}
?>