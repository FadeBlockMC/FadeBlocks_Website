
@extends('widgets.layout')

<title>Home | Fadeblocks</title>

@section('content')
<div class="grid grid-cols-1 gap-6">
                <div class="col-span-2">
                    <div class="bg-white p-6 rounded-lg shadow-lg smooth-shadow">
                        <p class="text-4xl font-bold text-yellow-500 mb-6">Announcements</p>
                        @if($announcements->isEmpty())
                            <p class="text-gray-500 mt-2">No announcement available.</p>
                        @else
                            <div id="announcements-container">
                                @foreach($announcements->sortByDesc('created_at') as $index => $announcement)
                                    <div class="bg-gray-100 rounded-lg shadow-md mb-8 p-6 smooth-shadow">
                                        <h2 class="text-gray-800 text-2xl font-semibold">{!! $announcement->title !!}</h2>
                                        <p class="text-gray-500 text-sm mt-1">{{ date('M d, Y', strtotime($announcement->created_at)) }}</p>
                                        <div class="text-gray-600 text-lg leading-relaxed mt-4">
                                            {!! Str::limit($announcement->content, 150) !!}
                                        </div>
                                        <a href="{{ route('home', $announcement->id) }}" class="text-blue-500 font-semibold mt-4 inline-block">Read More...</a>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
</div>
@endsection


