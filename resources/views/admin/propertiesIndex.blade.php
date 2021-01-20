<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Gestion des biens') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container mx-auto max-w-7xl sm:px-6 lg:px-8">
            <section class="text-gray-600 body-font">
                <div class="overflow-x-auto py-2 pr-10 -my-2 sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                    {{--                        <div--}}
                    {{--                            class="inline-block overflow-hidden py-4 px-12 w-full align-middle bg-white rounded-tl-lg rounded-tr-lg shadow-lg">--}}
                    {{--                            <div class="flex justify-between">--}}
                    {{--                                <div class="inline-flex px-2 w-7/12 h-12 bg-transparent rounded border lg:px-6">--}}
                    {{--                                    <div class="flex relative flex-wrap items-stretch mb-6 w-full h-full">--}}
                    {{--                                        <div class="flex">--}}
                    {{--                                    <span--}}
                    {{--                                        class="flex items-center py-2 text-sm leading-normal bg-transparent rounded rounded-r-none border border-r-0 border-none lg:px-3 whitespace-no-wrap text-grey-dark">--}}
                    {{--                                        <svg width="18" height="18" class="w-4 lg:w-auto" viewBox="0 0 18 18"--}}
                    {{--                                             fill="none" xmlns="http://www.w3.org/2000/svg">--}}
                    {{--                                            <path--}}
                    {{--                                                d="M8.11086 15.2217C12.0381 15.2217 15.2217 12.0381 15.2217 8.11086C15.2217 4.18364 12.0381 1 8.11086 1C4.18364 1 1 4.18364 1 8.11086C1 12.0381 4.18364 15.2217 8.11086 15.2217Z"--}}
                    {{--                                                stroke="#455A64" stroke-linecap="round" stroke-linejoin="round"/>--}}
                    {{--                                            <path d="M16.9993 16.9993L13.1328 13.1328" stroke="#455A64"--}}
                    {{--                                                  stroke-linecap="round" stroke-linejoin="round"/>--}}
                    {{--                                        </svg>--}}
                    {{--                                    </span>--}}
                    {{--                                        </div>--}}
                    {{--                                        <input type="text"--}}
                    {{--                                               class="relative flex-1 flex-auto flex-grow flex-shrink px-3 w-px font-thin tracking-wide leading-normal text-gray-500 rounded rounded-l-none border border-l-0 border-none focus:outline-none text-xxs lg:text-xs lg:text-base"--}}
                    {{--                                               placeholder="Search">--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    <div
                        class="inline-block overflow-hidden px-8 pt-3 min-w-full align-middle bg-white rounded-br-lg rounded-bl-lg shadow shadow-dashboard">
                        <table class="min-w-full">
                            <thead>
                            <tr>
                                <th class="py-3 px-6 tracking-wider leading-4 text-left border-b-2 border-gray-300 text-punch-500">
                                    ID
                                </th>
                                <th class="py-3 px-6 text-sm tracking-wider leading-4 text-left border-b-2 border-gray-300 text-punch-500">
                                    Prix
                                </th>
                                <th class="py-3 px-6 text-sm tracking-wider leading-4 text-left border-b-2 border-gray-300 text-punch-500">
                                    Surface
                                </th>
                                <th class="py-3 px-6 text-sm tracking-wider leading-4 text-left border-b-2 border-gray-300 text-punch-500">
                                    Ville
                                </th>
                                <th class="py-3 px-6 text-sm tracking-wider leading-4 text-left border-b-2 border-gray-300 text-punch-500">
                                    Etat
                                </th>
                                <th class="py-3 px-6 text-sm tracking-wider leading-4 text-left border-b-2 border-gray-300 text-punch-500">
                                    Type
                                </th>
                                <th class="py-3 px-6 border-b-2 border-gray-300"></th>
                            </tr>
                            </thead>
                            <tbody class="bg-white">
                            @foreach($properties as $property)
                                <tr>
                                    <td class="py-4 px-6 border-b border-gray-500 whitespace-no-wrap">
                                        <div class="flex items-center">
                                            <div>
                                                <div class="text-sm leading-5 text-gray-800">
                                                    #{{$property->id}}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6 border-b border-gray-500 whitespace-no-wrap">
                                        <div
                                            class="text-sm leading-5 text-blue-900">{{number_format($property->price, 0, ',', ' ')." €"}}</div>
                                    </td>
                                    <td class="py-4 px-6 text-sm leading-5 text-blue-900 border-b border-gray-500 whitespace-no-wrap">
                                        {{number_format($property->surface, 0, ',', ' ')." m2"}}
                                    </td>
                                    <td class="py-4 px-6 text-sm leading-5 text-blue-900 border-b border-gray-500 whitespace-no-wrap">
                                        {{$property->town}}
                                    </td>
                                    <td class="py-4 px-6 text-sm leading-5 text-blue-900 border-b border-gray-500 whitespace-no-wrap">
                                            <span class="w-full px-2 py-1 text-xs rounded-full
                                            @if($property->state == "Ancien") text-punch-600 bg-punch-200
                                            @elseif($property->state == "Neuf") text-green-600 bg-green-200
                                            @elseif($property->state == "Abandonner") text-gray-600  bg-gray-200
                                            @else text-blue-600 bg-blue-200
                                            @endif() "
                                            >{{$property->state}}</span>
                                    </td>
                                    <td class="py-4 px-6 text-sm leading-5 text-blue-900 border-b border-gray-500 whitespace-no-wrap">
                                        <span
                                            class="inline-flex justify-center items-center py-1 px-2 mr-2 text-sm leading-none rounded-full
"
                                        >{{$property->type->title}}</span>
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 text-sm leading-5 text-right border-b border-gray-500 whitespace-no-wrap">
                                        <div class="flex">
                                            <a href="{{route("properties.show",['property'=>$property])}}"
                                               class="py-2 px-4 mx-1 font-semibold rounded border transition duration-300 font-montserrat border-dino-500 text-dino-500 hover:bg-dino-700 hover:text-white focus:outline-none">
                                                <svg class="w-6 h-6" data-darkreader-inline-fill=""
                                                     data-darkreader-inline-stroke=""
                                                     fill="none" stroke="currentColor"
                                                     style="--darkreader-inline-fill:none; --darkreader-inline-stroke:currentColor;"
                                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                </svg>
                                            </a>
                                            <a href="{{route("admin.properties.edit",['property'=>$property])}}"
                                               class="py-2 px-4 mx-1 font-semibold rounded border transition duration-300 font-montserrat border-punch-500 text-punch-500 hover:bg-punch-700 hover:text-white focus:outline-none">
                                                <svg class="w-6 h-6" viewBox="0 0 24 24" stroke-width="2"
                                                     stroke="currentColor" fill="none" stroke-linecap="round"
                                                     stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z"/>
                                                    <path
                                                        d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3"/>
                                                    <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3"/>
                                                    <line x1="16" y1="5" x2="19" y2="8"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-app-layout>
