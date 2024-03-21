<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Course;

class CourseController extends Controller
{
    public function store(Request $request){
        $validated = $request->validate([
            'nosaukums' => 'required|string',
            'paskaidrojosteksts' => 'required|string',
            'baneraadereses' => 'required|string',
            'cilvekuskaits' => 'required|integer'
        ]);

        $course = Course::create($validated);
        return response()->json($course);
    }

    public function index(){
        $courses = Course::all();
        return response()->json($courses);
    }
    
}
