<?php 

	// Include all neccessary files
	set_include_path('/vriendenboek');
	require_once "config/config.inc.php";
	require_once "includes/functions.php";
	require_once "classes/pagebuilder.inc.php";
	
?>

<?php require HEAD;?>
<?php require TOPLINKS ?>
<?php require HEADER; ?>


<div class="container">
	<div class="row">
<?php 

// Creëer de content van de page
$page = new pagebuilder();



echo $page->definePage();
?>
	</div>
<div>


<?php require FOOTER; ?>
<?php require SCRIPTS; ?>