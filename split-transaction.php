<?php 
	require("INC-header.html");
?>

	<div data-role="page" >
	
		<?php 
			require("INC-navbar.html");
		?>
		
		

		<div class="ui-content">
			<div class="ui-container">
			
			
		<!-------------- PAGE CONTENT ----------->
		<ul data-role="listview" id="invite-payment-form">
			<li class="big-euro-class">
				<img src="img/euro-button.png" />
				<input style="float: left; width: 60%" type="text" id="invite-payment-money" value="12.45" />
			</li>
			<li data-role="list-divider">Split between</li>
			<li data-role="list-divider">Account</li>
			<li>
				<img src="img/person-button.png" />
				<div class="full_width">
					<h5>Name</h5>
					<input type="text" value="J.J. Valkenburg" />
				</div>
				<img src="img/addressbook-button.png" style="float: right"/>
			</li>
			<li>
				<img src="img/bankaccount-button.png" />
				<div class="full_width">
					<h5>Account number</h5>
					<input type="text" value="NL12 INGB 000 123 45 67"></input>
				</div>
				<img src="img/qr-button.png" style="float: right"/>
			</li>
			<li class="big-euro-class">
				<img src="img/euro-button.png" />
				<input style="float: left; width: 60%" type="text" id="invite-payment-money" value="3.15" />
			</li>
			<li data-role="list-divider">Account</li>
			<li>
				<img src="img/person-button.png" />
				<div class="full_width">
					<h5>Name</h5>
					<input type="text" value="A. Martin" />
				</div>
				<img src="img/addressbook-button.png" style="float: right"/>
			</li>
			<li>
				<img src="img/bankaccount-button.png" />
				<div class="full_width">
					<h5>Account number</h5>
					<input type="text" value="NL12 INGB 000 234 56 78"></input>
				</div>
				<img src="img/qr-button.png" style="float: right"/>
			</li>
			<li class="big-euro-class">
				<img src="img/euro-button.png" />
				<input style="float: left; width: 60%" type="text" id="invite-payment-money" value="3.15" />
			</li>
			<li data-role="list-divider">Add</li>
			<li>
				<a href="#" class="ui-btn" style="width: 100%; margin-bottom:18px; ">Add Account</a>
			</li>
			<li>
				<img src="img/comment-button.png" />
				<div class="full_width">
					<h5>Message</h5>
					<input type="text" value="Eten Treeswijkhoeve" placeholder="Max 140 characters"></input>
				</div>
			</li>
			<li>
				<img src="img/schedule-button.png" />
				<div class="full_width">
					<h5>Schedule</h5>
					<input type="text" value="13th of November 2014 - Once"></input>
				</div>
			</li>
		</ul>
		<br /><br />
		<a href="invite-overview.php" class="ui-btn" style="width: 100%">Split bill</a>
<!--------------- /PAGE CONTENT ------------>
</div><!-- ui-container -->
		</div><!-- content -->
	
	</div> <!-- page -->
</body>
</html>