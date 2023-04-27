<?php
include 'app/conexao.php';

?>
<!DOCTYPE html>
<html>
<body>

<?php
$sql = "SELECT cli_nasc FROM clientes";
$result = mysqli_query($conexao ,  $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "cli_nasc: " . $row["cli_nasc"].  "<br>";
    }
} else {
    echo "0 results";
}
?>

</body>
</html>