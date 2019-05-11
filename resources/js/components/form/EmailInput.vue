<template>
  <div>
    <v-text-field
      browser-autocomplete="current-password"
      :class="errorClass"
      :counter="counter"
      :error-messages="errorMessages"
      :hint="hint"
      :label="label"
      :name="name"
      :prepend-icon="prepend"
      type="email"
      v-model="_value"
    ></v-text-field>
    <has-error :form="form" :field="name"></has-error> 
  </div>
</template>

<script lang="ts">
import TextInput from './TextInput'
import Component from 'vue-class-component'

@Component({})
export default class EmailInput extends TextInput{
  name = 'email-input'
}
</script>
