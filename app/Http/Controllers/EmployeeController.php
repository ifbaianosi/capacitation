<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
		function Access(){
			$employee = DB::select('select * from employee');
			return view('employee')->withEmployee($employee);
		}
}
