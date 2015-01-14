<html>
<body>
<?php
require 'core/database/database.php';
require 'session.php';

?>

<?php
$user = $_POST['username'];
$password = $_POST['password'];
$_SESSION['user'] = $user;



// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION['user'] . ".<br>";

$pdo = Database::connect();
$result = $pdo->prepare("SELECT * FROM login WHERE username= :us AND password= :pa");
$result->bindParam(':us', $user);
$result->bindParam(':pa', $password);
$result->execute();
$rows = $result->fetch(PDO::FETCH_NUM);

if ($rows > 0) {
    session_cnt();

    $session_id = $rows1 +1;
    if(!isset($_SESSION)) session_start();
    $session_id = 2;
    $pdo = Database::connect();
    $sql = "INSERT INTO sessions (session_id, username)
    VALUES (:session_id,
    :user_name)";
    $result = $pdo->prepare($sql);
    $result->bindParam(':session_id', $session_id);
    $result->bindParam(':user_name', $user);
    $result->execute();
    header("location: dashboard.php");

} else {
    session_unset();
    session_destroy();
    header("location: error.php");

    exit();
}

?>

</body>
</html>