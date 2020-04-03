<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $data = [
            'id' => "2018-106296",
        ];

        return view('admin.dashboard')->with('data', $data);
    }

    public function candidates()
    {
        $data = [
            [
                'name' => "President",
                'candidates' => [
                    [
                        "name" => "John Doe",
                        "image" => "https://picsum.photos/id/237/1200",
                        "strand" => [
                            [
                                "name" => "PES",
                            ]
                        ]
                    ]
                ]
            ],
            [
                'name' => "Vice President",
                'candidates' => [
                    [
                        "name" => "John Deer",
                        "image" => "https://picsum.photos/id/237/1200",
                        "strand" => [
                            [
                                "name" => "MAD",
                            ]
                        ]
                    ]
                ]
            ],
            [
                'name' => "Secretary",
                'candidates' => [
                    [
                        "name" => "John Ding DOng",
                        "image" => "https://picsum.photos/id/237/1200",
                        "strand" => [
                            [
                                "name" => "MOAR",
                            ]
                        ]
                    ]
                ]
            ],

        ];

        return view('admin.candidates')->with('candidates', $data);
    }
}
