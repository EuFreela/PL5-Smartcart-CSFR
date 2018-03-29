# PL5-Smartcart-CSFR

#### Packager Smartcart

<p><b>SmartCart</b> é um packager criado para o framework laravel 5.5 por Lameck Fernandes. Tem o objetivo de automatizar o desenvolvimento de aplicações que utilizam um carrinho de compras.</p>

<p>Este packager foi desenvolvido para acelerar o desenvolvimento de lojas virtuais que utilizam um carrinho de compras. Ou seja, neste packager foram desenvolvidos as rotas, tabelas e os controles de uma aplicação convencional. Para exemplificar seu uso foi desenvolvido um protótipo com bootstrap 4 que acompanha o packager. Em resumo, para o complemento deste packager basta a API de pagamento.</p>

<p>O cart foi baseado no uso de sessão para controle da lista de pedidos. Esta aplicação, inicialmente, trata-se de <b>server-side</b>. No foi desenvolvido a API para client-side, o que poderá conter em outra versão. Contudo, caso seja o interesse, a maior parte do projeto já foi desenvolvida bastando apenas os retornos em json. O modelo usado para tokens é o nativo CSFR. Para JWT basta mínimas alteraçes. O Objetivo é acelerar o desenvolvido, com este packager no há perda de tempo desenvolvendo o cart e tabelas necessárias, permitindo que o desenvolvedor concentre no que é necessário ou que altere minimas configuraçes aproveitando melhor o código.</p>

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

 <b>composer require lameck/smartcart</b>

<hr>

##### PROVIDER: app/config/app.php
...   
   Lameck\Smartcart\SmartcartServiceProvider::class,
  
 <hr>
 
#### KERNEL: app/http/kernel.php
Adicione em routemiddlware:<br>
<b>'smcAuth' => 'Lameck\Smartcart\Http\Middleware\Authenticate',</b>

<hr>

#### PUBLISH

<b>php artisan vendor:publish --provider="Lameck\Smartcart\SmartcartServiceProvider"</b>

<hr>

<p>Até neste ponto toda configuração necessária esta definida. Caso deseje ver um exemplo prossiga com os seeders</p>

<hr>

### EXEMPLO
<p>Crie um banco de dados e configure o arquivo nativo <b>.env</b></p>
<p>Crie as tabelas no banco: <b>php artisan migrate</b></p>
<p>Adicione ao arquivo <b>DatabaseSeeder</b></p>
<blockquote>
    //$this->call(UsersTableSeeder::class);
    $this->call(smcCategoryTableSeeder::class);
    $this->call(smcBrandTableSeeder::class);
    $this->call(smcAddressTableSeeder::class);
    $this->call(smcStatusTableSeeder::class);        
    $this->call(smcProviderTableSeeder::class);
    $this->call(smcProductTableSeeder::class);
    $this->call(smcInventoryTableSeeder::class);
</blockquote>
<p>Se não digitar este comando, as tabelas poderão não ser populadas: <b>composer dump-autoload</b>. Um possível erro seria algo como "a tabela smcCategoryTableSeeder não foi encontrada"</p>
<p>Popule as tabelas: <b>php artisan db:seed</b></p>
<p>Rode o servidor<b>php artisan serve</b></p>
<p>Para acessar as rotas basta <b>php artisan rout:list</b>. O protóripo se encontra na <b>localhot:8000/smc</b></p>

<hr>
<b>Domínio</b><br>
<img src="https://s18.postimg.org/l3tkwszh5/Dominio.jpg" widht="400" height="400">

<hr>

<b>Home</b><br>
<img src="https://s18.postimg.org/9384w2kcp/Captura_de_tela_de_2018-03-28_21-22-14.png" widht="900" height="400">
<br>

<b>SHOP</b><br>
<img src="https://s18.postimg.org/a6s97skcp/Captura_de_tela_de_2018-03-28_21-36-55.png" widht="900" height="400">

<br>
<b>Criando conta</b><p>Por utilizar sessão como meio de gerenciamento do cart, é necessário logar no sistema.</p><br>
<img src="https://s18.postimg.org/gx8qh9a3d/Captura_de_tela_de_2018-03-28_21-38-32.png" widht="900" height="400">

<br>
<b>Após Login, add pedidos</b><br>
<img src="https://s18.postimg.org/dqe6xnkih/Captura_de_tela_de_2018-03-28_21-40-08.png" widht="900" height="400">

<br>
<b>Carrinho</b><p></p><br>
<img src="https://s18.postimg.org/7cp3ufahl/Captura_de_tela_de_2018-03-28_21-41-06.png" widht="900" height="400">

<br>
<b>Carrinho</b><p>Adicione mais pedidos, exclua algum item ou apague todos os itens.</p><br>
<img src="https://s18.postimg.org/7cp3ufahl/Captura_de_tela_de_2018-03-28_21-41-06.png" widht="900" height="400">

<br>
<b>Checkout</b><p>Basta inserir a API de pagamento</p><br>
<img src="https://s18.postimg.org/w5ynv4ynt/Captura_de_tela_de_2018-03-28_21-43-02.png" widht="900" height="400">
<hr>

<p>Prócimos plugins adiciono o pagamento com diversos places dentro do brasil e fora.</p>



