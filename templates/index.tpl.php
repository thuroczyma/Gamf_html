<!DOCTYPE html>
<html>
<head>
	<title>Rent a Pet</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="./styles/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<?php if(file_exists('./styles/'.$find['file'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $find['file']?>.css" type="text/css"><?php } ?>
</head>
<body>
	<header>
		<div class="jumbotron" style="margin-bottom:0">
			<h1 class="text-left">Rent a Pet</h1>
		</div>
	</header>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav">
				<?php foreach ($pages as $url => $page) { ?>
					<li<?= (($page === $find) ? ' class="nav-item active"' : ' class="nav-item"') ?>>
					<a class="nav-link" href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>">
					<?= $page['text'] ?></a>
					</li>
				<?php } ?>
            </ul>
		</div>  
	</nav>

    <div class="container">
        <div id="content">
            <?php include("./templates/pages/{$find['file']}.tpl.php"); ?>
        </div>
    </div>
    <footer>
		<div class="jumbotron" text-left style="margin-bottom:0">
			<?php if(isset($footer['copyright'])) { ?>&copy;&nbsp;<?= $footer['copyright'] ?> <?php } ?>
			&nbsp;
			<?php if(isset($footer['firm'])) { ?><?= $footer['firm']; ?><?php } ?>
		</div>

    </footer>

</body>
</html>
