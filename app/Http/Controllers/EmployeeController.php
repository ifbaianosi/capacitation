<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Request;

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
			//$nome = Request::input('name');
			

			/*
			

			DB::table('servidor_setor')->insert(['idservidor'=>$idservidor,'idsetor'=>$idSetor,'entrada'=>'2015-10-10','saida'=>'0001-01-01','funcao'=>'Não possui']);
			/*
			DB::insert('insert into employee(name,surname,siape,classification,office,email,phone,birth,entry_service,out_service,annotation)values(?,?,?,?,?,?,?,?,?,?,?)',array('Gil Christiano','Guedes dos Santos','1754259','TAE','Analista','gilchristiano@gmail.com','073991181477','1979-04-26','2010-01-07','0001-01-01','Anotação'));
			*/
			$_name = Request::input('_name');
			$surname = Request::input('surname');
			$siape = Request::input('siape');
			$classification = Request::input('classification');
			$office = Request::input('office');
			$email = Request::input('email');
			$phone = Request::input('phone');
			$birth = Request::input('birth');
			$idade = date('d/m/Y',strtotime($birth));
			$entry_service = Request::input('entry_service');
			$out_service = Request::input('0001-01-01');
			$annotation = Request::input('annotation');
			// DB::insert('insert into employee(name,surname,siape,classification,office,email,phone,birth,entry_service,out_service,annotation)values(?,?,?,?,?,?,?,?,?,?,?)',array($name,$surname,$siape,$classification,$office,$email,$phone,$birth,$entry_service,$out_service,$annotation));
			return "$_name $surname $siape $classification $birth $idade $entry_service $office $email $phone $annotation";
			/*
			$params = Request::all();
			$employee = new Employee($params);
			$employee->save();
			return view('runregserv');
			*/
		}
	
	}
