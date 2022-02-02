<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach($Categories as $category)
        <url>
            <loc>http://www.texno.blog/category/{{ $category->slug }}</loc>
            <lastmod>{{  date("Y-m-d") }}T{{  date("H:i:s") }}+00:00</lastmod>
        </url>
    @endforeach
</urlset>
