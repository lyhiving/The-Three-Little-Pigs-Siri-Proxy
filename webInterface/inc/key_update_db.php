<?phprequire_once 'config.inc.php';require_once("functions.inc.php");require_once("functions.php");require_once("connection.inc.php");if (        isset($_POST['KeyId']) &&                isset($_POST['ValidationData']) &&        isset($_POST['KeyLoad']) &&        ((int) $_POST['KeyId'] >= 0) &&                $_POST['ValidationData'] != "" &&        ((int) $_POST['KeyLoad'] >= 0)) {    $key_id = (int) $_POST['KeyId'];        $validation_data = trim($_POST['ValidationData']);    $keyload = (int) $_POST['KeyLoad'];    $query = 'UPDATE `keys` SET sessionValidation="' . $validation_data . '",keyload="' . $keyload . '"  WHERE id="' . $key_id . '" ';    $result = $db->MakeQuery($query);    header("Location: ../?page=server-status");    die();    } else {    header("Location: ../?page=server-status");    die();}?>