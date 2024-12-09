<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;



$jobs = Job::all();

Route::get('/', function () {
    return view('home');
});

//All
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(5);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

//Create
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

//Show
Route::get('/jobs/{id}', function ($id) use ($jobs) {


    $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});

//Store
Route::post('/jobs', function () {
    // dd(request()->all());

    // validation...
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    $job = Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs/' . $job->id);
});

//Edit
Route::get('/jobs/{id}/edit', function ($id) use ($jobs) {


    $job = Job::find($id);

    return view('jobs.edit', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
