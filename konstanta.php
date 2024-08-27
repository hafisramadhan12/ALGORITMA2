<?php
// membuat konstanta dengan fungsi define()
define('DB_SERVER', 'localhost');
define('DB_USER', 'hafidz ramadhan');
define('DB_PASS', 'R4Hasia');
define('DB_NAME', 'belajar');
define('DB_API_KEY', '1234');

// membuat konstanta dengan kata kunci const
const API_KEY = "1234";

const SITE_NAME = "hafidz ramadhan";
const SITE_LOCAL = "localhost";
const SITE_RAHASIA = "rahasia";
const SITE_BELAJAR = "belajar";
const SITE_API_KEY = "1234";

echo "Nama user: " . SITE_NAME;
echo "<P>nama server: " . SITE_LOCAL;
echo "<p>nama pas: " . SITE_RAHASIA;
echo "<P>nama kegiatan: " . SITE_BELAJAR;
echo "<P>nama apikey: " . SITE_API_KEY;

?>
