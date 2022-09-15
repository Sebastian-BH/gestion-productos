<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<div>
								<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Búsqueda">
							</div>
						</div>

						@if (session()->has('message'))
						 <div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> 
							{{ session('message') }} 
						</div>
						@endif
						
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
							<i class="fa fa-plus"></i> 
							Nueva Venta
						</div>
					</div>
				</div>
				
				<div class="card-body">
					
					@include('livewire.sales.create')
					@include('livewire.sales.update')

					<div class="table-responsive">
						<table class="table table-bordered table-sm">
							<thead class="thead">
								<tr> 
									<td>#</td> 
									<th>User Id</th>
									<th>Sorteo Id</th>
									<th>Phone</th>
									<th>Total</th>
									<th>Status</th>
									<td>ACCIONES</td>
								</tr>
							</thead>
							<tbody>
								@foreach($sales as $row)
								<tr>
									<td>{{ $loop->iteration }}</td> 
									<td>{{ $row->user_id }}</td>
									<td>{{ $row->sorteo_id }}</td>
									<td>{{ $row->phone }}</td>
									<td>{{ $row->total }}</td>
									<td>{{ $row->status }}</td>
									<td width="90">
									<div class="btn-group">
										<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Acciones
										</button>
										<div class="dropdown-menu dropdown-menu-right">
										<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a>							 
										<a class="dropdown-item" onclick="confirm('Confirm Delete Sale id {{$row->id}}? \nDeleted Sales cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a>   
										</div>
									</div>
									</td>
								@endforeach
							</tbody>
						</table>						
						{{ $sales->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
