<x-app-layout>

    <x-slot name="header">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" style="background">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        <a href="{{ route('posts.create') }}">Crear Publicación |</a>
        <a href="{{ route('extras.musica') }}"> Música |</a>
        <a href="{{ route('posts.nacionales') }}"> Nacionales |</a>
        <a href="{{ route('posts.internacionales') }}"> Internacionales |</a>
        <a href="{{ route('posts.index') }}"> Lista publicaciones |</a>

    </h2>
    </x-slot>
    
    <div align="center">
        <p align="left"><a href = "https://music.youtube.com/watch?v=20--CXaceIM&si=n9j2V1tjAK6_Gq0s"><img src = "https://i.pinimg.com/564x/64/26/3f/64263f685c78a24243b533ade6403db4.jpg" width = 170 align = "center"/></a>Paul McCartney - Goodnight Tonight</p>
        <p align="right"><b> Travis Scott - K-POP </b><a href = "https://music.youtube.com/playlist?list=OLAK5uy_lL5NvubssVKKRXjjUvRjaCSSsAvpzPLGk&si=QqFlyh3jE4yjK8Nq"><img src = "https://i.pinimg.com/736x/1a/61/48/1a61489a261300a6a913e9097ac63f15.jpg" width = 170 align = "center"/></a></p>
        <p align="left"><a href = "https://music.youtube.com/watch?v=OGDkg3QiJmk&si=xo3W0_if6YiBAmQL"><img src = "https://i.pinimg.com/564x/bc/77/5b/bc775bea966eaef43f800b03da918ea4.jpg" width = 170 align = "center"/></a><b> Taylor Swift - Wildest Dreams </b></p>        
        <p align="right"><b> JVKE - Golden hour </b><a href = "https://music.youtube.com/watch?v=uV_5eEvamoQ&si=-OmMBINvKg4P5rK3"><img src = "https://i.pinimg.com/564x/11/06/9f/11069f9e6b33b217295e2b118454bcca.jpg" width = 170 align = "center"/></a></p>
        <p align="left"><a href = "https://music.youtube.com/playlist?list=OLAK5uy_kOqjZplD5BDS0GYRHzFHs2fpMBIMqtxDs&si=Bit6U7I-zbQTmA-u"><img src = "https://i.pinimg.com/236x/e8/ba/e4/e8bae4d4aed5246db29687e85dd8eabe.jpg" width = 170 align = "center"/></a><b> Latin Mafia ft. Humbe - Patadas de ahogado </b></p>
        <p align="right"><b> Carla Morrison - Que todo fue por amor </b><a href = "https://music.youtube.com/watch?v=FSExRpeGszY&si=mzaGRrEiW0m4c1Rs"><img src = "https://i.pinimg.com/564x/8c/1c/36/8c1c36be249777a953af3d743e6ec6b5.jpg" width = 170 align = "center"/></a></p>
        <p align="left"><a href = "https://music.youtube.com/watch?v=dteS0K37wYQ&si=Yt1osAJcoVd89455"><img src = "https://i.pinimg.com/564x/85/85/e8/8585e8871427f4ca070dd93e602602cc.jpg" width = 170 align = "center"/></a><b> Humbe - Bien hecho </b></p>  
    </div>

</x-app-layout>