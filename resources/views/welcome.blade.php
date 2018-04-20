@extends('layouts.layoutmaster')

@section('title', 'acceuil')

@section('content')
<div class="row">
<div class="col-2"></div>	
<div class="col">
	
	<div class="fond">

		<div class="bienvenue">Bienvenue chez Blaguepizza</div>
		<div class="regardez">Regardez nos 
			<a href="/pizzas" style="color: white;">Pizzas</a>
			et 
			<a href="/pastas" style="color: white;">Pastas</a>
		</div>
		<div class="passez">Passez votre commande <a href="/contact" style="color: white;">ici</a></div>

	</div>
</div>
<div class="col-2"></div>	
</div>	
@endsection