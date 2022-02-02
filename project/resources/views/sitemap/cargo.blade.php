
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
        <url>
            <loc>{{env('way').'dasidigimiz-yukler'}}</loc>
            <lastmod>{{  date("Y-m-d") }}T{{  date("H:i:s") }}+00:00</lastmod>
            <image:image>
                <image:loc>{{env('way').\App\Models\settings::first()->logo}}</image:loc>
                <image:title><![CDATA[{{'ucuz-yukdasima' }}]]></image:title>
                <image:caption><![CDATA[{{ 'Ucuz Yükdaşıma' }}]]></image:caption>
            </image:image>
        </url>
</urlset>
