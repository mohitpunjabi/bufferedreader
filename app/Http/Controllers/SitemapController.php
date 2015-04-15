<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Issue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class SitemapController extends Controller {

    /**
     * Creates a new Controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }

    /**
     * Generates a basic sitemap.
     *
     */
    public function index()
    {
        $sitemap = $this->buildSitemap();
        return $sitemap->render('xml');
    }

    /**
     * Submits the sitemap to various sites.
     *
     */
    public function submit()
    {
        submit_sitemap();
        $sitemap = $this->buildSitemap();
        foreach($sitemap->model->items as $item)
        {
            submit_to_facebook($item['loc']);
        }
    }

    /**
     * Builds all links.
     *
     * @return Sitemap
     */
    private function buildSitemap()
    {
        $sitemap = App::make("sitemap");
        // check if there is cached sitemap and build new only if is not
        if (!$sitemap->isCached())
        {
            // add item to the sitemap (url, date, priority, freq)
            $sitemap->add(URL::to('/'), '2015-04-14T20:10:00+02:00', '1.0', 'daily');
            $sitemap->add(URL::to('about'), '2015-04-14T20:10:00+02:00', '0.9', 'monthly');


            $issues = Issue::all();
            $articles = Article::with('issue')->published()->get();

            // add every Issue to the sitemap
            foreach ($issues as $issue)
            {
                $sitemap->add(url_issue($issue), $issue->updated_at, '0.8', 'daily');
            }

            // add every Article to the sitemap
            foreach ($articles as $article)
            {
                $sitemap->add(url_article($article), $article->updated_at, '0.8', 'daily');
            }
        }

        return $sitemap;
    }
}
