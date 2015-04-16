@extends('layouts.master')


@section('content')
    
    <section id="e404">
    
        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center">

                    <div class="content">
                        <h1>
                            Oops!</h1>
                        <h2>
                            404 Not Found</h2>
                        <div class="error-details">
                            Sorry, an error has occurred, Requested page not found!
                        </div>
                        <div class="action-btns">
                            <a href="{{ route('home') }}" class="btn btn-primary btn-lg">
                                <span class="glyphicon glyphicon-home"></span> Take Me Home 
                            </a>
                            <a href="{{ route('support') }}" class="btn btn-default btn-lg">
                                <span class="glyphicon glyphicon-envelope"></span> Contact Support 
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>

@stop



  




 





