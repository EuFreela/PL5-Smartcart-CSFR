# PL5-Smartcart-CSFR

#### Packager Smartcart

<p><b>SmartCart</b> é um packager criado para o framework laravel 5.5 por Lameck Fernandes. Tem o objetivo de automatizar o desenvolvimento de aplicações que utilizam um carrinho de compras.</p>

<p>Este packager foi desenvolvido para acelerar o desenvolvimento de lojas virtuais que utilizam um carrinho de compras. Ou seja, neste packager foram desenvolvidos as rotas, tabelas e os controles de uma aplicação convencional. Para exemplificar seu uso foi desenvolvido um protótipo com bootstrap 4 que acompanha o packager. Em resumo, para o complemento deste packager basta a API de pagamento.</p>

<p>O cart foi baseado no uso de sessão para controle da lista de pedidos. Esta aplicação, inicialmente, trata-se de <b>server-side</b>. No foi desenvolvido a API para client-side, o que poderá conter em outra versão. Contudo, caso seja o interesse, a maior parte do projeto já foi desenvolvida bastando apenas os retornos em json. O modelo usado para tokens é o nativo CSFR. Para JWT basta mínimas alteraçes. O Objetivo é acelerar o desenvolvido, com este packager no há perda de tempo com desenvolvimento do cart e do das tabelas necessárias de cadastro de produtos.</p>

<p>As tabelas foram criadas de acordo com o que é mais comum em cadastro de produtos. Nesta aplicação existe o controle de estoque (inventário), categoria, marca e fornecedor.</p>

<p>Este packager contém:</p>
 <br>
  <h2><b>Publishables</b></h2>
  <h3><i>Migrations</i></h3>
  <p>Ordem de migração</p>
  <o>
      <li>2018_03_26_225025_create_category</li>
      <li>2018_03_26_230229_create_brand</li>
      <li>2018_03_26_234958_create_address</li>
      <li>2018_03_27_000540_create_status</li>
      <li>2018_03_27_032617_create_provider</li>
      <li>2018_03_27_032618_create_product</li>
      <li>2018_03_27_032619_create_inventory</li>
  </o>
  <br>
      <h3><i>Seeders</i></h3>
      <p>Opcional. Para uso do exemplo de aplicação do smartcart</p>
      <o>
          <li>smcAddressTableSeeder</li>
          <li>smcBrandTableSeeder</li>
          <li>smcCategoryTableSeeder</li>
          <li>smcInventoryTableSeeder</li>
          <li>smcProductTableSeeder</li>
          <li>smcProviderTableSeeder</li>
          <li>smcStatusTableSeeder</li>
      </o>

   <br>
    <h2><b>Resources</b></h2>
    <h3><i>views</i></h3>
    <o>
        <ul>Layouts
            <p>Patas onde contém dos templates da aplicação</p>
            <li><b>app:</b> Template utilizado nas páginas do exemplo de aplicação</li>
        </ul>
        <ul>Partials
            <p>Parte integrante do template usado nos includes do blade</p>
            <li><b>header:</b> Cabeçalho do layout</li>
        </ul>
        <ul>Shop
            <p>Contem as páginas do cart</p>
            <li><b>cart:</b> Página de resumo de compras</li>
            <li><b>checkout:</b> Página de efetuação de pagamento</li>
            <li><b>index:</b> Página de lista dos produtos</li>
        </ul>
        <ul>User
            <li><b>profile</b> Página onde conteria as ordens de compra e demais relações ao usuário</li>
            <li><b>signin: </b> Página de login no sistema para uso do smartcart</li>
            <li><b>signup:</b> Página de cadastro no sistema</li>
        </ul>
        <li><b>home:</b> Página de apresentação do smartcart</li>
    </o>


   <br>
    <h2><b>SRC</b></h2>
    <h3><i>Http</i></h3>
    <o>
        <ul><b>Controllers</b>
            <li><b>AccountController:</b> Responsável pelo gerenciamento de usuarios do sistema</li>
            <li><b>ShopController:</b> Reponsável pelo controle das funcionalidades do smartcart</li>
        </ul>
        <ul><b>Middleware</b>
            <li><b>Authenticate:</b> Responsável por limitar acesso às compras no sistema</li>                  
        </ul>
        <ul><b>Models</b>
            <li><b>Product:</b> Camada que intermedia o banco de dados e a view do sistema</li>                  
        </ul>
        <ul><b>Rotes</b>
            <li><b>api:</b> Lista de roteamento dos controles do sistema</li>                  
        </ul>
        <ul><b>Provider</b>
            <li><b>SmartCartServiceProvider:</b> Provider da aplicação, a assinatura no laravel</li>             
        </ul>                
    </o>
            
<a href="https://packagist.org/packages/lameck/smartcart">Assinatura: Packagerlist</a>

<hr>

#### INSTALAÇÃO

<o>
  <li>1. <b>composer require lameck/smartcart</b></li>
  <li>2. <b>php artisan vendor:publish --provider="Lameck\Manuser\ManuserServiceProvider"</b></li>
</o>

<hr>

##### PROVIDER: app/config/app.php
<blockquote><pre>
...   
	Lameck\Smartcart\SmartcartServiceProvider::class,
</pre></blockquote>

<hr>
  
 <hr>
 
#### KERNEL: app/http/kernel.php
Adicione em routemiddlware:<br>
<blockquote>
        <b>'smcAuth' => 'Lameck\Smartcart\Http\Middleware\Authenticate',</b>
</blockquote>

<hr>

#### PUBLISH

Adicione em na classe:<br>
<blockquote><pre>
<b>php artisan vendor:publish --provider="Lameck\Smartcart\SmartcartServiceProvider"</b>
</pre></blockquote>

<hr>

<p>Até neste ponto toda configuração necessária esta definida. Caso deseje ver um exemplo prossiga com os seeders</p>

<hr>

### EXEMPLO
<p>Crie um banco de dados e configure o arquivo nativo <b>.env</b></p>
<p>Adicione ao arquivo <b>DatabaseSeeder</b></p>
<blockquote><pre>    
    //$this->call(UsersTableSeeder::class);
    $this->call(smcCategoryTableSeeder::class);
    $this->call(smcBrandTableSeeder::class);
    $this->call(smcAddressTableSeeder::class);
    $this->call(smcStatusTableSeeder::class);        
    $this->call(smcProviderTableSeeder::class);
    $this->call(smcProductTableSeeder::class);
    $this->call(smcInventoryTableSeeder::class);
</pre></blockquote>
<p>Popule as tabelas: <b>php artisan db:seed</b></p>

<hr>

<img src="https://s18.postimg.org/l3tkwszh5/Dominio.jpg" widht="400" height="400">

