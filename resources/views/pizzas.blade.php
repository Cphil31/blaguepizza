@extends('layouts.layoutpizzas')

@section('title', 'pizzas')

@section('content')
<div class="row">
	<div class="col"></div>
	<div class="col-11">
		<div class="nospizzas">Nos Pizzas</div>
		<div class="taillepizza">
			TAILLE DES PIZZAS :  20cm,  26cm,  33cm, 40cm.
		</div> 
		<div class="classiques">Les classiques</div>
		<div class="pizza">
			<div class="row">
				<div class="col">MARGUERITA</div>
				<div class="col">3,00€,</div>
				<div class="col">5,50€,</div>
				<div class="col">8,50€,</div>
				<div class="col">13,50€.</div>
				<div class="col-3"></div>
			</div>
		</div>
		<div class="compo">	
			Base tomate, emmental, olives
		</div>
		<div class="pizza">
			<div class="row">	
				<div class="col">BAMBINO</div>
				<div class="col">3.50€</div>
				<div class="col">6.00€</div>
				<div class="col">9.00€</div>
				<div class="col">14.00€</div>

			</div>
		</div>
		<div class="compo">
			Base tomate, jambon, emmental, olive	
		</div>
		<div class="pizza">
			<div class="row">
				<div class="col">REGINA</div>
				<div class="col">4.00€</div>
				<div class="col">6.50€</div>
				<div class="col">9.50€</div>
				<div class="col">14.50€</div>
			</div>
		</div>
		<div class="compo">
			Base tomate, champignons de paris, jambon, emmental, olives	
		</div>
		<div class="pizza">
			<div class="row">
				<div class="col">VEGETARIENNE</div>
				<div class="col">5,50€</div>
				<div class="col">8,00€</div>
				<div class="col">11.00€</div>
				<div class="col">16.00€</div>
			</div> 
		</div>
		<div class="compo">
			Base tomate, champignons, emmental, tomates fraîches, poivrons, oignons, cœur d’artichaut, olives
		</div>
		<div class="pizza">
			<div class="row">
				<div class="col">LORENZA</div>
				<div class="col">6.00€</div>
				<div class="col">8.50€</div>
				<div class="col">11.50€</div>
				<div class="col">16.50€</div>
			</div>
		</div>
		<div class="compo">
			Base crème, jambon, emmental, mozzarella, jambon de pays, olives
		</div>
		<div class="pizza"></div>
		<div class="row">
			<div class="col">FLAMMEKUECHE</div>
			<div class="col">4.50€</div>
			<div class="col">7.00€</div>
			<div class="col">10,00€</div> 
			<div class="col">15.00€</div> 
		</div>	
		<div class="compo"></div>
		Base crème, oignons lardons, emmental,  olives
		<div class="pizza">
			4 SAISONS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  5,00€ ..................  7,50€ ..................  10,50€ ..................  15,50€
		</div>
		<div class="compo">	
			Base tomate, champignons, emmental, jambon, tomates fraîches, cœur  d’artichaut, olives
		</div>
		<div class="pizza">	
			PROVENCALE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5,00€ ..................  7,50€ ..................  10,50€ ..................  15,50€
		</div>
		<div class="compo">
			Base tomate, emmental, tomates fraîches, œuf, herbes de Provence,  persillade, olives
		</div>
		<div class="pizza">
			BIELEZE ........................................................................................... 5,00€ ..................  7,50€ ..................  10,50€ .................. 15,50€
		</div>
		<div class="compo">
			Base bolognaise, oignons, mozzarella, bœuf haché, crème fraîche, olives
		</div>
		<div class="pizza">
			ROYALE............................................................................................ 5,50€ ..................  8,00€ ..................  11,00€ ................  16,00€
		</div>
		<div class="compo">
			Base tomate, champignons de paris, jambon, emmental, lardons, oignons, olives
		</div>
		<div class="pizza">
			CAMPAGNARDE ............................................................................ 6,00€ ..................  8,50€ ..................  11,50€ ................  16,50€
		</div>
		<div class="compo">
			Base crème, champignons, mozzarella, camembert, pomme de terre, lardons, olives
		</div>
		<div class="pizza">
			PEPPERONI ............................................................................  8,00€ ..................  10,50€ ..................  13,50€ ................  18,50€
		</div>
		<div class="compo">
			Base tomate, champignons de paris, emmental, cheddar, double pepperoni, poivrons, olives
		</div>
		<div class="pizza">
			8 FROMAGES .................................................................................  9,00€ ..................  11,50€ ................  14,50€................. 19,50€   
		</div>
		<div class="compo">
			Base crème, emmental, mozzarella, fromage de chèvre, gorgonzola, reblochon, roquefort, camembert, fromage à ralette, miel
		</div>
		<div class="pizza">
			5 FROMAGES .................................................................................  7,00€ ..................  9,50€ ..................  12,50€................. 17,50€

		</div>
		<div class="compo">
			Base tomate, emmental, mozzarella, fromage de chèvre, gorgonzola, reblochon, miel
		</div>
		<div class="pizza">
			3 FROMAGES .................................................................................  5,50€ ..................  8,00€ ..................  11,00€ ................  16,00€	
		</div>
		<div class="compo">
			Base tomate, emmental, mozzarella, fromage de chèvre, crème fraîche, olives
		</div>
		<div class="classiques">Les fromages</div>
		<div class="pizza">
			ABEILLE ........................................................................................... 6,00€ ..................  8,50€ ..................  11,50€................. 16,50€
		</div>
		<div class="compo">	
			Base crème, emmental, mozzarella, fromage de chèvre, gorgonzola, miel, olives
		</div>
		<div class="pizza">
			SAUMON......................................................................................... 7,50€ ..................  10,00€ ..................  13,00€................. 18,00€
		</div>
		<div class="compo">
			Base crème, saumon fumé, emmental, mozzarella, crème fraîche, citron, olives
		</div>
		<div class="pizza">
			FRUIT DE MER................................................................................. 6,50€ ..................  9,00€ ..................  12,00€ ..................  17,00€
		</div>
		<div class="compo">
		Base tomate, emmental, moules et crevettes décortiquées, anneaux d’encornets, chair d’écrevisses, noix de Saint-Jacques, persillade</div>
		<div class="pizza">
			NAPOLITAINE................................................................................. 5,00€ ..................  7,50€ ..................  10,50€ ..................  15,50€
		</div>
		<div class="compo">
			Base tomate, emmental, câpres, anchois, tomates fraîches, olives
		</div>
		<div class="pizza"></div>
		<div class="compo"></div>
		<div class="pizza"></div>
		<div class="compo"></div>
		<div class="pizza"></div>
		<div class="compo"></div>

		<div class="classiques">Les poissons</div>




		<div class="classiques">Les épicées:</div>

		<div class="pizza">
			CHORIZO ........................................................................................  5,50€ ..................  8,00€ ..................  11,00€ ................  16,00€
		</div>

		<div class="compo">
			Base tomate, chorizo, emmental, mozzarella, poivrons, olives
		</div>

		ORIENTALE ..................................................................................... 5,50€ ..................  8,00€ ..................  11,00€ ................  16,00€

		Base tomate, merguez, emmental, mozzarella, poivrons, olives

		LA HOT............................................................................................. 7,50€ ..................  10,50€ ..................  13,50€................. 18,50€   


		Base crème, champignons, sauce algérienne, mozzarella, bœuf haché, merguez, chorizo, oignons, olives

		BEEF PEPPER .................................................................................. 6,50€ ..................  9,00€ ..................  12,00€................. 17,00€  

		Base crème, champignons, bœuf haché, oignons, sauce poivre, frites chips, olives

	</div>
	<div class="col"></div>
</div>
@endsection