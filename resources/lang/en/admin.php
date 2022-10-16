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

    'categorium' => [
        'title' => 'Categoria',

        'actions' => [
            'index' => 'Categoria',
            'create' => 'New Categorium',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'categoria' => 'Categoria',
            
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

    'producto' => [
        'title' => 'Producto',

        'actions' => [
            'index' => 'Producto',
            'create' => 'New Producto',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'producto' => 'Producto',
            'tiempo' => 'Tiempo',
            'precio' => 'Precio',
            'categoria_id' => 'Categoria',
            'inventario_id' => 'Inventario',
            'ventas_id' => 'Ventas',
            
        ],
    ],

    'venta' => [
        'title' => 'Ventas',

        'actions' => [
            'index' => 'Ventas',
            'create' => 'New Venta',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'producto' => 'Producto',
            'cantidad' => 'Cantidad',
            'precio' => 'Precio',
            'total_venta' => 'Total venta',
            'fecha_venta' => 'Fecha venta',
            
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
            'categoria' => 'Categoria',
            
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

    'producto' => [
        'title' => 'Producto',

        'actions' => [
            'index' => 'Producto',
            'create' => 'New Producto',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'producto' => 'Producto',
            'tiempo' => 'Tiempo',
            'precio' => 'Precio',
            'categoria_id' => 'Categoria',
            'inventario_id' => 'Inventario',
            
        ],
    ],

    'venta' => [
        'title' => 'Ventas',

        'actions' => [
            'index' => 'Ventas',
            'create' => 'New Venta',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'producto' => 'Producto',
            'cantidad' => 'Cantidad',
            'precio' => 'Precio',
            'total_venta' => 'Total venta',
            'fecha_venta' => 'Fecha venta',
            'producto_id' => 'Producto',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];