<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 */
?>
<div id="main-wrapper">
  <div id="main" class="main <?php print (!$is_panel) ? 'container' : ''; ?>">
    <?php if ($messages): ?>
      <div id="messages">
        <div class="container">
          <?php print $messages; ?>
        </div>
      </div>
    <?php endif; ?>
    <div id="content">
      <a id="main-content"></a>
       <div id="page-header">
          <div class="container">
            <div class="page-header">
              <div id="navigation" class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                  <?php if ($logo): ?>
                    <img src="<?php print $logo; ?>" alt="logo" id="logo" class="brand"/>
                  <?php endif; ?>
                  <?php if ($title): ?>
                    <h1 class="title"><?php print $title; ?></h1>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <?php if ($tabs): ?>
              <div class="tabs">
                <?php print render($tabs); ?>
              </div>
            <?php endif; ?>
            <?php if ($action_links): ?>
              <ul class="nav nav-pills action-links">
                <?php print render($action_links); ?>
              </ul>
            <?php endif; ?>
          </div>
      </div>
      <?php print render($page['content']); ?>
    </div>
  </div>
</div> <!-- /#main-wrapper -->

<footer id="footer" class="footer" role="footer">
  <div class="container">
    <?php if ($copyright): ?>
      <small class="copyright pull-left"><?php print $copyright; ?></small>
    <?php endif; ?>
    <small class="pull-right"><a href="#"><?php print t('Back to Top'); ?></a></small>
  </div>
</footer>
