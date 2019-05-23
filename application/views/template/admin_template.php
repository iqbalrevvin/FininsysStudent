<!DOCTYPE html>
<html lang="en">
	<?php $username = $this->session->userdata('username'); ?>
	<?php $user = $this->User_m->user($username); ?>
	<?php require('layout/headStyle.php') ?>
	<?php require('layout/body.php'); ?>
	<?php require('layout/footerLinkScript.php'); ?>
</html>