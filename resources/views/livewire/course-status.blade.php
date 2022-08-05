<div class="mt-24 bg-gray-500">
    <div class="container grid grid-cols-1 lg:grid-cols-3 gap-8 py-12">
        <div class="lg:col-span-2">
            <div class="embed-responsive">
                {!!$current->iframe!!}
            </div>

            <h1 class="text-3xl text-gray-300 font-bold">
                {!!$current->name!!}
            </h1>

            @if($current->description)
                <div class="text-gray-200">
                    {{$current->description}}
                </div>
            @endif

            <div class="flex items-center mt-4 cursor-pointer" wire:click="completed">
                @if($current->completed)
                    <i class="text-md text-2xl font-bold fas fa-toggle-on text-2x1 text-blue-800"></i>
                @else
                    <i class="text-md text-2xl font-bold fas fa-toggle-off text-2x1 text-gray-900"></i>
                @endif
                <p class="text-md font-bold ml-2 text-gray-200">Marcar esta unidad como culminada</p>
            </div>

            <div class="card mt-2">
                <div class="card-body flex text-gray-500 font-bold">
                    @if($this->previous)
                        <a wire:click="changeLesson({{$this->previous}})" class="cursor-pointer"> <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                            Tema Anterior</a>
                    @endif
                    @if($this->next)
                        <a wire:click="changeLesson({{$this->next}})" class="ml-auto cursor-pointer " >Siguiente tema <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                        </a>
                    @endif

                </div>
            </div>

            <div>
                @livewire('lesson-assignament',['lesson' => $current], key($current->id))
            </div>

        </div>

        <div class="card">
            <div class="card-body">
                <h1 class="text-2xl leading-8 text-center mb-4 mt-2">{{$course->name}}</h1>
                <div class="flex items-center">
                    <figure>
                        <img class="w-12 h-12 object-cover rounded-full mr-4" src="{{$course->teacher->profile_photo_url}}" alt="">
                    </figure>
                    <div>
                        <p>{{$course->teacher->name}}</p>
                        <a class="text-blue-500 text-sm" href="">{{'@' . Str::slug($course->teacher->name,'')}}</a>
                    </div>
                </div>

                @if($current->tasks->count() > 0)
                    @if($current->tasks()->whereLessonId($current->id)->first()->status == 1)
                        <p class="text-gray-600 text-sm mt-2">{{($this->advance == 100?80:$this->advance) . '%'}} completado</p>
                        <div class="relative pt-1">
                            <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-gray-200">
                                <div style="width:{{$this->advance . '%'}}" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500 transition-all duration-500"></div>
                            </div>
                        </div>
                        <span class="bg-yellow-200 mb-4 text-xs flex"> Tarea pendiente de calificar</span>
                    @else
                        <p class="text-gray-600 text-sm mt-2">100% completado</p>
                        <div class="relative pt-1">
                            <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-gray-200">
                                <div style="width:100%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500 transition-all duration-500"></div>
                            </div>
                        </div>
                        <span class="bg-green-200 mb-4 text-xs flex"> Tarea Calificada</span>
                    @endif
                @else
                    <p class="text-gray-600 text-sm mt-2">{{$this->advance . '%'}} completado</p>
                    <div class="relative pt-1">
                        <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-gray-200">
                            <div style="width:{{$this->advance . '%'}}" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500 transition-all duration-500"></div>
                        </div>
                    </div>
                    <span class="bg-red-200 mb-4 text-xs flex"> Tarea pendiente de entregar</span>
                @endif

                <hr>

                <ul class="mt-4">
                    @foreach($course->sections as $section)
                        <li class="text-gray-600 mb-4">
                            <a class="font-bold text-base inline-block mb-2 "> {{$section->name}}</a>
                            <ul>
                                @foreach($section->lessons as $lesson)
                                    <li class="flex">
                                        <div>
                                            @if($lesson->completed)
                                               @if($current->id == $lesson->id)
                                                    <span class="inline-block w-4 h-4 border-2 border-green-500 rounded-full mr-2 mt-1"></span>
                                                @else
                                                    <span class="inline-block w-4 h-4 bg-green-500 rounded-full mr-2 mt-1"></span>
                                                @endif
                                            @else
                                                @if($current->id == $lesson->id)
                                                    <span class="inline-block w-4 h-4 border-2 border-yellow-500 rounded-full mr-2 mt-1"></span>
                                                @else
                                                    <span class="inline-block w-4 h-4 bg-yellow-500 rounded-full mr-2 mt-1"></span>
                                                @endif
    
                                            @endif
                                        </div>
                                        <a class="cursor-pointer" wire:click="changeLesson({{$lesson}})">{{$lesson->name}}
                                            <!--accedemos al atributo completed definido en el modelo lesson getCompletedAtributed-->
    
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>

            </div>

            {{-- <div>
                @livewire('lesson-assignament',['lesson' => $current], key($current->id))
            </div> --}}

            
        </div>
    </div>

    {{-- <section class="container p-5 place-items-center grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @foreach ($lessons as $key=>$item)
        <div class="bg-gray-900 shadow-lg rounded p-3 h-full w-full my-4">
            <div class="group relative">
                <img class="w-full md:w-90 block rounded" src="{{Storage::url($course->image->url)}}" />
                <div
                    class="absolute bg-black rounded bg-opacity-0 group-hover:bg-opacity-60 w-full h-full top-0 flex items-center group-hover:opacity-100 transition justify-evenly ">

                    <a wire:click='changeLesson({{$item}})'
                        class="hover:scale-110 text-white opacity-0 transform translate-y-3 group-hover:translate-y-0 group-hover:opacity-100 transition cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                            class="bi bi-play-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="p-5 mt-auto">
                <h3 class="text-white text-lg ">Lección:{{$key+1}}: {{$item->name}}</h3>
                <p class="text-gray-400">{{$item->description}}</p>

                @foreach ($tasks as $e)
                @if ($e->lesson->id == $item->id && $e->user->id == auth()->user()->id)
                @if ($e->status == 1)
                <span class="bg-yellow-300"> Pendiente de calificar </span>
                @else
                <span class="bg-green-300"> Calificacion: {{$e->score}} </span>
                @endif
                @endif
                @endforeach
            </div>
        </div>
        @endforeach
    </section> --}}

</div>