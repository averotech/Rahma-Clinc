<template >
  <DefaultField :field="field" :errors="errors" :show-help-text="showHelpText" :full-width-content="fullWidthContent">
    <template #field>

      <div v-if="field.type == 1">
        <div class="form-group flex flex-col bg-[#b93939] my-3 py-1.5 gap-y-2 w-full " v-for="(input, key) in inputs"
          :key="input.id">
          <div class="flex flex-row items-center justify-start my-2">
            <input type="file" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2 " ref="myFiles"
              @change="setAboutusSlidergit ($event, input.id)" placeholder="الرجاء اختيار الصورة" />
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
            <img src="https://image.shutterstock.com/image-vector/add-icon-260nw-571594759.jpg"
              class="w-[24px] h-[24px]" alt="ssss">
          </button>
        </div>
        <div
          class=" bg-primary-500 hover:bg-primary-400 text-white dark:text-gray-900 ml-auto cursor-pointer rounded text-sm font-bold focus:outline-none focus:ring ring-primary-200 dark:ring-gray-600 inline-flex items-center justify-center h-9 px-6 shadow relative bg-primary-500 hover:bg-primary-400 "
          type="submit" @click="setImeageSlider()">
          save
        </div>
      </div>

      <!-- second Slider -->

      <div v-if="field.type == 5">
        <div class="form-group flex flex-col bg-[#b93939] my-3 py-1.5 gap-y-2 w-full " v-for="(input, key) in inputs"
          :key="input.id">
          <div class="flex flex-row items-center justify-start my-2">
            <input type="file" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2 " ref="myFiles"
              @change="upload($event, input.id)" placeholder="الرجاء اختيار الصورة" />
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
            <img src="https://image.shutterstock.com/image-vector/add-icon-260nw-571594759.jpg"
              class="w-[24px] h-[24px]" alt="ssss">
          </button>
        </div>
        <div
          class=" bg-primary-500 hover:bg-primary-400 text-white dark:text-gray-900 ml-auto cursor-pointer rounded text-sm font-bold focus:outline-none focus:ring ring-primary-200 dark:ring-gray-600 inline-flex items-center justify-center h-9 px-6 shadow relative bg-primary-500 hover:bg-primary-400 "
          type="submit" @click="setImeageSlider()">
          save
        </div>
      </div>






      <!-- endSecond Slider -->
      <div v-else-if="field.type == 2">
        <form action="" v-on:submit="setImeagesecondBanner">
          <div class="form-group flex flex-col bg-[#b93939] mt-3 py-1.5 gap-y-2 w-full " v-for="(input, key) in inputs"
            :key="input.id">
            <div class="flex flex-row items-center justify-start">
              <div class="flex flex-col items-start justify-start my-2 gap-y-2">
                <input type="file" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2 " ref="myFiles"
                  @change="secondBanner($event, input.id, key, 'photo')" placeholder="الرجاء اختيار الصورة" />
                <input type="text" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2 " ref="title"
                  @change="secondBanner($event, input.id, key, 'title')" placeholder="الرجاء كتابة العنوان" />
                <input type="text" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2 " ref="title"
                  @change="secondBanner($event, input.id, key, 'subtitle')" placeholder="الرجاء كتابة الوصف" />
                <input type="text" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2 " ref="title"
                  @change="secondBanner($event, input.id, key, 'buttonText')" placeholder="button Title" />
                <input type="text" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2 " ref="title"
                  @change="secondBanner($event, input.id, key, 'buttonLink')" placeholder="button Link" />
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
              <img src="https://image.shutterstock.com/image-vector/add-icon-260nw-571594759.jpg"
                class="w-[24px] h-[24px]" alt="ssss">
            </button>
          </div>
          <div
            class=" bg-primary-500 hover:bg-primary-400 text-white dark:text-gray-900 ml-auto cursor-pointer rounded text-sm font-bold focus:outline-none focus:ring ring-primary-200 dark:ring-gray-600 inline-flex items-center justify-center h-9 px-6 shadow relative bg-primary-500 hover:bg-primary-400 "
            type="submit" @click="setImeagesecondBanner()">
            save
          </div>
        </form>
      </div>
      <div v-else-if="field.type == 3">
        <div class="form-group flex flex-col bg-[#b93939] mt-3 py-1.5 gap-y-2 w-full " v-for="(input, key) in inputs"
          :key="input.id">
          <div class="flex flex-row items-center justify-start">
            <div class="flex flex-col items-start justify-start my-2 gap-y-2">
              <input type="file" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2 " ref="myFiles"
                @change="previewFiles($event, key)" placeholder="الرجاء اختيار صورة الفيديو" />
              <input type="text" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2 " ref="title"
                @change="servicesTitle($event, key)" placeholder="الرجاء كتابة عنوان الفيديو" />
              <input type="text" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2 " ref="title"
                @change="servicesTitle($event, key)" placeholder="الرجاء كتابة العنوان" />
              <input type="text" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2 " ref="title"
                @change="servicesSubTitle($event, key)" placeholder="الرجاء كتابة السعر" />
              <input type="text" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2 " ref="title"
                @change="servicesSubTitle($event, key)" placeholder="الرجاء كتابة الوصف" />
              <input type="text" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2 " ref="title"
                @change="servicesButtonTitle($event, key)" placeholder="button Title" />
              <input type="text" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2 " ref="title"
                @change="servicesButtonLink($event, key)" placeholder="button Link" />
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
            <img src="https://image.shutterstock.com/image-vector/add-icon-260nw-571594759.jpg"
              class="w-[24px] h-[24px]" alt="ssss">
            <!-- <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink">
              <rect width="24" height="24" fill="url(#pattern0)" />
              <defs>
                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image0_1_2" transform="scale(0.0416667)" />
                </pattern>
                <image id="image0_1_2" width="24" height="24"
                  xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAW0lEQVR4nO2VQQrAIAwE53n+/wnxIdtLC0WQqKGkhwzkZMzAEhSKTRrQAR2W3TOmWGC4XpIpT9Mp8u6nCxQ8LwHbEWmx/isYqS0iPSKPfIF9/Vy3oMS8D6dg5ALzIZ+a+RX41gAAAABJRU5ErkJggg==" />
              </defs>
            </svg> -->
          </button>
        </div>
        <div
          class=" bg-primary-500 hover:bg-primary-400 text-white dark:text-gray-900 ml-auto cursor-pointer rounded text-sm font-bold focus:outline-none focus:ring ring-primary-200 dark:ring-gray-600 inline-flex items-center justify-center h-9 px-6 shadow relative bg-primary-500 hover:bg-primary-400 "
          type="submit" @click="setImeageSlider()">
          save
        </div>
      </div>
      <div v-else-if="field.type == 4">
        <div class="form-group flex flex-col bg-[#b93939] mt-3 py-1.5 gap-y-2 w-full " v-for="(input, key) in inputs"
          :key="input.id">
          <div class="flex flex-row items-center justify-start">
            <div class="flex flex-col items-start justify-start my-2 gap-y-2">
              <input type="file" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2 " ref="myFiles"
                @change="previewFiles($event, key)" placeholder="الرجاء اختيار الصورة" />
              <input type="text" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2 "
                @change="servicesTitle($event, key)" placeholder="الرجاء كتابة اسم الشخص" />
              <input type="text" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2 "
                @change="servicesSubTitle($event, key)" placeholder="الرجاء كتابة الوصف" />
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
            <img src="https://image.shutterstock.com/image-vector/add-icon-260nw-571594759.jpg"
              class="w-[24px] h-[24px]" alt="ssss">
            <!-- <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink">
              <rect width="24" height="24" fill="url(#pattern0)" />
              <defs>
                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image0_1_2" transform="scale(0.0416667)" />
                </pattern>
                <image id="image0_1_2" width="24" height="24"
                  xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAW0lEQVR4nO2VQQrAIAwE53n+/wnxIdtLC0WQqKGkhwzkZMzAEhSKTRrQAR2W3TOmWGC4XpIpT9Mp8u6nCxQ8LwHbEWmx/isYqS0iPSKPfIF9/Vy3oMS8D6dg5ALzIZ+a+RX41gAAAABJRU5ErkJggg==" />
              </defs>
            </svg> -->
          </button>
        </div>
        <div
          class=" bg-primary-500 hover:bg-primary-400 text-white dark:text-gray-900 ml-auto cursor-pointer rounded text-sm font-bold focus:outline-none focus:ring ring-primary-200 dark:ring-gray-600 inline-flex items-center justify-center h-9 px-6 shadow relative bg-primary-500 hover:bg-primary-400 "
          type="submit" @click="setImeageSlider()">
          save
        </div>
      </div>
    </template>
  </DefaultField>
</template>
<script>
import { FormField, HandlesValidationErrors } from "laravel-nova";
import axios from "axios";
import { v4 as uuid } from 'uuid'
export default {
  mixins: [FormField, HandlesValidationErrors],
  props: ["resourceName", "resourceId", "field"],
  data() {
    return {
      ImeageSlider: [],
      secondBannerArray: [],
      inputs: this.field.type == 1 ? [{
        id: uuid(),
        value: '',
      }] :
        [{
          id: uuid(),
          value: '',
          title: '',
          subtitle: '',
          button: '',
          buttonLink: '',
        }],
    }
  },
  //   mounted(){
  //   console.log('ssssssss',this.field.type
  // );
  // },
  methods: {
    setAboutusSlidergit (event, key) {
      console.log('name', event.target.files[0].name);
      console.log('ref', event.target.files[0]);
      let formData = new FormData();
      formData.append("file", event.target.files[0]);
      formData.append("key", key);
      console.log('formDataa', formData);
      axios.post("/setImeageSlider", formData, {
        headers: {
          "Content-Type": "multipart/form-data",
        },
      });

    },
    addSecondBanner(e) {
      e.preventDefault();
      // this.secondBanner[]

    },
    secondBanner(e, key, index, type) {
      if(type == "photo"){
        if (!this.secondBannerArray[index]) {
          this.secondBannerArray.push({ [key]: { [type]: e.target.files[0]} });
        }else{
          this.secondBannerArray[index][key][type] = e.target.files[0];
        }
      }
      if (type == 'title') {
        if (!this.secondBannerArray[index]) {
          this.secondBannerArray.push({ [key]: { [type]: e.target.value } });
        } else {
          this.secondBannerArray[index][key][type] = e.target.value;
        }
      }
      else if (type === 'subtitle') {
        if (!this.secondBannerArray[index]) {
          this.secondBannerArray.push({ [key]: { [type]: e.target.value } });
        }
        else {
          this.secondBannerArray[index][key][type] = e.target.value;
        }
      }
      else if (type === 'buttonText') {
        if (!this.secondBannerArray[index]) {
          this.secondBannerArray.push({ [key]: { [type]: e.target.value } });
        }
        else {
          this.secondBannerArray[index][key][type] = e.target.value;
        }
      }
      else if (type === 'buttonLink') {
        if (!this.secondBannerArray[index]) {
          this.secondBannerArray.push({ [key]: { [type]: e.target.value } });
        }
        else {
          this.secondBannerArray[index][key][type] = e.target.value;
        }
      }
      console.log(this.secondBannerArray)
    },
    add() {
      this.inputs.push({ id: uuid(), value: "" })
    },
    previewFiles(event, key) {
      this.inputs[key].value = event.target.value
    },
    remove(index) {
      this.inputs = this.inputs?.filter((item) => item?.id !== index);
    },
    /*
     * Set the initial, internal value for the field.
     */
    setInitialValue() {
      this.value = this.field.value || ''
    },
    /**
     * Fill the given FormData object with the field's internal value.
     */
    fill(formData) {
      formData.append(this.field.attribute, this.value || '')
    },
    getImeageSlider() {

      axios.post("/getImeageSlider").then((response) => {
        this.ImeageSlider = response.data;
        console.log("ss",this.ImeageSlider);
      });

    },
    setImeageSlider() {

      axios.post("/setImeageSlider", {
        ImeageSlider: this.ImeageSlider,
        inputs: this.inputs,
      });
    },
       setAboutusSlider(event, key) {

      let formData = new FormData();
      formData.append("file", event.target.files[0]);
      formData.append("key", key);
      console.log('formDataa', formData);
      axios.post("/setaboutusslider", formData, {
        headers: {
          "Content-Type": "multipart/form-data",
        },
      });

    },
     setImeagesecondBanner() {


     axios.post("/setImeagesecondBanner",  {
           year: this.secondBannerArray,

      });
    },
  },
  beforeMount() {
    this.getImeageSlider();

  },
  components: {},
};
</script>
