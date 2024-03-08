<template>
    <div>
        <!-- HEADER -->
        <div class="bg-white min-w-full h-[50px] px-[50px] m-auto flex flex-row justify-between items-center">
            <!-- Title -->
            <p class="text-[#282E4B] text-base font-bold">Guide On Board</p>

            <!-- Menu -->
            <div class="flex flex-row justify-center items-center">

                <div class="flex justify-center items-center mr-[200px]">
                    <!-- Home -->
                    <router-link to="/" class="text-[#282E4B] flex justify-center items-center space-x-2 mx-[30px]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <p class="text-[14px] tracking-wider font-bold"> Acceuil</p>
                    </router-link>

                    <!-- Categorie -->
                    <!-- <div class="text-[#282E4B] flex justify-center items-center space-x-1 mx-[5px] hover:opacity-70">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hover:cursor-pointer">
                            <path d="M5 10H7C9 10 10 9 10 7V5C10 3 9 2 7 2H5C3 2 2 3 2 5V7C2 9 3 10 5 10Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17 10H19C21 10 22 9 22 7V5C22 3 21 2 19 2H17C15 2 14 3 14 5V7C14 9 15 10 17 10Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17 22H19C21 22 22 21 22 19V17C22 15 21 14 19 14H17C15 14 14 15 14 17V19C14 21 15 22 17 22Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M5 22H7C9 22 10 21 10 19V17C10 15 9 14 7 14H5C3 14 2 15 2 17V19C2 21 3 22 5 22Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <router-link to="/options" class="text-[14px]">Categorie</router-link>
                    </div> -->
                </div>


                

                <!-- Bell -->
                <div class="mr-[80px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-[#282E4B] mr-[78px] hover:cursor-pointer hover:opacity-70">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                    </svg>
                </div>


                <!-- connected -->
                <div class="flex flex-row">
                    <div class="w-[40px] h-[40px] bg-black border-[#282E4B] border-[2px] rounded-full hover:border-[5px] overflow-hidden"></div>
                    <div class="w-[40px] h-[40px] bg-black border-[#282E4B] border-[2px] rounded-full hover:border-[5px]"></div>
                    <div class="w-[40px] h-[40px] bg-black border-[#282E4B] border-[2px] rounded-full hover:border-[5px]"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page -->

</template>

<script>
    export default {
        
    }
</script>

<style lang="scss" scoped>


a{
    color: #282E4B;
}

// a:hover{
//     opacity: 0.5;
// }

a.router-link-exact-active{
    color: #282E4B;
    font-weight: bold;
    box-shadow: 0 0 0 0.2rem transparent;
    border: none;
}
</style>