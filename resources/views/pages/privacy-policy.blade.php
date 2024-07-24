<x-layouts.app title="{{__('home.meta_title')}}"
    description="{{__('home.meta_desc')}}">

<x-slot:header>

<h1
class='text-5xl sm:text-6xl text-center font-normal text-white px-6 absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2'>
{{__('privacy-policy.main-title-first')}} <br>
<span class='pt-12 font-extralight ml-3'>{{__('privacy-policy.main-title-second')}} </span>
</h1>

</x-slot:header>



    <x-slot:main >

    <article class="max-w-screen-xl mx-4 sm:mx-12 lg:mx-6 xl:mx-auto space-y-12 py-20 prose">
        <h2 style="text-align:center">{{ __('privacy-policy.title') }}</h2>
        <p>{{ __('privacy-policy.description') }}</p>
        <p>{{ __('privacy-policy.part-of-terms') }}</p>
        <h2 style="text-align:center">{{ __('privacy-policy.definitions.title') }}</h2>
        <ul>
            <li>
                <p>{{ __('privacy-policy.definitions.service') }}</p>
            </li>
            <li>
                <p>{{ __('privacy-policy.definitions.external-service') }}</p>
            </li>
            <li>
                <p>{{ __('privacy-policy.definitions.administrator') }}</p>
            </li>
            <li>
                <p>{{ __('privacy-policy.definitions.user') }}</p>
            </li>
            <li>
                <p>{{ __('privacy-policy.definitions.device') }}</p>
            </li>
            <li>
                <p>{{ __('privacy-policy.definitions.cookies') }}</p>
            </li>
            <li>
                <p>{{ __('privacy-policy.definitions.rodo') }}</p>
            </li>
            <li>
                <p>{{ __('privacy-policy.definitions.personal-data') }}</p>
            </li>
            <li>
                <p>{{ __('privacy-policy.definitions.processing') }}</p>
            </li>
            <li>
                <p>{{ __('privacy-policy.definitions.processing-restriction') }}</p>
            </li>
            <li>
                <p>{{ __('privacy-policy.definitions.profiling') }}</p>
            </li>
            <li>
                <p>{{ __('privacy-policy.definitions.consent') }}</p>
            </li>
            <li>
                <p>{{ __('privacy-policy.definitions.data-breach') }}</p>
            </li>
            <li>
                <p>{{ __('privacy-policy.definitions.pseudonymization') }}</p>
            </li>
            <li>
                <p>{{ __('privacy-policy.definitions.anonymization') }}</p>
            </li>
        </ul>
        <h2 style="text-align:center">{{ __('privacy-policy.data-protection-officer.title') }}</h2>
        <p>{{ __('privacy-policy.data-protection-officer.description') }}</p>
        <h2 style="text-align:center">{{ __('privacy-policy.cookie-types.title') }}</h2>
        <ul>
            <li>
                <p>{{ __('privacy-policy.cookie-types.internal') }}</p>
            </li>
            <li>
                <p>{{ __('privacy-policy.cookie-types.external') }}</p>
            </li>
            <li>
                <p>{{ __('privacy-policy.cookie-types.session') }}</p>
            </li>
            <li>
                <p>{{ __('privacy-policy.cookie-types.persistent') }}</p>
            </li>
        </ul>
        <h2 style="text-align:center">{{ __('privacy-policy.data-storage-security.title') }}</h2>
        <ul>
            <li>
                <p>{{ __('privacy-policy.data-storage-security.mechanisms') }}</p>
            </li>
            <li>
                <p>{{ __('privacy-policy.data-storage-security.internal-cookies') }}</p>
            </li>
            <li>
                <p>{{ __('privacy-policy.data-storage-security.external-cookies') }}</p>
            </li>
            <li>
                <p>{{ __('privacy-policy.data-storage-security.cookie-control') }}</p>
                <ul>
                    <li>
                        <p>{{ __('privacy-policy.data-storage-security.user-controls.change-settings') }}</p>
                    </li>
                    <li>
                        <p>{{ __('privacy-policy.data-storage-security.user-controls.disable-cookies') }}</p>
                    </li>
                    <li>
                        <p>{{ __('privacy-policy.data-storage-security.user-controls.delete-cookies') }}</p>
                    </li>
                </ul>
            </li>
            <li>
                <p>{{ __('privacy-policy.data-storage-security.user-risks') }}</p>
                <p>{{ __('privacy-policy.data-storage-security.risks-description') }}</p>
            </li>
            <li>
                <p>{{ __('privacy-policy.data-storage-security.personal-data-storage') }}</p>
                <p>{{ __('privacy-policy.data-storage-security.personal-data-storage-description') }}</p>
            </li>
        </ul>
        <h2 style="text-align:center">{{ __('privacy-policy.cookies-purposes.title') }}</h2>
        <ul id="cele">
            <li>{{ __('privacy-policy.cookies-purposes.purposes.improve-access') }}</li>
            <li>{{ __('privacy-policy.cookies-purposes.purposes.personalization') }}</li>
            <li>{{ __('privacy-policy.cookies-purposes.purposes.statistics') }}</li>
        </ul>
        <h2 style="text-align:center">{{ __('privacy-policy.personal-data-processing-purposes.title') }}</h2>
        <p>{{ __('privacy-policy.personal-data-processing-purposes.description') }}</p>
        <ul>
            <li>{{ __('privacy-policy.personal-data-processing-purposes.purposes.electronic-services') }}</li>
            <li>{{ __('privacy-policy.personal-data-processing-purposes.purposes.communication') }}</li>
            <li>{{ __('privacy-policy.personal-data-processing-purposes.purposes.legal-interests') }}</li>
        </ul>
        <p>{{ __('privacy-policy.personal-data-processing-purposes.anonymous-data.description') }}</p>
        <ul>
            <li>{{ __('privacy-policy.personal-data-processing-purposes.anonymous-data.statistics') }}</li>
            <li>{{ __('privacy-policy.personal-data-processing-purposes.anonymous-data.legal-interests') }}</li>
        </ul>
        <h2 style="text-align:center">{{ __('privacy-policy.external-services-cookies.title') }}</h2>
        <p id="zewinfo">{{ __('privacy-policy.external-services-cookies.description') }}</p>
        <ul id="zewnetrzne">
            <li><strong>{{ __('privacy-policy.external-services-cookies.partners.statistics.google-analytics') }}</strong></li>
        </ul>
        <p>{{ __('privacy-policy.external-services-cookies.third-party-services') }}</p>
        <h2 style="text-align:center">{{ __('privacy-policy.data-types.title') }}</h2>
        <p>{{ __('privacy-policy.data-types.description') }}</p>
        <p><strong>{{ __('privacy-policy.data-types.anonymous-data.description') }}</strong></p>
        <ul>
            <li>{{ __('privacy-policy.data-types.anonymous-data.data.ip-address') }}</li>
            <li>{{ __('privacy-policy.data-types.anonymous-data.data.browser-type') }}</li>
            <li>{{ __('privacy-policy.data-types.anonymous-data.data.screen-resolution') }}</li>
            <li>{{ __('privacy-policy.data-types.anonymous-data.data.approximate-location') }}</li>
            <li>{{ __('privacy-policy.data-types.anonymous-data.data.visited-subpages') }}</li>
            <li>{{ __('privacy-policy.data-types.anonymous-data.data.time-on-subpage') }}</li>
            <li>{{ __('privacy-policy.data-types.anonymous-data.data.operating-system') }}</li>
            <li>{{ __('privacy-policy.data-types.anonymous-data.data.previous-subpage') }}</li>
            <li>{{ __('privacy-policy.data-types.anonymous-data.data.referring-page') }}</li>
            <li>{{ __('privacy-policy.data-types.anonymous-data.data.browser-language') }}</li>
            <li>{{ __('privacy-policy.data-types.anonymous-data.data.connection-speed') }}</li>
            <li>{{ __('privacy-policy.data-types.anonymous-data.data.internet-service-provider') }}</li>
        </ul>
        <p><strong>{{ __('privacy-policy.data-types.registration-data.description') }}</strong></p>
        <ul>
            <li>{{ __('privacy-policy.data-types.registration-data.data.email-address') }}</li>
        </ul>
        <p><strong>{{ __('privacy-policy.data-types.newsletter-data.description') }}</strong></p>
        <ul>
            <li>{{ __('privacy-policy.data-types.newsletter-data.data.email-address') }}</li>
        </ul>
        <p>{{ __('privacy-policy.data-types.storage-description') }}</p>
        <h2 style="text-align:center">{{ __('privacy-policy.third-party-access.title') }}</h2>
        <p>{{ __('privacy-policy.third-party-access.description') }}</p>
        <ul></ul>
        <h2 style="text-align:center">{{ __('privacy-policy.personal-data-processing.title') }}</h2>
        <p><strong>{{ __('privacy-policy.personal-data-processing.voluntary-data.description') }}</strong></p>
        <ul>
            <li>{{ __('privacy-policy.personal-data-processing.voluntary-data.data.not-transferred-outside-eu') }}</li>
            <li>{{ __('privacy-policy.personal-data-processing.voluntary-data.data.no-automated-decision') }}</li>
            <li>{{ __('privacy-policy.personal-data-processing.voluntary-data.data.not-sold') }}</li>
        </ul>
        <p><strong>{{ __('privacy-policy.personal-data-processing.anonymous-data.description') }}</strong></p>
        <ul>
            <li>{{ __('privacy-policy.personal-data-processing.anonymous-data.data.transferred-outside-eu') }}</li>
            <li>{{ __('privacy-policy.personal-data-processing.anonymous-data.data.automated-decision') }}</li>
            <li>{{ __('privacy-policy.personal-data-processing.anonymous-data.data.not-sold') }}</li>
        </ul>
        <h2 style="text-align:center">{{ __('privacy-policy.legal-basis.title') }}</h2>
        <p>{{ __('privacy-policy.legal-basis.description') }}</p>
        <ul>
            <li>{{ __('privacy-policy.legal-basis.laws.gdpr.title') }}
                <ul>
                    <li>{{ __('privacy-policy.legal-basis.laws.gdpr.articles.art6-1a') }}</li>
                    <li>{{ __('privacy-policy.legal-basis.laws.gdpr.articles.art6-1b') }}</li>
                    <li>{{ __('privacy-policy.legal-basis.laws.gdpr.articles.art6-1f') }}</li>
                </ul>
            </li>
            <li>{{ __('privacy-policy.legal-basis.laws.polish-laws.data-protection-act') }}</li>
            <li>{{ __('privacy-policy.legal-basis.laws.polish-laws.telecommunications-law') }}</li>
            <li>{{ __('privacy-policy.legal-basis.laws.polish-laws.copyright-law') }}</li>
        </ul>
        <h2 style="text-align:center">{{ __('privacy-policy.data-retention.title') }}</h2>
        <p><strong>{{ __('privacy-policy.data-retention.voluntary-data.description') }}</strong></p>
        <p>{{ __('privacy-policy.data-retention.voluntary-data.retention') }}</p>
        <p>{{ __('privacy-policy.data-retention.voluntary-data.exception') }}</p>
        <p><strong>{{ __('privacy-policy.data-retention.anonymous-data') }}</strong></p>
        <h2 style="text-align:center">{{ __('privacy-policy.user-rights.title') }}</h2>
        <p>{{ __('privacy-policy.user-rights.description') }}</p>
        <ul>
            <li>{{ __('privacy-policy.user-rights.rights.access') }}</li>
            <li>{{ __('privacy-policy.user-rights.rights.rectification') }}</li>
            <li>{{ __('privacy-policy.user-rights.rights.erasure') }}</li>
            <li>{{ __('privacy-policy.user-rights.rights.restriction') }}</li>
            <li>{{ __('privacy-policy.user-rights.rights.data-portability') }}</li>
            <li>{{ __('privacy-policy.user-rights.rights.objection') }}</li>
            <li>{{ __('privacy-policy.user-rights.rights.complaint') }}</li>
        </ul>
        <h2 style="text-align:center">{{ __('privacy-policy.contact.title') }}</h2>
        <p>{{ __('privacy-policy.contact.description') }}</p>
        <ul>
            <li>{{ __('privacy-policy.contact.methods.email') }}</li>
            <li>{{ __('privacy-policy.contact.methods.phone') }}</li>
            <li>{{ __('privacy-policy.contact.methods.contact-form') }}</li>
        </ul>
        <h2 style="text-align:center">{{ __('privacy-policy.service-requirements.title') }}</h2>
        <ul>
            <li>
                <p>{{ __('privacy-policy.service-requirements.description.cookie-restriction') }}</p>
            </li>
            <li>
                <p>{{ __('privacy-policy.service-requirements.description.liability') }}</p>
            </li>
        </ul>
        <h2 style="text-align:center">{{ __('privacy-policy.external-links.title') }}</h2>
        <p>{{ __('privacy-policy.external-links.description') }}</p>
        <h2 style="text-align:center">{{ __('privacy-policy.privacy-policy-changes.title') }}</h2>
        <ul>
            <li>
                <p>{{ __('privacy-policy.privacy-policy-changes.description.general') }}</p>
            </li>
            <li>
                <p>{{ __('privacy-policy.privacy-policy-changes.description.personal-data') }}</p>
            </li>
            <li>
                <p>{{ __('privacy-policy.privacy-policy-changes.description.publication') }}</p>
            </li>
            <li>
                <p>{{ __('privacy-policy.privacy-policy-changes.description.effective-date') }}</p>
            </li>
        </ul>
    </article>
    
    </x-slot:main>


</x-layouts.app>
