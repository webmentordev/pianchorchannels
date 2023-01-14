<template>
    <nav class="w-full sticky top-0 left-0 z-30 bg-dark border-b border-dark-b animate-navshow">
        <div class=" max-w-[98%] m-auto px-4 py-3 400px:px-2 flex items-center justify-between">
            <NuxtLink class="flex items-center" to="/"><img class="mr-4 400px:w-[50px]" src="/_nuxt/images/logo-white.png" width="70px"><span class="text-white font-bold text-xl 400px:text-lg">Pi Anchor Channels</span></NuxtLink>
            <ul class="flex items-center 920px:hidden">
                <NuxtLink class="px-6 mx-2 text-white" to="/">Home</NuxtLink>
                <NuxtLink class="px-6 mx-2 text-white" to="/about">About</NuxtLink>
                <NuxtLink class="ml-2 text-white font-bold py-2 px-4 bg-main rounded-sm" to="/contact">Contact</NuxtLink>
            </ul>
            <div class="hidden 920px:block">
                <ul class="cursor-pointer" @click="toggleSideBar">
                    <li class="h-[1px] bg-white my-2 w-[55px] 400px:w-[45px]"></li>
                    <li class="h-[1px] bg-white my-2 w-[55px] 400px:w-[45px]"></li>
                    <li class="h-[1px] bg-white my-2 w-[55px] 400px:w-[45px]"></li>
                </ul>
                <div v-show="showButton" @click.self="toggleSideBar" class="bg-dark bg-opacity-90 backdrop-blur-lg fixed top-0 left-0 h-screen w-full flex items-center justify-center">
                    <ul class="flex flex-col text-center">
                        <NuxtLink class="px-6 mb-2 text-white text-2xl" to="/">Home</NuxtLink>
                        <NuxtLink class="px-6 mb-2 text-white text-2xl" to="/about">About</NuxtLink>
                        <NuxtLink class="px-6 mb-2 text-white text-2xl" to="/contact">Contact</NuxtLink>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
  data() {
    return {
      showButton: false
    }
  },
  methods: {
    toggleSideBar(){
        this.showButton = !this.showButton;
    }
  }
}
</script>