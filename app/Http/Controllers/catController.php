<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class catController extends Controller
{
    public function result(Request $request)
    {
        $input = $request->input('typed');
        $cat ="https://http.cat/$input";
        
        echo "
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset='utf-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1'>
        
                <title>Cat Slider</title>
        
                <!-- Fonts -->
                <link href='https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap' rel='stylesheet'>
        
                <!-- Styles -->
                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU' crossorigin='anonymous'>
        
            </head>
            <body class='container' style='background-color: #7FFFD4'>
                <form action='search' method='GET' class='text-center mt-5'>
                    <label for='customRange3' class='form-label'><h1>Slide for surprise</h1></label>
                    <h4>If 404 not found, Keep sliding for different meow meow!</h4>
                    <input style='background: #13bba4' type='range' class='form-range' min='100' max='599' step='1' name='typed'>
                    <button class = 'btn-danger' type = 'submit'>Enter</button>
                </form>

                <div class='row mt-3'>
                    <div class='col-md-5 m-auto'>
                        <img src=$cat width='500' height='420' />
                    </div>
                </div>
            </body>
        </html> ";

    }
}