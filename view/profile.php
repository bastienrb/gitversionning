<body>
	<?php include '_topbar.php'; ?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div id="musicfeed">
					<h1><i class="fa fa-pencil"></i> Profil de <?php echo $_GET['name']; ?></h1>
					<div class="block animated fadeInDown">
						<div class="row">
							<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
								<div class="author">
									<?php
									$sql = "SELECT * FROM users WHERE username = :username LIMIT 1";
											$req = $db->prepare($sql);
											$req->execute(array(
												':username' => $_GET['name']
											));
											$result = $req->fetch(PDO::FETCH_ASSOC);
											if(!empty($result)){
												echo '<img class="" src="'.$result['picture'].'" alt="">';
											}
											else{
												echo '<img src="view/profil_pic/undefined.jpg" alt=""></a>';
											}
									?>
								</div>
							</div>
							<div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">

								<?php
								if(isset($error) && !empty($error)){
									echo '<div class="alert alert-danger alert-dismissable">';
									  echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
									 echo  $error;
									echo '</div>';
								}
								?>

								<b class="username"><?php echo $_GET['name']; ?></b>
								<br/>
								<p>
									<br>
									Création du compte : <?php echo $result['created_at']; ?>
								</p>
								<p>
									<br>
									Mail : <?php echo $result['email']; ?>
								</p>

								<p>
									<br>
									Nombre de musiques postées : <?php echo $countmusic['COUNT(*)']; ?>
								</p>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
include '_footer.php';
?>