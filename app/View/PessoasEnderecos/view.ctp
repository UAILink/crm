
<div class="row">

<div class="span4" >
    <div class="actions well">    
    <ul class="nav nav-list">
      <li class='nav-header'><?php echo __('Ações'); ?></li>
	  
		<li><?php echo $this->Html->link(__('Editar Pessoas Endereco'), array('action' => 'edit', $pessoasEndereco['PessoasEndereco']['id']), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Form->postLink(__('Excluir Pessoas Endereco'), array('action' => 'delete', $pessoasEndereco['PessoasEndereco']['id']), array('class'=>'ym-button'), __('Você tem certeza que deseja excluir o # %s?', $pessoasEndereco['PessoasEndereco']['id'])); ?></li> 
		<li><?php echo $this->Html->link(__('Listar Pessoas Enderecos'), array('action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Pessoas Endereco'), array('action' => 'add'), array('class'=>'ym-button')); ?></li> 
<li class='nav-header'><?php echo __('Pessoas'); ?></li>		<li><?php echo $this->Html->link(__('Listar Pessoas'), array('controller' => 'pessoas', 'action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Pessoa'), array('controller' => 'pessoas', 'action' => 'add'), array('class'=>'ym-button')); ?></li> 
</ul>
   </div>
</div>



  <div class="span8" >
    <div class="pessoasEnderecos view ym-cbox">
      <h2><?php  echo __('Pessoas Endereco');?></h2>
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
			<?php echo h($pessoasEndereco['PessoasEndereco']['id']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Pessoa'); ?></td>
			<td>
			<?php echo $this->Html->link($pessoasEndereco['Pessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $pessoasEndereco['Pessoa']['id'])); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Logradouro'); ?></td>
			<td>
			<?php echo h($pessoasEndereco['PessoasEndereco']['logradouro']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Numero'); ?></td>
			<td>
			<?php echo h($pessoasEndereco['PessoasEndereco']['numero']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Complemento'); ?></td>
			<td>
			<?php echo h($pessoasEndereco['PessoasEndereco']['complemento']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Cep'); ?></td>
			<td>
			<?php echo h($pessoasEndereco['PessoasEndereco']['cep']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Bairro'); ?></td>
			<td>
			<?php echo h($pessoasEndereco['PessoasEndereco']['bairro']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Cidade'); ?></td>
			<td>
			<?php echo h($pessoasEndereco['PessoasEndereco']['cidade']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Estado'); ?></td>
			<td>
			<?php echo h($pessoasEndereco['PessoasEndereco']['estado']); ?>
			&nbsp;
		</td>
		</tr>        </tbody>	
	</table>	
</div>




<!-- inicio -->
<!-- fim -->















</div>

</div>








