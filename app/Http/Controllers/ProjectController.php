<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SaveProyectRequest;
use App\Project;
use PhpParser\Node\Stmt\Return_;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('created_at', 'asc')->paginate(1);

        return view('projects.index', compact('projects'));
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.show', compact('project'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(SaveProyectRequest  $request, Project $project)
    {
            Project::create([
                'title' => request('title'),
                'description' => request('description'),
                'url' => request('url')
            ]);
            return redirect(route('project.index'));
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project, SaveProyectRequest $request)
    {
        $project->update(
            [
            'title' => request('title'),
            'description' => request('description'),
            ]
        );
            return redirect(route('project.index'));
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect(route('project.index'));
    }

}








/*

= Project::findOrFail($id);
Project::create(request()->validate(
    [
        'title'=>'required'.$project->id,
        'description'=>'required'.$project->id
    ],
    [
        'title.required'=>'The name field is required',
        'description.required'=>'The description field is required'
    ]
));

    return redirect(route('project.index')) */







/*


<button class="btn btn-danger" onclick="handleConfirmDelete({{$expense->id}})"> Delete </button>


<script>

    function handleConfirmDelete(id)
    {
        let answer = confirm('Do you want to continue?');

        if(answer == true)
        {
            var token = $("meta[name='csrf-token']").attr("content")

            $.ajax({
                headers: {
                    "_token": token
                },
                type: "get",
                url: "/expenseReports/"+id+"/delete",

                success: function(data) {
                    if(data.message == 'success'){
                        alert("Delete completed");
                        window.location.href = "/expenseReports/"+{{$id}};
                    }
                },

                error: function(error) {
                    console.log("error", error)
                }
            });
        }

    }
</script>


public function destroy($id)
{
    $report = ExpenseReport::findOrFail($id);
    $report->delete();
}

public function deleteExpanseReportIndex($id)
{
    $report = ExpenseReport::findOrFail($id);
    $report->delete();
    return response()->json([
        "message" => "success"
    ]);
}

public function deleteExpanseReport($id)
{
    $report = Expense::findOrFail($id);
    $report->delete();
    return response()->json([
        "message" => "success"
    ]);
}
 */
