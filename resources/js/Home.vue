<script setup>
</script>

<template>
    <!-- welcome and main part -->
    <div class="min-h-screen">
        <h1>Home</h1>
        <!-- news / banners -->
        <!-- gacha -->
        <img src="./banner.jpg" class="absolute opacity-50 w-[100vw] h-[100vh]" />
        <div class="min-h-screen">
            <!-- top line -->
            <div class="grid grid-cols-12 h-16 bg-slate-200">
                <div class="col-span-3 mx-8 bg-gray-900 my-auto flex">
                    <img src="./logo.png" class="w-16 h-16" />
                    <h2 class="text-2xl mx-4 my-auto">Gacha</h2>
                </div>
                <div class="col-span-6 mx-8 bg-gray-700 my-auto flex">
                    <div class="bg-black mx-2 h-16 w-40 rounded-lg py-2">
                        <img src="./logo.png" class="w-32 h-12 mx-auto" />
                    </div>
                    <div class="bg-black mx-2 h-16 w-40 rounded-lg py-2">
                        <img src="./logo.png" class="w-32 h-12 mx-auto" />
                    </div>
                    <div class="bg-black mx-2 h-16 w-40 rounded-lg py-2">
                        <img src="./logo.png" class="w-32 h-12 mx-auto" />
                    </div>
                    <div class="bg-black mx-2 h-16 w-40 rounded-lg py-2">
                        <img src="./logo.png" class="w-32 h-12 mx-auto" />
                    </div>
                </div>
                <div class="col-span-3 px-8 my-auto">
                    <div class="bg-black rounded-full flex my-auto">
                        <img src="./logo.png" class="w-6 h-6 ml-4" />
                        <h1 class="mx-2 mb-1 text-white"><b>1313</b></h1>
                    </div>
                </div>
            </div>
            <!-- banner -->
            <div class="">
                <div class="bg-black mx-[19.3rem] my-[7.5rem] w-[1280px] h-[580px]">
                    <div class="grid grid-cols-6 h-full">
                        <!-- left part - desc -->
                        <div class="col-span-3 px-14 bg-black">
                            <div class="w-[85%]">
                                <!-- Tilte of Card -->
                                <div class="my-8">
                                    <h1 class="text-5xl font-bold">Treibende Perle</h1>
                                </div>
                                <!-- Desc -->
                                <div class="mt-24">
                                    <h3 class="text-3xl font-bold">Höhere Wahrscheinlichkeit</h3>
                                    <div class="bg-sky-700 my-4 flex">
                                        <div class="w-[8%] my-auto">
                                            <img src="./logo.png" class="w-4 h-4" />
                                        </div>
                                        <div>
                                            <p class="text-xl font-semibold">
                                                Alle 10 Ziehungen, erhältst du sicherlich eine 4-Sterne Karte.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Desc -->
                                <div class="text-xl font-semibold text-justify">
                                    Die Karten mit fünf Sternen kann man nur während des jeweiligen Aktionszeitraums, mit
                                    erhöhter Wahrscheinlichkeit ziehen. Wähle "Details", um mehr zu erfahren.
                                </div>
                                <!-- Timer -->
                                <div class="my-16 text-xl font-semibold">
                                    <p>Verbleibende Zeit:</p>
                                    <p>2d 1h 49min</p>
                                </div>
                            </div>
                        </div>
                        <!-- right part - character -->
                        <div class="col-span-3 bg-white px-14">
                            <!-- card div on top -->
                            <div class="mx-auto my-4 w-[320px] h-[360px] bg-black">
                                -- Hier kommt die Karte hin --
                            </div>
                            <!-- name and description -->
                            <div class="bg-gray-300 relative my-11 px-4 w-[400px] h-16">
                                <div class="w-[350px] absolute -mt-8"> <!--  -->
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
            <!-- Details and Pull buttons -->
            <div class="bg-black grid grid-cols-6 px-8">
                <div class="col-span-3 my-auto">
                    <button class="bg-slate-200 text-lg font-semibold py-1 px-12 rounded-2xl hover:bg-slate-300 transform-gpu duration-100">
                        Details
                    </button>
                </div>
                <div class="col-span-3 bg-black flex">
                    <button class="mx-4 px-12 py-4 bg-neutral-100 border-2 border-yellow-500 rounded-xl text-xl font-semibold text-yellow-700 transform-gpu duration-300 hover:bg-neutral-300">1x ziehen</button>
                    <button class="mx-4 px-12 py-4 bg-neutral-100 border-2 border-yellow-500 rounded-xl text-xl font-semibold text-yellow-700 transform-gpu duration-300 hover:bg-neutral-300">10x ziehen</button>
                    <button class="mx-4 px-12 py-4 bg-neutral-100 border-2 border-yellow-500 rounded-xl text-xl font-semibold text-yellow-700 transform-gpu duration-300 hover:bg-neutral-300">Bis 5-Sterne ziehen</button>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
</style>