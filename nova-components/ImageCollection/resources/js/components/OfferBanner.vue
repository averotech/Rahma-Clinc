<template>
  <!-- Add ImageofferBanner List -->
  <div v-for="(input, key) in ImeageofferBanner" :key="key">
    <!-- show OfferList Grop -->
    <div class="mt-1 md:mt-0 pb-5  md:w-full md:py-5">
      <div>
        <div class="relative mb-4 pb-1" id="cmiH9zU5bwMG5HBG" dusk="navbar-0">
          <div class="w-full shrink">
            <!-- top componentView -->
            <div class="border-t border-r border-l border-gray-200 dark:border-gray-700 rounded-t-lg">
              <div
                class="h-8 leading-normal h-full flex items-center box-content border-b border-gray-200 dark:border-gray-700">
                <button dusk="collapse-group" type="button"
                  class="group-control btn border-r border-gray-200 dark:border-gray-700 w-8 h-8 block"
                  title="Collapse"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" width="16" height="16" class="inline-block align-top" role="presentation">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6"></path>
                  </svg></button>
                <p class="text-80 grow px-4"><span class="mr-3 font-semibold">#1</span> {{ input.key }}</p>
                <div class="flex">
                  <button dusk="delete-group" type="button" @click="removeImageSlider(input.key, 'offer_Banner')"
                    class="group-control btn border-l border-gray-200 dark:border-gray-700 w-8 h-8 block"
                    title="Delete"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                      stroke="currentColor" width="16" height="16" class="inline-block" role="presentation">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                      </path>
                    </svg></button>
                </div>
              </div>
            </div>
            <!--end top componentView -->
            <!-- Inputs and Labels -->
            <div class="grow border-b border-r border-l border-gray-200 dark:border-gray-700 rounded-b-lg">
              <div class="flex flex-col md:flex-row">
                <div class="px-6 md:px-8 mt-2 md:mt-0 w-full md:w-1/5 md:py-5">
                  <label for="name-default-text-field" class="inline-block pt-2 leading-tight">image </label>
                </div>
                <!-- First Input -->
                <div class="offerBannerImage-contener flex flex-row items-center justify-center w-full ">
                  <div class=" offerBannerImage h-full flex items-start justify-center">
                    <div class="relative w-full">
                      <div
                        class="bg-gray-50 relative aspect-square flex items-center justify-center border-2 border-gray-200 dark:border-gray-700 overflow-hidden rounded-lg">
                        <img :src="input.images" :alt="input.key" class="aspect-square object-scale-down w-28 h-28">
                      </div>
                      <p class="font-semibold text-xs mt-1">{{ input.key }}</p>
                    </div>
                    <div v-if="ThirdBannernewPhotoToShow" class="px-4">
                      <p>your file Path is: 0main_img_workplace</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end First Input -->
              <!-- Second Input -->
              <div class="flex flex-col md:flex-row remove-bottom-border offerBannerInput mt-8">
                <div class="px-6 md:px-8 mt-2 md:mt-0 w-full md:w-1/4 md:py-5">
                  <label for="select_name-default-select-field" class="inline-block pt-2 leading-tight">title
                    <span class="text-red-500 text-sm">*</span>
                  </label>
                </div>
                <div class="mt-1 md:mt-0 pb-5 px-6 md:px-0 md:w-3/5 w-full md:py-5">
                  <div class="space-y-1"><input type="text" :value="input.title"
                      class="w-full form-control form-input form-input-bordered" id="name-default-text-field"
                      dusk="cmiH9zU5bwMG5HBG__name" maxlength="-1"></div>
                </div>
              </div>
              <!--end Second Input -->
              <!-- third Input -->
              <div class="flex flex-col md:flex-row remove-bottom-border  ">
                <div class="px-6 md:px-8 mt-2 md:mt-0 w-full md:w-1/4 md:py-5">
                  <label for="select_name-default-select-field" class="inline-block pt-2 leading-tight">video
                    title
                    <span class="text-red-500 text-sm">*</span>
                  </label>
                </div>
                <div class="mt-1 md:mt-0 pb-5 px-6 md:px-0 md:w-3/5 w-full md:py-5">
                  <div class="space-y-1"><input type="text" :value="input.videotitle"
                      class="w-full form-control form-input form-input-bordered" id="name-default-text-field"
                      dusk="cmiH9zU5bwMG5HBG__name" maxlength="-1"></div>
                </div>
              </div>
              <!-- end third Input -->
              <!-- Forth Input -->
              <div class="flex flex-col md:flex-row remove-bottom-border  ">
                <div class="px-6 md:px-8 mt-2 md:mt-0 w-full md:w-1/4 md:py-5">
                  <label for="select_name-default-select-field" class="inline-block pt-2 leading-tight">price

                    <span class="text-red-500 text-sm">*</span>
                  </label>
                </div>
                <div class="mt-1 md:mt-0 pb-5 px-6 md:px-0 md:w-3/5 w-full md:py-5">
                  <div class="space-y-1"><input type="text" :value="input.price"
                      class="w-full form-control form-input form-input-bordered" id="name-default-text-field"
                      dusk="cmiH9zU5bwMG5HBG__name" maxlength="-1"></div>
                </div>
              </div>
              <!-- end Forth Input -->
              <!-- Fifth Input -->
              <div class="flex flex-col md:flex-row remove-bottom-border  ">
                <div class="px-6 md:px-8 mt-2 md:mt-0 w-full md:w-1/4 md:py-5">
                  <label for="select_name-default-select-field" class="inline-block pt-2 leading-tight">description
                    <span class="text-red-500 text-sm">*</span>
                  </label>
                </div>
                <div class="mt-1 md:mt-0 pb-5 px-6 md:px-0 md:w-3/5 w-full md:py-5">
                  <div class="space-y-1"><input type="text" :value="input.description"
                      class="w-full form-control form-input form-input-bordered" id="name-default-text-field"
                      dusk="cmiH9zU5bwMG5HBG__name" maxlength="-1"></div>
                </div>
              </div>
              <!-- end Fifth Input -->
              <!-- Six Input -->
              <div class="flex flex-col md:flex-row remove-bottom-border  ">
                <div class="px-6 md:px-8 mt-2 md:mt-0 w-full md:w-1/4 md:py-5">
                  <label for="select_name-default-select-field" class="inline-block pt-2 leading-tight">button
                    title
                    <span class="text-red-500 text-sm">*</span>
                  </label>
                </div>
                <div class="mt-1 md:mt-0 pb-5 px-6 md:px-0 md:w-3/5 w-full md:py-5">
                  <div class="space-y-1"><input type="text" :value="input.buttonTitle"
                      class="w-full form-control form-input form-input-bordered" id="name-default-text-field"
                      dusk="cmiH9zU5bwMG5HBG__name" maxlength="-1"></div>
                </div>
              </div>
              <!-- end Six Input -->
              <!-- siventh Input -->
              <div class="flex flex-col md:flex-row remove-bottom-border  ">
                <div class="px-6 md:px-8 mt-2 md:mt-0 w-full md:w-1/4 md:py-5">
                  <label for="select_name-default-select-field" class="inline-block pt-2 leading-tight">button
                    link
                    <span class="text-red-500 text-sm">*</span>
                  </label>
                </div>
                <div class="mt-1 md:mt-0 pb-5 px-6 md:px-0 md:w-3/5 w-full md:py-5">
                  <div class="space-y-1"><input type="text" :value="input.buttonLink"
                      class="w-full form-control form-input form-input-bordered" id="name-default-text-field"
                      dusk="cmiH9zU5bwMG5HBG__name" maxlength="-1"></div>
                </div>
              </div>
              <!-- end siventh Input -->
            </div>
            <!--end Inputs and Labels -->
          </div>
        </div>
      </div>
    </div>
    <!-- end show OfferList Grop -->
  </div>
  <!-- End ImageofferBanner List -->
  <!-- Add New Image Offer -->
  <div class="form-group flex flex-col bg-[#b93939] mt-3 py-1.5 gap-y-2 w-full" v-for="(input, key) in inputs"
    :key="input.id">
    <!--Add Single Offer -->
    <!-- show OfferList Grop -->
    <div v-if="showOfferBannerData == true" class="mt-1 md:mt-0 pb-5  md:w-full md:py-5">
      <div>
        <div class="relative mb-4 pb-1" id="cmiH9zU5bwMG5HBG" dusk="navbar-0">
          <div class="w-full shrink">
            <!-- top componentView -->
            <div class="border-t border-r border-l border-gray-200 dark:border-gray-700 rounded-t-lg">
              <div
                class="h-8 leading-normal h-full flex items-center box-content border-b border-gray-200 dark:border-gray-700">
                <button dusk="collapse-group" type="button"
                  class="group-control btn border-r border-gray-200 dark:border-gray-700 w-8 h-8 block"
                  title="Collapse"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" width="16" height="16" class="inline-block align-top" role="presentation">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6"></path>
                  </svg></button>
                <p class="text-80 grow px-4"><span class="mr-3 font-semibold">#1</span> {{ input.key }}</p>
                <div class="flex">
                </div>
              </div>
            </div>
            <!--end top componentView -->
            <!-- Inputs and Labels -->
            <div class="grow border-b border-r border-l border-gray-200 dark:border-gray-700 rounded-b-lg">
              <!-- First Input -->
              <div class="flex flex-col md:flex-row">
                <div class="px-6 md:px-8 mt-2 md:mt-0 w-full md:w-1/5 md:py-5">
                  <label for="name-default-text-field" class="inline-block pt-2 leading-tight">image </label>
                </div>
                <div class="offerBannerImage-contener flex flex-row items-center justify-center w-full ">
                  <div class=" offerBannerImage h-full flex items-start justify-center">
                    <div class="relative w-full">
                      <div @click="UplodeOfferImage(input.id)"
                        class="bg-gray-50 relative aspect-square text-center cursor-pointer flex items-center justify-center border-2 border-gray-200 dark:border-gray-700 overflow-hidden rounded-lg">
                        <p class="">press to upload photo</p>
                        <input :id="input.id" type="file" class="hidden"
                          @change="offerBanner($event, input.id, key, 'photo')"
                          placeholder="الرجاء اختيار صورة الفيديو" />
                        <!-- <img :src="input.images" :alt="input.key"
                                class="aspect-square object-scale-down w-28 h-28"> -->
                      </div>
                      <!-- <p class="font-semibold text-xs mt-1">{{ input.key }}</p> -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- end First Input -->
              <!-- Second Input -->
              <div class="flex flex-col md:flex-row remove-bottom-border ">
                <div class="px-6 md:px-8 mt-2 md:mt-0 w-full md:w-1/4 md:py-5">
                  <label for="select_name-default-select-field" class="inline-block pt-2 leading-tight">title
                    <span class="text-red-500 text-sm">*</span>
                  </label>
                </div>
                <div class="mt-1 md:mt-0 pb-5 px-6 md:px-0 md:w-3/5 w-full md:py-5">
                  <div class="space-y-1">
                    <input type="text" @change="offerBanner($event, input.id, key, 'title')"
                      class="w-full form-control form-input form-input-bordered" id="name-default-text-field"
                      dusk="cmiH9zU5bwMG5HBG__name" maxlength="-1">
                  </div>
                </div>
              </div>
              <!--end Second Input -->
              <!-- third Input -->
              <div class="flex flex-col md:flex-row remove-bottom-border  ">
                <div class="px-6 md:px-8 mt-2 md:mt-0 w-full md:w-1/4 md:py-5">
                  <label for="select_name-default-select-field" class="inline-block pt-2 leading-tight">video
                    title
                    <span class="text-red-500 text-sm">*</span>
                  </label>
                </div>
                <div class="mt-1 md:mt-0 pb-5 px-6 md:px-0 md:w-3/5 w-full md:py-5">
                  <div class="space-y-1"><input type="text" @change="offerBanner($event, input.id, key, 'videotitle')"
                      class="w-full form-control form-input form-input-bordered" id="name-default-text-field"
                      dusk="cmiH9zU5bwMG5HBG__name" maxlength="-1"></div>
                </div>
              </div>
              <!-- end third Input -->
              <!-- Forth Input -->
              <div class="flex flex-col md:flex-row remove-bottom-border  ">
                <div class="px-6 md:px-8 mt-2 md:mt-0 w-full md:w-1/4 md:py-5">
                  <label for="select_name-default-select-field" class="inline-block pt-2 leading-tight">price

                    <span class="text-red-500 text-sm">*</span>
                  </label>
                </div>
                <div class="mt-1 md:mt-0 pb-5 px-6 md:px-0 md:w-3/5 w-full md:py-5">
                  <div class="space-y-1"><input type="text" @change="offerBanner($event, input.id, key, 'price')"
                      class="w-full form-control form-input form-input-bordered" id="name-default-text-field"
                      dusk="cmiH9zU5bwMG5HBG__name" maxlength="-1"></div>
                </div>
              </div>
              <!-- end Forth Input -->
              <!-- Fifth Input -->
              <div class="flex flex-col md:flex-row remove-bottom-border  ">
                <div class="px-6 md:px-8 mt-2 md:mt-0 w-full md:w-1/4 md:py-5">
                  <label for="select_name-default-select-field" class="inline-block pt-2 leading-tight">description
                    <span class="text-red-500 text-sm">*</span>
                  </label>
                </div>
                <div class="mt-1 md:mt-0 pb-5 px-6 md:px-0 md:w-3/5 w-full md:py-5">
                  <div class="space-y-1"><input type="text" @change="offerBanner($event, input.id, key, 'description')"
                      class="w-full form-control form-input form-input-bordered" id="name-default-text-field"
                      dusk="cmiH9zU5bwMG5HBG__name" maxlength="-1"></div>
                </div>
              </div>
              <!-- end Fifth Input -->
              <!-- Six Input -->
              <div class="flex flex-col md:flex-row remove-bottom-border  ">
                <div class="px-6 md:px-8 mt-2 md:mt-0 w-full md:w-1/4 md:py-5">
                  <label for="select_name-default-select-field" class="inline-block pt-2 leading-tight">button
                    title
                    <span class="text-red-500 text-sm">*</span>
                  </label>
                </div>
                <div class="mt-1 md:mt-0 pb-5 px-6 md:px-0 md:w-3/5 w-full md:py-5">
                  <div class="space-y-1"><input type="text" @change="offerBanner($event, input.id, key, 'buttonTitle')"
                      class="w-full form-control form-input form-input-bordered" id="name-default-text-field"
                      dusk="cmiH9zU5bwMG5HBG__name" maxlength="-1"></div>
                </div>
              </div>
              <!-- end Six Input -->
              <!-- siventh Input -->
              <div class="flex flex-col md:flex-row remove-bottom-border  ">
                <div class="px-6 md:px-8 mt-2 md:mt-0 w-full md:w-1/4 md:py-5">
                  <label for="select_name-default-select-field" class="inline-block pt-2 leading-tight">button
                    link
                    <span class="text-red-500 text-sm">*</span>
                  </label>
                </div>
                <div class="mt-1 md:mt-0 pb-5 px-6 md:px-0 md:w-3/5 w-full md:py-5">
                  <div class="space-y-1"><input type="text" @change="offerBanner($event, input.id, key, 'buttonLink')"
                      class="w-full form-control form-input form-input-bordered" id="name-default-text-field"
                      dusk="cmiH9zU5bwMG5HBG__name" maxlength="-1"></div>
                </div>
              </div>
              <!-- end siventh Input -->
            </div>
            <!--end Inputs and Labels -->
          </div>
        </div>
      </div>
    </div>
    <!-- end show OfferList Grop -->

    <!--End Single Offer -->
  </div>
  <!-- Add Layout Button -->
  <div class="relative">
    <button size="lg" align="center" component="button" dusk="toggle-layouts-dropdown-or-add-default" type="button"
      tabindex="0" @click="addOfferBannerList" class="shadow relative bg-primary-500 hover:bg-primary-400 text-white
          dark:text-gray-900 cursor-pointer rounded text-sm font-bold focus:outline-none
          focus:ring ring-primary-200 dark:ring-gray-600 inline-flex items-center justify-center h-9 px-3
          shadow relative bg-primary-500 hover:bg-primary-400 text-white dark:text-gray-900">
      <span>Add layout</span>
    </button>
    <!-- Save Button -->
    <div class="flex flex-row w-full items-center justify-end">
      <div v-if="showOfferBannerData == true"
        class="bg-primary-500 hover:bg-primary-400 text-white dark:text-gray-900 ml-auto cursor-pointer rounded
           text-sm font-bold focus:outline-none focus:ring ring-primary-200 dark:ring-gray-600 inline-flex items-center justify-center h-9 px-6 shadow relative bg-primary-500 hover:bg-primary-400 "
        type="submit" @click="setImeageofferBanner">
        save
      </div>
    </div>
    <!-- End Save Button -->
  </div>
  <!-- End Layout Button -->
  <!-- End Add New Image Offer -->
</template>

<script>
import { FormField, HandlesValidationErrors } from "laravel-nova";
import axios from "axios";
import { v4 as uuid } from "uuid";
export default {
  mixins: [FormField, HandlesValidationErrors],
  props: ["resourceName", "resourceId", "field"],
  data() {
    return {
      ImeageofferBanner: [],
      offerBannerArray: [],
      keyValofferBanner: [],
      ThirdBannernewPhotoToShow: "",
      counter: 0,
      showOfferBannerData: false,
      inputs: [
        {
          id: uuid(),
          value: "",
        },]
    }
  },
  methods: {
    add() {
      this.inputs.push({ id: uuid(), value: "" });
    },
    remove(index) {
      this.inputs = this.inputs?.filter((item) => item?.id !== index);
    },
    UplodeOfferImage(key) {
      document.getElementById(key).click();
    },
    offerBanner(e, key, index, type) {
      if (type == "photo") {
        if (!this.offerBannerArray[index]) {
          this.keyValofferBanner.push(key);
          this.offerBannerArray.push({ [key]: { [type]: e.target.files[0] } });
          this.ThirdBannernewPhotoToShow = "0main_img_workplace";

          console.log(e.target.files[0]);
        } else {
          this.offerBannerArray[index][key][type] = e.target.files[0];
          this.ThirdBannernewPhotoToShow = "0main_img_workplace";
          console.log(e.target.files[0]);
        }
      }
      //
      if (type == "videotitle") {
        if (!this.offerBannerArray[index]) {
          this.keyValofferBanner.push(key);
          this.offerBannerArray.push({ [key]: { [type]: e.target.value } });
        } else {
          this.offerBannerArray[index][key][type] = e.target.value;
        }
      } else if (type === "title") {
        if (!this.offerBannerArray[index]) {
          this.keyValofferBanner.push(key);
          this.offerBannerArray.push({ [key]: { [type]: e.target.value } });
        } else {
          this.offerBannerArray[index][key][type] = e.target.value;
        }
      } else if (type === "price") {
        if (!this.offerBannerArray[index]) {
          this.keyValofferBanner.push(key);
          this.offerBannerArray.push({ [key]: { [type]: e.target.value } });
        } else {
          this.offerBannerArray[index][key][type] = e.target.value;
        }
      } else if (type === "description") {
        if (!this.offerBannerArray[index]) {
          this.keyValofferBanner.push(key);
          this.offerBannerArray.push({ [key]: { [type]: e.target.value } });
        } else {
          this.offerBannerArray[index][key][type] = e.target.value;
        }
      } else if (type === "buttonTitle") {
        if (!this.offerBannerArray[index]) {
          this.keyValofferBanner.push(key);
          this.offerBannerArray.push({ [key]: { [type]: e.target.value } });
        } else {
          this.offerBannerArray[index][key][type] = e.target.value;
        }
      } else if (type === "buttonLink") {
        if (!this.offerBannerArray[index]) {
          this.keyValofferBanner.push(key);
          this.offerBannerArray.push({ [key]: { [type]: e.target.value } });
        } else {
          this.offerBannerArray[index][key][type] = e.target.value;
        }
      }
      console.log("baner", this.offerBannerArray);
      console.log("key", this.keyValofferBanner);
    },
    addOfferBannerList(e) {
      e.preventDefault();
      if (this.counter == 0) {
        this.showOfferBannerData = true;
      }
      this.counter++;
      if (this.counter > 1) {
        this.inputs.push({ id: uuid(), value: "" });
      }
      console.log(this.counter);
    },

    setImeageofferBanner() {
      let formData = new FormData();
      for (let index = 0; index < this.keyValofferBanner.length; index++) {
        formData.append(
          "file",
          this.offerBannerArray[index][this.keyValofferBanner[index]]["photo"]
        );
        formData.append(
          "videotitle",
          this.offerBannerArray[index][this.keyValofferBanner[index]][
          "videotitle"
          ]
        );
        formData.append(
          "title",
          this.offerBannerArray[index][this.keyValofferBanner[index]]["title"]
        );
        formData.append(
          "price",
          this.offerBannerArray[index][this.keyValofferBanner[index]]["price"]
        );
        formData.append(
          "description",
          this.offerBannerArray[index][this.keyValofferBanner[index]][
          "description"
          ]
        );
        formData.append(
          "buttonTitle",
          this.offerBannerArray[index][this.keyValofferBanner[index]][
          "buttonTitle"
          ]
        );
        formData.append(
          "buttonLink",
          this.offerBannerArray[index][this.keyValofferBanner[index]][
          "buttonLink"
          ]
        );
        formData.append("key", this.keyValofferBanner[index]);
        axios.post("/setImeageofferBanner", formData, {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        });
      }
    },
    getImeageofferBanner() {
      axios.post("/getImeageofferBanner").then((response) => {
        this.ImeageofferBanner = response.data;
        // console.log("ImeageofferBanner", this.ImeageofferBanner);
      });
    },

  },
  beforeMount() {
    this.getImeageofferBanner();
  }
}
</script>