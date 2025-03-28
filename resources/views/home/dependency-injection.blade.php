@extends('layout')

@section('title', 'Dependency Injection with PHP-DI')

@section('content')
<div class="container mt-5">
    <h1 class="display-4 text-primary">Dependency Injection with PHP-DI</h1>
    <p class="lead">How to use PHP-DI in SysMVC.</p>
    
    <p>SysMVC uses the PHP-DI library to manage dependency injection. This allows you to write more modular and testable code.</p>
    
    <h2>Basic Configuration</h2>
    <p>To configure PHP-DI, you can create a <code>di-config.php</code> file with the definitions of your dependencies:</p>
    <pre><code>{{ 
'   use DI\ContainerBuilder;

    return function (ContainerBuilder $containerBuilder) {
        $containerBuilder->addDefinitions([
            // Define your dependencies here
            ClientRepository::class => \DI\create(MySqlClientRepository::class),
        ]);
    };' 
}}</code></pre>

    <h2>Usage</h2>
    <p>To use dependency injection in your classes, simply pass the dependencies through the constructor:</p>
    <pre><code>{{ 
'   class ClientService {
        private $clientRepository;
        
        public function __construct(ClientRepository $clientRepository) {
            $this->clientRepository = $clientRepository;
        }
        
        public function getClients() {
            return $this->clientRepository->findAll();
        }
    }' 
}}</code></pre>
    
    <p>With dependency injection, you can easily swap implementations and keep your code decoupled and more testable.</p>

    <br><br>

    <p>Github: <a href="https://github.com/syspanel/SysMVC.git">https://github.com/syspanel/SysMVC.git</a></p>

    <br><br>

    <h2 class="mt-4">Contact</h2>
    <p>If you're interested in SysMVC, get in touch:</p>
    <ul>
        <li>Email: <a href="mailto:syspanel@gmx.com">syspanel@gmx.com</a></li>
        <li>WhatsApp: <a href="https://wa.me/5535992261684" target="_blank">+55 (35) 99226-1684</a></li>
    </ul>

    ## Donations via PayPal

If you wish to support the development of SysMVC, consider making a donation via PayPal to:

<h2 class="mt-4">Donations via PAYPAL</h2>
<p>If you wish to support the development of SysMVC, consider making a donation via PAYPAL to <a href="https://www.paypal.com/donate/?business=marcocosta@gmx.com&currency_code=USD"><img src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" alt="Donate via PayPal"></a></p>
</div>
@endsection


