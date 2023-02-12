<?php

namespace App\Http\Controllers;

use Inertia\Response;

class IndexController extends Controller
{

    
    /**
     * index
     *
     * @return Response
     */
    public function index(): Response
    {
        return inertia(
            'Index/Index',
            [
                'message' => 'Laravel boo!'
            ]
        );
    }
        
    /**
     * show
     *
     * @return Response
     */
    public function show(): Response
    {
        return inertia('Index/Show');
    }
}
