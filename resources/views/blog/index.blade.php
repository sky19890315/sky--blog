<?php
/**
 * Created by PhpStorm.
 * User: s
 * Date: 17-2-23
 * Time: 下午8:21
 */
?>
<html>
<head>
    <title>{{ config('blog.title') }}</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>
        <div class="container">
            <h1>{{ config('blog.title') }}</h1>
            <h4>Page {{ $articles->currentPage() }} of {{ $articles->lastPage() }}</h4>
            <ul>
               @foreach ($articles as $article)
                    <li>
                        <h3><a href="/blog/{{$article->title}}">{{ $article->title }}</a></h3>
                        <h4>{{ $article->published }}</h4>
                        <p>
                            {{ str_limit($article->content) }}
                        </p>
                    </li>
               @endforeach
            </ul>
            <hr/>
        </div>
    </body>
</html>
