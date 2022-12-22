<!-- Very little is needed to make a happy life. - Marcus Aurelius -->
<div class="col-12 col-md-6 col-lg-4">
    <div class="footer_single_col contact">
        <h3>Contact Us</h3>
        <p>.....</p>
        <div class="contact_info">
            <a>{{ $setting->phone }}</a>
            <a>{{ $setting->email }}</a>
        </div>
        <ul class="">
            @if ($setting->facebook != null)
                <li><a href="{{ $setting->facebook }}"><i class="fab fa-facebook-f fb-icon"></i></a></li>
            @endif

            @if ($setting->twitter != null)
                <li><a href="{{ $setting->twitter }}"><i class="fab fa-twitter twitt-icon"></i></a></li>
            @endif

            @if ($setting->instagram != null)
                <li><a href="{{ $setting->instagram }}"><i class="fab fa-linkedin-in link-icon"></i></a></li>
            @endif

            @if ($setting->linkedin != null)
                <li><a href="{{ $setting->linkedin }}"><i class="fab fa-instagram ins-icon"></i></a></li>
            @endif

            @if ($setting->youtube != null)
                <li><a href="{{ $setting->youtube }}"><i class="fab fa-youtube ins-icon"></i></a></li>
            @endif
        </ul>
    </div>
</div>
