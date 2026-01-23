<article class="post">
    <figure style="overflow: hidden;" class="post-thumb"><img style="object-fit: contain"
            src="{{ filter_var($blog->image_link, FILTER_VALIDATE_URL) ? $blog->image_link : asset($blog->image_link) }}"
            alt=""><a href="{{ route('lawyers.blogs.show', ['slug' => $lawyer->slug, 'blog' => $blog->id]) }}"
            class="overlay-box"></a></figure>
    <div class="text"><a
            href="{{ route('lawyers.blogs.show', ['slug' => $lawyer->slug, 'blog' => $blog->id]) }}">{{ $blog->title }}</a>
    </div>
    <div class="post-info">{{ $created_at }}</div>
</article>
