<div id="alerts">
	<?php
		if (isset($_GET['msg-info']))
			echo('<div class="alert alert-info" role="alert">'.$_GET['msg-info'].'</div>');
		if (isset($_GET['msg-ok']))
			echo('<div class="alert alert-success" role="alert">'.$_GET['msg-ok'].'</div>');
		if (isset($_GET['msg-warn']))
			echo('<div class="alert alert-danger" role="alert">'.$_GET['msg-warn'].'</div>');
		if (isset($_GET['msg-error']))
			echo('<div class="alert alert-danger" role="alert">'.$_GET['msg-error'].'</div>');
	?>
</div>