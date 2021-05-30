@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <div class="flex border-b border-gray-600 pb-12 lg:flex-row flex-col">
            <div class="flex-none">
                <img src="images/single.jpg" alt="game cover">
            </div>
            <div class="lg:ml-8 lg:mr-64 mt-4 lg:mt-0">
                <h2 class="text-3xl font-semibold leading-tight">Assasins Creed Valhalla</h2>
                <div class="text-gray-400 mt-1">
                    <span>Adventure</span>
                    &middot;
                    <span>RPG thing</span>
                    &middot;
                    <span>Playstation IV</span>
                </div>

                <div class="flex flex-wrap mt-8">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">90%</div>
                        </div>
                        <div class="ml-4 text-xs">
                            Member <br> Score
                        </div>
                    </div>
                    <div class="flex items-center ml-12">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">90%</div>
                        </div>
                        <div class="ml-4 text-xs">
                            Critic <br> Score
                        </div>
                    </div>
                    <div class="items-center space-x-4 flex lg:ml-12 mt-4 lg:mt-0">
                        <div class="w-8 h-8 flex justify-center items-center bg-gray-800 rounded-full">
                            <a href="" class="hover:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="fill-current"><path d="M13.144 8.171c-.035-.066.342-.102.409-.102.074.009-.196.452-.409.102zm-2.152-3.072l.108-.031c.064.055-.072.095-.051.136.086.155.021.248.008.332-.014.085-.104.048-.149.093-.053.066.258.075.262.085.011.033-.375.089-.304.171.096.136.824-.195.708-.176.225-.113.029-.125-.097-.19-.043-.215-.079-.547-.213-.68l.088-.102c-.206-.299-.36.362-.36.362zM24 12c0 6.627-5.373 12-12 12-6.628 0-12-5.373-12-12S5.372 0 12 0c6.627 0 12 5.373 12 12zm-8.31-5.371c-.006-.146-.19-.284-.382-.031-.135.174-.111.439-.184.557-.104.175.567.339.567.174.025-.277.732-.063.87-.025.248.069.643-.226.211-.381-.355-.13-.542-.269-.574-.523 0 0 .188-.176.106-.166-.218.027-.614.786-.614.395zM21.986 12c0-1.035-.177-2.08-.357-2.632a.611.611 0 00-.359-.378c-.256-.1-1.337.597-1.5.254-.107-.229-.324.146-.572.008-.12-.066-.454-.515-.605-.46-.309.111.474.964.688 1.076.201-.152.852-.465.992-.038.268.804-.737 1.685-1.251 2.149-.768.694-.624-.449-1.147-.852-.275-.211-.272-.66-.55-.815-.124-.07-.693-.725-.688-.813l-.017.166c-.094.071-.294-.268-.315-.321 0 .295.48.765.639 1.001.271.405.416.995.748 1.326.178.178.858.914 1.035.898.193-.017.803-.458.911-.433.644.152-1.516 3.205-1.721 3.583-.169.317.138 1.101.113 1.476-.029.433-.37.573-.693.809-.346.253-.265.745-.556.925-.517.318-.889 1.353-1.623 1.348-.216-.001-1.14.36-1.261.007-.094-.256-.22-.45-.353-.703-.13-.248-.015-.505-.173-.724-.109-.152-.475-.497-.508-.677-.002-.155.117-.626.28-.708.229-.117.044-.458.016-.656-.048-.354-.267-.646-.53-.851-.389-.299-.188-.537-.097-.964 0-.204-.124-.472-.398-.392-.564.164-.393-.44-.804-.413-.296.021-.538.209-.813.292-.346.104-.7-.082-1.042-.125-1.407-.178-1.866-1.786-1.499-2.946.037-.19-.114-.542-.048-.689.158-.352.48-.747.762-1.014.158-.15.361-.112.547-.229.287-.181.291-.553.572-.781.4-.325.946-.318 1.468-.388.278-.037 1.336-.266 1.503-.06 0 .038.191.604-.019.572.433.023 1.05.749 1.461.579.211-.088.134-.736.567-.423.262.188 1.436.272 1.68.069.15-.124.234-.93.052-1.021.116.115-.611.124-.679.098-.12-.044-.232.114-.425.025.116.055-.646-.354-.218-.667-.179.131-.346-.037-.539.107-.133.108.062.18-.128.274-.302.153-.53-.525-.644-.602-.116-.076-1.014-.706-.77-.295l.789.785c-.039.025-.207-.286-.207-.059.053-.135.02.579-.104.347-.055-.089.09-.139.006-.268 0-.085-.228-.168-.272-.226-.125-.155-.457-.497-.637-.579-.05-.023-.764.087-.824.11a1.78 1.78 0 00-.179.311 2.02 2.02 0 00-.419.214l-.157.353c-.068.061-.765.291-.769.3.029-.075-.487-.171-.453-.321.038-.165.213-.68.168-.868-.048-.197 1.074.284 1.146-.235.029-.225.046-.487-.313-.525.068.008.695-.246.799-.36.146-.168.481-.442.724-.442.284 0 .223-.413.354-.615.131.053-.07.376.087.507-.01-.103.445.057.489.033.104-.054.684-.022.594-.294-.1-.277.051-.195.181-.253-.022.009.34-.619.402-.413-.043-.212-.421.074-.553.063-.305-.024-.176-.52-.061-.665.089-.115-.243-.256-.247-.036-.006.329-.312.627-.241 1.064.108.659-.735-.159-.809-.114-.28.17-.509-.214-.364-.444.148-.235.505-.224.652-.476.104-.178.225-.385.385-.52.535-.449.683-.09 1.216-.041.521.048.176.124.104.324-.069.19.286.258.409.099a2.65 2.65 0 00.298-.494c.089-.222.901-.197.334-.536-.374-.223-2.004-.672-3.096-.672-.236 0-.401.263-.581.412-.356.295-1.268.874-1.775.698-.519-.179-1.63.66-1.808.666-.065.004.004-.634.358-.681-.153.023 1.247-.707 1.209-.859-.046-.18-2.799.822-2.676 1.023.059.092.299.092-.016.294-.18.109-.372.801-.541.801-.505.221-.537-.435-1.099.409l-.894.36a9.96 9.96 0 00-2.58 5.183c-.013.079.334.226.379.28.112.134.112.712.167.901.138.478.479.744.74 1.179.154.259.41.914.329 1.186.108-.178 1.07.815 1.246 1.022.414.487.733 1.077.061 1.559-.217.156.33 1.129.048 1.368l-.361.093c-.356.219-.195.756.021.982a9.96 9.96 0 007.22 3.087c5.517 0 9.989-4.472 9.989-9.989zM10.479 5.643c.125-.055.293-.053.311-.22.015-.148.044-.046.08-.1.035-.053-.067-.138-.11-.146-.064-.014-.108.069-.149.104l-.072.019-.068.087.008.048-.087.106c-.085.084.002.139.087.102z"/></svg>
                            </a>
                        </div>
                        <div class="w-8 h-8 flex justify-center items-center bg-gray-800 rounded-full">
                            <a href="" class="hover:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                            </a>
                        </div>
                        <div class="w-8 h-8 flex justify-center items-center bg-gray-800 rounded-full">
                            <a href="" class="hover:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                            </a>
                        </div>
                        <div class="w-8 h-8 flex justify-center items-center bg-gray-800 rounded-full">
                            <a href="" class="hover:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="fill-current"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <p class="mt-8">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, dolor! Distinctio, soluta? Porro, rem. Consequuntur nam dolor commodi cumque quasi ab temporibus, animi, porro quo ipsa, nemo aliquam aut saepe!
                </p>

                <div class="mt-12">
                    <button class="text-white flex bg-blue-400 hover:bg-blue-500 px-4 py-3 rounded transition ease-in-out duration-150">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-3 17v-10l9 5.146-9 4.854z"/></svg>
                        </div>
                        <span class="ml-2">Play Trailer</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="images border-b border-gray-700 pb-12">
            <h2 class="tracking-wide text-blue-500 uppercase font-semibold mt-2">
                Images
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mt-8">
                <div>
                    <img src="images/gamebanner.jpg" alt="banner" class="hover:opacity-75 transition ease-in-out duration-150">
                </div>
                <div>
                    <img src="images/gamebanner.jpg" alt="banner" class="hover:opacity-75 transition ease-in-out duration-150">
                </div>
                <div>
                    <img src="images/gamebanner.jpg" alt="banner" class="hover:opacity-75 transition ease-in-out duration-150">
                </div>
                <div>
                    <img src="images/gamebanner.jpg" alt="banner" class="hover:opacity-75 transition ease-in-out duration-150">
                </div>
                <div>
                    <img src="images/gamebanner.jpg" alt="banner" class="hover:opacity-75 transition ease-in-out duration-150">
                </div>
                <div>
                    <img src="images/gamebanner.jpg" alt="banner" class="hover:opacity-75 transition ease-in-out duration-150">
                </div>
            </div>
        </div>

        <div class="similar-games mt-8 pb-12 border-b border-gray-700">
            <h2 class="tracking-wide text-blue-500 uppercase font-semibold mt-2">
                similar games
            </h2>
            <div class="popular-games grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 xl:grid-cols-6 text-sm gap-12 pb-16">
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="images/single.jpg" alt="game image" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute w-16 h-16 rounded-full bg-gray-800 bottom-0 right-0" style="bottom: -20px; right: -20px">
                            <div class="font-semibold flex justify-center h-full items-center text-xs">70%</div>
                        </div>
                    </div>
                    <a href="#" class="font-semibold text-base mt-8 block hover:text-gray-400 leading-tight">Assasins Creed Valhalla</a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="images/single.jpg" alt="game image" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute w-16 h-16 rounded-full bg-gray-800 bottom-0 right-0" style="bottom: -20px; right: -20px">
                            <div class="font-semibold flex justify-center h-full items-center text-xs">70%</div>
                        </div>
                    </div>
                    <a href="#" class="font-semibold text-base mt-8 block hover:text-gray-400 leading-tight">Assasins Creed Valhalla</a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="images/single.jpg" alt="game image" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute w-16 h-16 rounded-full bg-gray-800 bottom-0 right-0" style="bottom: -20px; right: -20px">
                            <div class="font-semibold flex justify-center h-full items-center text-xs">70%</div>
                        </div>
                    </div>
                    <a href="#" class="font-semibold text-base mt-8 block hover:text-gray-400 leading-tight">Assasins Creed Valhalla</a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="images/single.jpg" alt="game image" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute w-16 h-16 rounded-full bg-gray-800 bottom-0 right-0" style="bottom: -20px; right: -20px">
                            <div class="font-semibold flex justify-center h-full items-center text-xs">70%</div>
                        </div>
                    </div>
                    <a href="#" class="font-semibold text-base mt-8 block hover:text-gray-400 leading-tight">Assasins Creed Valhalla</a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="images/single.jpg" alt="game image" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute w-16 h-16 rounded-full bg-gray-800 bottom-0 right-0" style="bottom: -20px; right: -20px">
                            <div class="font-semibold flex justify-center h-full items-center text-xs">70%</div>
                        </div>
                    </div>
                    <a href="#" class="font-semibold text-base mt-8 block hover:text-gray-400 leading-tight">Assasins Creed Valhalla</a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="images/single.jpg" alt="game image" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute w-16 h-16 rounded-full bg-gray-800 bottom-0 right-0" style="bottom: -20px; right: -20px">
                            <div class="font-semibold flex justify-center h-full items-center text-xs">70%</div>
                        </div>
                    </div>
                    <a href="#" class="font-semibold text-base mt-8 block hover:text-gray-400 leading-tight">Assasins Creed Valhalla</a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
                
            </div>
        </div>
    </div>
@endsection