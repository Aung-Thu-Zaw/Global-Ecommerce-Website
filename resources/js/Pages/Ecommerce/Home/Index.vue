<template>
  <AppLayout>
    <div class="min-h-screen bg-gray-50">
      <!-- Announcement Bar  -->

      <Announcement />

      <!-- Main Header Section -->
      <EcommerceMainSection />

      <!-- Featured Category Section -->
      <FeaturedCategory />

      <!-- New Products Section  -->
      <ProductSection>
        <template v-slot:sectionHeader>
          <h2 class="text-md md:text-2xl font-bold">NEW PRODUCTS</h2>
          <span
            class="hidden border-4 border-slate-300 w-[70%] lg:block"
          ></span>
          <a href="" class="text-sm font-bold md:text-md animate-bounce">
            SEE ALL
            <i class="fa-solid fa-angles-right ml-3"></i>
          </a>
        </template>
      </ProductSection>

      <!-- New Products Section  -->
      <ProductSection>
        <template v-slot:sectionHeader>
          <h2 class="text-md md:text-2xl font-bold">HOT DEALS PRODUCTS</h2>
          <span
            class="hidden border-4 border-slate-300 w-[65%] lg:block"
          ></span>
          <a href="" class="text-sm font-bold md:text-md animate-bounce">
            SEE ALL
            <i class="fa-solid fa-angles-right ml-3"></i>
          </a>
        </template>
      </ProductSection>

      <!-- Best Selling Products Section  -->
      <ProductSection>
        <template v-slot:sectionHeader>
          <h2 class="text-md md:text-2xl font-bold">BEST SELLING PRODUCTS</h2>
          <span
            class="hidden border-4 border-slate-300 w-[60%] lg:block"
          ></span>
          <a href="" class="text-sm font-bold md:text-md animate-bounce">
            SEE ALL
            <i class="fa-solid fa-angles-right ml-3"></i>
          </a>
        </template>
      </ProductSection>

      <!-- Products For You Section -->
      <ProductsForYourSection>
        <template v-slot:sectionHeader>
          <h2 class="text-md md:text-2xl font-bold">PRODUCTS FOR YOU</h2>
        </template>
      </ProductsForYourSection>

      <!-- Why Choose Us Section -->
      <WhyChooseUsSection />

      <!-- Subscribe NewsLetter Section -->
      <SubscribeNewsLetterSection />
    </div>
  </AppLayout>
</template>

<script setup>
import Announcement from "@/Components/Announcement.vue";
import SubscribeNewsLetterSection from "@/Components/Sections/SubscribeNewsLetterSection.vue";
import WhyChooseUsSection from "@/Components/Sections/WhyChooseUsSection.vue";
import FeaturedCategory from "@/Components/Sections/FeaturedCategorySection.vue";
import ProductsForYourSection from "@/Components/Sections/ProductsForYourSection.vue";
import ProductSection from "@/Components/Sections/ProductSection.vue";
import EcommerceMainSection from "@/Components/Headers/EcommerceMainSection.vue";
import AppLayout from "../../../Layouts/AppLayout.vue";
import { toast } from "vue3-toastify";
import "vue3-toastify/dist/index.css";
import { usePage } from "@inertiajs/vue3";

if (usePage().props.flash.successMessage) {
  toast.success(usePage().props.flash.successMessage, {
    autoClose: 2000,
  });
}
</script>

<style>
</style>
