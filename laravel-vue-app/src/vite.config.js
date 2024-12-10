import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";
import vuetify from 'vite-plugin-vuetify';

export default defineConfig({
    plugins: [
        laravel([
            "resources/css/app.css",
            "resources/js/app.ts",
        ]),
        vue(),
        vuetify()
    ],
    server: {
        host: "0.0.0.0",
        port: 5173,
        strictPort: true,
        hmr: {
            host: "localhost"
        },
        watch: {
            usePolling: true
        }
    }
});
