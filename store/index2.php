<?php 
include("header.php"); 
verificaUsuario();
?>
                <?php
                    if(isset($_GET["login"]) && $_GET["login"] == true){
                        ?>
                    <p class="alert alert-success">Logado com sucesso!</p>
                        <?php
                    }
                ?>
                
    <h1>Bem-vindo(a) à Loja</h1>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
</svg>
    <div class="container py-3"> 
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Preços</h1>
        <p class="fs-5 text-muted">Saiba aqui os preços de todos os nosso planos, e o que podemos oferecer para você.</p>
        </div>
    </div>
    <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Gratuito</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">R$0<small class="text-muted fw-light">/mês</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 usuarios incluidos</li>
              <li>2 GB de Armazenamento</li>
              <li>Suporte de Email</li>
              <li>Central de ajuda</li>
            </ul>
            <a href="produto-formulario.php">
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Cadastre Gratis</button>
            </a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Pro</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">R$150<small class="text-muted fw-light">/mês</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>20 Central de ajuda</li>
              <li>10 GB de Armazenamento</li>
              <li>Prioridade no Suporte de Email</li>
              <li>Central de ajuda</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Assine Agora</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Empresa</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">R$299<small class="text-muted fw-light">/mês</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>30 Central de ajuda</li>
              <li>15 GB de Armazenamento</li>
              <li>Telefone e Suporte de Email</li>
              <li>Central de ajuda</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Assine agora</button>
          </div>
        </div>
      </div>
    </div>

    <h2 class="display-6 text-center mb-4">Compare os Planos</h2>

    <div class="table-responsive">
      <table class="table text-center">
        <thead>
          <tr>
            <th style="width: 34%;"></th>
            <th style="width: 22%;">Gratuito</th>
            <th style="width: 22%;">Profissinal</th>
            <th style="width: 22%;">Empresa</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-start">Publico</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Privado</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
        </tbody>

        <tbody>
          <tr>
            <th scope="row" class="text-start">Permissões</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Compartilhamento</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Membros Ilimitados</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Segurança Extra</th>
            <td></td>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
<?php include("footer.php"); ?>   