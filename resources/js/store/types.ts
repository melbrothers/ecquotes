export interface State {
    auth: Auth,
    message: Message
}

export interface Auth {
    user: any,
    token: any
}

export interface Message {
    type: '',
    title: '',
    text: '',
    modal: false,
    show: false
}
