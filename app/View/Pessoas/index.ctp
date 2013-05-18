<div class="row-fluid">
    <div class="span4">
        <div class="actions well">
        
	        <ul class="nav nav-list">
	        
	        	<li class='nav-header'><?php echo __('Ações'); ?></li>
        
		        <li><?php echo $this->Html->link(__('Novo Pessoa'), array('action' => 'add')); ?></li>        <li class='nav-header'><?php echo __('Ramo Atividades'); ?></li>		<li><?php echo $this->Html->link(__('Listar Ramo Atividades'), array('controller' => 'ramo_atividades', 'action' => 'index')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Ramo Atividade'), array('controller' => 'ramo_atividades', 'action' => 'add')); ?></li> 
<li class='nav-header'><?php echo __('Tipo Pessoas'); ?></li>		<li><?php echo $this->Html->link(__('Listar Tipo Pessoas'), array('controller' => 'tipo_pessoas', 'action' => 'index')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Tipo Pessoa'), array('controller' => 'tipo_pessoas', 'action' => 'add')); ?></li> 
<li class='nav-header'><?php echo __('Contratos'); ?></li>		<li><?php echo $this->Html->link(__('Listar Contratos'), array('controller' => 'contratos', 'action' => 'index')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Contrato'), array('controller' => 'contratos', 'action' => 'add')); ?></li> 
<li class='nav-header'><?php echo __('Pessoas Conta Correntes'); ?></li>		<li><?php echo $this->Html->link(__('Listar Pessoas Conta Correntes'), array('controller' => 'pessoas_conta_correntes', 'action' => 'index')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Conta Corrente'), array('controller' => 'pessoas_conta_correntes', 'action' => 'add')); ?></li> 
<li class='nav-header'><?php echo __('Pessoas Contatos'); ?></li>		<li><?php echo $this->Html->link(__('Listar Pessoas Contatos'), array('controller' => 'pessoas_contatos', 'action' => 'index')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Contato'), array('controller' => 'pessoas_contatos', 'action' => 'add')); ?></li> 
<li class='nav-header'><?php echo __('Pessoas Documentos'); ?></li>		<li><?php echo $this->Html->link(__('Listar Pessoas Documentos'), array('controller' => 'pessoas_documentos', 'action' => 'index')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Documento'), array('controller' => 'pessoas_documentos', 'action' => 'add')); ?></li> 
<li class='nav-header'><?php echo __('Pessoas Enderecos'); ?></li>		<li><?php echo $this->Html->link(__('Listar Pessoas Enderecos'), array('controller' => 'pessoas_enderecos', 'action' => 'index')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Endereco'), array('controller' => 'pessoas_enderecos', 'action' => 'add')); ?></li> 
<li class='nav-header'><?php echo __('Pessoas Iterações'); ?></li>		<li><?php echo $this->Html->link(__('Listar Pessoas Iterações'), array('controller' => 'pessoas_iteracoes', 'action' => 'index')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Iteração'), array('controller' => 'pessoas_iteracoes', 'action' => 'add')); ?></li> 
        
        	</ul>
	        
        </div>
    </div>
    <div class="span8" >
        <div class="pessoas index">
	        <h2><?php echo __('Pessoas');?></h2>
	        <table class="table table-striped">
	        <tr>
	        		        <th><?php echo $this->Paginator->sort('id');?></th>
	        		        <th><?php echo $this->Paginator->sort('ramo_atividade_id');?></th>
	        		        <th><?php echo $this->Paginator->sort('tipo_pessoa_id');?></th>
	        		        <th><?php echo $this->Paginator->sort('nome');?></th>
	        		        <th><?php echo $this->Paginator->sort('fone1');?></th>
	        		        <th><?php echo $this->Paginator->sort('fone2');?></th>
	        		        <th><?php echo $this->Paginator->sort('email');?></th>
	        		        <th><?php echo $this->Paginator->sort('website');?></th>
	        		        <th><?php echo $this->Paginator->sort('data_cadastro');?></th>
	        		        <th><?php echo $this->Paginator->sort('data_alteracao');?></th>
	        		        <th class="actions"><?php echo __('Ações');?></th>
	        </tr>
	        <?php foreach ($pessoas as $pessoa): ?>
	<tr>
		<td><?php echo h($pessoa['Pessoa']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pessoa['RamoAtividade']['descricao'], array('controller' => 'ramo_atividades', 'action' => 'view', $pessoa['RamoAtividade']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pessoa['TipoPessoa']['descricao'], array('controller' => 'tipo_pessoas', 'action' => 'view', $pessoa['TipoPessoa']['id'])); ?>
		</td>
		<td><?php echo h($pessoa['Pessoa']['nome']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['fone1']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['fone2']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['email']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['website']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['data_cadastro']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['data_alteracao']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $pessoa['Pessoa']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $pessoa['Pessoa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $pessoa['Pessoa']['id']), null, __('Você tem certeza que deseja excluir o # %s?', $pessoa['Pessoa']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	        </table>
	        <p>
	        <?php
	        echo $this->Paginator->counter(array(
	        'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count}, começando no registro {:start}, e terminando no {:end}')
	        ));
	        ?>	        </p>

	        <div class="paging">
	        <?php
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('próxima') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	        </div>
        </div>
    </div>
    
</div>
