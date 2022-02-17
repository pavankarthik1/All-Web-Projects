<?php
if($_SESSION['user_type'] == 'customer'){
?>
<div id="ddblueblockmenu">
	  <div class="menutitle">Patients Menu</div>
		  <ul>
			<li><a href="<?php echo WEB_ROOT; ?>">Welcome&nbsp;<? echo ucwords($_SESSION['user_name']); ?></a></li>
			
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=customer&view=makeComplain">Register Health Issues</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=customer&view=compDetails">View Issue Details</a></li>
			<li><a href="<?php echo $self; ?>?logOut">Logout</a></li>
		  </ul>
	  <div class="menutitle">&nbsp;</div>	  
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php 
}else if($_SESSION['user_type'] == 'employee'){
?>
<div id="ddblueblockmenu">
	  <div class="menutitle">Doctors Menu</div>
		  <ul>
			<li><a href="<?php echo WEB_ROOT; ?>">Welcome&nbsp;<? echo ucwords($_SESSION['user_name']); ?></a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=employee&view=viewComplain">View Assigned Issues</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=employee&view=viewComplainClose">Close Issue</a></li>
			
			<li><a href="<?php echo $self; ?>?logOut">Logout</a></li>
		  </ul>
	  <div class="menutitle">&nbsp;</div>	  
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
	 
<?php 
}else if($_SESSION['user_type'] == 'admin'){
?>
<div id="ddblueblockmenu">
	  <div class="menutitle">Admin Menu</div>
		  <ul>
			<li><a href="<?php echo WEB_ROOT; ?>">Welcome&nbsp;<? echo ucwords($_SESSION['user_name']); ?></a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=compDetails">Assign Issues</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=vDetails">View Issues</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=compCloseDetails">View Close Issue</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=enggDetails">Doctor Details</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=custDetails">Patient Details</a></li>
			
			<li><a href="<?php echo $self; ?>?logOut">Logout</a></li>
		  </ul>
	  <div class="menutitle">&nbsp;</div>	  
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php 
}
?>