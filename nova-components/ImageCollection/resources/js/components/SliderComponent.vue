<template>
    <div class="" v-for="(image, key) in ImageSlider" :key="key">
        <div class="grid grid-cols-4 gap-x-6 gap-y-2">
            <div class="h-full flex items-start justify-center">
                <div class="relative w-full">
                    <button type="button" @click="removeImageSlider(image.key, 'slider')"
                        class="rounded-full shadow bg-white dark:bg-gray-800 text-center flex items-center justify-center h-[20px] w-[21px] absolute z-20 top-[-10px] right-[-9px] v-popper--has-tooltip"
                        dusk="logo-delete-link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" width="20" height="20"
                            class="inline-block text-gray-800 dark:text-gray-200" role="presentation">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                clip-rule="evenodd"></path>
                        </svg></button>
                    <div
                        class="bg-gray-50 relative aspect-square flex items-center justify-center border-2 border-gray-200 dark:border-gray-700 overflow-hidden rounded-lg">
                        <img :src="image.value" :alt="image.key" class="aspect-square object-scale-down">
                    </div>
                    <p class="font-semibold text-xs mt-1">{{ image.key }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group flex flex-col bg-[#b93939] my-5 mt-3 py-1.5 gap-y-2 w-full " v-for="(input, key) in inputs"
        :key="input.id">
        <div @click="AddFirstBanner(input.id)"
            class="block cursor-pointer p-4 bg-gray-50 dark:bg-gray-900 dark:hover:bg-gray-900 border-4 border-dashed hover:border-gray-300 dark:border-gray-700 dark:hover:border-gray-600 rounded-lg">
            <div class="flex items-center space-x-4 pointer-events-none">
                <p class="text-center pointer-events-none">
                <div size="lg" align="center" class="shadow relative bg-primary-500 hover:bg-primary-400 text-white dark:text-gray-900
              cursor-pointer rounded text-sm font-bold focus:outline-none focus:ring ring-primary-200
               dark:ring-gray-600 inline-flex items-center justify-center h-9 px-3 shadow relative
               bg-primary-500 hover:bg-primary-400 text-white dark:text-gray-900">Choose File</div>
                </p>
                <p class="pointer-events-none text-center text-sm text-gray-500 dark:text-gray-400 font-semibold">Drop
                    file
                    or click to choose</p>
            </div>
        </div>
        <div class="flex flex-row items-center justify-start my-2">
            <input type="file" class=" w-full my-2 h-[36px] px-2 py-1 border-b border-2 hidden" :id="input.id"
                @change="setImeageSlider($event, input.id)" placeholder="الرجاء اختيار الصورة" />
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
        <button class="w-6 h-6" v-if="key == inputs.length - 1" @click="add">
            <img src="https://media.discordapp.net/attachments/938405759996276806/1057012477243707402/more.png"
                class="w-[24px] h-[24px]" alt="ssss" />
        </button>
    </div>
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
            ImageSlider: [],
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
        removeImageSlider(key, type) {
            axios.post("/removeImageSlider", {
                key: key,
                type: type,
            });
            this.getImeageSlider();
        },
        AddFirstBanner(key) {
            document.getElementById(key).click();
        },
        fill(formData) {
            formData.append(this.field.attribute, this.value || "");
        },


        getImeageSlider() {
            axios.post("/getImeageSlider").then((response) => {
                this.ImageSlider = response.data;
                // console.log('this.ImageSlider', this.ImageSlider)
            });
        },
        setImeageSlider(event, key) {
            console.log("name", event.target.files[0].name);
            console.log("ref", event.target.files[0]);
            let formData = new FormData();
            formData.append("file", event.target.files[0]);
            formData.append("key", key);
            console.log("formDataa", formData);
            axios
                .post("/setImeageSlider", formData, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    },
                })
                .then((response) => {
                    console.log("on then");
                    this.getImeageSlider();
                    console.log("intime slider ", this.ImageSlider);
                })
                .catch((error) => {
                    this.errors = error.response.data.errors;
                });
        },
    },
    beforeMount() {
        this.getImeageSlider();
    }
}
</script>





