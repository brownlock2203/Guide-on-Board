<template>
    <div class="px-[50px] py-[30px]">   
        
        <!-- Plugin's Title -->
        <div class="bg-white w-full h-[60px] px-[35px] mb-[35px] flex justify-between items-center border border-gray-300 mb-[20px]">
            <div class="flex flex-row space-x-5 items-center">
                <p class="text-[#282E4B] text-[18px] font-bold">Guide On Board</p>
            </div>
        </div>

        <!-- Section box -->
        <div class="relative w-full box-content flex flex-col border border-gray-400">

            <!-- The menu -->
                <div class="w-full px-[35px] py-[15px] bg-white flex flex-row justify-between border-b border-gray-300 space-x-2 items-center">
                    
                    <!-- Guide title -->
                    <div class="flex flex-row justify-start items-center space-x-2">
                        <router-link :to="{ name: 'CategoryPage' }" class="hover:cursor-pointer hover:opacity-90">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-black hover:opacity-50">
                                <path fill-rule="evenodd" d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                            </svg>
                        </router-link>
                        <p class="text-lg font-bold text-black ">{{ category.name }}</p>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7">
                            <path d="M7.82054 20.7313C8.21107 21.1218 8.84423 21.1218 9.23476 20.7313L15.8792 14.0868C17.0505 12.9155 17.0508 11.0167 15.88 9.84497L9.3097 3.26958C8.91918 2.87905 8.28601 2.87905 7.89549 3.26958C7.50497 3.6601 7.50497 4.29327 7.89549 4.68379L14.4675 11.2558C14.8581 11.6464 14.8581 12.2795 14.4675 12.67L7.82054 19.317C7.43002 19.7076 7.43002 20.3407 7.82054 20.7313Z" fill="#0F0F0F"/>
                        </svg>
                        <p class="text-lg text-black ">{{ guide.post_title }}</p>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7">
                            <path d="M7.82054 20.7313C8.21107 21.1218 8.84423 21.1218 9.23476 20.7313L15.8792 14.0868C17.0505 12.9155 17.0508 11.0167 15.88 9.84497L9.3097 3.26958C8.91918 2.87905 8.28601 2.87905 7.89549 3.26958C7.50497 3.6601 7.50497 4.29327 7.89549 4.68379L14.4675 11.2558C14.8581 11.6464 14.8581 12.2795 14.4675 12.67L7.82054 19.317C7.43002 19.7076 7.43002 20.3407 7.82054 20.7313Z" fill="#0F0F0F"/>
                        </svg>
                        <p class="text-lg text-black ">Settings</p>
                    </div>

                    <!-- shortcode and settings -->
                    <div class="flex flex-row items-center justify-center space-x-4">
                        
                        <!-- shortcode -->
                        <div class="bg-[#466801] bg-opacity-20 border-2 border-[#466801] flex flex-row items-center px-[10px] py-[5px] rounded-md space-x-2 hover:bg-opacity-30 hover:cursor-pointer">
                            <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                                <g id="Base/copy-link">
                                    <path d="M0 0H48V48H0V0Z" fill="black" fill-opacity="0.01"/>
                                    <g id="&#231;&#188;&#150;&#231;&#187;&#132; 2">
                                        <g id="&#231;&#188;&#150;&#231;&#187;&#132;">
                                            <rect id="&#231;&#159;&#169;&#229;&#189;&#162;" width="48" height="48" fill="black" fill-opacity="0.01"/>
                                            <path id="&#229;&#189;&#162;&#231;&#138;&#182;" d="M12 9.92704V7C12 5.34315 13.3431 4 15 4H41C42.6569 4 44 5.34315 44 7V33C44 34.6569 42.6569 36 41 36H38.0174" stroke="#000000" stroke-width="4"/>
                                            <rect id="Rectangle Copy" x="4" y="10" width="34" height="34" rx="3" fill="#00" stroke="#000000" stroke-width="4" stroke-linejoin="round"/>
                                        </g>
                                        <g id="&#231;&#188;&#150;&#231;&#187;&#132;_2">
                                            <g id="Group">
                                                <path id="Oval" d="M18.4396 23.1098L23.7321 17.6003C25.1838 16.1486 27.5693 16.1806 29.0604 17.6717C30.5515 19.1628 30.5835 21.5483 29.1319 23L27.2218 25.0228" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path id="Oval Copy 2" d="M13.4661 28.7469C12.9558 29.2573 11.9006 30.2762 11.9006 30.2762C10.4489 31.7279 10.4095 34.3152 11.9006 35.8063C13.3917 37.2974 15.7772 37.3294 17.2289 35.8777L22.3931 31.1894" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path id="Oval Copy" d="M18.6631 28.3283C17.9705 27.6357 17.5927 26.7501 17.5321 25.8547C17.4624 24.8225 17.8143 23.7774 18.5916 23" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path id="Oval Copy 3" d="M22.3218 25.8611C23.8129 27.3522 23.8449 29.7377 22.3932 31.1894" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <p class="text-[#466801] text-[15px] font-semibold">Copy shortcode</p>
                        </div>
                    </div>
                    <!-- Others icons -->
                    <div class="flex flex-row items-center space-x-2">

                        <!-- Eyes -->
                        <div>
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:cursor-pointer hover:opacity-70">
                                <path d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>

                        <!-- Pin -->
                        <div>
                            <svg fill="#676767" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 hover:cursor-pointer hover:opacity-70">
                                <path d="M665.5 256l-76.8 76.8v122.9a153.6 153.6 0 0 1 76.8 133h-128v153.6l-25.6 25.6-25.6-25.6V588.7h-128a153.47 153.47 0 0 1 76.8-133V332.8L358.3 256"/>
                            </svg>
                        </div>

                        <!-- menu -->
                        <div @click="isVisibility" class="flex flex-col">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:cursor-pointer hover:opacity-70">
                                <path d="M7 12C7 13.1046 6.10457 14 5 14C3.89543 14 3 13.1046 3 12C3 10.8954 3.89543 10 5 10C6.10457 10 7 10.8954 7 12Z" fill="#676767"/>
                                <path d="M14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 12Z" fill="#676767"/>
                                <path d="M21 12C21 13.1046 20.1046 14 19 14C17.8954 14 17 13.1046 17 12C17 10.8954 17.8954 10 19 10C20.1046 10 21 10.8954 21 12Z" fill="#676767"/>
                            </svg>

                            <div v-if="seek" class="absolute z-50 mt-[30px] mr-[100px] flex justify-center items-center">
                                <div class="box-content bg-white border border-[#D8D8D8] rounded-md">

                                    <!-- Edit Space -->
                                    <div class="space-x-2 flex justify-center items-center  pl-[5px] pr-[15px] py-[5px] border border-[#D8D8D8] hover:bg-[#E1E1E1] hover:cursor-pointer">
                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6">
                                            <path d="M18.3785 8.44975L11.4637 15.3647C11.1845 15.6439 10.8289 15.8342 10.4417 15.9117L7.49994 16.5L8.08829 13.5582C8.16572 13.1711 8.35603 12.8155 8.63522 12.5363L15.5501 5.62132M18.3785 8.44975L19.7927 7.03553C20.1832 6.64501 20.1832 6.01184 19.7927 5.62132L18.3785 4.20711C17.988 3.81658 17.3548 3.81658 16.9643 4.20711L15.5501 5.62132M18.3785 8.44975L15.5501 5.62132" stroke="#27CD60" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M5 20H19" stroke="#27CD60" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <p class="text-black text-[15px] font-bold">Edit</p>
                                    </div>

                                    <!-- Delete Space -->
                                    <div class="space-x-2 flex justify-center items-center pl-[5px] pr-[15px] py-[5px] border border-[#D8D8D8] hover:bg-[#E1E1E1] hover:cursor-pointer">
                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6">
                                            <path d="M18 6L17.1991 18.0129C17.129 19.065 17.0939 19.5911 16.8667 19.99C16.6666 20.3412 16.3648 20.6235 16.0011 20.7998C15.588 21 15.0607 21 14.0062 21H9.99377C8.93927 21 8.41202 21 7.99889 20.7998C7.63517 20.6235 7.33339 20.3412 7.13332 19.99C6.90607 19.5911 6.871 19.065 6.80086 18.0129L6 6M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784 15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936 3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729 3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6M14 10V17M10 10V17" stroke="#FF2121" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <p class="text-black text-[15px] font-bold">Delete</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SETTINGS CONTENT -->
                <div class="grid grid-cols-2">

                    <!-- GUIDE TEMPLATE -->
                    <div class="bg-white">
                        hello
                    </div>

                    <!-- ACCESS -->
                    <div>
                        <p class="">Définir le mode d'accessibilité à votre projet</p>
                    </div>
                </div>

            <!-- Footer -->
            <div class="bg-white w-full box-content flex justify-end items-center border-t border-gray-300">

                <!-- Back 'n Save icons -->
                <div class="pr-[30px] py-[15px] flex flex-row items-center space-x-4">

                    <!-- Back icon -->
                    <div class="border border-[#414DC7] text-[#414DC7] flex flex-row items-center px-[25px] py-[10px] rounded-lg hover:bg-[#414DC7] hover:text-white hover:cursor-pointer hover:drop-shadow-xl space-x-4 hover:-translate-x-1 hover:duration-300 duration-300">
                        <svg viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 hover:text-white">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.27 7.75737L1.0202 11.9928L5.25576 16.2426L6.67236 14.8308L4.85801 13.0103L17.1463 13.0525C17.5532 14.219 18.6604 15.0583 19.9663 15.0642C21.6231 15.0717 22.9723 13.7346 22.9798 12.0777C22.9872 10.4209 21.6501 9.07172 19.9933 9.06427C18.6867 9.05841 17.5715 9.88865 17.1547 11.0525L4.83934 11.0102L6.68182 9.17397L5.27 7.75737ZM18.9798 12.0598C18.9823 11.5075 19.432 11.0618 19.9843 11.0643C20.5366 11.0667 20.9823 11.5165 20.9798 12.0687C20.9773 12.621 20.5276 13.0667 19.9753 13.0642C19.423 13.0618 18.9773 12.612 18.9798 12.0598Z" fill="currentColor"/>
                        </svg>
                        <p class="font-semibold text-[16px]">Back</p>
                    </div>

                    <!-- Save Icon -->
                    <div class="border text-[#414DC7] border-[#414DC7] flex items-center px-[25px] py-[10px] rounded-lg hover:bg-[#414DC7] hover:text-white hover:cursor-pointer hover:drop-shadow-xl hover: space-x-4 hover:translate-x-1 hover:duration-300 duration-300">
                        <p class="font-semibold  text-[16px]">Save</p>
                        <svg viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 hover:text-white">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.73 7.75739L22.9798 11.9929L18.7443 16.2426L17.3277 14.8308L19.142 13.0103L6.85364 13.0525C6.44678 14.219 5.33954 15.0584 4.03368 15.0642C2.37684 15.0717 1.02767 13.7346 1.02023 12.0777C1.01279 10.4209 2.34989 9.07173 4.00673 9.06429C5.31328 9.05842 6.4285 9.88867 6.84531 11.0525L19.1607 11.0103L17.3182 9.17398L18.73 7.75739ZM5.02019 12.0598C5.01771 11.5075 4.56799 11.0618 4.01571 11.0643C3.46343 11.0667 3.01773 11.5165 3.02021 12.0687C3.02269 12.621 3.47242 13.0667 4.02469 13.0642C4.57697 13.0618 5.02267 12.612 5.02019 12.0598Z" fill="currentColor"/>
                        </svg>
                    </div>
                </div>
            </div>

        </div>
    </div>    
</template>

<script setup>

import { onMounted, ref } from 'vue';

import api from '../Api/api.js';

import { useRoute } from 'vue-router';

const route = useRoute();

const postId = ref(route.params.postId);

const categoryId = ref(route.params.categoryId);

const category = ref({});

const guide = ref({});

onMounted( async () => {
    
    category.value = await api.getCategoryById(categoryId.value);
    
    guide.value = await api.getGuideById(categoryId.value, postId.value);

});

const seek = ref(false);

function isVisibility() {

    seek.value = !seek.value;

}

</script>

<style lang="scss" scoped>

</style>