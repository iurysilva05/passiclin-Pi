


<div class="login-tela">




        <div class="login-container">
            <div class="login-card">
                <div class="login-body">


                    <div class="login-logo">
                        <i class="fas fa-heartbeat"></i> PASSICLIN
                    </div>

                    <h2 class="login-title text-center mb-4">Acesse sua conta</h2>



                  
                    <form wire:submit="login">
                        @csrf

                        <div class="form-group">
                            <label for="cpf" class="form-label">CPF</label>
                            <input type="cpf" wire:model="cpf" name="cpf" class="form-control @error('cpf') is-invalid @enderror" id="cpf" autofocus>
                            @error('cpf') <span class="error-text">{{$message}}</span>@enderror
                        </div>

                        <br>

                        <div class="form-group">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" wire:model="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
                            @error('password') <span class="error-text">{{$message}}</span>@enderror
                        </div>

                        <div class="error-session">
                            @if(session()->has('error'))
                            <span class="error-text">{{session()->get('error')}}</span>
                            @endif
                        </div>

                        <div class="btn-block">
                            <button type="submit" class="btn-primary">Entrar</button>
                        </div>
                        <div class="btn-block">
                            <a class="btn-success" href="{{route('cadastro')}}">Cadastre-se</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>






</div>
