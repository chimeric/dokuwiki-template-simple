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
 * @author Andreas Gohr <andi@splitbrain.org>
 * @author Michael Klier <chi@chimeric.de>
 * @link   http://dokuwiki.org/template:simple
 * @link   http://chimeric.de/projects/dokuwiki/template/simple
 */
// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();

include(DOKU_TPLINC.'tpl_functions.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

  <b class="rtop_outer">
    <b class="r1"></b><b class="r2"></b><b class="r3"></b><b class="r4"></b>
  </b>

  <div id="outer_container">

    <?php html_msgarea()?>

    <div class="stylehead">
      <b class="rtop_inner">
        <b class="r1"></b><b class="r2"></b><b class="r3"></b><b class="r4"></b>
      </b>

      <?php tpl_searchform()?>

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

      <div class="clearer"></div>

      <div class="logo">
        <?php tpl_link(wl(),$conf['title'],'name="dokuwiki__top" id="dokuwiki__top" accesskey="h" title="[ALT+H]"')?>
      </div>

      <div class="clearer"></div>

    </div>

    <?php flush()?>

    <div id="inner_container">

      <div id="tpl_simple_navi">
        <?php tpl_topbar() ?>
      </div>

      <div class="clearer"></div>

      <div class="page">

        <div class="bar" id="bar__top">
          <div class="bar-left" id="bar__topleft">
		    <?php
            if(!plugin_isdisabled('npd') && ($npd =& plugin_load('helper', 'npd'))) {
                $npd->html_new_page_button();
            }
			?>
            <?php tpl_actionlink('edit')?>
          </div>
          <div class="bar-right" id="bar__topright">
            <?php tpl_actionlink('history')?>
            <?php tpl_actionlink('subscription')?>
          </div>
          <div class="clearer"></div>
        </div>



        <!-- wikipage start -->
        <?php tpl_content()?>
        <!-- wikipage stop -->

        <div class="clearer">&nbsp;</div>

        <?php flush()?>

        <div class="stylefoot">

          <?php tpl_actionlink('top')?>

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
              <?php tpl_actionlink('index')?>
              <?php tpl_actionlink('recent')?>
            </div>
            <div class="bar-right" id="bar__bottomright">
              <?php tpl_actionlink('admin')?>
              <?php tpl_actionlink('profile')?>
              <?php tpl_actionlink('login')?>
            </div>
          </div>

        </div>
        <div class="clearer">&nbsp;</div>
      </div>
      <div class="clearer">&nbsp;</div>
    </div>

    <?php /*old includehook*/ @include(dirname(__FILE__).'/pagefooter.html')?>
    <?php /*old includehook*/ @include(dirname(__FILE__).'/footer.html')?>

    <b class="rbottom_inner">
      <b class="r4"></b><b class="r3"></b><b class="r2"></b><b class="r1"></b>
    </b>

  </div>

  <b class="rbottom_outer">
    <b class="r4"></b><b class="r3"></b><b class="r2"></b><b class="r1"></b>
  </b>

  <div class="license">
    <?php tpl_license(false)?>
  </div>

</div>

<div class="no"><?php /* provide DokuWiki housekeeping, required in all templates */ tpl_indexerWebBug()?></div>
</body>
</html>
