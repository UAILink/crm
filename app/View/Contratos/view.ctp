
<div class="row">

<div class="span4" >
    <div class="actions well">    
    <ul class="nav nav-list">
      <li class='nav-header'><?php echo __('Ações'); ?></li>
	  
		<li><?php echo $this->Html->link(__('Editar Contrato'), array('action' => 'edit', $contrato['Contrato']['id']), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Form->postLink(__('Excluir Contrato'), array('action' => 'delete', $contrato['Contrato']['id']), array('class'=>'ym-button'), __('Você tem certeza que deseja excluir o # %s?', $contrato['Contrato']['id'])); ?></li> 
		<li><?php echo $this->Html->link(__('Listar Contratos'), array('action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Contrato'), array('action' => 'add'), array('class'=>'ym-button')); ?></li> 
<li class='nav-header'><?php echo __('Pessoas'); ?></li>		<li><?php echo $this->Html->link(__('Listar Pessoas'), array('controller' => 'pessoas', 'action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Pessoa'), array('controller' => 'pessoas', 'action' => 'add'), array('class'=>'ym-button')); ?></li> 
<li class='nav-header'><?php echo __('Produtos'); ?></li>		<li><?php echo $this->Html->link(__('Listar Produtos'), array('controller' => 'produtos', 'action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Produto'), array('controller' => 'produtos', 'action' => 'add'), array('class'=>'ym-button')); ?></li> 
</ul>
   </div>
</div>



  <div class="span8" >
    <div class="contratos view ym-cbox">
      <h2><?php  echo __('Contrato');?></h2>
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
			<?php echo h($contrato['Contrato']['id']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Pessoa'); ?></td>
			<td>
			<?php echo $this->Html->link($contrato['Pessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $contrato['Pessoa']['id'])); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Produto'); ?></td>
			<td>
			<?php echo $this->Html->link($contrato['Produto']['descricao'], array('controller' => 'produtos', 'action' => 'view', $contrato['Produto']['id'])); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Data Contrato'); ?></td>
			<td>
			<?php echo h($contrato['Contrato']['data_contrato']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Data Vencimento'); ?></td>
			<td>
			<?php echo h($contrato['Contrato']['data_vencimento']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Dia Pagamento'); ?></td>
			<td>
			<?php echo h($contrato['Contrato']['dia_pagamento']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Descrição'); ?></td>
			<td>
			<?php echo h($contrato['Contrato']['descricao']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Ativo'); ?></td>
			<td>
			<?php echo h($contrato['Contrato']['ativo']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Cancelado'); ?></td>
			<td>
			<?php echo h($contrato['Contrato']['cancelado']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Data Cancelamento'); ?></td>
			<td>
			<?php echo h($contrato['Contrato']['data_cancelamento']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Motivo Cancelamento'); ?></td>
			<td>
			<?php echo h($contrato['Contrato']['motivo_cancelamento']); ?>
			&nbsp;
		</td>
		</tr>        </tbody>	
	</table>	
</div>




<!-- inicio -->
<!-- fim -->















</div>

</div>








