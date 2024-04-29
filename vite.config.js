import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import path from 'path'; // Import path module for resolving paths

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),

    ],
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources/js/Pages'),
            'vue': 'vue/dist/vue.esm-bundler.js',
        },
    },
});
