<template>
    <div class="card" id="mainLogin">
        <div class="card-header">
            Login
        </div>
        <div class="card-body">
            <form @submit="formLogin">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {

    },
    data() {

    },
    methods : {
        formLogin(e) {
            e.preventDefault();
            axios.post('formLogin', {
                Username: this.username,
                Password: this.password
            })
            .then(function (response) {
                console.log(response);
            })          
            .catch(function (error) {
                console.log(error);
            });
        }
    }
}
</script>