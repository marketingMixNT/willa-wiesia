<x-layouts.app title="{{ __('home.meta_title') }}" description="{{ __('home.meta_desc') }}">

    <x-slot:header>

        <h1
            class='text-5xl sm:text-6xl text-center font-normal text-white px-6 absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2'>
            {{ __('regulations.main-title') }} <br>
        </h1>

    </x-slot:header>

    <x-slot:main>

        <article class="max-w-screen-xl mx-4 sm:mx-12 lg:mx-6 xl:mx-auto space-y-12 py-20 prose">
            <h2>{{ __('regulations.title') }}</h2>
            <p>
                {{ __('regulations.intro') }}
            </p>

            <h2>{{ __('regulations.subtitle') }}</h2>
            <ol>
                <li>{{ __('regulations.rules.rule1') }}</li>
                <li>{{ __('regulations.rules.rule2') }}</li>
                <li>{{ __('regulations.rules.rule3') }}</li>
                <li>{{ __('regulations.rules.rule4') }}</li>
                <li>{{ __('regulations.rules.rule5') }}</li>
                <li>{{ __('regulations.rules.rule6') }}</li>
                <li>{{ __('regulations.rules.rule7') }}</li>
                <li>{{ __('regulations.rules.rule8') }}</li>
                <li>{{ __('regulations.rules.rule9') }}</li>
                <li>{{ __('regulations.rules.rule10') }}</li>
                <li>{{ __('regulations.rules.rule11') }}</li>
                <li>{{ __('regulations.rules.rule12') }}</li>
                <li>{{ __('regulations.rules.rule13') }}</li>
                <li>{{ __('regulations.rules.rule14') }}</li>
                <li>{{ __('regulations.rules.rule15') }}</li>
                <li>{{ __('regulations.rules.rule16') }}</li>
                <li>{{ __('regulations.rules.rule17') }}</li>
                <li>{{ __('regulations.rules.rule18') }}</li>
                <li>{{ __('regulations.rules.rule19') }}</li>
                <li>{{ __('regulations.rules.rule20') }}</li>
            </ol>
        </article>
    </x-slot:main>


</x-layouts.app>
