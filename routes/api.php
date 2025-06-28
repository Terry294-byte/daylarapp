it <?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BookingController;

Route::middleware('api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('hotels', HotelController::class);
Route::apiResource('rooms', RoomController::class);
Route::apiResource('customers', CustomerController::class);
Route::apiResource('bookings', BookingController::class);
