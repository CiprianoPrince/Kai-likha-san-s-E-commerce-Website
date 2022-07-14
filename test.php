<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '123456');
define('DB_NAME', 'phpblog');

	// Create Connection
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	// Check Connection
	if(mysqli_connect_errno()){
		// Connection Failed
		echo 'Failed to connect to MySQL '. mysqli_connect_errno();
	}

	$id = mysqli_real_escape_string($conn, 1);
	// $id = 1;

	// Create Query
	// $query = 'SELECT * FROM posts WHERE id = '.$id;
	$query = 'ALTER TABLE posts MODIFY New int(11) ';

	// Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
/* 	$post = mysqli_fetch_object($result);
	//var_dump($posts);

	// Free Result
	mysqli_free_result($result);

	// Close Connection
	mysqli_close($conn);
 	echo $post->firstname;
	 */

/* include 'includes/conn.php';

$conn = $pdo->open();

try{
	$stmt = $conn->prepare("SELECT * FROM users WHERE id=:id");
	$stmt->execute(['id'=>1]);
	$user = $stmt->fetch(PDO::FETCH_OBJ);
}
catch(PDOException $e){
	echo "There is some problem in connection: " . $e->getMessage();
}

echo $user->lastname;


$pdo->close();
 */
?>