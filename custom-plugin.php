  <?php 

/*

* Plugin Name: Employee Management System
* Description: This is a CRUD Employee Management System
* Plugin URI: https://example.com/custom-plugin
* Author: Sample User
* Author URI: httpls://exxample.com
* version: 1.0
* Requires at leats: 6.7.1
* Requires PHP: 7.4

*/

define("EMS_PLUGIN_PATH",plugin_dir_path (__FILE__) );

define ("EMS_PLUGIN_URL", plugin_dir_url (__FILE__) );


// Calling action hook to add menu
add_action("admin_menu","cp_add_admin_menu");


// Add menu 
function cp_add_admin_menu(){

 add_menu_page("Employee System |Employee Management System","Employee System","manage_options","employee-system", "ems_crud_system","dashicons-admin-home",23);

  
  // Sub-menus

  add_submenu_page("employee-system", "Add Employee","Add Employee","manage_options","employee-system","ems_crud_system");

   add_submenu_page("employee-system","List Employee","List Employee","manage_options", "list-employee","ems_list_employee" );

}

// Manu handle Callback
function ems_crud_system(){

    include_once(EMS_PLUGIN_PATH."pages/add-employee.php")
 ;
}


// Submenu callback function
function ems_list_employee(){

    include_once(EMS_PLUGIN_PATH."pages/list-employee.php");
   
}




?>