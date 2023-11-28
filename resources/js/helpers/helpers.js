import Swal from 'sweetalert2'

export const methods = {

    async sendRequestAPI(method, route, data = {}) {
        return await axios({
            method: method,
            url: route,
            data: data
        })
    },

    ToastrSuccess(mensagem) {
        Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        }).fire({
            icon: "success",
            title: mensagem
        });
    },
    
    ToastrError(mensagem) {
        Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        }).fire({
            icon: "error",
            title: mensagem
        });
    }

}