import AppForm from '../app-components/Form/AppForm';

Vue.component('portofolio-form', {
    mixins: [AppForm],
    data: function () {
        return {
            form: {
                name: '',
                slug: '',
                desc: '',
                enable: false,

            },
            mediaCollections: ['portofolio_media']
        }
    }

});
