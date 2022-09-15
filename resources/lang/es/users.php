<?php

return [
    'users_title' => 'Usuarios',
    'user' => 'Usuario',
    'newuser' => 'Nuevo Usuario',
    'edituser' => 'Editar Usuario',
    'users_basic_information' => 'Información general',
    'active' => 'Activo',
    'inactive' => 'Inactivo',
    'home' => 'Inicio',

    //
    'filter' => 'Filtro',
    'search' => 'Buscar',

    'actions' => 'Acciones',
    'edit' => 'Editar',
    'disable' => 'Desactivar',
    'delete' => 'Borrar',
    
    
    'created_at' => 'Creado',
    'password_current' => 'Ingrese la clave Actual',
    'insert_password' => 'Ingrese la clave',
    'insert_password_confirm' => 'Confirme la clave',
    'password_confirm_error' => 'Por favor confirme la clave correctamente.',
    'password_current_error' => 'Su clave actual no coincide con la clave que proporcionó. Inténtalo de nuevo.',
    'password_current_different' => 'La nueva clave no puede ser la misma que su clave actual. Por favor, elija una clave diferente.',
    'password_updated_ok' => 'Clave del Usuario actualizada correctamente.',
    
    // create
    'id' => 'ID',
    'doc_type' => 'Tipo documento',
    'document' => 'Número documento',
    'doc_exp_date' => 'Fecha de Expedición',
    'birth_date' => 'Fecha nacimiento',
    'email' => 'Email',
    'phone' => 'Teléfono',
    'cellphone' => 'Celular',
    'country' => 'Pais',
    'state' => 'Estado',
    'city' => 'Ciudad',
    'address' => 'Dirección',
    'name' => 'Nombres',
    'lastname' => 'Apellidos',
    'email' => 'Correo',
    'status' => 'Estado del usuario',
    'rols' => 'Rols',
    'role' => 'Rol',
    'type' => 'Tipo',
    'photo' => 'Foto',

    'register' => 'Registrarse',
    'update' => 'Actualizar',
    'created_ok' => 'Usuario creado correctamente.',
    'updated_ok' => 'Usuario actualizado correctamente.',
    'deleted_ok' => 'Usuario eliminado correctamente.',
    'users_duplicated' => 'Número de documento duplicado, por favor actualizar',

    // request userRequest 
	'doc_type_id_required' => 'El campo tipo de documento es requerido',
	'document_required' => 'El campo número de documento es requerido',
	'document_min' => 'El campo número de documento debe ser de minimo 5 dígitos',
    'document_max' => 'El campo número de documento debe ser de máximo 12 dígitos',
	'document_unique' => 'Documento Duplicado, por favor actualice',
	'birthdate_required' => 'El campo fecha nacimiento es requerido',
    'birthdate_date' => 'No es una fecha valida',
    'birth_date_incorrect' => 'La fecha de nacimiento es incorrecta',
	'name_required' => 'El campo nombre es requerido',
	'name_alpha_spaces' => 'El campo nombre debe contener únicamente letras',
    'lastname_required' => 'El campo apellido es requerido',
	'lastname_alpha_spaces' => 'El campo apellido debe contener únicamente letras',
	'email_required' => 'El campo email es requerido',
	'email_email' => 'Ingrese un email válido',
	'email_unique' => 'El email ingresado ya esta registrado',
	'cellphone_required' => 'El campo Teléfono es requerido',
	'cellphone_unique' => 'El teléfono ya esta registrado',
	'cellphone_min' => 'El teléfono debe ser mayor a 5 dígitos',
	'cellphone_max' => 'El teléfono no debe ser mayor a 12 dígitos',
	'country_id_required' => 'El campo País es requerido',
	'country_id_exists' => 'El País debe ser valido',
	'state_id_required' => 'El campo Estado es requerido',
	'state_id_exists' => 'El Estado debe ser valido',
	'city_id_required' => 'El campo Ciudad es requerido',
	'city_id_exists' => 'La ciudad debe ser valida',
    'address_required' => 'El campo Dirección es requerido',
    
    'password_required' => 'El campo clave es requerido',
    'password_confirmed' => 'Confirme la clave correctamente',
    'password_confirmation_required' => 'El campo Confirme la clave es requerido'
    

];
