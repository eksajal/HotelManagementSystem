<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware;

Route::get('/', [AdminController::class, 'home']);

Route::get('/home', [AdminController::class, 'index'])->name('home');




//Include all admin routes in same Middleware
Route::get('/create_room', [AdminController::class, 'create_room'])->middleware(AdminMiddleware::class);

Route::post('/add_room', [AdminController::class, 'add_room'])->middleware(AdminMiddleware::class);

Route::get('/view_room', [AdminController::class, 'view_room'])->middleware(AdminMiddleware::class);

Route::get('/room_delete/{id}', [AdminController::class, 'room_delete'])->middleware(AdminMiddleware::class);

Route::get('/room_update/{id}', [AdminController::class, 'room_update'])->middleware(AdminMiddleware::class);

Route::post('/edit_room/{id}', [AdminController::class, 'edit_room'])->middleware(AdminMiddleware::class);

Route::get('/bookings', [AdminController::class, 'bookings'])->middleware(AdminMiddleware::class);

Route::get('/delete_booking/{id}', [AdminController::class, 'delete_booking'])->middleware(AdminMiddleware::class);

Route::get('/approve_booking/{id}', [AdminController::class, 'approve_booking'])->middleware(AdminMiddleware::class);

Route::get('/reject_booking/{id}', [AdminController::class, 'reject_booking'])->middleware(AdminMiddleware::class);

Route::get('/view_gallery', [AdminController::class, 'view_gallery'])->middleware(AdminMiddleware::class);

Route::post('/upload_gallery', [AdminController::class, 'upload_gallery'])->middleware(AdminMiddleware::class);

Route::get('/delete_gallery/{id}', [AdminController::class, 'delete_gallery'])->middleware(AdminMiddleware::class);

Route::get('/view_blog', [AdminController::class, 'view_blog'])->middleware(AdminMiddleware::class);

Route::post('/upload_blog', [AdminController::class, 'upload_blog'])->middleware(AdminMiddleware::class);

Route::get('/delete_blog/{id}', [AdminController::class, 'delete_blog'])->middleware(AdminMiddleware::class);

Route::get('/blog_update/{id}', [AdminController::class, 'blog_update'])->middleware(AdminMiddleware::class);

Route::post('/edit_blog/{id}', [AdminController::class, 'edit_blog'])->middleware(AdminMiddleware::class);

Route::get('/all_messages', [AdminController::class, 'all_messages'])->middleware(AdminMiddleware::class);

Route::get('/delete_message/{id}', [AdminController::class, 'delete_message'])->middleware(AdminMiddleware::class);

Route::get('/send_mail/{id}', [AdminController::class, 'send_mail'])->middleware(AdminMiddleware::class);

Route::post('/mail/{id}', [AdminController::class, 'mail'])->middleware(AdminMiddleware::class);

Route::get('/subscribers', [AdminController::class, 'subscribers'])->middleware(AdminMiddleware::class);

Route::get('/delete_subscriber/{id}', [AdminController::class, 'delete_subscriber'])->middleware(AdminMiddleware::class);






//Homecontrollers Route
Route::get('/room_details/{id}', [HomeController::class, 'room_details']);

Route::post('/add_booking/{id}', [HomeController::class, 'add_booking']);

Route::get('/blog_details/{id}', [HomeController::class, 'blog_details']);

Route::post('/contact', [HomeController::class, 'contact']);



Route::post('/online_booking', [HomeController::class, 'online_booking'])->name('online_booking');

Route::get('/select_room', [HomeController::class, 'select_room'])->name('select_room');

Route::get('/roomSelected_details/{id}', [HomeController::class, 'roomSelected_details']);

Route::post('/roomSelected_booking/{id}', [HomeController::class, 'roomSelected_booking']);

Route::post('/subscribe', [HomeController::class, 'subscribe']);










//All Pages Showing Individually
Route::get('/about_page', [HomeController::class, 'about_page']);

Route::get('/room_page', [HomeController::class, 'room_page']);

Route::get('/gallery_page', [HomeController::class, 'gallery_page']);

Route::get('/blog_page', [HomeController::class, 'blog_page']);

Route::get('/contact_page', [HomeController::class, 'contact_page']);
