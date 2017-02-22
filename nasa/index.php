<?php
	$number = $_POST['number'];
	$submit = $_POST['submit'];
	
	if(isset($submit)){
		header('Location:https://www.ah.nl/producten/product/ah'.$number);
	}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>nasanummer zoeken.</title>

<link rel="stylesheet" type="text/css" href="reset.css"/>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>


<div class="container">
	<img src="https://www.ah.nl.kpnis.nl/1.45.2/_ui/img/logo-ah.svg" width="200px">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <h1>nasanummer opzoeken:</h1>
        <div>
            <input type="text" id="number" name="number"/>
            <button type="submit" name="submit">Zoek &gt;</button>
        </div>
    </form>
</div>
<!-- Made by Mitchell van der Hut. visit at mitchellvdhut.com -->
</body>
</html>
