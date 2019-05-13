<template>
    <div>
        <div class="alert alert-danger" v-if="error">
            <p>this is a error in here</p>
        </div>
        <form autocomplete="off" @submit.prevent="login" method="post">
            <div class="form-group">
                <label for="email">email</label>
                <input type="text" id="email" class="form-control" placeholder="user@example.com" v-model="email"required>
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" id="password" class="form-control" v-model="password" required>
            </div>
            <button class="btn btn-default" type="submit">denglu</button>
        </form>
    </div>
</template>
