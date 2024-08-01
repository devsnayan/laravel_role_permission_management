@extends('layouts.app')
@section('title','Home')

@section('content')
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Hellow World! I'm Mohammad Nayan.</h4>
                    <hr>

                    <ul class="list-group" id="sortable">
                        <p class="fw-bold text-center">Packages are using:</p>
                        <li class="list-group-item bg-dark text-white border border-light mt-2 ">
                            <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                            barryvdh/laravel-debugbar
                        </li>
                        <li class="list-group-item bg-dark text-white border border-light mt-2 ">
                            <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                            laravel/breeze
                        </li>
                        <li class="list-group-item bg-dark text-white border border-light mt-2 ">
                            <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                            spatie/laravel-permission
                        </li>
                        <li class="list-group-item bg-dark text-white border border-light mt-2 ">
                            <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                            laravel/sanctum
                        </li>
                        <li class="list-group-item bg-dark text-white border border-light mt-2 text-decoration-line-through">
                            <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                            laravel/telescope
                        </li>
                        <li class="list-group-item bg-dark text-white border border-light mt-2 text-decoration-line-through">
                            <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                            dompdf
                        </li>
                        <li class="list-group-item bg-dark text-white border border-light mt-2 text-decoration-line-through">
                            <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                            excel/import/export
                        </li>
                        <li class="list-group-item bg-dark text-white border border-light mt-2 text-decoration-line-through">
                            <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                            spatie/laravel-medialibrary
                        </li>
                        <li class="list-group-item bg-dark text-white border border-light mt-2 text-decoration-line-through">
                            <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                            dompdf
                        </li>
                        <li class="list-group-item bg-dark text-white border border-light mt-2 text-decoration-line-through">
                            <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                            swagger
                        </li>
                        <li class="list-group-item bg-dark text-white border border-light mt-2 text-decoration-line-through">
                            <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                            laravel-activitylog
                        </li>
                        <li class="list-group-item bg-dark text-white border border-light mt-2 text-decoration-line-through">
                            <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                            laravolt/avatar
                        </li>
                        <li class="list-group-item bg-dark text-white border border-light mt-2 text-decoration-line-through">
                            <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                            spatie/image-optimizer
                        </li>
                        <li class="list-group-item bg-dark text-white border border-light mt-2 text-decoration-line-through">
                            <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                            spatie/browsershot
                        </li>
                        <!-- <li class="list-group-item bg-dark text-white border border-light mt-2 text-decoration-line-through">
                            <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                            spatie/image-optimizer
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection