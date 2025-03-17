<?php

namespace Phamhoanghuynh\HrmSmb;

class YourClass {
    // Phương thức cộng
    public function add($a, $b) {
        return $a + $b;
    }

    // Phương thức trừ
    public function subtract($a, $b) {
        return $a - $b;
    }

    // Phương thức nhân
    public function multiply($a, $b) {
        return $a * $b;
    }

    // Phương thức chia
    public function divide($a, $b) {
        if ($b == 0) {
            return "Không thể chia cho 0!";
        }
        return $a / $b;
    }
}
