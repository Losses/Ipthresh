<?php
	define('NEKO',true);
	include "class.ipthresh.php";
	$n=new Ipthresh();
	$n->debugmode=true;
	if($_GET['reset']==1) $n->reset();
			$n->filter_ua();
			$n->filter_uri();
			$n->filter_keyword();
			$n->filter_bulk_post();
			$n->filter_bulk_get();
	echo "ok";
?>
	<form method="post">
		<input name="some_param" type="text" value="some text" />
		<input type="submit" value="test post"/>
	</form>
	<form method="get">
		<input type="submit" value="test get"/>
	</form>
	<form method="get">
		<input type="hidden" name="reset" value="1" />
		<input type="submit" value="reset ban!"/>
	</form>