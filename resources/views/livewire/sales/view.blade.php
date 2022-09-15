@section('title', __('Sales'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
					@endif		
				</div>
				
				<div class="card-body">
					<div class="col-sm-3">
						<label>Productos disponibles</label>
						<select wire:model="selectedProduct" class="form-control">
							<option value="">producto</option>
							@foreach($products as $product)
								<option value="{{$product->id}}">{{$product->name}}</option>
							@endforeach
						</select>
					</div>
					<br>

					@if(!is_null($producto))
						<div class="col-sm-3">
							<p>Informacón del producto</p>
							<p>Nombre: {{$producto[0]->id}}</p>
							<p>Nombre: {{$producto[0]->name}}</p>
							<p>Referencia: {{$producto[0]->reference}}</p>
							<p>Precio: ${{$producto[0]->price}}</p>
							<p>Peso: {{$producto[0]->weight}}</p>
							<p>Categoria: {{$producto[0]->category}}</p>
							<p>Stock: {{$producto[0]->stock}}</p>
							<label for="stock"></label>
                			<input wire:model="cant" type="text" class="form-control" 
								id="cant" placeholder="Cantidad">@error('cant') 
								<span class="error text-danger">{{ $message }}</span> @enderror
								<br>
							<button type="button" wire:click.prevent="store({{$producto[0]->id}})" class="btn btn-primary">vender</button>
							
						</div>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
