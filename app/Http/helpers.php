<?php
use App\Article;
use App\Issue;
use Intervention\Image\Facades\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;


function img_save(UploadedFile $file) {
    return Image::make($file)->save('img/' . str_random(15) . '.jpg')->basename;
}

function url_issue(Issue $issue) {
    return url($issue->slug);
}

function url_article(Article $article) {
    return url_issue($article->issue) . '/' . $article->slug;
}

function link_issue(Issue $issue) {
    return '<a href="'.url_issue($issue).'">'.$issue->name.'</a>';
}