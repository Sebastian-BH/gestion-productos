@section('title', __('Sales'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
					@elseif(session()->has('msg'))	
						<div wire:poll.4s class="btn btn-sm btn-danger" style="margin-top:0px; margin-bottom:0px;"> {{ session('msg') }} </div>

					@endif		
				</div>
				
				<div class="card-body">					
					<div class="col-sm-3">
						<label>Productos </label>
						<select wire:model="selectedProduct" class="form-control">
							<option value="">seleccione un producto</option>
							@foreach($products as $product)
								<option value="{{$product->id}}">{{$product->name}}</option>
							@endforeach
						</select>
						<hr>
					</div>

					@if(!is_null($producto))
					<div class="row m-2">
						<div class="col-sm-4">
							<h3>Informacón del producto</h3>								
							<p>NOMBRE DEL PRODUCTO: {{$producto[0]->name}}</p>
							<p>REFERENCIA: {{$producto[0]->reference}}</p>
							<p>PRECIO: ${{$producto[0]->price}}</p>
							<p>PESO: {{$producto[0]->weight}}</p>
							<p>CATEGORIA: {{$producto[0]->category}}</p>
							<p>STOCK: {{$producto[0]->stock}}</p>
							
							
						</div>
						<div class="col-sm-5 d-flex align-items-end">
							
							<input wire:model="cant" type="number" class="form-control m-3" 
								id="cant" placeholder="Cantidad a vender">@error('cant') 
								<span class="error text-danger">{{ $message }}</span> @enderror
								<br>
							<button type="button" wire:click.prevent="store({{$producto[0]->id}})" class="btn btn-block btn-success	 m-3">vender</button>
						</div>
					</div>
					@endif
				</div>

				<div class="card-footer">
					<div class="row m-2">
						<button type="button" wire:click.prevent="maxStock()" class="btn btn-info">Producto mayor stock</button>
						
						@if((!is_null($maxstock)) && $maxstock->stock > 0)
							<p class="m-2">El producto con mayor stock es: {{$maxstock->name}}</p>
						@else
							@if (session()->has('meseg'))	
							<div wire:poll.4s class="btn btn-sm btn-danger ml-2" style="margin-top:0px; margin-bottom:0px;"> {{ session('meseg') }} </div>
							@endif
						@endif
					</div>
					<div class="row m-2">
						<button type="button" wire:click.prevent="maxSale()" class="btn btn-info">producto mas vendido</button>
						@if(!is_null($maxsale))
							<p class="m-2">El producto más vendido es: {{$maxsale[0]->name}}</p>
						@endif
							@if (session()->has('mseg'))								
								<div wire:poll.4s class="btn btn-sm btn-danger ml-2" style="margin-top:0px; margin-bottom:0px;"> {{ session('mseg') }} </div>
							@endif		
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
