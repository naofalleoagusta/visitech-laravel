@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.post.actions.edit', ['name' => $post->title]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <post-form
                :action="'{{ $post->resource_url }}'"
                :data="{{ $post->toJson() }}"
                v-cloak
                inline-template>

                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action"
                      novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.post.actions.edit', ['name' => $post->title]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.post.components.form-elements')
                    </div>
                    @include('brackets/admin-ui::admin.includes.media-uploader', [
'mediaCollection' => app(App\Models\Post::class)->getMediaCollection('gallery'),
'media' => $post->getThumbs200ForCollection('gallery'),
'label' => 'Cover Image'
])


                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>

                </form>

            </post-form>

        </div>

    </div>

@endsection
