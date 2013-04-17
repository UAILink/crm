
<div class="ym-column">
    <div class="ym-col1" >   
    
    
    <h4 class="ym-fbox-heading"><?php echo __('Incluir Pessoas Contato'); ?></h4>
    
            <div class="pessoasContatos form ym-cbox">
        <div class="ym-form ym-inline">
        <?php echo $this->Form->create('PessoasContato', array(
        'inputDefaults' => array(     
            'div'   => 'ym-fbox-text',
            # define error defaults for the form
            'error' => array(
              'wrap'  => 'span',
              'class' => 'ym-error'
            )
        )
    ));?>
	        
		        <h5><?php echo $pessoa['Pessoa']['nome'] ?><h5>
		        <h6 class="ym-fbox-heading"><?php echo __('Dados Contato'); ?></h6>
        	<?php
		
		echo $this->Form->input('pessoa_id', array('type' => 'hidden', 'value' => $pessoa['Pessoa']['id']));
		echo $this->Form->input('nome');
		echo $this->Form->input('cargo');
		echo $this->Form->input('email');
		echo $this->Form->input('fone1');
		echo $this->Form->input('fone2');
	?>
	    
	        <div class="ym-fbox-button">
              <input type="submit" class="ym-button" value="Enviar" id="submit" name="Enviar" />
              <input type="reset" class="ym-button" value="Limpar" id="reset" name="Limpar" />              
            </div>
	    
	    
        <?php echo $this->Form->end();?>
        </div>
        </div>
    
    
    </div>    
    <div class="ym-col3" >
    
        <div class="actions ym-cbox">
	        <h4><?php echo __('Ações'); ?></h4>
	 

        		        <?php echo $this->Html->link(__('Listar Pessoas Contatos'), array('action' => 'index'), array('class'=>'ym-button'));?>        <?php echo __('<h6>Pessoas</h6>'); ?>		<?php echo $this->Html->link(__('Listar Pessoas'), array('controller' => 'pessoas', 'action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Pessoa'), array('controller' => 'pessoas', 'action' => 'add'), array('class'=>'ym-button')); ?> 
	 
        </div>
    
    
    
    </div>
</div>







