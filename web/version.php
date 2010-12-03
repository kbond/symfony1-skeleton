<?php

/**
 * For Staging environment
 *
 * Include at end of in index.php
 */

$version = explode("\n", file_get_contents("../VERSION"));

echo "<div style='font-size: 0.8em; line-height:1.2; text-align: left; float: left; margin-left: 3em;'>";
echo "Version: <strong>". $version[0] . "</strong><br />";
echo "Stability: <strong>". $version[1] . "</strong><br />";

/**
 *  used with Hudson CI
 *
 *  Execute shell:
 *    #set build number
 *    touch build
 *    echo "${BUILD_NUMBER}" > BUILD
 */
echo "Build #: <strong>" . file_get_contents("../BUILD") . "</strong>";
echo "</div>";