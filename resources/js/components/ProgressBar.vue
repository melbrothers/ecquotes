<template>
  <v-progress-linear
    :indeterminate="true"
    :color="color"
    height="4"
    v-if="show"
  >
  </v-progress-linear>
</template>

<script lang="ts">
import { Component, Vue, Prop } from 'vue-property-decorator'

@Component
export default class ProgressBar extends Vue {
    @Prop([Boolean, String])show!: boolean | string
    @Prop({default: 'accent'})color!: string
}
</script>

<style lang="stylus" scoped>
.progress-linear
  height: 4px
  left: 0
  margin: 0
  position: absolute
  right: 0
  top: 0
  width: 100%
  z-index: 999999
</style>
