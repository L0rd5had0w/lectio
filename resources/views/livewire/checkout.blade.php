<div class="flex justify-center my-6 mt-20">

    <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
        <div class="flex-1">
            <table class="w-full text-sm lg:text-base" cellspacing="0">
                <thead>
                    <tr class="h-12 uppercase">
                        <th class="hidden md:table-cell"></th>
                        <th class="text-left">Nombre</th>
                        <th class="text-right">Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="hidden pb-4 md:table-cell">
                            <a href="#">
                                <img src="{{Storage::url($course->image->url)}}" class="w-24 rounded" alt="Thumbnail">
                            </a>
                        </td>
                        <td>
                            <a href="#">
                                <p class="mb-2 md:ml-4">{{$course->name}}</p>
                            </a>
                        </td>
                        <td class="text-right">
                            <span class="text-sm lg:text-base font-medium">
                                {!! $course->description !!}
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <hr class="pb-6 mt-6">
            <div class="my-4 mt-6 -mx-2 lg:flex">
                <div class="lg:px-2 lg:w-1/2">
                    <div class="p-4 bg-gray-100 rounded-full">
                        <h1 class="ml-2 font-bold uppercase">Cupón</h1>
                    </div>
                    <div class="p-4">
                        <p class="mb-4 italic">Si tienes el codigo de un cupon onegaishimasu ingresalo aqui.</p>
                        <div class="justify-center md:flex">
                            <div class="flex items-center w-full h-13 pl-3  bg-gray-100 border rounded-full">
                                <input type="coupon" name="code" id="coupon" placeholder="Aplicar cupón"
                                    wire:model="search"
                                    class="w-full bg-gray-100 outline-none appearance-none focus:outline-none active:outline-none" />
                                <button wire:click="addCoupon()" type="submit"
                                    class="text-sm flex items-center px-3 py-1 text-white bg-gray-800 rounded-full outline-none md:px-4 hover:bg-gray-700 focus:outline-none active:outline-none">
                                    <svg aria-hidden="true" data-prefix="fas" data-icon="gift" class="w-8"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="M32 448c0 17.7 14.3 32 32 32h160V320H32v128zm256 32h160c17.7 0 32-14.3 32-32V320H288v160zm192-320h-42.1c6.2-12.1 10.1-25.5 10.1-40 0-48.5-39.5-88-88-88-41.6 0-68.5 21.3-103 68.3-34.5-47-61.4-68.3-103-68.3-48.5 0-88 39.5-88 88 0 14.5 3.8 27.9 10.1 40H32c-17.7 0-32 14.3-32 32v80c0 8.8 7.2 16 16 16h480c8.8 0 16-7.2 16-16v-80c0-17.7-14.3-32-32-32zm-326.1 0c-22.1 0-40-17.9-40-40s17.9-40 40-40c19.9 0 34.6 3.3 86.1 80h-86.1zm206.1 0h-86.1c51.4-76.5 65.7-80 86.1-80 22.1 0 40 17.9 40 40s-17.9 40-40 40z" />
                                    </svg>
                                    <span class="font-medium">Aplicar Cupón</span>
                                </button>
                            </div>
                        </div>
                        @error('exist')
                        <span class="error text-red-500">{{ $message }}</span>
                        @enderror
                        @error('cuponNotFound')
                        <span class="error text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="lg:px-2 lg:w-1/2">
                    <div class="p-4 bg-gray-100 rounded-full">
                        <h1 class="ml-2 font-bold uppercase">Detalles</h1>
                    </div>
                    <div class="p-4">
                        @if ($active)
                        <div class="flex justify-between border-b">
                            <div class="lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-center text-gray-800">
                                Subtotal
                            </div>
                            <div class="lg:px-4 lg:py-2 m-2 lg:text-lg font-bold text-center text-gray-900">
                                ${{$course->price}}
                            </div>
                        </div>
                        <div class="flex justify-between pt-4 border-b">
                            <div class="flex lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-gray-800">
                                <button wire:click='clearActive' type="submit" class="mr-2 mt-1 lg:mt-2">
                                    <svg aria-hidden="true" data-prefix="far" data-icon="trash-alt"
                                        class="w-4 text-red-600 hover:text-red-800" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 448 512">
                                        <path fill="currentColor"
                                            d="M268 416h24a12 12 0 0012-12V188a12 12 0 00-12-12h-24a12 12 0 00-12 12v216a12 12 0 0012 12zM432 80h-82.41l-34-56.7A48 48 0 00274.41 0H173.59a48 48 0 00-41.16 23.3L98.41 80H16A16 16 0 000 96v16a16 16 0 0016 16h16v336a48 48 0 0048 48h288a48 48 0 0048-48V128h16a16 16 0 0016-16V96a16 16 0 00-16-16zM171.84 50.91A6 6 0 01177 48h94a6 6 0 015.15 2.91L293.61 80H154.39zM368 464H80V128h288zm-212-48h24a12 12 0 0012-12V188a12 12 0 00-12-12h-24a12 12 0 00-12 12v216a12 12 0 0012 12z" />
                                    </svg>
                                </button>
                                "{{$active->code}}"
                            </div>
                            @if ($active->type==0)
                            <div class="lg:px-4 lg:py-2 m-2 lg:text-lg font-bold text-center text-green-700">
                                - $ {{$active->discount}}
                            </div>
                            @else
                            <div class="lg:px-4 lg:py-2 m-2 lg:text-lg font-bold text-center text-green-700">
                                - {{$active->discount}}%
                            </div>
                            @endif
                        </div>
                        @endif
                        <div class="flex justify-between pt-4 border-b">
                            <div class="lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-center text-gray-800">
                                Total
                            </div>
                            <div class="lg:px-4 lg:py-2 m-2 lg:text-lg font-bold text-center text-gray-900">
                                ${{$total}}
                            </div>
                        </div>

                        @if ($total <=0) <form method="POST" action="{{route('course.enrolled',$course)}}">
                            @csrf
                            {{-- <input type="hidden" name="coupon_id" value='{{$active->id}}'> --}}
                            <button type="submit"
                                class="flex justify-center w-full px-10 py-3 mt-6 font-medium text-white uppercase bg-gray-800 rounded-full shadow item-center hover:bg-gray-700 focus:shadow-outline focus:outline-none">
                                <svg aria-hidden="true" data-prefix="far" data-icon="credit-card" class="w-8"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M527.9 32H48.1C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48.1 48h479.8c26.6 0 48.1-21.5 48.1-48V80c0-26.5-21.5-48-48.1-48zM54.1 80h467.8c3.3 0 6 2.7 6 6v42H48.1V86c0-3.3 2.7-6 6-6zm467.8 352H54.1c-3.3 0-6-2.7-6-6V256h479.8v170c0 3.3-2.7 6-6 6zM192 332v40c0 6.6-5.4 12-12 12h-72c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h72c6.6 0 12 5.4 12 12zm192 0v40c0 6.6-5.4 12-12 12H236c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h136c6.6 0 12 5.4 12 12z" />
                                </svg>
                                <span class="ml-2 mt-5px">Inscribirse</span>
                            </button>
                            </form>
                            @else
                            <form action="{{route('payment.course.pay',$course)}}" method="post">
                                @csrf
                                <input name='finalprice' type="text" wire:model='total' class='hidden'>
                                <input name='coupon' type="text" wire:model='couponId' class='hidden'>
                                <button type="submit"
                                    class="flex justify-center w-full px-10 py-3 mt-6 font-medium text-white uppercase bg-gray-800 rounded-full shadow item-center hover:bg-gray-700 focus:shadow-outline focus:outline-none">
                                    <svg aria-hidden="true" data-prefix="far" data-icon="credit-card" class="w-8"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="currentColor"
                                            d="M527.9 32H48.1C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48.1 48h479.8c26.6 0 48.1-21.5 48.1-48V80c0-26.5-21.5-48-48.1-48zM54.1 80h467.8c3.3 0 6 2.7 6 6v42H48.1V86c0-3.3 2.7-6 6-6zm467.8 352H54.1c-3.3 0-6-2.7-6-6V256h479.8v170c0 3.3-2.7 6-6 6zM192 332v40c0 6.6-5.4 12-12 12h-72c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h72c6.6 0 12 5.4 12 12zm192 0v40c0 6.6-5.4 12-12 12H236c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h136c6.6 0 12 5.4 12 12z" />
                                    </svg>
                                    <span class="ml-2 mt-5px">Proceder a pagar</span>
                                </button>
                            </form>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>