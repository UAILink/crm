<div class="row-fluid">
    <div class="span4">
        <div class="actions well">
        
	        <ul class="nav nav-list">
	        
	        	<li class='nav-header'><?php echo __('Ações'); ?></li>
        
		        <li><?php echo $this->Html->link(__('Novo Contrato'), array('action' => 'add')); ?></li>        <li class='nav-header'><?php echo __('Pessoas'); ?></li>		<li><?php echo $this->Html->link(__('Listar Pessoas'), array('controller' => 'pessoas', 'action' => 'index')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Pessoa'), array('controller' => 'pessoas', 'action' => 'add')); ?></li> 
<li class='nav-header'><?php echo __('Produtos'); ?></li>		<li><?php echo $this->Html->link(__('Listar Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Produto'), array('controller' => 'produtos', 'action' => 'add')); ?></li> 
        
        	</ul>
	        
        </div>
    </div>
    <div class="span8" >
        <div class="contratos index">
	        <h2><?php echo __('Contratos');?></h2>
	        <table class="table table-striped">
	        <tr>
	        		        <th><?php echo $this->Paginator->sort('id');?></th>
	        		        <th><?php echo $this->Paginator->sort('pessoa_id');?></th>
	        		        <th><?php echo $this->Paginator->sort('produto_id');?></th>
	        		        <th><?php echo $this->Paginator->sort('data_contrato');?></th>
	        		        <th><?php echo $this->Paginator->sort('data_vencimento');?></th>
	        		        <th><?php echo $this->Paginator->sort('dia_pagamento');?></th>
	        		        <th><?php echo $this->Paginator->sort('descricao');?></th>
	        		        <th><?php echo $this->Paginator->sort('ativo');?></th>
	        		        <th><?php echo $this->Paginator->sort('cancelado');?></th>
	        		        <th><?php echo $this->Paginator->sort('data_cancelamento');?></th>
	        		        <th><?php echo $this->Paginator->sort('motivo_cancelamento');?></th>
	        		        <th class="actions"><?php echo __('Ações');?></th>
	        </tr>
	        <?php foreach ($contratos as $contrato): ?>
	<tr>
		<td><?php echo h($contrato['Contrato']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($contrato['Pessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $contrato['Pessoa']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($contrato['Produto']['descricao'], array('controller' => 'produtos', 'action' => 'view', $contrato['Produto']['id'])); ?>
		</td>
		<td><?php echo h($contrato['Contrato']['data_contrato']); ?>&nbsp;</td>
		<td><?php echo h($contrato['Contrato']['data_vencimento']); ?>&nbsp;</td>
		<td><?php echo h($contrato['Contrato']['dia_pagamento']); ?>&nbsp;</td>
		<td><?php echo h($contrato['Contrato']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($contrato['Contrato']['ativo']); ?>&nbsp;</td>
		<td><?php echo h($contrato['Contrato']['cancelado']); ?>&nbsp;</td>
		<td><?php echo h($contrato['Contrato']['data_cancelamento']); ?>&nbsp;</td>
		<td><?php echo h($contrato['Contrato']['motivo_cancelamento']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $contrato['Contrato']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $contrato['Contrato']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $contrato['Contrato']['id']), null, __('Você tem certeza que deseja excluir o # %s?', $contrato['Contrato']['id'])); ?>
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
