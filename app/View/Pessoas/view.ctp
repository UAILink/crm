
<div class="row">

<div class="span4" >
    <div class="actions well">    
    <ul class="nav nav-list">
      <li class='nav-header'><?php echo __('Ações'); ?></li>
	  
		<li><?php echo $this->Html->link(__('Editar Pessoa'), array('action' => 'edit', $pessoa['Pessoa']['id']), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Form->postLink(__('Excluir Pessoa'), array('action' => 'delete', $pessoa['Pessoa']['id']), array('class'=>'ym-button'), __('Você tem certeza que deseja excluir o # %s?', $pessoa['Pessoa']['id'])); ?></li> 
		<li><?php echo $this->Html->link(__('Listar Pessoas'), array('action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Pessoa'), array('action' => 'add'), array('class'=>'ym-button')); ?></li> 
<li class='nav-header'><?php echo __('Ramo Atividades'); ?></li>		<li><?php echo $this->Html->link(__('Listar Ramo Atividades'), array('controller' => 'ramo_atividades', 'action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Ramo Atividade'), array('controller' => 'ramo_atividades', 'action' => 'add'), array('class'=>'ym-button')); ?></li> 
<li class='nav-header'><?php echo __('Tipo Pessoas'); ?></li>		<li><?php echo $this->Html->link(__('Listar Tipo Pessoas'), array('controller' => 'tipo_pessoas', 'action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Tipo Pessoa'), array('controller' => 'tipo_pessoas', 'action' => 'add'), array('class'=>'ym-button')); ?></li> 
<li class='nav-header'><?php echo __('Contratos'); ?></li>		<li><?php echo $this->Html->link(__('Listar Contratos'), array('controller' => 'contratos', 'action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Contrato'), array('controller' => 'contratos', 'action' => 'add'), array('class'=>'ym-button')); ?></li> 
<li class='nav-header'><?php echo __('Pessoas Conta Correntes'); ?></li>		<li><?php echo $this->Html->link(__('Listar Pessoas Conta Correntes'), array('controller' => 'pessoas_conta_correntes', 'action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Conta Corrente'), array('controller' => 'pessoas_conta_correntes', 'action' => 'add'), array('class'=>'ym-button')); ?></li> 
<li class='nav-header'><?php echo __('Pessoas Contatos'); ?></li>		<li><?php echo $this->Html->link(__('Listar Pessoas Contatos'), array('controller' => 'pessoas_contatos', 'action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Contato'), array('controller' => 'pessoas_contatos', 'action' => 'add'), array('class'=>'ym-button')); ?></li> 
<li class='nav-header'><?php echo __('Pessoas Documentos'); ?></li>		<li><?php echo $this->Html->link(__('Listar Pessoas Documentos'), array('controller' => 'pessoas_documentos', 'action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Documento'), array('controller' => 'pessoas_documentos', 'action' => 'add'), array('class'=>'ym-button')); ?></li> 
<li class='nav-header'><?php echo __('Pessoas Enderecos'); ?></li>		<li><?php echo $this->Html->link(__('Listar Pessoas Enderecos'), array('controller' => 'pessoas_enderecos', 'action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Endereco'), array('controller' => 'pessoas_enderecos', 'action' => 'add'), array('class'=>'ym-button')); ?></li> 
<li class='nav-header'><?php echo __('Pessoas Iterações'); ?></li>		<li><?php echo $this->Html->link(__('Listar Pessoas Iterações'), array('controller' => 'pessoas_iteracoes', 'action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Iteração'), array('controller' => 'pessoas_iteracoes', 'action' => 'add'), array('class'=>'ym-button')); ?></li> 
</ul>
   </div>
</div>



  <div class="span8" >
    <div class="pessoas view ym-cbox">
      <h2><?php  echo __('Pessoa');?></h2>
      <table class="table">
	     <thead>
	        <tr>
	          <td width="20%">Campo</td>
	          <td width="80%">Descrição</td>
	        </tr>
	      </thead>
	      <tbody>
			<tr>			<td><?php echo __('Id'); ?></td>
			<td>
			<?php echo h($pessoa['Pessoa']['id']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Ramo Atividade'); ?></td>
			<td>
			<?php echo $this->Html->link($pessoa['RamoAtividade']['descricao'], array('controller' => 'ramo_atividades', 'action' => 'view', $pessoa['RamoAtividade']['id'])); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Tipo Pessoa'); ?></td>
			<td>
			<?php echo $this->Html->link($pessoa['TipoPessoa']['descricao'], array('controller' => 'tipo_pessoas', 'action' => 'view', $pessoa['TipoPessoa']['id'])); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Nome'); ?></td>
			<td>
			<?php echo h($pessoa['Pessoa']['nome']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Fone1'); ?></td>
			<td>
			<?php echo h($pessoa['Pessoa']['fone1']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Fone2'); ?></td>
			<td>
			<?php echo h($pessoa['Pessoa']['fone2']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Email'); ?></td>
			<td>
			<?php echo h($pessoa['Pessoa']['email']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Website'); ?></td>
			<td>
			<?php echo h($pessoa['Pessoa']['website']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Data Cadastro'); ?></td>
			<td>
			<?php echo h($pessoa['Pessoa']['data_cadastro']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Data Alteração'); ?></td>
			<td>
			<?php echo h($pessoa['Pessoa']['data_alteracao']); ?>
			&nbsp;
		</td>
		</tr>        </tbody>	
	</table>	
</div>




<!-- inicio -->
	
    <div class="related ym-cbox">
	<h3><?php echo __('Contratos relacionados');?></h3>
	<?php if (!empty($pessoa['Contrato'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pessoa Id'); ?></th>
		<th><?php echo __('Produto Id'); ?></th>
		<th><?php echo __('Data Contrato'); ?></th>
		<th><?php echo __('Data Vencimento'); ?></th>
		<th><?php echo __('Dia Pagamento'); ?></th>
		<th><?php echo __('Descrição'); ?></th>
		<th><?php echo __('Ativo'); ?></th>
		<th><?php echo __('Cancelado'); ?></th>
		<th><?php echo __('Data Cancelamento'); ?></th>
		<th><?php echo __('Motivo Cancelamento'); ?></th>
		<th class="actions"><?php echo __('Ações');?></th>
	</tr>
	<?php
		foreach ($pessoa['Contrato'] as $contrato): ?>
		<tr>
			<td><?php echo $contrato['id'];?></td>
			<td><?php echo $contrato['pessoa_id'];?></td>
			<td><?php echo $contrato['produto_id'];?></td>
			<td><?php echo $contrato['data_contrato'];?></td>
			<td><?php echo $contrato['data_vencimento'];?></td>
			<td><?php echo $contrato['dia_pagamento'];?></td>
			<td><?php echo $contrato['descricao'];?></td>
			<td><?php echo $contrato['ativo'];?></td>
			<td><?php echo $contrato['cancelado'];?></td>
			<td><?php echo $contrato['data_cancelamento'];?></td>
			<td><?php echo $contrato['motivo_cancelamento'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'contratos', 'action' => 'view', $contrato['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'contratos', 'action' => 'edit', $contrato['id'])); ?>
				<?php echo $this->Form->postLink(__('Excluir'), array('controller' => 'contratos', 'action' => 'delete', $contrato['id']), null, __('Você tem certeza que deseja excluir o # %s?', $contrato['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	
	<?php echo $this->Html->link(__('Novo Contrato'), array('controller' => 'contratos', 'action' => 'add'), array('class'=>'ym-button'));?> 
	
	<?php endif; ?>

	
	</div>
	
	

	
    <div class="related ym-cbox">
	<h3><?php echo __('Pessoas Conta Correntes relacionados');?></h3>
	<?php if (!empty($pessoa['ContaCorrente'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pessoa Id'); ?></th>
		<th><?php echo __('Descrição'); ?></th>
		<th><?php echo __('Banco'); ?></th>
		<th><?php echo __('Agencia'); ?></th>
		<th><?php echo __('Numero'); ?></th>
		<th class="actions"><?php echo __('Ações');?></th>
	</tr>
	<?php
		foreach ($pessoa['ContaCorrente'] as $contaCorrente): ?>
		<tr>
			<td><?php echo $contaCorrente['id'];?></td>
			<td><?php echo $contaCorrente['pessoa_id'];?></td>
			<td><?php echo $contaCorrente['descricao'];?></td>
			<td><?php echo $contaCorrente['banco'];?></td>
			<td><?php echo $contaCorrente['agencia'];?></td>
			<td><?php echo $contaCorrente['numero'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'pessoas_conta_correntes', 'action' => 'view', $contaCorrente['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'pessoas_conta_correntes', 'action' => 'edit', $contaCorrente['id'])); ?>
				<?php echo $this->Form->postLink(__('Excluir'), array('controller' => 'pessoas_conta_correntes', 'action' => 'delete', $contaCorrente['id']), null, __('Você tem certeza que deseja excluir o # %s?', $contaCorrente['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	
	<?php echo $this->Html->link(__('Novo Conta Corrente'), array('controller' => 'pessoas_conta_correntes', 'action' => 'add'), array('class'=>'ym-button'));?> 
	
	<?php endif; ?>

	
	</div>
	
	

	
    <div class="related ym-cbox">
	<h3><?php echo __('Pessoas Contatos relacionados');?></h3>
	<?php if (!empty($pessoa['Contato'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pessoa Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Cargo'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Fone1'); ?></th>
		<th><?php echo __('Fone2'); ?></th>
		<th class="actions"><?php echo __('Ações');?></th>
	</tr>
	<?php
		foreach ($pessoa['Contato'] as $contato): ?>
		<tr>
			<td><?php echo $contato['id'];?></td>
			<td><?php echo $contato['pessoa_id'];?></td>
			<td><?php echo $contato['nome'];?></td>
			<td><?php echo $contato['cargo'];?></td>
			<td><?php echo $contato['email'];?></td>
			<td><?php echo $contato['fone1'];?></td>
			<td><?php echo $contato['fone2'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'pessoas_contatos', 'action' => 'view', $contato['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'pessoas_contatos', 'action' => 'edit', $contato['id'])); ?>
				<?php echo $this->Form->postLink(__('Excluir'), array('controller' => 'pessoas_contatos', 'action' => 'delete', $contato['id']), null, __('Você tem certeza que deseja excluir o # %s?', $contato['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	
	<?php echo $this->Html->link(__('Novo Contato'), array('controller' => 'pessoas_contatos', 'action' => 'add'), array('class'=>'ym-button'));?> 
	
	<?php endif; ?>

	
	</div>
	
	

	
    <div class="related ym-cbox">
	<h3><?php echo __('Pessoas Documentos relacionados');?></h3>
	<?php if (!empty($pessoa['Documento'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Numero'); ?></th>
		<th><?php echo __('Tipo Documento Id'); ?></th>
		<th><?php echo __('Pessoa Id'); ?></th>
		<th class="actions"><?php echo __('Ações');?></th>
	</tr>
	<?php
		foreach ($pessoa['Documento'] as $documento): ?>
		<tr>
			<td><?php echo $documento['id'];?></td>
			<td><?php echo $documento['numero'];?></td>
			<td><?php echo $documento['tipo_documento_id'];?></td>
			<td><?php echo $documento['pessoa_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'pessoas_documentos', 'action' => 'view', $documento['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'pessoas_documentos', 'action' => 'edit', $documento['id'])); ?>
				<?php echo $this->Form->postLink(__('Excluir'), array('controller' => 'pessoas_documentos', 'action' => 'delete', $documento['id']), null, __('Você tem certeza que deseja excluir o # %s?', $documento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	
	<?php echo $this->Html->link(__('Novo Documento'), array('controller' => 'pessoas_documentos', 'action' => 'add'), array('class'=>'ym-button'));?> 
	
	<?php endif; ?>

	
	</div>
	
	

	
    <div class="related ym-cbox">
	<h3><?php echo __('Pessoas Enderecos relacionados');?></h3>
	<?php if (!empty($pessoa['Endereco'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pessoa Id'); ?></th>
		<th><?php echo __('Logradouro'); ?></th>
		<th><?php echo __('Numero'); ?></th>
		<th><?php echo __('Complemento'); ?></th>
		<th><?php echo __('Cep'); ?></th>
		<th><?php echo __('Bairro'); ?></th>
		<th><?php echo __('Cidade'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th class="actions"><?php echo __('Ações');?></th>
	</tr>
	<?php
		foreach ($pessoa['Endereco'] as $endereco): ?>
		<tr>
			<td><?php echo $endereco['id'];?></td>
			<td><?php echo $endereco['pessoa_id'];?></td>
			<td><?php echo $endereco['logradouro'];?></td>
			<td><?php echo $endereco['numero'];?></td>
			<td><?php echo $endereco['complemento'];?></td>
			<td><?php echo $endereco['cep'];?></td>
			<td><?php echo $endereco['bairro'];?></td>
			<td><?php echo $endereco['cidade'];?></td>
			<td><?php echo $endereco['estado'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'pessoas_enderecos', 'action' => 'view', $endereco['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'pessoas_enderecos', 'action' => 'edit', $endereco['id'])); ?>
				<?php echo $this->Form->postLink(__('Excluir'), array('controller' => 'pessoas_enderecos', 'action' => 'delete', $endereco['id']), null, __('Você tem certeza que deseja excluir o # %s?', $endereco['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	
	<?php echo $this->Html->link(__('Novo Endereco'), array('controller' => 'pessoas_enderecos', 'action' => 'add'), array('class'=>'ym-button'));?> 
	
	<?php endif; ?>

	
	</div>
	
	

	
    <div class="related ym-cbox">
	<h3><?php echo __('Pessoas Iterações relacionados');?></h3>
	<?php if (!empty($pessoa['Iteracao'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pessoa Id'); ?></th>
		<th><?php echo __('Descrição Iteração'); ?></th>
		<th><?php echo __('Motivo'); ?></th>
		<th class="actions"><?php echo __('Ações');?></th>
	</tr>
	<?php
		foreach ($pessoa['Iteracao'] as $iteracao): ?>
		<tr>
			<td><?php echo $iteracao['id'];?></td>
			<td><?php echo $iteracao['pessoa_id'];?></td>
			<td><?php echo $iteracao['descricao_iteracao'];?></td>
			<td><?php echo $iteracao['motivo'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'pessoas_iteracoes', 'action' => 'view', $iteracao['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'pessoas_iteracoes', 'action' => 'edit', $iteracao['id'])); ?>
				<?php echo $this->Form->postLink(__('Excluir'), array('controller' => 'pessoas_iteracoes', 'action' => 'delete', $iteracao['id']), null, __('Você tem certeza que deseja excluir o # %s?', $iteracao['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	
	<?php echo $this->Html->link(__('Novo Iteração'), array('controller' => 'pessoas_iteracoes', 'action' => 'add'), array('class'=>'ym-button'));?> 
	
	<?php endif; ?>

	
	</div>
	
	

<!-- fim -->















</div>

</div>








