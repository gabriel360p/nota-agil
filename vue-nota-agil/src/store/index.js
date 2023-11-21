// // import notas from '@/services/notas'
// import { createStore } from 'vuex'
// import axios from 'axios'


// export default createStore({
//   state: {
//     notas:[],
//   },

//   //serve para a comuniacção com os dados em state
//   mutations: {
//     setNotas(state, dados) {
//       state.notas = dados
//       // console.log(dados)
//     }
//   },

//   //comunicação com back-end
//   actions: {
//     async fetchNotas(context) {
//       const dados= await axios.get('http://localhost:8000/api/places/list')
//       console.log(dados.data)
//       context.commit('setNotas',dados.data)
//     }
//   },

//   // //propriedades computadas
//   getters: {
//   },

// })
