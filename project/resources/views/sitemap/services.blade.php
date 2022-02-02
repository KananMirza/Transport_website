<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>http://www.texno.blog/muellif/texno-blog/0</loc>
        <lastmod>{{  date("Y-m-d") }}T{{  date("H:i:s") }}+00:00</lastmod>
    </url>
    @foreach($Authors as $author)
        <url>
            <loc>http://www.texno.blog/muellif/{{\Illuminate\Support\Str::slug($author->name)}}/{{ $author->id }}</loc>
            <lastmod>{{  date("Y-m-d") }}T{{  date("H:i:s") }}+00:00</lastmod>
        </url>
    @endforeach
</urlset>
