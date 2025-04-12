<form action="{{ route('become-partner-save') }}" method="POST" id="affiliate-form">
    <div class="row position-relative">
        <h2>Become Partner</h2>
        @csrf
        <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="md-form mb-3">
                <label for="name" class="form-label">Full name <span class="clr-red font-200">*</span></label>
                <input type="text" id="name" name="name" placeholder="" class="form-control">
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="md-form mb-3">
                <label for="email" class="form-label">Work email <span class="clr-red font-200">*</span></label>
                <input type="email" id="email" name="email" placeholder="" class="form-control">
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="md-form mb-3">
                <label for="password" class="form-label">Password <span class="clr-red font-200">*</span></label>
                <input type="password" id="password" name="password" placeholder=""
                    class="form-control">
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="md-form mb-3">
                <label for="publicId" class="form-label">Affiliate ID <span class="clr-red font-200">*</span></label>
                <input type="text" id="publicId" name="publicId[value]" placeholder=""
                    class="form-control">
                <small class="form-text text-muted">This ID is sent by you with your traffic to our landing pages so that we can identify you as a source of your traffic.</small>
                <small class="form-text text-muted">Be careful. This cannot be changed later.</small>
            </div>
        </div>
        <div class="col-md-12">
            <div class="md-form form-check">
                <input type="checkbox" class="form-check-input" name="terms_and_conditions" id="terms_and_conditions">
                <label class="form-check-label " for="terms_and_conditions">I accept the 
                    <a href="https://task-tracker.trackdesk.com/terms-conditions" target="_blank" class="text-decoration-underline">Terms & conditions</a>
                    , and <a href="https://trackdesk.com/privacy-policy" target="_blank" class="text-decoration-underline">Privacy policy</a>.
                </label>
            </div>

        </div>

    </div>
    <div class="lds-roller-footer position-absolute">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="contact_error"></div>
    <div class="d-flex justify-content-end">
        <button type="submit" id="affiliate_staffviz" class="get_btn">submit</button>
    </div>

</form>