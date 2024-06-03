<?php

// Website có các trang: Trang chủ, Giới Thiệu, Sản phẩm, Chi tiết sản phẩm, Liên hệ

// Để định nghĩa được, điều đầu tiên là phải tạo Controller trước
// Tiếp theo, khai báo function tương ứng để xử lý
// Bước cuối, định nghĩa đường dẫn

// HTTP Method: get(lấy dữ liệu), post(lưu, tạo mới một tài nguyên), push/path (update-đa số dùng push), delete(xóa), option, head (bỏ qua- khi làm việc font-end framework)

use Hoang9104\Setup\Controllers\Client\AboutController;
use Hoang9104\Setup\Controllers\Client\ContactController;
use Hoang9104\Setup\Controllers\Client\HomeController;
use Hoang9104\Setup\Controllers\Client\ProductController;

$router->get('/',                       HomeController::class               .'@index');
$router->get('/about',                  AboutController::class              .'@index');

$router->get('/contact',                ContactController::class            .'@index');
$router->post('/contact/store',         ContactController::class            .'@store');

$router->get('/products',               ProductController::class            .'@index');
$router->get('/products/{id}',          ProductController::class            .'@detail');
