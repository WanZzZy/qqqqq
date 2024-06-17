<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\ClaimModel;
use App\Models\MyTableModel;
use Illuminate\Http\Request;

use App\Http\Controllers\PageController;
use App\Http\Controllers\MyTableController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ClaimsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/my_table', MyTableController::class);

Route::get('/', [PageController::class, 'index'])->name('main');
Route::get('/registration', [PageController::class, 'registration'])->name('registration');
Route::get('/login', [PageController::class, 'login'])->name('login');

Route::post('/logout', function() {
    Auth::logout();
    return redirect()->route('main');
})->name('logout');


Route::post('/login_user', [LoginController::class, 'login_user'])->name('login_user');


Route::post('/register_user', [RegistrationController::class, 'register_user'])->name('register_user');


Route::get('/new_claim', function () {
    return view('new_claim');
})->name('new_claim');

Route::middleware(['auth'])->group(function () {


    Route::post('/add_new_claim', function(Request $request) {
        $data = $request->all();

        $claim = new ClaimModel();
        $claim->autonumber = $data['autonumber'];
        $claim->description = $data['description'];
        $claim->status_id = 1;
        $claim->user_id = Auth::user()->id;
        $claim->claim_date = now();
        $claim->save();
        
        return redirect()->route('user')->with('status', 'Ваша заявка успешно создана');
    })->name('add_new_claim');


    Route::get('/user', function () {
        return view('user', [
            'claims' => ClaimModel::where('user_id', Auth::user()->id)->get()
        ]);
    })->name('user');
    
    
    Route::get('/admin', function () {
        return view('admin', [
            'claims' => ClaimModel::all()
        ]);
    })->name('admin');

    Route::delete('/delete_claim/{id}', [ClaimsController::class, 'destroy'])->name('delete_claim');
    

    Route::post('/change_claim_status', function (Request $request) {
        $data = $request->all();
        
        $claim = ClaimModel::where('id', $data['claim_id'])->get()->first();
        $claim->status_id = $data['new_status'];
        $claim->save();

        return back()->with('status', 'Статус заявки изменён');
    })->name('change_claim_status');
    

});
