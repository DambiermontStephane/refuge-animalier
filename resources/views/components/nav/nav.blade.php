<nav>
    <a href="{{ route('home') }}"><h2>{{ __('headings.title') }}</h2></a>
    <x-nav.nav-items name="{{ __('headings.adoption') }}" icon="adoption"/>
    <x-nav.nav-items name="{{ __('headings.volunteer') }}" icon="volunteer"/>
    <x-nav.nav-items name="{{ __('headings.about') }}" icon="about"/>
    <x-nav.nav-items name="{{ __('headings.contact') }}" icon="contact"/>
</nav>
