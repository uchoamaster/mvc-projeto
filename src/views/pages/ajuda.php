<?php $render('header-principal'); ?>
<?php $render('navbar-header-principal'); ?>
<?php $render('navbar-sidebar-principal'); ?>
<div class="content-wrapper px-4 py-2">

<div class="content-header">
    <h1>Introdução</h1>
</div>

<div class="content px-2">
    <h2 id="quick-start">Atalho Rápido</h2>
    <p>Aqui tem um paragrafo de teste</p>

    <h3 id="download--changelog">Download &amp; teste:</h3>
    <p>teste de link de download <a href="https://github.com/ColorlibHQ/AdminLTE/releases/latest">AdminLTE 3</a> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus ullam iste unde labore asperiores quisquam eum fugit. Sed
        magnam, error unde voluptas, ut odio consectetur ducimus, sapiente ullam porro dolore..<br /> teste <a href="https://github.com/ColorlibHQ/AdminLTE/releases">teste</a> teste.<br /> teste <a href="https://github.com/ColorlibHQ/AdminLTE/releases/tag/v2.4.18">AdminLTE 2</a>                    / <a href="https://github.com/ColorlibHQ/AdminLTE/releases/tag/1.3.1">AdminLTE 1</a>.</p>

    <h2 id="stable-release">teste</h2>
    <h3 id="grab-from-jsdelivr-cdn">teste <a href="https://www.jsdelivr.com/package/npm/admin-lte">teste</a> CDN:</h3>
    <p><em><strong>teste</strong>: teste.</em></p>
    <div class="language-html highlighter-rouge">
        <div class="highlight"><pre class="highlight"><code><span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span>
</code></pre></div>
    </div>
    <div class="language-html highlighter-rouge">
        <div class="highlight"><pre class="highlight"><code><span class="nt">&lt;link</span> <span class="na">rel=</span><span class="s">"stylesheet"</span> <span class="na">href=</span><span class="s">"https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css"</span><span class="nt">&gt;</span>
</code></pre></div>
    </div>
    <h3 id="using-the-command-line">Usando linha de Comando:</h3>
    <p><em><strong> Nota importante</strong>: para instalar via npm/Yarn, você precisa de nodejs 10.0 ou superior.</em></p>
    <h4 id="via-npm">Via npm</h4>
    <div class="language-bash highlighter-rouge">
        <div class="highlight"><pre class="highlight"><code>npm <span class="nb">install </span>admin-lte@^3.1 <span class="nt">--save</span>
</code></pre></div>
    </div>
    <h4 id="via-yarn">Via Yarn</h4>
    <div class="language-bash highlighter-rouge">
        <div class="highlight"><pre class="highlight"><code>yarn add admin-lte@^3.1
</code></pre></div>
    </div>
    <h4 id="via-composer">Via Composer</h4>
    <div class="language-bash highlighter-rouge">
        <div class="highlight"><pre class="highlight"><code>composer require <span class="s2">"almasaeed2010/adminlte=~3.1"</span>
</code></pre></div>
    </div>
    <h4 id="via-git">Via Git</h4>
    <div class="language-bash highlighter-rouge">
        <div class="highlight"><pre class="highlight"><code>git clone https://github.com/ColorlibHQ/AdminLTE.git
</code></pre></div>
    </div>

</div>
</div>

<?php $render('footer-principal'); ?>