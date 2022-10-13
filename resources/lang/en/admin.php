<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'producto' => [
        'title' => 'Producto',

        'actions' => [
            'index' => 'Producto',
            'create' => 'New Producto',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'costo' => 'Costo',
            'precio' => 'Precio',
            'cantidad' => 'Cantidad',
            'fecha_expiracion' => 'Fecha expiracion',
            
        ],
    ],

    'categorium' => [
        'title' => 'Categoria',

        'actions' => [
            'index' => 'Categoria',
            'create' => 'New Categorium',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'nombre' => 'Nombre',
            
        ],
    ],

    'inventario' => [
        'title' => 'Inventario',

        'actions' => [
            'index' => 'Inventario',
            'create' => 'New Inventario',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'producto' => 'Producto',
            'cantidad' => 'Cantidad',
            'precio' => 'Precio',
            'unidades' => 'Unidades',
            'costo' => 'Costo',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];