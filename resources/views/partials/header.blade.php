<header class="intro-header" style="background-image: url('{{ $background or '' }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    @if(isset($issue))
                        <h1 itemprop="name">{{ $title or '' }}</h1>
                        <hr class="small">
                        <span class="subheading">{{ $subtitle or '' }}</span>
                        <p> </p>
                        <div>
                            <a class="btn btn-primary btn-lg" href="{{ $pdfLink }}"><span class="glyphicon glyphicon-download-alt"></span> Download PDF</a>
                        </div>
                    @else
                        <h1 itemprop="name">{{ $title or '' }}</h1>
                        <h2 class="subheading">{{ $subtitle or '' }}</h2>
                        <span class="meta">{{ $meta or '' }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>
