<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <!-- ______________________ HEADER _______________________ -->
  <div id ="header-wrapper">
  <header id="header" class="container">

    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
      </a>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <hgroup id="name-and-slogan">

        <?php if ($site_name): ?>
          <?php if ($title): ?>
            <div id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
            </div>
          <?php else: /* Use h1 when the content title is empty */ ?>
            <h1 id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
            </h1>
          <?php endif; ?>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>

      </hgroup>
    <?php endif; ?>

    <?php if ($page['header']): ?>
      <div id="header-region">
        <?php print render($page['header']); ?>
      </div>
    <?php endif; ?>

  </header> <!-- /header -->
  </div> <!-- /header-wrapper -->

  <?php if ($main_menu || $secondary_menu): ?>
  <div id="nav-wrapper">
    <nav id="navigation" class="menu container <?php if (!empty($main_menu)) {print "with-primary";}
      if (!empty($secondary_menu)) {print " with-secondary";} ?>">
      <?php print theme('links', array('links' => $main_menu, 'attributes' => array('id' => 'primary', 'class' => array('links', 'clearfix', 'main-menu')))); ?>
      <?php print theme('links', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary', 'class' => array('links', 'clearfix', 'sub-menu')))); ?>
    </nav> <!-- /navigation -->
    
        
  </div> <!-- /nav-wrapper -->
  <?php endif; ?>
  
  <?php if ($page['nav']): ?>
      <div id="nav-region-wrapper">
        <div id="nav-region" class="container">
          <?php print render($page['nav']); ?>
        </div>
      </div>
    <?php endif; ?>

  <?php if ($page['highlighted']): ?>
      <div id="highlighted" class="container"><?php print render($page['highlighted']) ?></div>
  <?php endif; ?>


  <!-- ______________________ MAIN _______________________ -->
  <div id="main-wrapper">
  <div id="main" class="container">

    <section id="content">

        <?php if ($breadcrumb || $title|| $messages || $tabs || $action_links): ?>
          <div id="content-header">

            <?php print $breadcrumb; ?>

           
            <?php print render($title_prefix); ?>

            <?php if ($title): ?>
              <h1 class="title"><?php print $title; ?></h1>
            <?php endif; ?>

            <?php print render($title_suffix); ?>
            <?php print $messages; ?>
            <?php print render($page['help']); ?>

            <?php if ($tabs): ?>
              <div class="tabs"><?php print render($tabs); ?></div>
            <?php endif; ?>

            <?php if ($action_links): ?>
              <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>

          </div> <!-- /#content-header -->
        <?php endif; ?>

        <div id="content-area">
          <?php print render($page['content']) ?>
        </div>

        <?php print $feed_icons; ?>

    </section> <!-- /content-inner /content -->

    <?php if ($page['sidebar_first']): ?>
      <aside id="sidebar-first" class="column sidebar first">
        <?php print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?> <!-- /sidebar-first -->
    
    <?php if ($page['sidebar_second']): ?>
      <aside id="sidebar-second" class="column sidebar second">
        <?php print render($page['sidebar_second']); ?>
      </aside>
    <?php endif; ?> <!-- /sidebar-second -->

  </div> <!-- /main -->
  </div> <!-- /main-wrapper -->
  
   <?php if ($page['tertiary']): ?>
  <div id="tertiary-wrapper">
    <div id="tertiary" class="container">
      <?php print render($page['tertiary']); ?>
    </div>
  </div>
  <?php endif; ?>

  <!-- ______________________ FOOTER _______________________ -->

  <?php if ($page['footer']): ?>
  <div id="footer-wrapper">
    <footer id="footer" class="container">
      <?php print render($page['footer']); ?>
    </footer> <!-- /footer -->
  </div><!-- /footer-wrapper -->
  <?php endif; ?>

</div> <!-- /page -->
