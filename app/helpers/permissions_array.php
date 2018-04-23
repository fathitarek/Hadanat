<?php

/* if change this please enter the parent in the top of permissions_settings array and the children under it for given the right style */
$GLOBALS['permissions_settings'] = array(
    /* parent */
    'users',
    /* start Sup */
    'users_add',
    'users_view',
    'users_edit',
    'users_delete',
    'users_active',
    /* End Sup */
    'profiles',
    'profiles_add',
    'profiles_edit',
    'profiles_delete',
    'profiles_active',
    'profiles_view',
    /* parent */
    'categories',
    /* start Sup */
    'categories_add',
    'categories_show',
    'categories_view',
    'categories_edit',
    'categories_delete',
    'categories_active',
    /* End Sup */


    /* parent */
    'products',
    /* start Sup */
    'products_add',
    'products_show',
    'products_view',
    'products_edit',
    'products_delete',
    'products_active',
    /* End Sup */
    'settings',
    'system',
    'profile',
    'dashboard',
);
$GLOBALS['sup_permissions'] = array(
    'users' => array('users_add', 'users_view', 'users_edit', 'users_delete', 'users_active'),
    'categories' => array('categories_add', 'categories_view', 'categories_edit', 'categories_delete', 'categories_active','categories_show'),
    'products' => array('products_add', 'products_view', 'products_edit', 'products_delete', 'products_active','products_show'),
    'profiles' => array('profiles_add', 'profiles_edit', 'profiles_delete', 'profiles_active', 'profiles_view'),
    'settings' => array('system'),
);
