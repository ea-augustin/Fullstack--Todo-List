@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="css/main.css">
    <body>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-11">

                <ul class="align">
                    <li>
                        <figure class='book'>
                            <!-- Front -->
                            <ul class='hardcover_front'>
                                <li>
                                    <img src="img/boite.png" alt="" width="100%" height="100%">
                                </li>
                                <li></li>
                            </ul>
                            <!-- Pages -->
                            <ul class='page'>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <!-- Back -->
                            <ul class='hardcover_back'>
                                <li></li>
                                <li></li>
                            </ul>
                            <ul class='book_spine'>
                                <li></li>
                                <li></li>
                            </ul>

                        </figure>
                    </li>
                </ul>
            </div>
        </div>


        <div class="input-group input-group-lg">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-lg"> votre idée</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
        </div>
    </div>



    </body>
@endsection

