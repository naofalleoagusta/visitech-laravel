import AppForm from '../app-components/Form/AppForm';

Vue.component('contact-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                phone_number: '',
                email:  '' ,
                desc:  '' ,
                subject:  '' ,
                publish:  false ,
                
            }
        }
    }

});