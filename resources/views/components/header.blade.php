{{-- Header --}}
<div class="header bg-gradient-primary py-6 py-lg-6">
    <div class="container">
        <div class="header-body text-center mb-7">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6">
                    <h1 class="text-white">
                        {{ $title }}
                    </h1>
                    <p class="text-lead text-light">
                        {{ $slot }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
