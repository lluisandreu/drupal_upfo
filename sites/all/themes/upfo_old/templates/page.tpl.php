<?php global $user; ?>
<div class="page" role="document">
  <header role="banner" class="l-header">

    <?php if ($top_bar): ?>
      <!--.top-bar -->
      <?php if ($top_bar_classes): ?>
        <div class="<?php print $top_bar_classes; ?>">
      <?php endif; ?>
      <nav class="top-bar" data-topbar <?php print $top_bar_options; ?>>
        <ul class="title-area">
          <li class="name">
           <div class="show-for-large-up"><?php print $linked_site_name; ?></div>
           <div class="hide-for-large-up"><a href="<?php print $front_page; ?>">UPF Open</a></div>
          </li>
          <li class="toggle-topbar menu-icon">
            <a href="#"><span><?php print $top_bar_menu_text; ?></span></a>
          </li>
        </ul>
        <section class="top-bar-section">
          <?php if ($top_bar_main_menu) : ?>
            <?php print $top_bar_main_menu; ?>
          <?php endif; ?>
        </section>
        <section class="enter-competition-link right">
        <?php if(!$user->uid): ?>
          <ul class="logged-out-user-menu">
            <li class="show-for-large-up">
              <a href="<?php print url('user'); ?>"><i class="fi-camera"></i>&nbsp;Enter Competition</a>
            </li>
            <li class="hide-for-large-up hide-for-small">
              <a href="<?php print url('user'); ?>"><i class="fi-torso"></i></a>
            </li>
            <li class="show-for-small-only">
              <a href="<?php print url('user'); ?>"><i class="fi-torso"></i>&nbsp;Enter Competition</a>
            </li>
          </ul>
        <?php else: ?>
          <ul class="logged-in-user-menu">
            <li class="show-for-large-up">
              <a href="<?php print url('user'); ?>"><i class="fi-torso"></i>&nbsp;My account</a>
            </li>
            <li class="hide-for-large-up hide-for-small">
              <a href="<?php print url('user'); ?>"><i class="fi-torso"></i></a>
            </li>
            <li class="show-for-small-only">
              <a href="<?php print url('user'); ?>"><i class="fi-torso"></i>&nbsp;My account</a>
            </li>
          </ul>
        <?php endif; ?>
        <?php if (in_array("administrator", $user->roles) || in_array("judge", $user->roles) || ($user->uid == 1)): ?>
            <button href="#" data-dropdown="drop1" data-options="align:left" aria-controls="drop1" aria-expanded="false" class="button"><i class="fi-widget"></i></button>
            <ul id="drop1" data-dropdown-content class="f-dropdown" aria-hidden="true">
              <li><a href="<?php print url('admin/entries'); ?>"><i class="fi-list-thumbnails"></i> Entries</a></li>
              <li><a href="<?php print url('admin/members'); ?>"><i class="fi-results-demographics"></i> Members</a></li>
              <?php if(in_array("administrator", $user->roles) || ($user->uid == 1)): ?>
                <li></li>
                <li><a href="<?php print url('node/add'); ?>"><i class="fi-page-add"></i> Add content</a></li>
                <li><a href="<?php print url('admin/content'); ?>"><i class="fi-page-search"></i> List Content</a></li>
                <li><a href="<?php print url('admin/people'); ?>"><i class="fi-torsos-all"></i> Users</a></li>
                <li><a href="<?php print url('admin/config'); ?>"><i class="fi-wrench"></i> Advanced Configuration</a></li>
              <?php endif; ?>
              <li><a href="<?php print url('user/logout'); ?>"><i class="fi-power"></i> Logout</a></li>
            </ul>
        <?php endif; ?>
        </section>
      </nav>
      <?php if ($top_bar_classes): ?>
        </div>
      <?php endif; ?>
      <!--/.top-bar -->
    <?php endif; ?>

  </header>
  <?php if($is_front): ?>
    <section class="home-banner">
      <?php print render($page['home_banner']); ?>
    </section>
  <?php endif; ?>
  <section class="main-content">
    <div class="row">
      <div class="column">
        <?php if($title): ?>
          <h1><?php print $title; ?></h1>
        <?php endif; ?>

        <?php print $messages; ?>
        <?php if(in_array("administrator", $user->roles) || ($user->uid == 1)): ?>
          <?php print render($tabs); ?>
        <?php endif; ?>

        <?php if($is_front): ?>
          <div class="row">
            <div class="large-7 columns">
            <?php print render($page['content']); ?>
            </div>
            <aside class="large-4 columns front-aside">
              <?php print render($page['aside']); ?>
            </aside>
          </div>

        <?php else: ?>
          <?php print render($page['content']); ?>
        <?php endif; ?>

        </div>
      </div>
    </div>
  </section>
  <?php if($is_front): ?>
    <section class="home-featured">
      <div class="row">
        <div class="large-4 columns">
          <?php print render($page['home_featured_first']); ?>
        </div>
        <div class="large-4 columns">
          <?php print render($page['home_featured_second']); ?>
        </div>
        <div class="large-4 columns">
          <?php print render($page['home_featured_third']); ?>
        </div>
      </div>
    </section>
    <section class="home-bottom">
      <div class="row">
        <?php print render($page['home_bottom']); ?>
      </div>
    </section>
  <?php endif; ?>
  <footer>
    <div class="row">
      <div class="footer-region large-4 columns">
        <?php print render($page['footer_first']); ?>
      </div>
      <div class="footer-region large-8 columns">
        <?php print render($page['footer_second']); ?>
      </div>
    </div>
  </footer>
</div>