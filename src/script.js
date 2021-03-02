let app = new Vue ({
  el: '#app',
  data: {
    cds: []
  },
  created() {
    axios
      .get('server.php')
      .then(response => {
        this.cds = response.data;
      })
      .catch((error) => console.log(error));
  }
});