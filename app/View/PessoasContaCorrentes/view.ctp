
<div class="row">

<div class="span4" >
    <div class="actions well">    
    <ul class="nav nav-list">
      <li class='nav-header'><?php echo __('Ações'); ?></li>
	  
		<li><?php echo $this->Html->link(__('Editar Pessoas Conta Corrente'), array('action' => 'edit', $pessoasContaCorrente['PessoasContaCorrente']['id']), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Form->postLink(__('Excluir Pessoas Conta Corrente'), array('action' => 'delete', $pessoasContaCorrente['PessoasContaCorrente']['id']), array('class'=>'ym-button'), __('Você tem certeza que deseja excluir o # %s?', $pessoasContaCorrente['PessoasContaCorrente']['id'])); ?></li> 
		<li><?php echo $this->Html->link(__('Listar Pessoas Conta Correntes'), array('action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Pessoas Conta Corrente'), array('action' => 'add'), array('class'=>'ym-button')); ?></li> 
<li class='nav-header'><?php echo __('Pessoas'); ?></li>		<li><?php echo $this->Html->link(__('Listar Pessoas'), array('controller' => 'pessoas', 'action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Pessoa'), array('controller' => 'pessoas', 'action' => 'add'), array('class'=>'ym-button')); ?></li> 
</ul>
   </div>
</div>



  <div class="span8" >
    <div class="pessoasContaCorrentes view ym-cbox">
      <h2><?php  echo __('Pessoas Conta Corrente');?></h2>
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
			<?php echo h($pessoasContaCorrente['PessoasContaCorrente']['id']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Pessoa'); ?></td>
			<td>
			<?php echo $this->Html->link($pessoasContaCorrente['Pessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $pessoasContaCorrente['Pessoa']['id'])); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Descrição'); ?></td>
			<td>
			<?php echo h($pessoasContaCorrente['PessoasContaCorrente']['descricao']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Banco'); ?></td>
			<td>
			<?php echo h($pessoasContaCorrente['PessoasContaCorrente']['banco']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Agencia'); ?></td>
			<td>
			<?php echo h($pessoasContaCorrente['PessoasContaCorrente']['agencia']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Numero'); ?></td>
			<td>
			<?php echo h($pessoasContaCorrente['PessoasContaCorrente']['numero']); ?>
			&nbsp;
		</td>
		</tr>        </tbody>	
	</table>	
</div>




<!-- inicio -->
<!-- fim -->















</div>

</div>








