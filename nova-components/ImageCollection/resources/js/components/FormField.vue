<template >
  <DefaultField :field="field" :errors="errors" :show-help-text="showHelpText" :full-width-content="fullWidthContent">
    <template #field>
      <div v-if="field.type == 1">
        <div class="" v-for="(image, key) in ImageSlider" :key="key">
          <div class="grid grid-cols-4 gap-x-6 gap-y-2">
            <div class="h-full flex items-start justify-center">
              <div class="relative w-full">
                <button type="button" @click="removeImageSlider(image.key, 'slider')"
                  class="rounded-full shadow bg-white dark:bg-gray-800 text-center flex items-center justify-center h-[20px] w-[21px] absolute z-20 top-[-10px] right-[-9px] v-popper--has-tooltip"
                  dusk="logo-delete-link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    fill="currentColor" width="20" height="20" class="inline-block text-gray-800 dark:text-gray-200"
                    role="presentation">
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
        <div class="form-group flex flex-col bg-[#b93939] my-5 mt-3 py-1.5 gap-y-2 w-full "
          v-for="(input, key) in inputs" :key="input.id">
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
      </div>
      <div v-else-if="field.type == 2">
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
                        <input class="input-control " id="3sup_text_workplace" type="text" :value="item.subtitle">
                      </div>
                    </div>
                  </div>
                  <div class="layout-item__fields__item  pt-3">
                    <div class="flexible-input-container">
                      <label for="4text_bottom_workplace_" class="input-label pl-3"> Button Text </label>
                      <div class="input-control__container">
                        <input class="input-control" id="4text_bottom_workplace_" type="text" :value="item.buttonText_">
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
                <h4 class="layout-item__title">Add New Banner
            </h4>
            <div class="layout-item__fields">
              <div class="layout-item__fields__item">
                <div class="flexible-input-container input-file ">
                  <div class="input-file__input-field">
                    <label for="0main_img_workplace" class="input-label"> صورة </label>
                    <p>Click here to upload</p>
                    <input class="input-file__input" id="0main_img_workplace" type="file"
                      @change="secondBanner($event, input.id, key, 'photo')">
                  </div>
                </div>
              </div>

              <div class="layout-item__fields__item pt-3 ">
                <div class="flexible-input-container">
                  <label for="2text_main_workplace" class="input-label pl-3"> Title </label>
                  <div class="input-control__container">
                    <input class="input-control" id="2text_main_workplace" type="text"
                      @change="secondBanner($event, input.id, key, 'title')" placeholder="please enter the title">
                  </div>
                </div>
              </div>
              <div class="layout-item__fields__item  pt-3">
                <div class="flexible-input-container">
                  <label for="3sup_text_workplace " class="input-label pl-3"> Sub Title </label>
                  <div class="input-control__container">
                    <input class="input-control" id="3sup_text_workplace" type="text"
                      @change="secondBanner($event, input.id, key, 'subtitle')" placeholder="please Enter subtitle">
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
      </div>
      <div v-else-if="field.type == 3">

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
                          stroke="currentColor" width="16" height="16" class="inline-block align-top"
                          role="presentation">
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
                              <img :src="input.images" :alt="input.key"
                                class="aspect-square object-scale-down w-28 h-28">
                            </div>
                            <p class="font-semibold text-xs mt-1">{{ input.key }}</p>
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
                        <label for="select_name-default-select-field"
                          class="inline-block pt-2 leading-tight">description
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
                          stroke="currentColor" width="16" height="16" class="inline-block align-top"
                          role="presentation">
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
                        <div class="space-y-1"><input type="text"
                            @change="offerBanner($event, input.id, key, 'videotitle')"
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
                        <label for="select_name-default-select-field"
                          class="inline-block pt-2 leading-tight">description
                          <span class="text-red-500 text-sm">*</span>
                        </label>
                      </div>
                      <div class="mt-1 md:mt-0 pb-5 px-6 md:px-0 md:w-3/5 w-full md:py-5">
                        <div class="space-y-1"><input type="text"
                            @change="offerBanner($event, input.id, key, 'description')"
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
                        <div class="space-y-1"><input type="text"
                            @change="offerBanner($event, input.id, key, 'buttonTitle')"
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
                        <div class="space-y-1"><input type="text"
                            @change="offerBanner($event, input.id, key, 'buttonLink')"
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
          <button size="lg" align="center" component="button" dusk="toggle-layouts-dropdown-or-add-default"
            type="button" tabindex="0" @click="addOfferBannerList" class="shadow relative bg-primary-500 hover:bg-primary-400 text-white
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
      </div>
      <div v-else-if="field.type == 4">
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
      </div>
    </template>
  </DefaultField>
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
      ImagesecondBanner: [],
      secondBannerArray: [],
      ImageFourthBanner: [],
      FourthBannerArray: [],
      keyValFourthBanner: [],
      ImeageofferBanner: [],
      offerBannerArray: [],
      keyValofferBanner: [],
      counter: 0,
      showSecondBannerData: false,
      showOfferBannerData: false,
      keyVal: [],
      inputs: [
        {
          id: uuid(),
          value: "",
        },
      ],
    };
  },
  methods: {
    AddFirstBanner(key) {
      document.getElementById(key).click();
    },
    UplodeOfferImage(key) {
      document.getElementById(key).click();
    },

    removeImageSlider(key, type) {
      console.log("remoooooove");
      axios.post("/removeImageSlider", {
        key: key,
        type: type,
      });
      this.getImeageSlider();
    },
    secondBanner(e, key, index, type) {
      if (type == "photo") {
        if (!this.secondBannerArray[index]) {
          this.keyVal.push(key);
          this.secondBannerArray.push({ [key]: { [type]: e.target.files[0] } });
          console.log("etarget" , e.target.id);
        } else {
          this.secondBannerArray[index][key][type] = e.target.files[0];
          console.log("etarget" , e.target.id);
        }
      }
      if (type == "title") {
        if (!this.secondBannerArray[index]) {
            console.log("etarget" , e.target.id);
          this.keyVal.push(key);
          this.secondBannerArray.push({ [key]: { [type]: e.target.value } });
        } else {
            console.log("etarget" , e.target.id);
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

    previewFiles(event, key) {
      this.inputs[key].value = event.target.value;
    },
    remove(index) {
      this.inputs = this.inputs?.filter((item) => item?.id !== index);
    },
    /*
     * Set the initial, internal value for the field.
     */
    setInitialValue() {
      this.value = this.field.value || "";
    },
    /**
     * Fill the given FormData object with the field's internal value.
     */
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

    setImagesecondBanner() {

      let formData = new FormData();
      for (let index = 0; index < this.keyVal.length; index++) {
        console.log("key", this.secondBannerArray[index][this.keyVal[index]]);
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
            this.getImagesecondBanner();
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
    offerBanner(e, key, index, type) {
      if (type == "photo") {
        if (!this.offerBannerArray[index]) {
          this.keyValofferBanner.push(key);
          this.offerBannerArray.push({ [key]: { [type]: e.target.files[0] } });
          console.log(e.target.files[0]);
        } else {
          this.offerBannerArray[index][key][type] = e.target.files[0];
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
    getImageFourthBanner() {
      axios.post("/getImageFourthBanner").then((response) => {
        this.ImageFourthBanner = response.data;
        console.log("ImageFourthBanner", this.ImageFourthBanner);
      });
    },
  },
  beforeMount() {
    this.getImeageSlider();
    this.getImagesecondBanner();
    this.getImageFourthBanner();
    this.getImeageofferBanner();
  },
};
</script>
<style scoped>
.closeIcons {
  position: absolute;
  top: 5px;
  right: 5px;
}

.closeSecondBannerIcons {
  position: absolute;
  top: 15px;
  right: 10px;
}

.sliderImage {
  width: auto;
  height: 320px;
}

.iput_seconBanner {
  width: 100%;
}

.secondBannerContainer {
  margin: 20px 0px;
  padding: 0 25px;
  border-radius: 25px;
}

.imageSecondBannershow {
  border-radius: 2px solid black;
  width: 35px;
  height: 35px;
  margin: 20px 0;
}

.forthBannerContainer {
  margin: 40px 0px;
  padding: 0 25px;
  border-radius: 25px;
}

.imageFourthBannershow {
  border-radius: 2px solid black;
  width: 100%;
  border-radius: 10px;
  height: auto;
  margin: 20px 0;
}

.closeForthBannerIcons {
  position: absolute;
  top: 30px;
  right: 35px;
}

.input-file {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: flex-start;
}

.imageContainer {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  padding: 10px;
  margin: 10px 15px 0 0;
  text-align: center;
  background: #cccccc;
  border-radius: 50%;
  height: 120px;
  width: 120px;
  flex-shrink: 0;
  position: relative;
  overflow: hidden;
  align-self: flex-start;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.input-file__input {
  margin: 10px 0;
  cursor: pointer;
  opacity: 0;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: 10;
}

.input-file__input-field {
  padding: 10px;
  margin: 10px 15px 0 0;
  text-align: center;
  background: #cccccc;
  border-radius: 50%;
  height: 120px;
  width: 120px;
  -ms-flex-negative: 0;
  flex-shrink: 0;
  position: relative;
  overflow: hidden;
  -ms-flex-item-align: start;
  align-self: flex-start;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}

.flexible-input-container .input-label {
  font-weight: bold;
  background: #eeeeee;
  font-size: 16px;
  margin: 0 0 6px 0;
}

.input-file__input-field label {
  display: block;
  margin: 0 0 7px;
  background: none !important;
}

.input-file__values {
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  /* padding: 15px; */
  min-width: 50%;
}

.imageBanner {
  width: 50px;
  height: 50px;
}

.input-control__container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start;
  -webkit-box-align: stretch;
  -ms-flex-align: stretch;
  align-items: stretch;
}

.flexible-input-container .input-control {
  width: 100%;
  border-radius: 3px;
  border: 1px solid #bacad6;
  color: #000000;
  padding: 7px 10px;
}

.input-control__container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start;
  -webkit-box-align: stretch;
  -ms-flex-align: stretch;
  align-items: stretch;
}

.input-control {
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
}

.button {
  background-color: #cccccc;
  border-radius: 15px;
  color: black;
  max-width: 40%;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.layout-list .layout-item__title {
  font-size: 16px;
  background: #999999;
  color: #ffffff;
  font-weight: bold;
  line-height: 1;
  padding: 4px 4px 4px 10px;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row;
  -webkit-box-pack: end;
  -ms-flex-pack: end;
  justify-content: flex-end;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}

.offerBannerImage {
  margin-top: 5%;
  width: 113px;
  height: 113px;
}

.offerBannerImage-contener {
  margin-right: 17%;
}

.offerBannerInput {
  margin-top: 45px;
}
</style>
