<script setup>
</script>

<template>
    <!-- welcome and main part -->
    <div class="min-h-screen">
        <h1>Home</h1>
        <!-- news / banners -->
        <div class="bgImgCluster px-8">
            <div class="w-full mx-auto">
                <div class="grid grid-cols-6">
                    <div class="col-span-6 lg:col-span-2 h-fit bg-neutral-100 rounded-xl my-8 lg:my-auto px-8 py-4">
                        <h1 class="text-5xl font-bold my-4"><span class="text-violet-700">Neue / Limitierte</span> Karten
                        </h1>
                        <div class="border-dotted border-2 border-gray-600"></div>
                        <div class="text-xl font-semibold text-justify my-4">
                            <!-- neue karten text -->
                            Deine Sammlung ist nicht mehr vollständig? Dann ist jetzt die Chance! Ziehe die neuen Karten so
                            lange sie verfügbar sind.
                            <!-- bald deaktivierte karten text -->
                            <!-- Die folgenden Karten werden bald deaktiviert. Nutze die Chance, um deine Sammlung zu
                            vervollständigen, bevor sie nicht mehr verfügbar sind. -->
                            <!-- limitierte Karten text -->
                            <!-- Der neue limiterte Banner bietet die Möglichkeit auf limitierte Karten. Diese sind nur für eine begrenzte Zeit verfügbar.
                            Nutze die Chance, um deine Sammlung zu vervollständigen.  -->
                            <br />
                            Wähle "Details", um mehr zu erfahren.
                        </div>
                    </div>
                    <div class="col-span-6 lg:col-span-4 flex justify-around py-8">
                        <div class="w-[320px] h-[480px] bg-black mx-4">
                            -- Hier kommt die Karte hin --
                        </div>
                        <div class="hidden md:block w-[320px] h-[480px] bg-black mx-4">
                            -- Hier kommt die Karte hin --
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- gacha -->
        <!-- <img src="./banner.jpg" class="absolute opacity-50 w-[100vw] h-[100vh]" /> -->
        <div class="bgImgCluster min-h-screen px-2 lg:px-8">
            <!-- top line -->
            <div class="grid grid-cols-12 h-16 my-8">
                <div class="col-span-3 my-auto flex">
                    <img src="../assets/wishingStar.svg" class="w-16 h-16" />
                    <h2 class="text-2xl font-semibold text-white mx-4 my-auto">Gacha</h2>
                </div>
                <div class="hidden lg:flex col-span-6 mx-8 my-auto justify-between">
                    <button
                        class="bg-violet-700 bg-opacity-60 mx-2 h-16 w-40 rounded-lg py-2 border-black hover:border-2 transform-gpu duration-100">
                        <img src="https://placehold.co/128x48" class="w-32 h-12 mx-auto " />
                    </button>
                    <button
                        class="bg-violet-700 bg-opacity-60 mx-2 h-16 w-40 rounded-lg py-2 border-black hover:border-2 transform-gpu duration-100">
                        <img src="https://placehold.co/128x48" class="w-32 h-12 mx-auto " />
                    </button>
                    <button
                        class="bg-violet-700 bg-opacity-60 mx-2 h-16 w-40 rounded-lg py-2 border-black hover:border-2 transform-gpu duration-100">
                        <img src="https://placehold.co/128x48" class="w-32 h-12 mx-auto " />
                    </button>
                    <button
                        class="bg-violet-700 bg-opacity-60 mx-2 h-16 w-40 rounded-lg py-2 border-black hover:border-2 transform-gpu duration-100">
                        <img src="https://placehold.co/128x48" class="w-32 h-12 mx-auto " />
                    </button>
                </div>
                <div class="col-span-9 lg:col-span-3 px-8 my-auto ml-auto">
                    <div class="w-fit bg-gray-600 bg-opacity-60 text-white rounded-full flex pr-6 py-2">
                        <img src="https://placehold.co/32x32" class="w-8 h-8 ml-4" />
                        <h1 class="text-xl mx-4"><b>131312</b></h1>
                    </div>
                </div>
            </div>
            <!-- banner's mobile -->
            <div class="flex lg:hidden m-8 justify-between">
                <button
                    class="bg-violet-700 bg-opacity-60 mx-2 h-16 w-40 rounded-lg py-2 border-black hover:border-2 transform-gpu duration-100">
                    <img src="https://placehold.co/128x48" class="w-32 h-12 mx-auto " />
                </button>
                <button
                    class="bg-violet-700 bg-opacity-60 mx-2 h-16 w-40 rounded-lg py-2 border-black hover:border-2 transform-gpu duration-100">
                    <img src="https://placehold.co/128x48" class="w-32 h-12 mx-auto " />
                </button>
                <button
                    class="bg-violet-700 bg-opacity-60 mx-2 h-16 w-40 rounded-lg py-2 border-black hover:border-2 transform-gpu duration-100">
                    <img src="https://placehold.co/128x48" class="w-32 h-12 mx-auto " />
                </button>
                <button
                    class="bg-violet-700 bg-opacity-60 mx-2 h-16 w-40 rounded-lg py-2 border-black hover:border-2 transform-gpu duration-100">
                    <img src="https://placehold.co/128x48" class="w-32 h-12 mx-auto " />
                </button>
            </div>

            <!-- banner -->
            <div class="">
                <!-- w-[1280px] h-[580px] -->
                <!-- full-length grid -->
                <div class="w-full lg:w-4/5 mx-auto">
                    <!-- padding in grid -->
                    <div class="bgImgBanner bg-gray-200 rounded-xl">
                        <div class="grid grid-cols-6 h-full px-14">
                            <!-- left part - desc -->
                            <div class="col-span-3">
                                <div class="w-[95%] lg:w-[85%]">
                                    <!-- Tilte of Card -->
                                    <div class="my-8">
                                        <h1 class="text-5xl font-bold">Kliste nich drauf, biste 'n komischer <span
                                                class="text-violet-700">Kauz</span></h1>
                                    </div>
                                    <div class="border-dotted border-2 border-gray-600"></div>
                                    <!-- Desc -->
                                    <div class="mt-8">
                                        <h3 class="text-3xl font-bold">Standardbanner</h3>
                                        <div class="bg-violet-800 bg-opacity-75 rounded-sm text-white my-4 flex">
                                            <div class="w-[8%] my-auto ml-2">
                                                <img src="./logo.png" class="w-4 h-4" />
                                            </div>
                                            <div class="ml-2">
                                                <p class="text-2xl font-semibold">
                                                    Alle 10 Ziehungen, erhältst du sicherlich eine 4-Sterne Karte.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Desc -->
                                    <div class="text-xl font-semibold text-justify mb-8">
                                        Der Standardbanner ist dauerhaft verfügbar und bietet die Möglichkeit, alle, im
                                        Moment,
                                        aktiven Karten zu ziehen.
                                        Wähle "Details", um mehr zu erfahren.
                                    </div>
                                    <div class="border-dotted border-2 border-gray-600"></div>
                                    <!-- Timer -->
                                    <div class="my-8 text-2xl font-semibold">
                                        <p>Verbleibende Zeit:</p>
                                        <p>2d 1h 49min</p>
                                    </div>
                                </div>
                            </div>
                            <!-- right part - character -->
                            <div class="col-span-3">
                                <!-- card div on top -->
                                <div class="mx-auto my-4 w-[320px] h-[480px] bg-black">
                                    -- Hier kommt die Karte hin --
                                </div>
                                <!-- name and description -->
                                <div class="bg-violet-800 bg-opacity-75 relative my-11 px-4 w-[320px] lg:w-[380px] h-16">
                                    <div class="w-[350px] absolute -mt-8">
                                        <h1 class="text-3xl">Name der Karte dfde daa da</h1>
                                    </div>
                                    <div class="flex py-10">
                                        <img src="./logo.png" class="w-4 h-4 mx-[2px]" />
                                        <img src="./logo.png" class="w-4 h-4 mx-[2px]" />
                                        <img src="./logo.png" class="w-4 h-4 mx-[2px]" />
                                        <img src="./logo.png" class="w-4 h-4 mx-[2px]" />
                                        <img src="./logo.png" class="w-4 h-4 mx-[2px]" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Details and Pull buttons -->
            <div class="grid grid-cols-6 my-8">
                <div class="col-span-1 my-auto">
                    <button class="bg-slate-200 text-lg font-semibold py-1 px-12 rounded-3xl border-2 border-slate-400
                        hover:border-slate-800 transform-gpu duration-100
                        active:border-slate-400 active:text-white active:bg-slate-500">
                        Details
                    </button>
                </div>
                <div class="col-span-6 lg:col-span-5 flex justify-end my-4">
                    <button class="pullBtn">1x ziehen</button>
                    <button class="pullBtn">10x ziehen</button>
                    <button class="pullBtn">Bis 5-Sterne ziehen</button>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
.bgImgCluster {
    background-image: url('https://wallpapercave.com/wp/wp2722928.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

.bgImgBanner {
    background-image: url('./StandardBannerBG_Violet.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

.pullBtn {
    @apply mx-4 px-8 lg:px-12 xl:px-16 py-6 bg-neutral-100 border-2 border-yellow-500 rounded-full text-xl font-semibold text-yellow-700 transform-gpu duration-200 active:bg-orange-100;
}
</style>