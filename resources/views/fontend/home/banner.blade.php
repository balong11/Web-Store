@if (!empty($banner) && $banner->isNotEmpty())
    <div id="banner">
        <div>
            @foreach ($banner as $banner)
                <div><img src="{{ $banner->getImageUrl('small') }}" alt="image" class="img-fluid h-100"></div>
            @endforeach
        </div>
        <div>
            <a href="{{ @$banner->link }}"><h1>{{ @$banner->title }}</h1></a>
        </div>
    </div>    
@endif
 