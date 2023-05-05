<ul class="contact-info">
    <li>
        <div class="icon"><span class="flaticon-gps"></span></div>
        <div class="text">{{ empty($generalSetting) ? '' : $generalSetting->address}}</div>
    </li>
    <li>
        <div class="icon"><span class="flaticon-phone"></span></div>
        <div class="text">
            <a href="tel:{{ empty($generalSetting) ? '' : $generalSetting->phone}}">{{ empty($generalSetting) ? '' : $generalSetting->phone}}</a>
        </div>
    </li>
    <li>
        <div class="icon"><span class="flaticon-comment"></span></div>
        <div class="text">
            <a href="mailto:{{ empty($generalSetting) ? '' : $generalSetting->email}}">{{ empty($generalSetting) ? '' : $generalSetting->email}}</a>
        </div>
    </li>
</ul>
