<template>
  <div class="registration-form">
    <h2>Register</h2>
    <form @submit.prevent="register">
      <input
        type="text"
        v-model="users.username"
        placeholder="Username"
        id="username"
        class="form-control"
        required
      />
      <input
        type="email"
        v-model="users.email"
        placeholder="Email"
        id="email"
        class="form-control"
        required
      />
      <input
        type="password"
        v-model="users.password"
        placeholder="Password"
        id="password"
        class="form-control"
        required
      />

      <button type="submit" value="submit" class="btn btn-success">
        Register
      </button>

      <div class="login">
        <router-link to="/login">Log in</router-link>
      </div>
    </form>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "Register",
  data() {
    return {
      users: {
        username: "",
        email: "",
        password: "",
      },
    };
  },
  methods: {
    register() {
      axios
        .post("http://127.0.0.1:8000/api/register", this.users)
        .then(({ data }) => {
          console.log(data);
          alert("success");
          localStorage.setItem("token", data.authorisation.token);
          this.$router.push("/login");
        })
        .catch((error) => {
          alert("failed");
        });
    },
  },
};
</script>

<style>
.registration-form {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f2f2f2;
  border-radius: 5px;
  display: flex;
  flex-direction: column;
}

.registration-form h2 {
  text-align: center;
  margin-bottom: 20px;
}

.registration-form form {
  display: flex;
  flex-direction: column;
}

.registration-form input[type="text"],
.registration-form input[type="email"],
.registration-form input[type="password"] {
  margin-bottom: 10px;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

.registration-form button[type="submit"] {
  padding: 10px 20px;
  background-color: #4caf50;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.registration-form button[type="submit"]:hover {
  background-color: #45a049;
}

.registration-form .login {
  text-align: center;
  margin-top: 10px;
}

.registration-form .login a {
  color: #0069d9;
  text-decoration: none;
  font-size: 20px;
}

.registration-form .login a:hover {
  text-decoration: underline;
}
</style>
