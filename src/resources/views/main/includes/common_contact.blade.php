<div class="widget widget_contact-form">
    <h3 class="widget-title">Request a Free Quote</h3>
    <div class="text">Fill-in the form & send for a quick estimate</div>
    <form method="post" id="contactForm">
        <div class="form-group">
            <input placeholder="name" id="name" name="name" type="text">
        </div>
        <div class="form-group">
            <input placeholder="Email" id="email" name="email" type="email">
        </div>
        <div class="form-group">
            <input placeholder="Phone" id="phone" name="email" type="text">
        </div>
        <div class="form-group">
            <input placeholder="Image" id="image" name="image" type="file" class="pt-2">
        </div>
        <div class="form-group">
            <select class="selectpicker" id="service" name="service">
                <option value="">Service Required</option>
                @if(count($serviceOption)>0)
                    @foreach($serviceOption as $v)
                    <option value="{!!$v->name!!}">{!!$v->name!!}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="form-group">
            <textarea name="form_message" id="message" name="message" placeholder="Message"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="theme-btn btn-style-one w-100"><span id="submitBtn">Send Message</span></button>
        </div>
    </form>
</div>
