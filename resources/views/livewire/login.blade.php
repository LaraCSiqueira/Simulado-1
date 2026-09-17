<div style="background-color: rgb(245, 245, 246); min-height: 100vh;"
    class="d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-center mb-2" style="color: #c963f1;"><strong>BEM-VINDO DE VOLTA!</strong></h1>
            <h3 class="text-center mb-4" style="color: #dc92fa;"><strong>Insira seus dados para acessar nosso
                    site.</strong></h3>
            <div class="card shadow-lg border-0 p-4 bg-white rounded-4" style="max-width: 400px;">
                <div class="card-body d-flex flex-column align-items-center">

                    <i class="bi bi-person-check-fill" style="font-size: 5rem; color: rgb(245, 245, 246)"></i>
                    <h1 class="text-center mb-4" style="color: #4a4a4a;"><strong>LOGIN</strong></h1>

                    @if (session()->has('Error'))
                        <div class="alert alert-danger">{{ session('Error') }}</div>
                    @endif

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">💻</span>
                        <input type="text" class="form-control" placeholder="Digite seu email" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">🗝</span>
                        <input type="text" class="form-control" placeholder="Insira sua senha" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark btn-lg shadow-sm">ENTRAR</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
