@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="css/main.css">
    <body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <article>
                <p class="paragraphUnderline">
                    “La science est du savoir organisé.”
                </p>
            </article>

                <ul class="align">
                    <li>
                        <figure class='book'>
                            <!-- Front -->
                            <ul class='hardcover_front'>
                                <li>
                                    <img src="img/finance.jpg" alt="" width="100%" height="100%">
                                </li>
                                <li></li>
                            </ul>
                            <!-- Pages -->
                            <ul class='page'>
                                <li><img src="img/todo.jpeg" alt="" width="100%" height="100%"></li>
                                <li><img src="img/todo.jpeg" alt="" width="100%" height="100%" position="relative">
                                <button id="btnDessus"><a href=@auth"/1"@else"login"@endauth>choisir</a></button></li>
                                <li><img src="img/todo.jpeg" alt="" width="100%" height="100%"></li>
                                <li><img src="img/todo.jpeg" alt="" width="100%" height="100%"></li>
                                <li><img src="img/todo.jpeg" alt="" width="100%" height="100%"></li>

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

                    <li>
                        <figure class='book'>
                            <!-- Front -->
                            <ul class='hardcover_front'>
                                <li>

                                    <img src="img/demarche.jpg" alt="" width="100%" height="100%">
                                </li>
                                <li></li>
                            </ul>
                            <!-- Pages -->
                            <ul class='page'>
                                <li><img src="img/todo.jpeg" alt="" width="100%" height="100%"></li>
                                <li><img src="img/todo.jpeg" alt="" width="100%" height="100%" position="relative">
                                <button id="btnDessus"><a href=@auth"/2"@else"login"@endauth>choisir</a></button></li>
                                <li><img src="img/todo.jpeg" alt="" width="100%" height="100%"></li>
                                <li><img src="img/todo.jpeg" alt="" width="100%" height="100%"></li>
                                <li><img src="img/todo.jpeg" alt="" width="100%" height="100%"></li>
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

                    <li>
                        <figure class='book'>
                            <!-- Front -->
                            <ul class='hardcover_front'>
                                <li>
                                    <img src="img/divers.jpg" alt="" width="100%" height="100%">
                                </li>
                                <li></li>
                            </ul>
                            <!-- Pages -->
                            <ul class='page'>
                                <li> <img src="img/todo.jpeg" alt="" width="100%" height="100%"></li>
                                <li><img src="img/todo.jpeg" alt="" width="100%" height="100%" position="relative">
                                    <button id="btnDessus"><a href=@auth"/3"@else"login"@endauth>choisir</a></button></li>
                                <li><img src="img/todo.jpeg" alt="" width="100%" height="100%"></li>
                                <li><img src="img/todo.jpeg" alt="" width="100%" height="100%"></li>
                                <li><img src="img/todo.jpeg" alt="" width="100%" height="100%"></li>
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
</div>
<script src="js/index.js"></script>
    </body>

@endsection
