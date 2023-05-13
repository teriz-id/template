<?php

namespace Zebua\Teriz\App;

class Router
{

    private static $routes = [];

    public static function add(string $method, string $path, string $controller, string $function, array $middlewares = []): void
    {
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function,
            'middlewares' => $middlewares
        ];
    }

    public static function run(): void
    {
        $path = '/';

        if (isset($_SERVER['PATH_INFO'])) $path = $_SERVER['PATH_INFO'];

        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes as $route) {
            $pattern = "#^" . $route['path'] . "$#";
            if (preg_match($pattern, $path, $variables) && $method == $route['method']) {

                // call middleware
                foreach ($route['middlewares'] as $middleware) {
                    $instance = new $middleware;
                    $instance->before();
                }

                $function = $route['function'];
                $controller = new $route['controller'];

                array_shift($variables);
                call_user_func_array([$controller, $function], $variables);

                return;
            }
        }

        http_response_code(404);

        // require __DIR__ . '../../View/Template/main/header.php';
        // require __DIR__ . '../../View/404.php';
        // require __DIR__ . '../../View/Template/main/footer.php';
    }
}
