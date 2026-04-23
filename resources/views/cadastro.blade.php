@extends('index')
@section('conteudo')
  <main class="page-hero">
    <div class="container">
      <div class="notice">Ação realizada com sucesso.</div>

      <div class="grid-2" style="display:grid; grid-template-columns:1fr 1fr; gap:20px;">

        <!-- LOGIN -->
        <section class="page-panel">
          <span class="kicker">Já tenho conta</span>
          <h2 style="margin-top:12px;">Login</h2>

          <form id="contactForm" class="list" style="margin-top:20px;">
            <label>
              Email
              <input required type="email" placeholder="voce@email.com" />
            </label>

            <label>
              Senha
              <input required type="password" placeholder="Digite sua senha" />
            </label>

            <button class="btn btn-primary" type="submit">Entrar</button>
          </form>
        </section>

        <!-- CADASTRO -->
        <section class="page-panel">
          <span class="kicker">Novo por aqui?</span>
          <h2 style="margin-top:12px;">Cadastro</h2>

          <form id="contactForm" class="list" style="margin-top:20px;" method="POST" action="/cadastrar">
            @csrf
            <label>
              Nome
              <input required type="text" placeholder="Seu nome completo" name="nome/>
            </label>

            <label>
              Email
              <input required type="email" placeholder="voce@email.com" name="email"/>
            </label>

            <label>
              Senha
              <input required type="password" placeholder="Digite sua senha" name="senha"/>
            </label>

            <label>
              Confirmar senha
              <input required type="password" placeholder="Repita sua senha" name="confirmar_senha"/>
            </label>

            <label style="display:flex; gap:10px; align-items:flex-start;">
              <input required type="checkbox" style="width:18px; height:18px; margin-top:2px;" />
              <span class="small">Aceito os termos de uso</span>
            </label>

            <button class="btn btn-primary" type="submit">Cadastrar</button>
          </form>
        </section>

      </div>
    </div>
  </main>
  @endsection