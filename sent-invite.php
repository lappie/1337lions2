<?php
	include("INC-header.html");
	include("INC-settings.php");
?>

<ul data-role="listview" id="invite-payment-form">
	<li class="big-euro-class">
		<img src="img/euro-button.png" />
		<input style="float: left; width: 60%" type="text" id="invite-payment-money" value="125,-" />
	</li>
	<li data-role="list-divider">Receiver</li>
	<li>
		<img src="img/person-button.png" />
		<div class="full_width">
			<h5>Name</h5>
			<input type="text" value="J. Lappenschaar" />
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
	<li>
		<img src="img/comment-button.png" />
		<div class="full_width">
			<h5>Message</h5>
			<input type="text" value="For all the hard work" placeholder="Max 140 characters"></input>
		</div>
	</li>
	<li>
		<img src="img/schedule-button.png" />
		<div class="full_width">
			<h5>Schedule</h5>
			<input type="text" value="13th of November 2014 - Monthly"></input>
		</div>
	</li>
</ul>
<br /><br />
<a href="invite-overview.php?id=<?php global $transId; echo $transId;?>" class="ui-btn" style="width: 100%">Send Invite</a>


</body>
</html>