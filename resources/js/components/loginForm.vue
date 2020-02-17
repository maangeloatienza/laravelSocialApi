<template>
    <div>
        <CustomModal>
            <div slot='modalTitle'>
                <h3>Login</h3>
            </div>
            <div slot="modalContent">
                <CustomForm>
                    <div slot='formField'>
                        <input
                            type="text"
                            class='form-control mb-2'
                            placeholder="Username"
                            v-model="user.username"
                            required>
                        <input
                            type="password"
                            class="form-control mb-2"
                            placeholder="Password"
                            v-model="user.password"
                            required>
                    </div>

                    <div slot='formControl'>
                        <button
                            type="button"
                            class='form-control btn btn-info'
                            v-on:click='handleSubmit'
                            >
                        Login
                        </button>
                    </div>
                </CustomForm>
            </div>
        </CustomModal>
    </div>
</template>

<script>
import CustomForm from './customForm';
import CustomModal from './modal';

export default {
    components : {
        CustomForm,
        CustomModal
    },
    data() {
        return {
            user : {
                username : null,
                password : null
            }
        }
    },
    methods : {
        handleSubmit : function(){

            axios
                .post('login',this.user)
                .then((response)=>{
                    console.log(response.data);
                    let data = response.data;


                    localStorage.setItem('token', data.access_token);
                    localStorage.setItem('user', JSON.stringify(data.data));

                    if(localStorage.getItem('token')!=null){
                        this.$router.go('/')
                    }


                })
                .catch((error)=>{
                    console.log(error);
                });
        }
    }
}
</script>

<style scoped>

</style>
