 <div class="main-content">


     <div>
         <h2 class="card-title">Meus Dados</h2>
         <p>Mantenha seus dados atualizados para melhor atendimento. Após preencher, você pode gerar um PDF com todas as informações.</p>
         <form id="patient-form">
             <div class="form-group">
                 <label for="patient-name">Nome Completo</label>
                 <input type="text" id="patient-name" class="form-control" required>
             </div>
             <div class="form-group">
                 <label for="patient-cpf">CPF</label>
                 <input type="text" id="patient-cpf" class="form-control" readonly>
             </div>
             <div class="form-group">
                 <label for="patient-birthdate">Data de Nascimento</label>
                 <input type="date" id="patient-birthdate" class="form-control" required>
             </div>
             <div class="form-group">
                 <label for="patient-gender">Sexo</label>
                 <select id="patient-gender" class="form-control" required>
                     <option value="">Selecione</option>
                     <option value="M">Masculino</option>
                     <option value="F">Feminino</option>
                     <option value="O">Outro</option>
                 </select>
             </div>
             <div class="form-group">
                 <label for="patient-phone">Telefone/Celular</label>
                 <input type="tel" id="patient-phone" class="form-control" required>
             </div>
             <div class="form-group">
                 <label for="patient-email">E-mail</label>
                 <input type="email" id="patient-email" class="form-control" required>
             </div>
             <h3 style="margin: 1.5rem 0 1rem; color: var(--primary-color);">Endereço</h3>
             <div class="form-group">
                 <label for="patient-cep">CEP</label>
                 <input type="text" id="patient-cep" class="form-control">
             </div>
             <div class="form-group">
                 <label for="patient-address">Endereço</label>
                 <input type="text" id="patient-address" class="form-control">
             </div>
             <div class="form-group">
                 <label for="patient-number">Número</label>
                 <input type="text" id="patient-number" class="form-control">
             </div>
             <div class="form-group">
                 <label for="patient-complement">Complemento</label>
                 <input type="text" id="patient-complement" class="form-control">
             </div>
             <div class="form-group">
                 <label for="patient-neighborhood">Bairro</label>
                 <input type="text" id="patient-neighborhood" class="form-control">
             </div>
             <div class="form-group">
                 <label for="patient-city">Cidade</label>
                 <input type="text" id="patient-city" class="form-control">
             </div>
             <div class="form-group">
                 <label for="patient-state">Estado</label>
                 <input type="text" id="patient-state" class="form-control">
             </div>
             <h3 style="margin: 1.5rem 0 1rem; color: var(--primary-color);">Informações de Saúde</h3>
             <div class="form-group">
                 <label for="patient-bloodtype">Tipo Sanguíneo</label>
                 <select id="patient-bloodtype" class="form-control">
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
             </div>
             <div class="form-group">
                 <label for="patient-allergies">Alergias</label>
                 <textarea id="patient-allergies" class="form-control" rows="3" placeholder="Liste suas alergias, separadas por vírgula"></textarea>
             </div>
             <div class="form-group">
                 <label for="patient-medications">Medicações em Uso</label>
                 <textarea id="patient-medications" class="form-control" rows="3" placeholder="Liste medicações que usa regularmente"></textarea>
             </div>
             <div class="form-group">
                 <label for="patient-conditions">Condições Médicas</label>
                 <textarea id="patient-conditions" class="form-control" rows="3" placeholder="Descreva condições médicas conhecidas"></textarea>
             </div>
             <div style="display: flex; gap: 1rem; margin-top: 1.5rem;">
                 <button type="submit" class="btn btn-primary">Salvar Dados</button>
                 <button type="button" class="btn btn-success" onclick="generatePatientPDF()">Gerar PDF</button>
                 <button type="button" class="btn btn-secondary" onclick="sendPatientDataViaWhatsApp()">Enviar por WhatsApp</button>
             </div>
         </form>
     </div>
 </div>
