<?php

require_once './Route.php';

$programs = new Route();

// $programs->post('programs', function ($data) {
//     Route::connectDB();

//     if (!isset($data['tableName'])) {
//         Route::respondError('Cannot get table data. Table name cannot be found');
//         exit;
//     }

//     $tableName = $data['tableName'];

//     if (empty($tableName)) {
//         Route::respondError('No table name provided');
//         exit;
//     }

//     // Query to get all table names
//     $tablesQuery = "SHOW TABLES";
//     $preparedStatement = Route::$connection->prepare($tablesQuery);

//     if (!$preparedStatement) {
//         throw new Exception("Database prepare failed: " . Route::$connection->error);
//     }

//     $preparedStatement->execute();
//     $queryResult = $preparedStatement->get_result();

//     $tableNames = [];

//     while ($tableRow = $queryResult->fetch_row()) {
//         $tableNames[] = $tableRow[0];
//     }

//     $preparedStatement->close();

//     // Check if the provided table name exists in the list of table names
//     if (!in_array($tableName, $tableNames)) {
//         Route::respondError('Table name does not exist');
//         exit;
//     }

//     // If the table name exists, fetch all data from the table
//     $dataQuery = "SELECT * FROM $tableName";
//     $preparedStatement = Route::$connection->prepare($dataQuery);

//     if (!$preparedStatement) {
//         throw new Exception("Database prepare failed: " . Route::$connection->error);
//     }

//     $preparedStatement->execute();
//     $queryResult = $preparedStatement->get_result();

//     $tableData = [];

//     while ($row = $queryResult->fetch_assoc()) {
//         $tableData[] = $row;
//     }

//     $preparedStatement->close();
//     Route::disconnectDB();
//     Route::respondSuccess($tableData);

//     exit;
// });

$programs->post('programs', function ($data) {
    Route::connectDB();

    if (!isset($data['tableName'])) {
        Route::respondError('Cannot get table data. Table name cannot be found');
        exit;
    }

    $tableName = $data['tableName'];

    if (empty($tableName)) {
        Route::respondError('No table name provided');
        exit;
    }

    // Query to get all table names
    $tablesQuery = "SHOW TABLES";
    $preparedStatement = Route::$connection->prepare($tablesQuery);

    if (!$preparedStatement) {
        throw new Exception("Database prepare failed: " . Route::$connection->error);
    }

    $preparedStatement->execute();
    $queryResult = $preparedStatement->get_result();

    $tableNames = [];

    while ($tableRow = $queryResult->fetch_row()) {
        $tableNames[] = $tableRow[0];
    }

    $preparedStatement->close();

    // Check if the provided table name exists in the list of table names
    if (!in_array($tableName, $tableNames)) {
        Route::respondError('Table name does not exist');
        exit;
    }

    // If the table name exists, fetch all data from the table
    $dataQuery = "SELECT * FROM $tableName";
    $preparedStatement = Route::$connection->prepare($dataQuery);

    if (!$preparedStatement) {
        throw new Exception("Database prepare failed: " . Route::$connection->error);
    }

    $preparedStatement->execute();
    $queryResult = $preparedStatement->get_result();

    $tableData = [];

    while ($row = $queryResult->fetch_assoc()) {
        $tableData[] = $row;
    }

    $preparedStatement->close();
    Route::disconnectDB();
    Route::respondSuccess($tableData);

    exit;
});