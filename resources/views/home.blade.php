@extends('Lameck\Smartcart::layouts.app')


@section('title', 'SMC')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-4">
            <h1><i class="fab fa-opencart"></i> SmartCart</h1>            
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-10 col-md-10 col-md-offset-1 col-sm-offset-1">
            <p><b>SmartCart</b> é um packager criado para o frame work laravel por Lameck Fernandes. Tem o objetivo de automatizar o desenvolvimento de aplicações que utilizam um carrinho de compras.</p>
            
            <a href="https://github.com/EuFreela/PL5-SmartCart" target="_blank" class="btn btn-success">github</a>
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
        </div>
    </div>

@endsection