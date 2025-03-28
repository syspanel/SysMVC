@extends('layout')

@section('title', 'App Development with SysMVC')

@section('content')
<div class="container mt-5">
    <h1 class="display-4 text-primary">App Development with SysMVC</h1>
    <p class="lead">How to use SysMVC as a base for application development.</p>
    
    <p>SysMVC is a flexible and powerful framework, perfect for serving as the foundation for developing modern web applications.</p>
    
    <h2>Modular Structure</h2>
    <p>SysMVC allows you to create independent modules, making it easier to organize your code and maintain the project.</p>
    
    <h2>Simple Routing</h2>
    <p>With SysMVC's router, you can define your routes in a simple and intuitive way:</p>
    <pre><code>
Router::get('/home', 'HomeController@index');
Router::post('/client', 'ClientController@store');
    </code></pre>
    
    <h2>Template Rendering</h2>
    <p>Use BladeOne to efficiently and neatly render your templates:</p>
    <pre><code>
echo $blade->run("home.index", ["clients" => $clients]);
    </code></pre>
    
    <p>With these tools, SysMVC provides a solid foundation for developing robust and scalable web applications.</p>

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
<p>If you wish to support the development of SysMVC, consider making a donation via PAYPAL to <a href="https://www.paypal.com/donate/?business=marcocosta@gmx.com&currency_code=USD" target="_blank"><img src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" alt="Donate via PayPal"></a></p>
</div>
@endsection
