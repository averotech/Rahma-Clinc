<template >
  <DefaultField :field="field" :errors="errors" :show-help-text="showHelpText" :full-width-content="fullWidthContent">
    <template #field>
      <div class="form-group flex flex-col  py-1.5 gap-y-2 w-full" v-for="(input, key) in inputs" :key="input.id">
        <div class="flex flex-row items-center justify-start my-2">
          <input type="file" class="w-full my-2 h-[36px] px-2 py-1 border-b border-2"
            placeholder="الرجاء اختيار الصورة" />
          <div v-on:click="remove(input.id)">
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
        <button v-if="key == inputs.length - 1" @click="add">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <rect width="24" height="24" fill="url(#pattern0)" />
            <defs>
              <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                <use xlink:href="#image0_1_2" transform="scale(0.0416667)" />
              </pattern>
              <image id="image0_1_2" width="24" height="24"
                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAW0lEQVR4nO2VQQrAIAwE53n+/wnxIdtLC0WQqKGkhwzkZMzAEhSKTRrQAR2W3TOmWGC4XpIpT9Mp8u6nCxQ8LwHbEWmx/isYqS0iPSKPfIF9/Vy3oMS8D6dg5ALzIZ+a+RX41gAAAABJRU5ErkJggg==" />
            </defs>
          </svg>
        </button>
      </div>
    </template>
  </DefaultField>
</template>
<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova';
import { v4 as uuid } from 'uuid'

export default {
  mixins: [FormField, HandlesValidationErrors],

  props: ['resourceName', 'resourceId', 'field'],

  data() {
    return {
      inputs: [{
        id: uuid(),
        value: 'Ameed Qasem Saeed Asmah',
      }],
    }
  },

  methods: {
    add() {
      this.inputs.push({ id: uuid(), value: "" })
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
  },
}
</script>
