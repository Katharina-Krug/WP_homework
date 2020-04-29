<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<title><?= $pagetitle['title'] . ( (isset($pagetitle['motto'])) ? ('|' . $pagetitle['motto']) : '' ) ?></title>
	<link rel="stylesheet" href="./styles/style.css" type="text/css">
	<?php if(file_exists('./styles/'.$find['file'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $find['file']?>.css" type="text/css"><?php } 
	 ?>
</head>
<body>
<!-- using hero-image instead of header tag--> 
<div class="hero-image">
  <div class="hero-text">
  <h1 style="margin:10px"><?php echo $header['title'] ;?></h1>
  <?php if (isset($header['motto'])) { ?><h2><?= $header['motto'] ?></h2><?php } ?>
  <img src="./images/<?=$header['imagesource']?>" alt="<?=$header['imagealt']?>" style="max-width:100px;max-height:100px; margin: 10px">

  </div>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  
                <ul class="navbar-nav">
					<?php foreach ($pages as $url => $page) { ?>
						<li class="nav-item" <?= (($page == $find) ? ' class="active"' : '') ?>>
						<a class="nav-link" href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>">
						<?= $page['text'] ?></a>
						</li>
					<?php } ?>
                </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
	<form action="https://www.google.com/search" class="searchform" method="get" name="searchform" target="_blank">
		<input name="sitesearch" type="hidden" value="https://internationaler-bund.org/en/">
		
		<div style="width: 300px; display: table">
			<div style="display: table-cell; width: 100%;"> <!-- This is the wrapper div around the text input -->
			<input name="sitesearch" type="hidden" value="https://internationaler-bund.org/en/">
			<input autocomplete="on" class="form-control search" name="q" placeholder="Search here" required="required"  type="text" style="display: table-cell;width: 100%; height:40px">
			</div>
			<button class="button" type="submit" style="width: 100%; height:40px">Search</button>
		</div>

	</form>
		<br><br>
      <h2>IB's Original Website</h2>
	  <iframe src="https://internationaler-bund.org/en/" href="https://internationaler-bund.org/en/"></iframe>
		<br>
		<a href="https://internationaler-bund.org/en/" target="_blank">go to webpage</a>
	  <br>
	  <br>
      <h3>Social Media Channels</h3>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link" href="https://www.youtube.com/user/InternationalerBund" target="_blank">IB on Youtube</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://www.linkedin.com/company/internationaler-bund-ib-/?originalSubdomain=de" target="_blank">IB on LinkedIn</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.facebook.com/ib.international.cooperation/" target="_blank">IB on Facebook</a>
        </li>
	  </ul>
	  <br>
	  <br>
	  <h3>Contact us</h3>
        <form action="index.php?page=contactform" method="post" class="needs-validation" novalidate> 
		<div class="form-group"><label for="fname">First name: </label><input type="text" class="form-control" id="fname" name="fname" style="width:250px" required></div><div class="valid-feedback">Valid.</div><div class="invalid-feedback">Please fill out this field.</div>
		<div class="form-group"><label for="lname">Last name: </label><input type="text" class="form-control" id="lname" name="lname" style="width:250px" required></div>
			<div class="fas fa-envelope prefix"></i><label for="email">E-mail address: </label><input type="email" id="email" name="email" class="form-control" style="width:250px" required></div><br>
			<label>Your message:</label><br>
			<div class="md-form md-outline"><textarea id="message" name="message" class="md-textarea form-control" rows="5" style="width:250px; height:300px"></textarea><label for="message"></label></div>
			<button type="submit" class="btn btn-primary">Submit</button>
			<br><br>
		</form>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">

	<div id="content">
            <?php include("./templates/pages/{$find['file']}.tpl.php"); ?>
		</div>
    </div>
  </div>
</div>

<div>
	
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
		<?php if(isset($footer['copyright'])) { ?>&copy;&nbsp;<?= $footer['copyright'] ?> <?php } ?>
		&nbsp;
        <?php if(isset($footer['firm'])) { ?><?= $footer['firm']; ?><?php } ?>
</div>




<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

</body>
</html>
