<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
    <label for="name" class="col-form-label text-md-right"
           :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.portofolio.columns.name') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control"
               :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}"
               id="name" name="name" placeholder="{{ trans('admin.portofolio.columns.name') }}">
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('slug'), 'has-success': fields.slug && fields.slug.valid }">
    <label for="slug" class="col-form-label text-md-right"
           :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.portofolio.columns.slug') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" disabled v-model="form.slug" @input="validate($event)" class="form-control"
               :class="{'form-control-danger': errors.has('slug'), 'form-control-success': fields.slug && fields.slug.valid}"
               id="slug" name="slug" placeholder="{{ trans('admin.portofolio.columns.slug') }}">
        <div v-if="errors.has('slug')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('slug') }}</div>
    </div>
</div>

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('desc'), 'has-success': fields.desc && fields.desc.valid }">
    <label for="desc" class="col-form-label text-md-right"
           :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.portofolio.columns.desc') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.desc" v-validate="'required'" id="desc" name="desc"></textarea>
        </div>
        <div v-if="errors.has('desc')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('desc') }}</div>
    </div>
</div>

<div class="form-check row"
     :class="{'has-danger': errors.has('enable'), 'has-success': fields.enable && fields.enable.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="enable" type="checkbox" v-model="form.enable" v-validate="''"
               data-vv-name="enable" name="enable_fake_element">
        <label class="form-check-label" for="enable">
            {{ trans('admin.portofolio.columns.enable') }}
        </label>
        <input type="hidden" name="enable" :value="form.enable">
        <div v-if="errors.has('enable')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('enable') }}
        </div>
    </div>
</div>


