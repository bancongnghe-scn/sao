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
                'resources/js/layouts/sidebar.js',
                "resources/css/sao/common.css",
                "resources/css/sao/strategy/build.css",
                "resources/js/sao/strategy/build.js",
                "resources/sass/training.scss",
                "resources/js/rbac/api/apiMenu.js",

                // ========== comments ==========
                "resources/css/comment.css",
                "resources/js/comment/comment.js",
            ],
            refresh: true,
        }),
    ],
});
