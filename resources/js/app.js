import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import VueSweetaler2 from 'vue-sweetalert2';
import '@fortawesome/fontawesome-free/css/all.css'
import '@fortawesome/fontawesome-free/js/all.js'
// import { plugin as formkitPlugin, defaultConfig } from '@formkit/vue';
// import { createMultiStepPlugin } from '@formkit/addons';
//vuetify
import vuetify from './plugins/vuetify';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) });
        app.use(plugin);
        app.mixin({ methods: { route } });
        app.use(vuetify);
        app.use(VueSweetaler2);
        // app.use(formkitPlugin, defaultConfig({
        //     plugins: [createMultiStepPlugin()],
        // }))
        return app.mount(el);

    },
    progress: false,
});
