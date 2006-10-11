<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
/**
 * DokuWiki Default Template
 *
 * This is the template you need to change for the overall look
 * of DokuWiki.
 *
 * You should leave the doctype at the very top - It should
 * always be the very first line of a document.
 *
 * @link   http://wiki.splitbrain.org/wiki:tpl:templates
 * @author Andreas Gohr <andi@splitbrain.org>
 */
// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();

include(DOKU_TPLINC.'tpl_functions.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $conf['lang']?>"
 lang="<?php echo $conf['lang']?>" dir="<?php echo $lang['direction']?>">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>
    <?php tpl_pagetitle()?>
    [<?php echo strip_tags($conf['title'])?>]
  </title>

  <?php tpl_metaheaders()?>

  <link rel="shortcut icon" href="<?php echo DOKU_TPL?>images/favicon.ico" />

  <?php /*old includehook*/ @include(dirname(__FILE__).'/meta.html')?>
</head>

<body>
<?php /*old includehook*/ @include(dirname(__FILE__).'/topheader.html')?>
<div class="dokuwiki">
  <?php html_msgarea()?>

  <div class="stylehead">

    <div id="header_container">
      <b class="rtop">
        <b class="r1"></b><b class="r2"></b><b class="r3"></b><b class="r4"></b>
      </b>
      <div class="header">
        <div class="logo">
          <?php tpl_link(wl(),$conf['title'],'name="dokuwiki__top" id="dokuwiki__top" accesskey="h" title="[ALT+H]"')?>
        </div>
      </div>
      <b class="rbottom">
        <b class="r4"></b><b class="r3"></b><b class="r2"></b><b class="r1"></b>
      </b>
    </div>

    <div id="navi_container">
      <b class="rtop">
        <b class="r1"></b><b class="r2"></b><b class="r3"></b><b class="r4"></b>
      </b>
      <?php if($conf['breadcrumbs']){?>
      <div class="breadcrumbs">
        <?php tpl_breadcrumbs()?>
        <?php //tpl_youarehere() //(some people prefer this)?>
      </div>
      <?php }?>

      <?php if($conf['youarehere']){?>
      <div class="breadcrumbs">
        <?php tpl_youarehere() ?>
      </div>
      <?php }?>
      <div id="tpl_simple_navi">
      <?php tpl_topbar() ?>
      </div>
    </div>

  </div>

  <?php flush()?>


  <div class="page">

    <?php tpl_searchform()?>

    <!-- wikipage start -->
    <?php tpl_content()?>
    <!-- wikipage stop -->

  <div class="clearer">&nbsp;</div>

  <?php flush()?>

    <div class="stylefoot">

      <div class="meta">
        <div class="user">
          <?php tpl_userinfo()?>
        </div>
        <div class="doc">
          <?php tpl_pageinfo()?>
        </div>
      </div>

        <div class="bar" id="bar__bottom">
          <div class="bar-left" id="bar__bottomleft">
            <?php if(auth_quickaclcheck($ID) > READ) { ?>
              <?php if(tpl_actionlink('edit')) print " &middot; "?>
            <?php }?>
            <?php tpl_actionlink('recent')?>
          </div>
          <div class="bar-right" id="bar__bottomright">
            <?php if(auth_quickaclcheck($ID) > READ) { ?>
              <?php if(tpl_actionlink('history')) print " &middot; "?>
            <?php }?>
            <?php if(tpl_actionlink('subscription')) print " &middot; "?>
            <?php if(tpl_actionlink('admin')) print " &middot; "?>
            <?php if(tpl_actionlink('profile')) print " &middot; "?>
            <?php if(tpl_actionlink('login')) print " &middot; "?>
            <?php if(tpl_actionlink('index')) print " &middot; "?>
            <?php tpl_actionlink('top')?>
          </div>
          <div class="clearer"></div>
        </div>

      <?php /*old includehook*/ @include(dirname(__FILE__).'/pagefooter.html')?>
      <?php /*old includehook*/ @include(dirname(__FILE__).'/footer.html')?>

    </div>

  </div>

</div>

<div class="no"><?php /* provide DokuWiki housekeeping, required in all templates */ tpl_indexerWebBug()?></div>
</body>
</html>
