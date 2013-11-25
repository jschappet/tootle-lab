<?php

?>



<div id="page-wrapper"><div id="page">
<div id="top_banner">
<div id="navigation">
    <?php print render($page['navigation']); ?>
</div> <!-- end of navigation div -->
</div> <!-- end of topBanner div -->

<div id="container">

<div id="header">
<div id="logos">
	<div id="logo">
	    <?php if ($logo): ?>
	      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
		<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
	      </a>
	    <?php endif; ?>
	</div> <!-- end of logo div -->
	<div id="UI">
	      <a href="http://www.uiowa.edu"  target="_blank" title="University of Iowa" >
		<img src="/images/dome.gif" alt="University of Iowa" />
	      </a>
	</div>
<div id="search"> 

<div id="search_box">

    <?php print render($page['search']); ?>
</div> <!-- end of search_box div -->
<!--
<div id="resize"><a href="#">font resizer

</a></div>  end of resize div -->

</div><!--end of search div-->


</div> <!-- end of header div -->
<?php// if($is_front) { ?>
<div id="content_1">

<div id="orangebox">

        <?php if ($site_slogan): ?>
          <div id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>

</div> <!-- end of orangebox div -->

<div id="main_image">


</div> <!-- end of main_image div -->


</div> <!-- end of content 1 div -->
<?php // } ?>


<div id="content_2_topdetail">


</div> <!-- end of content_2_topdetail div -->


<div id="content_2">

<div id="content_2_left">
    <div id="content" class="column" role="main"><div class="section">
      <?php if ($page['highlighted']): ?>
        <div id="highlighted"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if ($breadcrumb): ?>
        <div id="breadcrumb"><?php print $breadcrumb; ?></div>
      <?php endif; ?>
      <?php print $messages; ?>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php if ($tabs): ?>
        <div class="tabs"><?php print render($tabs); ?></div>
      <?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div></div> <!-- /.section, /#content -->
</div>

<div id="content_2_right">

    <?php if ($page['sidebar_first']): ?>
      <aside id="sidebar-first" class="column sidebar" role="complementary"><div class="section">
        <?php print render($page['sidebar_first']); ?>
      </div></aside> <!-- /.section, /#sidebar-first -->
    <?php endif; ?>

</div>



<div style="clear:both;height:1px;"></div>
</div> <!-- end of content_2 div -->

<div id="content_2_bottomdetail">


</div> <!-- end of content_2_bottomdetail div -->


<div id="footer">

<div id="bottom_nav">
    <?php print render($page['bottom_nav']); ?>

</div>  <!-- end of bottom_nav div -->

<div id="copyright">

	&copy; Tootle Lab 2011
</div> <!-- end of copyright div -->




</div> <!-- end of footer div -->


</div> <!-- end of container div -->
</div>
</div>
