<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	// Gerência de funcionários / servidores
	// listagens
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
	// cadastros
		function EnvironmentRegServ(){
			return view('environmentregserv');
		}
		public function RunRegServ(){
			/*
			$name = Request::input('name');
			$surname = Request::input('surname');
			$birth = Request::input('birth');
			$email = Request::input('email');
			$office = Request::input('office');
			$siape = Request::input('siape');
			$phone = Request::input('phone');
			$entry_service = Request::input('2010-01-07');
			$out_service = "0000-00-00";
			$annotation = Request::input('annotation');
			// DB::table('servidor_setor')->insert(['idservidor'=>$idservidor,'idsetor'=>$idSetor,'entrada'=>'2015-10-10','saida'=>'0001-01-01','funcao'=>'Não possui']);
			DB::insert('insert into employee(name,surname,office,birth,email,siape,phone,entry_service,out_service,annotation)values(?,?,?,?,?,?,?,?,?,?)',array($name,$surname,$office,$birth,$email,$siape,$phone,$entry_service,$out_service,$annotation));
			*/
			$params = Request::all();
			$employee = new Employee($params);
			$employee->save();
			return view('runregserv');
		}
	
	}
