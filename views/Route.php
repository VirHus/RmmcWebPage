<?php

class Route {
    protected static $routes = [];
    public static $connection;
    public static $databaseName;

    public static function connectDB() {
        require 'dbcon.php';
        self::$connection = $connection;
        self::$databaseName = $database;

        if (self::$connection -> connect_error) {
            die("Connection failed: " . self::$connection -> connect_error);
        }
    }

    public static function disconnectDB() {
        try {
            if (self::$connection && self::$connection -> ping()) {
                self::$connection -> close();
            }
        } catch (Exception $error) {
            // Handle any errors or log them as needed
            error_log('Error disconnecting from database. One reason is you mightve closed the connection in a route: ' . $error -> getMessage());
        }
    }

    public static function echoJSON($data) {
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    public static function respondSuccess($message) {
        self::echoJSON(['status' => 'success', 'message' => $message]);
    }

    public static function respondError($message) {
        self::echoJSON(['status' => 'error', 'message' => $message]);
    }

    public function get($path, $callback) {
        self::$routes['GET'][$path] = $callback;
    }

    public function post($path, $callback) {
        self::$routes['POST'][$path] = $callback;
    }

    public static function handleRequest() {
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        // Get the last segment of the path
        $path = basename($path);

        $routeExist = self::$routes[$requestMethod][$path] ?? null;

        if ($routeExist) {
            $data = ($requestMethod === 'POST') ? json_decode(file_get_contents('php://input'), true) : null;
            call_user_func($routeExist, $data);
        } else {
            // Respond with an error message and the list of routes
            self::respondError("Route $path not found. check your link");
        }
    }
}
