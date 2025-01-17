<?php
<app-header />
<form [formGroup]="cadastroForm" (ngSubmit)="onSubmit()">


  <label for="nome">Nome:</label>
  <input id="nome" type="text" formControlName="nome" />
  <div *ngIf="cadastroForm.get('nome')?.invalid && cadastroForm.get('nome')?.touched">
    Nome é obrigatório e deve ter pelo menos 3 caracteres.
  </div>

  <label for="cpf">CPF:</label>
  <input id="cpf" type="text" formControlName="cpf" />
  <div *ngIf="cadastroForm.get('cpf')?.invalid && cadastroForm.get('cpf')?.touched">
    CPF inválido.
  </div>

  <label for="email">e-mail:</label>
  <input id="email" type="text" formControlName="email" />
  <div *ngIf="cadastroForm.get('cpf')?.invalid && cadastroForm.get('email')?.touched">
    e-mail inválido.
  </div>

  <label for="registro">Registro Profissional:</label>
  <input id="registro" type="text" formControlName="registro" />
  <div *ngIf="cadastroForm.get('registro')?.invalid && cadastroForm.get('registro')?.touched">
    Registro inválido.
  </div>

  <label for="endereco">Endereço:</label>
  <input id="endereco" type="text" formControlName="endereco" />
  <div *ngIf="cadastroForm.get('endereco')?.invalid && cadastroForm.get('endereco')?.touched">
    Endereço é obrigatório.
  </div>

  <label for="telefone">Telefone:</label>
  <input id="telefone" type="text" formControlName="telefone" />
  <div *ngIf="cadastroForm.get('telefone')?.invalid && cadastroForm.get('telefone')?.touched">
    Telefone inválido.
  </div>

  <label for="profissao">Profissão:</label>
  <input id="profissao" type="text" formControlName="profissao" />

  <label for="especialidade">Especialidade:</label>
  <input id="especialidade" type="text" formControlName="especialidade" />

  <label for="senha">Senha:</label>
  <input id="password" type="text" formControlName="password" />
  <div *ngIf="cadastroForm.get('password')?.invalid && cadastroForm.get('password')?.touched">
    CPF inválido.
  </div>

  <label for="comentarios">Comentários:</label>
  <textarea id="comentarios" formControlName="comentarios"></textarea>

  <button type="submit" [disabled]="cadastroForm.invalid">Enviar</button>
</form>

<app-footer />
/?>