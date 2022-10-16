<div class="form-group row align-items-center" :class="{'has-danger': errors.has('producto'), 'has-success': fields.producto && fields.producto.valid }">
    <label for="producto" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.producto.columns.producto') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.producto" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('producto'), 'form-control-success': fields.producto && fields.producto.valid}" id="producto" name="producto" placeholder="{{ trans('admin.producto.columns.producto') }}">
        <div v-if="errors.has('producto')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('producto') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('tiempo'), 'has-success': fields.tiempo && fields.tiempo.valid }">
    <label for="tiempo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.producto.columns.tiempo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.tiempo" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('tiempo'), 'form-control-success': fields.tiempo && fields.tiempo.valid}" id="tiempo" name="tiempo" placeholder="{{ trans('admin.producto.columns.tiempo') }}">
        <div v-if="errors.has('tiempo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('tiempo') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('precio'), 'has-success': fields.precio && fields.precio.valid }">
    <label for="precio" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.producto.columns.precio') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.precio" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('precio'), 'form-control-success': fields.precio && fields.precio.valid}" id="precio" name="precio" placeholder="{{ trans('admin.producto.columns.precio') }}">
        <div v-if="errors.has('precio')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('precio') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('categoria_id'), 'has-success': fields.categoria_id && fields.categoria_id.valid }">
    <label for="categoria_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.producto.columns.categoria_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.categoria_id" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('categoria_id'), 'form-control-success': fields.categoria_id && fields.categoria_id.valid}" id="categoria_id" name="categoria_id" placeholder="{{ trans('admin.producto.columns.categoria_id') }}">
        <div v-if="errors.has('categoria_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('categoria_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('inventario_id'), 'has-success': fields.inventario_id && fields.inventario_id.valid }">
    <label for="inventario_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.producto.columns.inventario_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.inventario_id" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('inventario_id'), 'form-control-success': fields.inventario_id && fields.inventario_id.valid}" id="inventario_id" name="inventario_id" placeholder="{{ trans('admin.producto.columns.inventario_id') }}">
        <div v-if="errors.has('inventario_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('inventario_id') }}</div>
    </div>
</div>


