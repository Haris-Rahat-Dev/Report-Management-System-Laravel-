<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:sanctum']);
    }

    public function index()
    {
        return view('reports.index');
    }

    public function create()
    {
        $categories = Category::all();
        return view('reports.create' , [ 'categories' => $categories, 'success' => "notification" ]);
    }

    public function store()
    {
        if(\request('newCategory') == null)
        {
            $report = new Report();
            $report->title = trim(\request('title'));
            $report->category = trim(\request('category'));
            $report->report = trim(\request('report'));
            $report->save();
            $categories = Category::all();
            return view('reports.create' , [ 'categories' => $categories , 'success' => "submitted" ]);
        }
        if(\request('category') == null)
        {
            Category::create([
                'category' => \request('newCategory')
            ]);
            $report = new Report();
            $report->title = trim(\request('title'));
            $report->category = trim(\request('newCategory'));
            $report->report = trim(request('report'));
            $report->save();
            $categories = Category::all();
            return view('reports.create' , [ 'categories' => $categories, 'success' => "submitted" ]);
        }
        if(\request('category') && \request('newCategory'))
        {
            $categories = Category::all();
            return view('reports.create' , [ 'categories' => $categories , 'success' => "error" ]);
        }
    }

    public function edit(Report $report)
    {
        $categories = Category::all();
        return view('reports.edit', [ 'report' => $report, 'categories' => $categories ]);
    }

    public function update(Request $request, $id)
    {
        $report = Report::find($id);
        $report->title = trim(\request('title'));
        $report->category = trim(\request('category'));
        $report->report = trim(\request('report'));
        $report->save();

        return redirect()->back();
    }
}
