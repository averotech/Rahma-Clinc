<template>
        <div v-for="(item, key) in ImageFourthBanner" :key="key">
          <div
            class=" relative flex flex-col items-center bg-transparent border-2 border-gray-500 justify-start w-full forthBannerContainer">
            <img class="imageFourthBannershow" :src="item.images" alt="item.key">
            <div dir="rtl" class="flex flex-row items-start justify-start  w-full">
              <p class=" text-black text-xl ">العنوان:</p>
              <p class=" text-black text-xl  px-4">{{ item.title }}</p>
            </div>
            <div dir="rtl" class="flex flex-row items-strat pt-2 pb-4 justify-start w-full">
              <p class=" text-black text-lg ">الوصف:</p>
              <p class=" text-black text-lg  text-left px-2 ">{{ item.subtitle }}</p>
            </div>

            <svg @click="removeImageSlider(item.key, 'Fourth_Banner')" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20" fill="currentColor" width="20" height="20"
              class="absolute closeForthBannerIcons text-gray-800 dark:text-gray-200 cursor-pointer"
              role="presentation">
              <path fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                clip-rule="evenodd"></path>
            </svg>
          </div>
        </div>
        <div class="form-group flex flex-col bg-[#b93939] mt-3 py-1.5 gap-y-2 w-full" v-for="(input, key) in inputs"
          :key="input.id">
          <div class="flex flex-row items-center justify-start">
            <div class="flex flex-col items-start justify-start my-2 gap-y-2 w-full">
              <input type="file" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2" ref="myFiles"
                @change="FourthBanner($event, input.id, key, 'photo')" placeholder="الرجاء اختيار الصورة" />
              <input type="text" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2"
                @change="FourthBanner($event, input.id, key, 'title')" placeholder="الرجاء كتابة اسم الشخص" />
              <input type="text" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2"
                @change="FourthBanner($event, input.id, key, 'subtitle')" placeholder="الرجاء كتابة الوصف" />
            </div>
            <div class="removeIcon" v-if="inputs.length > 1" v-on:click="remove(input.id)">
              <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect width="23" height="23" fill="url(#pattern01)" />
                <defs>
                  <pattern id="pattern01" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_1_3" transform="scale(0.03125)" />
                  </pattern>
                  <image id="image0_1_3" width="32" height="32"
                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAABGUlEQVR4nO2WsU7DMBCGPzEwBEbYMiB2HgAJ8QIs5an6In2FjqngERoxRkIM6c7WzejoRTqsNMRxaoTkX7IsX2L9n+/OUSArK1zPwA5w3pDYggTa9Zh3o00B4HSMjUcbuZnG/wOYI63RZXEZgJ8pjF1Hl8BlAHIJ+LUnmr9swgYozfozNUCp85nO9wqRDED0CLwBNwbC1zVQAXecAGCtsXcD4Ztv9Z3qFAAFsNH4B3Drmdf6TCCuQgHGqtDTWQh78lHmsdfoAngx5Qg6eadWNz0wHeLVHKQOMRctJ/z57IGn790Hsy7tQ415VOcK0Uaab00mgiGmqK/hhm7HrBq6akkgKmMuML4uTTnklswu+bwKRJ+5hVhJL3wBanf6orViRbcAAAAASUVORK5CYII=" />
                </defs>
              </svg>
            </div>
          </div>
          <button class="w-8 h-8" v-if="key == inputs.length - 1" @click="add">
            <img src="https://media.discordapp.net/attachments/938405759996276806/1057012477243707402/more.png"
              class="w-[23px] h-[22px]" alt="AddingIcons">

          </button>
        </div>
        <div
          class="bg-primary-500 hover:bg-primary-400 text-white dark:text-gray-900 ml-auto cursor-pointer rounded text-sm font-bold focus:outline-none focus:ring ring-primary-200 dark:ring-gray-600 inline-flex items-center justify-center h-9 px-6 shadow relative bg-primary-500 hover:bg-primary-400"
          type="submit" @click="setImageFourthBanner">
          save
        </div>
</template>
<script>
import { FormField, HandlesValidationErrors } from "laravel-nova";
import SliderComponent from './SliderComponent.vue'
import OurServices from './OurServices.vue'
import OfferBanner from './OfferBanner.vue'


import axios from "axios";
import { v4 as uuid } from "uuid";
export default {
  mixins: [FormField, HandlesValidationErrors],
  props: ["resourceName", "resourceId", "field"],

  data() {
    return {
      ImageFourthBanner: [],
      FourthBannerArray: [],
      keyValFourthBanner: [],
      inputs: [
        {
          id: uuid(),
          value: "",
        },
      ],
    };
  },
  methods: {
    FourthBanner(e, key, index, type) {
      if (type == "photo") {
        if (!this.FourthBannerArray[index]) {
          this.keyValFourthBanner.push(key);
          this.FourthBannerArray.push({ [key]: { [type]: e.target.files[0] } });
          console.log(this.FourthBannerArray);
        } else {
          this.FourthBannerArray[index][key][type] = e.target.files[0];
        }
      }
      if (type == "title") {
        if (!this.FourthBannerArray[index]) {
          this.keyValFourthBanner.push(key);
          this.FourthBannerArray.push({ [key]: { [type]: e.target.value } });
        } else {
          this.FourthBannerArray[index][key][type] = e.target.value;
        }
      } else if (type === "subtitle") {
        if (!this.FourthBannerArray[index]) {
          this.keyValFourthBanner.push(key);
          this.FourthBannerArray.push({ [key]: { [type]: e.target.value } });
        } else {
          this.FourthBannerArray[index][key][type] = e.target.value;
        }
      }
    },
    add() {
      this.inputs.push({ id: uuid(), value: "" });
    },



    remove(index) {
      this.inputs = this.inputs?.filter((item) => item?.id !== index);
    },
    /*
     * Set the initial, internal value for the field.
     */

    /**
     * Fill the given FormData object with the field's internal value.
     */
    fill(formData) {
      formData.append(this.field.attribute, this.value || "");
    },

    setImageFourthBanner() {
      let formData = new FormData();
      console.log("asd");
      for (let index = 0; index < this.keyValFourthBanner.length; index++) {
        formData.append(
          "file",
          this.FourthBannerArray[index][this.keyValFourthBanner[index]]["photo"]
        );
        formData.append(
          "title",
          this.FourthBannerArray[index][this.keyValFourthBanner[index]]["title"]
        );
        formData.append(
          "subtitle",
          this.FourthBannerArray[index][this.keyValFourthBanner[index]][
          "subtitle"
          ]
        );
        formData.append("key", this.keyValFourthBanner[index]);
        axios.post("/setImageFourthBanner", formData, {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        });
      }
    },

    getImageFourthBanner() {
      axios.post("/getImageFourthBanner").then((response) => {
        this.ImageFourthBanner = response.data;
        console.log("ImageFourthBanner", this.ImageFourthBanner);
      });
    },
  },
  beforeMount() {
    this.getImageFourthBanner();
  },
};</script>