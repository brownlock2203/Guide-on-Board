<template>

    <Index />
    <!-- CONTENT -->
    <div class="px-[100px] py-[50px]">

        <!-- Title -->
        <div class="w-full h-[60px] px-[35px] flex justify-between items-center border border-gray-300 mb-[20px]">
            <div class="flex flex-row space-x-4 items-center">
                <router-link :to="{ name: 'Home' }" class="hover:cursor-pointer hover:opacity-90">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-black hover:opacity-50">
                        <path fill-rule="evenodd" d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                    </svg>
                </router-link>
                <p class="text-lg font-bold text-black ">{{ category.name }}</p>
            </div>

            <!-- Search -->
            <div class="text-black bg-white rounded-lg h-[50px] pr-[8px] border-2 border-gray-300 border-opacity-50 flex justify-between items-center">
                <form class="flex flex-row justify-center items-center pr-[60px]">
                    <input type="search" placeholder="Rechercher un guide" class="w-full">
                </form>
                <div class="w-[35px] h-[32px] bg-[#F7F8F8] flex items-center justify-center border border-gray-400 border-opacity-25 shadow-md rounded-md hover:opacity-70">
                    <svg width="17px" height="17px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6H20M7 12H17M9 18H15" stroke="#586374" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>

            <!-- Menu -->
            <div class="flex flex-row space-x-[30px]">
                <!-- Afficher -->
                <div class="bg-white border border-gray-300 border-opacity-50 rounded-md flex flex-row items-center box-content px-[8px] py-[4px] space-x-2">
                    <p class="text-[13px]">Afficher</p>
                    <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="font-bold">
                    <path d="M5.70711 9.71069C5.31658 10.1012 5.31658 10.7344 5.70711 11.1249L10.5993 16.0123C11.3805 16.7927 12.6463 16.7924 13.4271 16.0117L18.3174 11.1213C18.708 10.7308 18.708 10.0976 18.3174 9.70708C17.9269 9.31655 17.2937 9.31655 16.9032 9.70708L12.7176 13.8927C12.3271 14.2833 11.6939 14.2832 11.3034 13.8927L7.12132 9.71069C6.7308 9.32016 6.09763 9.32016 5.70711 9.71069Z" fill="#0F0F0F"/>
                    </svg>
                </div>

                <!-- Trier par -->
                <div class="bg-white border border-gray-300 border-opacity-50 rounded-md flex flex-row items-center box-content px-[8px] py-[4px] space-x-2">
                    <p class="text-[13px]">Trier par</p>
                    <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="font-bold">
                        <path d="M5.70711 9.71069C5.31658 10.1012 5.31658 10.7344 5.70711 11.1249L10.5993 16.0123C11.3805 16.7927 12.6463 16.7924 13.4271 16.0117L18.3174 11.1213C18.708 10.7308 18.708 10.0976 18.3174 9.70708C17.9269 9.31655 17.2937 9.31655 16.9032 9.70708L12.7176 13.8927C12.3271 14.2833 11.6939 14.2832 11.3034 13.8927L7.12132 9.71069C6.7308 9.32016 6.09763 9.32016 5.70711 9.71069Z" fill="#0F0F0F"/>
                    </svg>
                </div>

                <!-- Menu Hambuger -->
                <div class="box-content bg-white flex items-center justify-center px-[5px] border border-[#B4C0E0] rounded-md">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400">
                        <path d="M4 6H20M4 12H20M4 18H20" stroke="#B4C0E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>

                <!-- Menu Case -->
                <div class="box-content bg-[#414DC7] flex items-center justify-center px-[5px] rounded-md">
                    <svg viewBox="-0.5 0 25 25" fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                        <path d="M19 3.32001H16C14.8954 3.32001 14 4.21544 14 5.32001V8.32001C14 9.42458 14.8954 10.32 16 10.32H19C20.1046 10.32 21 9.42458 21 8.32001V5.32001C21 4.21544 20.1046 3.32001 19 3.32001Z" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8 3.32001H5C3.89543 3.32001 3 4.21544 3 5.32001V8.32001C3 9.42458 3.89543 10.32 5 10.32H8C9.10457 10.32 10 9.42458 10 8.32001V5.32001C10 4.21544 9.10457 3.32001 8 3.32001Z" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M19 14.32H16C14.8954 14.32 14 15.2154 14 16.32V19.32C14 20.4246 14.8954 21.32 16 21.32H19C20.1046 21.32 21 20.4246 21 19.32V16.32C21 15.2154 20.1046 14.32 19 14.32Z" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8 14.32H5C3.89543 14.32 3 15.2154 3 16.32V19.32C3 20.4246 3.89543 21.32 5 21.32H8C9.10457 21.32 10 20.4246 10 19.32V16.32C10 15.2154 9.10457 14.32 8 14.32Z" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Categories -->
    <div id="categorie" class="text-[#20C0DA] grid grid-cols-3 gap-3">

        <!-- Add Category -->
        <div class="w-full h-[310px] bg-white border border-gray-400 rounded-md flex flex-col justify-center items-center hover:opacity-70 hover:cursor-pointer" @click="showGuide">
        <svg viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-20 h-20 ">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="drop" fill="#414DC7" transform="translate(42.666667, 42.666667)">
                <path d="M213.333333,3.55271368e-14 C269.912851,3.55271368e-14 324.175019,22.4761259 364.18278,62.4838867 C404.190541,102.491647 426.666667,156.753816 426.666667,213.333333 C426.666667,331.15408 331.15408,426.666667 213.333333,426.666667 C95.5125867,426.666667 3.55271368e-14,331.15408 3.55271368e-14,213.333333 C3.55271368e-14,95.5125867 95.5125867,3.55271368e-14 213.333333,3.55271368e-14 Z M234.666667,106.666667 L192,106.666667 L192,192 L106.666667,192 L106.666667,234.666667 L192,234.666 L192,320 L234.666667,320 L234.666,234.666 L320,234.666667 L320,192 L234.666,192 L234.666667,106.666667 Z" id="add-workorder"></path>
            </g>
            </g>
        </svg>
        <p class="text-[15px] font-bold mt-[20px] text-black">Ajouter un guide</p>
        </div>

        <!-- Is_Spinner -->
        <div v-if="is_spinner">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: rgba(255, 255, 255, 0); display: block; shape-rendering: auto;" width="244px" height="244px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
<g transform="translate(70,50)">
<g transform="rotate(0)">
<circle cx="0" cy="0" r="6" fill="#414dc7" fill-opacity="1">
  <animateTransform attributeName="transform" type="scale" begin="-0.8413461538461539s" values="1.55 1;1 1" keyTimes="0;1" dur="0.9615384615384615s" repeatCount="indefinite"></animateTransform>
  <animate attributeName="fill-opacity" keyTimes="0;1" dur="0.9615384615384615s" repeatCount="indefinite" values="1;0" begin="-0.8413461538461539s"></animate>
</circle>
</g>
</g><g transform="translate(64.14213562373095,64.14213562373095)">
<g transform="rotate(45)">
<circle cx="0" cy="0" r="6" fill="#414dc7" fill-opacity="0.875">
  <animateTransform attributeName="transform" type="scale" begin="-0.7211538461538461s" values="1.55 1;1 1" keyTimes="0;1" dur="0.9615384615384615s" repeatCount="indefinite"></animateTransform>
  <animate attributeName="fill-opacity" keyTimes="0;1" dur="0.9615384615384615s" repeatCount="indefinite" values="1;0" begin="-0.7211538461538461s"></animate>
</circle>
</g>
</g><g transform="translate(50,70)">
<g transform="rotate(90)">
<circle cx="0" cy="0" r="6" fill="#414dc7" fill-opacity="0.75">
  <animateTransform attributeName="transform" type="scale" begin="-0.6009615384615384s" values="1.55 1;1 1" keyTimes="0;1" dur="0.9615384615384615s" repeatCount="indefinite"></animateTransform>
  <animate attributeName="fill-opacity" keyTimes="0;1" dur="0.9615384615384615s" repeatCount="indefinite" values="1;0" begin="-0.6009615384615384s"></animate>
</circle>
</g>
</g><g transform="translate(35.85786437626905,64.14213562373095)">
<g transform="rotate(135)">
<circle cx="0" cy="0" r="6" fill="#414dc7" fill-opacity="0.625">
  <animateTransform attributeName="transform" type="scale" begin="-0.4807692307692307s" values="1.55 1;1 1" keyTimes="0;1" dur="0.9615384615384615s" repeatCount="indefinite"></animateTransform>
  <animate attributeName="fill-opacity" keyTimes="0;1" dur="0.9615384615384615s" repeatCount="indefinite" values="1;0" begin="-0.4807692307692307s"></animate>
</circle>
</g>
</g><g transform="translate(30,50)">
<g transform="rotate(180)">
<circle cx="0" cy="0" r="6" fill="#414dc7" fill-opacity="0.5">
  <animateTransform attributeName="transform" type="scale" begin="-0.3605769230769231s" values="1.55 1;1 1" keyTimes="0;1" dur="0.9615384615384615s" repeatCount="indefinite"></animateTransform>
  <animate attributeName="fill-opacity" keyTimes="0;1" dur="0.9615384615384615s" repeatCount="indefinite" values="1;0" begin="-0.3605769230769231s"></animate>
</circle>
</g>
</g><g transform="translate(35.85786437626905,35.85786437626905)">
<g transform="rotate(225)">
<circle cx="0" cy="0" r="6" fill="#414dc7" fill-opacity="0.375">
  <animateTransform attributeName="transform" type="scale" begin="-0.24038461538461536s" values="1.55 1;1 1" keyTimes="0;1" dur="0.9615384615384615s" repeatCount="indefinite"></animateTransform>
  <animate attributeName="fill-opacity" keyTimes="0;1" dur="0.9615384615384615s" repeatCount="indefinite" values="1;0" begin="-0.24038461538461536s"></animate>
</circle>
</g>
</g><g transform="translate(49.99999999999999,30)">
<g transform="rotate(270)">
<circle cx="0" cy="0" r="6" fill="#414dc7" fill-opacity="0.25">
  <animateTransform attributeName="transform" type="scale" begin="-0.12019230769230768s" values="1.55 1;1 1" keyTimes="0;1" dur="0.9615384615384615s" repeatCount="indefinite"></animateTransform>
  <animate attributeName="fill-opacity" keyTimes="0;1" dur="0.9615384615384615s" repeatCount="indefinite" values="1;0" begin="-0.12019230769230768s"></animate>
</circle>
</g>
</g><g transform="translate(64.14213562373095,35.85786437626905)">
<g transform="rotate(315)">
<circle cx="0" cy="0" r="6" fill="#414dc7" fill-opacity="0.125">
  <animateTransform attributeName="transform" type="scale" begin="0s" values="1.55 1;1 1" keyTimes="0;1" dur="0.9615384615384615s" repeatCount="indefinite"></animateTransform>
  <animate attributeName="fill-opacity" keyTimes="0;1" dur="0.9615384615384615s" repeatCount="indefinite" values="1;0" begin="0s"></animate>
</circle>
</g>
</g>
</svg>
        </div>

        <!-- New Category -->
        <div v-for="guide in guides" :key="guide.id" class="box-border px-[5px] py-[5px] bg-white text-black border border-gray-400 border-opacity-40 rounded-xl">
        
            <!-- Info creating -->
            <div class="pt-[35px] pb-[30px] px-[15px] bg-[#CAECE6] flex flex-col space-y-4 border border-gray-400 border-opacity-20 rounded-lg">

                <!-- Head Space -->
                <div class="mb-[20px] flex flex-row justify-between items-center">

                    <!-- Time of edit -->
                    <div class="box-border flex flex-row space-x-2 justify-between items-center bg-white rounded-3xl px-[10px] py-[2px]">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4">
                            <path d="M12 7V12H15M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <p class="font-semibold">edit il y a 2 mois</p>
                    </div>

                    <!-- Icon Space -->
                    <div class="flex flex-row items-center space-x-5">

                        <!-- Share Space -->
                        <div class="bg-white p-[2px] rounded-full hover:cursor-pointer hover:opacity-70">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                <g clip-path="url(#clip0_15_72)">
                                    <circle cx="7" cy="12" r="2" stroke="#000000" stroke-linejoin="round"/>
                                    <circle cx="17" cy="6" r="2" stroke="#000000" stroke-linejoin="round"/>
                                    <path d="M15 7L8.5 11" stroke="#000000"/>
                                    <circle cx="17" cy="18" r="2" stroke="#000000" stroke-linejoin="round"/>
                                    <path d="M8.5 13.5L15 17" stroke="#000000"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_15_72">
                                        <rect width="24" height="24" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>

                        <!-- Fav Space -->
                        <div class="bg-white p-[5px] rounded-full text-black hover:cursor-pointer hover:opacity-70">
                            <svg viewBox="0 -3.71 75.17 75.17" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4">
                                <path id="Path_1" data-name="Path 1" d="M117.606,280.375s22.263-15.459,31.959-30.318c9.6-14.708.354-31.054-10.533-33.8-14.457-3.65-21.426,10.478-21.426,10.478s-6.968-14.128-21.425-10.478c-10.888,2.748-20.132,19.094-10.534,33.8C95.343,264.916,117.606,280.375,117.606,280.375Z" transform="translate(-80.021 -214.131)" fill="none" stroke="#000000" stroke-linejoin="round" stroke-width="3"/>
                            </svg>
                        </div>
                    </div>

                </div>

                <!-- Category  Name -->
                <div class="text-[15px] font-medium underline decoration-1">{{ category.name }}</div>

                <!-- Guide Name -->
                <div class="text-[20px] font-semibold">{{ guide.title }}</div>

                <!-- Description -->
                <div>{{ guide.content }}</div>


            </div>
            
            <!-- Editing Space -->
            <div class="flex flex-row justify-between items-center px-[20px] py-[15px]">
                
                <!-- Delete and Update space -->
                <div class="flex flex-row space-x-4">

                    <!-- Delete Space -->
                    <div>
                        <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 hover:text-blue-700 hover:cursor-pointer" @click="() => del_Guide(guide.id)">
                            <path d="M5.755,20.283,4,8H20L18.245,20.283A2,2,0,0,1,16.265,22H7.735A2,2,0,0,1,5.755,20.283ZM21,4H16V3a1,1,0,0,0-1-1H9A1,1,0,0,0,8,3V4H3A1,1,0,0,0,3,6H21a1,1,0,0,0,0-2Z"/>
                        </svg>
                    </div>
                    <!--Update Space -->
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 hover:text-blue-700 hover:cursor-pointer" @click="GuideShow(guide.id)">
                            <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                            <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                        </svg>
                    </div>
                </div>

                <!-- Redirect to guide content -->
                <div>
                    <router-link :to="'/gob-categorie/'+category.id+'/gob-guides/'+guide.id+'/gob-sections'" class="hover:cursor-pointer hover:opacity-80">
                        <p class="bg-[#414DC7] px-[10px] py-[6px] text-white rounded-full font-bold text-[15px]">Consulter</p>
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-black hover:text-blue-700 ml-[5px]">
                            <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" /> 
                        </svg> -->
                    </router-link>
                </div>
            </div>

        </div>
        </div>
    </div>

    <!-- Popup Edit -->
    <div v-if="EditThat">
        <div class="fixed top-0 bottom-0 left-0 right-0 z-50 bg-[#00000085] flex justify-center items-center">
            <div class="box-content bg-white px-[20px] py-[10px]">

                <!-- Close Popup -->
                <div class="flex justify-between">
                    <div></div>
                    <svg fill="#000000" width="30px" height="50px" viewBox="0 0 24 24" version="1.2" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg" class="active:opacity-70 cursor-pointer" @click="GuideShow()">
                        <path d="M12 3c-4.963 0-9 4.038-9 9s4.037 9 9 9 9-4.038 9-9-4.037-9-9-9zm0 16c-3.859 0-7-3.14-7-7s3.141-7 7-7 7 3.14 7 7-3.141 7-7 7zM12.707 12l2.646-2.646c.194-.194.194-.512 0-.707-.195-.194-.513-.194-.707 0l-2.646 2.646-2.646-2.647c-.195-.194-.513-.194-.707 0-.195.195-.195.513 0 .707l2.646 2.647-2.646 2.646c-.195.195-.195.513 0 .707.097.098.225.147.353.147s.256-.049.354-.146l2.646-2.647 2.646 2.646c.098.098.226.147.354.147s.256-.049.354-.146c.194-.194.194-.512 0-.707l-2.647-2.647z"/>
                    </svg>
                </div>
                <form class=" px-[100px]" @submit.prevent="update_Guide()">
                    
                    <!-- Name guide -->
                    <div class="my-[40px] items-center">
                        <label class="text-[#29305B] mr-[55px] text-[15px] font-semibold">Nouveau nom du guide</label>
                        <input type="text" v-model="post.title" placeholder="entrer le nom du guide" class="w-[400px] border">
                    </div> 
                        
                    <!-- Description -->
                    <div class="my-[40px] flex flex-row items-center">
                        <label class="text-[#29305B] mr-[75px] text-[15px] font-semibold">nouvelle Description</label>
                        <textarea v-model="post.content" placeholder="Description de la catégorie" class="w-[400px] h-[50px] border border-opacity-50 focus:shadow rounded-md"></textarea>
                    </div>   

                    <!-- Button -->
                    <div class="space-x-5 mb-[20px] flex justify-center">
                        <!-- Close button -->
                        <button class="text-[#29305B] font-bold py-[10px] px-[30px] border-2 border-[#414DC7] rounded-md hover:opacity-70" @click="GuideShow()">
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
    

    <!-- Popup Categorie -->
    <div v-if="ShowThat">
        <div class="fixed top-0 bottom-0 left-0 right-0 z-50 bg-[#00000085] flex justify-center items-center">
            <div class="box-content bg-white px-[20px] py-[10px]">

                <!-- Close Popup -->
                <div class="flex justify-between">
                    <div></div>
                    <svg fill="#000000" width="30px" height="50px" viewBox="0 0 24 24" version="1.2" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg" class="active:opacity-70 cursor-pointer" @click="showGuide">
                        <path d="M12 3c-4.963 0-9 4.038-9 9s4.037 9 9 9 9-4.038 9-9-4.037-9-9-9zm0 16c-3.859 0-7-3.14-7-7s3.141-7 7-7 7 3.14 7 7-3.141 7-7 7zM12.707 12l2.646-2.646c.194-.194.194-.512 0-.707-.195-.194-.513-.194-.707 0l-2.646 2.646-2.646-2.647c-.195-.194-.513-.194-.707 0-.195.195-.195.513 0 .707l2.646 2.647-2.646 2.646c-.195.195-.195.513 0 .707.097.098.225.147.353.147s.256-.049.354-.146l2.646-2.647 2.646 2.646c.098.098.226.147.354.147s.256-.049.354-.146c.194-.194.194-.512 0-.707l-2.647-2.647z"/>
                    </svg>
                </div>
                <div class="flex justify-center">
                    <p class="text-[30px] font-bold text-black ml-[20px]">Création d'un guide</p>
                </div>
                <form class=" px-[100px]" @submit="add_Guide">

                    <!-- Name Guide -->
                    <!-- <div class="my-[40px] items-center">
                        <label class="text-[#29305B] mr-[55px] text-[15px] font-semibold">Nom catégorie</label>
                        <input type="text" placeholder="entrer le nom de la catégorie" class="w-[400px] border" required>
                    </div>  -->
                    
                    <!-- Name guide -->
                    <div class="my-[40px] items-center">
                        <label class="text-[#29305B] mr-[55px] text-[15px] font-semibold">Nom du guide</label>
                        <input type="text" v-model="post.title" placeholder="entrer le nom du guide" class="w-[400px] border" required>
                    </div> 
                        
                    <!-- Description -->
                    <div class="my-[40px] flex flex-row items-center">
                        <label class="text-[#29305B] mr-[75px] text-[15px] font-semibold">Description</label>
                        <textarea v-model="post.content" placeholder="Description de la catégorie" class="w-[400px] h-[50px] border border-opacity-50 focus:shadow rounded-md" required></textarea>
                    </div>   

                    <!-- Button -->
                    <div class="space-x-5 mb-[20px] flex justify-center">
                        <!-- Close button -->
                        <button class="text-[#29305B] font-bold py-[10px] px-[30px] border-2 border-[#414DC7] rounded-md hover:opacity-70" @click="showGuide">
                            Close
                        </button>

                        <!-- Next button -->
                        <button class="text-white bg-[#414DC7] font-bold py-[10px] px-[30px]  rounded-md flex flex-row" type="submit" @click="add_Guide">
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

import Index from "./configuration/Index.vue";

import { onMounted, ref } from 'vue';

import api from '../Api/api.js'

import { useRoute } from 'vue-router';

const route = useRoute();

const categoryId = ref(route.params.categoryId);

const guides = ref([]);

const category = ref({});

const post = ref({
    
    title: "",

});

// console.log(post.value);

const EditThat = ref(false);

const guideId = ref(0);

function GuideShow(guide_id=null) {

    guideId.value = guide_id;

    EditThat.value = !EditThat.value;

}


const ShowThat = ref(false);

const success = ref(false);

function otherGuide() {

    ShowThat.value = false;

    success.value = !success.value;
    

}


function showGuide() {

    ShowThat.value = !ShowThat.value;

    post.title = "";

    post.content = ""

}

const is_spinner = ref(true);

onMounted(async () => {

    category.value = await api.getCategoryById(categoryId.value);

    // console.log(category.value);
    
    await showGuides(categoryId.value);

    if(showGuides(categoryId.value)){

        is_spinner.value = false;

    }

});

const showGuides = async(categorie_id) => {

    const response = await api.getGuides(categorie_id);

    // console.log(response);

    if (response) {

        guides.value = response;
            
    }

};

// const edit_Guide = (guide) => {

// post.title = guide.title;

// post.content = guide.content;

// post.post_id = guide.guide_id;

// ShowThat.value = true;

// }

const add_Guide = async (e) => {

    e.preventDefault();

        const added_Guide = await api.createGuide(categoryId.value, post.value);

        if (added_Guide.success) {

            console.log("Nouveau guide ajouté avec succès :", added_Guide);
            
            await showGuides(categoryId.value);
            
            ShowThat.value = false;
    
    }

}

const update_Guide = async () => {

    const updateGuide = await api.updateGuide(categoryId.value, guideId.value, post.value);

    console.log(guides.value);

    if(updateGuide) {

        post.title = guides.title;
    
        post.content = guides.content;

        await showGuides(categoryId.value);

        console.log(updateGuide);

        EditThat.value = false;
        
    }

}




const del_Guide = async(post_id) => {

    const del_guide = await api.deleteGuide(categoryId.value, post_id);

    if(del_guide.success) {

        await showGuides(categoryId.value);

    }

}
    


// const updateGuide = async () => {

//     const response = await updateGuide(categoryId.value, guides.value);

//     const updatedGuideIndex = guides.value.findIndex(guide => guide.id === post.post_id);

//     console.log(updatedGuideIndex);

//     if (updatedGuideIndex !== -1) {

//             guides.value.splice(updatedGuideIndex, 1, response.data);

//             console.log(guide.value);

//         }

//         ShowThat.value = false;

//         console.log("Guide mis à jour avec succès :", response.data);

//         await showGuides(categoryId.value);

// }



</script>



<style lang="scss" scoped>

body{
    margin: 0;
}
input[type="search"]{
    display: block;
    box-sizing: border-box;
    border: none;
    margin: 0 10px 0 10px;
}

input[type="search"]::placeholder{
    font-size: 12px;
}

input:focus{
    box-shadow: 0 0 0 0.2rem transparent;
}

a:focus{
    font-weight: bold;
    box-shadow: 0 0 0 0.2rem transparent;
    border: none;
}


input[type="file"]{
    display: none;
}

input[type="text"]{
    padding: 10px 0 10px 10px;
    
}


input:focus{
    box-shadow: 0 0 0 0.2 transparent;
}

textarea {
    padding: 10px 0 10px 10px;
    height: 100px;
    resize: none;

}

</style>