<?php

if (!function_exists('getMonthLabels')) {
    function getAllMonthLabels() {
        return [
            'January', 'February', 'March', 'April', 'May', 'June',
            'July', 'August', 'September', 'October', 'November', 'December'
        ];
    }
}

if (!function_exists('getMonthLabels')) {
    function getMonthLabel($month) {
        return getAllMonthLabels()[$month-1];
    }
}