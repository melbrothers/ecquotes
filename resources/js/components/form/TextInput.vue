<template>
    <div>
        <v-text-field
            :browser-autocomplete="browserAutocomplete"
            :class="errorClass"
            :counter="counter"
            :error-messages="errorMessages"
            :hint="hint"
            :label="label"
            :name="name"
            :prepend-icon="prepend"
            v-model="_value"
        ></v-text-field>
        <has-error :form="form" :field="name"></has-error>
    </div>
</template>

<script lang="ts">
    import { Component, Vue, Prop } from 'vue-property-decorator';

    // @Component({
    //     props: {
    //         name: {
    //             type: String,
    //             required: true,
    //         },
    //         label: {
    //             type: String,
    //             required: true,
    //         },
    //         hint: {
    //             type: String,
    //         },
    //         prepend: {
    //             type: String,
    //             default: '',
    //         },
    //         counter: {
    //             type: [Boolean, Number, String],
    //             default: false,
    //         },
    //         value: {
    //             type: String,
    //             default: '',
    //         },
    //         browserAutocomplete: String,
    //     },
    // })
    @Component
    export default class TextInput extends Vue {
        @Prop(Object) vErrors!: any;
        @Prop(Object) form: any;
        @Prop({default: ''}) value!: string;
        @Prop({default: ''}) prepend!: string;
        @Prop(String) name!: string;
        @Prop(String) label!: string;
        
        get errorMessages () {
            return this.vErrors.collect(this.name)
        }

        get  errorClass () {
            return this.form.errors.has(this.name) && 'input-group--error error--text'
        }

        get  _value() {
            return this.value
        }
        set _value(value) {
            value = value || ''
            this.$emit('update:value', value.trim())
            this.$emit('input', value.trim())
        }
    }
</script>
