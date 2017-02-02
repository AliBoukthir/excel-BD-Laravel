<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use Illuminate\Support\Facades\Redirect;


class ExcelController extends Controller
{
    public function getImport() {


    	//var_dump(getcwd());
		$list = $this->getModels();
    	return view('excel.import',compact('list'));
    }

    public function postImport( Request $request) {


    	if ( (\Input::file('file') ) && ($request->get('model')!="") )  {

    		$model1 = $request->get('model'); 

	    	$model = preg_replace('/\\.[^.\\s]{3,4}$/', '', $model1);

	    	global $mod;
	    	 $mod= 'App\\' .$model;

	    	
    

    	\Excel::load(\Input::file('file'),function($reader){


    			foreach ($reader->toArray() as $row) {
    				$GLOBALS['mod']::firstOrCreate($row);
    			}
    		


    	});

    	$list = $this->getModels();
    	$text="Conversion successfully.";

   }
    else {
    	$text = "Error please choose a model and upload a file.";
    }

		$list = $this->getModels();
    	return view('excel.import', compact('text','list'));
    	//return Redirect::back()->with('text', $text);
    }

    public function export(Request $request) {

    

    	$model1 = $request->get('model'); 

    	if ($model1 != "") {

    	$model = preg_replace('/\\.[^.\\s]{3,4}$/', '', $model1);

    	$mod = 'App\\' .$model;

    	
    	$export=$mod::select('*')->get();	
    	\Excel::create($model, function($excel) use ($export){
    		$excel->sheet('Sheet1',function($sheet) use ($export){
    			$sheet->fromArray($export);
    		});
    		
    	})->export('xlsx');

    }
    else{

    	$list = $this->getModels();
    	$text = "Error please choose a model to export.";
    	return view('excel.import', compact('text','list'));
    }





    }

    public function getModels() {

    	$dir    = 'D:\Laravel tuto\excelToBd\app';

    	$list=[];
		if ($handle = opendir($dir)) {
	    while (false !== ($file = readdir($handle)))
	    {

	        if ($file != "." && $file != ".." && strtolower(substr($file, strrpos($file, '.') + 1)) == 'php')
	        {

	        	$file = preg_replace('/\\.[^.\\s]{3,4}$/', '', $file);
	            array_push($list, $file);
	            //var_dump($list);
	        }
    	}
   		closedir($handle);
		}
		return $list;
    }
}
