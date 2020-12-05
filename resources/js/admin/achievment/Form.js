import AppForm from '../app-components/Form/AppForm';

Vue.component('achievment-form', {
    mixins: [AppForm],
    data: function () {
        return {
            form: {
                name: '',
                slug: '',
                desc: '',
                enabled: false,

            },
            mediaCollections: ['achievment_media']
        }
    }

});
