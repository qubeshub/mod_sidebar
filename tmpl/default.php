<?php
// No direct access
defined('_HZEXEC_') or die();

$this->css();
Document::addStyleSheet('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
$this->js();
?>
<div id="wrapper">
	<div class="<?php echo $this->params->get('cls', 'mod_sidebar'); ?>" id="sidebar-wrapper">
		<ul class="sidebar-nav nav-pills nav-stacked" id="menu">
			<li class="active">
				<a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-dashboard fa-stack-1x "></i></span> Dashboard</a>
			</li>
			<li>
				<a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span> Shortcut</a>
			</li>
			<li>
				<a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-cloud-download fa-stack-1x "></i></span>Overview</a>
			</li>
			<li>
				<a href="#"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-cart-plus fa-stack-1x "></i></span>Events</a>
			</li>
			<li>
				<a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-youtube-play fa-stack-1x "></i></span>About</a>
			</li>
			<li>
				<a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-wrench fa-stack-1x "></i></span>Services</a>
			</li>
			<li>
				<a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-server fa-stack-1x "></i></span>Contact</a>
			</li>
		</ul>
	</div>
</div>