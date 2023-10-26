<template>
  <img src="../assets/img/heroSearch.jpg" alt="Login-bg" class="loginbg-image">
  <div class="login-form">
    <h2>Login</h2>
    <form @submit.prevent="login">
      <input
        type="email"
        v-model="users.email"
        class="form-control"
        placeholder="Email"
        required
      />
      <input
        type="password"
        v-model="users.password"
        class="form-control"
        placeholder="Password"
        required
      />
      <button type="submit" class="btn btn-success">Login</button>

      <div class="signup">
        <router-link to="/register">Sign up</router-link>
      </div>
    </form>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      users: {
        email: "",
        password: "",
      },
    };
  },
  methods: {
    login() {
      axios
        .post("http://127.0.0.1:8000/api/login", this.users, {
          headers: {
            Authorization: "Bearer " + localStorage.getItem("token"),
          },
        })
        .then(({ data }) => {
          console.log(data);
          try {
            if (data.status === "success") {
              // alert("You are logged in!");
              localStorage.setItem("token", data.authorisation.token);
              localStorage.setItem("username", data.user.username);
              localStorage.setItem("email", data.user.email);
              this.$router.push("/");
            } else {
              alert("Login failed!");
            }
          } catch (err) {
            alert("Error, please try again!");
          }
        });
    },
  },
};
</script>

<style scoped>
.login-form {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f2f2f2;
  border-radius: 5px;
}

.login-form h2 {
  text-align: center;
  margin-bottom: 20px;
}

.login-form form {
  display: flex;
  flex-direction: column;
}

.login-form input[type="email"],
.login-form input[type="password"] {
  margin-bottom: 10px;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

.login-form button[type="submit"] {
  padding: 10px 20px;
  background-color: #4caf50;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.login-form button[type="submit"]:hover {
  background-color: #45a049;
}

.login-form .signup {
  text-align: center;
  margin-top: 10px;
}

.login-form .signup a {
  color: #0069d9;
  text-decoration: none;
}

.login-form .signup a:hover {
  text-decoration: underline;
}

.loginbg-image {
  object-fit: cover;
  width: 100vw;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  z-index: -1;
}

</style>
