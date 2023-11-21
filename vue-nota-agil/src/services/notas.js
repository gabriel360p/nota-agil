import { http } from './config.js'

export default {
    cadicionar_notas: () => {
        // return http.post()
    },

    listar_notas: () => {
        return http.get('http://localhost:8000/api/places/list')
    },

    atualizar_nota: () => {
        // return http.post()
    },

    editar_nota: () => {
        // return http.post()
    },

    deletar_nota: () => {
        // return http.post()
    },
}