<?php
declare(strict_types=1);

namespace app\core;

final class Autoload {

    public static function register(): void {

        spl_autoload_register(callback: function (string $class): void {

            $prefix = 'App\\';
            $len = strlen(string: $prefix);

            if (strncmp(string1: $class, string2: $prefix, length: $len) !== 0) {
                return;
            }

            $relative = substr(string: $class, offset: $len);

            $file = __DIR__ . '/../' . str_replace(
                search: '\\',
                replace: '/',
                subject: $relative
            ) . '.php';

            if (is_file(filename: $file)) {
                require $file;
            }

        });
    }
}
?>