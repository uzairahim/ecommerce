import axios from '../../axios';
export const state = {
  students : [],
  folders: []
}

export const mutations = {
  GET_STUDENTS(state, students) {
    state.students = students
  },
  ADD_STUDENT(state, student) {
    state.students.unshift(student.data)
  },
  UPDATE_STUDENT(state, response_data) {
    let index = state.students.findIndex(student => student.id === response_data.data.id)
    if (index !== -1) 
    {
      state.students[index].name = response_data.data.name;
      state.students[index].email = response_data.data.email;
      state.students[index].phone = response_data.data.phone;
    }
  },  
  DELETE_STUDENT(state, response_data) {
   let index = state.students.findIndex(student => student.id == response_data.data.id)
    if (index !== -1) 
    {
     state.students.splice(index, 1)
    }
  },
  GET_ALL_FOLDERS(state, folders) {
    state.folders = folders
  },
}

export const getters = {

}

export const actions = {

  getAllStudents({commit}, {roleid}) {
    return new Promise((resolve, reject) => {
      axios.get('/users/'+roleid).then((response) => {
        commit('GET_STUDENTS',response.data.data);
          resolve(response.data);
      }).catch((error)=>{
        commit('GET_STUDENTS',error.response);
        reject(error.response)
      });
    })
  },

  addStudent({commit},{user}) {
    return new Promise((resolve, reject) => {
      axios.post('/add/user',user).then((response) => {
        commit('ADD_STUDENT',response.data)
        resolve(response.data);
        }).catch((error)=>{
          reject(error.response)
      });
  })
  },

  updateStudent({commit},{user}) {
    return new Promise((resolve, reject) => {
      axios.patch('/user/'+user.id,user).then((response) => {
        commit('UPDATE_STUDENT',response.data);
        resolve(response.data);
        }).catch((error)=>{
          reject(error.response)
        });
    })
  },

  deleteStudent({commit},{id}) {
    return new Promise((resolve, reject) => {
      axios.delete('/user/'+id).then((response) => {
      commit('DELETE_STUDENT',response.data);
      resolve(response.data);
      }).catch((error)=>{
        reject(error.response)
      });
    })
  },

  studentPortal({commit}){
    return new Promise((resolve, reject) => {
      axios.get('studentportal').then((response) => {
        commit('GET_ALL_FOLDERS',response.data.data);
        resolve(response.data);
      }).catch((error)=>{
        commit('GET_ALL_FOLDERS',error.response);
        reject(error.response)
      });
    })

  }
}
