@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>

        <div class="popular-games text-sm grid grid-cols-6 gap-12 border-b border-gray-800 pb-16">
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 bg-gray-800 w-16 h-16 rounded-full" style="right: -20px; bottom: -20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                    </div>
                </div>

                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy VII Remake
                </a>
                <div class="text-gray-400 mt-1">
                    PS4
                </div>
            </div>
        </div> {{-- end popular games section --}}

        <div class="flex my-10">
            <div class="recently-reviewed w-3/4 mr-32">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>

                <div class="recently-reviewed-container space-y-12 mt-8">
                    {{-- Game section --}}
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="/ff7.jpg" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="absolute bottom-0 right-0 bg-gray-900 w-16 h-16 rounded-full" style="right: -20px; bottom: -20px;">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                            </div>
                        </div>

                        {{-- Contents --}}
                        <div class="ml-12">
                            {{-- Title --}}
                            <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                                Final Fantasy VII Remake
                            </a>

                            {{-- Device type --}}
                            <div class="text-xs text-gray-400 mt-1">PS4</div>

                            {{-- Description --}}
                            <div class="text-gray-400">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque cum alias corporis necessitatibus laudantium minima nulla a doloribus, deserunt sint laborum harum modi expedita, sequi ullam accusantium molestias perspiciatis aspernatur quaerat placeat, vel minus id debitis. Ab expedita harum et ipsum praesentium, mollitia repudiandae. Facilis magnam porro earum ut libero?
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="most-anticipated w-1/4 ">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed consectetur odit esse magni tenetur aliquam quis libero officia illo, accusamus porro facilis suscipit non eos eaque iusto quaerat eligendi mollitia vel incidunt reprehenderit debitis. Praesentium illo quisquam ipsam, alias nostrum minus sit similique, labore veniam, nemo quam qui laudantium quia!
            </div>
        </div>
    </div>


@endsection
