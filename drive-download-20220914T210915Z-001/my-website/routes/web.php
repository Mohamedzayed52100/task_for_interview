<?php

use App\Http\Controllers\PatientController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Illuminate\Support\Facades\DB;

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


// Guest
Route::group(['middleware' => 'PreventBackHistory'], function () {


    Route::group(['middleware' => 'myguest'], function () {

        // UserController
        Route::get('/', [UserController::class, 'index']);
        Route::get('/website', [UserController::class, 'website']);
        Route::get('/login', [UserController::class, 'showLogin']);
        Route::post('/login', [UserController::class, 'login']);
        Route::get('/register', [UserController::class, 'showRegister']);
        Route::post('/register', [UserController::class, 'register']);
        // AppointmentController
        Route::get('/homewebsite', [AppointmentController::class, 'showHomewebsite']);
    });



    // Authenticated user (Logged in user)
    Route::group(['middleware' => 'myauth'], function () {

        //Vaccine controller
        Route::get('/showVaccine', [PatientController::class, 'showVaccine']);
        Route::get('/registerVaccine', [PatientController::class, 'showregisterVaccine']);
        Route::post('/registerVaccine', [PatientController::class, 'registerVaccine']);
        Route::group(['middleware' => 'VaccineAuth'], function () {
            Route::get('/vaccineConfirmation', [PatientController::class, 'vaccineConfirmation']);
        });

        // logout
        Route::get('/logout', [UserController::class, 'logout']);


        // RadiologyController
        Route::get('/homewebsite', [PatientController::class, 'showHomewebsite']);
        Route::get('/upload', [PatientController::class, 'showUpload']);
        Route::post('/upload', [PatientController::class, 'upload']);
        Route::group(['middleware' => 'authradiology'], function () {
        Route::get('/result', [PatientController::class, 'showResult']);
        });





        // AppointmentController
        Route::get('/homewebsite', [AppointmentController::class, 'showHomewebsite']);
        Route::get('/appointment', [AppointmentController::class, 'showAppointment']);
        Route::post('/appointment', [AppointmentController::class, 'appointment']);


        Route::group(['middleware' => 'AppointAuth'], function () {
            Route::get('/confirmation', [AppointmentController::class, 'showConfirmation']);
        });
    });


    // Guest admin
    Route::group(['middleware' => 'guestadmin'], function () {
        Route::get('/adminLogin', [AdminController::class, 'showAdminLogin']);
        Route::post('/adminLogin', [AdminController::class, 'AdminLogin']);
    });


    // Authenticated admin (Logged in admin)
    Route::group(['middleware' => 'authadmin'], function () {
        Route::get('/adminlogout', [AdminController::class, 'Adminlogout']);
        Route::get('/admindash', [AdminController::class, 'showDash']);
        Route::get('/adminAppointment', [AdminController::class, 'showAdminAppointment']);
    });
});
Route::group(['middleware' => 'authadmin'], function () {
    Route::get('/downloadex', function () {

        $table_attr =  DB::getSchemaBuilder()->getColumnListing('users');
        $users = \App\Models\User::all();
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $header_culumns = [];
        $i = 'A';
        // set header
        foreach ($table_attr as $key => $value) {
            $sheet->setCellValue($i . '1', $value);
            $sheet->getStyle($i . '1')->getAlignment()->setHorizontal('center');
            $sheet->getColumnDimension($i)->setWidth(30);
            $sheet->getStyle($i . '1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF00FF00');
            $header_culumns[] = [$i => $value];
            $i++;
        }
        $i = 'A';
        $key_index = 2;
        foreach ($header_culumns as $key => $value) {
            foreach ($users as $userkey => $uservalue) {
                $name = $value[$i];  // id, name, email, password, remember_token, created_at, updated_at
                $thekey = key($value); // A, B, C, D, E, F, G
                $sheet->setCellValue($thekey . $key_index, $uservalue->$name);
                $sheet->getStyle($thekey . $key_index)->getAlignment()->setHorizontal('center');
                $sheet->getStyle($thekey . $key_index)
                    ->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
                $key_index++;
            }
            $i++;
            $key_index = 2;
        }
        $sheet->setCellValue('I1', 'Total');
        $sheet->mergeCells('I1:J1');
        $sheet->getStyle('I1')->getAlignment()->setHorizontal('center');



        $writer = new Xlsx($spreadsheet);
        $writer->save('hello world.xlsx');

        $filename = Date('Y-m-d-H') . '-hello world.xlsx';


        return response()->download(public_path('hello world.xlsx'), $filename, [
            'Content-Type' => 'application/vnd.ms-excel',
            'Content-Disposition' => 'inline; filename="' . $filename . '"'
        ]);

        return redirect('users');
    });



    /////for read
    Route::get('/read', function () {
        $file = public_path('hello world.xlsx');
        //    $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($file);
        //    $sheet = $spreadsheet->getActiveSheet();
        //    dd($sheet->toArray());



        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load($file);
        $sheet = $spreadsheet->getActiveSheet();
        dd($sheet->toArray());
        return redirect('users'); ///->back();

        return "mohamed zayed";
    });

    ///pdfview

    Route::get('/outpatienthome', [AdminController::class, 'showOutpatient'])->name('users.index');
    Route::get('data', [UserController::class, 'indexed'])->name('data.index');
    Route::delete('data/{id}', [UserController::class, 'destroy'])->name('data.destroy');
    Route::get('data/restore/{id}', [UserController::class, 'restore'])->name('data.restore');
    Route::get('data/restore-all', [UserController::class, 'restoreAll'])->name('data.restoreAll');

    Route::any('pdfview', [AdminController::class, 'pdfview']);
    Route::any('pdfview', [AdminController::class, 'pdfview'])->name('pdfview');

    Route::any('patientmedical', [AdminController::class, 'patientmedical']);
    Route::any('/patientmedicalsubmit', [AdminController::class, 'patientmedicalsubmit']);


    Route::get('/getpinfo', [CrudController::class, 'indexCrud']);
    Route::resource('todo', CrudController::class);

    Route::get('/join', [AdminController::class, 'join']);


    Route::any('/singlepatient/{id}', [AdminController::class, 'singlepatient']);
    Route::any('/editpatient/{id}', [AdminController::class, 'editpatient']);
    Route::any('/updatedata', [AdminController::class, 'updatedata']);

    Route::any('deletepatient/{id}', [AdminController::class, 'deletepatient']);








    Route::get('data', [AdminController::class, 'indexed'])->name('data.index');
    Route::delete('data/{id}', [AdminController::class, 'destroy'])->name('data.destroy');
    Route::get('data/restore/{id}', [AdminController::class, 'restore'])->name('data.restore');
    Route::get('data/restore-all', [AdminController::class, 'restoreAll'])->name('data.restoreAll');


    Route::get('/youtube', [AdminController::class, 'i']);
});
