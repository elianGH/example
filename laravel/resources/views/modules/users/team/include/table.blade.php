<div class="table-fixed uk-width-1-1" id="team_table">
    <div class="table-fixed--head">

        <div class="table-fixed--head__row tf-cols-6">

            <div class="table-fixed--head__col"></div>

            <div class="table-fixed--head__col" data-col="team-image">
                {{ __('Image') }}
            </div>

            <div class="table-fixed--head__col" data-col="team-name">
                {{ __('Name') }}
            </div>

            <div class="table-fixed--head__col" data-col="team-nickname">
                {{ __('Nickname') }}
            </div>

            <div class="table-fixed--head__col" data-col="team-email">
                {{ __('Email') }}
            </div>

            <div class="table-fixed--head__col" data-col="team-ban">
                {{ __('Ban') }}
            </div>
        </div>

    </div>

    <div class="table-fixed--body" id="table-fixed--body">

        @foreach($team as $member)

            <div class="table-fixed--body__row">
                <div class="table-fixed--body__col">
                    <input class="uk-checkbox" type="checkbox">
                </div>

                <div class="table-fixed--body__col" data-col="team-image">
                    @if($member->file)
                        <img class="uk-preserve-width uk-border-circle" src="{{ route('files.inline', ['uuid' => $member->file->uuid]) }}" width="40" alt="">
                    @else
                        <div class="no-image"></div>
                    @endif
                </div>

                <div class="table-fixed--body__col" data-col="team-name">
                    {{ $member->name }}
                </div>

                <div class="table-fixed--body__col" data-col="team-nickname">
                    {{ $member->nickname }}
                </div>

                <div class="table-fixed--body__col" data-col="team-email">
                    {{ $member->email }}
                </div>

                <div class="table-fixed--body__col" data-col="team-ban">
                    @if($member->ban)
                        <span class="uk-badge uk-badge-danger">{{ __('banned') }}</span>
                    @endif
                </div>
            </div>

        @endforeach
    </div>

    <div class="table-fixed--footer" id="table-fixed--footer">
        <div class="uk-grid uk-flex uk-align-center">
            <div class="uk-width-1-3">asd</div>
            <div class="uk-width-1-3">asd</div>
            <div class="uk-width-1-3">asd</div>
        </div>
    </div>
</div>


