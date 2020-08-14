
@extends('layouts.main')
@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/rate.css')}}">
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex">
            <img src="{{$book->image_l_url}}" alt="poster" class="w-96">
            <div class="ml-24">
                <h2 class="text-4xl font-semibold">{{ $book->book_title }}</h2>
                <div class="mt-2">
                    <div class="flex items-center text-gray-400 text-sm">
                        <span><img src="/img/star.png" class="fill-current w-4 text-gray-500 my-8 ml-2" viewBox"0 0 24 24">               </span>
                        <span class="ml-1">{{$book->book_author}}</span>
                        <span class="mx-2">| </span>
                        <span>{{ $book->year }}</span>
                        <span class="mx-2">| </span>
                    </div>
                </div>
                <h2 class="text-4xl font-semibold">Overview</h2>
                <div class="mt-2">
                <div class="flex items-center">
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                </div>
                </div>
                <br>
                <form class="rating" method="POST" action="http://localhost:8000/rate" >
                    @csrf
                    <div class="rating">
                        <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="10" data-step="1"  data-size="xs">
                        <input type="hidden" name="id" required="" value="{{ $book->id }}">
                        <br/>
                        <button type="submit" class="btn btn-success">Submit Review</button>
                    </div>
                </div>
                  </form>
            </div>
        </div>
    </div>

@endsection
