
<div class="row">

<div class="span4" >
    <div class="actions well">    
    <ul class="nav nav-list">
      <li class='nav-header'><?php echo __('Ações'); ?></li>
	  
		<li><?php echo $this->Html->link(__('Editar Pessoas Contato'), array('action' => 'edit', $pessoasContato['PessoasContato']['id']), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Form->postLink(__('Excluir Pessoas Contato'), array('action' => 'delete', $pessoasContato['PessoasContato']['id']), array('class'=>'ym-button'), __('Você tem certeza que deseja excluir o # %s?', $pessoasContato['PessoasContato']['id'])); ?></li> 
		<li><?php echo $this->Html->link(__('Listar Pessoas Contatos'), array('action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Pessoas Contato'), array('action' => 'add'), array('class'=>'ym-button')); ?></li> 
<li class='nav-header'><?php echo __('Pessoas'); ?></li>		<li><?php echo $this->Html->link(__('Listar Pessoas'), array('controller' => 'pessoas', 'action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Pessoa'), array('controller' => 'pessoas', 'action' => 'add'), array('class'=>'ym-button')); ?></li> 
</ul>
   </div>
</div>



  <div class="span8" >
    <div class="pessoasContatos view ym-cbox">
      <h2><?php  echo __('Pessoas Contato');?></h2>
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
			<?php echo h($pessoasContato['PessoasContato']['id']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Pessoa'); ?></td>
			<td>
			<?php echo $this->Html->link($pessoasContato['Pessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $pessoasContato['Pessoa']['id'])); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Nome'); ?></td>
			<td>
			<?php echo h($pessoasContato['PessoasContato']['nome']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Cargo'); ?></td>
			<td>
			<?php echo h($pessoasContato['PessoasContato']['cargo']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Email'); ?></td>
			<td>
			<?php echo h($pessoasContato['PessoasContato']['email']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Fone1'); ?></td>
			<td>
			<?php echo h($pessoasContato['PessoasContato']['fone1']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Fone2'); ?></td>
			<td>
			<?php echo h($pessoasContato['PessoasContato']['fone2']); ?>
			&nbsp;
		</td>
		</tr>        </tbody>	
	</table>	
</div>




<!-- inicio -->
<!-- fim -->















</div>

</div>








