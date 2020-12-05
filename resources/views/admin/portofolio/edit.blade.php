@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.portofolio.actions.edit', ['name' => $portofolio->name]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <portofolio-form
                :action="'{{ $portofolio->resource_url }}'"
                :data="{{ $portofolio->toJson() }}"
                v-cloak
                inline-template>

                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action"
                      novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.portofolio.actions.edit', ['name' => $portofolio->name]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.portofolio.components.form-elements')
                    </div>
                    @include('brackets/admin-ui::admin.includes.media-uploader', [
'mediaCollection' => app(App\Models\Portofolio::class)->getMediaCollection('portofolio_media'),
'media' => $portofolio->getThumbs200ForCollection('portofolio_media'),
'label' => 'Image'
])

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>

                </form>

            </portofolio-form>

        </div>

    </div>

@endsection
