<?php

return [
    'executable' => env('TESSERACT_EXECUTABLE', '/usr/bin/tesseract'), // Sesuaikan dengan path Tesseract di sistem Anda
    'lang' => env('TESSERACT_LANG', 'eng'), // Sesuaikan dengan bahasa yang ingin Anda gunakan
];