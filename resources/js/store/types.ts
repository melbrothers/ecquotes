export interface MessageState {
    type: string,
    title: string,
    text: string,
    modal: boolean,
    show: boolean
}

export interface AuthState {
    user: any,
    token: string | undefined
}
