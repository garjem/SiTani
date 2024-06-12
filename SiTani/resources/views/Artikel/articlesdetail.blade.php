<!DOCTYPE html>
<html>
<head>
    <title>{{ $article->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header-image {
            width: 100%;
            height: auto;
        }
        .content {
            padding: 20px;
        }
        .title {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 5px;
        }
        body {
            padding-top: 80px; /* Adjust the padding based on the height of your navbar */
            padding-bottom: 30px
        }
    </style>
</head>
<body>
    @include('/layout/navbar')
    <main>
        <div class="container">
            <div class="header">
                <div style="position: relative;">
                    <img src="{{ asset('/assets/kubis.png') }}" alt="{{ $article->title }}" class="header-image">
                    <h1 class="title">{{ $article->title }}</h1>
                </div>
            </div>
            <div class="content">
                {!! $article->content !!}
            </div>
        </div>
    </main>
</body>
</html>
