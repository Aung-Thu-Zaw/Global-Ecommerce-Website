<template>
  <nav class="bg-blue-600 text-white">
    <div class="flex items-center justify-between px-10">
      <span class="text-sm font-bold">100% SECURE ECOMMERCE WEBSITE</span>
      <!-- menu -->
      <nav class="hidden lg:flex flex-1 items-center justify-end py-1">
        <a class="text-sm font-bold px-3 py-2 hover:text-gray-300" href="#">
          <i class="fa-solid fa-circle-info"></i>
          HELP CENTER
        </a>
        <span>|</span>
        <Link
          class="text-sm font-bold px-3 py-2 hover:text-gray-300"
          :href="route('vendor.register')"
          data-te-toggle="tooltip"
          data-te-placement="bottom"
          title="Become a vendor is for those who have their own products and company."
        >
          <i class="fa-solid fa-store"></i>
          BECOME A VENDOR
        </Link>
        <span>|</span>
        <!-- <a
          class="text-sm font-bold px-3 py-2 hover:text-gray-300"
          href="#"
          data-te-toggle="tooltip"
          data-te-placement="bottom"
          title="Become a seller is for those who wants to sell a variety of products."
        >
          <i class="fa-solid fa-shop"></i>
          BECOME A SELLER
        </a>
        <span>|</span> -->
        <a
          class="text-sm font-bold px-3 py-2 hover:text-gray-300"
          href="#"
          data-te-toggle="tooltip"
          data-te-placement="bottom"
          title="Check what happened to my products order?"
        >
          <i class="fa-solid fa-truck"></i>
          TRACK MY ORDER
        </a>
        <span>|</span>
        <div class="flex justify-center">
          <div>
            <div class="relative" data-te-dropdown-ref>
              <a
                class="flex items-center whitespace-nowrap px-4 pt-2.5 pb-2 text-sm font-bold uppercase leading-normal text-white"
                href="#"
                type="button"
                id="dropdownMenuButton2"
                data-te-dropdown-toggle-ref
                aria-expanded="false"
              >
                <i class="fa-solid fa-globe mr-1"></i>

                LANGUAGE
                <span class="ml-2 w-2">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    class="h-5 w-5"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </span>
              </a>
              <ul
                class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                aria-labelledby="dropdownMenuButton2"
                data-te-dropdown-menu-ref
              >
                <li>
                  <a
                    class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                    href="#"
                    data-te-dropdown-item-ref
                    >English</a
                  >
                </li>
                <li>
                  <a
                    class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                    href="#"
                    data-te-dropdown-item-ref
                    >French</a
                  >
                </li>
                <li>
                  <a
                    class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                    href="#"
                    data-te-dropdown-item-ref
                    >Myanmar</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <!-- menu //end -->
    </div>
    <!-- container //end -->
  </nav>
  <header class="bg-white shadow-sm border border-b">
    <div class="container max-w-screen-xl mx-auto px-4">
      <div class="py-3 md:flex items-center">
        <div class="flex items-center flex-shrink-0 mb-4 md:mb-0">
          <!-- brand -->
          <a
            href="#"
            class="mr-20 md:mr-3 lg:mr-24 pr-4 text-xl text-slate-600 font-bold"
          >
            Global Ecommerce
          </a>
          <!-- brand //end -->

          <!-- mobile-only -->
          <div class="md:hidden ml-auto">
            <button
              type="button"
              class="bg-white p-3 inline-flex items-center justify-center rounded-md text-gray-400 font-semibold hover:bg-gray-200 hover:text-gray-800 border border-transparent"
            >
              <span class="sr-only">Open menu</span>
              <i class="fa fa-bars fa-lg"></i>
            </button>
          </div>
          <!-- mobile-only //end  -->
        </div>

        <div class="w-full flex flex-nowrap items-center md:w-1/2">
          <input
            class="flex-grow appearance-none border border-gray-200 bg-gray-100 rounded-md mr-2 py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 placeholder:text-sm placeholder:text-gray-400"
            type="text"
            placeholder="What are you looking for?"
          />
          <button
            type="button"
            class="px-4 py-2 inline-block text-white border border-transparent bg-blue-600 rounded-md hover:bg-blue-700"
          >
            <i class="fa fa-search"></i>
          </button>
        </div>

        <nav
          v-if="$page.props.auth.user"
          class="hidden md:flex justify-end flex-1 items-center"
        >
          <UserDropdown />

          <a
            class="relative px-3 py-2 ml-5 inline-block text-center text-white bg-blue-600 shadow-sm border border-gray-300 rounded-md hover:bg-blue-700"
            href="#"
          >
            <i class="w-5 fa fa-shopping-cart"></i>
            <span class="hidden lg:inline ml-1">My cart</span>
            <span
              class="bg-red-500 text-[.5rem] absolute -top-2 -right-2 w-5 h-5 p-2 rounded-full flex items-center justify-center"
              >100</span
            >
          </a>
        </nav>

        <!-- Actions -->
        <nav v-else class="hidden md:flex justify-end flex-1 items-center">
          <div class="flex items-center space-x-2 ml-auto">
            <Link
              class="px-3 py-2 inline-block text-center text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:border-gray-300"
              :href="route('register')"
            >
              <i class="text-gray-400 w-5 fa fa-user"></i>
              <span class="hidden lg:inline ml-1 text-sm font-bold"
                >SIGN UP</span
              >
            </Link>
            <Link
              class="px-3 py-2 inline-block text-center text-white bg-blue-500 shadow-sm border border-gray-200 rounded-md hover:bg-blue-700"
              :href="route('login')"
            >
              <i class="w-5 fa fa-user"></i>
              <span class="hidden lg:inline ml-1 text-sm font-bold"
                >SIGN IN</span
              >
            </Link>
          </div>
        </nav>
        <!-- Actions .//end -->
      </div>
    </div>
    <!-- container.// -->
  </header>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import UserDropdown from "../Dropdowns/UserDropdown.vue";
</script>

<style>
</style>
