?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album de fotos</title>
    <style>
        /* body{
            background-image: linear-gradient(to right, rgba(26, 226, 26, 0.541), rgb(117, 211, 228));
        } */
        
/*NAVBAR*/
#navbar{
    border-bottom: 1px solid #7a7a7a;
}

#navbar a:hover{
    color: #7a7a7a;
}
#navbar a.active{
    border-bottom:1px solid #050505 ;
}
.navbar-brand{
    display: flex;
}
.navbar-brand img{
    width: 40px;
}
.navbar-brand span{
   font-weight: 700;
   font-size: 1.5em;
   margin-left: 0.5em;
}

#navbar-items .navbar-nav{
    display: flex;
    justify-content: center;
    width: 100%;
}
#navbar-items .nav-items{
    margin: 0 1em;
}
.btn{
  border-radius: 0 !important;
  padding: 0.6em 1.2em !important;
}
    </style>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

  <nav class="navbar navbar-expand-lg  bg-primary-color" id="navbar">
    <div class="container py-3">
        <a href="#" class="navbar-brand primary-color">
        <img src="foto.png" alt="imovi"/>
        <span>Album de fotos IFRN</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-items" aria-controls="#navbar-items"
    aria-expanded="false"
    aria-label="Toggle navigation"
    
    ><i class="bi bi-list"></i>
</button>
    <div class="collapse navbar-collapse" id="navbar-items">
        <ul class="navbar-nav me-auto mb-2 mg-lg-0 d-flex flex-row justify-content-end">
           
            <li class="nav-item">
                <a href="#" class="btn btn-dark"  data-bs-toggle="modal" data-bs-target="#formModal">Cadastrar</a>
            </li>
            
        </ul>
    </div>

</div>
</nav>
   
  <main class="container m-2">
    <div>
       <a href="imgs/maluco_de_terno.jpeg" data-fancybox="gallery" data-caption="Cara de terno">
      <img height="400" width="400" src="imgs/maluco_de_terno.jpeg" />
    </a>
    <a href="imgs/michel.jpg" data-fancybox="gallery" data-caption="Cara de terno">
      <img height="400" width="400" src="imgs/michel.jpg" />
    </a>
    </div>
   
  </main>
    
      
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Cadastre sua imagem</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" action="conexao.php" enctype="multipart/form-data">
      <div class="modal-body">
        
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Arquivo:</label>
           
              
              <input class="form-control" name="arquivo" type="file" id="formFile" accept=".png, .jpeg, .jpg">
           
          </div>
          <div class="mb-3">
            <label for="nome" class="col-form-label">nome/descrição associada a essa imagem:</label>
            <textarea class="form-control" name="nome" id="nome"></textarea>
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-success">Salvar</button>
      </div>
    </form>
    </div>
  </div>
</div>

</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
    Fancybox.bind("[data-fancybox]", {
  // Your custom options
});

</script>
