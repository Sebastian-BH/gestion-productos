@section('title', __('Products'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<div>
								<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar Productos">
							</div>
						</div>						
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif						
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Agregar Producto
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.products.create')
						@include('livewire.products.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>id</td> 
								<th>Nombre</th>
								<th>Referencia</th>
								<th>Precio</th>
								<th>Peso</th>
								<th>Categoria</th>
								<th>Stock</th>
								<td>ACCIONES</td>
							</tr>
						</thead>
						<tbody>
							@foreach($products as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->name }}</td>
								<td>{{ $row->reference }}</td>
								<td>{{ $row->price }}</td>
								<td>{{ $row->weight }}</td>
								<td>{{ $row->category }}</td>
								<td>{{ $row->stock }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Acciones
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Editar </a>							 
									<a class="dropdown-item" onclick="confirm('Confirma la eliminación del {{$row->name}}?')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Borrar </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $products->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
