
<div class="row">

    <div class="span4" >
    
        <div class="actions well">
	 
        <ul class="nav nav-list">
        
        <li class='nav-header'><?php echo __('Ações'); ?></li>
        
        		        <li><?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $this->Form->value('TipoPessoa.id')), array('class'=>''), __('Você tem certeza que deseja excluir o # %s?', $this->Form->value('TipoPessoa.id'))); ?></li>
        		        <li><?php echo $this->Html->link(__('Listar Tipo Pessoas'), array('action' => 'index'), array('class'=>''));?></li>
                
        </ul>
	 
        </div>
    
    
    
    </div>

    <div class="span8" >   
    
    
    <h4 class="ym-fbox-heading"><?php echo __('Editar Tipo Pessoa'); ?></h4>
    
            <div class="tipoPessoas form">
        <div class="form">
        <?php echo $this->Form->create('TipoPessoa', array(
        'inputDefaults' => array(     
            'div'   => false,
            # define error defaults for the form
            'error' => array(
              'wrap'  => 'span',
              'class' => 'error'
            )
        )
    ));?>
	        
		        <h6><?php echo __('Dados Tipo Pessoa'); ?></h6>
        	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descricao');
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







