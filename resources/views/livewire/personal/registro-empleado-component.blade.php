<div>
    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        <!-- Navbar -->
        <nav class="relative flex flex-wrap items-center justify-between px-0 py-1 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start"
            navbar-main navbar-scroll="true">
            <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
                <nav>
                    <!-- breadcrumb -->
                    <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                        <li class="leading-normal text-sm">
                            <a class="opacity-50 text-slate-700" href="javascript:;">Pages</a>
                        </li>
                        <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']"
                            aria-current="page">Personal / Registro</li>
                    </ol>
                    <h6 class="mb-0 py-6 font-bold capitalize">Registro del Personal</h6>
                </nav>
                <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
                    <div class="flex items-center md:ml-auto md:pr-4">
                    </div>
                    <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                        <li class="flex items-center">
                            <a href="#"
                                class="block px-0 py-2 font-semibold transition-all ease-nav-brand text-sm text-slate-500">
                                <i class="fa fa-user sm:mr-1" aria-hidden="true"></i>
                                <span class="hidden sm:inline">Sign In</span>
                            </a>
                        </li>
                        <li class="flex items-center pl-4 xl:hidden">
                            <a href="javascript:;"
                                class="block p-0 transition-all ease-nav-brand text-sm text-slate-500" sidenav-trigger>
                                <div class="w-4.5 overflow-hidden">
                                    <i
                                        class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                                    <i
                                        class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                                    <i
                                        class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                                </div>
                            </a>
                        </li>
                        <li class="flex items-center px-4">
                            <a href="javascript:;" class="p-0 transition-all text-sm ease-nav-brand text-slate-500">
                                <i fixed-plugin-button-nav class="cursor-pointer fa fa-cog" aria-hidden="true"></i>
                                <!-- fixed-plugin-button-nav  -->
                            </a>
                        </li>

                        <!-- notifications -->

                        <li class="relative flex items-center pr-2">
                            <p class="hidden transform-dropdown-show"></p>
                            <a href="javascript:;"
                                class="block p-0 transition-all text-sm ease-nav-brand text-slate-500" dropdown-trigger
                                aria-expanded="false">
                                <i class="cursor-pointer fa fa-bell" aria-hidden="true"></i>
                            </a>

                            <ul dropdown-menu
                                class="text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease-soft lg:shadow-soft-3xl duration-250 min-w-44 before:sm:right-7.5 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">
                                <!-- add show class on dropdown open js -->
                                <li class="relative mb-2">
                                    <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors"
                                        href="javascript:;">
                                        <div class="flex py-1">
                                            <div class="my-auto">
                                                <img src="{{ asset('assets/img/team-2.jpg') }}"
                                                    class="inline-flex items-center justify-center mr-4 text-white text-sm h-9 w-9 max-w-none rounded-xl" />
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-1 font-normal leading-normal text-sm"><span
                                                        class="font-semibold">New message</span> from Laur</h6>
                                                <p class="mb-0 leading-tight text-xs text-slate-400">
                                                    <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li class="relative mb-2">
                                    <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700"
                                        href="javascript:;">
                                        <div class="flex py-1">
                                            <div class="my-auto">
                                                <img src="{{ asset('assets/img/small-logos/logo-spotify.svg') }}"
                                                    class="inline-flex items-center justify-center mr-4 text-white text-sm bg-gradient-to-tl from-gray-900 to-slate-800 h-9 w-9 max-w-none rounded-xl" />
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-1 font-normal leading-normal text-sm"><span
                                                        class="font-semibold">New album</span> by Travis Scott</h6>
                                                <p class="mb-0 leading-tight text-xs text-slate-400">
                                                    <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li class="relative">
                                    <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700"
                                        href="javascript:;">
                                        <div class="flex py-1">
                                            <div
                                                class="inline-flex items-center justify-center my-auto mr-4 text-white transition-all duration-200 ease-nav-brand text-sm bg-gradient-to-tl from-slate-600 to-slate-300 h-9 w-9 rounded-xl">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)"
                                                            fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background"
                                                                        d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                        opacity="0.593633743"></path>
                                                                    <path class="color-background"
                                                                        d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-1 font-normal leading-normal text-sm">Payment
                                                    successfully completed</h6>
                                                <p class="mb-0 leading-tight text-xs text-slate-400">
                                                    <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="w-full px-6 py-1 mx-auto">
            <!-- table 1 -->

            <div class="w-full px-6 mx-auto">
                <div class="flex flex-wrap -mx-3">
                    <div class="flex-none w-full max-w-full px-3">
                        <div
                            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0
                            border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">

                            @if (Session::has('message'))
                                <div class="alert alert-success font-bold py-6 leading-tight text-left text-slate-500" role="alert">{{ Session::get('message') }}</div>
                            @endif

                            <div class="flex-auto p-6">
                                <form wire:submit.prevent="storeEmpleado">
                                    <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Datos
                                        del Usuario</p>
                                    <div class="flex flex-wrap -mx-3">
                                        <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="nombre"
                                                    class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nombre</label>
                                                <input type="text" name="nombre" value="lucky.jesse"
                                                    class="focus:shadow-primary-outline  text-sm 
                                                leading-5.6 ease block w-full appearance-none rounded-lg border border-solid 
                                                border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 
                                                outline-none transition-all  focus:border-fuchsia-300 
                                                focus:outline-none focus:transition-shadow"
                                                    wire:model="nombre" />

                                                @error('nombre')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="email"
                                                    class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Correo
                                                    Electronico</label>
                                                <input type="email" name="email" value="jesse@example.com"
                                                    class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full 
                                                appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none 
                                                transition-all focus:border-fuchsia-300 
                                                focus:outline-none focus:transition-shadow "
                                                    wire:model="email" />

                                                @error('email')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="apellido_paterno"
                                                    class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Apellido
                                                    paterno</label>
                                                <input type="text" name="first apellido_paterno" value="Jesse"
                                                    class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full 
                                                appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal 
                                                text-gray-700 outline-none transition-all focus:border-fuchsia-300 
                                                focus:outline-none focus:transition-shadow "wire:model="apellido_paterno" />

                                                @error('name')
                                                    <p class="text-apellido_paterno">{{ $message }}</p>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="apellido_materno"
                                                    class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Apellido
                                                    materno</label>
                                                <input type="text" name="apellido_materno" value="Lucky"
                                                    class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg 
                                                border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all 
                                                focus:border-fuchsia-300 
                                                focus:outline-none focus:transition-shadow"wire:model="apellido_materno" />

                                                @error('apellido_materno')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <hr
                                        class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />

                                    <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">
                                        Informacion
                                        de Contacto</p>
                                    <div class="flex flex-wrap -mx-3">
                                        <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                                            <div class="mb-4">
                                                <label for="direccion"
                                                    class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Dirección</label>
                                                <input type="text" name="direccion" value="Av. cañoto"
                                                    class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none
                                                 rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none 
                                                 transition-all focus:border-fuchsia-300 
                                                 focus:outline-none focus:transition-shadow"
                                                    wire:model="direccion" />

                                                @error('direccion')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="telefono"
                                                    class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Telefono</label>
                                                <input type="number" name="telefono" value="0000000"
                                                    class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full 
                                                appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal 
                                                text-gray-700 outline-none transition-all focus:border-fuchsia-300 
                                                focus:outline-none focus:transition-shadow"wire:model="telefono" />

                                                @error('telefono')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="CI"
                                                    class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Carnet
                                                    de Identidad</label>
                                                <input type="number" name="CI" value="000000"
                                                    class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full
                                                 appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal
                                                  text-gray-700 outline-none transition-all focus:border-fuchsia-300 
                                                  focus:outline-none focus:transition-shadow"
                                                    wire:model="CI" />

                                                @error('CI')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="sueldo"
                                                    class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Sueldo</label>
                                                <input type="number" name="sueldo" value="4370"
                                                    class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full 
                                                appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal
                                                text-gray-700 outline-none transition-all focus:border-fuchsia-300 
                                                focus:outline-none focus:transition-shadow"
                                                    wire:model="sueldo" />

                                                @error('sueldo')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <hr
                                        class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />

                                    <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">a puro
                                        lapiz y papel
                                    </p>
                                    <a type="submit"
                                        class="inline-block px-8 py-2 mb-0 mr-4 font-bold text-center uppercase align-middle transition-all bg-transparent 
                                border border-solid rounded-lg shadow-none cursor-pointer leading-pro border-amber-600
                                ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs text-amber-600 hover:border-amber-600 active:bg-amber-600
                                active:hover:text-amber-600 hover:text-amber-600 tracking-tight-soft hover:bg-transparent 
                                hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent"
                                        href="{{ route('empleado') }}">Registrar</a>
                                    <button type="submit"
                                        class="inline-block px-8 py-2 mb-0 mr-4 font-bold text-center uppercase align-middle transition-all bg-transparent 
                                border border-solid rounded-lg shadow-none cursor-pointer leading-pro border-fuchsia-500 
                                ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs text-fuchsia-500 hover:border-fuchsia-500 active:bg-fuchsia-500
                                active:hover:text-fuchsia-500 hover:text-fuchsia-500 tracking-tight-soft hover:bg-transparent 
                                hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent">Registrar</button>


                                </form>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
