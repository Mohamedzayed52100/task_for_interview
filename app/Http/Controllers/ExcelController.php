<?php

namespace App\Http\Controllers;

 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Http\Controllers\CrudController;

use App\Http\Controllers\TaskController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\UserMiddleware;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class ExcelController extends Controller
{
    public function downloadex(){
        $table_attr =  DB::getSchemaBuilder()->getColumnListing('products');
        $users = \App\Models\Product::all();
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
                $name = $value[$i];  // id, product_name, type, quantity,  created_at, updated_at
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
    }


    public function upload(){
        return view('upload');
    }

    public function read(Request $request){
        
    $excelfile = $request->file('file');
    $excelfileName = time() . '.' . $excelfile->extension();
    $excelfile->move(public_path('excel'), $excelfileName);
    $excelfile =  public_path($excelfileName);

 


    $file = public_path(asset('excel') . $excelfileName);
    $file = public_path('excel\\' . $excelfileName);

 
     $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($file);
    $sheet = $spreadsheet->getActiveSheet();
 


    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    $spreadsheet = $reader->load($file);
    $sheet = $spreadsheet->getActiveSheet();
    $sheet_as__array = $sheet->toArray();

    $i = 0;

    $one =0 ; $two =2 ; $three=3;
     $t1= false ; $t2=false ; $t3=false  ;$t4= false ; $t5=false ; $t6=false;
   


    foreach ($sheet_as__array as $row) {
            if ($i == 0) {
              $i++;
            //  continue;
            ///if($row[0] =='name')$name =0 ;
if ($row[$one] == 'product_name' and $row[$two] == 'type'and $row[$three] == 'quantity') {
    $t1=true;

}
else if ($row[$one] == 'product_name' and $row[$two] == 'quantity' and $row[$three] == 'type') {
    $t2=true;

}
else if ($row[$one] == 'quantity' and $row[$two] == 'product_name' and $row[$three] == 'type') {
    $t3=true;

}
else if ($row[$one] == 'quantity' and $row[$two] == 'type' and  $row[$three] == 'product_name') {
    $t4=true;

}
else if ($row[$one] == 'type' and $row[$two] == 'quantity' and  $row[$three] == 'product_name') {
    $t5=true;

}
else if ($row[$one] == 'type' and $row[$two] == 'product_name' and  $row[$three] == 'quantity') {
    $t6=true;

}
    


}
else {

    if($t1){
        DB::table('products')->insert([
            'product_name' => $row[0], 
            'type' => $row[1], 
            'quantity' => $row[2], 
            
        ]);
    

    }else if($t2){
        DB::table('products')->insert([
            'product_name' => $row[0], 
            'quantity' => $row[1], 
            'type' => $row[2], 
            
        ]);

    }else if($t3){
        DB::table('products')->insert([
            'quantity' => $row[0], 
            'product_name' => $row[1], 
            'type' => $row[2], 
            
        ]);

    }else if($t4){
        DB::table('products')->insert([
            'quantity' => $row[0], 
            'type' => $row[1], 
            'product_name' => $row[2], 
            
        ]);

    }else if($t5){
        DB::table('products')->insert([
            'type' => $row[0], 
            'quantity' => $row[1], 
            'product_name' => $row[2], 
            
        ]);

    }
    else if($t6){
        DB::table('products')->insert([
            'type' => $row[0], 
            'product_name' => $row[1], 
            'quantity' => $row[2], 
            
        ]);
    }
    else {
        DB::table('products')->insert([
            'product_name' => $row[0], 
            'type' => $row[1], 
            'quantity' => $row[2], 
            
        ]);
    }

}
    


        }
        // if ($i == 0) {
        //      $i++;
        //      continue;
        //     ///if($row[0] =='name')$name =0 ;
        // }
        // // echo   $row[0] . ' ' . $row[1] . '  ' . $row[2] . '<br>';
        // DB::table('products')->insert([
        //     'quantity' => $row[0], 
        //     'product_name' => $row[1], 
        //     'type' => $row[2], 
            
        // ]);
    

    return redirect('/upload');
    }
}
