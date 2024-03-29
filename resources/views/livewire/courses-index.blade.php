<div class="pt-20 pb-48">
    <div class="container flex text-gray-800">
        <button class="bg-gray-800 shadow h-12 px-4 rounded-lg text-gray-400 mr-4 focus:outline-none" wire:click="clear">
            <i class="fas fa-laptop text-xs mr-2"></i>
            
            Todos los cursos
        </button>
        <div class="relative" x-data="{open: false}">
            <button class="block bg-gray-800 text-gray-400 shadow rounded-lg h-12 px-4 mr-4 overflow-hidden focos:outline-none"
                x-on:click="open=true">
                <i class="fas fa-tags text-sm mr-2"></i>
                  Categoria
                <i class="fas fa-angle-down text-sm ml-2"></i>
            </button>
            <div class="absolute right-0 w-40 mt-2 py-2 bg-gray-800 text-gray-400 border rounded shadow-xl" x-show="open"
                x-on:click.away="open=false" wire:click="clearPage">
                @foreach ($categories as $category)
                <a class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-400 rounded hover:bg-blue-500 hover:text-white"
                    wire:click="$set('category_id',{{$category->id}})" x-on:click="open= false">{{$category->name}}
                </a>
                @endforeach
            </div>
        </div>

        <div class="relative" x-data="{open: false}">
            <button class="block bg-gray-800 text-gray-400 shadow rounded-lg h-12 px-4 mr-4 overflow-hidden focos:outline-none"
                x-on:click="open=true">
                <i class="fas fa-tags text-sm mr-2"></i>
                  Niveles
                  <i class="fas fa-angle-down text-sm ml-2"></i>
            </button>
            <div class="absolute right-0 w-40 mt-2 py-2 bg-gray-800 text-gray-400 border rounded shadow-xl" x-show="open"
                x-on:click.away="open=false" wire:click="clearPage">
                @foreach ($levels as $level)
                <a class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-400 rounded hover:bg-blue-500 hover:text-white"
                    wire:click="$set('level_id',{{$level->id}})" x-on:click="open= false">{{$level->name}}</a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8 mt-6">
        @foreach ($courses as $course)
        <x-course-card :course="$course" />
        @endforeach
    </div>
    <div class="max-w-7xl mx-auto lg:px-8 px-4 py-3 justify-between sm:px-6 ">
        {{$courses->links()}}
    </div>
</div>