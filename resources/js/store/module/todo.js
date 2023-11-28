export const todo = {
    namespaced: true,
    mutations: {
        async store(state, payload) {
            let data = (await axios.post('/api/todo', payload)).data
            state.tasks.unshift(data)
        },
        async destroy(state, payload) {
            state.tasks = state.tasks.filter(row => row.id != payload)
            axios.delete(`/api/todo/${payload}`)
        },
        async update(state, payload) {
            axios.put('/api/todo', payload)
        },
        async enableToChange(state, payload) {
            payload.disabled = !payload.disabled;

            state.tasks = state.tasks.map(row => {
                if(row.id == payload.id) {
                    return payload
                }
                return row
            })
        },
        async makeDone(state, payload) {
            payload.has_done = !payload.has_done;

            state.tasks = state.tasks.map(row => {
                if(row.id == payload.id) {
                    return payload
                }
                return row
            })

            axios.put('/api/todo', payload)
        }
    },
    state: {
        tasks: (await axios.get('/api/todo')).data,
    }
}