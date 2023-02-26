<template>
    <div>
        <ul class="layout-list">
            <div v-for="(item, key) in ImagesecondBanner" :key="key">
                <li class="layout-list__item layout-item">
                    <h4 class="layout-item__title">Banner {{ key + 1 }}
                        <button class="btn btn-default btn-danger"
                            @click="removeImageSlider(item.key, 'second_Banner')">Remove</button>
                    </h4>
                    <div class="layout-item__fields">
                        <div class="layout-item__fields__item">
                            <div class="flexible-input-container input-file ">
                                <div class="input-file__input-field">
                                    <label for="0main_img_workplace" class="input-label"> صورة </label>
                                    <p>Click here to upload</p>
                                    <input class="input-file__input" id="0main_img_workplace" type="file">
                                </div>
                                <div class="input-file__values">
                                    <div class="input-file__single imageContainer">
                                        <img class="imageBanner" :src="item.images" alt="item.key">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="layout-item__fields__item pt-3 ">
                            <div class="flexible-input-container">
                                <label for="2text_main_workplace" class="input-label pl-3"> Title </label>
                                <div class="input-control__container">
                                    <input class="input-control" id="2text_main_workplace" type="text"
                                        @change="secondBanner($event, item.id, key, 'title')" :value="item.title">
                                </div>
                            </div>
                        </div>
                        <div class="layout-item__fields__item  pt-3">
                            <div class="flexible-input-container">
                                <label for="3sup_text_workplace " class="input-label pl-3"> Sub Banner </label>
                                <div class="input-control__container">
                                    <input class="input-control " id="3sup_text_workplace" type="text"
                                        :value="item.subtitle">
                                </div>
                            </div>
                        </div>
                        <div class="layout-item__fields__item  pt-3">
                            <div class="flexible-input-container">
                                <label for="4text_bottom_workplace_" class="input-label pl-3"> Button Text </label>
                                <div class="input-control__container">
                                    <input class="input-control" id="4text_bottom_workplace_" type="text"
                                        :value="item.buttonText_">
                                </div>
                            </div>
                        </div>
                        <div class="layout-item__fields__item  pt-3">
                            <div class="flexible-input-container">
                                <label for="5link bottom" class="input-label pl-3"> Button Link </label>
                                <div class="input-control__container">
                                    <input class="input-control" id="5link bottom" :value="item.buttonLink" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
        </ul>
    </div>
    <div class="form-group flex flex-col bg-[#b93939] mt-3 py-1.5 gap-y-2 w-full" v-for="(input, key) in inputs"
        :key="input.id">
        <!-- second Banner Add new List -->
        <div v-if="showSecondBannerData == true" class="layout-list__item layout-item">
            <!-- <h4 class="layout-item__title">Add New Banner
            </h4> -->
            <div class="removeNewBanner">
            <h4 class="layout-item__title">Add New Banner
            </h4>
            <button class="btn btn-default btn-danger" @click="remove(input.id)">Remove</button>
        </div>
            <div class="layout-item__fields">
                <div class="layout-item__fields__item">
                    <div class="flexible-input-container input-file ">
                        <div class="input-file__input-field">
                            <label for="0main_img_workplace" class="input-label"> صورة </label>
                            <p>Click here to upload</p>
                            <input class="input-file__input" id="0main_img_workplace" type="file"
                                @change="secondBanner($event, input.id, key, 'photo')">
                        </div>
                        <div v-if="secondBannernewPhotoToShow">
                            <p>your file Path is: 0main_img_workplace</p>
                        </div>
                    </div>
                </div>
                <div class="layout-item__fields__item pt-3 ">
                    <div class="flexible-input-container">
                        <label for="2text_main_workplace" class="input-label pl-3"> Title </label>
                        <div class="input-control__container">
                            <input class="input-control" id="2text_main_workplace" type="text"
                                @change="secondBanner($event, input.id, key, 'title')"
                                placeholder="please enter the title">
                        </div>
                    </div>
                </div>
                <div class="layout-item__fields__item  pt-3">
                    <div class="flexible-input-container">
                        <label for="3sup_text_workplace " class="input-label pl-3"> Sub Title </label>
                        <div class="input-control__container">
                            <input class="input-control" id="3sup_text_workplace" type="text"
                                @change="secondBanner($event, input.id, key, 'subtitle')"
                                placeholder="please Enter subtitle">
                        </div>
                    </div>
                </div>
                <div class="layout-item__fields__item  pt-3">
                    <div class="flexible-input-container">
                        <label for="4text_bottom_workplace_" class="input-label pl-3"> Button Text </label>
                        <div class="input-control__container">
                            <input class="input-control" id="4text_bottom_workplace_" type="text"
                                @change="secondBanner($event, input.id, key, 'buttonText')"
                                placeholder="please enter button title">
                        </div>
                    </div>
                </div>
                <div class="layout-item__fields__item  pt-3">
                    <div class="flexible-input-container">
                        <label for="5link bottom" class="input-label pl-3"> Button Link </label>
                        <div class="input-control__container">
                            <input class="input-control" id="5link bottom" type="text"
                                @change="secondBanner($event, input.id, key, 'buttonLink')"
                                placeholder="please enter button link">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="button" v-if="key == inputs.length - 1" @click="addSecondBannerList">Add New Content</button>
    </div>
    <div class="flex flex-row items-center justify-end">
        <div v-if="showSecondBannerData == true"
            class="bg-primary-500 hover:bg-primary-400 text-white dark:text-gray-900 ml-auto cursor-pointer rounded text-sm font-bold focus:outline-none focus:ring ring-primary-200 dark:ring-gray-600 inline-flex items-center justify-center h-9 px-6 shadow relative bg-primary-500 hover:bg-primary-400 "
            type="submit" @click="setImagesecondBanner">
            save
        </div>
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
            ImagesecondBanner: [],
            secondBannerArray: [],
            secondBannernewPhotoToShow: "",
            counter: 0,
            showSecondBannerData: false,
            keyVal: [],
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
        secondBanner(e, key, index, type) {
            if (type == "photo") {
                if (!this.secondBannerArray[index]) {
                    this.keyVal.push(key);
                    this.secondBannerArray.push({ [key]: { [type]: e.target.files[0] } });
                    this.secondBannernewPhotoToShow = e.target.files[0]
                    console.log("etarget", e.target.id);
                } else {
                    this.secondBannerArray[index][key][type] = e.target.files[0];
                    this.secondBannernewPhotoToShow = "0main_img_workplace";
                    // console.log("etarget" , e.target.files[0]);
                }
            }
            if (type == "title") {
                if (!this.secondBannerArray[index]) {
                    console.log("etarget", e.target.id);
                    this.keyVal.push(key);
                    this.secondBannerArray.push({ [key]: { [type]: e.target.value } });
                } else {
                    console.log("etarget", e.target.id);
                    this.secondBannerArray[index][key][type] = e.target.value;
                }
            } else if (type === "subtitle") {
                if (!this.secondBannerArray[index]) {
                    this.keyVal.push(key);
                    this.secondBannerArray.push({ [key]: { [type]: e.target.value } });
                } else {
                    this.secondBannerArray[index][key][type] = e.target.value;
                }
            } else if (type === "buttonText") {
                if (!this.secondBannerArray[index]) {
                    this.keyVal.push(key);
                    this.secondBannerArray.push({ [key]: { [type]: e.target.value } });
                } else {
                    this.secondBannerArray[index][key][type] = e.target.value;
                }
            } else if (type === "buttonLink") {
                if (!this.secondBannerArray[index]) {
                    this.keyVal.push(key);
                    this.secondBannerArray.push({ [key]: { [type]: e.target.value } });
                } else {
                    this.secondBannerArray[index][key][type] = e.target.value;
                }
            }
        },

        addSecondBannerList(e) {
            e.preventDefault();
            if (this.counter == 0) {
                this.showSecondBannerData = true;
            }
            this.counter++;
            if (this.counter > 1) {
                this.inputs.push({ id: uuid(), value: "" });
            }
            console.log(this.counter);
        },

        remove(index) {
            this.inputs = this.inputs?.filter((item) => item?.id !== index);
            console.log(index);
        },
     

        removeImageSlider(key, type) {
            console.log("remoooooove");
            axios.post("/removeImageSlider", {
                key: key,
                type: type,
            });
            this.getImeageSlider();
        },
        setImagesecondBanner() {
            let formData = new FormData();
            // console.log('this.keyVal',this.keyVal)
            // console.log('thissss',this.secondBannerArray[0][this.keyVal[0]].includes("title"))
            // if(this.secondBannerArray[0][this.keyVal[0]].includes("title") == true){
            //     console.log('hiii')
            // }
            // console.log(' this.secondBannerArray', this.secondBannerArray[0][this.keyVal[0]].subtitle)
            for (let index = 0; index < this.keyVal.length; index++) {
                // console.log("key", this.secondBannerArray[index][this.keyVal[index]]);
                formData.append(
                    "file",
                    this.secondBannerArray[index][this.keyVal[index]]["photo"]
                );
                formData.append(
                    "title",
                    this.secondBannerArray[index][this.keyVal[index]]["title"]
                );
                formData.append(
                    "subtitle",
                    this.secondBannerArray[index][this.keyVal[index]]["subtitle"]
                );
                formData.append(
                    "buttonText ",
                    this.secondBannerArray[index][this.keyVal[index]]["buttonText"]
                );
                formData.append(
                    "buttonLink",
                    this.secondBannerArray[index][this.keyVal[index]]["buttonLink"]
                );
                formData.append("key", this.keyVal[index]);
                axios
                    .post("/setImeagesecondBanner", formData, {
                        headers: {
                            "Content-Type": "multipart/form-data",
                        },
                    })
                    .then((response) => {
                        console.log("on then");
                    })
                    .catch((error) => {
                        this.errors = error.response.data.errors;
                    });
            }
        },
        getImagesecondBanner() {
            axios.post("/getImeagesecondBanner").then((response) => {
                this.ImagesecondBanner = response.data;
                console.log("ImagesecondBanner", this.ImagesecondBanner);
            });
        },
    },
    beforeMount() {
        this.getImagesecondBanner();

    }
}
</script>