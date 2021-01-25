import Vue from 'vue';
const axios = require('axios').default;

var vue_container = new Vue(
  {
    el: "#vue_container",
    data: {
      logo: "img/logo.png",
      discs: [],
    },
    mounted: function(){
      const self = this;
      alert("vue funziona");
      axios.get("partials/server.php")
      .then(function(response) {
        self.discs = response.data;
        console.log(self.discs);
      });
    }
  }
);
