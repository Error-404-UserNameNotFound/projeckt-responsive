
<?php
			session_start();

			$servername = "localhost";
			$username = "root";
			$password = "";
			$pwd1 = $_POST["pwd1"];
			$pwd2 = $_POST["pwd2"];

			if (isset($pwd1, $pwd2) and  ($pwd1 === $pwd2)) {

					$hash = password_hash($pwd1, PASSWORD_DEFAULT);
				}
			elseif ($pwd1 =! $pwd2) {

				echo "<div class=\"popup\">Passwörter sind nicht gleich</div>";
				}

			try {

				$conn = new PDO("mysql:host=$servername;dbname=users", $username,$password);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$stmt = $conn->prepare("INSERT INTO userdb (email, username, password)
				VALUES (:email, :username, :password)");
				$stmt->bindParam(':email', $email);
				$stmt->bindParam(':username', $user);
				$stmt->bindParam(':password', $hash);

				$email = $_POST['email'];
				$user = $_POST['user'];
				$password = $hash;
				
				
				$stmt->execute();
		
				echo "<div class=\"popup\">Registrierung war erfolgreich</div>";
			}
			catch(PDOException $e) {

				echo "<div class=\"popup\">Error:"  . $e->getMessage() ."</div>";
			}

			$conn = null;

?>
</body>
</html>



