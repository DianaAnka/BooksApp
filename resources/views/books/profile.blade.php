@extends('layouts.main')
@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">My Books</h2>
            <div class="my_auto grid grid-cols-1 sm:grid-cols-2  gap-8" style="vertical-align: middle">
                
                @foreach ($books as $book)
                    <div class="mt-16">
                        <a href="{{ route('books.show',$book['id']) }}">
                            <img src="{{ $book['image_l_url'] }}" onerror="this.onerror=null;this.src='https://placeimg.com/200/300/animals';" alt="poster" class="hover:opacity-75 transition ease-in-out duration-160">
                        </a>
                        <div class="mt-5">
                            <a href="" class="text-lg mt-2 hover:text-gray:300">{{ $book['book_title'] }}</a>
                            <div class="flex items-center text-gray-400 text-sm">
                                <span><img src="/img/star.png" onerror="this.onerror=null; this.src='no.png'"  class="fill-current w-4 text-gray-500 my-8 ml-2" viewBox="0 0 24 24">               </span>
                                <span class="ml-1">{{ $book['publisher'] }}</span>
                                <span class="mx-2">|</span>
                                <span >{{ $book['year'] }}</span>
                                
                            </div>
                            <div class="flex items-center text-gray-400 text-sm">
                                <span><img src="/img/star.png" onerror="this.onerror=null; this.src='no.png'"  class="fill-current w-4 text-gray-500 my-1 ml-1" viewBox="0 0 24 24">               </span>
                                <span class="ml-1">My Rate Is : {{ $book['rating'] }}</span>
                                
                            </div>
                           

                        </div>

                    </div>

                @endforeach
                
            </div>
        </div>

@endsection
