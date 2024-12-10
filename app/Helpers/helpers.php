<?php

if (!function_exists('getAllMonthLabels')) {
    function getAllMonthLabels() {
        return [
            'January', 'February', 'March', 'April', 'May', 'June',
            'July', 'August', 'September', 'October', 'November', 'December'
        ];
    }
}

if (!function_exists('getMonthLabel')) {
    function getMonthLabel($month) {
        return getAllMonthLabels()[$month-1];
    }
}


if (!function_exists('getSelectableYears')) {
    function getSelectableYears() {
        return [ 2024, 2025 ];
    }
}