  // Menu toggle functionality
  const menuToggle = document.querySelector('.menu-toggle');
  const dropdownMenu = document.querySelector('.dropdown-menu');111
  
  menuToggle.addEventListener('click', function() {
      this.classList.toggle('active');
      dropdownMenu.classList.toggle('active');
  });
  
  // Close dropdown when clicking outside
  document.addEventListener('click', function(event) {
      if (!menuToggle.contains(event.target) && !dropdownMenu.contains(event.target)) {
          menuToggle.classList.remove('active');
          dropdownMenu.classList.remove('active');
      }
  });
  
  // Close dropdown when pressing Escape keys
  document.addEventListener('keydown', function(event) {
      if (event.key === 'Escape') {
          menuToggle.classList.remove('active');
          dropdownMenu.classList.remove('active');
      }
  });

   //fazer a const
   const titulosProjeto = document.querySelectorAll('.titulo-projeto');
   const imagemProjeto = document.querySelector('.imagemProjeto');
   const visualizadorImagem = document.querySelector('.grid-imgs');
   // sobre cada titulo de projetos para add os event listener
   titulosProjeto.forEach(titulo => {
       titulo.addEventListener('mouseenter', () => {
           const caminhoDaImagem = titulo.dataset.image;
           imagemProjeto.src = caminhoDaImagem;
           visualizadorImagem.classList.add('show');
       });
       
       titulo.addEventListener('mouseleave', () => {
           visualizadorImagem.classList.remove('show');
       });            
   });
   //




   //js para quando a tela for mobile
       function isMobileScreen() {
       return window.innerWidth <= 768;
   }

   function setupMobileProjectInteraction() {
       const titulosProjeto = document.querySelectorAll('.titulo-projeto');
       const imagemProjeto = document.querySelector('.imagemProjeto');

       titulosProjeto.forEach(titulo => {
           titulo.addEventListener('click', () => {
               const novoSrc = titulo.dataset.image;

               if (imagemProjeto.src.includes(novoSrc) && imagemProjeto.classList.contains('show')) {
                   imagemProjeto.classList.remove('show');
               } else {
                   imagemProjeto.src = novoSrc;
                   imagemProjeto.classList.add('show');
               }
           });
       });
   }

   // Executar no load
   if (isMobileScreen()) {
       setupMobileProjectInteraction();
   }

   // Executar também no redimensionamento
   window.addEventListener('resize', () => {
       if (isMobileScreen()) {
           setupMobileProjectInteraction();
       }
   });