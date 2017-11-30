<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "egco313";

<<<<<<< HEAD
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully <br>";
echo "----------------------------<br>";

$sql = "SELECT * FROM person";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "-age: " . $row["age"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);


?>
=======
	#logo {
		margin-bottom: 40px;
	}
	</style>
</head>
<body>
	<img id="logo1" src= https://aqueous-anchorage-76184.herokuapp.com/egoodies_lts_top.png />
	<img id="logo" src= https://s3-us-west-2.amazonaws.com/test-egco313/Eiffel.jpg />
	<h1><?php echo "Hello world!"; ?></h1>
	<?php if(!$link) { ?>
		<h2>Can't connect to local MySQL Server!</h2>
	<?php } else { ?>
		<h2>MySQL Server version: <?php echo mysql_get_server_info(); ?></h2>
	<?php } ?>
</body>
</html>
>>>>>>> a3552c15e0103c1f787c40332637bf60240ed5e0
