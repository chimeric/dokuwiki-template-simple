<?php
/**
 * functions for template simple 
 * 
 * @license:    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author:     Michael Klier <chi@chimeric.de>
 */

/**
 * prints the topbar-page
 *
 * @author Michael Klier <chi@chimeric.de>
 */
function tpl_topbar() {
    if(file_exists(wikiFN("topbar"))) {
        $out .= p_wiki_xhtml("topbar",'',false);
        print($out);
    }
}
