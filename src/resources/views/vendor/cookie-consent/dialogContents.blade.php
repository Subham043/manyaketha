<style nonce="{{ csp_nonce() }}">

.js-cookie-consent.fixed{
    position: fixed;
    z-index: 99999999999999999999999;
}

.js-cookie-consent.bottom-0{
    bottom: 0
}

.bg-theme{
    background-color: #232828;
}

</style>


<div class="js-cookie-consent cookie-consent fixed bottom-0 inset-x-0 pb-2 bg-theme w-100">
    <div class="max-w-7xl mx-auto px-6">
        <div class="p-4 rounded-lg bg-yellow-100">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <div class="col-9 d-inline">
                    <h5 class="cookie-consent__message text-white d-inline">
                        By clicking “Allow Cookies”, you agree to the storing of cookies in your browser to enhance site navigation, analyze site usage, and provide our ad partners with information for ad personalization and measurement.
                    </h5>
                </div>
                <div class="col-auto flex-shrink-0 w-full sm:mt-0 sm:w-auto link-btn">
                    <button class="js-cookie-consent-agree cookie-consent__agree theme-btn btn-style-one style-two">
                        <b>
                            {{ trans('cookie-consent::texts.agree') }}
                        </b>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
