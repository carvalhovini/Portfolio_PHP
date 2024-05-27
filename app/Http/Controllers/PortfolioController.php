<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class PortfolioController extends Controller
{
    public function index()
    {
        // Busca todos os projetos
        $projects = Project::all();

        // Passa os projetos para a view
        return view('portfolio', compact('projects'));
    }
}
