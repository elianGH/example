<div class="mdc-tab-bar" id="{{ $id }}" role="tablist">
    <div class="mdc-tab-scroller">
        <div class="mdc-tab-scroller__scroll-area">
            <div class="mdc-tab-scroller__scroll-content">
                @component('components.tabs.tab-indicator', ['tabs' => $tabs])@endcomponent
            </div>
        </div>
    </div>
</div>
