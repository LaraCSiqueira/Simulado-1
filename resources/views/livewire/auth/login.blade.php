<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-3 col-md-5 col-lg-12">

                <div class="card shadow-sm border-0 p-2 p-md-5 rounded-5 bg-white row justify-content-center">

                    <div class="text-center mb-2">
                        <i class="bi bi-person-square" style="font-size: 4rem; color: rgb(255, 138, 241);"></i>
                        <h1 class="h1 fw-bold mb-2">LOGIN</h1>

                        <p class="text-muted small">Preencha os campos abaixo para registrar seu perfil</p>
                    </div>

                    @if (session('error'))
                        <div class="alert alert-danger text-center rounded-pill small">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form wire:submit.prevent="login">

                        <div class="row">
                            <div class="col-12 mb-3">
                                <label class="form-label small fw-bold text-secondary">E-MAIL</label>
                                <input type="email" class="form-control rounded-pill border-light-subtle"
                                    id="email" wire:model='email' placeholder="Insira aqui seu email"
                                    style="background-color: #fcfcfc;">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="password" class="form-label small fw-bold text-secondary">SENHA</label>
                                <input type="password" class="form-control rounded-pill border-light-subtle"
                                    id="senha" wire:model='password' placeholder="Insira sua senha"
                                    style="background-color: #fcfcfc;">
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <a href="/dashboard"
                                class="btn w-100 rounded-pill py-2 shadow-sm fw-bold text-white d-block text-decoration-none"
                                style="background-color: #ff8af1;">
                                Entrar
                            </a>
                        </div>
                    </form>
                    <p class="text-center text-muted mt-4 small" style="font-size: 0.8rem;">
                        &copy; SENAI - Simulado Construção
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
