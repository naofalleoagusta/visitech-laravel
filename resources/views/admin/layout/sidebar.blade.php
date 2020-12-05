<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.content') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/posts') }}"><i class="nav-icon icon-doc"></i> {{ trans('admin.post.title') }}</a></li>
           {{-- <li class="nav-item"><a class="nav-link" href="{{ url('admin/banners') }}"><i class="nav-icon icon-graduation"></i> {{ trans('admin.banner.title') }}</a></li> --}}
           {{-- <li class="nav-item"><a class="nav-link" href="{{ url('admin/faqs') }}"><i class="nav-icon icon-umbrella"></i> {{ trans('admin.faq.title') }}</a></li> --}}
           {{-- <li class="nav-item"><a class="nav-link" href="{{ url('admin/portofolios') }}"><i class="nav-icon icon-plane"></i> {{ trans('admin.portofolio.title') }}</a></li> --}}
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/contacts') }}"><i class="nav-icon icon-book-open"></i> {{ trans('admin.contact.title') }}</a></li>
           {{-- <li class="nav-item"><a class="nav-link" href="{{ url('admin/achievments') }}"><i class="nav-icon icon-ghost"></i> {{ trans('admin.achievment.title') }}</a></li> --}}
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/members') }}"><i class="nav-icon icon-people"></i> {{ trans('admin.member.title') }}</a></li>
           {{-- Do not delete me :) I'm used for auto-generation menu items --}}

            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-user"></i> {{ __('Manage access') }}</a></li>
            {{-- <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li> --}}
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
