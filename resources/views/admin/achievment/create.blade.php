@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.achievment.actions.create'))

@section('body')

    <div class="container-xl">

        <div class="card">

            <achievment-form
                :action="'{{ url('admin/achievments') }}'"
                v-cloak
                inline-template>

                <form class="form-horizontal form-create" method="post" @submit.prevent="onSubmit" :action="action"
                      novalidate>

                    <div class="card-header">
                        <i class="fa fa-plus"></i> {{ trans('admin.achievment.actions.create') }}
                    </div>

                    <div class="card-body">
                        @include('admin.achievment.components.form-elements')
                    </div>
                    @include('brackets/admin-ui::admin.includes.media-uploader', [
    'mediaCollection' => app(App\Models\Achievment::class)->getMediaCollection('achievment_media'),
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
