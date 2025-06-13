<div class="card">
    <div class="card-body">
        <h2 class="card-title">{{ $isEditing ? 'Editar Paciente' : 'Cadastro de Pacientes' }}</h2>

        @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <form wire:submit.prevent="savePaciente">
            <div class="mb-3">
                <label for="name" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="name" wire:model="name">
                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefone" wire:model="telefone"
                    x-mask="(99) 99999-9999">
                @error('telefone') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" wire:model="email">
                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label for="cep" class="form-label">CEP</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="cep" wire:model="cep" x-mask="99999-999">
                    <button class="btn btn-outline-secondary" type="button" wire:click="buscarCep">Buscar</button>
                </div>
                @error('cep') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" wire:model="cpf" name="cpf" class="form-control" id="cpf">
                @error('cpf') <span class="text text-danger">{{$message}}</span> @enderror
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                @if($isEditing)
                <button type="button" wire:click="resetForm" class="btn btn-secondary me-md-2">
                    Cancelar
                </button>
                @endif
                <button type="submit" class="btn btn-primary">
                    {{ $isEditing ? 'Atualizar' : 'Cadastrar' }}
                </button>
            </div>
        </form>
    </div>
</div>
