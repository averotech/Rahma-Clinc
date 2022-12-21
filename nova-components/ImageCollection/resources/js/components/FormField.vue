<template>
<div>
  <DefaultField
    :field="field"
    :errors="errors"
    :show-help-text="showHelpText"
    :full-width-content="fullWidthContent"
  >
    <template #field>
      <input
        :id="field.attribute"
        type="text"
        class="w-full form-control form-input form-input-bordered"
        :class="errorClasses"
        :placeholder="field.name"
        v-model="value"
      />
    </template>

  </DefaultField>

  </div>
</template>

<script>
import { FormField, HandlesValidationErrors } from "laravel-nova";
import axios from "axios";
export default {
  mixins: [FormField, HandlesValidationErrors],

  props: ["resourceName", "resourceId", "field"],

  data() {
    return {
      ImeageSlider: [],
    };
  },
  methods: {
    getImeageSlider() {
      console.log("ssss");
      axios.post("/getImeageSlider").then((response) => {
        this.ImeageSlider = response.data;
        console.log(this.ImeageSlider);
      });
    },
      setImeageSlider() {
      axios.post("/setImeageSlider", {
        ImeageSlider: this.ImeageSlider,

      });
    },

  },

  beforeMount() {
    this.getImeageSlider();
  },
  components: {},
};
</script>


