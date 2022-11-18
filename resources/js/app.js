require('./bootstrap');

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import HomeHead from "@/Components/Shared/HomeHead.vue";
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import HomeIndex from "@/Components/Shared/HomeIndex.vue";
import TextField from "@/Components/Form/TextField.vue";
import SelectOptionField from "@/Components/Form/SelectOptionField.vue";
import RequestHead from "@/Components/Shared/RequestHead.vue";
import FormButton from "@/Components/Form/FormButton.vue";
import ImageField from "@/Components/Form/ImageField.vue";
import ImageFileField from "@/Components/Form/ImageFileField.vue";
import ProverderProfileImageField from "@/Components/Form/ProverderProfileImageField.vue";
import ProfileTextField from "@/Components/Form/ProfileTextField.vue";
import ProfileSelectField from "@/Components/Form/ProfileSelectField.vue";
import SelectRequestField from "@/Components/Form/SelectRequestField.vue";
import DescriptionTextField from "@/Components/Form/DescriptionTextField.vue";
import CheckboxField from "@/Components/Form/CheckboxField.vue";
import ProviderIndex from "@/Components/Shared/ProviderIndex.vue";
import SellerHead from "@/Components/Shared/SellerHead.vue";
import SellerIndex from "@/Components/Shared/SellerIndex.vue";
import IndexHead from "@/Components/Shared/IndexHead.vue";
import RequestMenubar from "@/Components/Shared/RequestMenubar.vue";
import Requestindex from "@/Components/Shared/Requestindex.vue";
import { XIcon } from "@heroicons/vue/outline";
import { ref } from "vue";

import Alpine from 'alpinejs'
window.Alpine = Alpine
Alpine.start()

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, app, props, plugin, Maska }) {
        return createApp({ render: () => h(app, props) })
            .use(Maska)
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .component('HomeHead', HomeHead)
            .component('BreezeAuthenticatedLayout', BreezeAuthenticatedLayout)
            .component('Link', Link)
            .component('Head', Head)
            .component('DescriptionTextField', DescriptionTextField)
            .component('HomeIndex', HomeIndex)
            .component('TextField', TextField)
            .component('SelectOptionField', SelectOptionField)
            .component('RequestHead', RequestHead)
            .component('FormButton', FormButton)
            .component('ImageField', ImageField)
            .component('ImageFileField', ImageFileField)
            .component('ProverderProfileImageField', ProverderProfileImageField)
            .component('ProfileTextField', ProfileTextField)
            .component('ProfileSelectField', ProfileSelectField)
            .component('SelectRequestField', SelectRequestField)
            .component('DescriptionTextField', DescriptionTextField)
            .component('CheckboxField', CheckboxField)
            .component('ProviderIndex', ProviderIndex)
            .component('SellerHead', SellerHead)
            .component('SellerIndex', SellerIndex)
            .component('IndexHead', IndexHead)
            .component('RequestMenubar', RequestMenubar)
            .component('Requestindex', Requestindex)
            .component('XIcon', XIcon)
            .mixin({ methods: { route } })
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });
