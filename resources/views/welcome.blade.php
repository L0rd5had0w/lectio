<x-app-layout>
    @section('header')
    <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
        <div class="absolute top-auto w-full h-full bg-center bg-cover"
            style='background-image: url("/img/lectiowp.png");'>
            <span id="blackOverlay" class="w-full h-full absolute "></span>
        </div>
        <div class="container relative mx-auto">
            <div class="items-center flex flex-wrap">
                <<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
                    <div class="w-full md:w-3/4 lg:w-1/2">
                        <h1 class="text-white font-bold text-4xl">Academia Web: Tu mejor aliado para potenciar tus habilidades.</h1>
                        <p class="text-white text-lg mt-2 mb-4">Amplía tus habilidades con una variedad de cursos que abarcan diseño web, desarrollo de videojuegos, diseño multimedia y diseño gráfico. Avanza hacia tu crecimiento profesional con paso firme.</p>

                        @livewire('search');
                    </div>
                </div>
            </div>
        </div>
        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden text-gray-300"
            style="height: 70px; transform: translateZ(0px);">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="fill-current text-indigo-700 hidden 2xl:block" points="2560 0 2560 100 0 101"></polygon>
            </svg>
        </div>
    </div>
    @endsection

    <section class="pb-20 bg-indigo-700 -mt-24">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                                <i class="fas fa-award"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Cursos</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                Los cursos en línea son flexibles y accesibles desde cualquier lugar, adaptándose a tu horario y estilo de vida. Ofrecen una amplia variedad de temas y acceso a expertos, brindándote la oportunidad de mejorar tus habilidades en un mundo competitivo. Además, promueven la autodisciplina y organización, habilidades esenciales en el trabajo actual.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-4/12 px-4 text-center">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
                                <i class="fas fa-retweet"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Certificaciones</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                Las certificaciones son clave en informática y otros sectores, validando tus habilidades y compromiso con el aprendizaje. Reconocidas por empleadores, amplían oportunidades laborales y demuestran tu dominio en áreas específicas, generando confianza en clientes y empleadores. Son una inversión en tu futuro, garantizando reconocimiento y acceso a roles más especializados.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400">
                                <i class="fas fa-fingerprint"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Diplomados</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                Los diplomados ofrecen una formación especializada y actualizada en informática y otros sectores. Permiten profundizar en áreas clave como desarrollo de software, ciberseguridad o análisis de datos. Son accesibles y están diseñados con expertos del campo, preparándote para desafíos laborales reales. Una oportunidad para adquirir habilidades específicas y destacarse en el mercado laboral actual.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap items-center mt-32">
                <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                    <div
                        class="text-black p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100">
                        <i class="fas fa-user-friends text-xl"></i>
                    </div>
                    <h3 class="text-3xl mb-2 font-semibold leading-normal">
                        Visita nuestros ultimos cursos
                    </h3>
                    <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-white">
                        ¡Descubre nuestras últimas oportunidades formativas! Explora nuestros cursos más recientes y actualiza tus habilidades con lo último en conocimiento y práctica. Aprovecha la oportunidad de sumergirte en temáticas innovadoras y relevantes para potenciar tu crecimiento profesional. ¡Únete a nosotros y sé parte del aprendizaje continuo que marca la diferencia en tu trayectoria!
                    </p>
                    <a href="{{route('courses.index')}}" class="font-bold text-gray-800 mt-8">Ir a cursos!</a>
                </div>
                <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                    <div
                        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-pink-600">
                        <img alt="..." src="{{ asset('img/lectioqe.png') }}" class="w-full align-middle rounded-t-lg" />
                        <blockquote class="relative p-8 mb-4">
                            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95"
                                class="absolute left-0 w-full block" style="height: 95px; top: -94px">
                                <polygon points="-30,95 583,95 583,65" class="text-pink-600 fill-current"></polygon>
                            </svg>
                            <h4 class="text-xl font-bold text-white">
                                Lectio
                            </h4>
                            <p class="text-md font-light mt-2 text-white">
                                Lectio es una plataforma diseñada para llevar tu aprendizaje a un nuevo nivel. Ofrecemos un espacio digital donde la curiosidad se encuentra con el conocimiento, brindándote acceso a una amplia gama de cursos, herramientas interactivas y recursos educativos de calidad. Nuestra misión es proporcionarte una experiencia educativa enriquecedora y adaptable a tus necesidades, permitiéndote explorar temas diversos, aprender a tu propio ritmo y potenciar tus habilidades en áreas que te apasionan. Únete a Lectio y descubre un mundo de aprendizaje personalizado y transformador.
                            </p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative py-10">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px; transform: translateZ(0px)">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </section>

    <section class="pb-40">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center text-center mb-24">
                <div class="w-full lg:w-6/12 px-4">
                    <h2 class="text-4xl font-semibold">Equipo</h2>
                    <p class="text-lg leading-relaxed m-4 text-gray-600">
                        ¡Conoce a nuestro equipo en Lectio, un grupo apasionado y comprometido con la excelencia educativa! Desde nuestros instructores expertos hasta nuestro equipo de soporte dedicado, cada miembro está enfocado en brindarte la mejor experiencia de aprendizaje. Nuestros profesionales en tecnología educativa se esfuerzan por ofrecerte contenido de calidad, mientras que nuestro equipo administrativo trabaja incansablemente para garantizar tu satisfacción y éxito en cada curso. ¡Únete a nosotros y descubre el compromiso y la dedicación que define a nuestro equipo en Lectio!
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6">
                        <img alt="..." src="{{ asset('img/team1.png') }}"
                            class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px" />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Victor Blanco</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                Diseñádor
                            </p>
                            <div class="mt-6">
                                <button
                                    class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button">
                                    <i class="fab fa-twitter"></i></button><button
                                    class="bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button">
                                    <i class="fab fa-facebook-f"></i></button><button
                                    class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button">
                                    <i class="fab fa-dribbble"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6">
                        <img alt="..." src="{{ asset('img/team1.png') }}"
                            class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px" />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Victor Blanco</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                Arquitecto
                            </p>
                            <div class="mt-6">
                                <button
                                    class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button">
                                    <i class="fab fa-google"></i></button><button
                                    class="bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button">
                                    <i class="fab fa-facebook-f"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6">
                        <img alt="..." src="{{ asset('img/team1.png') }}"
                            class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px" />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Victor Blanco</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                Progrador </p>
                            <div class="mt-6">
                                <button
                                    class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button">
                                    <i class="fab fa-google"></i></button><button
                                    class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button">
                                    <i class="fab fa-twitter"></i></button><button
                                    class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button">
                                    <i class="fab fa-instagram"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6">
                        <img alt="..." src="{{ asset('img/team1.png') }}"
                            class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px" />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Victor Blanco</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                CTO </p>
                            <div class="mt-6">
                                <button
                                    class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button">
                                    <i class="fab fa-dribbble"></i></button><button
                                    class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button">
                                    <i class="fab fa-google"></i></button><button
                                    class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button">
                                    <i class="fab fa-twitter"></i></button><button
                                    class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button">
                                    <i class="fab fa-instagram"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-20 relative block bg-gray-900">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px; transform: translateZ(0px)">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-gray-900 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
            <div class="flex flex-wrap text-center justify-center">
                <div class="w-full lg:w-6/12 px-4">
                    <h2 class="text-4xl font-semibold text-white">Cursos</h2>
                    <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                        Los cursos en línea son flexibles y accesibles desde cualquier lugar, adaptándose a tu horario y estilo de vida. Ofrecen una amplia variedad de temas y acceso a expertos, brindándote la oportunidad de mejorar tus habilidades en un mundo competitivo. Además, promueven la autodisciplina y organización, habilidades esenciales en el trabajo actual.
                    </p>
                </div>
            </div>
            <div class="container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8 mt-6">
                @foreach ($courses as $course)
                <x-course-card :course="$course" />
                @endforeach
            </div>
        </div>
    </section>

    <section class="relative block py-24 lg:pt-0 bg-gray-900">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
                <div class="w-full lg:w-6/12 px-4">
                    <div class="flex flex-wrap mt-12 justify-center">

                        <div class="w-full px-4 text-center">
                            <div
                                class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                                <i class="fas fa-medal text-xl"></i>
                            </div>
                            <h6 class="text-xl mt-5 font-semibold text-white mb-4">
                                Contactanos </h6>
                        </div>
                    </div>
                    <div
                        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300">
                        <div class="flex-auto p-5 lg:p-10">
                            <h4 class="text-2xl font-semibold">Necesitas contactarnos?</h4>
                            <p class="leading-relaxed mt-1 mb-4 text-gray-600">
                                Complete este formulario y nos comunicaremos con usted en 24 horas. </p>
                            <div class="relative w-full mb-3 mt-8">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="full-name">Full
                                    Nombre</label><input type="text"
                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                    placeholder="Nombre completo" style="transition: all 0.15s ease 0s" />
                            </div>
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                    for="email">Email</label><input type="email"
                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                    placeholder="Email" style="transition: all 0.15s ease 0s" />
                            </div>
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                    for="message">Mensaje</label><textarea rows="4" cols="80"
                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                    placeholder="Escribe un mensaje..."></textarea>
                            </div>
                            <div class="text-center mt-6">
                                <button
                                    class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                                    type="button" style="transition: all 0.15s ease 0s">
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>








    {{-- <section class="mt-24">
        <div class="container py-36">
            <h1 class="text-gray-600 text-center text-3xl">Cursos</h1>
            <p class="text-center text-dark mt-2">Dirigete al catalogo de cursos</p>
            <div class="flex justify-center mt-4">
                <a href="{{route('courses.index')}}"
    class="bg-blue-500 hover:bg-blue-light text-white font-bold py-2 px-4 border-b-4 border-blue-dark hover:border-blue
    rounded">
    Button
    </a>
    </div>
    </div>
    </section> --}}

    {{-- <section class="my-24">
        <h1 class="text-gray-600 text-center text-3xl">Ultimos cursos agregados</h1>
        <p class="text-black text-center text-lg mt-2">Tenemos la opción correcta para ti, escribenos a través de
            facebook,
            instagram o por correo electrónico y te responderemos cuanto antes. </p>

        <div class="container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8 mt-6">
            @foreach ($courses as $course)
            <x-course-card :course="$course" />
            @endforeach
        </div>
    </section> --}}



</x-app-layout>