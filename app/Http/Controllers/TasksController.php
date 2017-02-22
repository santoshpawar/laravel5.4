<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
	public function index($value='')
	{
		//$tan(z)est=DB::table('tasks')->latest()->get();
		//$test=DB::table('tasks')->('created_at')
		$tasks=App\Task::all();
		return view('welcome',compact('tasks'));
	}
	public function show($id)
	{
		$test=DB::table('tasks')->find($id);
		return view('show',compact('test'));
	}
}
