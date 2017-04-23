# crud_framework
put the "model.php" and "connection.php" file in the root of your project
edit "connection.php" with your host name , database , database_user and password

# To Insert data
$model = new model();
$model->insert_into($connection,'table_name','data_array'); // refer insert.php in the controller folder

# To get all the data
$model = new model();
$model->get_all_data($connection,'table_name'); // refer fetch_cus.php in the controller folder

# get all data with where condition 
$model = new model();
$model->get_all_data_where($connection,'table_name','where_condition'); //refer fetch_cus_with_id.php in controller folder

# upddate data
$model = new model();
$model->update_data($connection,'table_name',array_of_data,array_of_where_condition); // refer up_cus.php in controller folder

# Delete
$model = new model();
$model->delete_where($connection,'table_name',array_of_condition); // refer del_cus.php in controller folder
