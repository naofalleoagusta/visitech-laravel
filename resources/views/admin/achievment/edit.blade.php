@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.achievment.actions.edit', ['name' => $achievment->name]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <achievment-form
                :action="'{{ $achievment->resource_url }}'"
                :data="{{ $achievment->toJson() }}"
                v-cloak
                inline-template>

                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action"
                      novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.achievment.actions.edit', ['name' => $achievment->name]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.achievment.components.form-elements')
                    </div>
                    @include('brackets/admin-ui::admin.includes.media-uploader', [
'mediaCollection' => app(App\Models\Achievment::class)->getMediaCollection('achievment_media'),
'media' => $achievment->getThumbs200ForCollection('achievment_media'),
'label' => 'Image'
])


                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>

                </form>

            </achievment-form>

        </div>

    </div>

@endsection
