import { defineConfig } from 'vite';

export default defineConfig({
    plugins: [
        // Utilisation d'import dynamique pour charger le plugin Laravel Vite
        import('laravel-vite-plugin').then((laravelVitePlugin) => {
            return laravelVitePlugin.default({
                input: [
                    'resources/sass/app.scss',
                    'resources/js/app.js',
                ],
                refresh: true,
            });
        }),
    ],
});
