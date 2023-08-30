<script setup>
import { ref } from 'vue'

const showModal = ref(false);

function toggleModal() {
    showModal.value = !showModal.value;
}
</script>

<template>
    <div v-if="showModal">
        <!-- Main modal -->
        <div @click="toggleModal()" class="fixed h-full w-full bg-gray-800 bg-opacity-80 inset-0 z-30"></div>
        <div
            class="overflow-auto fixed md:h-full px-0 sm:px-4 top-0 left-0 right-0 md:inset-0 z-40 justify-center items-center">
            <div class="relative w-full max-w-7xl mx-auto sm:my-8 sm:px-4 h-full md:h-auto">
                <!-- Modal content -->
                <div class="bg-white sm:rounded-lg shadow relative">
                    <!-- Modal header - close header -->
                    <div class="flex p-2 sm:p-4 border-b rounded-t">
                        <button @click="toggleModal()"
                            class="text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg p-1 ml-auto">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- Modal body - pull animation -->
                    <div>
                        <div class="px-0 py-4 sm:p-8">
                            <div class="mx-auto w-[320px] h-[480px] bg-black">
                                -- Hier kommt die Karte hin --
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer - gacha card mini -->
                    <div class="border-t border-gray-200 rounded-b px-2 sm:px-8">
                        <div class="flex flex-wrap flex-row justify-center items-center content-center">
                            <div class="flex-shrink-0 flex-grow-0 my-2 sm:my-4 mx-2 w-24 h-24 bg-black">d</div>
                            <div class="flex-shrink-0 flex-grow-0 my-2 sm:my-4 mx-2 w-24 h-24 bg-black">d</div>
                            <div class="flex-shrink-0 flex-grow-0 my-2 sm:my-4 mx-2 w-24 h-24 bg-black">d</div>
                            <div class="flex-shrink-0 flex-grow-0 my-2 sm:my-4 mx-2 w-24 h-24 bg-black">d</div>
                            <div class="flex-shrink-0 flex-grow-0 my-2 sm:my-4 mx-2 w-24 h-24 bg-black">d</div>
                            <div class="flex-shrink-0 flex-grow-0 my-2 sm:my-4 mx-2 w-24 h-24 bg-black">d</div>
                            <div class="flex-shrink-0 flex-grow-0 my-2 sm:my-4 mx-2 w-24 h-24 bg-black">d</div>
                            <div class="flex-shrink-0 flex-grow-0 my-2 sm:my-4 mx-2 w-24 h-24 bg-black">d</div>
                            <div class="flex-shrink-0 flex-grow-0 my-2 sm:my-4 mx-2 w-24 h-24 bg-black">d</div>
                            <div class="flex-shrink-0 flex-grow-0 my-2 sm:my-4 mx-2 w-24 h-24 bg-black">d</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped></style>