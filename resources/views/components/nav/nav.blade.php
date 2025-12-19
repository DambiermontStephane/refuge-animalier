<nav class="nav">
    <a href="{{ route('home') }}"><h2>{{ __('headings.title') }}</h2></a>
    <div class="flex align-middle nav-items">
        <x-nav.nav-items name="{{ __('headings.adoption') }}" icon="adoption"/>
        <x-nav.nav-items name="{{ __('headings.volunteer') }}" icon="volunteer"/>
        <x-nav.nav-items name="{{ __('headings.about') }}" icon="about"/>
        <div class="contact-button">
            <x-nav.nav-items name="{{ __('headings.contact') }}" icon="contact"/>
        </div>
    </div>
</nav>
