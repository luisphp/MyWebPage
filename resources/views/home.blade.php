@extends('app')
@section('title', 'Home')
@section('content')
<!--Header-->
<div class="main-header">
	
	<div class="container py-5">
		<div class="row">
			<div class="col-md-6 text-center align-self-center justify-content-center">
				<h1>Desarrollador Web - Mobile</h1>
				<br>
				<h5>php con Laravel y Nativo (Android).</h5>
				<br>
				<button type="button" class="btn btn-outline-secondary btn-lg">Descargar CV</button>
			</div>
			<div class="col-md-6">
				<br>
				<img src="https://mfiles.alphacoders.com/675/thumb-675032.jpg" class="img-fluid rounded mx-auto d-block" alt="imagen_header">
			</div>
			
		</div>
		
	</div>
</div>
<!-- Newsletter-->
<section class="mx-auto py-5 bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-4 form-group mx-auto">
				<input type="text" class="form-control" id="Name" placeholder="Name">
			</div>
			<div class="col-md-4 form-group mx-auto">
				<input type="text" class="form-control" id="Name" placeholder="email">
			</div>
			<div class="col-md-4 mx-auto">
				<button class="btn btn-outline-secondary btn-block">GO!</button>
			</div>
			
		</div>
		
	</div>
	
</section>
<!-- Newsletter-->
<section class="mx-auto py-5 text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="card border-secondary">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="card-link">Card link</a>
						<a href="#" class="card-link">Another link</a>
					</div>
				</div>
				
			</div>
			<div class="col-md-3">
				<div class="card border-secondary">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="card-link">Card link</a>
						<a href="#" class="card-link">Another link</a>
					</div>
				</div>
				
			</div>
			<div class="col-md-3">
				<div class="card border-secondary">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="card-link">Card link</a>
						<a href="#" class="card-link">Another link</a>
					</div>
				</div>
				
			</div>
			<div class="col-md-3">
				<div class="card border-secondary">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="card-link">Card link</a>
						<a href="#" class="card-link">Another link</a>
					</div>
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</section>
<!--Por que este producto-->
<section>
	
	<div class="container">
		<div class="row">
			<div class="my-5 mx-auto text-center bg-light">
				<h3 class="my-3">¿Why this product?</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
		
	</div>
	
</section>
<!--According-->
<section>
	
	<div class="container text-center">
		
		
		<div class="accordion" id="accordionExample">
			<div class="card">
				<div class="card-header" id="headingOne">
					<h2 class="mb-0">
					<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					Collapsible Group Item #1
					</button>
					</h2>
				</div>
				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
					<div class="card-body">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="headingTwo">
					<h2 class="mb-0">
					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					Collapsible Group Item #2
					</button>
					</h2>
				</div>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
					<div class="card-body">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="headingThree">
					<h2 class="mb-0">
					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					Collapsible Group Item #3
					</button>
					</h2>
				</div>
				<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
					<div class="card-body">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					</div>
				</div>
			</div>
		</div>
		
	</section>
	<!--Tims-->
	<section class="team text-center py-5 mx-auto">
		
		<div class="container bg-light">
			<div class="row">
				
					<div class="col-md-3 mx-auto">
						<div class="my-5 mx-auto text-center bg-light">
							<div class="card">
								<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" style="width: 50px; margin: 10px" class="card-img-top mx-auto" alt="...">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 mx-auto">
						<div class="my-5 mx-auto text-center bg-light">
							<div class="card">
								<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" style="width: 50px; margin: 10px" class="card-img-top mx-auto" alt="...">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 mx-auto">
						<div class="my-5 mx-auto text-center bg-light">
							<div class="card">
								<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" style="width: 50px; margin: 10px" class="card-img-top mx-auto" alt="...">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>
					
				</div>
			</div>
			
		</div>
		
	</section>
	@endsection