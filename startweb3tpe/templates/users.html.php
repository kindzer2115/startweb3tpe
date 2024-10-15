<?php

include ('templates/helper.function.php'); 

$html = '<table class="table table-striped table-dar">';
$html .= '<tr><th>ID</th><th>imię i nazwisko</th><th>email</th><th>aktywność</th></tr>';

$sql = "SELECT * FROM users";
$res = $db->query($sql);

if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        $name = $row['user_name'] . ' ' . $row['user_surname'];
        $html .= '<tr>';
        $html .= '<td>' . $row['id'] . '</td>';
        $html .= '<td>' . $name . '</td>';
        $html .= '<td>' . $row['user_email'] . '</td>';
        $html .= '<td class="align-center">' . showStatusIcon($row['active']) . '</td>';
        $html .= '</tr>';
    }
    echo $html;
}
?>
