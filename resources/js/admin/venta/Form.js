import AppForm from '../app-components/Form/AppForm';

Vue.component('venta-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                producto:  '' ,
                cantidad:  '' ,
                precio:  '' ,
                total_venta:  '' ,
                fecha_venta:  '' ,
                producto_id:  '' ,
                
            }
        }
    }

});