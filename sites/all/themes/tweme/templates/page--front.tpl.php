<?php

/**
 * @file
 * Custom theme implementation to display a single Drupal page.
 */

?>

<?php
if ( $is_front ) {
  unset($title);
}
?>

<!-- Navbar -->
<div id="navbar" class="navbar navbar-medium navbar-inverse navbar-static-top">
	<div class="navbar-inner">
		<div class="container">
      <?php print $navbar_toggler ?>
			<?php print $navbar_brand ?>
      <?php print $navbar_search ?>
      <?php
        $menu = menu_navigation_links('menu-top-menu');
        print theme('links__menu_top_menu', array('links' => $menu));
      ?>
      <?php if ($navbar_menu): ?>
			<nav class="nav-collapse collapse" role="navigation">
        <?php print $navbar_menu ?>
      </nav>
			<?php endif ?>
		</div>
	</div>
</div>

<?php if ($page['featured']): ?>
<!-- Featured -->
<div id="featured" class="container-wrapper hidden-phone">
  <div class="container">
    <?php print render($page['featured']) ?>
  </div>
</div>
<?php endif ?>

<?php if ($preface): ?>
<!-- Header -->
<header id="header" class="container-wrapper">
  <div class="container">
    <?php print $preface ?>
  </div>
</header>
<?php endif ?>

<!-- Main -->
<div id="main">
<?php if ( $is_front ) { 
  print '<div class="front-page-banner">'; 
  print render($page['frontpage_banner']);
  print '</div>'; 
} ?>
  <div class=
   <?php print '"container' ?><?php if ( $is_front ) { print ' front-page'; } ?><?php print '">' ?>
    <?php print $messages ?>
    <div class="row row-toggle">
      <!-- Content -->
      <section id="content" class="span8">
        <?php print render($page['content']) ?>
      </section>
      <!-- Sidebar second -->
      <aside id="sidebar-second" class="sidebar span4">
        <?php print render($page['sidebar_second']) ?>
      </aside>
    </div>
	</div>
</div>

<!-- Footer -->
<footer id="footer" class="container-wrapper">
	<div class="container">
    <div class="footer-shortcuts">
      <?php
        $menu = menu_navigation_links('menu-footer-shortcuts');
        print theme('links__menu_footer_shortcuts', array('links' => $menu));
      ?>
    </div>
    <div class="footer-links">
      <?php
        $menu = menu_navigation_links('menu-footer-links');
        print theme('links__menu_footer_links', array('links' => $menu));
      ?>
    </div>
    <p class="footer-text">
      Copyright © 2010-2013 International Atomic Energy Agency (IAEA). All rights reserved.
    </p>
	</div>
</footer>
