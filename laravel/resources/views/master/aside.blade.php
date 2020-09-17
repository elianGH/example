<aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer-main">
    <div class="mdc-drawer__header">
        <h3 class="mdc-drawer__title">Manager</h3>
        <h6 class="mdc-drawer__subtitle">{{ __('@elianyyf') }}</h6>
    </div>
    <div class="mdc-drawer__content">
        <div class="mdc-list">
            @include('include.menu.dashboard')

            <h6 class="mdc-list-group__subheader">Core</h6>

            @include('include.menu.users')

            @include('include.menu.workout')
{{--            @include('include.menu.nutrition')--}}
            @include('include.menu.anatomy')

            <h6 class="mdc-list-group__subheader">Analytics</h6>

{{--            @include('include.menu.statistic')--}}

            <h6 class="mdc-list-group__subheader">System</h6>
        </div>
    </div>
</aside>
