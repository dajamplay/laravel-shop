import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import path from 'path';

export default defineConfig({
    server: {
        hmr: {
            host: 'localhost',

        },
        port: 3000
    },
    plugins: [
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false
                }
            }
        }),
        laravel({
            input: [
                'resources/css/app.css',
                'resources/scss/app.scss',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            // '@': path.resolve(__dirname, './resources/js/src'),
            // '@assets': path.resolve(__dirname, './resources/js/src/assets'),
            // '@components': path.resolve(__dirname, './resources/js/src/components'),
        }
    },
    css: {
        preprocessorOptions: {
            scss: {
                additionalData: `@import "./resources/js/src/assets/scss/index.scss";`
            }
        }
    },
});
