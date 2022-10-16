<div class="form-group row align-items-center" :class="{'has-danger': errors.has('producto'), 'has-success': fields.producto && fields.producto.valid }">
    <label for="producto" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.inventario.columns.producto') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.producto" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('producto'), 'form-control-success': fields.producto && fields.producto.valid}" id="producto" name="producto" placeholder="{{ trans('admin.inventario.columns.producto') }}">
        <div v-if="errors.has('producto')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('producto') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('cantidad'), 'has-success': fields.cantidad && fields.cantidad.valid }">
    <label for="cantidad" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.inventario.columns.cantidad') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.cantidad" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('cantidad'), 'form-control-success': fields.cantidad && fields.cantidad.valid}" id="cantidad" name="cantidad" placeholder="{{ trans('admin.inventario.columns.cantidad') }}">
        <div v-if="errors.has('cantidad')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('cantidad') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('precio'), 'has-success': fields.precio && fields.precio.valid }">
    <label for="precio" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.inventario.columns.precio') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.precio" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('precio'), 'form-control-success': fields.precio && fields.precio.valid}" id="precio" name="precio" placeholder="{{ trans('admin.inventario.columns.precio') }}">
        <div v-if="errors.has('precio')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('precio') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('unidades'), 'has-success': fields.unidades && fields.unidades.valid }">
    <label for="unidades" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.inventario.columns.unidades') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.unidades" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('unidades'), 'form-control-success': fields.unidades && fields.unidades.valid}" id="unidades" name="unidades" placeholder="{{ trans('admin.inventario.columns.unidades') }}">
        <div v-if="errors.has('unidades')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('unidades') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('costo'), 'has-success': fields.costo && fields.costo.valid }">
    <label for="costo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.inventario.columns.costo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.costo" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('costo'), 'form-control-success': fields.costo && fields.costo.valid}" id="costo" name="costo" placeholder="{{ trans('admin.inventario.columns.costo') }}">
        <div v-if="errors.has('costo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('costo') }}</div>
    </div>
</div>


