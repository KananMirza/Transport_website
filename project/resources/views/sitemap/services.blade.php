<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
    @foreach($datas as $data)
        <url>
            <loc>{{env('way').'xidmetlerimiz/'.$data->slug}}</loc>
            <lastmod>{{  date("Y-m-d") }}T{{  date("H:i:s") }}+00:00</lastmod>
            <image:image>
                <image:loc>{{env('way').$data->image}}</image:loc>
                <image:title><![CDATA[{{ $data->slug }}]]></image:title>
                <image:caption><![CDATA[{{ $data->title }}]]></image:caption>
            </image:image>
        </url>
    @endforeach
</urlset>
