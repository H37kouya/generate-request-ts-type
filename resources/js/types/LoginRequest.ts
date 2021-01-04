/**
 * リクエストボディ
 */
export interface LoginRequest {
    type: 'LoginRequest'
    name?: string
    email: string
    number?: number
    digits?: number
    ids?: number[]
    codes: string[]
    mainImage1: Blob|File
    mainImage2: Blob|File
    images?: (Blob|File)[]
}

/**
 * バリデーションエラー
 */
export interface LoginRequestValidationError {
    type: 'LoginRequestValidationError'
    error: {
        name?: string
        email?: string
        number?: string
        digits?: string
        ids?: string
        codes?: string
        mainImage1?: string
        mainImage2?: string
        images?: string
    }
    message: string
}

export const isLoginRequest = (v: any) => v.type === 'LoginRequest'
export const isLoginRequestValidationError = (v: any) => v.type === 'LoginRequestValidationError'
