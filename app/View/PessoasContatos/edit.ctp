
<div class="row">

    <div class="span4" >
    
        <div class="actions well">
	 
        <ul class="nav nav-list">
        
        <li class='nav-header'><?php echo __('Ações'); ?></li>
        
        		        <li><?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $this->Form->value('PessoasContato.id')), array('class'=>''), __('Você tem certeza que deseja excluir o # %s?', $this->Form->value('PessoasContato.id'))); ?></li>
        		        <li><?php echo $this->Html->link(__('Listar Pessoas Contatos'), array('action' => 'index'), array('class'=>''));?></li>
        <li class='nav-header'><?php echo __('Pessoas'); ?></li>		<li><?php echo $this->Html->link(__('Listar Pessoas'), array('controller' => 'pessoas', 'action' => 'index'), array('class'=>'')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Pessoa'), array('controller' => 'pessoas', 'action' => 'add'), array('class'=>'')); ?></li> 
        
        </ul>
	 
        </div>
    
    
    
    </div>

    <div class="span8" >   
    
    
    <h4 class="ym-fbox-heading"><?php echo __('Editar Pessoas Contato'); ?></h4>
    
            <div class="pessoasContatos form">
        <div class="form">
        <?php echo $this->Form->create('PessoasContato', array(
        'inputDefaults' => array(     
            'div'   => false,
            # define error defaults for the form
            'error' => array(
              'wrap'  => 'span',
              'class' => 'error'
            )
        )
    ));?>
	        
		        <h6><?php echo __('Dados Pessoas Contato'); ?></h6>
        	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('pessoa_id');
		echo $this->Form->input('nome');
		echo $this->Form->input('cargo');
		echo $this->Form->input('email');
		echo $this->Form->input('fone1');
		echo $this->Form->input('fone2');
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







