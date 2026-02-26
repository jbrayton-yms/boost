<?php

/**
 * Polyfill for Laravel\Prompts functions not available in v0.1.x.
 * These are display-only functions used by Boost's install commands.
 */

namespace Laravel\Prompts;

if (! function_exists('Laravel\Prompts\grid')) {
    /**
     * Display items in a grid layout. Falls back to a simple comma-separated list.
     */
    function grid(array $items): void
    {
        if (empty($items)) {
            return;
        }

        echo '  '.implode(', ', $items).PHP_EOL;
    }
}

if (! function_exists('Laravel\Prompts\note')) {
    /**
     * Display a note message.
     */
    function note(string $message): void
    {
        echo $message.PHP_EOL;
    }
}

if (! function_exists('Laravel\Prompts\spin')) {
    /**
     * Display a spinner while executing a callback.
     * Falls back to just executing the callback directly.
     */
    function spin(callable $callback, string $message = ''): mixed
    {
        if ($message) {
            echo $message.PHP_EOL;
        }

        return $callback();
    }
}
