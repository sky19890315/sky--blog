<?php
/**
 * Created by PhpStorm.
 * User: s
 * Date: 17-2-23
 * Time: 下午8:39
 */
?>
<html>
<head>
    <title>{{ config('blog.title') }}</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>
        <div class="container">
            <h1> {{ $article->title }}</h1>
            <h4> {{ $article->published }}</h4>

            <hr/>
                {!! nl2br(e($article->content)) !!}
            <hr/>
            <button class="btn btn-primary" onclick="history.go(-1)">
                << Back
            </button>
        </div>

    </body>
</html>
