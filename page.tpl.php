<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php print render($page['header']); ?>
<?php global $base_url; ?>

<body>

<div id="page-wrapper">
<div id="inner-content">
<div id="header">
<div id="first-col">
<div id="rand">
<img src="<?php print $base_url . "/" . drupal_get_path('theme', 'grungemofo') . "/images/mario.png"; ?>" alt="Carousel Pointer" />
</div>
  <div id="logo-wrapper">
        <?php if ($logo || $site_title): ?>
          <?php if ($title): ?>
            <div id="branding"><strong><a href="<?php print $front_page ?>">
            <?php if ($logo): ?>
              <img src="<?php print $logo ?>" alt="<?php print $site_name_and_slogan ?>" title="<?php print $site_name_and_slogan ?>" id="logo" />
            <?php endif; ?>
            <?php print $site_html ?>
            </a></strong></div>
          <?php else: /* Use h1 when the content title is empty */ ?>
            <h1 id="branding"><a href="<?php print $front_page ?>">
            <?php if ($logo): ?>
              <img src="<?php print $logo ?>" alt="<?php print $site_name_and_slogan ?>" title="<?php print $site_name_and_slogan ?>" id="logo" />
            <?php endif; ?>
            <?php print $site_html ?>
            </a></h1>
        <?php endif; ?>
        <?php endif; ?>
        </div>

<div id="navigation"><?php print theme('links__system_main_menu',array('links' => $main_menu)); ?></div>
</div>
<div id="header-content" class="border-rad border-shadow">
<div id="latest-article">
<div id="latest-image" class="border-rad crazy-border">
  </div>
  <h2>This is a test</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut turpis sed lorem sagittis rutrum. Aliquam sed interdum elit, sit amet auctor ante. Duis mollis magna ac metus hendrerit tincidunt. Duis nec ante tincidunt, viverra purus in, bibendum magna. Pellentesque cursus bibendum euismod. Donec aliquet massa eu magna sodales, in tincidunt dui malesuada. Duis scelerisque odio vestibulum felis auctor, at tincidunt erat sollicitudin.</p>
  </div>
</div>
</div>
<div id="body-content">
<div id="sidebar" class="side-bar">
<div class="block">
<?php  print render($page['sidebar_first']); ?>
<div>
</div>
</div>
</div>
<div id="content">

<?php print render($page['content']); ?>

<div id="footer">


</div>
</div>

</div>
</body>
</html>