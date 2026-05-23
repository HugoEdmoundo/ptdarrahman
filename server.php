<?php

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '');

// Remove trailing slash (except root)
if ($uri !== '/' && str_ends_with($uri, '/')) {
    header('Location: ' . rtrim($uri, '/'));
    exit;
}

$publicPath = __DIR__ . '/public' . $uri;

if ($uri !== '/' && file_exists($publicPath) && !is_dir($publicPath)) {
    $ext = strtolower(pathinfo($publicPath, PATHINFO_EXTENSION));
    $mimes = [
        'css'  => 'text/css',
        'js'   => 'application/javascript',
        'json' => 'application/json',
        'png'  => 'image/png',
        'jpg'  => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'webp' => 'image/webp',
        'gif'  => 'image/gif',
        'svg'  => 'image/svg+xml',
        'ico'  => 'image/vnd.microsoft.icon',
        'woff' => 'font/woff',
        'woff2'=> 'font/woff2',
        'ttf'  => 'font/ttf',
        'otf'  => 'font/otf',
        'pdf'  => 'application/pdf',
        'map'  => 'application/json',
    ];
    if (isset($mimes[$ext])) {
        header('Content-Type: ' . $mimes[$ext] . '; charset=utf-8');
    }
    header('X-Content-Type-Options: nosniff');
    header('Cache-Control: public, max-age=31536000, immutable');
    echo file_get_contents($publicPath);
    return;
}

require_once __DIR__ . '/public/index.php';
