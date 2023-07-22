

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{--            {{ __('Dashboard') }}--}}
            wellcome {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <link rel="stylesheet" href="{{asset("css/style.css")}}">
    </head>
    <body>
    <section class="article" id="article">

        <div class="article-container">
            <div class="article-box">
                <i class='bx bx-code-alt'></i>
                <h3>Article 1</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam atque corporis cumque, et nam obcaecati
                    optio possimus quasi quia quisquam reiciendis repellendus sint totam? Dolorum earum facilis nemo soluta
                    tenetur?</p>
                <a href="" class="btn"> Read More</a>
            </div>
            <div class="article-box">
                <i class='bx bx-film'></i>
                <h3>Article 2</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam atque corporis cumque, et nam obcaecati
                    optio possimus quasi quia quisquam reiciendis repellendus sint totam? Dolorum earum facilis nemo soluta
                    tenetur?</p>
                <a href="" class="btn"> Read More</a>
            </div>
            <div class="article-box">
                <i class='bx bx-game'></i>
                <h3>Article 3</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam atque corporis cumque, et nam obcaecati
                    optio possimus quasi quia quisquam reiciendis repellendus sint totam? Dolorum earum facilis nemo soluta
                    tenetur?</p>
                <a href="" class="btn"> Read More</a>
            </div>

        </div>

    </section>
    </body>
    </html>
</x-app-layout>
