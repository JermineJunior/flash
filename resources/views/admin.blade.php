@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <div class="md:w-1/2 md:mx-auto">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="flex flex-col mt-6 bg-white border border-2 rounded shadow-md mx-4 md:mx-0">
                <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                   Authors
                </div>

                <div class="w-full p-6">
                   <table>
                       <thead>
                           <th>#</th>
                           <th>Name</th>
                       </thead>
                       <tbody>
                           @foreach ($authors ?? '' as $author)
                               <tr>
                                   <td>@</td>
                                   <td>{{ $author->name }}</td>
                               </tr>
                           @endforeach
                       </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
@endsection
