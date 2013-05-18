<div class="row-fluid">
    <div class="span4">
        <div class="actions well">
        
	        <ul class="nav nav-list">
	        
	        	<li class='nav-header'><?php echo __('Ações'); ?></li>
        
		        <li><?php echo $this->Html->link(__('Novo Pessoas Endereco'), array('action' => 'add')); ?></li>        <li class='nav-header'><?php echo __('Pessoas'); ?></li>		<li><?php echo $this->Html->link(__('Listar Pessoas'), array('controller' => 'pessoas', 'action' => 'index')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Pessoa'), array('controller' => 'pessoas', 'action' => 'add')); ?></li> 
        
        	</ul>
	        
        </div>
    </div>
    <div class="span8" >
        <div class="pessoasEnderecos index">
	        <h2><?php echo __('Pessoas Enderecos');?></h2>
	        <table class="table table-striped">
	        <tr>
	        		        <th><?php echo $this->Paginator->sort('id');?></th>
	        		        <th><?php echo $this->Paginator->sort('pessoa_id');?></th>
	        		        <th><?php echo $this->Paginator->sort('logradouro');?></th>
	        		        <th><?php echo $this->Paginator->sort('numero');?></th>
	        		        <th><?php echo $this->Paginator->sort('complemento');?></th>
	        		        <th><?php echo $this->Paginator->sort('cep');?></th>
	        		        <th><?php echo $this->Paginator->sort('bairro');?></th>
	        		        <th><?php echo $this->Paginator->sort('cidade');?></th>
	        		        <th><?php echo $this->Paginator->sort('estado');?></th>
	        		        <th class="actions"><?php echo __('Ações');?></th>
	        </tr>
	        <?php foreach ($pessoasEnderecos as $pessoasEndereco): ?>
	<tr>
		<td><?php echo h($pessoasEndereco['PessoasEndereco']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pessoasEndereco['Pessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $pessoasEndereco['Pessoa']['id'])); ?>
		</td>
		<td><?php echo h($pessoasEndereco['PessoasEndereco']['logradouro']); ?>&nbsp;</td>
		<td><?php echo h($pessoasEndereco['PessoasEndereco']['numero']); ?>&nbsp;</td>
		<td><?php echo h($pessoasEndereco['PessoasEndereco']['complemento']); ?>&nbsp;</td>
		<td><?php echo h($pessoasEndereco['PessoasEndereco']['cep']); ?>&nbsp;</td>
		<td><?php echo h($pessoasEndereco['PessoasEndereco']['bairro']); ?>&nbsp;</td>
		<td><?php echo h($pessoasEndereco['PessoasEndereco']['cidade']); ?>&nbsp;</td>
		<td><?php echo h($pessoasEndereco['PessoasEndereco']['estado']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $pessoasEndereco['PessoasEndereco']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $pessoasEndereco['PessoasEndereco']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $pessoasEndereco['PessoasEndereco']['id']), null, __('Você tem certeza que deseja excluir o # %s?', $pessoasEndereco['PessoasEndereco']['id'])); ?>
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
