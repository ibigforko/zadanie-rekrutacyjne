<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::get();
        return view('project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project = new Project();
        $clients = Client::get();
        return view('project.create', compact('project', 'clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request, $id = null)
    {
        if ($id) {
            $project = Project::find($id);
            if (!$project) {
                abort(404);
            }
        } else {
            $project = new Project();
        }

        $project->fill($request->post());

        $project->save();

        Session::flash('success_message', 'Dane zostały zapisane');

        return redirect()->route('project-index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        if (!$project) {
            abort(404);
        }
        $clients = Client::get();
        return view('project.edit', compact('project', 'clients'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        if (!$project) {
            abort(404);
        }
        $project->delete();
        return back();
    }

    public function show($id)
    {
        $project = Project::find($id);
        if (!$project) {
            abort(404);
        }
        return view('project.show', compact('project'));
    }
}
