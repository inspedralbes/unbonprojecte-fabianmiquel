<template>
  <div class="portada">
    <h1>Animales Aleatorios</h1>
    <input v-model="filtro" @input="filtrarAnimales" placeholder="Buscar por nombre...">
    <div v-for="animal in animalesFiltrados" :key="animal.id" class="animal">
      <h2>{{ animal.nombre }}</h2>
      <p>{{ animal.caracteristica }}</p>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      animales: [],
      animalesFiltrados: [],
      filtro: ''
    };
  },
  mounted() {
    this.obtenerAnimales();
  },
  methods: {
    async obtenerAnimales() {
      try {
        const response = await fetch('http://localhost:8000/random-animal');
        if (!response.ok) {
          throw new Error('Network response was not ok');
        }
        const data = await response.json();
        this.animales = data;
        this.animalesFiltrados = data;
      } catch (error) {
        console.error("Error al obtener los animales:", error);
      }
    },
    filtrarAnimales() {
      if (this.filtro === '') {
        this.animalesFiltrados = this.animales;
      } else {
        this.animalesFiltrados = this.animales.filter(animal =>
          animal.nombre.toLowerCase().includes(this.filtro.toLowerCase()) ||
          animal.caracteristica.toLowerCase().includes(this.filtro.toLowerCase())
        );
      }
    }
  }
};
</script>

<style>
.portada {
  text-align: center;
}
/* Añade estilos adicionales según tus preferencias */
</style>
