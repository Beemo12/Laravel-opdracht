<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function add()
    {
        $project = new Project();

        $project->title = 'Mijn eerste project';
        $project->intro = 'Introductie van het project';
        $project->description = 'Beschrijving van het project';
        $project->active = true;
        $project->image = 'https://picsum.photos/200/300';
        $project->created_at = now();
        $project->updated_at = now();

        $project->save();

        return 'Project toegevoegd!';
    }


    public function index()
    {

        $projects = Project::all();

        return view('projects.index', [
            'projects' => $projects
        ]);
    }

}