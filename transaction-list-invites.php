
<?php 
	require("INC-header.html");
	require("INC-settings.php");
	
	global $transId;
	$fileExists = false;
	if(file_exists("data/".$transId.".trans")) {
		$fileExists = true;
		unlink("data/".$transId.".trans");
	}
?>
	<div data-role="page" >
	
		<?php 
			require("INC-navbar.html");
		?>
		
		

		<div class="ui-content">
			<div class="ui-container">
			
			
		<!-------------- PAGE CONTENT ----------->
			
		<?php 
			require("INC-transaction-list-header.html");
		?>
		
<ul class="transactions-invites-list" data-role="listview" id="transaction-list">
	<li data-role="list-divider">
		12 November
	</li>
	<?php 
		global $fileExists;
		if($fileExists) {
			echo '
	<li class="invite-li">
		<img src="img/person-button.png" />
		<h3>J. Lappenschaar</h3>
		<p><u class="span-underline">Message here</u></p>
		<h2>-$125.<span class="decimals">00</span></h2>
	</li>';}
	?>
	<li class="invite-li">
		<img src="img/person-button.png" />
		<h3>P. Jansen</h3>
		<p><u class="span-underline">Eten voor het sporten</u></p>
		<h2>-$10.<span class="decimals">00</span></h2>
	</li>
	<li data-role="list-divider">
		11 November
	</li>
	<li class="invite-li">
		<img src="img/person-button.png" />
		<h3>J. Pietersen</h3>
		<p><u class="span-underline">Huur November</u></p>
		<h2>-$480.<span class="decimals">00</span></h2>
	</li>
</ul>
<!--------------- /PAGE CONTENT ------------>
</div><!-- ui-container -->
		</div><!-- content -->
	
	</div> <!-- page -->
</body>
</html>