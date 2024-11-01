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
                "resources/js/rbac/api/apiPermission.js",
                "resources/js/rbac/api/apiRole.js",
                "resources/js/rbac/menu.js",
                "resources/js/rbac/permission.js",
                "resources/js/rbac/role.js",
                "resources/js/sao/strategy/vision-mission.js",
                "resources/css/sao/strategy/vision-mission-company.css",
                "resources/css/sao/strategy/vision-mission-unit.css",
                "resources/css/sao/strategy/vision-mission.css",
                // ========== comments ==========
                "resources/css/comment.css",
                "resources/js/comment/comment.js",
            ],
            refresh: true,
        }),
    ],
});
