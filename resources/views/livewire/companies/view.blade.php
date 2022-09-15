<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">

				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Búsqueda">
						</div>
					
						@if (session()->has('message'))
							<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> 
								{{ session('message') }} 
							</div>
						@endif
						
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
							<i class="fa fa-plus"></i>  
							Nueva Compañia
						</div>
					</div>
				</div>
				
				<div class="card-body">

					@include('livewire.companies.create')
					@include('livewire.companies.update')

					<div class="table-responsive">
						<table class="table table-bordered table-sm">
							<thead class="thead">
								<tr> 
									<td>#</td> 
									<th>Country Id</th>
									<th>Name</th>
									<th>Nit</th>
									<th>Phone</th>
									<th>Email</th>
									<th>Status</th>
									<td>ACCIONES</td>
								</tr>
							</thead>
							<tbody>
								@foreach($companies as $row)
								<tr>
									<td>{{ $loop->iteration }}</td> 
									<td>{{ $row->country_id }}</td>
									<td>{{ $row->name }}</td>
									<td>{{ $row->nit }}</td>
									<td>{{ $row->phone }}</td>
									<td>{{ $row->email }}</td>
									<td>{{ $row->status }}</td>
									<td width="90">
									<div class="btn-group">
										<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Acciones
										</button>
										<div class="dropdown-menu dropdown-menu-right">
											<a data-toggle="modal" 
												data-target="#updateModal" 
												class="dropdown-item" 
												wire:click="edit({{$row->id}})">
												<i class="fa fa-edit"></i> 
												Editar 
											</a>							 
											<a class="dropdown-item" 
												onclick="confirm('Confirm Delete Company id {{$row->id}}? \nDeleted Companys cannot be recovered!')||event.stopImmediatePropagation()" 
												wire:click="destroy({{$row->id}})">
												<i class="fa fa-trash"></i> 
												Borrar 
											</a>   
										</div>
									</div>
									</td>
								@endforeach
							</tbody>
						</table>						
						{{ $companies->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
