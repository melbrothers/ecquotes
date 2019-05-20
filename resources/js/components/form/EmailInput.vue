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
  </div>
</template>

<script lang="ts">

import { Component, Vue, Prop } from 'vue-property-decorator';

export default class EmailInput extends Vue{
  name = 'email-input'
}
</script>
