<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Prelim Project</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    </head>
    <body>


        <div  class="d-flex aligns-items-center justify-content-center mt-5">
            <div class="badge text-warning text-wrap">
                <h5>Integrative Programming & Technology Prelim Project</h5>
            </div>
        </div>
        <div>
            <nav  class="d-flex aligns-items-center justify-content-center" style="height:200px">
                <ul class="d-flex list-unstyled m-5">
                    <li><a class="nav-link mt-5 text-secondary" href="{{url('/view2')}}">Page 2</a></li>
                    <li><a class="nav-link mt-5 h5 text-success" href="{{url('/view3')}}">Page 3</a></li>
                    <li><a class="nav-link mt-5 text-secondary" href="{{url('/')}}">Page 1</a></li>
                </ul>
            </nav>
        </div>

        <link rel="stylesheet" href="{{asset('js/bootstrap.min.js')}}">
    </body>
</html>
