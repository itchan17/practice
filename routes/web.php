<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Engineer',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$20,000'
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$30,000'
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => '$50,000'
        ],
        [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => '$20,000'
        ],
        [
            'id' => 3,
            'title' => 'Teacher',
            'salary' => '$30,000'
        ]
    ];

    // Find the job by id
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    // Pass the single job to the view
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
