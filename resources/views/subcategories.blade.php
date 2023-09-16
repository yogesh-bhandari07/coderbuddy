<ul>
    @foreach ($categories as $category)
        <li class="ml-4">
            {{ $category->name }}
            @if ($category->descendants->count() > 0)
                @include('subcategories', [
                    'categories' => $category->descendants,
                ])
            @endif
        </li>
    @endforeach
</ul>