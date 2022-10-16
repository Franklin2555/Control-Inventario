<div class="form-group row align-items-center" :class="{'has-danger': errors.has('producto'), 'has-success': fields.producto && fields.producto.valid }">
    <label for="producto" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.venta.columns.producto') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.producto" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('producto'), 'form-control-success': fields.producto && fields.producto.valid}" id="producto" name="producto" placeholder="{{ trans('admin.venta.columns.producto') }}">
        <div v-if="errors.has('producto')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('producto') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('cantidad'), 'has-success': fields.cantidad && fields.cantidad.valid }">
    <label for="cantidad" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.venta.columns.cantidad') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.cantidad" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('cantidad'), 'form-control-success': fields.cantidad && fields.cantidad.valid}" id="cantidad" name="cantidad" placeholder="{{ trans('admin.venta.columns.cantidad') }}">
        <div v-if="errors.has('cantidad')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('cantidad') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('precio'), 'has-success': fields.precio && fields.precio.valid }">
    <label for="precio" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.venta.columns.precio') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.precio" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('precio'), 'form-control-success': fields.precio && fields.precio.valid}" id="precio" name="precio" placeholder="{{ trans('admin.venta.columns.precio') }}">
        <div v-if="errors.has('precio')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('precio') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('total_venta'), 'has-success': fields.total_venta && fields.total_venta.valid }">
    <label for="total_venta" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.venta.columns.total_venta') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.total_venta" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('total_venta'), 'form-control-success': fields.total_venta && fields.total_venta.valid}" id="total_venta" name="total_venta" placeholder="{{ trans('admin.venta.columns.total_venta') }}">
        <div v-if="errors.has('total_venta')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('total_venta') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('fecha_venta'), 'has-success': fields.fecha_venta && fields.fecha_venta.valid }">
    <label for="fecha_venta" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.venta.columns.fecha_venta') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.fecha_venta" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('fecha_venta'), 'form-control-success': fields.fecha_venta && fields.fecha_venta.valid}" id="fecha_venta" name="fecha_venta" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('fecha_venta')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fecha_venta') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('producto_id'), 'has-success': fields.producto_id && fields.producto_id.valid }">
    <label for="producto_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.venta.columns.producto_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.producto_id" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('producto_id'), 'form-control-success': fields.producto_id && fields.producto_id.valid}" id="producto_id" name="producto_id" placeholder="{{ trans('admin.venta.columns.producto_id') }}">
        <div v-if="errors.has('producto_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('producto_id') }}</div>
    </div>
</div>


