
<div class="row">

<div class="span4" >
    <div class="actions well">    
    <ul class="nav nav-list">
      <li class='nav-header'><?php echo __('Ações'); ?></li>
	  
		<li><?php echo $this->Html->link(__('Editar Tipo Pessoa'), array('action' => 'edit', $tipoPessoa['TipoPessoa']['id']), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Form->postLink(__('Excluir Tipo Pessoa'), array('action' => 'delete', $tipoPessoa['TipoPessoa']['id']), array('class'=>'ym-button'), __('Você tem certeza que deseja excluir o # %s?', $tipoPessoa['TipoPessoa']['id'])); ?></li> 
		<li><?php echo $this->Html->link(__('Listar Tipo Pessoas'), array('action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Tipo Pessoa'), array('action' => 'add'), array('class'=>'ym-button')); ?></li> 
</ul>
   </div>
</div>



  <div class="span8" >
    <div class="tipoPessoas view ym-cbox">
      <h2><?php  echo __('Tipo Pessoa');?></h2>
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
			<?php echo h($tipoPessoa['TipoPessoa']['id']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Descrição'); ?></td>
			<td>
			<?php echo h($tipoPessoa['TipoPessoa']['descricao']); ?>
			&nbsp;
		</td>
		</tr>        </tbody>	
	</table>	
</div>




<!-- inicio -->
<!-- fim -->















</div>

</div>








