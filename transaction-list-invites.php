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
			require("INC-transaction-list-header-invites.html");
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
		<a data-transition="slideup" class="invite_link" onclick="$(\'.ui-container\').load(\'respond_to_inviteLappie.php\')">
		<img src="img/person-button.png" />
		<h3>J. Lappenschaar</h3>
		<p><u class="span-underline">Message here</u></p>
		<h2>-$125.<span class="decimals">00</span></h2>
		</a>
	</li>';}
	?>
	<li class="invite-li">
		<a data-transition="slideup" class="invite_link" onclick="$('.ui-container').load('respond_to_inviteJansen.php')">
		<img src="img/person-button.png" />
		<h3>P. Jansen</h3>
		<p><u class="span-underline">Voorgeschoten lunch</u></p>
		<h2>-&euro;10.<span class="decimals">00</span></h2>
		</a>
	</li>
	
	<li data-role="list-divider">
		11 November
	</li>
	<li class="invite-li">
		<a data-transition="slideup" class="invite_link" onclick="$('.ui-container').load('respond_to_invitePietersen.php')">
		<img src="img/person-button.png" />
		<h3>J. Pietersen</h3>
		<p><u class="span-underline">Huur November</u></p>
		<h2>-&euro;480.<span class="decimals">00</span></h2>
		</a>
	</li>
</ul>
<span id="this-is-page-invites"></span>
<!--------------- /PAGE CONTENT ------------>
</div><!-- ui-container -->
		</div><!-- content -->
	
	</div> <!-- page -->
</body>
</html>