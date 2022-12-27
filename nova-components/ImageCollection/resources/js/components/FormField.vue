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
                <h4 class="layout-item__title">
                  Banner {{ key + 1 }}
                  <button class="btn btn-default btn-danger"
                    @click="removeImageSlider(item.key, 'second_Banner')">Remove</button>
                </h4>
                <div class="layout-item__fields">
                  <div class="layout-item__fields__item">
                    <div class="flexible-input-container input-file ">
                      <div class="input-file__input-field">
                        <label for="0main_img_workplace" class="input-label">
                          صورة
                        </label>
                        <p>Click here to upload</p>
                        <input id="0main_img_workplace" type="file"
                          @change="secondBanner($event, item.key, key, 'photo')" class="input-file__input">
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
                      <label for="2text_main_workplace" class="input-label pl-3">
                        Title
                      </label>
                      <div class="input-control__container">
                        <input id="2text_main_workplace" type="text"
                          @change="secondBanner($event, item.id, key, 'title')" :value="item.title"
                          class="input-control ">
                      </div>
                    </div>
                  </div>
                  <div class="layout-item__fields__item  pt-3">
                    <div class="flexible-input-container">
                      <label for="3sup_text_workplace " class="input-label pl-3">
                        Sub Banner
                      </label>
                      <div class="input-control__container">
                        <input id="3sup_text_workplace" type="text" :value="item.subtitle" placeholder=""
                          class="input-control ">
                      </div>
                    </div>
                  </div>
                  <div class="layout-item__fields__item  pt-3">
                    <div class="flexible-input-container">
                      <label for="4text_bottom_workplace_" class="input-label pl-3">
                        Button Text
                      </label>
                      <div class="input-control__container">
                        <input id="4text_bottom_workplace_" type="text" placeholder="" :value="item.buttonText_"
                          class="input-control ">
                      </div>
                    </div>
                  </div>
                  <div class="layout-item__fields__item  pt-3">
                    <div class="flexible-input-container">
                      <label for="5link bottom" class="input-label pl-3">
                        Button Link
                      </label>
                      <div class="input-control__container">
                        <input id="5link bottom" :value="item.buttonLink" type="text" placeholder=""
                          class="input-control ">
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </div>
          </ul>
          <!-- <div class=" relative flex flex-col items-center bg-gray-500 justify-start w-full secondBannerContainer">
            <img class="imageSecondBannershow" :src="item.images" alt="item.key">
            <div dir="rtl" class="flex flex-row items-start justify-start  w-full">
              <p class=" text-white text-xl ">العنوان:</p>
              <p class=" text-white text-xl  px-4">{{ item.title }}</p>
            </div>
            <div dir="rtl" class="flex flex-row items-strat pt-2 justify-start w-full">
              <p class=" text-white text-lg ">الوصف:</p>
              <p class=" text-white text-lg  text-left px-2 ">{{ item.subtitle }}</p>
            </div>
            <div dir="rtl" class="flex flex-row items-strat pt-2 justify-start w-full">
              <p class=" text-white text-lg ">اسم الرابط:</p>
              <p class=" text-white text-lg  text-center px-2">{{ item.buttonText_ }}</p>
            </div>
            <div dir="rtl" class="flex flex-row items-strat pt-2 justify-start w-full pb-4">
              <p class=" text-white text-lg ">عنوان الرابط:</p>
              <p class=" text-white text-lg  text-center px-2">{{ item.buttonLink }}</p>
            </div>
            <svg @click="removeImageSlider(item.key, 'second_Banner')" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20" fill="currentColor" width="20" height="20"
              class="absolute closeSecondBannerIcons text-gray-800 dark:text-gray-200 cursor-pointer"
              role="presentation">
              <path fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                clip-rule="evenodd"></path>
            </svg>
          </div> -->
        </div>
        <div class="form-group flex flex-col bg-[#b93939] mt-3 py-1.5 gap-y-2 w-full" v-for="(input, key) in inputs"
          :key="input.id">
          <div class="flex flex-row items-center justify-start">
            <div class="flex flex-col items-start justify-start my-2 gap-y-2 w-full">
              <input type="file" class="iput_seconBanner w-full my-2 h-[36px] px-2 py-1 border-b border-2" ref="myFiles"
                @change="secondBanner($event, input.id, key, 'photo')" placeholder="الرجاء اختيار الصورة" />
              <input type="text" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2" ref="title"
                @change="secondBanner($event, input.id, key, 'title')" placeholder="الرجاء كتابة العنوان" />
              <input type="text" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2" ref="title"
                @change="secondBanner($event, input.id, key, 'subtitle')" placeholder="الرجاء كتابة الوصف" />
              <input type="text" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2" ref="title"
                @change="secondBanner($event, input.id, key, 'buttonText')" placeholder="button Title" />
              <input type="text" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2" ref="title"
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
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink">
              <rect width="20" height="20" fill="url(#pattern0)" />
              <defs>
                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image0_10_3" transform="scale(0.00195312)" />
                </pattern>
                <image id="image0_10_3" width="512" height="512"
                  xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAYAAAD0eNT6AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAOxAAADsQBlSsOGwAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAACAASURBVHic7d15uF1Vnebx770ZgSBgIoQhJEAJtkwyqSEgyIyItiiiOBUqolValm2ppbZTo+1Q0lVUt1pFgQPlBIqKQomKDMqgyJyAzIQIAkKAhAQyp/9YN+YSb3LPPmef89vrrO/neX5PBELy7iW567377GEA5W4jYIeh2QqYAjwHmLzOjB/6+VsM/Tge2KSnSSU10WJg2dD/fnzox6XA/HXm0aF5CJgL3As83cugqtdAdAC1ZBywC7AHsBuwIzBjaLYKSyWpdA+TisDcoR9nD83twPK4WGqFBaB5NgL2BV5E2vB3B57P2u/gJanplgG3ksrAzcBvgWvxjEGjWADibQW8EJgFHADsA0wMTSRJ9VsB3ARcCVwHXAbMiwxUOgtA740FXgy8HDgM2Bv/f5BUpnuAi4ELgJ+Trj1Qj7jx9MY00oZ/NHAIXnwnSetaBPwSuAj4CfBAbJz+ZwHoninAccCbgZnAYGwcScrGKuBq4HtD88fYOP3JAlCvKcAJwGtJn+e76UtSZ1YBvwLOHZr5sXH6hwWgHvsA7wDeRLqKX5JUv6XAj4EzSB8XrI6NkzcLQPumAm8BTgZ2Cs4iSaW5C/gWcBbwh+AsWbIAVLcX8H7Saf5xwVkkqXTLgXOA04Abg7NkxQLQugOADwHH4LpJUhNdCXyedFuhHw+Mwo1sw8aSPtf/B9LT+CRJzTcH+CLpI4IVwVkaywIwskHg1cCngZ2Ds0iS2jMX+CzpOoGVsVGaxwLwTAOkB/acCuwZnEWSVI/fA58Dvkm6rVBYAIY7mvQfyB7RQSRJXXEj6Vqun0cHaQILQDrF/2ng+OggkqSeuBj4e+CW6CCRxkQHCLQ58EngG/hdvySVZEfSM1ymAL8BlsTGiVFiARgATgHOBw4nXekvSSrLGOBFwNuAxyjwGQKlfQSwE+kRkodEB5EkNcqvSY90vy06SK+UcgZgLPAB0osknhucRZLUPNOBt5Oe8HoVBdw2WMIZgP2AM/FzfklSa24klYHrooN0Uz+fARgDfJB03+c2wVkkSfmYCryVtI/8mj59rHC/ngGYDpwNvCQ6iCQpa78B3gjcHR2kboPRAbrgeOAG3PwlSZ17MXA9qQT0lX46AzCJdIX/66ODSJL60tnAu4CnooPUoV8KwHOBHwC7RQeRJPW1m4Hj6IOPBPrhI4BjgGtw85ckdd8epI8EXhUdpFM53wUwQHqpw5nARsFZJEnlmAC8lrT3XEKmdwnk+hHAJOC7pO/+JUmK8mPgRGBxdJCqciwAWwM/AfaJDiJJEum6gGOA+6ODVJFbAdgNuBDYPjqIJEnDPAC8nIxeKpTTRYCHAVfg5i9Jap5tgV8BR0UHaVUuFwG+AfgesHF0EEmS1mPNxYF3AXOCs4wqhwJwMnAW6Y1+kiQ12RjSLYIPkJ5K21hNLwB/C3yZvD6qkCSVbRA4FlhIepdAIzW5AHwI+D/kd6GiJEkDwJGkZwVcHJxlRE0tAJ8BPhUdQpKkDh1A2msvjQ6yriYWgI8BH48OIUlSTQ4ClpHuZGuMphWAvwO+EB1CkqSaHQosAq6ODrJGkwrAScBX8DN/SVJ/Ohx4ELguOgg0pwC8EfgaXu0vSepfA8DLgNuBW4KzNOK77SOAC4Bx0UH62ALgkaEfnyC9uWo56XSUpLJNIn39HQA2BzYDnjP0o7pjGXA06U2CYaILwO6kiyKeFZwjd4+QXkZxGzB32PwBmA+sCMolKV9jgcnANGAHYMbQ7ALsCUyJCtYnngBmAbdGBYgsANuQHpAwLTBDjh4jXURyFelzpJtJnylJUi9tQ/ombh9g/6HZIjRRfuYCM4GHgnP01CTgetKpaGfD8yTwI+CdwPOJP2sjSSMZAHYF3gWcT/raFf31M4e5hoLeczNI+sw/etGbPPOA04BDgPHtLbMkhZpAuvXtn0kfR0Z/XW3y/JBCLoI/lfjFbuL8EfgX0mk0v8uX1E8GSU/E+1fSR5bRX2+bOH3/ALxjgZXEL3RTZiXwC+B4vAtCUhnGAIcB55LuRor+OtyUWUm6RbAv7czaW9BKn0eBT+MFkJLKtj3p3S/zif+63ISZD+zY0Yo20CRgNvGLGz13A+8FNulsOSWpr0wE3ky6lTn663T03ESfXRT4LeIXNXJuB06kkIs8JKlNY0hPhr2T+K/bkfO1TheyKd5M/GJGzX3AO0gP1JAktWaQdG3UXcR/HY+a13e8isF2ID1+Nnohez2LgE+STmtJktozjvSxaYn7yOPA9M6XMMYgcBnxi9jLWQmcDUztfPkkSUOmAKeTHmse/XW+l/MrmvPSvko+Tvzi9XJmAy+qZeUkSSOZCcwh/ut9L+fDtaxcD+1HOfd3LgE+hvfxS1IvjAc+ASwl/ut/L2YZsFctK9cD40i3MUQvWi/metLz+SVJvbUrcCPx+0Cv9posLib/KPGL1e1ZRfo8akJNayZJqm4c6YLrEp4w+8F6lqx7dgGeJn6hujkPkF7SI0lqhsNJr9SN3h+6OU8Bf1XXgtVtkHTFYvQidXN+DWxd14JJkmqzDXAl8ftEN+cyGvqyuFOIX5xuzul4oZ8kNdl44P8Rv190c95a22rVZAvgEeIXphuzDPjr2lZKktRtbyd97Y7eP7oxDwOb1bdUnTud+EXpxiwEjqpxnSRJvXEo/fsG2n+qcZ068jz6s2nNJd1mIknK0+7APOL3k7pnKfDcGtepbf9F/GLUPbcD0+pcJElSiO2BO4jfV+qe8+tcpHa8jPhFqHtuJV1NKknqD1vRnw+oO7LORapikP5b0OuAyXUukiSpEaaQnqgXvc/UOdcTdFvgCW2EbfLMxs1fkvrZFPrvZULH1bpCLRhDOlUefeB1zZ34gB9JKsGWwO+J33fqmjmkM/I986YuHETUzMUL/iSpJNvTX3cHvK7e5Vm/McBtPTigXswCYI96l0eSlIFdgceJ34fqmDvo0dsCTwo4uG7MMtKDIiRJZTqC/nmOzRtrXpu/MADc0oADrWP+ut6lkSRl6O3E70d1zE10+Y6AYxpwkHXMv9S9MJKkbH2J+H2pjjmi7oUZ7pIGHGCncxXpjVGSJEF602s/vM7+Z3UvzBp7NeDgOp0HgKl1L4wkKXvbAA8Sv091MquAPeteGIBvNeDgOpmVwCG1r4okqV8cTtoroverTubsuhdlKvlfKfmFuhdFktR3TiN+v+pklpLefVCbDzfgoDqZ6/Fzf0nS6CYANxC/b3UyH6hrMQaAuxpwQO3OEuD5dS2GJKnv7Ub6Tjp6/2p3bqemWwIPbcDBdDL/s45FkCQV5VPE71+dzEF1LMJ3G3Ag7c7NeOpfklTdePJ+8N1/droAU0in0KMPpJ1ZCbyw0wWQJBVrFunWuuj9rJ15GthiQwc32isEX0e6ICJHZwHXRIeQJGXrSrpwW12PTASO7+QXyPXJSAvxgT+SpM5tRXpzbPS+1s78st2D3pp8H4jwD+0etCRJ6/gI8ftaO7OStJdX9ncNCN/O3EO+H1tIkppnInAf8ftbO/M37RzwlQ0I3s6c1M7BSpK0Ae8gfn9rZy6veqDbkeeVj7cDY6serCRJoxhHng/FW0l60dFfWN9dAK+gpqcI9dgngRXRISRJfWc5cGp0iDYMAi+v8i/8hPjWUnXuBsZUOUhJkioYQ55nAX7Y6gGOB55sQOCq09aFDpIkVfBe4ve7qrOQFp+Ke1gDwlad+cAmrRycJEkd2AR4lPh9r+ocvO6BjHQNwNHtrEiwrwCLo0NIkvreYuA/okO04WWt/KRbiW8qVWYlML2NxZAkqR3TSBecR+9/Vebm0Q5qqwaErDoXjHZQkiTV7CLi978qswrYcvgBrPsRwAGdrUeIHE/FSJLydmZ0gIoGgJnD/8a6BWD/3mWpxYPAhdEhJEnFOR/4U3SIimYN/4vczwCcgw/+kST13nLg+9EhKpq1vn+wEbCU+M8pqswzTmdIktRDLyF+H6wyS0gvNvoLBzUgXJWZR56PK5Yk9YdB4H7i98Mq8+ezAMM/AtivnvXome+TDkaSpAirgPOiQ1T0ojX/Y3gB2DMgSCd+Eh1AklS83C5E32Okv3kT8acmWp1FwIQ6VkKSpA5MIK/351y3JviaMwDjgOfVtx5ddzHpgkVJkiItBS6PDlHBrsBYWFsAdqHFNwU1xEXRASRJGpLTnjQB2BnWFoDcPv/PqW1JkvpbbnvS7rC2AOwaGKSqx4DbokNIkjTkFuCJ6BAV7AZrC8COgUGqugpv/5MkNccq4OroEBXsCGsLwIy4HJVdFR1AkqR15LQ37QBrC8AOgUGqum70nyJJUk9dHx2gghmQHqW7Cekexlweq7s18FB0CEmShtkO+EN0iBatBjYeJDWBXDb/R3DzlyQ1z/3A/OgQLRoApg8C06OTVHBzdABJktZjTnSACnYYBLaJTlGBt/9Jkprq9ugAFWw9CEyJTlHB3OgAkiStx73RASqYMghMjk5RwdzoAJIkrcfc6AAVTLYASJJUj5zOAEweBJ4dnaKCXG6xkCSVZ150gAomDwLPiU7RotXkc4uFJKk8j5LPo+qnDAKbR6do0QJgRXQISZLWYznpwXo52GIQmBidokWPRgeQJGkUuZypnjAIjItO0aLHogNIkjSKrArAhOgULXo6OoAkSaNYEh2gReNzKgDLogNIkjSKpdEBWjRhEBgfnaJFuSyqJKlcuexVWRUAzwBIkpoumwIwFhgTnaJFK6MDSJnaCNgfeCmwG7ALsBUwaeifLwIeJr3IZDZwKXAV+XyWKTVJLrerj4H00IIc5tzurIHUt2YBXwcWUv3P2wLgq8DMXoeWMncu8ftlqxMewAIg1etA4HLq+7N3KekMgqTRZVMABru1ApJ6bgvSd/yXAy+p8dc9GLgCOAvYrMZfV1IgC4DUH14IXA+8BRjowq8/ALx16PfYtwu/vqQeswBI+TsWuAyY0YPfa0fS2YDjevB7SeoiC4CUt9cAPyBd6d8rE4BzgFf18PeUVDMLgJSvlwLfBMYG/N5jgW9T77UGknrIAiDlaSppA458lPdE4HvANoEZJLXJAiDlZ4C0+U+NDgJsSbrzQFJmLABSft5EOv3fFIcDr4sOIakaC4CUl4nAZ6NDjOAL5PNeEUlYAKTcnEQzP3OfRnoGgaRMWACkvPxNdIANeG90AEmtswBI+diX9Da/ptoVeEF0CEmtsQBI+XhldIAW5JBREhYAKSdNuvJ/fXLIKAkLgJSLQWDv6BAt2A+/rkhZ8A+qlIfp9PZ5/+3aGNguOoSk0VkApDxMiw5QwfbRASSNzgIg5WHT6AAV5JRVKpYFQMpDDqf/19gkOoCk0VkApDwMRAeoIKesUrEsAJIkFcgCIElSgSwAkiQVyAIgSVKBLACSJBXIAiBJUoEsAJIkFcgCIElSgSwAkiQVyAIgSVKBLACSJBXIAiBJUoEsAJIkFcgCIElSgSwAkiQVyAIgSVKBLACSJBXIAiBJUoEsAJIkFcgCIElSgSwAkiQVyAIgSVKBLACSJBXIAiBJUoEsAJIkFcgCIElSgSwAkiQVyAIgSVKBLACSJBXIAiBJUoEsAJIkFcgCIElSgSwAkiQVyAIgSVKBLACSJBXIAiBJUoEsAJIkFcgCIElSgSwAkiQVyAIgSVKBLACSJBXIAiBJUoEsAJIkFcgCIElSgSwAkiQVyAIgSVKBLACSJBXIAiBJUoEsAJIkFcgCIElSgSwAkiQVyAIgSVKBLACSJBXIAiBJUoEsAJIkFcgCIElSgSwAkiQVyAIgSVKBLACSJBXIAiBJUoEsAJIkFcgCIElSgSwAkiQVyAIgSVKBLACSJBXIAiBJUoEsAJIkFcgCIElSgSwAkiQVyAIgSVKBLACSJBXIAiBJUoEsAJIkFcgCIElSgSwAkiQVyAIgSVKBLACSJBXIAiBJUoEsAJIkFcgCIElSgSwAkiQVyAIgSVKBLACSJBVobHQA9YVBYDqwPbDJ0KheM6MDVJBT1pwsHpr7gHnAqtg4yp0FQO3aF3gl8FJgH2BibBw1yPuGRt2zBLgWuAQ4H7g+No5yZAFQFROBk4B3A88PziKVbCJwwNB8HLgF+L/A14GlcbGUE68BUCsGgLcA9wBfxs1fappdgX8D7gbeQPozK22QBUCj2Y50mvHrwNaxUSSNYlvgm8DP8c+rRmEB0IYcAtwAHBycQ1I1hwE3AgdFB1FzWQC0PscD/wVMiQ4iqS1bAhcBx0UHUTNZADSSY4FvAxOig0jqyETgXOBV0UHUPBYAretFwDl4h4jUL8aQrgvYOzqImsUCoOE2B74DbBQdRFKtNiadCdgsOoiawwKg4U4HdogOIakrdgJOiw6h5rAAaI0DgTdFh5DUVSfho5o1xAKgNT6DDw+R+t0g8OnoEGoGC4AAZpHOAEjqf4fgWQBhAVBycnQAST31tugAimcB0Eb4oBCpNMfjGzyLZwHQLGDT6BCSeupZ+DFA8SwA8lnhUpkOjg6gWBYA7REdQFKI3aMDKJYFQDtHB5AUYpfoAIplAdCW0QEkhfDPfuEsAJoUHUBSCC/+LZwFQJKkAlkAtCg6gKQQT0YHUCwLgP4UHUBSCP/sF84CoDuiA0gKcXt0AMWyAOjm6ACSQsyODqBYFgBdFh1AUohLogMolgVAVwILo0NI6qkFwG+iQyiWBUBLgPOiQ0jqqe8BS6NDKJYFQABnRgeQ1FP+mZcFQABcBVweHUJST1wM/DY6hOJZALTGR4DV0SEkddUq4KPRIdQMFgCtcRXw9egQkrrqTOCa6BBqBguAhvsfwD3RISR1xV3AB6NDqDksABruCeB1wNPRQSTVajFwPOn2PwmwAOgv/Y70hWJFdBBJtVhO+jN9Y3QQNYsFQCO5kHQmwPuEpbw9Tdr8fxodRM1jAdD6nAcciW8Mk3L1IHA4cH50EDWTBUAbcjnwAtJ9w5LycRGwF+lR39KILAAazZrvIt4A3B+cRdKG3QecABwNPBycRQ1nAVCrvg3sBJwCzAnOIumZZgMnAzsD5wZnUSbGRgdQVpYBZwzNXsArgUOAfYGNAnNJpXkKuJb0St8fATfFxlGOLABq1w1D80lgANh+aCYNjeo1E3hfdIgW/TNwdXSIPrRoaOYNjY/uVkcsAKrDatJnj/dFB+lzuRSAq0mvm5XUYF4DIElSgSwAkiQVyAIgSVKBLACSJBXIAiBJUoEsAJIkFcgCIElSgSwAkiQVyAIgSVKBLACSJBXIAiBJUoEsAJIkFcgCIElSgSwAkiQVyAIgSVKBLACSJBXIAiBJUoEsAJIkFcgCIElSgSwAkiQVyAIgSVKBLACSJBXIAiBJUoEsAJIkFcgCIElSgSwAkiQVyAIgSVKBLACSJBXIAiBJUoEsAJIkFcgCIElSgSwAkiQVyAIgSVKBLACSJBXIAiBJUoEsAJIkFcgCIElSgSwAkiQVyAIgSVKBLACSJBXIAiBJUoEsAJIkFcgCIElSgSwAkiQVyAIgSVKBLACSJBXIAiBJUoEsAJIkFcgCIElSgSwAkiQVyAIgSVKBLACSJBXIAiBJUoEsAJIkFcgCIElSgSwAkiQVyAIgSVKBLACSJBXIAiBJUoEsAJIkFcgCIElSgSwAkiQVyAIgSVKBLACSJBXIAiBJUoEsAJIkFcgCIElSgSwAkiQVyAIgSVKBLACSJBXIAiBJUoEsAJIkFcgCIElSgSwAkiQVyAIgSVKBLACSJBXIAiBJUoEsAJIkFcgCIElSgSwAkiQVyAIgSVKBLACSJBXIAiBJUoEsAFIeVkcHqCCnrFKxLABSHp6ODlDB4ugAkkZnAZDy8GR0gApyyioVywIg5WFedIAK7osOIGl0FgApD/PI42OAp4D7o0NIGp0FQMrDKuD66BAt+B1eBChlwQIg5eOS6AAtuDQ6gKTWWACkfJwfHaAFP4oOIKk1FgApH9cBc6JDbMAtwE3RISS1xgIg5eVL0QE24PToAJJaZwGQ8vI14I/RIUYwD/hGdAhJrbMASHlZCvxjdIgRfBBYFh1CUussAFJ+vgn8MjrEMD8DzokOIakaC4CUn9XAG4CHooMAfwLeGh1CUnUWAClPDwOvJ30kEGUJ8BqaeU2CpFFYAKR8XUY6E7Ai4PdeAZwI/Drg95ZUAwuAlLfzgFeRnsHfK08B/x34YQ9/T0k1swBI+bsAOAi4pwe/193AgcCFPfi9JHWRBUDqD9cC+5CeE9CNl/GsAs4c+j1yeCmRpFFYAKT+8QTpivwDSNcH1OUSYBZwMrCgxl9XUiALgNR/rgJeCuwPfBVY2MavsQA4C3gxcCjwm9rSSWqEsdEBJHXN1UPzt8BMUinYDdgFmApMGvp5i4AHgTuA2aRX+l5N7C2GkrpsLLASGBMdpAU5ZJSaaAlpU780OohUgFy+sV45SD7P7x4fHUCSpFFMiA7QoqU5FYBcFlWSVK5c9qqlg+TzOZ9nACRJTWcB6IKNogNIkjSKidEBWrRsEFgenaJFk6MDSJI0iinRAVq0dJB0hXAOLACSpKZ7dnSAFi0dBB6PTtGizYBx0SEkSVqP8cCzokO06LFB4NHoFC0aIJ9mJUkqT05nqucPAvOjU1QwLTqAJEnrsX10gAoezekMAMCM6ACSJK3HDtEBKng0tzMAOS2uJKksOe1R2X0EMD06gCRJ6zEjOkAF8wdJbwHLxX+LDiBJ0nrsEh2ggocGgbnRKSrYIzqAJEnrkdMede8A6RG7i0m32eVgW+CP0SEkSRpmGjAvOkSLVgMbDwJPA48Eh6kip4YlSSpDTnvTg8CSwaG/uDcySUV7RweQJGkde0UHqGAuwODwv8jErOgAkiSt44DoABXcC2sLwN2BQaqaydrckiRFGwReHB2igntg7UY6JzBIVVvg7YCSpObYnfTCulzMhrUFYHZgkHa8JDqAJElDctuT5sDaAnAbsDQuS2VHRQeQJGlITnvSEuCOdf/mDaR7A3OYRcCEmhZDkqR2TSQ9Syd6X2x1rl0TfPjFdDfXtBi9sAl5XXEpSepPBwEbR4eo4M97/fACkNt1AC+PDiBJKt4x0QEqGvGi/wOJPzVRZf6AtwNKkuIMAg8Qvx9Wmf1HOpAJpIsDosNVGR8KJEmKcjDx+2CVWUK6ZgF45nfQS0kXAubkhOgAkqRi5bYH/Y5UAoC/PIV+ZW+zdOx4YFx0CElSccYDr44OUdFVw/8i9wIwlfwuwJAk5e+VwHOiQ1R0xYb+4ZbEf0ZRdS7sYDEkSWrHz4jf/6rMKlooLHMaELTKrASmj3ZQkiTVZAZp74ne/6rMjesexEi30f20reWIMwi8IzqEJKkY7yS/29AvauUnHUp8U6k6jwGTqq+HJEmVbAo8Tvy+V3UOauXgxgMLGxC26ry7lYOTJKkD7yN+v6s6C6hwx9z5DQhcde4CxrR6gJIkVTQWmEv8fld1fjDSwazvM4yWPitomJ2A10eHkCT1rTeR50Xnla7t25b8rnBcDdxJamiSJNVpHHAP8ftc1VkJbF31YH/dgODtzFurHqgkSaM4hfj9rZ25pJ2DfU8Dgrczc0kvNpIkqQ4TgXnE72/tzLvaOeCpwIoGhG9nPtTOAUuSNIKPEb+vtTMrSE/4bculDTiAdmYhbXzmIUnSOrYFFhG/r7UzP9/QgY32JKNzR/nnTbUp8JnoEJKk7H0e2CQ6RJvO6eRfnkx6d3B0i2lnVgIzOzl4SVLRDiS9RCd6P2tnngI273QBvtOAA2l3fo8XBEqSqpsA3Er8PtbufKOORTikAQfSyXyijkWQJBXlVOL3r07mwDoWYYD0gJ3og2l3lgC71rEQkqQi7AEsI37/anduI+3dG9TK6wxXA2e18POaagLwXdJ9nJIkbcgE4GwqvDyngc4k7d212Iq829Bq4LS6FkOS1LdOJ36/6mSW0sG9/+vznw04sE5mFfCyuhdFktQ3jiTfq/7XzNdqXxXSZyK5L8xDwHZ1L4wkKXvTgD8Rv091OnvWvTBr/KIBB9fpXI23BkqS1hoHXEH8/tTpVHrtb1VHNeAA65gv1b0wkqRsnUH8vlTHHFr3wgw3AMxuwEHWMW+veW0kSfl5J/H7UR1zQ90LM5K3BB1c3bMMOKLmtZEk5eNoYDnx+1Edc2LNazOiMaSHDEQfbB2zkC5eMCFJaqzdgCeI34fqmNtJe3NPnNiDA+rVzAO2r3d5JEkNNgO4n/j9p655ba2rM4pB4KYuHETU3AlsU+sKSZKaaCv65yz2atJ1ea081bdWr6kheJPmNtJ/GJKk/jQFmEP8flPnvLLWFWrRAOmqw+iDr3OuJ/0HIknqL1Povz3rd7Tw0p9uObSFgLnN74Ft61wkSVKoqcDNxO8vdc/hdS5SO35C/CLUPfcAO9a5SJKkENPJ+5X265vz6lykdu1MevtQ9GLUPfOA3WtcJ0lSb72A/rraf80sAXaqcZ068kXiF6Qb8yRwTI3rJEnqjcOBBcTvI92Yz9a4Th3bjP54i9JIswwfGyxJOTmF/nnC37rzILBpfUtVj7cRvzDdnC8B42tbLUlS3SYA/078ftHNeXNtq1WjAeBi4henm/M70gUlkqRm2Zb0uvfofaKbcwmBt/2N5rnAU8QvUjfnQRpw64Uk6c+Oon8/hl4zi8ng7rQPE79Q3Z5VwOmk002SpBgTgc8BK4nfF7o9769pzbpqLP33tKX1zY2kN0pJknprd/rz4T4jzbWkvTUL+5Cuno9etF7MUuBTeDZAknphInAqZe0xL6hl5Xroo8QvXC/nVmBWLSsnSRrJgfTXm/xamQ/WsnI9NghcSvzi9XJWAecC29ewfpKkZBvS7X0lfNY/fC4HxtSwfiG2Ax4jfhF7PYuBT5JOVUmS2jMeeC+wkPiv672ex+mDbyZfQ/xCRs080n+8Xh8gSa0bR3rgzd3Efx2PmhM6XsWG+Abxixk5d5P+Y872VI4k9cBY4CTSG1mjv25HzhmdLmSTbARcR/yi2Ek3qQAABfBJREFURs+9wIdI706QJCWTSGdL5xL/dTp6biDtmX1lJ8q8HmCkeYz0NqfpHa2oJOVtBulBPo8T/3W5CfMofbwvHA6sIH6RmzIrgV8Ax+OLhiSVYTxwLOmOKfeDZ+4HR3Wwrln4BPEL3cR5mPTGwZeQbqGUpH4xCBwEfBl4hPivt02cj7S9uhkZBM4nfrGbPPeT3jVwON5KKClPE4EjgH8F/kj819Umz/dp8Fv+6rYJ6dW60YuewywGLgDeTXr2tWcHJDXRILAH8B7gQtLXruivnznMbwi66C+ycUwlHfj0wAw5WgBcNTTXAbNJZwwkqZemkb4p2RvYf2i8w6mae4CZpFcZ91z0KYddgSuAzYNz5O4x0luxbifdRnPv0I/zgPmkl2ZIUhXjgcmkp9HtQLpifwdgF9J3+luEJesPj5HeH3NbVIDoAgBwCPBTvAq+m54k3V7yGLAIWE664nRhZChJjfAs0kPKxpHux382MAXYNDJUn1sKHEl61n+YJhQAgNcB38Qn5UmS+ttK0p73/eggTdlw5wD3Aa+gOaVEkqQ6rQZOIX3DG64pBQDgJtIp6pdFB5EkqQveT3oWQiM0qQAAXEP6XPrI6CCSJNXow8AXo0MM17QCAOnWwDGkp0ZJkpS7TwGfjg6xriYWAIBLgSXAYdFBJEnqwCdIBaBxmloAAK4kPRzhaLwwUJKUl9XA+4AvRAdZnyYXAIBrSU9KegU+AleSlIeVwNuBf4sOsiFNLwCQnnB3J6kE5JBXklSupcCJwLejg4wmp1PrhwDn4WODJUnN9DhwHHBZcI6W5FQAAJ5PesvUjOAckiQNdy/pOTZhz/avKrfP1W8F9iNdIChJUhNcQ3qrXzabP+RXACC91OZI4EfRQSRJxTsPOBh4ODhHZbleVLccOBd4mnRtQG4fZUiS8raadIvfO0l7Unb6YeM8mvRihWdHB5EkFWE+8AbgZ9FBOtEPBQBge9KrFfeLDiJJ6ms3AK8mXfSXtRyvARjJPNK7A74enEOS1L/+A9ifPtj8oX/OAAz3auAM/EhAklSPBcC7gO9EB6lTPxYAgGnA2aQrMyVJatelwJuB+6OD1C3XuwBGs5BUAB4n3SXQr8cpSeqOFcCppGf6LwjO0hX9egZguL2As4Z+lCRpNNeRNv4bo4N0U79cBLghNwAvBP4eWBycRZLUXE8D/wi8mD7f/KGMMwDD7Qj8O3BYdBBJUqP8CjgZuCM6SK+UcAZguHuAI4C3AX8KziJJivcQ8BbSRePFbP5Q7sVxNwBfIT2+cSYwNjaOJKnHlgNfIr2+95rgLCFK+whgJH8F/G/g+OggkqSeuIB0Xdjd0UEilfYRwEjuAl5L+mjghuAskqTuuRY4FDiWwjd/sAAM9wtgb+BwLAKS1E9uIX2j90LgkuAsjeFHACMbAF4D/C/gecFZJEnt+T3wOeBbwMrgLI1jAdiwMcDrgQ8AewRnkSS15kbgn4DvAquCszSWBaB1BwAfAo7BdZOkJroS+DzpIr/VwVkaz42suj2B9wMnAOODs0hS6ZaR3tJ3GjA7OEtWLADt24J06+B7gN2Cs0hSae4Avgp8DR/s1hYLQD32Ad4BvBHYODiLJPWrpcCPgTOAX+Jp/o5YAOq15qzACcBBlPukRUmqy0rgUuAc4PvAE7Fx+ocFoHsmky4YPB44Ch83LEmtWgVcDXyPtPE/FBunP1kAemMb4OXA0aSnUG0aG0eSGmchcDFwEekq/gdj4/Q/C0DvjSPdUngUqRDsHhtHksLcRNrwLyLdwrc8Nk5ZLADxnkV6POUBwKyhHyeGJpKk+q0gbfhXAlcAlwGPRAYqnQWgeSYC+5JKwR6kMwS7AhMiQ0lSBUuAW4GbSffm/5b0Ip6lkaH0TBaAPIwFdiaVgd2AHYEZwA7A1nGxJBXuQeDeobkHmEPa8O8kfcevBrMA5G8ia8vAVNLdB1OGZvLQbMHa5xM8i3R74jhgUo+zSmqeRaTP3leSLsQDeAp4HJg/NI8M/fgo6Yr8uUOzpLdRVaf/D4Vp/ZaY2eBHAAAAAElFTkSuQmCC" />
              </defs>
            </svg>
          </button>
        </div>
        <div
          class="bg-primary-500 hover:bg-primary-400 text-white dark:text-gray-900 ml-auto cursor-pointer rounded text-sm font-bold focus:outline-none focus:ring ring-primary-200 dark:ring-gray-600 inline-flex items-center justify-center h-9 px-6 shadow relative bg-primary-500 hover:bg-primary-400"
          type="submit" @click="setImagesecondBanner()">
          save
        </div>
      </div>
      <div v-else-if="field.type == 3">
        <div class="form-group flex flex-col bg-[#b93939] mt-3 py-1.5 gap-y-2 w-full" v-for="(input, key) in inputs"
          :key="input.id">
          <div class="flex flex-row items-center justify-start">
            <div class="flex flex-col items-start justify-start my-2 gap-y-2">
              <input type="file" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2" ref="myFiles"
                @change="offerBanner($event, input.id, key, 'photo')" placeholder="الرجاء اختيار صورة الفيديو" />
              <input type="text" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2" ref="title"
                @change="offerBanner($event, input.id, key, 'videotitle')" placeholder="الرجاء كتابة عنوان الفيديو" />
              <input type="text" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2" ref="title"
                @change="offerBanner($event, input.id, key, 'title')" placeholder="الرجاء كتابة العنوان" />
              <input type="text" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2" ref="title"
                @change="offerBanner($event, input.id, key, 'price')" placeholder="الرجاء كتابة السعر" />
              <input type="text" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2" ref="title"
                @change="offerBanner($event, input.id, key, 'description')" placeholder="الرجاء كتابة الوصف" />
              <input type="text" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2" ref="title"
                @change="offerBanner($event, input.id, key, 'buttonTitle')" placeholder="button Title" />
              <input type="text" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2" ref="title"
                @change="offerBanner($event, input.id, key, 'buttonLink')" placeholder="button Link" />
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
              class="w-[24px] h-[24px]" alt="ssss" />
          </button>
        </div>
        <div
          class="bg-primary-500 hover:bg-primary-400 text-whitedark:text-gray-900 ml-auto cursor-pointer rounded
           text-sm font-bold focus:outline-none focus:ring ring-primary-200 dark:ring-gray-600 inline-flex items-center justify-center h-9 px-6 shadow relative bg-primary-500 hover:bg-primary-400"
          type="submit" @click="setImeageofferBanner">
          save
        </div>
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
      keyVal: [],
      inputs:
        this.field.type == 1
          ? [
            {
              id: uuid(),
              value: "",
            },
          ]
          : [
            {
              id: uuid(),
              value: "",
              title: "",
              subtitle: "",
              button: "",
              buttonLink: "",
            },
          ],
    };
  },

  methods: {
    AddFirstBanner(key) {
      document.getElementById(key).click();
    },
    upload(event, key) {
      console.log("name", event.target.files[0].name);
      console.log("ref", event.target.files[0]);
      let formData = new FormData();
      formData.append("file", event.target.files[0]);
      formData.append("key", key);
      console.log("formDataa", formData);
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
    removeImageSlider(key, type) {
      console.log('remoooooove')
      axios.post("/removeImageSlider", {
        key: key,
        type: type,
      });
      this.getImeageSlider();
    },
    secondBanner(e, key, index, type) {
      console.log('key', key)
      if (type == "photo") {
        if (!this.secondBannerArray[index]) {
          console.log('111HERERERE', this.secondBannerArray)

          this.keyVal.push(key);
          this.secondBannerArray.push({ [key]: { [type]: e.target.files[0] } });
        } else {
          console.log('HERERERE', this.secondBannerArray[index][key])
          this.secondBannerArray[index][key][type] = e.target.files[0];
        }
      }
      if (type == "title") {
        if (!this.secondBannerArray[index]) {
          this.keyVal.push(key);
          this.secondBannerArray.push({ [key]: { [type]: e.target.value } });
        } else {
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
        console.log('this.ImageSlider', this.ImageSlider)
      });
    },
    setImeageSlider() {
      axios.post("/setImeageSlider", {
        ImageSlider: this.ImageSlider,
        inputs: this.inputs,
      });


      this.getImeageSlider();
    },
    setImagesecondBanner() {
      let formData = new FormData();
      for (let index = 0; index < this.keyVal.length; index++) {
        console.log('key', this.secondBannerArray[index][this.keyVal[index]])
        formData.append("file", this.secondBannerArray[index][this.keyVal[index]]["photo"]);
        formData.append("title", this.secondBannerArray[index][this.keyVal[index]]["title"]);
        formData.append("subtitle", this.secondBannerArray[index][this.keyVal[index]]["subtitle"]);
        formData.append("buttonText ", this.secondBannerArray[index][this.keyVal[index]]["buttonText"]);
        formData.append("buttonLink", this.secondBannerArray[index][this.keyVal[index]]["buttonLink"]);
        formData.append("key", this.keyVal[index]);
        axios.post("/setImeagesecondBanner", formData, {
          headers: {
            "Content-Type": "multipart/form-data",
          },
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
        formData.append("file", this.FourthBannerArray[index][this.keyValFourthBanner[index]]["photo"]);
        formData.append("title", this.FourthBannerArray[index][this.keyValFourthBanner[index]]["title"]);
        formData.append("subtitle", this.FourthBannerArray[index][this.keyValFourthBanner[index]]["subtitle"]);
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
        formData.append("file", this.offerBannerArray[index][this.keyValofferBanner[index]]["photo"]);
        formData.append("videotitle", this.offerBannerArray[index][this.keyValofferBanner[index]]["videotitle"]);
        formData.append("title", this.offerBannerArray[index][this.keyValofferBanner[index]]["title"]);
        formData.append("price", this.offerBannerArray[index][this.keyValofferBanner[index]]["price"]);
        formData.append("description", this.offerBannerArray[index][this.keyValofferBanner[index]]["description"]);
        formData.append("buttonTitle", this.offerBannerArray[index][this.keyValofferBanner[index]]["buttonTitle"]);
        formData.append("buttonLink", this.offerBannerArray[index][this.keyValofferBanner[index]]["buttonLink"]);
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
        console.log("ImeageofferBanner", this.ImeageofferBanner);
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
</style>