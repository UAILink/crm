<div class="row-fluid">
    <div class="span4">
        <div class="actions well">
        
	        <ul class="nav nav-list">
	        
	        	<li class='nav-header'><?php echo __('Ações'); ?></li>
        
		        <li><?php echo $this->Html->link(__('Novo Pessoas Documento'), array('action' => 'add')); ?></li>        <li class='nav-header'><?php echo __('Tipo Documentos'); ?></li>		<li><?php echo $this->Html->link(__('Listar Tipo Documentos'), array('controller' => 'tipo_documentos', 'action' => 'index')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Tipo Documento'), array('controller' => 'tipo_documentos', 'action' => 'add')); ?></li> 
<li class='nav-header'><?php echo __('Pessoas'); ?></li>		<li><?php echo $this->Html->link(__('Listar Pessoas'), array('controller' => 'pessoas', 'action' => 'index')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Pessoa'), array('controller' => 'pessoas', 'action' => 'add')); ?></li> 
        
        	</ul>
	        
        </div>
    </div>
    <div class="span8" >
        <div class="pessoasDocumentos index">
	        <h2><?php echo __('Pessoas Documentos');?></h2>
	        <table class="table table-striped">
	        <tr>
	        		        <th><?php echo $this->Paginator->sort('id');?></th>
	        		        <th><?php echo $this->Paginator->sort('numero');?></th>
	        		        <th><?php echo $this->Paginator->sort('tipo_documento_id');?></th>
	        		        <th><?php echo $this->Paginator->sort('pessoa_id');?></th>
	        		        <th class="actions"><?php echo __('Ações');?></th>
	        </tr>
	        <?php foreach ($pessoasDocumentos as $pessoasDocumento): ?>
	<tr>
		<td><?php echo h($pessoasDocumento['PessoasDocumento']['id']); ?>&nbsp;</td>
		<td><?php echo h($pessoasDocumento['PessoasDocumento']['numero']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pessoasDocumento['TipoDocumento']['descricao'], array('controller' => 'tipo_documentos', 'action' => 'view', $pessoasDocumento['TipoDocumento']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pessoasDocumento['Pessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $pessoasDocumento['Pessoa']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $pessoasDocumento['PessoasDocumento']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $pessoasDocumento['PessoasDocumento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $pessoasDocumento['PessoasDocumento']['id']), null, __('Você tem certeza que deseja excluir o # %s?', $pessoasDocumento['PessoasDocumento']['id'])); ?>
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
