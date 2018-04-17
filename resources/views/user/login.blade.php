@extends('Lameck\Lablayout::layout.app')
@section('title','Login-GI')
@section('content')
<div class="wrapper">
    <div class="container">                    
        <div class="row">           
            <div class="" style="">
                @if (session('error'))	
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>		
                @elseif	(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <p>{{  $error  }}</p>
                        @endforeach
                    </div>
                @endif
            </div>    
            <div class="module module-login span4 offset4"> 
                <form class="form-vertical" method="post" action="">
                    <div class="module-head">
                        <h3>Login no sistema</h3>
                    </div>
                    <div class="module-body">
                        <div class="control-group">
                            <div class="controls row-fluid">
                                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />  
                                <input class="span12" type="text" name="email" id="email" placeholder="E-mail">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls row-fluid">
                                <input class="span12" type="password" name="password" id="password" placeholder="Senha">
                            </div>
                        </div>
                    </div>
                    <div class="module-foot">
                        <div class="control-group">
                            <div class="controls clearfix">
                                <button type="submit" class="btn btn-primary pull-right">Entrar</button>
                                <!--<label class="checkbox">
                                    <input type="checkbox"> Remember me
                                </label>-->
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!--/.wrapper-->
@endsection

