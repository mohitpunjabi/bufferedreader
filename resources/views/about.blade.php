@extends('app', [
    'title'             => 'About us | Buffered Reader',
    ])

@section('heading')
    @include('partials.header', [
        'background' => '/img/s4V8YcKwy91y3zq.jpg',
        'title'      => 'About the magazine',
        'subtitle'   => 'What we do? Why we do it? Why should you care?'
    ])
@stop

@section('content')
    <h2 class="section-heading">About BufferedReader</h2>
    <p>BufferedReader, a name coined by the Batch of 2014 of Department of CSE of ISM Dhanbad is the biannual magazine of the department. The magazine has been the brainchild of current HoD, Dr. Chiranjeev Kumar and was founded to provide an insight into not only the working of the department at various levels including the CSE Society, the ACM Chapter or other clubs but also to showcase the prodigal past of the department in the form of articles from Alumnus. The magazine also serves as a platform for the budding graduates and post-graduates of the department including contributions from them in each issue.</p>
    <p>From Highlights of the Department to Articles from Alumni to technical articles from faculty, the magazine showcases the department in all its glory, becoming the one primal destination to catch the whats and whos and wheres of this journey.</p>

    <h2 class="section-heading">The Team</h2>

    <p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>

    <ul class="media-list">
        <li class="media" itemprop="author">
            <div itemscope itemtype="http://schema.org/Person">
                <div class="media-left">
                    <img src="http://www.bufferedreader.org/img/author-4-hind-k-geel.jpg" itemprop="image" class="media-object pull-left" title="Hind K. Geel">
                </div>
                <div class="media-body">
                    <h3 class="media-heading" itemprop="name">Hind K. Geel</h3>
                    <p class="media-heading" itemprop="description">Bachelor of Technology in Computer Science and Engineering, Batch of 2015</p>
                </div>
            </div>
        </li>
        <li class="media" itemprop="author">
            <div itemscope itemtype="http://schema.org/Person">
                <div class="media-left">
                    <img src="http://www.bufferedreader.org/img/author-11-ashay-arvind-sinha.jpg" itemprop="image" class="media-object pull-left" title="Ashay Arvind Sinha">
                </div>
                <div class="media-body">
                    <h3 class="media-heading" itemprop="name">Ashay Arvind Sinha</h3>
                    <p class="media-heading" itemprop="description">B.Tech, 2016</p>
                </div>
            </div>
        </li>
        <li class="media" itemprop="author">
            <div itemscope itemtype="http://schema.org/Person">
                <div class="media-left">
                    <img src="http://www.bufferedreader.org/img/author--ankita-yadav.jpg" itemprop="image" class="media-object pull-left" title="Ankita Yadav">
                </div>
                <div class="media-body">
                    <h3 class="media-heading" itemprop="name">Ankita Yadav</h3>
                    <p class="media-heading" itemprop="description">B.Tech, 2015</p>
                </div>
            </div>
        </li>
        <li class="media" itemprop="author">
            <div itemscope itemtype="http://schema.org/Person">
                <div class="media-left">
                    <img src="http://www.bufferedreader.org/img/author--saurav-kothari.jpg" itemprop="image" class="media-object pull-left" title="Saurav Kothari">
                </div>
                <div class="media-body">
                    <h3 class="media-heading" itemprop="name">Saurav Kothari</h3>
                    <p class="media-heading" itemprop="description">B.Tech, 2015</p>
                </div>
            </div>
        </li>
    </ul>
@stop