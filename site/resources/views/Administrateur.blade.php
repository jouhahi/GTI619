@extends('layouts.app')
   <!-- test-->
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">ADMINISTRATION</div>

                <div class="panel-body">
					 <ul class="nav nav-tabs">
					  <li class="active"><a data-toggle="tab" href="#home">Tentatives de connexion</a></li>
					  <li><a data-toggle="tab" href="#menu1">Gestion du mot de passe</a></li>
					  <li><a data-toggle="tab" href="#menu2">Politique de mot de passe</a></li>
					  <li><a data-toggle="tab" href="#menu3">Gestion des rôles</a></li>
					</ul>
 <!-- test-->
					<div class="tab-content">
					  <div id="home" class="tab-pane fade in active">
					    <h3>HOME</h3>
					    <p>Some content.</p>
					  </div>
					  <div id="menu1" class="tab-pane fade">
					    <h3>Menu 1</h3>
					    <p>Some content in menu 1.</p>
					  </div>
					  <div id="menu2" class="tab-pane fade">
					    <h3>Menu 2</h3>
					    <p>Some content in menu 2.</p>
					  </div>
					   <div id="menu3" class="tab-pane fade">
					    <h3>Menu 3</h3>
					    <p>Some content in menu 3.</p>
					  </div>
					</div>
            </div>
        </div>
    </div>
</div>
@endsection