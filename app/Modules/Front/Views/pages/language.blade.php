<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{!!asset('public/assets/frontend')!!}/css/bootstrap.css">

    <script src="{!!asset('public/assets/frontend')!!}/js/jquery-1.11.2.min.js"></script>
    <script src="{!!asset('public/assets/frontend')!!}/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <p>{{trans('test.about')}}</p>
    <ul>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                {{ app()->getLocale() }} <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu">
                @foreach (config('translatable.locales') as $lang => $language)
                    @if ($language != app()->getLocale())
                        <li>
                            <a href="{{ route('front.switchLang', $language) }}">
                                {{ $language }}
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </li>
    </ul>
</body>
</html>
