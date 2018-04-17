@extends('Lameck\Lablayout::layout.app')
@section('title','Login-GI')
@section('content')

<div class="wrapper">
        <div class="container">
            <div class="row">

                <div class="span3">
                    @include('Lameck\Lablayout::layout.partials.menu-left')
                </div>
                <!--/.span3-->

                <div class="span9">
                    @include('Lameck\Lablayout::layout.partials.content')
                </div>
                <!--/.span9-->

            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </div>
    <!--/.wrapper-->
@endsection