<?php

/**
 * Simple entry point
 */
echo "SonarQube New Code test";

/**
 * Testik gabeko funtzioa (Coverage jaisteko)
 * Gainera, bug bat dauka
 */
function biderketa($x, $y) {
    $emaitza = $x * $y;

    // BUG & Code Smell: erabili gabeko aldagaia
    $erabiliGabe = 123;

    return $x * $y;
}