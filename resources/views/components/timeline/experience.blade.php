<div>
    <h3>
        <span class="font-semibold">{{ $position }}</span>
        @if(isset($company))
            @
            <x-link href="{{ $company->attributes['href']}}"
                      text="{{ $company }}"
                      icon="arrow-up-right"
                      position="right"
                      blank />
        @endif
    </h3>
    <p>{{ $description }}</p>
</div>
