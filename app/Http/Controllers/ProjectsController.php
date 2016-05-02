<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Project;

class ProjectsController extends Controller
{
    //
    public function index()
    {
    	$projects = Project::all();
    	return view('projects.index', compact('projects'));
    }
    public function create()
	{
		return view('projects.create');
	}
	public function store()
	{
		//
	}
	public function show(Project $project)
	{
		return view('projects.show', compact('project'));
	}
	public function edit(Project $project)
	{
		return view('projects.edit', compact('project'));
	}
	public function update(Project $project)
	{
		//
	}
	public function destroy(Project $project)
	{
		//
	}
}
