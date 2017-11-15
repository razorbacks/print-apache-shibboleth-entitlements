<ul>
<?php

$entitlements = $_SERVER['entitlement'] ?? "";

foreach (explode(';', $entitlements) as $entitlement) {
    echo "<li>$entitlement</li>";
}
?>
</ul>
