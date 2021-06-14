<?php $title = "Portfolio vormen"; ?>
<?php $menuEnabled = false; ?>
<?php require("../partials/head.php"); ?>
<?php $_SESSION['post-data'] = $_POST; ?>
<body>
	<?php require("../partials/header.php"); ?>

	<?php $languages = array(
		"&#x1F1F7;&#x1F1FA; Russisch" => "russian",
		"&#x1F1EF;&#x1F1F5; Japans" => "japanese", 
		"&#x1F1EA;&#x1F1EC; Arabisch" => "arabic", 
		"&#x1F1F5;&#x1F1F9; Portugees" => "portugese", 
		"&#x1F1EB;&#x1F1F7; Frans" => "french", 
		"&#x1F1EE;&#x1F1E9; Indonesisch" => "indonesian", 
		"&#x1F1E8;&#x1F1F3; Mandarijn" => "mandarin", 
		"&#x1F1FB;&#x1F1E6; Latijn" => "latin", 
		"&#x1F1EA;&#x1F1F8; Spaans" => "spanish", 
		"&#x1F1F5;&#x1F1F1; Pools" => "polish"
	);
?>

	<div class="traitcontainer">
		<h3 class="traitheader">Talen</h3>
		<ul>
			<?php 
				foreach ($languages as $dutch => $english) { 
					echo "<li id=" . $english . ">" . $dutch . "</li>";
				}
			?>
		</ul>
	</div>

<?php $replace = array("lol", 
);

for ($i=1; $i < count($replace); $i++) { 
	$replace[$i][0] = '#';
	$replace[$i][1] = 'x';
	echo "&amp;" . $replace[$i] . ";<br>";
}
?>






<script>
	<?php 
		foreach ($languages as $dutch => $english) {
			echo '	
			document.getElementById("' . $english . '").addEventListener("click", function() {
				document.getElementById("' . $english . '").classList.toggle("toggeled-background");
			});';
		}
	?> 




</script>
