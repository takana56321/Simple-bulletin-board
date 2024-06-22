<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>簡易掲示板</title>

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <x-guest-layout>

            <div class="h-screen pb-14 bg-right bg-cover">
                <div class="container w-full min-h-screen pt-10 md:pt-18 px-6 mx-auto flex flex-wrap flex-col md:flex-row items-center bg-yellow-50">

                    <!--左側-->
                    <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden ">
                        <h1 class="my-4 text-3xl md:text-5xl text-green-800 font-bold leading-tight text-center md:text-left slide-in-bottom-h1">簡易掲示板</h1>
                        <p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left slide-in-bottom-subtitle">
                            簡易掲示板です。好きなことを投稿して、それにコメントできます。
                        </p>
                        <p class="text-blue-400 font-bold pb-8 lg:pb-6 text-center md:text-left fade-in">
                            どなたでも登録募集中です。お気軽に書き出してください。
                        </p>
                        <div class="flex w-full justify-center md:justify-start pb-24 lg:pb-0 fade-in ">
                            {{-- ボタンふたつ設定 --}}
                            <a href="{{route('contact.create')}}"><x-danger-button class="btnsetg">お問い合わせ</x-danger-button></a>
                            <a href="{{route('register')}}"><x-danger-button class="btnsetg">ご登録はこちら</x-danger-button></a>
                            <a href="{{route('login')}}"><x-danger-button class="btnsetg">ログインはこちら</x-danger-button></a>
                        </div>
                    </div>
                    {{-- 右側 --}}
                    <div class="w-full xl:w-3/5 py-6 overflow-y-hidden">
                        <img class="w-5/6 mx-auto lg:mr-0 slide-in-bottom rounded-lg shadow-xl" src="{{asset('logo/summer.png')}}">
                    </div>
                </div>
                <div class="container pt-10 md:pt-18 px-6 mx-auto flex flex-wrap flex-col md:flex-row items-center">
                    <div class="w-full text-sm text-center md:text-left fade-in border-2 p-4 text-red-800 leading-8 mb-8">
                        <p>参考サイトを見ながら作った簡易掲示板です</p>
                    </div>
                    <!--フッタ-->
                    <div class="w-full pt-10 pb-6 text-sm md:text-left fade-in">
                        <p class="text-gray-500 text-center">@2022 Laravelの教科書サンプル</p>
                    </div>
                </div>
            </div>
        </x-guest-layout>
    </body>
</html>

