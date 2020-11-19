<?php

    session_start();
    $_SESSION = array();
    $params = session_get_cookie_params();

    setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]
);
    session_destroy();

?>

<?php
	include "inc/head.inc.php";
?>
	<!--HEADER-->
	<header>
		<div class='container'>
				<h1>Login</h1>
		</div>
	</header>

	<!--MAIN-->
	<main class='container'>
        <p>You have been successfully logged out</p>
        <a href='signin.php' class='btn btn-primary'>Log Back In</a>
	</main>
	<!--FOOTER-->
	<?php
		include "inc/foot.inc.php";
	?>