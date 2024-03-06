import '@formkit/addons/css/multistep';


import { plugin as FormKitPlugin , defaultConfig } from '@formkit/vue';
import { createMultiStepPlugin } from '@formkit/addons'; // Import createMultiStepPlugin
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import VueSweetalert2 from 'vue-sweetalert2';
import { createVuetify } from 'vuetify';
import * as components from 'vuetify/components';
import * as directives from 'vuetify/directives';
const vuetify = createVuetify({
  components,
  directives,
});
const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .mixin({methods: {route} })
            .use(vuetify)
            .use(FormKitPlugin, defaultConfig({
              plugins: [createMultiStepPlugin()],
          }))
            .mount(el)
    },
    progress: false,
});
