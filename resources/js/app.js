import './bootstrap';
import { createApp, h } from 'vue';
import { createInertiaApp, Link } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';

import Toast, { POSITION } from 'vue-toastification';
import 'vue-toastification/dist/index.css';

// Configuración global de AJAX para incluir el token CSRF
import $ from 'jquery';  // Asegúrate de tener jQuery disponible en tu proyecto

$(document).ready(function () {
    // Configura el token CSRF para todas las solicitudes AJAX
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

createInertiaApp({
    resolve: name => resolvePageComponent(
        `./Pages/${name}.vue`,
        import.meta.glob('./Pages/**/*.vue')
    ),
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) });

        app.use(plugin);
        app.component('Link', Link);

        app.use(Toast, {
            position: POSITION.TOP_CENTER,
            timeout: 5000,
            closeOnClick: true,
            pauseOnHover: true,
            draggable: true,
        });

        app.mount(el);
    },
});
