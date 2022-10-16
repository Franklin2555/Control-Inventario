import AppForm from '../app-components/Form/AppForm';

Vue.component('inventario-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                producto:  '' ,
                cantidad:  '' ,
                precio:  '' ,
                unidades:  '' ,
                costo:  '' ,
                
            }
        }
    }

});