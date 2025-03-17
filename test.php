<?php

require __DIR__ . '/vendor/autoload.php'; // Nạp autoload của Composer

use Phamhoanghuynh\HrmSmb\MyPackage; // Import class

$package = new MyPackage();
echo $package->hello(); // Gọi phương thức hello()
