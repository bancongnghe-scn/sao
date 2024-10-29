import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/sass/app.scss',
                'resources/css/custom.css',
                'resources/js/app.js',
                'resources/js/layouts/sidebar.js'
            ],
            refresh: true,
        }),
    ],
});
