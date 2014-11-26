<?php
// Start the session
session_start();

// Get's and variables
// Whether or not user has logged in
if ( isset ( $_SESSION[ 'loggedIn ' ] ) ){
        $loggedIn = true;
} else { 
        $loggedIn = false; 
}
// Whether or not to export the DB
if ( isset ( $_GET[ 'export' ] ) ){
        exportDB();
}

// Function to export the current database
function exportDB(){
        //ENTER THE RELEVANT INFO BELOW
        $mysqlDatabaseName ='wp';
        $mysqlUserName ='root';
        $mysqlPassword ='';
        $mysqlHostName ='localhost';
        $mysqlExportPath ='dragonslayer.sql';

        //Export the database and output the status to the page
        $command='mysqldump --opt -h' .$mysqlHostName .' -u' .$mysqlUserName .' -p' .$mysqlPassword .' ' .$mysqlDatabaseName .' > ~/' .$mysqlExportPath;
        exec($command);
}
?>
<html>
<head>
        <title>Database Administration</title>
</head>
<body>
        <a href=""
</body>
</html>
