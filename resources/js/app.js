import "./bootstrap"
import "../css/app.css"
import { createPinia } from 'pinia'
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import VueSweetaler2 from 'vue-sweetalert2';
import CKEditor from '@ckeditor/ckeditor5-vue';
//vuetify
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
import '@fortawesome/fontawesome-free/css/all.css'
import '@fortawesome/fontawesome-free/js/all.js'
import ElementPlus from 'element-plus'
import 'element-plus/dist/index.css'
import { useDarkModeStore } from '~/stores/darkMode.js'

const vuetify = createVuetify({
    components,
    directives,
})
const pinia = createPinia()
const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Hasil Bumi';

createInertiaApp({
    title: (title) => `${title} ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) });
        app.use(plugin);
        app.mixin({ methods: { route } });
        app.use(vuetify);
        app.use(pinia);
        app.use(CKEditor);
        app.use(ElementPlus);
        app.use(VueSweetaler2)
        return app.mount(el);

    },
    progress: true,
}); 
const darkModeStore = useDarkModeStore(pinia)

if (
   (!localStorage['darkMode'] && window.matchMedia('(prefers-color-scheme: dark)').matches) ||
   localStorage['darkMode'] === '1'
 ) {
   darkModeStore.set(true)
}
