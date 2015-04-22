@extends('app', [
    'title'             => 'About us | Buffered Reader',
    'plainNav'          => false
    ])

@section('heading')
    <header class="intro-header" style="background-image: url('/img/s4V8YcKwy91y3zq.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <br/>
                        <h1 itemprop="name" style="text-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2)">About Us</h1>
                        <br/>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop

@section('content')
    <h2 class="section-heading">About the magazine</h2>
    <p>BufferedReader, a name coined by the Batch of 2014 of Department of CSE of ISM Dhanbad is the biannual magazine of the department. The magazine has been the brainchild of current HoD, Dr. Chiranjeev Kumar and was founded to provide an insight into not only the working of the department at various levels including the CSE Society, the ACM Chapter or other clubs but also to showcase the prodigal past of the department in the form of articles from Alumnus. The magazine also serves as a platform for the budding graduates and post-graduates of the department including contributions from them in each issue.</p>
    <p>From Highlights of the Department to Articles from Alumni to technical articles from faculty, the magazine showcases the department in all its glory, becoming the one primal destination to catch the whats and whos and wheres of this journey.</p>

    <h2 class="section-heading">Our Team</h2>
    <p>
        <a href="/img/team-2015.jpg">
            <img itemprop="image" class="img-responsive center-block" src="/img/team-2015.jpg" alt="BufferedReader Team, 2015" title="BufferedReader Team, 2015">
        </a>
        <span class="caption text-muted">The editing and the design team, BufferedReader, 2015</span>
    </p>

@stop