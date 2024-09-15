<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * Code Igniter Tag display
 *
 * encrypt/decrypt cookie
 * please define constant ENCRYPTION_KEY
 *
 *
 * @package        CodeIgniter
 * @subpackage    Helpers
 * @category        Helpers
 * @author       vison sunon < gangzaa@gmail.com >
 */
// ------------------------------------------------------------------------

/**
 * get user info login Helper
 *
 * Helps get user info.
 *
 * @access        public
 * @return        array    user info
 */
if (!function_exists('tags_display')) {

    function tags_display($tags = '')
    {
        $txt = '';
        if (!empty($tags)) {
            $arr_tags = explode(",", $tags);
            foreach ($arr_tags as $val) {
                $txt .= '<span class="tag">' . $val . '</span>';
            }
        }
        return $txt;
    }

}
