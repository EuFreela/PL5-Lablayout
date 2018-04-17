# PL5-Lablayout

<p><b>La-Layout é uma série de plugins que vou lançar para facilitar a aplicação de templates no laravel utilizando blade. Eu utilizo e facilita na troca de layout quando necessário, bastanto atualizar o plugin ou lançando outra release. Mesmo que sua aplicação utilize o angular, o blade estará disponibilizado como default de forma a acelerar o desenvolvimento.</b></p>
<p>Nesta versão, estou disponibilizando o layout free edmin, o que costumo usar no default para blade-backend, até ter tempo para acabar os meus layouts (além de programador sou designer). O acrônimo <b>b (lab)</b> se refere ao backend. Para o front <b>f (laf)</b></p>

<p>Conforme vou progredindo com a implementaçãod e alguns projetos vou disponibilizando algumas as versões seguintes. Nesta versão esta implementado até a backend. Resta dividir as seções do html5 em outras partes funcionais que o template oferece.</p>

<p>Os PCK aqui desenvolvidos tem o objetivo de disseminar a cultura <b>clean code</b></p>

### INSTALAÇÃO
<pre>
composer require lameck/lablayout
</pre>

### CONFIGURAÇÃO
<b>Provider</b>
<pre>
Lameck\Lablayout\LablayoutServiceProvider::class,
</pre>
<pre>
composer dumpautoload
</pre>
<pre>
php artisan vendor:publish Lameck\Lablayout\LablayoutServiceProvider
ou
php artisan vendor:publish
selecione o indicador Lameck\Lablayout\LablayoutServiceProvider
</pre>

<hr>

### TESTE
<b>Route</b>
<pre>
Route::get("/",function(){
  return response()->view('Lameck\Lablayout::user.login');
});
</pre>
<img src="https://s18.postimg.cc/ji9ed09hl/lablayout.png" heigth="700" width="600">

<br>
<pre>
Route::get("/",function(){
  return response()->view('LameckLablayout::dashboard.home');
});
</pre>
<img src="https://s18.postimg.cc/v7de16iih/lablayout.png" heigth="700" width="600">

<hr>
### Possivel erro
<p>Ao clicar no btn entrar (página de login), esse erro ocorrerá</p>
<img src="https://s18.postimg.cc/876qodfeh/lablayout.png" heigth="700" width="600">

<p>Isso acontece devido a variável $errors, localizada na blade login, depende do retorno da validação do Request que deverá ser enviado por controller ou, dependendo de seu estilo de programar, no router. Em resumo, essa variável é dependente do request.</p>
