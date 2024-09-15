<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * Display datetime thai format
 *
 * Helps display datetime
 *
 * @access        public
 * @return        date
 */
if (!function_exists('display_date')) {

    function display_date($str_date, $show_time = false)
    {
        $arr_month_th = array("มกราคม", "กุมภาพันธ์", "มีนาคม", 
        "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", 
        "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
        $d = strtotime($str_date);
        $yy = date("Y", $d);
        $mm = date("m", $d);
        $dd = date("d", $d);
        $tt = date("H:i", $d);
        if ($show_time) {
            $result = abs($dd) . " " . $arr_month_th[abs($mm) - 1] . " " . ($yy + 543) . " " . $tt;
        } else {
            $result = abs($dd) . " " . $arr_month_th[abs($mm) - 1] . " " . ($yy + 543);
        }
        return $result;
    }

}
