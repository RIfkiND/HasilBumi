import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
// import {library} from '@fortawesome/fontawesome-free/css/all.css'
// import {FontAwesome} from '@fortawesome/fontawesome-free/js/all.js'

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/${name}.vue`]
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mixin({ methods: { route } })
            .mount(el)
    },
})
