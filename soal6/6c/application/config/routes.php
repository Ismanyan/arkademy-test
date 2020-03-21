<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
    DEFAULT URL
*/ 
$route['default_controller'] = 'controller';
$route['assets/(:any)'] = 'assets/$1';
$route['404_override'] = 'controller/page_not_found';
$route['translate_uri_dashes'] = TRUE;
$route['table'] = 'controller/table';

/*
    CUTOM URL
    =========================================
    (:num) is used to determine the relevant segment in the form of numbers
    (:any) is used to determine the relevant segments in all characters
*/ 

// Product
$route['delete/(:num)'] = 'controller/delete/$1';
$route['add'] = 'controller/add';
$route['get/edit/(:num)'] = 'controller/getEdit/$1';
$route['edit'] = 'controller/editProduct';