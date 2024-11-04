import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/pages/home.scss', 'resources/js/pages/home.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
          '~font' : path.resolve(__dirname, 'resources/fonts'),
          '~images' : path.resolve(__dirname, 'resources/images'),
        }
      }
});
