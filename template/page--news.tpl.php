<?php
global $language;
$lang_name = $language->language;
print render($page['content']['metatags']);
?>
<header id="sticker">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-5 col-sm-3 col-md-2">
                <a href="<?php print $front_page ?>" class="logo">
                    <img src="/<?php
                    print  drupal_get_path('theme', 'venaco');
                    ?>/assets/images/logo.png" alt="">
                </a>
            </div>
            <div class="col-sm-9 col-md-10 text-right col-xs-7 header-nav-panel">
                <div class="hidden-xs hidden-sm inline-block"><nav id="navigation">
                        <?php
                        print render($page['topmenu']);
                        ?>
                    </nav></div>                <!--<div class="header-phone"><strong>+41 79 2637158</strong></div>-->
                <div class="header-flag">
                    <img src="/<?php
                    print  drupal_get_path('theme', 'venaco');
                    ?>/assets/images/swiss.png" alt="">
                </div>
            </div>
        </div>
    </div>
</header>
<article class="main">
    <?php if (!$is_front): ?>
        <?php if ($title): ?>
            <div class="blog_list_title"><div class="container"> <?php print render($title_prefix); ?>
                <h1><?php print $title; ?></h1>
                <?php print render($title_suffix); ?></div></div>
        <?php endif; ?>
        <div class="container"> <?php print render($tabs2); ?>
            <?php print $messages; ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?>
                <ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

            <?php if (!empty($tabs['#primary'])): ?>
                <div class="container">
                    <div class="tabs-wrapper clearfix">
                        <?php print render($tabs); ?>
                    </div>
                </div>
            <?php endif; ?></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12"><?php print render($page['content']); ?></div>
            </div>
        </div>
    <?php endif; ?>
    <?php print render($page['about']); ?>
</article>
<footer>
    <div class="container">
        <div class="row">
                <?php print render($page['footer']); ?>
        </div>
    </div>
</footer>
<aside class="underfooter text-center">
    <?php print render($page['footer1']); ?>
</aside>
<?php if ($page['form1']): ?>
    <div class="popup_form" id="inform" style="display: none">
        <div class="popup_form_wrapper">
        <?php print render($page['form1']); ?>
            </div>
    </div>
<?php endif; ?>
