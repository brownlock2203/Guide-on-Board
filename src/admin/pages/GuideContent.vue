<template>

    <!--  -->
    <div class="px-[50px] py-[30px]">   
        
        <!-- Plugin's Title -->
        <div class="bg-white w-full h-[60px] px-[35px] mb-[35px] flex justify-between items-center border border-gray-300 mb-[20px]">
            <div class="flex flex-row space-x-5 items-center">
                <p class="text-[#282E4B] text-[18px] font-bold">Guide On Board</p>
            </div>
        </div>

        <!-- Section box -->
        <div class="relative w-full box-content flex flex-col border border-gray-400 mb-[20px] pb-[50px]">

            <!-- The menu -->
                <div class="w-full px-[35px] py-[15px] mb-[15px] bg-white flex flex-row justify-between border-b border-gray-300 space-x-2 items-center">
                    
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
                    
                        <!-- settings -->
                        <div class="bg-[#016464] bg-opacity-20 border border-[#016464] flex flex-row items-center px-[10px] py-[5px] rounded-lg space-x-2 hover:bg-opacity-30 hover:cursor-pointer">
                            <svg fill="#016464" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 font-bold">
                                <path d="M22.5 15c-.822 0-1.5.678-1.5 1.5v.785c-.393.114-.77.267-1.13.465l-.313-.314c-.582-.582-1.54-.582-2.12 0-.583.58-.583 1.54 0 2.12l.313.315c-.2.36-.354.736-.47 1.13h-.78c-.822 0-1.5.678-1.5 1.5s.678 1.5 1.5 1.5h.785c.114.393.267.77.465 1.13l-.314.313c-.582.582-.582 1.54 0 2.12.58.583 1.54.583 2.12 0l.315-.313c.36.2.736.354 1.13.47v.78c0 .822.678 1.5 1.5 1.5s1.5-.678 1.5-1.5v-.785c.393-.114.77-.267 1.13-.465l.313.314c.582.582 1.54.582 2.12 0 .583-.58.583-1.54 0-2.12l-.313-.315c.2-.36.354-.736.47-1.13h.78c.822 0 1.5-.678 1.5-1.5s-.678-1.5-1.5-1.5h-.785c-.114-.393-.267-.77-.465-1.13l.314-.313c.582-.582.582-1.54 0-2.12-.58-.583-1.54-.583-2.12 0l-.315.313c-.36-.2-.736-.354-1.13-.47v-.78c0-.822-.678-1.5-1.5-1.5zm0 1c.286 0 .5.214.5.5v1c0 .328.084.508.38.588.57.115 1.112.34 1.597.66.198.132.462.106.63-.062l.543-.543c.202-.202.505-.202.707 0 .202.202.202.505 0 .707l-.543.543c-.168.167-.195.43-.064.628.32.486.544 1.028.658 1.597.08.302.344.383.592.383h1c.286 0 .5.214.5.5 0 .286-.214.5-.5.5h-1c-.394 0-.528.158-.588.38-.115.57-.34 1.112-.66 1.597-.132.198-.106.462.062.63l.543.543c.202.202.202.505 0 .707-.202.202-.505.202-.707 0l-.543-.543c-.167-.168-.43-.195-.628-.064-.486.32-1.028.544-1.597.658-.264.07-.383.34-.383.592v1c0 .286-.214.5-.5.5-.286 0-.5-.214-.5-.5v-1c0-.37-.138-.523-.38-.588-.57-.115-1.112-.34-1.597-.66-.198-.132-.462-.106-.63.062l-.543.543c-.202.202-.505.202-.707 0-.202-.202-.202-.505 0-.707l.543-.543c.168-.167.195-.43.064-.628-.32-.486-.544-1.028-.658-1.597-.05-.252-.262-.383-.592-.383h-1c-.286 0-.5-.214-.5-.5 0-.286.214-.5.5-.5h1c.445 0 .524-.143.588-.38.115-.57.34-1.112.66-1.597.132-.198.106-.462-.062-.63l-.543-.543c-.202-.202-.202-.505 0-.707.202-.202.505-.202.707 0l.543.543c.167.168.43.195.628.064.486-.32 1.028-.544 1.597-.658.402-.092.383-.406.383-.592v-1c0-.286.214-.5.5-.5zm0 4c-1.375 0-2.5 1.125-2.5 2.5s1.125 2.5 2.5 2.5 2.5-1.125 2.5-2.5-1.125-2.5-2.5-2.5zm0 1c.834 0 1.5.666 1.5 1.5s-.666 1.5-1.5 1.5-1.5-.666-1.5-1.5.666-1.5 1.5-1.5zm-10-13C10.02 8 8 10.02 8 12.5s2.02 4.5 4.5 4.5 4.5-2.02 4.5-4.5S14.98 8 12.5 8zm0 1c1.94 0 3.5 1.56 3.5 3.5S14.44 16 12.5 16 9 14.44 9 12.5 10.56 9 12.5 9zm-1-9c-.822 0-1.5.678-1.5 1.5v1.91c-.763.21-1.494.51-2.182.9L5.943 2.437c-.582-.582-1.54-.582-2.123 0L2.406 3.85c-.58.58-.58 1.54 0 2.12l1.887 1.887c-.382.677-.68 1.394-.887 2.143H1.5c-.822 0-1.5.678-1.5 1.5v2c0 .822.678 1.5 1.5 1.5h1.908c.207.757.507 1.48.893 2.164l-1.894 1.893c-.582.582-.582 1.54 0 2.123l1.414 1.414c.582.582 1.54.582 2.123 0l1.897-1.9c.68.39 1.404.69 2.16.898V23.5c0 .822.678 1.5 1.5 1.5h2c.664 0 .66-1 0-1h-2c-.286 0-.5-.214-.5-.5v-2.234c0-.234-.16-.437-.39-.49-.93-.212-1.82-.58-2.63-1.09-.196-.124-.452-.095-.617.068l-.006.01-.003.004-2.118 2.12c-.2.2-.507.2-.71 0l-1.413-1.415c-.2-.202-.2-.508 0-.71l2.123-2.12.004-.004.002-.003c.162-.165.19-.42.067-.616-.508-.81-.874-1.7-1.085-2.63-.052-.23-.255-.39-.49-.39H1.5c-.286 0-.5-.214-.5-.5v-2c0-.286.214-.5.5-.5h2.234c.234 0 .437-.16.49-.39.21-.923.574-1.806 1.077-2.61.125-.198.095-.454-.07-.62L3.113 5.265c-.202-.202-.202-.505 0-.707l1.414-1.414c.202-.202.508-.202.71 0L7.34 5.248c.165.165.42.194.62.07.814-.512 1.71-.88 2.647-1.093.228-.052.39-.255.39-.49V1.5c0-.286.214-.5.5-.5h2c.286 0 .5.214.5.5v2.234c0 .234.16.437.39.49.93.212 1.817.58 2.626 1.089.197.123.454.094.62-.07l2.1-2.1c.202-.202.505-.202.707 0l1.414 1.414c.202.202.202.505 0 .707L19.764 7.36c-.165.164-.194.42-.07.62.506.81.87 1.697 1.08 2.63.053.228.256.39.49.39H23.5c.286 0 .5.214.5.5v2c0 .668 1 .652 1 0v-2c0-.822-.678-1.5-1.5-1.5h-1.908c-.207-.756-.505-1.48-.89-2.164l1.862-1.865c.582-.58.582-1.54 0-2.12L21.15 2.436c-.58-.582-1.54-.582-2.12 0l-1.87 1.87c-.68-.39-1.405-.69-2.16-.898V1.5c0-.822-.678-1.5-1.5-1.5z"/>
                            </svg>
                            <p class="text-[#016464] text-[15px] font-semibold">Settings</p>
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
            

                <!-- SECTION PART -->

                <!-- Add section -->
                <div @click="ShowPopupCreate" class="shadow-md w-fit mx-auto px-[10px] py-[10px] flex justify-center items-center hover:cursor-pointer hover:bg-opacity-20 space-x-2 bg-[#04A56B] bg-opacity-10 p-[5px] rounded-lg">
                    <p class="text-[15px] text-black font-bold">Ajouter une section</p>
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8">
                        <path d="M15 12H12M12 12H9M12 12V9M12 12V15M17 21H7C4.79086 21 3 19.2091 3 17V7C3 4.79086 4.79086 3 7 3H17C19.2091 3 21 4.79086 21 7V17C21 19.2091 19.2091 21 17 21Z" stroke="#000000" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
                
                <div v-for="(section, index) in sections" :key="`section-${section.id}-${index}`" >
                    
                    <!-- Section icon and content Space -->
                    <div class="flex justify-between ml-[30px] bg-white pl-[30px] pr-[50px] py-[10px] flex items-center border-t border-l border-b border-gray-300 mt-[15px]">
                        
                        <!-- Folder and Section Name -->
                        <div class="flex flex-row items-center space-x-4">
                            <svg viewBox="0 0 1024 1024" class="icon w-10 h-10" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <path d="M853.333333 256H469.333333l-85.333333-85.333333H170.666667c-46.933333 0-85.333333 38.4-85.333334 85.333333v170.666667h853.333334v-85.333334c0-46.933333-38.4-85.333333-85.333334-85.333333z" fill="#FFA000" />
                                <path d="M853.333333 256H170.666667c-46.933333 0-85.333333 38.4-85.333334 85.333333v426.666667c0 46.933333 38.4 85.333333 85.333334 85.333333h682.666666c46.933333 0 85.333333-38.4 85.333334-85.333333V341.333333c0-46.933333-38.4-85.333333-85.333334-85.333333z" fill="#FFCA28" />
                            </svg>
                            <p class="text-black font-bold text-[15px]">{{ section.title }}</p>
                        </div>
                        
                        <!-- Others Icons -->
                        <div class="flex flex-row space-x-4">

                            <!-- Show sous_section -->
                            <div class="bg-[#9ACD32] bg-opacity-10 p-[5px] rounded-lg hover:cursor-pointer hover:bg-opacity-20" @click="() => show_sous_section(section.id, section.sous_section, section.etape)" :class="{ 'transition-transform duration-500': true, 'transform rotate-0': !sous_section, 'transform rotate-180': sous_section }">
                                <svg v-if="!sous_section" fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" class="h-6 w-6">
                                    <g>
                                        <g>
                                            <path d="M505.752,358.248L271.085,123.582c-8.331-8.331-21.839-8.331-30.17,0L6.248,358.248c-8.331,8.331-8.331,21.839,0,30.17s21.839,8.331,30.17,0L256,168.837l219.582,219.582c8.331,8.331,21.839,8.331,30.17,0S514.083,366.58,505.752,358.248z"/>
                                        </g>
                                    </g>
                                </svg>
                                <svg v-if="sous_section" fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512.011 512.011" xml:space="preserve" class="h-6 w-6">
                                    <g>
                                        <g>
                                            <path d="M505.752,358.248L271.085,123.582c-8.331-8.331-21.839-8.331-30.17,0L6.248,358.248c-8.331,8.331-8.331,21.839,0,30.17s21.839,8.331,30.17,0L256,168.837l219.582,219.582c8.331,8.331,21.839,8.331,30.17,0S514.083,366.58,505.752,358.248z"/>
                                        </g>
                                    </g>
                                </svg>
                            </div>
        
                            <!-- Edit Icon -->
                            <div class="bg-[#04A56B] bg-opacity-10 p-[5px] rounded-lg hover:cursor-pointer hover:bg-opacity-20" @click="ShowPopupEdit(section.id)">

                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6">
                                    <path d="M18.3785 8.44975L11.4637 15.3647C11.1845 15.6439 10.8289 15.8342 10.4417 15.9117L7.49994 16.5L8.08829 13.5582C8.16572 13.1711 8.35603 12.8155 8.63522 12.5363L15.5501 5.62132M18.3785 8.44975L19.7927 7.03553C20.1832 6.64501 20.1832 6.01184 19.7927 5.62132L18.3785 4.20711C17.988 3.81658 17.3548 3.81658 16.9643 4.20711L15.5501 5.62132M18.3785 8.44975L15.5501 5.62132" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M5 20H19" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>                            
        
                            <!-- Trash Icon -->
                            <button>
                                <div class="bg-[#FF2121] bg-opacity-10 p-[5px] rounded-lg hover:cursor-pointer hover:bg-opacity-20" @click="() => del_Section(section.id)">
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6">
                                        <path d="M18 6L17.1991 18.0129C17.129 19.065 17.0939 19.5911 16.8667 19.99C16.6666 20.3412 16.3648 20.6235 16.0011 20.7998C15.588 21 15.0607 21 14.0062 21H9.99377C8.93927 21 8.41202 21 7.99889 20.7998C7.63517 20.6235 7.33339 20.3412 7.13332 19.99C6.90607 19.5911 6.871 19.065 6.80086 18.0129L6 6M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784 15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936 3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729 3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6M14 10V17M10 10V17" stroke="#FF2121" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>         
                    <!-- Sous-Section icon and content Space -->
                    <div v-if="sectionId === section.id && sous_section" class="flex justify-between ml-[60px] bg-white pl-[30px] pr-[50px] py-[10px] flex items-center border-t border-l border-b border-gray-300 mt-[15px]">
                        
                        <!-- Folder and Section Name -->
                        <div class="flex flex-row items-center space-x-4">
                            <svg viewBox="0 0 1024 1024" class="icon w-10 h-10"  version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <path d="M853.333333 256H469.333333l-85.333333-85.333333H170.666667c-46.933333 0-85.333333 38.4-85.333334 85.333333v170.666667h853.333334v-85.333334c0-46.933333-38.4-85.333333-85.333334-85.333333z" fill="#FFA000" />
                                <path d="M853.333333 256H170.666667c-46.933333 0-85.333333 38.4-85.333334 85.333333v426.666667c0 46.933333 38.4 85.333333 85.333334 85.333333h682.666666c46.933333 0 85.333333-38.4 85.333334-85.333333V341.333333c0-46.933333-38.4-85.333333-85.333334-85.333333z" fill="#FFCA28" />
                            </svg>
                            <p class="text-black font-bold text-[15px]">{{ section.sous_section }}</p>
<!--     
                            {{ console.log(sectionId) }}
    
                            {{ console.log(s_s_content) }}
    
                            {{ console.log(step_content) }} -->
    
                        </div>
                        
                        <!-- Others Icons -->
                        <div class="flex flex-row space-x-4">
    
                            <!-- Show step -->
                            <div class="bg-[#04A56B] bg-opacity-10 p-[5px] rounded-lg hover:cursor-pointer hover:bg-opacity-20" @click="Show_step" :class="{ 'transition-transform duration-500': true, 'transform rotate-0': !step, 'transform rotate-180': step }">
                                    <svg v-if="!step" fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" class="h-6 w-6">
                                        <g>
                                            <g>
                                                <path d="M505.752,358.248L271.085,123.582c-8.331-8.331-21.839-8.331-30.17,0L6.248,358.248c-8.331,8.331-8.331,21.839,0,30.17s21.839,8.331,30.17,0L256,168.837l219.582,219.582c8.331,8.331,21.839,8.331,30.17,0S514.083,366.58,505.752,358.248z"/>
                                            </g>
                                        </g>
                                    </svg>
                                    <svg v-else fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512.011 512.011" xml:space="preserve" class="h-6 w-6">
                                        <g>
                                            <g>
                                                <path d="M505.752,358.248L271.085,123.582c-8.331-8.331-21.839-8.331-30.17,0L6.248,358.248c-8.331,8.331-8.331,21.839,0,30.17s21.839,8.331,30.17,0L256,168.837l219.582,219.582c8.331,8.331,21.839,8.331,30.17,0S514.083,366.58,505.752,358.248z"/>
                                            </g>
                                        </g>
                                    </svg>                                
                            </div>
        
                            <!-- Edit Icon -->
                            <div class="bg-[#04A56B] bg-opacity-10 p-[5px] rounded-lg hover:cursor-pointer hover:bg-opacity-20">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6">
                                    <path d="M18.3785 8.44975L11.4637 15.3647C11.1845 15.6439 10.8289 15.8342 10.4417 15.9117L7.49994 16.5L8.08829 13.5582C8.16572 13.1711 8.35603 12.8155 8.63522 12.5363L15.5501 5.62132M18.3785 8.44975L19.7927 7.03553C20.1832 6.64501 20.1832 6.01184 19.7927 5.62132L18.3785 4.20711C17.988 3.81658 17.3548 3.81658 16.9643 4.20711L15.5501 5.62132M18.3785 8.44975L15.5501 5.62132" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M5 20H19" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
        
                            <!-- Add Icon -->
                            <div class="bg-[#9ACD32] bg-opacity-10 p-[5px] rounded-lg hover:cursor-pointer hover:bg-opacity-20">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6">
                                    <path d="M15 12H12M12 12H9M12 12V9M12 12V15M17 21H7C4.79086 21 3 19.2091 3 17V7C3 4.79086 4.79086 3 7 3H17C19.2091 3 21 4.79086 21 7V17C21 19.2091 19.2091 21 17 21Z" stroke="#1D5B44" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </div>
        
                            <!-- Trash Icon -->
                            <div class="bg-[#FF2121] bg-opacity-10 p-[5px] rounded-lg hover:cursor-pointer hover:bg-opacity-20">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6">
                                    <path d="M18 6L17.1991 18.0129C17.129 19.065 17.0939 19.5911 16.8667 19.99C16.6666 20.3412 16.3648 20.6235 16.0011 20.7998C15.588 21 15.0607 21 14.0062 21H9.99377C8.93927 21 8.41202 21 7.99889 20.7998C7.63517 20.6235 7.33339 20.3412 7.13332 19.99C6.90607 19.5911 6.871 19.065 6.80086 18.0129L6 6M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784 15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936 3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729 3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6M14 10V17M10 10V17" stroke="#FF2121" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                
    
                    <!-- Step icon and content Space -->
                    <div v-if="sectionId === section.id && step" class="flex justify-between ml-[100px] pl-[30px] pr-[50px] py-[10px] flex items-center mt-[15px]">
                        
                        <!-- Folder and Section Name -->
                        <div class="flex flex-row items-center space-x-4">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 102.17 122.88" class="w-8 h-8">
                                <path d="M102.17,29.66A3,3,0,0,0,100,26.79L73.62,1.1A3,3,0,0,0,71.31,0h-46a5.36,5.36,0,0,0-5.36,5.36V20.41H5.36A5.36,5.36,0,0,0,0,25.77v91.75a5.36,5.36,0,0,0,5.36,5.36H76.9a5.36,5.36,0,0,0,5.33-5.36v-15H96.82a5.36,5.36,0,0,0,5.33-5.36q0-33.73,0-67.45ZM25.91,20.41V6h42.4V30.24a3,3,0,0,0,3,3H96.18q0,31.62,0,63.24h-14l0-46.42a3,3,0,0,0-2.17-2.87L53.69,21.51a2.93,2.93,0,0,0-2.3-1.1ZM54.37,30.89,72.28,47.67H54.37V30.89ZM6,116.89V26.37h42.4V50.65a3,3,0,0,0,3,3H76.26q0,31.64,0,63.24ZM17.33,69.68a2.12,2.12,0,0,1,1.59-.74H54.07a2.14,2.14,0,0,1,1.6.73,2.54,2.54,0,0,1,.63,1.7,2.57,2.57,0,0,1-.64,1.7,2.16,2.16,0,0,1-1.59.74H18.92a2.15,2.15,0,0,1-1.6-.73,2.59,2.59,0,0,1,0-3.4Zm0,28.94a2.1,2.1,0,0,1,1.58-.74H63.87a2.12,2.12,0,0,1,1.59.74,2.57,2.57,0,0,1,.64,1.7,2.54,2.54,0,0,1-.63,1.7,2.14,2.14,0,0,1-1.6.73H18.94a2.13,2.13,0,0,1-1.59-.73,2.56,2.56,0,0,1,0-3.4ZM63.87,83.41a2.12,2.12,0,0,1,1.59.74,2.59,2.59,0,0,1,0,3.4,2.13,2.13,0,0,1-1.6.72H18.94a2.12,2.12,0,0,1-1.59-.72,2.55,2.55,0,0,1-.64-1.71,2.5,2.5,0,0,1,.65-1.69,2.1,2.1,0,0,1,1.58-.74ZM17.33,55.2a2.15,2.15,0,0,1,1.59-.73H39.71a2.13,2.13,0,0,1,1.6.72,2.61,2.61,0,0,1,0,3.41,2.15,2.15,0,0,1-1.59.73H18.92a2.14,2.14,0,0,1-1.6-.72,2.61,2.61,0,0,1,0-3.41Zm0-14.47A2.13,2.13,0,0,1,18.94,40H30.37a2.12,2.12,0,0,1,1.59.72,2.61,2.61,0,0,1,0,3.41,2.13,2.13,0,0,1-1.58.73H18.94a2.16,2.16,0,0,1-1.59-.72,2.57,2.57,0,0,1-.64-1.71,2.54,2.54,0,0,1,.65-1.7ZM74.3,10.48,92.21,27.26H74.3V10.48Z"/>
                            </svg>
                            <p class="text-black font-bold text-[15px]">{{ section.etape }}</p>
                        </div>
                        
                        <!-- Others Icons -->
                        <div class="flex flex-row space-x-4">
        
                            <!-- Edit Icon -->
                            <div class="bg-[#04A56B] bg-opacity-10 p-[5px] rounded-lg hover:cursor-pointer hover:bg-opacity-20">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6">
                                    <path d="M18.3785 8.44975L11.4637 15.3647C11.1845 15.6439 10.8289 15.8342 10.4417 15.9117L7.49994 16.5L8.08829 13.5582C8.16572 13.1711 8.35603 12.8155 8.63522 12.5363L15.5501 5.62132M18.3785 8.44975L19.7927 7.03553C20.1832 6.64501 20.1832 6.01184 19.7927 5.62132L18.3785 4.20711C17.988 3.81658 17.3548 3.81658 16.9643 4.20711L15.5501 5.62132M18.3785 8.44975L15.5501 5.62132" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M5 20H19" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
        
                            <!-- Trash Icon -->
                            <div class="bg-[#FF2121] bg-opacity-10 p-[5px] rounded-lg hover:cursor-pointer hover:bg-opacity-20">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6">
                                    <path d="M18 6L17.1991 18.0129C17.129 19.065 17.0939 19.5911 16.8667 19.99C16.6666 20.3412 16.3648 20.6235 16.0011 20.7998C15.588 21 15.0607 21 14.0062 21H9.99377C8.93927 21 8.41202 21 7.99889 20.7998C7.63517 20.6235 7.33339 20.3412 7.13332 19.99C6.90607 19.5911 6.871 19.065 6.80086 18.0129L6 6M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784 15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936 3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729 3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6M14 10V17M10 10V17" stroke="#FF2121" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                

                <!-- Popup Edit -->
                <div v-if="ShowEdit">
                    <div class="fixed top-0 bottom-0 left-0 right-0 z-50 bg-[#00000085] flex justify-center items-center">
                        <div class="px-[50px] box-content bg-white rounded-xl">

                            <!-- Close Popup -->
                            <div class="flex justify-end">                                
                                <svg fill="#000000" width="30px" height="50px" viewBox="0 0 24 24" version="1.2" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg" class="active:opacity-70 cursor-pointer" @click="ShowPopupEdit()">
                                    <path d="M12 3c-4.963 0-9 4.038-9 9s4.037 9 9 9 9-4.038 9-9-4.037-9-9-9zm0 16c-3.859 0-7-3.14-7-7s3.141-7 7-7 7 3.14 7 7-3.141 7-7 7zM12.707 12l2.646-2.646c.194-.194.194-.512 0-.707-.195-.194-.513-.194-.707 0l-2.646 2.646-2.646-2.647c-.195-.194-.513-.194-.707 0-.195.195-.195.513 0 .707l2.646 2.647-2.646 2.646c-.195.195-.195.513 0 .707.097.098.225.147.353.147s.256-.049.354-.146l2.646-2.647 2.646 2.646c.098.098.226.147.354.147s.256-.049.354-.146c.194-.194.194-.512 0-.707l-2.647-2.647z"/>
                                </svg>
                            </div>
                            <form @submit.prevent="edit_Section()">

                                <!-- {{ console.log(section.id) }}; -->
                                
                                <!-- Name section -->
                                <div class="my-[40px] items-center">
                                    <label class="text-[#29305B] mr-[55px] text-[15px] font-semibold">Nouveau nom</label>
                                    <input type="text" v-model="type.title" placeholder="entrer le nom de la section" class="w-[400px] border" required>
                                </div> 

                                <!-- Button -->
                                <div class="space-x-5 mb-[20px] flex justify-center">
                                    <!-- Close button -->
                                    <button class="text-[#29305B] font-bold py-[10px] px-[30px] border-2 border-[#414DC7] rounded-md hover:opacity-70" @click="ShowPopupEdit()">
                                        Close
                                    </button>

                                    <!-- Next button -->
                                    <button class="text-white bg-[#414DC7] font-bold py-[10px] px-[30px]  rounded-md flex flex-row" type="submit">
                                        Submit
                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-white ml-[5px]">
                                            <path fill-rule="evenodd" d="M16.72 7.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1 0 1.06l-3.75 3.75a.75.75 0 1 1-1.06-1.06l2.47-2.47H3a.75.75 0 0 1 0-1.5h16.19l-2.47-2.47a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                        </svg> -->
                                    </button>
                                                            
                                </div>
                            </form>
                        </div>
                    </div>        
                </div>
                
            

            <!-- Footer -->
            <!-- <div class="bg-white w-full box-content flex justify-end items-center border-t border-gray-300 mt-[15px]"> -->

                <!-- Back 'n Save icons -->
                <!-- <div class="pr-[30px] py-[15px] flex flex-row items-center space-x-4"> -->

                    <!-- Back icon -->
                    <!-- <div class="border border-[#414DC7] text-[#414DC7] flex flex-row items-center px-[50px] py-[10px] rounded-lg hover:bg-[#414DC7] hover:text-white hover:cursor-pointer hover:drop-shadow-xl space-x-4">
                        <svg viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 hover:text-white">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.27 7.75737L1.0202 11.9928L5.25576 16.2426L6.67236 14.8308L4.85801 13.0103L17.1463 13.0525C17.5532 14.219 18.6604 15.0583 19.9663 15.0642C21.6231 15.0717 22.9723 13.7346 22.9798 12.0777C22.9872 10.4209 21.6501 9.07172 19.9933 9.06427C18.6867 9.05841 17.5715 9.88865 17.1547 11.0525L4.83934 11.0102L6.68182 9.17397L5.27 7.75737ZM18.9798 12.0598C18.9823 11.5075 19.432 11.0618 19.9843 11.0643C20.5366 11.0667 20.9823 11.5165 20.9798 12.0687C20.9773 12.621 20.5276 13.0667 19.9753 13.0642C19.423 13.0618 18.9773 12.612 18.9798 12.0598Z" fill="currentColor"/>
                        </svg>
                        <p class="font-semibold text-[16px]">Back</p>
                    </div> -->

                    <!-- Save Icon -->
                    <!-- <div class="border text-[#414DC7] border-[#414DC7] flex items-center px-[50px] py-[10px] rounded-lg hover:bg-[#414DC7] hover:text-white hover:cursor-pointer hover:drop-shadow-xl space-x-4">
                        <p class="font-semibold  text-[16px]">Save</p>
                        <svg viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 hover:text-white">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.73 7.75739L22.9798 11.9929L18.7443 16.2426L17.3277 14.8308L19.142 13.0103L6.85364 13.0525C6.44678 14.219 5.33954 15.0584 4.03368 15.0642C2.37684 15.0717 1.02767 13.7346 1.02023 12.0777C1.01279 10.4209 2.34989 9.07173 4.00673 9.06429C5.31328 9.05842 6.4285 9.88867 6.84531 11.0525L19.1607 11.0103L17.3182 9.17398L18.73 7.75739ZM5.02019 12.0598C5.01771 11.5075 4.56799 11.0618 4.01571 11.0643C3.46343 11.0667 3.01773 11.5165 3.02021 12.0687C3.02269 12.621 3.47242 13.0667 4.02469 13.0642C4.57697 13.0618 5.02267 12.612 5.02019 12.0598Z" fill="currentColor"/>
                        </svg>
                    </div>
                </div>
            </div> -->

        </div>

    </div>

    <!-- Popup Create Section -->

    <div v-if="ShowThat">
        <div class="fixed top-0 bottom-0 left-0 right-0 z-50 bg-[#00000085] flex justify-center items-center">
            <div class="px-[50px] box-content bg-white rounded-xl">

                <!-- Close Popup -->
                <div class="flex justify-end">
                    <svg fill="#000000" width="30px" height="50px" viewBox="0 0 24 24" version="1.2" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg" class="active:opacity-70 cursor-pointer" @click="ShowPopupCreate">
                        <path d="M12 3c-4.963 0-9 4.038-9 9s4.037 9 9 9 9-4.038 9-9-4.037-9-9-9zm0 16c-3.859 0-7-3.14-7-7s3.141-7 7-7 7 3.14 7 7-3.141 7-7 7zM12.707 12l2.646-2.646c.194-.194.194-.512 0-.707-.195-.194-.513-.194-.707 0l-2.646 2.646-2.646-2.647c-.195-.194-.513-.194-.707 0-.195.195-.195.513 0 .707l2.646 2.647-2.646 2.646c-.195.195-.195.513 0 .707.097.098.225.147.353.147s.256-.049.354-.146l2.646-2.647 2.646 2.646c.098.098.226.147.354.147s.256-.049.354-.146c.194-.194.194-.512 0-.707l-2.647-2.647z"/>
                    </svg>
                </div>
                <form @submit="add_Section">
                    
                    <!-- Name section -->
                    <div class="my-[40px] items-center">
                        <label class="text-[#29305B] mr-[55px] text-[15px] font-semibold">Nom de la section</label>
                        <input type="text" v-model="type.title" placeholder="entrer le nom de la section" class="w-[400px] border" required>
                    </div> 

                    <!-- Button -->
                    <div class="space-x-5 mb-[20px] flex justify-center">
                        <!-- Close button -->
                        <button class="text-[#29305B] font-bold py-[10px] px-[30px] border-2 border-[#414DC7] rounded-md hover:opacity-70" @click="ShowPopupCreate">
                            Close
                        </button>

                        <!-- Next button -->
                        <button class="text-white bg-[#414DC7] font-bold py-[10px] px-[30px]  rounded-md flex flex-row" type="submit">
                            Next
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-white ml-[5px]">
                                <path fill-rule="evenodd" d="M16.72 7.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1 0 1.06l-3.75 3.75a.75.75 0 1 1-1.06-1.06l2.47-2.47H3a.75.75 0 0 1 0-1.5h16.19l-2.47-2.47a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>
                        </button>
                                                
                    </div>
                </form>
            </div>
        </div>        
    </div>

                
    


</template>

<script setup>

import { onMounted, ref } from 'vue';

import api from '../Api/api.js';

import { useRoute } from 'vue-router';



const step = ref(false);

const ShowThat = ref(false);

const ShowEdit = ref(false);

const route = useRoute();

const postId = ref(route.params.postId);

// console.log(postId);

const categoryId = ref(route.params.categoryId);

const category = ref({});

const guide = ref({});

const sections = ref([]);

const seek = ref(false);

function isVisibility() {

    seek.value = !seek.value;

}

const type = ref({

    title: ""

});

function ShowPopupCreate() {
    
    
    ShowThat.value = !ShowThat.value; 

    
    
};

const sectionId = ref(null)

const s_s_content = ref(null)

const step_content = ref(null)

function ShowPopupEdit(section_id = null) {
    

    sectionId.value = section_id;

    ShowEdit.value = !ShowEdit.value;

};

const sous_section = ref(false);

function show_sous_section(section_id) {

    sectionId.value = section_id;

    // s_s_content.value = ss_content;

    // step_content.value = s_content;

    sous_section.value = !sous_section.value;

    step.value = false;

};

function Show_step() {

    step.value = !step.value;

    // step_content.value = s_content;

}

onMounted( async () => {    

    category.value = await api.getCategoryById(categoryId.value);
    
    guide.value = await api.getGuideById(categoryId.value, postId.value);

    await showSections(categoryId.value, postId.value);

});

const showSection = async(categorie_id, guide_id, section_id) => {

    const response = await api.getSectionById(categorie_id, guide_id, section_id);

    if(response) {

        sections.value = [response];

        console.log(response);

        showSections(categoryId.value, postId.value);

        show_sous_section();

    }

};

const showSections = async(categorie_id, guide_id) => {

    const response = await api.getSections(categorie_id, guide_id);

    // console.log(response);

    if(response) {

        sections.value = response;

        // console.log("Sections:", sections.value);

    };

}

const edit_Section = async () => {

    const response = await api.updateSection(categoryId.value, postId.value, sectionId.value, type.value);

    if(response) {

        console.log(response);
    
        await showSections(categoryId.value, postId.value);

        ShowEdit.value = false;

    }


}

const del_Section = async (section_id) => {

    const delete_section = await api.deleteSection(categoryId.value, postId.value, section_id);

    if(delete_section.success) {

        await showSections(categoryId.value, postId.value);

    }

}

const add_Section= async(e)=>{

    e.preventDefault();

    const addSection = await api.createSection(categoryId.value, postId.value, type.value);

    if(addSection) {

        // console.log(addSection);

        await showSections(categoryId.value, postId.value);

        ShowThat.value = false;

    }

}


</script>

<style scoped>

/* .fade-enter-active, .fade-leave-active {
    
    transition: opacity 0.5s;

}

.fade-enter, .fade-leave-to {

    opacity: 0;

} */

</style>