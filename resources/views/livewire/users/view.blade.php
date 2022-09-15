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
							Nuevo Usuario
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.users.create')
						@include('livewire.users.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Company Id</th>
								<th>Document</th>
								<th>Name</th>
								<th>Lastname</th>
								<th>Phone</th>
								<th>Addres</th>
								<th>Email</th>
								<th>Username</th>
								<th>Token</th>
								<th>Role Id</th>
								<th>Login</th>
								<th>Status</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@foreach($users as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->company_id }}</td>
								<td>{{ $row->document }}</td>
								<td>{{ $row->name }}</td>
								<td>{{ $row->lastname }}</td>
								<td>{{ $row->phone }}</td>
								<td>{{ $row->addres }}</td>
								<td>{{ $row->email }}</td>
								<td>{{ $row->username }}</td>
								<td>{{ $row->token }}</td>
								<td>{{ $row->role_id }}</td>
								<td>{{ $row->login }}</td>
								<td>{{ $row->status }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Actions
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a>							 
									<a class="dropdown-item" onclick="confirm('Confirm Delete User id {{$row->id}}? \nDeleted Users cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $users->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
