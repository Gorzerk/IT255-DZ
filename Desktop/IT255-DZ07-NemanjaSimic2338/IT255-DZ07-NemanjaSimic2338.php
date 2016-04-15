<?php
$broj = $_POST['broj'];
function duplirajBroj($broj) {
    return $number * 2;
}
header("Content-type: application/json");
$prikazi = array ('Resenje je:' => duplirajBroj($broj));
echo json_encode($prikazi);
?>
