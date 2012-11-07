<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $this->Html->charset(); ?>
<title><?php echo $title_for_layout; ?> <?php __('Title'); ?></title>
<?php
echo $this->Html->meta('icon');
echo $this->Html->css(array('bootstrap','bootstrap-responsive','docs','jquery-ui'));
echo $this->Html->script(array("jquery"));
	?>
</head>
<body>
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
		</div>
	</div>
</div>
<div class="container">
	<?php echo $this->Session->flash(); ?> <?php echo $content_for_layout; ?>
</div>
<div class="footer">

</div>
<?php echo $this->element('sql_dump'); ?>
<?php
        echo $this->Html->script(array("bootstrap-transition", "bootstrap-alert", "bootstrap-modal", "bootstrap-dropdown", "bootstrap-scrollspy", "bootstrap-tab", "bootstrap-tooltip", "bootstrap-popover", "bootstrap-button", "bootstrap-carousel", "bootstrap-typeahead","application", "bootstrap-collapse","validate","jquery.form","jquery-ui.min","google-code-prettify", ));
		echo $scripts_for_layout;

    ?>
</body>
</html>