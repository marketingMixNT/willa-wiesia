<form wire:submit.prevent='submitForm' method="POST" action="{{ route('home.form') }}" id="contactForm"
    class='w-full flex flex-col gap-8 2xl:pr-24 mt-12'>
    @csrf
    @if ($successMessage)
        <x-form.success-message successMessage="{{ $successMessage }}" />
    @endif

    <div class="flex flex-col gap-3">

        <input wire:model.live.lazy='name' type='text' name='name' id='name' placeholder="{{__('home.contact.name')}}"
            class='w-full border-secondary border rounded-full border-dashed  px-4 py-3 outline-none focus:border-solid' />
        @error('name')
            <p class="text-red-600 text-xs ml-5">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex flex-col gap-3">

        <input wire:model.live.lazy='email' type='email' id='email' name='email' name='Adres Email'
            placeholder="{{__('home.contact.email')}}"
            class='w-full border-secondary border rounded-full border-dashed px-4 py-3 outline-none focus:border-solid' />
        @error('email')
            <p class="text-red-600 text-xs ml-5">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex flex-col gap-3">
    <textarea wire:model.live.lazy='content' name='content' id='content' cols='30' rows='6'
        class='w-full border-secondary border rounded-3xl border-dashed px-4 py-4 outline-none focus:border-solid'
        placeholder="{{__('home.contact.message')}}"></textarea>
    @error('content')
    <p class="text-red-600 text-xs ml-5">{{$message}}</p>
    @enderror
    </div>

    <button data-sitekey="{{ env('CAPTCHA_SITE_KEY') }}" data-callback='handle' data-action='submit'
        wire.loading.attr="disabled" type='submit' class='btn-submit flex gap-1 justify-center items-center'
        aria-label="Wyślij">
        <svg wire:loading wire:target="submitForm" class="animate-spin -ml-1 mr-2 h-5 w-5 text-white"
            xmlns="http://www.w3.org/2000/svg" fill="#000000" viewBox="0 0 24 24">
            <circle class="opacity-40" cx="12" cy="12" r="10" stroke="#000000" stroke-width="4"></circle>
            <path class="opacity-75" fill="#fff"
                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
            </path>
        </svg>{{__('home.contact.submit')}}
    </button>
</form>


<script src="https://www.google.com/recaptcha/api.js?render={{ env('CAPTCHA_SITE_KEY') }}"></script>
<script>
    function handle(e) {
        grecaptcha.ready(function() {
            grecaptcha.execute('{{ env('CAPTCHA_SITE_KEY') }}', {
                    action: 'submit'
                })
                .then(function(token) {
                    @this.set('captcha', token);
                });
        })
    }
</script>
