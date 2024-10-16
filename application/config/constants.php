<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

// APIs config
define('API_URL', 'land-bn/api/');
define('API_URL_SUBMIT_CASE', 'content/submitcase');

const KNOWLEDGE_CATE = [
  '1'=>'การออกแบบวัด',
  '2'=>'การออกแบบกิจกรรม',
  '3'=>'การจัดการ',
  '4'=>'หลักสูตร',
  '5'=>'ถอดบทเรียน/งานวิจัย',
  '6'=>'ICT เพื่อการเผยแผ่ธรรม'
];

define('REGISTER1', array(
    '1'=>'ทำความสะอาด',
    '2'=>'งานช่าง / ซ่อมบำรุงวัด',
    '3'=>'นำสวดมนต์',
    '4'=>'จัดสถานที่ / จัดสถานที่ทำกิจกรรม',
    '5'=>'จัดหนังสือในห้องสมุด'
    )
);
define('REGISTER2', array(
    '1'=>'ปลูกต้นไม้',
    '2'=>'ดูแลสวน',
    '3'=>'ตัดแต่งต้นไม้',
  )
);
define('REGISTER3', array(
    '1'=>'ติดต่อประสานงาน',
    '2'=>'จัดระบบแยกขยะ',
    '3'=>'จัดระบบล้างจาน',
    '4'=>'อำนวยความสะดวกและการจัดการโรงทาน',
    '5'=>'ลงทะเบียนกิจกรรม'

  )
);

define('REGISTER4', array(
    '1'=>'เก็บข้อมูลวัด',
    '2'=>'นำชมวัด',
    '3'=>'แปลภาษาต่างประเทศ',
    '4'=>'สอนศิลปะในวัด',
    '5'=>'สอนหนังสือเด็ก',
    '6'=>'พิมพ์งาน ถอดเทป',
    '7'=>'เขียนบทความ',
    '8'=>'ออกแบบประชาสัมพันธ์วัด',
    '9'=>'สอนคอมพิวเตอร์',
    '10'=>'ทำสื่อสร้างสรรค์',
    '11'=>'พัฒนาแอพพลิเคชั่น',
    '12'=>'ออกแบบกราฟฟิค',
    '13'=>'อินโฟกราฟฟิค',
    '14'=>'ออกแบบโปสเตอร์',
    '15'=>'ถ่ายวีดิโอ/ถ่ายภาพ',
    '16'=>'ถ่ายภาพด้วยโดรน',

  )
);

define('MONTH_TH', array("มกราคม", "กุมภาพันธ์", "มีนาคม", 
        "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", 
        "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม")
);

define('REGISTER_WAT_1', array(
  '1'=>'เผยแพร่หลักธรรม คำสั่งสอนแก่ฆราวาส',
  '2'=>'ส่งเสริมการปฏิบัติธรรม',
  '3'=>'เป็นโรงเรียนพระปริยติธรรม',
  '4'=>'เป็นศูนย์รวมของชุมชนมาประกอบพิธีกรรมทางศาสนา/กิจกรรมทางวัฒนธรรม',
  '5'=>'บทบาทด้านสังคมสงเคราะห์ การพัฒนาชุมชน/ผู้ด้อยโอกาส',
  '6'=>'ส่งเสริมการเรียนรู้/การศึกษาทางโลก เช่น การพัฒนาวิชาชีพ อนามัย การเกษตร การออมทรัพย์ ฯลฯ',
  '7'=>'บทบาทด้านการอนุรักษ์สิ่งแวดล้อม ดูแลรักษาป่่า',
  '8'=>'เป็นโบราณสถานที่สำคัญ',
  '9'=>'เป็นสถานที่ท่องเที่ยวทางศาสนา/ประวัติศาสตร์ วัฒนธรรม',
  '10'=>'เป็นสถานที่ร่มรื่น ให้ชุมชนมาพักผ่อน หาความสงบ',
  '11'=>'โปรดระบุความต้องการการสนับสนุนจากโครงการวัดบันดาลใจ'
  )
);
 
// define('REGISTER_WAT_2', array(
//   '1'=>'การออกแบบวัด',
//   '2'=>'การออกแบบกิจกรรม',
//   '3'=>'การจัดการ/ระบบ ICT ในวัด',
//   '4'=>'หลักสูตรวัดบันดาลใจ',
//   '5'=>'อื่นๆโปรดระบุ'
//   )
// );
define('REGISTER_WAT_2', array(
  '1'=>'หลักสูตรวัดบันดาลใจ',
  '2'=>'หลักสูตรจริยศิลป์',
  '3'=>'หลักสูตรการปลูกป่าแบบประณีต',
  '4'=>'หลักสูตรการพัฒนาเว็ปไซต์ของวัด',
  '5'=>'ประเด็นที่ท่านสนใจอยากให้โครงการพัฒนาหลักสูตรเพิ่มเติม'
  )
);

define('REGISTER_WAT_3', array(
  '1'=>'รับข่าวสารโครางการทางอีเมล์',
  '2'=>'แจ้งเตือนกิจกรรมที่สมัครผ่านทางอีเมล์',
  '3'=>'ติดต่อผ่านทางอีเมลเมื่อมีงานอาสาที่เหมาะกับท่าน',
  '4'=>'โทรติดต่อเมื่อมีงานอาสาที่เหมาะสมกับท่าน'
)
);

// flags
define('COUNTRY_FLAG', array(
  '1' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="#282646" d="M1 11H31V21H1z"></path><path d="M5,4H27c2.208,0,4,1.792,4,4v4H1v-4c0-2.208,1.792-4,4-4Z" fill="#992532"></path><path d="M5,20H27c2.208,0,4,1.792,4,4v4H1v-4c0-2.208,1.792-4,4-4Z" transform="rotate(180 16 24)" fill="#992532"></path><path fill="#fff" d="M1 9H31V12H1z"></path><path fill="#fff" d="M1 20H31V23H1z"></path><path d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z" opacity=".15"></path><path d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z" fill="#fff" opacity=".2"></path></svg>',
  '2' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path d="M31,8c0-2.209-1.791-4-4-4H5c-2.209,0-4,1.791-4,4v9H31V8Z" fill="#ea3323"></path><path d="M5,28H27c2.209,0,4-1.791,4-4v-8H1v8c0,2.209,1.791,4,4,4Z" fill="#fff"></path><path d="M5,28H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4ZM2,8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8Z" opacity=".15"></path><path d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z" fill="#fff" opacity=".2"></path></svg>',
  '3' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><rect x="1" y="4" width="30" height="24" rx="4" ry="4" fill="#fff"></rect><path d="M1.638,5.847H30.362c-.711-1.108-1.948-1.847-3.362-1.847H5c-1.415,0-2.651,.739-3.362,1.847Z" fill="#bc271a"></path><path d="M1.031,7.692c-.008,.103-.031,.202-.031,.308v1.539H31v-1.539c0-.105-.023-.204-.031-.308H1.031Z" fill="#bc271a"></path><path fill="#bc271a" d="M1 11.384H31V13.231H1z"></path><path fill="#bc271a" d="M1 15.077H31V16.924H1z"></path><path fill="#bc271a" d="M1 18.769H31V20.616H1z"></path><path d="M1,24c0,.105,.023,.204,.031,.308H30.969c.008-.103,.031-.202,.031-.308v-1.539H1v1.539Z" fill="#bc271a"></path><path d="M30.362,26.153H1.638c.711,1.108,1.948,1.847,3.362,1.847H27c1.415,0,2.651-.739,3.362-1.847Z" fill="#bc271a"></path><path d="M16,4H5c-2.209,0-4,1.791-4,4v10.769h15V4Z" fill="#010062"></path><path d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z" opacity=".15"></path><path d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z" fill="#fff" opacity=".2"></path><path fill="#f6cd46" d="M11.639 8.108L11.931 10.106 13.061 8.432 12.455 10.36 14.2 9.342 12.818 10.816 14.833 10.655 12.949 11.384 14.833 12.113 12.818 11.952 14.2 13.427 12.455 12.408 13.061 14.336 11.931 12.662 11.639 14.661 11.346 12.662 10.216 14.336 10.822 12.408 9.077 13.427 10.459 11.952 8.444 12.113 10.328 11.384 8.444 10.655 10.459 10.816 9.077 9.342 10.822 10.36 10.216 8.432 11.346 10.106 11.639 8.108z"></path><path d="M10,8.189c-1.764-.783-3.829,.013-4.612,1.777-.783,1.764,.013,3.829,1.777,4.612,.903,.4,1.932,.4,2.835,0-1.764,1.266-4.221,.862-5.487-.903s-.862-4.221,.903-5.487c1.37-.983,3.214-.983,4.584,0Z" fill="#f6cd46"></path></svg>',
));