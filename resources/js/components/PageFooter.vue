<template>
  <v-footer :fixed="fixed" app>
    <span>&copy; 2017</span>
  </v-footer>
</template>

<script lang="ts">
import { Component, Vue } from 'vue-property-decorator'

@Component
export default class PageFooter extends Vue {
    fixed = false
}
</script>
