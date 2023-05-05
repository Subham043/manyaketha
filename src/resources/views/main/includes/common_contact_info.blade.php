<ul class="contact-info">
    <li class="d-flex align-items-center justify-content-between mb-4">
        <div class="icon col-auto p-0 m-0"><span class="flaticon-gps"></span></div>
        <div class="text col-10 p-0 m-0">{{ empty($generalSetting) ? '' : $generalSetting->address}}</div>
    </li>
    <li class="d-flex align-items-center justify-content-between mb-4">
        <div class="icon col-auto p-0 m-0"><span class="flaticon-phone"></span></div>
        <div class="text col-10 p-0 m-0">
            <a href="tel:{{ empty($generalSetting) ? '' : $generalSetting->phone}}">{{ empty($generalSetting) ? '' : $generalSetting->phone}}</a>
        </div>
    </li>
    <li class="d-flex align-items-center justify-content-between mb-4">
        <div class="icon col-auto p-0 m-0"><span class="flaticon-comment"></span></div>
        <div class="text col-10 p-0 m-0">
            <a href="mailto:{{ empty($generalSetting) ? '' : $generalSetting->email}}">{{ empty($generalSetting) ? '' : $generalSetting->email}}</a>
        </div>
    </li>
</ul>
