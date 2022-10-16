import AppForm from '../app-components/Form/AppForm';

Vue.component('producto-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                producto:  '' ,
                tiempo:  '' ,
                precio:  '' ,
                categoria_id:  '' ,
                inventario_id:  '' ,
                
            }
        }
    }

});