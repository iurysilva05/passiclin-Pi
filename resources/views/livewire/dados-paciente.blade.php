<div>
    
    <div class="main-content">
        @if (session('success'))
            <div x-data="{ show: true }"
                 x-show="show"
                 x-init="setTimeout(() => show = false, 5000)"
                 class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
    
        @if (session('info'))
            <div x-data="{ show: true }"
                 x-show="show"
                 x-init="setTimeout(() => show = false, 5000)"
                 class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded mb-4">
                {{ session('info') }}
            </div>
        @endif
        <div>
            <h2 class="card-title">Meus Dados</h2>
            <p>Mantenha seus dados atualizados para melhor atendimento. Após preencher, você pode gerar um PDF com todas as informações.</p>

            <form wire:submit.prevent="savePaciente" id="patient-form">
                <!-- Dados Pessoais -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <div class="form-group">
                        <label for="patient-name">Nome Completo</label>
                        <input type="text" id="patient-name" wire:model="name" class="form-control" required>
                        @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="patient-cpf">CPF</label>
                        <input type="text" id="patient-cpf" wire:model="cpf" x-mask="999.999.999-99" class="form-control">
                        @error('cpf') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="patient-birthdate">Data de Nascimento</label>
                        <input type="date" id="patient-birthdate" wire:model="data_nascimento" class="form-control">
                        @error('data_nascimento') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="patient-gender">Sexo</label>
                        <select id="patient-gender" wire:model="sexo" class="form-control">
                            <option value="">Selecione</option>
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                            <option value="O">Outro</option>
                        </select>
                        @error('sexo') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="patient-phone">Telefone/Celular</label>
                        <input type="tel" id="patient-phone" wire:model="telefone" x-mask="(99) 99999-9999" class="form-control" required>
                        @error('telefone') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="patient-email">E-mail</label>
                        <input type="email" id="patient-email" wire:model="email" class="form-control" required>
                        @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- Endereço -->
                <h3 style="margin: 1.5rem 0 1rem; color: var(--primary-color);">Endereço</h3>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                    <div class="form-group">
                        <label for="patient-cep">CEP</label>
                        <input type="text" id="patient-cep" wire:model="cep" x-mask="99999-999" class="form-control">
                        @error('cep') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group md:col-span-2">
                        <label for="patient-address">Endereço</label>
                        <input type="text" id="patient-address" wire:model="endereco" class="form-control">
                        @error('endereco') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="patient-number">Número</label>
                        <input type="text" id="patient-number" wire:model="numero" class="form-control">
                        @error('numero') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="patient-complement">Complemento</label>
                        <input type="text" id="patient-complement" wire:model="complemento" class="form-control">
                        @error('complemento') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="patient-neighborhood">Bairro</label>
                        <input type="text" id="patient-neighborhood" wire:model="bairro" class="form-control">
                        @error('bairro') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="patient-city">Cidade</label>
                        <input type="text" id="patient-city" wire:model="cidade" class="form-control">
                        @error('cidade') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="patient-state">Estado</label>
                        <input type="text" id="patient-state" wire:model="estado" class="form-control">
                        @error('estado') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- Informações de Saúde -->
                <h3 style="margin: 1.5rem 0 1rem; color: var(--primary-color);">Informações de Saúde</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <div class="form-group">
                        <label for="patient-bloodtype">Tipo Sanguíneo</label>
                        <select id="patient-bloodtype" wire:model="tipo_sanguineo" class="form-control">
                            <option value="">Selecione</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                        @error('tipo_sanguineo') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="patient-allergies">Alergias</label>
                        <textarea id="patient-allergies" wire:model="alergias" class="form-control" rows="3" placeholder="Liste suas alergias, separadas por vírgula"></textarea>
                        @error('alergias') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="patient-medications">Medicações em Uso</label>
                        <textarea id="patient-medications" wire:model="medicacoes" class="form-control" rows="3" placeholder="Liste medicações que usa regularmente"></textarea>
                        @error('medicacoes') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="patient-conditions">Condições Médicas</label>
                        <textarea id="patient-conditions" wire:model="condicoes_medicas" class="form-control" rows="3" placeholder="Descreva condições médicas conhecidas"></textarea>
                        @error('condicoes_medicas') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div style="display: flex; gap: 1rem; margin-top: 1.5rem;">
                    <button type="submit" class="btn btn-primary">Salvar Dados</button>
                    
                    
                </div>
            </form>
        </div>
    </div>
</div>
