<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
		function AccessDoc(){
			// Servidores do quadro ativos
			$employee = DB::select('select * from employee where employee.classification = "EBTT" AND employee.out_service = "0000-00-00" ORDER BY name');
			return view('employeedoc')->withEmployee($employee);
		}
		function InactiveDoc(){
			// Servidores do quadro inativos
			$employee = DB::select('select * from employee where employee.classification = "EBTT" AND employee.out_service != "0000-00-00" ORDER BY name');
			return view('inactiveemployeedoc')->withEmployee($employee);
		}
		function AccessTae(){
			// Servidores do quadro ativos
			$employee = DB::select('select * from employee where employee.classification = "TAE" AND employee.out_service = "0000-00-00" ORDER BY name');
			return view('employeetae')->withEmployee($employee);
		}
		function InactiveTae(){
			// Servidores do quadro inativos
			$employee = DB::select('select * from employee where employee.classification = "TAE" AND employee.out_service != "0000-00-00" ORDER BY name');
			return view('inactiveemployeetae')->withEmployee($employee);
		}
		function ServerLog(){
			return view('serverlog');
		}
}
