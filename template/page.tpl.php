<?php
global $language;
$lang_name = $language->language;
print render($page['content']['metatags']);
?>
<header id="sticker">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-5 col-sm-4  col-md-3">
                <a href="<?php print $front_page ?>" class="logo">
                    <img src="/<?php
                    print  drupal_get_path('theme', 'venaco');
                    ?>/assets/images/logo.png" alt="">
                </a>
            </div>
            <div class="col-sm-8 col-md-9 text-right col-xs-7 header-nav-panel">
                <div class="hidden-xs hidden-sm inline-block"><nav id="navigation">
                        <?php
                        print render($page['topmenu']);
                        ?>
                    </nav></div>
                <div class="header-phone"><strong>+41 79 2637158</strong></div>
            </div>
        </div>
    </div>
</header>
<article class="main">
    <?php if($page['frontslider']): ?>
    <section class="topslider">
        <div class="topslider-block">
            <?php
            print render($page['frontslider']);
            ?>
            <span class="scroll-down-link animated infinite pulse"></span>
        </div>
    </section>
    <?php endif; ?>
    <?php if (!$is_front): ?>
        <?php if ($title): ?>
        <section class="toptitle <?php print $classes_fornode ?>">
            <?php print render($title_prefix); ?>
            <h1><?php print $title; ?></h1>
            <?php print render($title_suffix); ?>
            <span class="scroll-down-link animated infinite pulse"></span>
        </section>
        <?php endif; ?>

    <?php print render($tabs2); ?>
    <?php print $messages; ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

        <?php if (!empty($tabs['#primary'])): ?>
            <div class="container">
                <div class="tabs-wrapper clearfix">
                    <?php print render($tabs); ?>
                </div>
            </div>
        <?php endif; ?>
        <?php print render($page['content']); ?>
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
<?php if ($page['form1']): ?>
    <div class="popup_form" id="inform" style="display: none">
        <div class="popup_form_wrapper">
        <?php print render($page['form1']); ?>
            </div>
    </div>
<?php endif; ?>
