<template>

  <Index />

  <!-- CONTENT -->
  <div class="px-[100px] py-[50px]">

    <!-- Title -->
    <div class="w-full h-[60px] px-[35px] flex justify-between items-center border border-gray-300 mb-[20px]">
      <div class="flex flex-row space-x-5 items-center">
        <p class="text-md font-bold text-black ">Liste des catégories</p>
      </div>

      <!-- Search -->
      <div class="text-black bg-white rounded-lg h-[50px] pr-[8px] border-2 border-gray-300 border-opacity-50 flex justify-between items-center">
        <form class="flex flex-row justify-center items-center pr-[60px]">
          <input type="search" placeholder="Rechercher une catégorie" class="w-full">
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
    <div id="categorie" class="m-0 text-[#20C0DA] grid grid-cols-3 gap-3">

      <!-- Add Category -->
      <div class="w-full h-[380px] bg-white border border-gray-600 rounded-md flex flex-col justify-center items-center hover:opacity-70 hover:cursor-pointer" @click="showPopup">
        <svg viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-20 h-20 ">
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="drop" fill="#414DC7" transform="translate(42.666667, 42.666667)">
              <path d="M213.333333,3.55271368e-14 C269.912851,3.55271368e-14 324.175019,22.4761259 364.18278,62.4838867 C404.190541,102.491647 426.666667,156.753816 426.666667,213.333333 C426.666667,331.15408 331.15408,426.666667 213.333333,426.666667 C95.5125867,426.666667 3.55271368e-14,331.15408 3.55271368e-14,213.333333 C3.55271368e-14,95.5125867 95.5125867,3.55271368e-14 213.333333,3.55271368e-14 Z M234.666667,106.666667 L192,106.666667 L192,192 L106.666667,192 L106.666667,234.666667 L192,234.666 L192,320 L234.666667,320 L234.666,234.666 L320,234.666667 L320,192 L234.666,192 L234.666667,106.666667 Z" id="add-workorder"></path>
            </g>
          </g>
        </svg>
        <p class="text-[15px] font-bold mt-[20px] text-black">Ajouter une catégorie</p>
      </div>

      <!-- New Category -->
      <div v-for="categorie in categories" :key="categorie.id" class="box-border bg-[#414DC7] text-white border border-gray-400 border-opacity-40 rounded-md">
        
        <!-- Info creating -->
        <div class="mx-[25px] mt-[50px] pb-[40px] flex flex-col space-y-9 border-b-2 border-[#FFFF00]">

          <!-- Head Space -->
          <div class="flex flex-row justify-between">

            <!-- Logo Space -->
            <div class="w-[80px] h-[80px] border-4 border-[#FFFF00] rounded-full overflow-hidden">
              <img :src="categorie.image" class="w-full h-full">
            </div>

            <!-- Icon Space -->
            <div class="flex flex-row items-center space-x-5">

              <!-- Delete Space -->
              <div>
                <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 hover:text-[#FFFF00] hover:cursor-pointer" @click="() => delCategorie(categorie.id)">
                  <path d="M5.755,20.283,4,8H20L18.245,20.283A2,2,0,0,1,16.265,22H7.735A2,2,0,0,1,5.755,20.283ZM21,4H16V3a1,1,0,0,0-1-1H9A1,1,0,0,0,8,3V4H3A1,1,0,0,0,3,6H21a1,1,0,0,0,0-2Z"/>
                </svg>
              </div>

              <!-- Update Space -->
              <div @click="EditPopup(categorie.id)">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7 hover:text-[#FFFF00] hover:cursor-pointer">
                  <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                  <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                </svg>
              </div>

            </div>

          </div>

          <!-- Category  Name -->
          <div class="text-[20px] font-bold">{{ categorie.name }}</div>

          <!-- Description -->
          <div class="font-semibold">{{ categorie.description }}</div>
        </div>
        
        <!-- Editing Space -->
        <div class="flex flex-row justify-between items-center px-[20px] py-[20px]">

          <!-- Time of edit -->
          <div class="w-[140px] flex flex-row justify-between items-center bg-[#FFFF00] rounded-lg px-[8px] py-[2px]">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
              <path d="M12 7V12H15M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#000000" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <div class="text-black">edit il y a 2 mois</div>
          </div>

          <!-- Redirect to cat content -->
          <div class="">
            <router-link class="hover:cursor-pointer hover:text-[#FFFF00]" :to="'/gob-categorie/'+categorie.id">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 ml-[5px]">
                <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" stroke-width="3" /> 
              </svg>
            </router-link>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Popup Categorie -->
  <div v-if="ShowIt">

    <div class="fixed top-0 bottom-0 left-0 right-0 z-50 bg-[#00000085] flex justify-center items-center ">
        <div class="box-content bg-white px-[20px] py-[10px]">
            <!-- Close Popup -->
            <div class="flex justify-between">
                <div></div>
                <svg fill="#000000" width="30px" height="50px" viewBox="0 0 24 24" version="1.2" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg" class="active:opacity-70 cursor-pointer" @click="showPopup()">
                    <path d="M12 3c-4.963 0-9 4.038-9 9s4.037 9 9 9 9-4.038 9-9-4.037-9-9-9zm0 16c-3.859 0-7-3.14-7-7s3.141-7 7-7 7 3.14 7 7-3.141 7-7 7zM12.707 12l2.646-2.646c.194-.194.194-.512 0-.707-.195-.194-.513-.194-.707 0l-2.646 2.646-2.646-2.647c-.195-.194-.513-.194-.707 0-.195.195-.195.513 0 .707l2.646 2.647-2.646 2.646c-.195.195-.195.513 0 .707.097.098.225.147.353.147s.256-.049.354-.146l2.646-2.647 2.646 2.646c.098.098.226.147.354.147s.256-.049.354-.146c.194-.194.194-.512 0-.707l-2.647-2.647z"/>
                </svg>
            </div>
            <div class="flex justify-center">
                <p class="text-[30px] font-bold text-black ml-[20px]">Création d'une catégorie</p>
            </div>
            <form class=" px-[100px]" @submit="addCategorie">

                <!-- Name category -->
                <div class="my-[40px] items-center">
                    <label for="name" class="text-[#29305B] mr-[55px] text-[15px] font-semibold">Nom catégorie</label>
                    <input type="text" v-model="category.name" id="name" placeholder="entrer le nom de la catégorie" class="w-[400px] border" required>
                </div>    

                <!-- Logo -->
                <div class=" flex items-center box-content">
                    <label id="label" class="text-[#29305B] mr-[120px] text-[15px] font-semibold">Logo</label>
                    <input type="text" readonly id="fileInput" class="bg-white w-[350px] border" v-model="category.image" placeholder="Selectionner le logo">
                      <button class="bg-[#414DC7] rounded-sm " for="fileInput" @click="() => addImage()">
                        <svg width="20px" height="20px" viewBox="-3 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" class="text-white m-[11px]">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-154.000000, -99.000000)" fill="currentColor">
                                    <path d="M174,107 C172.896,107 172,106.104 172,105 L172,101 L178,107 L174,107 L174,107 Z M178,127 C178,128.104 177.104,129 176,129 L158,129 C156.896,129 156,128.104 156,127 L156,103 C156,101.896 156.896,101 158,101 L169.972,101 C169.954,103.395 170,105 170,105 C170,107.209 171.791,109 174,109 L178,109 L178,127 L178,127 Z M172,99 L172,99.028 C171.872,99.028 171.338,98.979 170,99 L158,99 C155.791,99 154,100.791 154,103 L154,127 C154,129.209 155.791,131 158,131 L176,131 C178.209,131 180,129.209 180,127 L180,109 L180,107 L172,99 L172,99 Z" id="file-document" sketch:type="MSShapeGroup"></path>
                                </g>
                            </g>
                        </svg>
                      </button>                    
                    
                </div>
                
                <!-- Description -->
                <div class="my-[40px] flex flex-row items-center">
                    <label for="description" class="text-[#29305B] mr-[75px] text-[15px] font-semibold">Description</label>
                    <textarea placeholder="Description de la catégorie" id="description" v-model="category.description" class="w-[400px] h-[50px] border border-opacity-50 focus:shadow rounded-md" required></textarea>
                </div>   

                <!-- Button -->
                <div class="space-x-5 mb-[20px] flex justify-center">
                    <!-- Close button -->
                    <button class="text-[#29305B] font-bold py-[10px] px-[30px] border-2 border-[#414DC7] rounded-md hover:opacity-70" @click="showPopup()">
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

  <!-- Popup EditCategorie -->
  <div v-if="ShowEdit">

<div class="fixed top-0 bottom-0 left-0 right-0 z-50 bg-[#00000085] flex justify-center items-center ">
    <div class="box-content bg-white px-[20px] py-[10px]">
        <!-- Close Popup -->
        <div class="flex justify-between">
            <div></div>
            <svg fill="#000000" width="30px" height="50px" viewBox="0 0 24 24" version="1.2" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg" class="active:opacity-70 cursor-pointer" @click="EditPopup">
                <path d="M12 3c-4.963 0-9 4.038-9 9s4.037 9 9 9 9-4.038 9-9-4.037-9-9-9zm0 16c-3.859 0-7-3.14-7-7s3.141-7 7-7 7 3.14 7 7-3.141 7-7 7zM12.707 12l2.646-2.646c.194-.194.194-.512 0-.707-.195-.194-.513-.194-.707 0l-2.646 2.646-2.646-2.647c-.195-.194-.513-.194-.707 0-.195.195-.195.513 0 .707l2.646 2.647-2.646 2.646c-.195.195-.195.513 0 .707.097.098.225.147.353.147s.256-.049.354-.146l2.646-2.647 2.646 2.646c.098.098.226.147.354.147s.256-.049.354-.146c.194-.194.194-.512 0-.707l-2.647-2.647z"/>
            </svg>
        </div>
        <div class="flex justify-center">
            <p class="text-[30px] font-bold text-black ml-[20px]">Création d'une catégorie</p>
        </div>
        <form class=" px-[100px]" @submit.prevent="update_Categorie()">

            <!-- Name category -->
            <div class="my-[40px] items-center">
                <label for="name" class="text-[#29305B] mr-[55px] text-[15px] font-semibold">Nom catégorie</label>
                <input type="text" v-model="category.name" id="name" placeholder="entrer le nom de la catégorie" class="w-[400px] border" required>
            </div>    

            <!-- Logo -->
            <div class=" flex items-center box-content">
                <label id="label" class="text-[#29305B] mr-[120px] text-[15px] font-semibold">Logo</label>
                <input type="text" readonly id="fileInput" class="bg-white w-[350px] border" v-model="category.image" placeholder="Selectionner le logo">
                  <button class="bg-[#414DC7] rounded-sm " for="fileInput" @click="() => addImage()">
                    <svg width="20px" height="20px" viewBox="-3 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" class="text-white m-[11px]">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                            <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-154.000000, -99.000000)" fill="currentColor">
                                <path d="M174,107 C172.896,107 172,106.104 172,105 L172,101 L178,107 L174,107 L174,107 Z M178,127 C178,128.104 177.104,129 176,129 L158,129 C156.896,129 156,128.104 156,127 L156,103 C156,101.896 156.896,101 158,101 L169.972,101 C169.954,103.395 170,105 170,105 C170,107.209 171.791,109 174,109 L178,109 L178,127 L178,127 Z M172,99 L172,99.028 C171.872,99.028 171.338,98.979 170,99 L158,99 C155.791,99 154,100.791 154,103 L154,127 C154,129.209 155.791,131 158,131 L176,131 C178.209,131 180,129.209 180,127 L180,109 L180,107 L172,99 L172,99 Z" id="file-document" sketch:type="MSShapeGroup"></path>
                            </g>
                        </g>
                    </svg>
                  </button>                    
                
            </div>
            
            <!-- Description -->
            <div class="my-[40px] flex flex-row items-center">
                <label for="description" class="text-[#29305B] mr-[75px] text-[15px] font-semibold">Description</label>
                <textarea placeholder="Description de la catégorie" id="description" v-model="category.description" class="w-[400px] h-[50px] border border-opacity-50 focus:shadow rounded-md" required></textarea>
            </div>   

            <!-- Button -->
            <div class="space-x-5 mb-[20px] flex justify-center">
                <!-- Close button -->
                <button class="text-[#29305B] font-bold py-[10px] px-[30px] border-2 border-[#414DC7] rounded-md hover:opacity-70" @click="EditPopup">
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

  import Index from "./configuration/Index.vue";

  import api from '../Api/api.js';

  import { useRouter } from 'vue-router';

  import { onMounted, ref } from 'vue';

  const ShowIt = ref(false);

  const categories = ref([]);
  
  const category = ref({

    name:"",
    
    description:'',
    
    image:'',

    id:''
  
  });

  const ShowEdit = ref(false);

  const categoryId = ref(0);

  function EditPopup(categorie_id = null) {

    categoryId.value = categorie_id;

    ShowEdit.value = !ShowEdit.value;

    // category.value = category.value;

  }

  const addImage = () => {
    
      var uploader = wp.media(

              {
                  
                title: 'Please set the picture',
                  
                button: {
                
                  text: "Select picture(s)"
                
                },
                
                multiple: true
              
              }
          
          )
          
          .on (
              'select', function () {

                  var selection = uploader.state().get( 'selection' );

                  selection.map(

                      function (attachment) {
                        
                          attachment = attachment.toJSON();

                          if(attachment.type == 'image'){

                              category.value.image = attachment.url;
                          }
                      }
                  );
                  
              }
          )
          
          .open();
  }

  function showPopup() {

    ShowIt.value = !ShowIt.value;

    // category.name = '';

    // category.description = '';

  };

  onMounted(async () => {

    await showCategories();

  });

  const showCategories = async() => {
    
    const response = await api.getCategories();
    
    if(response.success == true){
    
      categories.value = response.categories;    

    };
  }

  const addCategorie = async (e) => {

    e.preventDefault();

    const add_cat = await api.createCategory(category.value);
    
    if(add_cat.success == true) {

      console.log(add_cat)
      
      await showCategories();

      ShowIt.value = false;

    }
  }

  const update_Categorie = async() => {

    const updateCategorie = await api.updateCategory(categoryId.value, category.value)

    if(updateCategorie) {

      await showCategories();

      ShowEdit.value = false;

    }
    
  }
  

  const delCategorie = async (categorie_id) => {
    
    const delete_categorie = await api.deleteCategory(categorie_id);

    if(delete_categorie.success == true) {

      await showCategories();

    }

  }
  
  // const upCategorie = async (categorie_id = null) => {

  // }



  // return {
  //   ShowIt,
  //   showPopup,
  // }
</script>

<style scoped>
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

textarea {
    padding: 10px 0 10px 10px;
    height: 100px;
    resize: none;

}

</style>
