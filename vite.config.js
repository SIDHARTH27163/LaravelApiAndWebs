import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css','resources/css/styles.css','resources/css/testimonial.css', 'resources/js/app.js' , 'resources/js/style.js' , 'resources/js/editor.js' , 'resources/js/testimonial.js' ,  'resources/js/navbar.js', 'resources/js/sidebar.js' , 'resources/css/home.css' , 'resources/css/animation.css' , 'resources/js/animation.js'],
            refresh: true,
        }),
    ],
    build: {
        rollupOptions: {
            external: ['alpinejs'],
        },
    },
});
