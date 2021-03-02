let app = new Vue ({
  el: '#app',
  data: {
    cds: [],
    genres: ['All'],
    selectedGenre: 'All'
  },
  created() {
    axios
      .get('server.php')
      .then(response => {
        this.cds = response.data;
        this.cds.forEach(element => {
          element.visible = true;
        });
        this.getGenre();
      })
      .catch((error) => console.log(error));
  },
  methods: {
    getGenre() {
      this.cds.forEach(element => {
        if (!this.genres.includes(element.genre)) {
          this.genres.push(element.genre);
        }
      });
    },
    filterGenre() {
      this.cds.forEach(element => {
        (this.selectedGenre == 'All') ? element.visible = true :
        (element.genre == this.selectedGenre) ? element.visible = true :
        element.visible = false;
      });
    }
  }
});