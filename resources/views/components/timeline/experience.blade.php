<div>
    <h3>
        <span class="font-semibold">{{ $position }}</span>
        @if(isset($company))
            @
            <x-ts-link href="{{ $company->attributes['href']}}"
                      text="{{ $company }}"
                      icon="arrow-up-right"
                      position="right"
                      blank />
        @endif
    </h3>
    <p class="max-w-md">{{ $description }}</p>
</div>
