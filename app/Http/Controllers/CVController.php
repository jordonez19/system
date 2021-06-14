<?php

namespace App\Http\Controllers;

use App\CV;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\ProjectController;
use App\Http\Requests\CVrequest;


class CVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /* foreach ($CVS as $key => $value)
    {
        $skills = explode(',',$value->skills); //array
    } */

    public function index()
    {
        $CVS = CV::orderBy('created_at', 'desc')->paginate(3);

            return view('cv.index', compact('CVS'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cv.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CVrequest $request, CV $CV )
    {
        /* $skills = implode(',',request('skills')); */ //string
        $skills = $request->skills;
        return $skills;
            if($request->ajax())
            {
                for($count = 0; $count < count($skills); $count++)
                {
                    $data = array(
                        'skills' => $skills[$count]
                    );
                    $inser_data[] = $data;
                }

                CV::select($inser_data);
                return response()->json([
                    'success' => 'Data Added successfully.'
                ]);
            }

            CV::create([
                'title' => request('title'),
                'skills' => request('skills'),
                'description' => request('description'),
                'date' => request('date')
            ]);

        return redirect()->route('cv.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CV  $CV
     * @return \Illuminate\Http\Response
     */
    public function show(CV $CV, $id)
    {
        /* $CV = CV::findOrFail($id);
        return $CV; */
        /* return view('Cv.show', compact('CV')); */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CV  $CV
     * @return \Illuminate\Http\Response
     */
    public function edit(CV $CV, $id)
    {
        /* return $id;
        $CV = CV::findOrFail($id);
        return view('Cv.edit', compact('CV')); */

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CV  $CV
     * @return \Illuminate\Http\Response
     */
    public function update(CVrequest $request, CV $CV)
    {
        /* $CV->update(
            [
                'title' => request('title'),
                'skills' => $skills,
                'description' => request('description'),
                'date' => request('date')
            ]
        );
            return redirect(route('cv.index')); */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CV  $CV
     * @return \Illuminate\Http\Response
     */
    public function destroy(CV $CV)
    {
        //
    }
}
