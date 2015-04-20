<?php
use App\Article;
use App\Issue;
use Intervention\Image\Facades\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;


function img_save(UploadedFile $file, $tags = null, $filters = null) {
    $imageName = img_upload($file, $filters);
    $image = new App\Image();
    $image->name = $imageName;
    $image->save();

    if($tags) $image->tags()->sync($tags);

    return $imageName;
}

function img_upload(UploadedFile $file, $filters) {
    $imageName = str_random(15) . '.' . $file->getClientOriginalExtension();
    $img = Image::make($file);
    if($filters) $filters($img);
    $img->save('img/' . $imageName);
    Image::make($file)->heighten(100)->save('img/thumbnails/' . $imageName);

    return $imageName;
}

function url_issue(Issue $issue) {
    return url($issue->slug);
}

function url_article(Article $article) {
    return url_issue($article->issue) . '/' . $article->slug;
}

function link_issue(Issue $issue) {
    return '<a href="'.url_issue($issue).'" itemprop="url">'.$issue->name.'</a>';
}

function submit_sitemap()
{
    $sitemapUrl = url('sitemap');
    $crawlers = [
        'Google'    => 'http://www.google.com/webmasters/sitemaps/ping?sitemap='.$sitemapUrl,
        'Bing'      => 'http://www.bing.com/webmaster/ping.aspx?siteMap='.$sitemapUrl,
        'Ask'       => 'http://submissions.ask.com/ping?sitemap='.$sitemapUrl
    ];

    foreach($crawlers as $crawler => $url)
    {
        $returnCode = myCurl($url);
        Log::info($crawler.' Sitemaps has been pinged (return code: '.$returnCode.')');
    }
}

function myCurl($url)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    return $httpCode;
}

function submit_to_facebook($url)
{
    return myCurl('https://graph.facebook.com/?id='.$url.'&scrape=1&method=POST');
}

function eql()
{
    DB::enableQueryLog();
}

function ddql()
{
    dd(DB::getQueryLog());
}