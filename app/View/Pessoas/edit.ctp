
<div class="row">

    <div class="span4" >
    
        <div class="actions well">
	 
        <ul class="nav nav-list">
        
        <li class='nav-header'><?php echo __('Ações'); ?></li>
        
        		        <li><?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $this->Form->value('Pessoa.id')), array('class'=>''), __('Você tem certeza que deseja excluir o # %s?', $this->Form->value('Pessoa.id'))); ?></li>
        		        <li><?php echo $this->Html->link(__('Listar Pessoas'), array('action' => 'index'), array('class'=>''));?></li>
        <li class='nav-header'><?php echo __('Ramo Atividades'); ?></li>		<li><?php echo $this->Html->link(__('Listar Ramo Atividades'), array('controller' => 'ramo_atividades', 'action' => 'index'), array('class'=>'')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Ramo Atividade'), array('controller' => 'ramo_atividades', 'action' => 'add'), array('class'=>'')); ?></li> 
<li class='nav-header'><?php echo __('Tipo Pessoas'); ?></li>		<li><?php echo $this->Html->link(__('Listar Tipo Pessoas'), array('controller' => 'tipo_pessoas', 'action' => 'index'), array('class'=>'')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Tipo Pessoa'), array('controller' => 'tipo_pessoas', 'action' => 'add'), array('class'=>'')); ?></li> 
<li class='nav-header'><?php echo __('Contratos'); ?></li>		<li><?php echo $this->Html->link(__('Listar Contratos'), array('controller' => 'contratos', 'action' => 'index'), array('class'=>'')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Contrato'), array('controller' => 'contratos', 'action' => 'add'), array('class'=>'')); ?></li> 
<li class='nav-header'><?php echo __('Pessoas Conta Correntes'); ?></li>		<li><?php echo $this->Html->link(__('Listar Pessoas Conta Correntes'), array('controller' => 'pessoas_conta_correntes', 'action' => 'index'), array('class'=>'')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Conta Corrente'), array('controller' => 'pessoas_conta_correntes', 'action' => 'add'), array('class'=>'')); ?></li> 
<li class='nav-header'><?php echo __('Pessoas Contatos'); ?></li>		<li><?php echo $this->Html->link(__('Listar Pessoas Contatos'), array('controller' => 'pessoas_contatos', 'action' => 'index'), array('class'=>'')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Contato'), array('controller' => 'pessoas_contatos', 'action' => 'add'), array('class'=>'')); ?></li> 
<li class='nav-header'><?php echo __('Pessoas Documentos'); ?></li>		<li><?php echo $this->Html->link(__('Listar Pessoas Documentos'), array('controller' => 'pessoas_documentos', 'action' => 'index'), array('class'=>'')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Documento'), array('controller' => 'pessoas_documentos', 'action' => 'add'), array('class'=>'')); ?></li> 
<li class='nav-header'><?php echo __('Pessoas Enderecos'); ?></li>		<li><?php echo $this->Html->link(__('Listar Pessoas Enderecos'), array('controller' => 'pessoas_enderecos', 'action' => 'index'), array('class'=>'')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Endereco'), array('controller' => 'pessoas_enderecos', 'action' => 'add'), array('class'=>'')); ?></li> 
<li class='nav-header'><?php echo __('Pessoas Iterações'); ?></li>		<li><?php echo $this->Html->link(__('Listar Pessoas Iterações'), array('controller' => 'pessoas_iteracoes', 'action' => 'index'), array('class'=>'')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Iteração'), array('controller' => 'pessoas_iteracoes', 'action' => 'add'), array('class'=>'')); ?></li> 
        
        </ul>
	 
        </div>
    
    
    
    </div>

    <div class="span8" >   
    
    
    <h4 class="ym-fbox-heading"><?php echo __('Editar Pessoa'); ?></h4>
    
            <div class="pessoas form">
        <div class="form">
        <?php echo $this->Form->create('Pessoa', array(
        'inputDefaults' => array(     
            'div'   => false,
            # define error defaults for the form
            'error' => array(
              'wrap'  => 'span',
              'class' => 'error'
            )
        )
    ));?>
	        
		        <h6><?php echo __('Dados Pessoa'); ?></h6>
        	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('ramo_atividade_id');
		echo $this->Form->input('tipo_pessoa_id');
		echo $this->Form->input('nome');
		echo $this->Form->input('fone1');
		echo $this->Form->input('fone2');
		echo $this->Form->input('email');
		echo $this->Form->input('website');
		echo $this->Form->input('data_cadastro');
		echo $this->Form->input('data_alteracao');
	?>
	    
	        <div class="">
              <input type="submit" class="btn" value="Enviar" id="submit" name="Enviar" />
              <input type="reset" class="btn" value="Limpar" id="reset" name="Limpar" />              
            </div>
	    
	    
        <?php echo $this->Form->end();?>
        </div>
        </div>
    
    
    </div>    
    
</div>







