<?php
//data source
define("DATASOURCE_MEMORY","MEMORY");
define("DATASOURCE_JSON","JSON");
define("DATASOURCE_CSV","CSV");
define("DATASOURCE_MYSQL","MYSQL");
//domain
define("user_type_USER", "user_type.USER");
define("user_type_ADMIN", "user_type.ADMIN");
define("user_FIRST_NAME","user.FIRST_NAME");
define("user_LAST_NAME","user.LAST_NAME");
define("user_EMAIL","user.EMAIL");
define("user_PASSWORD","user.PASSWORD");
define("user_SALT","user.SALT");
define("user_TYPE","user.TYPE");
define("user_ENABLED","user.ENABLED");
define("todo_ID","id");
define("todo_DESCRIPTION","desc");
define("todo_DATE","date");
define("todo_STATUS","status");

define("todo_status_NOT_STARTED","Not Started");
define("todo_status_STARTED","Started");
define("todo_status_MIDWAY","Midway");
define("todo_status_COMPLETE","Complete");

define("todo_format_DATE","m-d-Y");
//Application paths


define("APPLICATION_NAME","todo");
define("APPLICATION_ROOT", "http://" . $_SERVER["SERVER_NAME"] . ":8888/" . APPLICATION_NAME);
define("CSS", APPLICATION_ROOT . "/resources/css");
define("JS", APPLICATION_ROOT . "/resources/js");
define("CONTROLLER", APPLICATION_ROOT . "/controller");
define("VIEWS", APPLICATION_ROOT . "/views");

define("CURRENT_USER","CURRENT_USER");
?>