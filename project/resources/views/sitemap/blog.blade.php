
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
    @foreach($News as $x)
        <url>
            <loc>http://www.texno.blog/{{ $x->slug }}</loc>
            <lastmod>{{  date("Y-m-d") }}T{{  date("H:i:s") }}+00:00</lastmod>
            <image:image>
                <image:loc>http://www.texno.blog/assets/media/news/{{ $x->image }}</image:loc>
                <image:title><![CDATA[{{ $x->slug }}]]></image:title>
                <image:caption><![CDATA[{{ $x->name }}]]></image:caption>
            </image:image>
        </url>
    @endforeach
</urlset>
